<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ブログ練習</title>
</head>
<body>
    <h1>My Blog</h1>
    <?php if (isset($_SESSION['user_id'])): ?>
        <p>ようこそ！<a href="logout.php">ログアウト</a></p>
    <?php else: ?>
        <p><a href="login.php">ログイン</a></p>
    <?php endif; ?>
    <hr>
