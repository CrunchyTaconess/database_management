<?php
include '../includes/db.php';

$sql = "SELECT posts.id, posts.title, posts.body, users.username, comments.comment FROM posts
        JOIN users ON posts.user_id = users.id
        LEFT JOIN comments ON posts.id = comments.post_id";
$stmt = $pdo->query($sql);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($results);
echo "</pre>";
?>