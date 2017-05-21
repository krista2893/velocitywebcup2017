<?php
	/*
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "velocity_webcup";*/

	
	
	$servername = "localhost";
	$username = "wecupteam20";
	$password = "20iPFh.ftzxGL";
	$dbname = "wecupteam20";



	$conn = new mysqli($servername, $username, $password, $dbname);

		
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	} 
		
?>