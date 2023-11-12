<?php
	function writeData(){
		$isSent = False;
		include("dbconnect.php");
		
		$eintrag = "INSERT INTO mails (vorname, nachname, mail_adresse, mail) VALUES 
		('$vorname', '$nachname', '$e_mail_adresse', '$mail')";
		
		session_start();
		$eintragen = mysqli_query($db, $eintrag);
		$isSent = True;
		$_SESSION['isSent'] = $isSent;
		header('Location: http://localhost/praktikum/html/kontakt.php');
		exit;
	}
	
	$vorname = $_POST['vorname'];
	$nachname = $_POST['nachname'];
	$e_mail_adresse = $_POST['e_mail_adresse'];
	$mail = $_POST['mail'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>ROBOTIK | MAIL</title>
		<meta charset="UTF-8">
		<link href="../css/style.css" rel="stylesheet">
	</head>
	<body>
		<header class="kontakt_header">
			<h1>Kontakt</h1>
		</header>
		<nav>
			<ul>
				<li>
					<a href="../index.php">Startseite</a>
				</li>
				<li>
					<a href="mechanik.html">Mechanik</a>
				</li>
				<li>
					<a href="elektronik.html">Elektronik</a>
				</li>
				<li>
					<a href="software.html">Software</a>
				</li>
				<li>Kontakt</li>
			</ul>
		</nav>
		<article>
			<div>
				<h3 class= "form_title">Vorname: </h3> <?php echo "<p class=" . "form_data" . ">$vorname</p>";?>
				<h3 class= "form_title">Nachname: </h3> <?php echo "<p class=" . "form_data" . ">$nachname</p>";?>
				<h3 class= "form_title">Mail-Adresse: </h3> <?php echo "<p class=" . "form_data" . ">$e_mail_adresse</p>";?>
				<h3 class= "form_title">Mail: </h3> <?php echo "<p class=" . "form_data" . ">$mail</p>";?>
			</div>
		</article>
	</body>
</html>