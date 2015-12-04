<?php
function getDatabase()
{
    $optn = array (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',);
    $bdd = new PDO("mysql:host=".$dbhost.";dbname=".$dbname, $dbuser, $dbpass, $optn);
    return $bdd;
}
?>


