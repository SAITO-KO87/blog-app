<?php
require '../config/db.php';
require '../templates/header.php';

$stmt = $pdo->query("SELECT * FROM posts ORDER BY created_at DESC");
$posts = $stmt->fetchAll();
?>

<a href="create.php">＋ 新規投稿</a>
<ul>
<?php foreach ($posts as $post): ?>
    <li><a href="show.php?id=<?= $post['id'] ?>"><?= htmlspecialchars($post['title']) ?></a></li>
<?php endforeach; ?>
</ul>

<?php require '../templates/footer.php'; ?>
