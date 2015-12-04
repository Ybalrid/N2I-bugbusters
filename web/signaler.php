<?php 
require_once("database.php");

$bdd = getDatabase();

$type_statement = $bdd->query("SELECT * FROM `Types`");


?>
<form action="do_signal.php" method="post" id="geoform">
<?php
while($type = $type_statement->fetch())
{
?>
    <input value="<?php echo $type['Name']; ?>" type="submit" name="<?php echo $type['ID'];?>">   

<?php
}


?>
</form>
<?php
include ("geoloc.php");

?>
