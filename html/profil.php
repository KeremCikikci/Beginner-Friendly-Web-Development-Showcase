<?php
    session_start();
    $liClass = "invisible_list";
    if(isset($_SESSION['recht'])){
        if($_SESSION['recht'] == 'admin')
            $liClass = 'visible_list';
    }
?>

<?php /** @noinspection ALL */
    $actionDir = "../php/profil.php";

    $pdo = new PDO('mysql:host=localhost;dbname=robotik;charset=utf8', 'root', '');

    $isProfilExist = false;
    $isLogedIn = false;

    $username="";
    $vorname="";
    $nachname="";
    $strasse="";
    $postleitzahl="";
    $ort="";
    $telefon="";
    $profil_photo="";

    $pdo = new PDO('mysql:host=localhost;dbname=robotik;charset=utf8', 'root', '');

    if(isset($_SESSION['username'])) {

        $username = $_SESSION['username'];
        $isLogedIn = true;

        $statement = $pdo->prepare("SELECT * FROM profil WHERE username = :username");
        $statement->execute(array('username' => $username));

        while($row = $statement->fetch()){
            if($row['id'] != false){
                $isProfilExist = true;
            }
        }
    }

    if($isProfilExist){

        $statement = $pdo->prepare("SELECT * FROM profil WHERE username = :username");
        $statement->execute(array('username' => $username));
        while($row = $statement->fetch()){
            $vorname = $row['vorname'];
            $nachname = $row['nachname'];
            $strasse = $row['strasse'];
            $postleitzahl = $row['plz'];
            $ort = $row['ort'];
            $telefon = $row['telefon'];
            $profil_photo = $row['dateiname'];
        }


    }

    $_SESSION['isLogedIn'] = $isLogedIn;
    $_SESSION['isProfilExist'] = $isProfilExist;

    if($isProfilExist){
        $buttonText = "Aktualisieren";
        $displayPhoto = true;
    }
    else if(!$isLogedIn){
        $actionDir = "login.php";
        $buttonText = "Anmelden";
        $displayPhoto = false;
    }
    else{
        $buttonText = "Erstellen";
        $displayPhoto = false;
    }
    if(!$displayPhoto){
        $imageClass = "invisible_photo_image";
    }
    else{
        $imageClass = "photo_image";
    }
?>

<!DOCTYPE>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>ROBOTIK | PROFIL</title>
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
<header class="profil_header">
    <h1>PROFIL</h1>
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
            <a href="software.php">Kontakt</a>
        </li>
        <li>
            <a href="kontakt.php">Kontakt</a>
        </li>
        <li>
            <a href="chat.php">Chat</a>
        </li>
        <li>
            <a href="login.php">Login</a>
        </li>
        <li>
            <a href="registrieren.php">Registrieren</a>
        </li>
        <li>
            <a href="../php/ausloggen.php">Ausloggen</a>
        </li>
        <li>Profil</li>
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
        <form action=<?php echo $actionDir;?> method="POST" enctype="multipart/form-data">
            <label class="profil_label" for="username">Username:</label>
            <input type="text" id="username" name="username" disabled="disabled" placeholder="Username" value=<?php echo $username;?>>
            <br>
            <label class="profil_label" for="vorname">Vorname:</label>
            <input type="text" id="vorname" name="vorname" placeholder="Vorname" value=<?php echo $vorname;?>>
            <br>
            <label class="profil_label" for="nachname">Nachname:</label>
            <input type="text" id="nachname" name="nachname" placeholder="Nachname" value=<?php echo $nachname;?>>
            <br>
            <label class="profil_label" for="strasse">Straße:</label>
            <input type="text" id="strasse" name="strasse" placeholder="Straße" value=<?php echo $strasse;?>>
            <br>
            <label class="profil_label" for="postleitzahl">Postleitzahl:</label>
            <input type="number" id="postleitzahl" name="postleitzahl" placeholder="Postleitzahl" value=<?php echo $postleitzahl;?>>
            <br>
            <label class="profil_label" for="ort">Ort:</label>
            <input type="text" id="ort" name="ort" placeholder="Ort" value=<?php echo $ort;?>>
            <br>
            <label class="profil_label" for="telefon">Telefon:</label>
            <input type="tel" id="telefon" name="telefon" placeholder="Telefon" value=<?php echo $telefon;?>>
            <br>
            <div class="photo_div">
                <img class=<?php echo $imageClass; ?> src=<?php echo "../upload/profil/" . $profil_photo;?>>
                <div class="file-input">
                    <input class="photo_input" type="file" name="datei" id="file">
                    <label for="file" class="photo_label">Profil Bild</label>
                </div>
            </div>
            <br>
            <input class="submit" type="submit" value=<?php echo $buttonText;?>>
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