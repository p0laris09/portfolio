<?php
require '../../vendor/autoload.php';
require 'firestore_client.php';

use Google\Cloud\Firestore\FirestoreClient;

if (!isset($_GET['college']) || !isset($_GET['program'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing parameters']);
    exit;
}

$college = $_GET['college'];
$program = $_GET['program'];

try {
    $firestore = setup_client_create('auth-mellow');

    $studentsRef = $firestore->collection('users');
    $query = $studentsRef
        ->where('college', '=', $college)
        ->where('program', '=', $program)
        ->documents();

    $students = [];

    foreach ($query as $doc) {
        $data = $doc->data();
        $students[] = [
            'id' => $doc->id(),
            'name' => $data['name'] ?? 'N/A'
        ];
    }

    header('Content-Type: application/json');
    echo json_encode($students, JSON_UNESCAPED_UNICODE);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}
