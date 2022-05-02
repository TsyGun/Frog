<?php
require_once "db.php";
require_once "libs/rb.php";
unset($_SESSION['logged_user']);
header('Location: /');

?>