<?php
require_once dirname(__DIR__) . '/app/config/db.php';

try {
    $conn = (new Database())->connect();
    echo 'Database connection successful: ' . $conn->host_info;
}   catch (Throwable $e) {
    echo 'Database connection failed: ' . $e->getMessage();
}