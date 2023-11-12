<?php
    $id = $_POST['id'];
    $username = $_POST['username'];
    $vorname = $_POST['vorname'];
    $nachname = $_POST['nachname'];
    $recht = $_POST['recht'];
    $strasse = $_POST['strasse'];
    $plz = $_POST['plz'];
    $ort = $_POST['ort'];
    $telefon = $_POST['telefon'];
    $created_at = $_POST['created_at'];
    $updated_at = $_POST['updated_at'];
    $dateiname = $_POST['dateiname'];

    $pdo = new PDO('mysql:host=localhost;dbname=robotik;charset=utf8', 'root', '');
    echo $username;
    if($dateiname == "")
        $sql = "UPDATE profil SET vorname = '$vorname', nachname = '$nachname', strasse = '$strasse', plz = '$plz', ort = '$ort', telefon = '$telefon', created_at = '$created_at', updated_at = '$updated_at' WHERE username = '$username'";
    else
        $sql = "UPDATE profil SET vorname = '$vorname', nachname = '$nachname', strasse = '$strasse', plz = '$plz', ort = '$ort', telefon = '$telefon', created_at = '$created_at', updated_at = '$updated_at', dateiname = '$dateiname' WHERE username = '$username'";

    if($pdo->exec($sql) === 1) {
        $sql = "UPDATE login SET recht = '$recht' WHERE username = '$username'";
        if($pdo->exec($sql) === 1) {

        }
        header('Location: http://localhost/praktikum/html/dashboard.php');
        exit;
    }
    else{
        $sql = "UPDATE login SET recht = '$recht' WHERE username = '$username'";
        if($pdo->exec($sql) === 1) {

        }
        header('Location: http://localhost/praktikum/html/dashboard.php');
        exit;
    }
?>