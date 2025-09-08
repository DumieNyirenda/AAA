<?php
header('Content-Type: application/json');
require_once '../config/Database.php';
try {
    $db = (new Database())->getConnection();
    $stmt = $db->query("SELECT * FROM messages ORDER BY created_at DESC LIMIT 50");
    $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Add 'name' field for frontend display
    foreach ($messages as &$msg) {
        $msg['name'] = $msg['first_name'] . ' ' . $msg['last_name'];
    }
    echo json_encode($messages);
} catch (Exception $e) {
    echo json_encode([]);
}
