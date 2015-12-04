<?php
require_once("config.php");
$optn = array (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',);
/*
try
{
    $bdd = new PDO("mysql:host=".$dbhost.";dbname=".$dbname, $dbuser, $dbpass, $optn);
    echo "config base = ok";
}
catch (Exception $e)
{
    die('Error : ' . $e->getMessage());
}
 */

function getDatabase()
{
    $optn = array (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',);
    $bdd = new PDO("mysql:host=".$dbhost.";dbname=".$dbname, $dbuser, $dbpass, $optn);
    return $bdd;
}
?>
