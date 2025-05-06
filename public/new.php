<?php
require_once __DIR__ . '/../includes/auth.php';
checkLogin();
include __DIR__ . '/../templates/header.php';
?>

<h2>新規投稿</h2>
<form action="create.php" method="post">
    <label>タイトル:</label><br>
    <input type="text" name="title" required><br>
    <label>内容:</label><br>
    <textarea name="content" rows="10" required></textarea><br>
    <input type="submit" value="投稿">
</form>

<a href="index.php"><button>戻る</button></a>

<?php include __DIR__ . '/../templates/footer.php'; ?>
