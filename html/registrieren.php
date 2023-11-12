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
		<title>ROBOTIK | REGISTRIEREN</title>
		<link href="../css/style.css" rel="stylesheet">
	</head>
	<body>
		<header class="registrieren_header">
			<h1>REGISTRIEREN</h1>
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
				<li>
					<a href="login.php">Anmelden</a>
				</li>
				<li>Registrieren</li>
				<li>
					<a class="ausloggen" href="../php/ausloggen.php">Ausloggen</a>
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
				?>

				<?php
					$showFormular = true;
					
					if(isset($_GET['reg'])){
						$error = false;
						$username = $_POST['username'];
						$email = $_POST['email'];
						$passwort = $_POST['passwort'];
						$passwort2 = $_POST['passwort2'];
                        $recht = "";
						if(isset($_POST['recht'])) {
                            $isAdmin = $_POST['recht'];
                            if ($isAdmin)
                                $recht = "admin_request";
                        }

						if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
							echo 'Bitte eine gültige E-Mail-Adresse eingeben<br>';
							$error = true;
						}
						if(strlen($passwort) == 0){
							echo 'Bitte ein Passwort angeben<br>';
							$error = true;
						}
						if($passwort != $passwort2){
							echo 'Die Passwörter müssen übereinstimmen<br>';
							$error = true;
						}
					
						// Überprüfe, dass die E-Mail-Adresse noch nicht registriert wurde
						if(!$error){
							$statement = $pdo->prepare("SELECT * FROM login WHERE email = :email");
							$result = $statement->execute(array('email' => $email));
							$user = $statement->fetch();
							
							if($user !== false){
								echo 'Diese E-Mail-Adresse ist bereits vergeben<br>';
								$error = true;
							}
						}
						
						//Überprüfe, ob der Username schon vorhanden ist
						if(!$error){
							$statement = $pdo->prepare("SELECT * FROM login WHERE username = :username");
							$result = $statement->execute(array('username' => $username));
							$user = $statement->fetch();
							
							if($user !== false){
								echo 'Dieser Username ist schon vorhanden<br>';
								$error = true;
							}
						}
						
						// Keine Fehler, wir können den Nutzer registrieren
						if(!$error){
							$passwort_hash = password_hash($passwort, PASSWORD_DEFAULT);
							
							$statement = $pdo->prepare("INSERT INTO login(username, email, passwort, recht)
													   VALUES (:username, :email, :passwort, :recht)");
							$result = $statement->execute(array('email' => $email, 'username' => $username, 'passwort' => $passwort_hash, 'recht' => $recht));
							
							if($result){
								echo 'Du wurdest erfolgreich registriert. <a href="login.php">Zum Login</a>';
								$showFormular = false;
								
							}
						}
					}

					if($showFormular){
				?>
				<form action="?reg=1" method="post">
					Username:
					<br>
					<input type="text" size="40" maxlength="250" name="username">
					<br>
					<br>
					
					E-Mail:
					<br>
					<input type="email" size="40" maxlength="250" name="email">
					<br>
					<br>
					
					Dein Passwort:
					<br>
					<input type="password" size="40" maxxlength="250" name="passwort">
					<br>
					
					Passwort wiederholen:
					<br>
					<input type="password" size="40" maxxlength="250" name="passwort2">
					<br>

                    <input class="recht" type="checkbox" name="recht" id="recht">
                    <label for="recht">Admin Anfrage</label>
                    <br>
                    <br>
					
					<input type="submit" value="Abschicken">	
				</form>
				<?php
					}
				?>
			</div>
		</article>
	</body>
<html>
	