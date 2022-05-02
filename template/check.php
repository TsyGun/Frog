<?php 
global $pdo;
$pdo = new \PDO(
    'mysql:host=localhost:3306;dbname=register-bg;charset=UTF8',
    "root",
    ""
);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);

if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
    echo"Invalid login length";
    exit();
}
if(mb_strlen($pass) < 5 || mb_strlen($pass) > 40) {
    echo"Invalid password length";
    exit();
}

$pdo->query("INSERT INTO `users` (`id`, `login`, `pass`)
VALUES('$login', '$pass')");

$pdo = close();
header('Location: /');

?>