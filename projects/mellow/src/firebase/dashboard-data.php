<?php
require '../../vendor/autoload.php';
require 'firestore_client.php';

use Google\Cloud\Firestore\FirestoreClient;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Exception\Auth\UserNotFound;

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

function getDashboardData() {
    try {
        $firestore = setup_client_create('auth-mellow');
        $serviceAccountPath = getenv('FIREBASE_SERVICE_ACCOUNT');
        if (!$serviceAccountPath) throw new Exception('Missing FIREBASE_SERVICE_ACCOUNT');

        $factory = (new Factory)->withServiceAccount($serviceAccountPath);
        $auth = $factory->createAuth();
        $usersCollection = $firestore->collection('users');

        // ✅ Fetch all users to count total users (minus 1 for admin)
        $totalUsersQuery = $usersCollection->documents();
        $totalUsers = iterator_count($totalUsersQuery) - 1;

        // ✅ Fetch latest 5 users
        $userDocuments = $usersCollection->orderBy('createdAt', 'DESC')->limit(5)->documents();

        $activeUsers = 0;
        $inactiveUsers = 0;
        $latestUsers = [];
        $threeMonthsAgo = strtotime('-3 months');

        foreach ($userDocuments as $doc) {
            $userId = $doc->id();

            try {
                $user = $auth->getUser($userId);
                if ($user->disabled) continue;

                $userData = $doc->data();
                $firstName = $userData['firstName'] ?? '';
                $lastName = $userData['lastName'] ?? '';
                $formattedName = trim("$firstName $lastName");

                // ✅ Determine if user is active/inactive
                if ($user->metadata->lastLoginAt) {
                    $lastSignInTimestamp = $user->metadata->lastLoginAt->getTimestamp();
                    if ($lastSignInTimestamp >= $threeMonthsAgo) {
                        $activeUsers++;
                    } else {
                        $inactiveUsers++;
                    }
                } else {
                    $inactiveUsers++;
                }

                $latestUsers[] = $formattedName ?: 'N/A';
            } catch (UserNotFound $e) {
                error_log("User not found in Firebase Auth: $userId");
            } catch (Exception $e) {
                error_log("Failed to get user data: " . $e->getMessage());
            }
        }

        // ✅ Get task data
        $tasksCollection = $firestore->collection('tasks');
        $taskDocuments = $tasksCollection->documents();

        $totalTasks = 0;
        $taskTypes = ['personal' => 0, 'duo' => 0, 'space' => 0];

        foreach ($taskDocuments as $doc) {
            $type = $doc->data()['taskType'] ?? 'personal';
            if (isset($taskTypes[$type])) $taskTypes[$type]++;
            $totalTasks++;
        }

        // ✅ Get space data
        $spacesCollection = $firestore->collection('spaces');
        $spacesDocuments = $spacesCollection->documents();

        $totalSpaces = 0;
        $spaceTypes = ['duo' => 0, 'space' => 0];

        foreach ($spacesDocuments as $doc) {
            $type = $doc->data()['spaceType'] ?? '';
            if (isset($spaceTypes[$type])) $spaceTypes[$type]++;
            $totalSpaces++;
        }

        // ✅ Get latest feedback data
        $feedbackCollection = $firestore->collection('feedback');
        $feedbackDocuments = $feedbackCollection->orderBy('timestamp', 'DESC')->limit(5)->documents();

        $latestFeedbacks = [];
        foreach ($feedbackDocuments as $doc) {
            $feedbackData = $doc->data();
            $latestFeedbacks[] = [
                'comment' => $feedbackData['comment'] ?? 'No feedback available',
                'rating' => $feedbackData['experience'] ?? 'No rating'
            ];
        }

        return [
            'totalUsers' => $totalUsers,
            'totalTasks' => $totalTasks,
            'totalSpaces' => $totalSpaces,
            'latestFeedbacks' => $latestFeedbacks,
            'latestUsers' => $latestUsers,
            'activeUsers' => [
                'series' => [$activeUsers, $inactiveUsers],
                'labels' => ['Active', 'Inactive']
            ],
            'taskTypes' => [
                'series' => array_values($taskTypes),
                'labels' => array_keys($taskTypes)
            ],
            'spaceTypes' => [
                'series' => array_values($spaceTypes),
                'labels' => array_keys($spaceTypes)
            ]
        ];
    } catch (Exception $e) {
        http_response_code(500);
        return ['error' => $e->getMessage()];
    }
}

echo json_encode(getDashboardData(), JSON_UNESCAPED_UNICODE);
