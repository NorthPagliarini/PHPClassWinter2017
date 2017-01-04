<?php
$fName = $_GET['fName'];
$lName = $_GET['lName'];
$age = $_GET['age'];
$ip = $_SERVER['REMOTE_ADDR'];

echo "Welcome, $fName $lName, you are $age years old and are at $ip";
?>

<a href='namedemo.php?fName=Micky&lName=Mouse&age=100'>Click</a>