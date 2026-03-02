<?php
require '../firebase/init.php';

$id = $_GET['id'];

try {
    $docRef = $firestore->collection('users')->document($id);
    $snapshot = $docRef->snapshot();

    if ($snapshot->exists()) {
        $data = $snapshot->data();
        echo json_encode($data);
    } else {
        echo json_encode(["error" => "User not found"]);
    }
} catch (Exception $e) {
    echo json_encode(["error" => $e->getMessage()]);
}
?>
