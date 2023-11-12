<?php
    session_start();

    $pdo = new PDO('mysql:host=localhost;dbname=robotik;charset=utf8', 'root', '');

    for($i = 0; $i < sizeof($_SESSION['products']); $i++){
        $id = $_SESSION['products'][$i][0];
        $sql = "SELECT * FROM produkt WHERE id = $id";
        foreach ($pdo->query($sql) as $row){
            $menge = $row['menge'];
            $new_menge = $menge - $_SESSION['products'][$i][5];

            $sql = "UPDATE produkt SET menge = '$new_menge' WHERE id = $id";
            if($pdo->exec($sql) === 1){

            }
        }
    }

    unset($_SESSION['products']);

    header('Location: http://localhost/praktikum/html/shop.php');
    exit;
?>