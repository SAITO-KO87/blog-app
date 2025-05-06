<?php
require_once __DIR__ . '/../includes/db.php';
include __DIR__ . '/../templates/header.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    echo '<p>記事IDが指定されていません。</p>';
    exit;
}

$stmt = $pdo->prepare('SELECT * FROM posts WHERE id = ?');
$stmt->execute([$id]);
$post = $stmt->fetch();

if (!$post) {
    echo '<p>記事が見つかりません。</p>';
    exit;
}
?>

<h2><?= htmlspecialchars($post['title']) ?></h2>
<p><?= nl2br(htmlspecialchars($post['content'])) ?></p>
<p><small>作成日時: <?= htmlspecialchars($post['created_at']) ?></small></p>

<a href="index.php"><button>記事一覧に戻る</button></a>

<?php include __DIR__ . '/../templates/footer.php'; ?>
