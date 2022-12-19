<?php

require_once "../config.php";

try{
    $db = mysqli_connect(DB_HOST,DB_LOGIN,DB_PWD,DB_NAME,DB_PORT);
    mysqli_set_charset($db,DB_CHARSET);

}catch(Exception $e){
    exit (utf8_encode($e->getMessage()));
}

$sql = "SELECT * FROM `articles`";
$query1 = mysqli_query($db,$sql) or die('Erreur de $query1');
$resultat = mysqli_fetch_all($query1,MYSQLI_ASSOC);

var_dump($resultat);