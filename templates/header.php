<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ブログ練習</title>
    <link rel ="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <h1>My Blog</h1>
    <?php if (isset($_SESSION['user_id'])): ?>
        <p>ようこそ！ <a href="logout.php" style="color: #fff; text-decoration: underline;">ログアウト</a></p>
    <?php else: ?>
        <p><a href="login.php" style="color: #fff; text-decoration: underline;">ログイン</a></p>
    <?php endif; ?>
</header>
<div class="container">