<?php
include_once("./config.php");

function getDatabase()
{

    global $dbhost, $dbname, $dbuser, $dbpass;

    $optn = array (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',);
    $bdd = new PDO("mysql:host=".$dbhost.";dbname=".$dbname, $dbuser, $dbpass, $optn);
    return $bdd;
}
?>


