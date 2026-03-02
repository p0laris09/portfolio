<?php
require '../../vendor/autoload.php';
require 'firestore_client.php'; 

use Google\Cloud\Firestore\FirestoreClient;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Exception\Auth\UserNotFound;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function getTotalRegisteredUsers() {
    try {
        // ✅ Initialize Firestore
        $firestore = setup_client_create('auth-mellow');

        // ✅ Initialize Firebase Auth
        $serviceAccountPath = getenv('FIREBASE_SERVICE_ACCOUNT');
        if (!$serviceAccountPath) {
            throw new Exception('Missing FIREBASE_SERVICE_ACCOUNT');
        }

        $factory = (new Factory)->withServiceAccount($serviceAccountPath);
        $auth = $factory->createAuth();

        // ✅ Fetch total registered users from Firestore
        $usersCollection = $firestore->collection('users');
        $userDocuments = $usersCollection->documents();

        $totalUsers = iterator_count($userDocuments); // Ensures correct total count
        $activeUsers = 0;
        $inactiveUsers = 0;

        $userList = [];
        $threeMonthsAgo = strtotime('-3 months');

        error_log("Total users retrieved from Firestore: $totalUsers");

        foreach ($userDocuments as $doc) {
            $userId = $doc->id();

            try {
                // ✅ Get user from Firebase Auth
                $user = $auth->getUser($userId);

                if ($user->disabled) {
                    error_log("User is disabled: $userId");
                    continue; // Skip disabled users
                }

                $createdAt = $user->metadata->createdAt 
                    ? date('Y-m-d H:i:s', $user->metadata->createdAt->getTimestamp()) 
                    : 'N/A';

                $lastSignIn = $user->metadata->lastLoginAt 
                    ? date('Y-m-d H:i:s', $user->metadata->lastLoginAt->getTimestamp()) 
                    : 'N/A';

                // ✅ Get user details from Firestore
                $userData = $doc->data();
                $firstName = $userData['firstName'] ?? '';
                $middleName = $userData['middleName'] ?? '';
                $lastName = $userData['lastName'] ?? '';

                // ✅ Format name as "firstName middleName(initial) lastName"
                $formattedName = trim($firstName);
                if (!empty($middleName)) {
                    $formattedName .= ' ' . strtoupper(substr($middleName, 0, 1)) . '.';
                }
                if (!empty($lastName)) {
                    $formattedName .= ' ' . $lastName;
                }

                // ✅ Determine user status
                $status = 'Inactive'; // Default to inactive

                if ($user->metadata->lastLoginAt) {
                    // Convert lastLoginAt to a timestamp
                    $lastSignInTimestamp = $user->metadata->lastLoginAt->getTimestamp();

                    // Check if the last sign-in is within the last three months
                    if ($lastSignInTimestamp >= $threeMonthsAgo) {
                        $status = 'Active';
                        $activeUsers++;
                    } else {
                        $inactiveUsers++;
                    }
                } else {
                    // If lastLoginAt is not set, consider the user inactive
                    $inactiveUsers++;
                }

                // ✅ Add user to list
                $userList[] = [
                    'id' => $user->uid,
                    'name' => $formattedName ?: 'N/A',
                    'email' => $user->email ?? 'N/A',
                    'status' => $status,
                    'registrationDate' => $createdAt,
                    'lastLogin' => $lastSignIn
                ];

            } catch (UserNotFound $e) {
                error_log("User not found in Firebase Auth: $userId");
            } catch (Exception $e) {
                error_log("Failed to get user data: " . $e->getMessage());
            }
        }

        return [
            'totalUsers' => $totalUsers,
            'activeUsers' => $activeUsers,
            'inactiveUsers' => $inactiveUsers,
            'users' => $userList
        ];
    } catch (Exception $e) {
        http_response_code(500);
        error_log('Error fetching data: ' . $e->getMessage());
        return ['error' => 'Failed to fetch data: ' . $e->getMessage()];
    }
}

header('Content-Type: application/json');
$result = getTotalRegisteredUsers();

echo json_encode($result, JSON_UNESCAPED_UNICODE);
