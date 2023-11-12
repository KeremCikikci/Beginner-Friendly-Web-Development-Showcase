<?php
    $id = $_POST['id'];
    $comment = $_POST['comment'];

    $pdo = new PDO('mysql:host=localhost;dbname=robotik;charset=utf8', 'root', '');

    $sql = "UPDATE chat SET comment = '$comment', created_at = NOW() WHERE id = '$id'";

    if($pdo->exec($sql) === 1) {
        header('Location: http://localhost/praktikum/html/dashboard.php');
        exit;
    }
?>