<?php
	session_start();
	$pdo = new PDO('mysql:host=localhost;dbname=robotik;charset=utf8', 'root', '');
	
	$statement = $pdo->prepare("INSERT INTO chat(username, comment)
								VALUES (:username, :comment)");
	
	$statement ->bindParam(':username', $username);
	$statement ->bindParam(':comment', $comment);
	
	$username = $_SESSION['username'];
	$comment = $_POST['comment'];
	
	if($statement->execute()){
		echo "Neuer Datensatz wurde angelegt<br>";
	}
	
	
	header('Location: http://localhost/praktikum/html/chat.php');
	exit;
?>