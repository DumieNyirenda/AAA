<?php
// backend/models/Donation.php
require_once __DIR__ . '/../config/Database.php';

class Donation {
    private $conn;
    private $table = 'donations';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create($data) {
        $query = "INSERT INTO " . $this->table . " (user_id, amount, method) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([
            $data['user_id'] ?? null,
            $data['amount'],
            $data['method'] ?? 'manual'
        ]);
    }
}