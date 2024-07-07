<?php
$host = 'localhost';
$db = 'db_management';
$user = 'root';
$pass = '';

$dsn = "mysql:host=$host;dbname=$db;charsetutf8";
try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>