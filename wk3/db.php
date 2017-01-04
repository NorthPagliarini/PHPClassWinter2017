<?php
$username = "shop";
$password = "se266";
$dsn = "mysql:host=localhost;dbname=my_guitar_shop1";
try {
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("There was a problem connecting to the database. Sorry. Contact the admin.");
}
?>