<?php
// used to connect to the database
$host = "localhost";
$db_name = "uecs2094_pie";
$username = "root";
$password = "";
 

$con = mysqli_connect($host, $username, $password, $db_name);
//$con = new mysqli($host, $username, $password, $db_name);
 
if ($con === false)
{
	die("ERROR: Could not connect." .mysqli_connect_error());
	return mysqli_connect_error(); 
}

?>