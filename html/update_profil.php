<?php
    $username = $_POST['username'];
    $id = "";
    $vorname = "";
    $nachname = "";
    $strasse = "";
    $plz = "";
    $ort = "";
    $telefon = "";
    $created_at = "";
    $updated_at = "";
    $dateiname = "";


    session_start();
    $liClass = "invisible_list";
    if(isset($_SESSION['recht'])){
        if($_SESSION['recht'] == 'admin')
            $liClass = 'visible_list';
    }

    $pdo = new PDO('mysql:host=localhost;dbname=robotik;charset=utf8', 'root', '');

    $statement = $pdo->prepare("SELECT * FROM profil WHERE username = '$username'");

    $statement->execute(array('id' => 1));

    while($row = $statement->fetch()) {
        $id = $row['id'];
        $username = $row['username'];
        $vorname = $row['vorname'];
        $nachname = $row['nachname'];
        $strasse = $row['strasse'];
        $plz = $row['plz'];
        $ort = $row['ort'];
        $telefon = $row['telefon'];
        $created_at = $row['created_at'];
        $updated_at = $row['updated_at'];
        $dateiname = $row['dateiname'];
    }

    if($dateiname == ""){
        $imageClass = "invisible_photo_image";
    }
    else{
        $imageClass = "photo_image";
    }

    $sql = "SELECT * FROM login WHERE username = '$username'";
    foreach($pdo->query($sql) as $user) {
        $email = $user['email'];
        $recht = $user['recht'];
        $label_class = "update_label";
        $input_class = "update_input";
        if ($recht == "admin_request"){
            $label_class = "update_label_red";
            $input_class = "update_input_red";
        }

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
        <form action="../php/update_profil.php" method="POST">
            <label for="id">id:</label>
            <input type="number" id="id" name="id" readonly="readonly" value=<?php echo $id ?>>
            <br>
            <label for="username">username:</label>
            <input type="text" id="username" name="username" readonly="readonly" value=<?php echo $username ?>>
            <br>
            <label for="vorname">vorname:</label>
            <input type="text" id="vorname" name="vorname" value=<?php echo $vorname ?>>
            <br>
            <label for="nachname">nachname:</label>
            <input type="text" id="nachname" name="nachname" value=<?php echo $nachname ?>>
            <br>
            <label for="recht" class= <?php echo $label_class; ?>>recht:</label>
            <input type="text" id="recht" name="recht" value=<?php echo $recht ?>>
            <br>
            <label for="strasse">strasse:</label>
            <input type="text" id="strasse" name="strasse" value=<?php echo $strasse ?>>
            <br>
            <label for="plz">plz:</label>
            <input type="number" id="plz" name="plz" value=<?php echo $plz ?>>
            <br>
            <label for="ort">ort:</label>
            <input type="text" id="ort" name="ort" value=<?php echo $ort ?>>
            <br>
            <label for="telefon">telefon:</label>
            <input type="tel" id="telefon" name="telefon" value=<?php echo $telefon ?>>
            <br>
            <label for="created_at">created_at:</label>
            <input type="date" id="created_at" name="created_at" value=<?php echo $created_at ?>>
            <br>
            <label for="updated_at">updated_at:</label>
            <input type="date" id="updated_at" name="updated_at" value=<?php echo $updated_at ?>>
            <br>
            <div class="photo_div">
                <img class=<?php echo $imageClass; ?> src=<?php echo "../upload/profil/" . $dateiname;?>>
                <div class="file-input">
                    <input class="photo_input" type="file" name="dateiname" id="dateiname">
                    <label for="dateiname" class="photo_label">Profil Bild</label>
                </div>
            </div>
            <br>
            <br>
            <input class="submit" type="submit" value="speichern">
        </form>
        <form action="../php/password_forget.php" method="POST">
            <br>
            <br>
            <input class="dashboard_id_input" type="email" id="email" name="email" value= <?php echo $email; ?>>
            <label for="passwort">Passwort:</label>
            <input type="password" id="passwort" name="passwort">
            <br>
            <input class="submit" type="submit" value="Passwort Ändern">
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
