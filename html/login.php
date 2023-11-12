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
		<title>ROBOTIK | LOGIN</title>
		<link href="../css/style.css" rel="stylesheet">
	</head>
	<body>
		<header class="login_header">
			<h1>LOGIN</h1>
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
				<li>
					<a href="chat.php">Chat</a>
				</li>
				<li>Anmelden</li>
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
		<article>
			<div>
				<?php
					$pdo = new PDO('mysql:host=localhost; dbname=robotik', 'root', '');
					
					if(isset($_GET['login'])){
						$email = $_POST['email'];
						$passwort = $_POST['passwort'];
						
						$statement = $pdo->prepare("SELECT * FROM login WHERE email= :email");
						$result = $statement->execute(array('email' => $email));
						$user = $statement->fetch();
						
						// Überprüfung des Passworts
						if($user !== false && password_verify($passwort, $user['passwort'])){
							$_SESSION['username'] = $user['username'];
							$_SESSION['recht'] = $user['recht'];
							header('Location: http://localhost/praktikum/html/chat.php');
							exit;
						}
						else{
							$errorMessage = "E-Mail oder Passwort war ungültig<br>";
						}
					}
				?>

				<?php
					if(isset($errorMassage)){
						echo $errorMassage;
					}
                $pdo = new PDO('mysql:host=localhost;dbname=robotik;charset=utf8', 'root', '');

                    $statement = $pdo->prepare("SELECT passwort FROM login WHERE email= 'user2@gmail.com'");

                    $statement->execute(array('email' => 1));

                    while($row = $statement->fetch()) {
                        echo "Dein neues Passwort:" . $row['passwort'];
                        echo "<br><a href=" . "login.php" . ">Anmelden</a>";
                    }

				?>
				<form action="?login=1" method="post">
					E-Mail:
					<br>
					<input type="email" size="40" maxlength="250" name="email">
					<br>
					<br>
					
					Dein Passwort:
					<br>
					<input type="password" size="40" maxlength="250" name="passwort">
					<br>

					<input type="submit" value="Abschicken">
				</form>
                <a href="password_forget.php">Passwort vergessen?</a>
			</div>
		</article>
	</body>
<html>