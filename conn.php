<?php
$username = "exam";
$password = "summer16";
$dsn = "mysql:host=ict.neit.edu;dbname=world_x";
$db = new PDO($dsn, $username, $password);
try 
{
	$db = new PDO($dsn, $username, $password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERR<ODE_EXCEPTION);
}
catch(PDOException $e)
{
	die("There was a problem connecting to the database. Sorry, COntact the Admin.");
}

?>