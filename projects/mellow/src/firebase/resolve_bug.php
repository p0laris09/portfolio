<?php
require '../auth/userlog.php';
require '../firebase/firebase-config.php'; // Ensure this initializes Firestore
require 'firestore_client.php';

use Google\Cloud\Firestore\FirestoreClient;

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['bugId']) || empty($_POST['bugId'])) {
        echo json_encode(['success' => false, 'error' => 'Missing bugId']);
        exit;
    }

    $bugId = $_POST['bugId'];

    try {
        $firestore = new FirestoreClient();
        $docRef = $firestore->collection('bug_reports')->document($bugId);
        $snapshot = $docRef->snapshot();

        if ($snapshot->exists()) {
            $docRef->update([
                ['path' => 'status', 'value' => 'Resolved']
            ]);
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'error' => 'Bug not found']);
        }
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'error' => $e->getMessage()]);
    }
}
?>
