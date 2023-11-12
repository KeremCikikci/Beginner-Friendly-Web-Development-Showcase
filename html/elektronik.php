<?php
session_start();
$liClass = "invisible_list";
if(isset($_SESSION['recht'])){
    if($_SESSION['recht'] == 'admin')
        $liClass = 'visible_list';
}
?>

<!DOCTYPE>
<html lang="de">
	<head>
		<meta charset="UTF-8">
		<title>ROBOTIK | Elektronik</title>
		<link href="../css/style.css" rel="stylesheet">
	</head>
	<body>
		<header class="elektronik_header">
			<h1>ELEKTRONIK</h1>
		</header>
		<nav>
			<ul>
				<li>
					<a href="../index.php">Startseite</a>
				</li>
				<li>
					<a href="mechanik.php">Mechanik</a>
				</li>
				<li>Elektronik</li>
				<li>
					<a href="software.php">Software</a>
				</li>
				<li>
					<a href="kontakt.php">Kontakt</a>
				</li>
				<li>
					<a href="chat.php">Chat</a>
				</li>
				<li>
					<a href="login.php">Anmelden</a>
				</li>
				<li>
					<a href="registrieren.php">Registrieren</a>
				</li>
				<li>
					<a href="profil.php">Profil</a>
				</li>
				<li>
					<a href="Benutzer.php">Benutzer</a>
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
				<h2>Geschichte der Elektronik</h2>
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse</p>
			</div>
			<div>
				<h2>Elektronische Bauteile</h2>
				<img class="elektrisches_bauelement" src="../img/elektrisches_bauelement.jpg" alt="elektrisches_bauelement">
				<table>
					<tr>
						<th></th>
						<th>Name</th>
						<th>Nummer</th>
						<th>Bild</th>
					</tr>
					<tr>
						<td class="nummer">1</td>
						<td>Kondansator</td>
						<td>######</td>
						<td>
							<img class="bauteil_img" src="../img/kondansator.jpg" alt="">
						</td>
					</tr>
					<tr>
						<td class="nummer">2</td>
						<td>Versicherung</td>
						<td>######</td>
						<td>
							<img class="bauteil_img" src="../img/versicherung.jpg" alt="">
						</td>
					</tr>
					<tr>
						<td class="nummer">3</td>
						<td>Resistenz</td>
						<td>######</td>
						<td>
							<img class="bauteil_img" src="../img/resistenz.jpg" alt="">
						</td>
					</tr>
					<tr>
						<td class="nummer">4</td>
						<td>LED</td>
						<td>######</td>
						<td>
							<img class="bauteil_img" src="../img/led.jpg" alt="">
						</td>
					</tr>
					<tr>
						<td class="nummer">5</td>
						<td>Transistor</td>
						<td>######</td>
						<td>
							<img class="bauteil_img" src="../img/transistor.jpg" alt="">
						</td>
					</tr>
				</table>
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
https://cdn.wallpapersafari.com/80/71/peoPa9.jpg
https://upload.wikimedia.org/wikipedia/commons/thumb/e/ea/Componentes.JPG/1920px-Componentes.JPG
-->