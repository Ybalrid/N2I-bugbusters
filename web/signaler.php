<?php 
require_once("database.php");

$bdd = getDatabase();

$type_statement = $bdd->query("SELECT * FROM `Types`");


?>
<form action="do_signal.php" method="post" id="geoform">

<input type="hidden" name="lat" value="0.0" id="theLat">
<input type="hidden" name="long" value="0.0" id="theLong">

<?php
while($type = $type_statement->fetch())
{
?>
    <input value="<?php echo $type['Name']; ?>" type="submit" name="<?php echo $type['ID'];?>">   

<?php
}


?>

<p>Commentaires optionels:</p>
<textarea name="coms"></textarea>
</form>
<?php
include ("geoloc.php");

?>
