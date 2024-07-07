<?php
include '../includes/db.php';

$sql = "DELETE FROM comments WHERE id = 1";
$stmt = $pdo->prepare($sql);
$stmt->execute();

echo "Data deleted successfully.";
?>