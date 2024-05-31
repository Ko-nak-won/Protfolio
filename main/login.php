<?php
session_start();

$users = [
    'user1' => 'password1',
    'user2' => 'password2',
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    if (isset($users[$username]) && $users[$username] == $password) {
        $_SESSION['username'] = $username;
        echo "로그인 성공! 환영합니다, $username.";
    } else {
        echo "잘못된 사용자 이름 또는 비밀번호입니다.";
    }
} else {
    header("Location: index.php");
    exit();
}
?>
