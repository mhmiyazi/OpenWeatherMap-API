<?php
	//Database Host
	$servername = "localhost";
	//UserName
	$username = "root";
	//Password
	$password = "";
	//Database Name
	$dbname = "tech_evan_weather";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
?>