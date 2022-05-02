<?php 
include_once "db.php";
require_once "auth/libs/rb.php";

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'search');

global $mysqli;
$mysqli = new mysqli ("localhost", "root", "", "search");



function search ($query) 
{ 
    $query = trim($query); 
    $query = htmlspecialchars($query);

    if (!empty($query)) 
    { 
        if (strlen($query) < 3) {
            $text = '<p>Слишком короткий поисковый запрос.</p>';
        } else if (strlen($query) > 128) {
            $text = '<p>Слишком длинный поисковый запрос.</p>';
        } else { 
            $q = "SELECT `page_id`, `title`, `desc`, `title_link`, `category`, `uniq_id`
                  FROM `test` WHERE `desc` LIKE '%$query%'
                  OR `title` LIKE '%$query%' ";
            global $mysqli;
            $result = $mysqli->query($q);

            if (mysqli_affected_rows($mysqli) > 0) { 
                $row = mysqli_fetch_assoc($result); 
                $num = mysqli_num_rows($result);

                $text = '<p>По запросу <b>'.$query.'</b> найдено совпадений: '.$num.'</p>';
                
            } else {
                $text = '<p>По вашему запросу ничего не найдено.</p>';
            }
        } 
    } else {
        $text = '<p>Задан пустой поисковый запрос.</p>';
    }

    return $text; 
} 

if (!empty($_GET['search'])) { 

    echo search ($_GET['search']); 
    
    
}
?>