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
        <strong><a href="show.php?id=<?= $post['id'] ?>"><?= htmlspecialchars($post['title']) ?></a></strong><br>
        <small>投稿日: <?= htmlspecialchars($post['created_at']) ?></small><br>
        <?php if (isset($_SESSION['user_id'])): ?>
            <a href="edit.php?id=<?= $post['id'] ?>"><button>編集</button></a>
            <a href="delete.php?id=<?= $post['id'] ?>" onclick="return confirm('削除しますか？');"><button>削除</button></a>
        <?php endif; ?>
    </li>
<?php endforeach; ?>
</ul>

<a href="new.php"><button>新規投稿</button></a>

<?php include __DIR__ . '/../templates/footer.php'; ?>
