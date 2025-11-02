<?php
require_once __DIR__ . '/../config/db.php';

class MenuItem {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function getAllMenuItems(): array {
        $query = "SELECT id, item_name, price, description FROM menu";
        $result = $this->conn->query($query);
        $menuItems = [];

        if ($result) {
        while ($row = $result->fetch_assoc()) {
            $menuItems[] = $row;
        }
    }
    return $menuItems;
    }        
}