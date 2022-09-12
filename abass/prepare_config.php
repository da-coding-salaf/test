<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$servername = "localhost";
$username = "dacoding_unifemga";
$password = "_O(T,ncwd9uv";
$dbname = "dacoding_unifemga";

// Create connection
try{
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8mb4");
}
 catch (Exception $e) {
	error_log($e->getMessage());
	echo $e->getMessage().'1266.4.5.7.8';
	echo "<br>";
	exit("Error connecting to the database");	
	}



?>