<?php
    define('USER', 'root');
    define('PASSWORD', '');
    define('HOST', 'localhost');
    define('DATABASE', 'test');
    try {
        $connection = new PDO(
            'mysql:host=localhost:3306;dbname=register;charset=UTF8',"root","");
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }
?>