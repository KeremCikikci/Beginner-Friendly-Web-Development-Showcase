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
		<title>ROBOTIK | CHAT</title>
		<link href="../css/style.css" rel="stylesheet">
	</head>
	<body>
		<header class="chat_header">
			<h1>CHAT</h1>
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
				<li>
					<a href="kontakt.php">Kontakt</a>
				</li>
				<li>Chat</li>
				<li>
					<a href="login.php">Anmelden</a>
				</li>
				<li>
					<a href="registrieren.php">Registrieren</a>
				</li>
				<li>
					<a href="../php/ausloggen.php">Ausloggen</a>
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
		<article class="comments">
			<ul>
				<li class="chat_form">
					<form action="../php/send.php" method="POST">
						<?php
							if(!isset($_SESSION['username'])){
								echo "<a href='login.php'>einloggen</a>";
							}
							else{
								$username = $_SESSION['username'];
							}
							if(isset($username)){
								echo "<h4>" . $username . "</h4>";
							}
						?>
						<textarea placeholder="..." id="comment" name="comment"></textarea>
						<br>
						<input class="submit" type="submit" value="Schick!">
					</form>
				</li>
				<li class="chat_comments">
					<?php
                        $dir = "../upload/profil/";
                        $username = "";
                        $comment = "";

						$pdo = new PDO('mysql:host=localhost;dbname=robotik;charset=utf8', 'root', '');

                        $statement = $pdo->prepare("SELECT chat.id, profil.username, profil.dateiname, chat.comment, chat.created_at
                        FROM chat
                        LEFT JOIN profil ON chat.username = profil.username
                        ORDER BY chat.created_at DESC");

						$statement->execute(array('username' => $username));
						$statement->execute(array('comment' => $comment));
                        $statement->execute(array('id' => 1));

                        while($row = $statement->fetch()){
                            echo "<div class=" . "comment" . ">
                                    <div class=" . "comment_user_div" . ">
                                        <p class=" . "comment_username" . ">" . $row['username'] . "</p>
                                        <img class=" . "comment_profil_photo" . " src=" . $dir . $row['dateiname'] . ">
                                    </div>
                                    <div class=" . "comment_massage_div" . ">
                                        <p class=" . "comment_massage" . ">" . $row['comment'] .  "</p>
                                    </div>
                                    <p class=" . "comment_created_at" . ">" . $row['created_at'] . "</p>
                                  </div>";
                        }
					?>
				</li>
			</ul>
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
<html>
<!--
https://www.php-kurs.com/relationen-tabellen-verbinden.htm
https://www.heise.de/imgs/18/2/7/0/5/0/5/1/chat-cf62ea8e99747a04.jpeg
-->