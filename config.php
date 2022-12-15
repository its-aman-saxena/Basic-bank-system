<?php

	$servername = "localhost";
	$username = "id20012953_bankuser";
	$password = "Sql@9058235515";
	$dbname = "id20012953_bank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>