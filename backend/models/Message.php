<?php
// backend/models/Message.php
require_once __DIR__ . '/../config/Database.php';

class Message {
    private $conn;
    private $table = 'messages';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create($data) {
        $query = "INSERT INTO " . $this->table . " (first_name, last_name, email, interest, message) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([
            $data['first_name'],
            $data['last_name'],
            $data['email'],
            $data['interest'],
            $data['message']
        ]);
    }
}