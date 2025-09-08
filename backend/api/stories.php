<?php
header('Content-Type: application/json');
// Enable error reporting for debugging (remove in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../config/Database.php';

try {
    $db = (new Database())->getConnection();
    $stmt = $db->query("SELECT * FROM stories ORDER BY id DESC LIMIT 10");
    $stories = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($stories);
} catch (Exception $e) {
    echo json_encode([]);
}
