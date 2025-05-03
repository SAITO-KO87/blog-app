<?php
require '../config/db.php';
require '../templates/header.php';

$id = $_GET['id']; // URLの?id= の値を取得
$stmt = $pdo->prepare("SELECT * FROM posts WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$post = $stmt->fetch(); // 1件だけ取得
?>

<h2><?= htmlspecialchars($post['title']) ?></h2>
<p><?= nl2br(htmlspecialchars($post['content'])) ?></p>

<a href="delete.php?id=<?= $post['id'] ?>">削除</a>
<a href="index.php">← 戻る</a>

<?php require '../templates/footer.php'; ?>
