<?php
// backend/api/add_partner.php
header('Content-Type: application/json');
require_once '../config/Database.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'error' => 'Invalid request']);
    exit;
}

$name = trim($_POST['name'] ?? '');
$type = trim($_POST['type'] ?? '');
$description = trim($_POST['description'] ?? '');
$programs = trim($_POST['programs'] ?? '');
$impact = trim($_POST['impact'] ?? '');
$icon = trim($_POST['icon'] ?? '');
$color = trim($_POST['color'] ?? '');

if (!$name || !$type || !$description || !$programs || !$impact || !$icon || !$color) {
    echo json_encode(['success' => false, 'error' => 'Missing required fields']);
    exit;
}

try {
    $db = (new Database())->getConnection();
    $stmt = $db->prepare('INSERT INTO partners1 (name, type, description, programs, impact, icon, color) VALUES (?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute([$name, $type, $description, $programs, $impact, $icon, $color]);
    echo json_encode(['success' => true]);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'error' => 'DB error']);
}
