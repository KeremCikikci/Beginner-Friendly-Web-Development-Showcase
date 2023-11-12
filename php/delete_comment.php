<?php
    $id = $_POST['id'];

    $pdo = new PDO('mysql:host=localhost;dbname=robotik;charset=utf8', 'root', '');

    $sql = "DELETE FROM chat WHERE id = $id";
    $affected = $pdo->exec($sql);

    header('Location: http://localhost/praktikum/html/dashboard.php');
    exit;
?>