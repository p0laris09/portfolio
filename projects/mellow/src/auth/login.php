<?php
session_start();

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['user_id'])) {
    $_SESSION['user_id'] = $data['user_id'];
    http_response_code(200);
} else {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid user ID']);
}