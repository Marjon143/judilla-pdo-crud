<?php
// config.php

$host = 'localhost';
$dbname = 'marjon';
$username = 'root';
$password = '';

// $host = 'localhost';
// $dbname = 'u593341949_db_judilla';
// $username = 'u593341949_dev_judilla';
// $password = '20191336Judilla';

$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}
?>
