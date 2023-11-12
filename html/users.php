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
    <title>ROBOTIK | BENUTZER</title>
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
<header class="users_header">
    <h1>BENUTZER</h1>
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
            <a href="profil.php">Profil</a>
        </li>
        <li>Benutzer</li>
        <li>
            <a href="shop.php">Shop</a>
        </li>
        <li class=<?php echo $liClass ?>>
            <a href="dashboard.php">Dashboard</a>
        </li>
    </ul>
</nav>
<article>
    <div class="benutzer_div">
        <div class="benutzer_bar">
            <form class="benutzer_form">
                <input class="benutzer_search_bar" type="search" placeholder="">
                <input class="benutzer_search_button" type="submit" value="Suchen">
            </form>
        </div>
        <div class="benutzer_list">
        </div>
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