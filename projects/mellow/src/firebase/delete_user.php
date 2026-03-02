<?php
require '../firebase/init.php';

$id = $_GET['id'];

try {
    $firestore->collection('users')->document($id)->delete();
    echo json_encode(["success" => true]);
} catch (Exception $e) {
    echo json_encode(["success" => false, "error" => $e->getMessage()]);
}
?>
