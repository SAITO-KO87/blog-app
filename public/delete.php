<?php
require_once __DIR__ . '/../includes/auth.php';
checkLogin();
require_once __DIR__ . '/../includes/db.php';

$id = $_GET['id'] ?? null;

if ($id) {
    $stmt = $pdo->prepare('DELETE FROM posts WHERE id = ?');
    $stmt->execute([$id]);
    header('Location: index.php');
    exit;
} else {
    echo '記事IDが指定されていません。';
}
