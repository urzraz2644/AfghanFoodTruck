<?php
// app/config/db.php
declare(strict_types=1);

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

final class Database {
    private string $host = "127.0.0.1";
    private string $user = "root";
    private string $pass = "";
    private string $db = "afghan_food_truck";

    public function connect(): mysqli {
        $conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        $conn->set_charset('utfj8mb4');
        return $conn;
    }
}
