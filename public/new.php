<?php
require_once __DIR__ . '/../includes/auth.php';
checkLogin();
include __DIR__ . '/../templates/header.php';
?>

<h2>新規投稿</h2>
<form action="create.php" method="post">
    タイトル: <input type="text" name="title"><br>
    内容:<br>
    <textarea name="content" rows="10" cols="50"></textarea><br>
    <input type="submit" value="投稿">
</form>

<a href="index.php">← 戻る</a>

<?php include __DIR__ . '/../templates/footer.php'; ?>
