<?php
require '../config/db.php';

$id = $_GET['id']; // URLのidを取得
$stmt = $pdo->prepare("DELETE FROM posts WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();

header('Location: index.php'); // 削除後にトップページへ
exit;
