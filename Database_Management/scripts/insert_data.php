<?php
include '../includes/db.php';

//Insert users
$sql = "INSERT INTO users (username, password, email) VALUES ('user1', '".password_hash('password1', PASSWORD_BCRYPT)."', 'user1@example.com')";
$pdo->exec($sql);
$sql = "INSERT INTO users (username, password, email) VALUES ('user2', '".password_hash('password2', PASSWORD_BCRYPT)."', 'user2@example.com')";
$pdo->exec($sql);

//Insert posts
$sql = "INSERT INTO posts (user_id, title, body) VALUES (1, 'First Post', 'This is the body of the first post.')";
$pdo->exec($sql);
$sql = "INSERT INTO posts (user_id, title, body) VALUES (2, 'Second Post', 'This is the body of the second post.')";
$pdo->exec($sql);

//Insert comments
$sql = "INSERT INTO comments (post_id, user_id, comment) VALUES (1, 2, 'This is a comment on the first post by user2.')";
$pdo->exec($sql);
$sql = "INSERT INTO comments (post_id, user_id, comment) VALUES (2, 1, 'This is a comment on the second post by user1.')";
$pdo->exec($sql);

echo "Data inserted successfully.";
?>