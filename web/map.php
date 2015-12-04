
 <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
          height: 50%;
            width: 100%
            
                    }
                        </style>
      
<div id="map"></div>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDT3jzcAZFKbIUUBFluxw0lQeNgdWj5KjY&callback=initMap" async defer
  type="text/javascript"></script>
<script>

var map;
function initMap() {
      map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: 48.8553, lng: 2.346},
                  zoom: 11
});


<?php
require_once("database.php");
$bdd = getDatabase();
$places = $bdd->query("SELECT * FROM `Signalements`");

while($signalement = $places->fetch())
{
?>
    new google.maps.Marker({
    position: new google.maps.LatLng(<?php echo $signalement["GPS_Lat"];?> , <?php echo $signalement["GPS_Long"];?>),
        title: 
    
    
"<?php 
    if($signalement["SigType"] == "1") echo "Attentat Signalé le ";
    else echo "Catastrophe Naturelle Signalée le";
        echo " " . $signalement["Date"];
?>"


}).setMap(map);
<?php
}

?>
}


</script>
