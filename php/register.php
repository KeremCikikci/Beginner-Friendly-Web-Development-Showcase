<?php
	include("dbconnect.php");
	$vorname = $_POST['vorname'];
	$nachname = $_POST['nachname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$eintrag = "INSERT INTO test (vorname, nachname, email, password) VALUES 
	('$vorname', '$nachname', '$email', '$password')";
	
	$eintragen = mysqli_query($db, $eintrag);
?>