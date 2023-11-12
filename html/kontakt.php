<?php
    session_start();
    $liClass = "invisible_list";
    if(isset($_SESSION['recht'])){
        if($_SESSION['recht'] == 'admin')
            $liClass = 'visible_list';
    }
?>

<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="UTF-8">
		<title>ROBOTIK | KONTAKT</title>
		<link href="../css/style.css" rel="stylesheet">
	</head>
	<body>
		<header class="kontakt_header">
			<h1>KONTAKT</h1>
		</header>
		<nav>
			<ul>
				<li>
					<a href="../index.php">Startseite</a>
				</li>
				<li>
					<a href="mechanik.php">Mechanik</a>
				</li>
				<li>
					<a href="elektronik.php">Elektronik</a>
				</li>
				<li>
					<a href="software.php">Software</a>
				</li>
				<li>Kontakt</li>
				<li>
					<a href="chat.php">Chat</a>
				</li>
				<li>
					<a href="login.php">Anmelden</a>
				</li>
				<li>
					<a href="registrieren.php">Ausloggen</a>
				</li>
                <li>
                    <a href="profil.php">Profil</a>
                </li>
                <li>
                    <a href="users.php">Benutzer</a>
                </li>
                <li>
                    <a href="shop.php">Shop</a>
                </li>
                <li class=<?php echo $liClass ?>>
                    <a href="dashboard.php">Dashboard</a>
                </li>
			</ul>
		</nav>
		<article>
			<div>
				<h2>Kontaktiere Uns!</h2>
				<form action="../php/contact.php" method="POST">
				  <label for="vname">Vorname:</label>
				  <br>
				  <input type="text" id="vname" name="vorname" placeholder="Vorname">
				  <br>
				  <label for="nname">Nachname:</label>
				  <br>
				  <input type="text" id="nname" name="nachname" placeholder="NachName">
				  <br>
				  <label for="e-mail-adresse">E-Mail Adresse:</label>
				  <br>
				  <input type="email" id="e-mail-adresse" name="e_mail_adresse" placeholder="vorname.nachname@gmail.com">
				  <br>
				  <label for="mail">Mail:</label>
				  <br/>
				  <textarea placeholder="..." id="mail" name="mail"></textarea>
				  <br>
				  <input class="submit" type="submit" value="KONTAKT!">
				</form>
				<?php
					session_start();
					if(isset($_SESSION['isSent'])){
						if($_SESSION['isSent']){
							echo "Sie haben ein mail geschicht!";
							$_SESSION['isSent'] = False;
						}
					}
				?>
			</div>
		</article>
		<footer>
			<section>
				<ul>
					<li>
						<img src="../icons/facebook.png">
					</li>
					<li>
						<img src="../icons/instagram.png">
					</li>
					<li>
						<img src="../icons/twitter.png">
					</li>
					<li>
						<img src="../icons/linkedin.png">
					</li>
					<li>
						<img src="../icons/github.png">
					</li>
				</ul>
				<h3>Quelle</h3>
				<a href="#">Weitere Informationen</a>
				<h3>Unsere Sozialen Medien</h3>
			</section>
			<section class="logo_section">
				<img src="../icons/logo.png">
			</section>
		</footer>
	</body>
</html>
<!--
https://previews.123rf.com/images/o0matze0o/o0matze0o1805/o0matze0o180500021/101535118-website-and-internet-contact-us-page-concept-with-icons-on-four-black-hanged-tags-on-white-backgroun.jpg
-->