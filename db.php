<?php
$username = "shop";
$password = "se266";
$dsn = "mysql:host=localhost;dbname=my_guitar_shop1";
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