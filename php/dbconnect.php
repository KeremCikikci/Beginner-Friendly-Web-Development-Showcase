<?php
	$db = mysqli_connect("localhost", "root", "", "robotik");
	if(!$db){
		exit("Verbindungsfehler: " . mysqli_connect_error());
	}
?>