<?php
	session_start();
	unset($_SESSION['username']);
	unset($_SESSION['recht']);

	header('Location: http://localhost/praktikum/index.php');
	exit;
?>