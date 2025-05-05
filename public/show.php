<?php
require_once __DIR__ . '/../includes/db.php';
include __DIR__ . '/../templates/header.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    echo '記事IDが指定されていません。';
    exit;
}

$stmt = $pdo->prepare('SELECT * FROM posts WHERE id = ?');
$stmt->execute([$id]);
$post = $stmt->fetch();

if (!$post) {
    echo '記事が見つかりません。';
    exit;
}
?>

<h2><?= htmlspecialchars($post['title']) ?></h2>
<p><?= nl2br(htmlspecialchars($post['content'])) ?></p>
<p>作成日時: <?= htmlspecialchars($post['created_at']) ?></p>

<a href="index.php">← 記事一覧に戻る</a>

<?php include __DIR__ . '/../templates/footer.php'; ?>
