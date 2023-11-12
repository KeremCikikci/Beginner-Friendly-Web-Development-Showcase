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
    <title>ROBOTIK | PASSWORT ÄNDERN</title>
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
<header class="login_header">
    <h1>PASSWORT ÄNDERN</h1>
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
        <li class=<?php echo $liClass ?>>
            <a href="dashboard.php">Dashboard</a>
        </li>
    </ul>
</nav>
<article>
    <div>
        <form action="../php/password_forget.php" method="POST">
            E-Mail:
            <input type="email" id="email" name="email">
            <br>
            <input type="submit" value="neues Passwort erstellen">
        </form>
    </div>
</article>
</body>
<html>