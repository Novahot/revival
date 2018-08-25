<?php
$host="localhost";
$user="nova";
$pass="Human1ty";
$dbname="revival";

try
{
	$yhteys=new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
}
catch(PDOException $e)
{
	echo $e->getMessage();
}
?>
