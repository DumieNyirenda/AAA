<?php
header('Content-Type: application/json');

// Database connection
require_once '../config/Database.php';

try {
    $db = (new Database())->getConnection();
    $stmt = $db->query("SELECT * FROM dashboard_stats LIMIT 1");
    $stats = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($stats) {
        echo json_encode([
            'systems_deployed' => (int)$stats['systems_deployed'],
            'students_reached' => (int)$stats['students_reached'],
            'schools_phase1' => (int)$stats['schools_phase1'],
            'districts_active' => (int)$stats['districts_active']
        ]);
    } else {
        echo json_encode([
            'systems_deployed' => 0,
            'students_reached' => 0,
            'schools_phase1' => 0,
            'districts_active' => 0
        ]);
    }
} catch (Exception $e) {
    echo json_encode([
        'systems_deployed' => 0,
        'students_reached' => 0,
        'schools_phase1' => 0,
        'districts_active' => 0
    ]);
}
?>