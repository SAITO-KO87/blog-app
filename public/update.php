<?php
require_once __DIR__ . '/../includes/auth.php';
checkLogin();
require_once __DIR__ . '/../includes/db.php';

$id = $_POST['id'] ?? null;
$title = $_POST['title'] ?? '';
$content = $_POST['content'] ?? '';

if ($id && $title && $content) {
    $stmt = $pdo->prepare('UPDATE posts SET title = ?, content = ? WHERE id = ?');
    $stmt->execute([$title, $content, $id]);
    header('Location: show.php?id=' . $id);
    exit;
} else {
    echo '全ての項目が必須です。';
}
