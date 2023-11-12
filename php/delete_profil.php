<?php
    $username = $_POST['username'];

    $pdo = new PDO('mysql:host=localhost;dbname=robotik;charset=utf8', 'root', '');

    $sql = "DELETE FROM login WHERE username = '$username'";
    $affected = $pdo->exec($sql);

    $sql = "DELETE FROM profil WHERE username = '$username'";
    $affected = $pdo->exec($sql);

    header('Location: http://localhost/praktikum/html/dashboard.php');
    exit;
?>