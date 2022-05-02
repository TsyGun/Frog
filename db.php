<?php

global $pdo;
$pdo = new \PDO(
    'mysql:host=localhost:3306;dbname=downhill;charset=UTF8',
    "root",
    ""
);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
function getCarouselCards(){

    global $pdo;
    $res = $pdo->query('select * from carousel_cards ;');

    $cards = [];
    while ($card = $res->fetch()){
        $cards[] = $card;
    }
    return $cards;
}

function getImageCards(){

    global $pdo;
    $res = $pdo->query('select * from image_cards ;');

    $imgs = [];
    while ($img = $res->fetch()){
        $imgs[] = $img;
    }

    return $imgs;
}
function getImagePrice(){

    global $pdo;
    $res = $pdo->query('select * from carousel_price ;');

    $imgs = [];
    while ($img = $res->fetch()){
        $imgs[] = $img;
    }

    return $imgs;
}
function getImageDert(){

    global $pdo;
    $res = $pdo->query('select * from carousel_dert ;');

    $imgs = [];
    while ($img = $res->fetch()){
        $imgs[] = $img;
    }

    return $imgs;
}
function getImageTwosaddle(){

    global $pdo;
    $res = $pdo->query('select * from carousel_two_saddle ;');

    $imgs = [];
    while ($img = $res->fetch()){
        $imgs[] = $img;
    }

    return $imgs;
}
?>
