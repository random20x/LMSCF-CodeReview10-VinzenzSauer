<?php
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'cr10_vinzenz_sauer_biglibrary';

	$conn = new mysqli($hostname, $username, $password, $database);

	if($conn->connect_error) {
		die("Connection failed : " . $conn->connect_error);
	}
 ?>