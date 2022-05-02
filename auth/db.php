<?php    
require_once "libs/rb.php";
R::setup( 'mysql:host=localhost;dbname=cwa',
        'root', '' );
        if(!isset($_SESSION)) 
        { 
            session_start(); 
        } 
?>