<?php
include '../includes/db.php';

$sql = "UPDATE posts SET title = 'Updated Post Title' WHERE id = 1";
$stmt = $pdo->prepare($sql);
$stmt->execute();

echo "Data updated successfully.";
?>