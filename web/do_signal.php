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
    
    $select = -1;

    for($i = 1; $i <= intval($nb); $i++)
    {
        echo "<br>i is : " . $i . "<br>";

        if(isset($_POST["$i"]))
        {
            echo "selected is : $i";
            $select = $i;
        }
        
    }

    $latitude = 0; $longitude = 0;
    if(isset($_POST["lat"]))
    {
        echo "latitude:". $_POST['lat'] . "<br>";
        $latitude = $_POST['lat'];

    }

    if(isset($_POST["long"]))
    {
        echo "longitude:". $_POST['long'] . "<br>"; 
        $longitude = $_POST['long'];
    }

    $commentary = "none";

    if(isset($_POST["coms"]))
    {
        $commentary = $_POST["coms"];
    }


    $prepared = $bdd->prepare("INSERT INTO `Signalements` (SigType, GPS_Lat, GPS_Long, Comments) VALUES(:type, :latitude, :longitude, :comments)");
    $prepared->bindParam(':type', $ptype);
    $prepared->bindParam(':latitude', $plat);
    $prepared->bindParam(':longitude', $plong);
    $prepared->bindParam(':comments', $pcom);

    $ptype = $select;
    $plat = $latitude;
    $plong = $longitude;
    $pcom = $commentary;
    $prepared->execute();
    
    echo "<strong>VOTRE SIGNALEMENT GÉOLOCALISÉ A BIEN ÉTÉ PRIS EN COMPTE</strong>";
}

?>


<script>
    window.setTimeout(function()
    {
        window.location.href = "index.php";
    }, 1000);
</script>
