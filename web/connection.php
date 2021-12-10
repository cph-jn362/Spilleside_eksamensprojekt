<?php

$dbhost = "johngeoffreynielsen.dk.mysql:3306";
$dbuser = "johngeoffreynielsen_dkarcadia";
$dbpass = "Midway2020";
$dbname = "johngeoffreynielsen_dkarcadia";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("failed to connect!");
}


?>