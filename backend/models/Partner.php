<?php
// backend/models/Partner.php
require_once __DIR__ . '/../config/Database.php';

class Partner {
    private $conn;
    private $table = 'partners';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create($data) {
        $query = "INSERT INTO " . $this->table . " (name, type, description) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([
            $data['name'],
            $data['type'] ?? 'other',
            $data['message'] ?? ''
        ]);
    }
}