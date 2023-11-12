<?php /** @noinspection ALL */
echo "1";

    $upload_folder = "../upload/profil/";
    $filename = pathinfo($_FILES['datei']['name'], PATHINFO_FILENAME);
    $extension = strtolower(pathinfo($_FILES['datei']['name'], PATHINFO_EXTENSION));
    $photoname = $filename . '.' . $extension;
    $path = $upload_folder . $photoname;

    session_start();
    $isLogedIn = $_SESSION['isLogedIn'];
    $isProfilExist = $_SESSION['isProfilExist'];
    if($isLogedIn == false){
        header('Location: http://localhost/praktikum/html/login.php');
        exit;
    }

    $username = $_SESSION['username'];
    $vorname = $_POST['vorname'];
    $nachname = $_POST['nachname'];
    $strasse = $_POST['strasse'];
    $plz = $_POST['postleitzahl'];
    $ort = $_POST['ort'];
    $telefon = $_POST['telefon'];

    $dateiName = $_FILES['datei']['name'];

    move_uploaded_file($_FILES['datei']['tmp_name'], $path);

    $pdo = new PDO('mysql:host=localhost;dbname=robotik;charset=utf8', 'root', '');
    echo "2";
    if($isProfilExist == false) {
        echo "3";

        $statement = $pdo->prepare("INSERT INTO profil(username, vorname, nachname, strasse, plz, ort, telefon, dateiname)
                                         VALUES (:username, :vorname, :nachname, :strasse, :plz, :ort, :telefon, :dateiname)");
        echo "4";
        $statement->bindParam(':username', $username);
        $statement->bindParam(':vorname', $vorname);
        $statement->bindParam(':nachname', $nachname);
        $statement->bindParam(':strasse', $strasse);
        $statement->bindParam(':plz', $plz);
        $statement->bindParam(':ort', $ort);
        $statement->bindParam(':telefon', $telefon);
        $statement->bindParam(':dateiname', $dateiName);

        if ($statement->execute()) {
            echo "Profil wurde erstellt<br>";
            header('Location: http://localhost/praktikum/html/profil.php');
            exit;
        }

    }
    else {
        $sql = "UPDATE profil SET
                  vorname = '$vorname',
                  nachname = '$nachname',
                  strasse = '$strasse',
                  plz = '$plz',
                  ort = '$ort',
                  telefon = '$telefon',
                  dateiname = '$photoname',
                  updated_at = NOW()
                WHERE username = '$username'";


        if ($pdo->exec($sql) === 1)
            header('Location: http://localhost/praktikum/html/profil.php');
            exit;
    }
?>