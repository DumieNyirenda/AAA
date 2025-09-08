<?php
// backend/api/contact.php
require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../models/Message.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    $db = (new Database())->getConnection();
    $messageModel = new Message($db);
    $success = $messageModel->create($input);
    echo json_encode(['success' => $success]);
    exit;
}

http_response_code(405);
echo json_encode(['error' => 'Method not allowed']);