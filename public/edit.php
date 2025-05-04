<?php
require_once __DIR__ . '/../includes/auth.php';
checkLogin();
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

<h2>編集: <?= htmlspecialchars($post['title']) ?></h2>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?= $post['id'] ?>">
    タイトル: <input type="text" name="title" value="<?= htmlspecialchars($post['title']) ?>"><br>
    内容:<br>
    <textarea name="content" rows="10" cols="50"><?= htmlspecialchars($post['content']) ?></textarea><br>
    <input type="submit" value="更新">
</form>

<a href="index.php">← 戻る</a>

<?php include __DIR__ . '/../templates/footer.php'; ?>
