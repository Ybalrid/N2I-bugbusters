<?php 
require_once("database.php");

$bdd = getDatabase();

$type_statement = $bdd->query("SELECT * FROM `Types`");


while($type = $type_statement->fetch())
{
?>
    <button onclick="location.href='do_signal.php?type=<?php echo $type['ID'];?>'" >   
<?php echo $type['Name']; ?>
</button>
<?php
}
?>
