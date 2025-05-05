<?php
require_once __DIR__ . '/../includes/db.php';
include __DIR__ . '/../templates/header.php';

$stmt = $pdo->query('SELECT * FROM posts ORDER BY created_at DESC');
$posts = $stmt->fetchAll();
?>

<h2>記事一覧</h2>
<ul>
<?php foreach ($posts as $post): ?>
    <li>
        <a href="show.php?id=<?= $post['id'] ?>"><?= htmlspecialchars($post['title']) ?></a>
        <?php if (isset($_SESSION['user_id'])): ?>
            [<a href="edit.php?id=<?= $post['id'] ?>">編集</a>]
            [<a href="delete.php?id=<?= $post['id'] ?>" onclick="return confirm('削除しますか？');">削除</a>]
        <?php endif; ?>
    </li>
<?php endforeach; ?>
</ul>

<a href="new.php">新規投稿</a>

<?php include __DIR__ . '/../templates/footer.php'; ?>
