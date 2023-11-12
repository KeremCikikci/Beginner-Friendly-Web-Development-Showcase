<?php
session_start();
$liClass = "invisible_list";
if(isset($_SESSION['recht'])){
    if($_SESSION['recht'] == 'admin')
        $liClass = 'visible_list';
}
?>

<!DOCTYPE>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>ROBOTIK | SHOP</title>
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
<header class="shop_header">
    <h1>SHOP</h1>
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
        <li>Shop</li>
        <li class=<?php echo $liClass ?>>
            <a href="dashboard.php">Dashboard</a>
        </li>
    </ul>
</nav>
<article class="shop">
    <div class="products">
        <ul>
            <?php
                $dateipath = "../products/";

                $pdo = new PDO('mysql:host=localhost;dbname=robotik;charset=utf8', 'root', '');

                $statement = $pdo->prepare("SELECT * FROM produkt ORDER BY created_at DESC");

                $statement->execute(array('id' => 1));

                while($row = $statement->fetch()){
                    echo "<li class='product'>
                            <form class='product_form' method='GET' action='../php/add_product.php'>
                                <input class='dashboard_id_input' id='id' name='id' value=" . $row['id'] . ">
                                <img class='product_img' src=" . $dateipath . $row['image'] . ">
                                <div class='product_panel'>
                                    <div class='product_info'>
                                        <p class='product_name'>" . $row['name'] . "</p>
                                        <p class='product_menge'>Preis: " . $row['price'] . "</p>
                                        <p class='product_menge'>Menge: " . $row['menge'] . "</p>
                                    </div>
                                    <input class='product_add' type='submit' value=''>
                                </div>
                            </form>
                          </li>";
                }
            ?>
        </ul>
    </div>
    <div class="cart">
        <div class="cart_product_list">
            <ul>
                <?php
                    $total_price = null;

                    if (isset($_SESSION['products'])){
                        for($i = 0; $i <= sizeof($_SESSION['products']) - 1; $i++){
                            $total_price = $total_price + ($_SESSION['products'][$i][3] * $_SESSION['products'][$i][5]);
                            echo "<li class='cart_product'>
                                    <img src=" . $dateipath . $_SESSION['products'][$i][4] . " class='cart_img'>
                                    <div class='cart_info'>
                                        <p class='cart_name'>" . $_SESSION['products'][$i][1] . "</p>
                                        <p class='cart_menge'>Preis: " .  $_SESSION['products'][$i][3] . "</p>
                                        <p class='cart_menge'>Menge: " .  $_SESSION['products'][$i][5] . "</p>
                                    </div>
                                  </li>";
                        }
                    }
                ?>
            </ul>
        </div>
        <p>Total Preis: <?php echo $total_price; ?></p>
        <a class="cart_buy" href="../php/buy.php">KAUFEN</a>
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
<!--
https://c8.alamy.com/comp/2F3JBX0/programming-code-abstract-background-of-software-developer-2F3JBX0.jpg
http://cdn.statcdn.com/Infographic/images/normal/16544.jpeg
-->