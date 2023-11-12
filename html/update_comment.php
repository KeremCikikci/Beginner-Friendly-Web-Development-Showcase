<?php
    $id = $_POST['id'];
    $comment = "";

    session_start();
    $liClass = "invisible_list";
    if(isset($_SESSION['recht'])){
        if($_SESSION['recht'] == 'admin')
            $liClass = 'visible_list';
    }

    $pdo = new PDO('mysql:host=localhost;dbname=robotik;charset=utf8', 'root', '');

    $statement = $pdo->prepare("SELECT comment FROM chat WHERE id = $id");

    $statement->execute(array('comment' => $comment));

    while($row = $statement->fetch()) {
        $comment =$row['comment'];
    }
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>ROBOTIK | BEARBEITEN</title>
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
<header class="update_comment_header">
    <h1>BEARBEITEN</h1>
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
            <a href="registrieren.php">Ausloggen</a>
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
        <h2>Bearbeiten</h2>
        <form action="../php/update_comment.php" method="POST">
            <input class="dashboard_id_input" type="number" id="id" name="id" value=<?php echo $id ?>>
            <label for="comment">Kommentar:</label>
            <input type="text" id="comment" name="comment" value=<?php echo $comment ?>>
            <br>
            <input class="submit" type="submit" value="speichern">
        </form>
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
