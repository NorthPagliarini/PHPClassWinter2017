<?php
require_once("conn.php");

$WantedCity = Barcelona;
$sql = "SELECT Name FROM city WHERE Name = $WantedCity";
$results = $conn->query($sql);
?>
<?php
	
echo $results;
	

?>
