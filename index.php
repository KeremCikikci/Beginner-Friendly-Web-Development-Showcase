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
		<title>ROBOTIK</title>
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<header class="robotik_header">
			<h1>ROBOTIK</h1>
		</header>
		<nav>
			<ul>
				<li>ROBOTIK</li>
				<li>
					<a href="html/mechanik.php">Mechanik</a>
				</li>
				<li>
					<a href="html/elektronik.php">Elektronik</a>
				</li>
				<li>
					<a href="html/software.php">Software</a>
				</li>
				<li>
					<a href="html/kontakt.php">Kontakt</a>
				</li>
				<li>
					<a href="html/chat.php">Chat</a>
				</li>
				<li>
					<a href="html/login.php">Anmelden</a>
				</li>
				<li>
					<a href="html/registrieren.php">Registrieren</a>
				</li>
				<li>
					<a href="html/profil.php">Profil</a>
				</li>
                <li>
                    <a href="html/users.php">Benutzer</a>
                </li>
				<li>
					<a href="html/shop.php">Shop</a>
				</li>
                <li class=<?php echo $liClass ?>>
                    <a href="html/dashboard.php">Dashboard</a>
                </li>
			</ul>
		</nav>
		<article>
			<div>
				<h2>Geschichte der Robotik</h2>
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse</p>
			</div>
		</article>
		<footer>
			<section>
				<ul>
					<li>
						<img src="icons/facebook.png">
					</li>
					<li>
						<img src="icons/instagram.png">
					</li>
					<li>
						<img src="icons/twitter.png">
					</li>
					<li>
						<img src="icons/linkedin.png">
					</li>
					<li>
						<img src="icons/github.png">
					</li>
				</ul>
				<h3>Quelle</h3>
				<a href="#">Weitere Informationen</a>
				<h3>Unsere Sozialen Medien</h3>
			</section>
			<section class="logo_section">
				<img src="icons/logo.png">
			</section>
		</footer>
	</body>
</html>

<!--
https://www.pixelstalk.net/wp-content/uploads/2016/08/HD-Robot-Background.jpg
-->