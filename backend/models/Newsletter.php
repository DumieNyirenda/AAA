<?php
// backend/models/Newsletter.php
require_once __DIR__ . '/../config/Database.php';

class Newsletter {
    private $conn;
    private $table = 'newsletter_subscribers';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function subscribe($email) {
        $query = "INSERT INTO " . $this->table . " (email) VALUES (?) ON DUPLICATE KEY UPDATE email=email";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$email]);
    }
}