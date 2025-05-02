<?php
require 'db.php';

$title = $_POST['title'];
$content = $_POST['content'];

$sql = "INSERT INTO posts (title, content) VALUES (:title, :content)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':title', $title);
$stmt->bindParam(':content', $content);
$stmt->execute();

header('Location: index.php'); // 一覧ページに戻る
?>
