<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My Blog</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional: 独自CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="bg-dark text-white py-3 text-center">
    <h1>My Blog</h1>
    <?php if (isset($_SESSION['user_id'])): ?>
        <p><a href="logout.php" class="text-white text-decoration-underline">ログアウト</a></p>
    <?php else: ?>
        <p><a href="login.php" class="text-white text-decoration-underline">ログイン</a></p>
    <?php endif; ?>
</header>
<div class="container my-4">
