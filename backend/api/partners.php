<?php
// backend/api/partners.php
header('Content-Type: application/json');
require_once '../config/Database.php';

try {
    $db = (new Database())->getConnection();
    $stmt = $db->prepare('SELECT * FROM partners1 ORDER BY id ASC');
    $stmt->execute();
    $partners = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Parse programs and impact as arrays
    foreach ($partners as &$partner) {
        $partner['programs'] = array_map('trim', explode(',', $partner['programs']));
        $partner['impact'] = array_map('trim', explode(',', $partner['impact']));
    }
    echo json_encode($partners);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Failed to fetch partners']);
}
