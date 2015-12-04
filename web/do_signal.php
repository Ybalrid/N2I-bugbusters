<?php
require_once("database.php");
if(isset($_POST))
{
    echo "post is set<br>";

    $bdd = getDatabase();
 
    $counts = $bdd->query("SELECT COUNT(*) FROM `Types`");
    $count = $counts->fetch();
    $nb = $count["COUNT(*)"];
    echo "nb is : " . $nb;
    
    


    for($i = 1; $i <= intval($nb); $i++)
    {
        echo "<br>i is : " . $i . "<br>";

        if(isset($_POST["$i"]))
        {
            echo "selected is : $i";
        }
        
    }
}

?>
