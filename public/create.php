<?php require '../templates/header.php'; ?>

<form action="../actions/store.php" method="POST">
    <input type="text" name="title" placeholder="タイトル" required><br>
    <textarea name="content" placeholder="内容" required></textarea><br>
    <button type="submit">投稿</button>
</form>

<?php require '../templates/footer.php'; ?>
