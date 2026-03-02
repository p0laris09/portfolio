<?php
require '../../vendor/autoload.php';
require 'firestore_client.php';

use Google\Cloud\Firestore\FirestoreClient;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');

function fetch_bugs() {
    try {
        $firestore = new FirestoreClient();

        // ✅ Fetch Bug Reports Collection
        $bugsRef = $firestore->collection('bug_reports')->documents();
        $bugs = [];
        $totalBugs = 0;
        $pendingBugs = 0;
        $resolvedBugs = 0;

        foreach ($bugsRef as $bug) {
            $data = $bug->data();

            // ✅ Add to bugs list
            $bugs[] = [
                'id' => $bug->id(),
                'description' => $data['description'] ?? '',
                'email' => $data['email'] ?? '',
                'steps' => $data['steps'] ?? '',
                'imageUrl' => $data['imageUrl'] ?? '',
                'timestamp' => isset($data['timestamp']) 
                    ? $data['timestamp']->get()->format('Y-m-d H:i:s') 
                    : '',
                'status' => isset($data['status']) 
                    ? $data['status'] 
                    : 'Pending' // ✅ Default to 'Pending' if missing
            ];

            // ✅ Count Statistics
            $totalBugs++;
            if (isset($data['status']) && $data['status'] === 'Resolved') {
                $resolvedBugs++;
            } else {
                $pendingBugs++;
            }
        }

        // ✅ Return Data
        echo json_encode([
            'bugs' => $bugs,
            'totalBugs' => $totalBugs,
            'pendingBugs' => $pendingBugs,
            'resolvedBugs' => $resolvedBugs
        ]);

    } catch (Exception $e) {
        echo json_encode(['error' => $e->getMessage()]);
    }
}

fetch_bugs();
