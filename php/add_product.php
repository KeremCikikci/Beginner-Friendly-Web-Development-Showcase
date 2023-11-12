<?php
    $id = $_GET['id'];

    $pdo = new PDO('mysql:host=localhost;dbname=robotik;charset=utf8', 'root', '');

    $sql = "SELECT * FROM produkt WHERE id = '$id'";
	foreach($pdo->query($sql) as $row){
        $name = $row['name'];
        $explanation = $row['explanation'];
        $price = $row['price'];
        $img = $row['image'];
    }

	session_start();
	$isContains = false;
    if(isset($_SESSION['products'])){
        $products = $_SESSION['products'];

    }
    else{
        $products = array();
    }

    for ($product = 0; $product < sizeof($products); $product++){
        if($products[$product][0] == $id){
            $products[$product][5] = $products[$product][5] + 1;
            $isContains = true;
        }
    }
    if (!$isContains)
        array_push($products, [$id, $name, $explanation, $price, $img, 1]);

    $_SESSION['products'] = $products;


    header('Location: http://localhost/praktikum/html/shop.php');
    exit;
?>