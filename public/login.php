<?php
require_once __DIR__ . '/../config/config.php';  // セッション開始済
include __DIR__ . '/../templates/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // 仮の認証: username=admin, password=pass
    if ($username === 'admin' && $password === 'pass') {
        $_SESSION['user_id'] = 1;
        header('Location: index.php');
        exit;
    } else {
        echo 'ログイン失敗';
    }
}
?>

<h2>ログイン</h2>
<form method="post">
    ユーザー名: <input type="text" name="username"><br>
    パスワード: <input type="password" name="password"><br>
    <input type="submit" value="ログイン">
</form>

<?php include __DIR__ . '/../templates/footer.php'; ?>
