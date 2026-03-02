<?php
require __DIR__ . '/../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../..');
$dotenv->load();

$googleCredentials = realpath($_ENV['GOOGLE_APPLICATION_CREDENTIALS']);
$firebaseCredentials = realpath($_ENV['FIREBASE_SERVICE_ACCOUNT']);

if (!$googleCredentials || !file_exists($googleCredentials)) {
    die("GOOGLE_APPLICATION_CREDENTIALS file not found at $googleCredentials");
}

if (!$firebaseCredentials || !file_exists($firebaseCredentials)) {
    die("FIREBASE_SERVICE_ACCOUNT file not found at $firebaseCredentials");
}

putenv("GOOGLE_APPLICATION_CREDENTIALS=$googleCredentials");
putenv("FIREBASE_SERVICE_ACCOUNT=$firebaseCredentials");

use Google\Cloud\Firestore\FirestoreClient;

function setup_client_create($projectId) {
    return new FirestoreClient([
        'projectId' => $projectId,
        'transport' => 'rest', // ✅ Use REST transport
    ]);
}
?>