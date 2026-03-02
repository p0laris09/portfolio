<?php
require '../../vendor/autoload.php';
require 'firestore_client.php';

use Google\Cloud\Firestore\FirestoreClient;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');

function fetch_feedbacks() {
    try {
        $firestore = new FirestoreClient();

        // ✅ Fetch Feedbacks Collection
        $feedbacksRef = $firestore->collection('feedback')->documents();
        $feedbacks = [];
        $totalFeedback = 0;
        $totalRating = 0;

        foreach ($feedbacksRef as $feedback) {
            $data = $feedback->data();

            // ✅ Handle nullable fields
            $email = isset($data['email']) ? $data['email'] : 'No email provided';
            $comment = isset($data['comment']) ? $data['comment'] : 'No comment provided';
            $experience = isset($data['experience']) ? $data['experience'] : 0;
            $timestamp = isset($data['timestamp']) 
                ? $data['timestamp']->get()->format('Y-m-d H:i:s') 
                : '';
            $status = isset($data['status']) ? $data['status'] : 'Pending';

            // ✅ Add to feedback list
            $feedbacks[] = [
                'id' => $feedback->id(),
                'comment' => $comment,
                'experience' => $experience,
                'email' => $email,
                'timestamp' => $timestamp,
                'status' => $status
            ];

            // ✅ Count statistics
            $totalFeedback++;
            $totalRating += $experience;
        }

        // ✅ Return JSON response
        echo json_encode([
            'feedbacks' => $feedbacks,
            'totalFeedback' => $totalFeedback,
            'averageRating' => $totalFeedback > 0 ? round($totalRating / $totalFeedback, 2) : 0
        ]);

    } catch (Exception $e) {
        echo json_encode(['error' => $e->getMessage()]);
    }
}

fetch_feedbacks();
