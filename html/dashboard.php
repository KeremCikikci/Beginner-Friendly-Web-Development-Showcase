<!DOCTYPE html>
    <html lang="de">
    <head>
        <meta charset="UTF-8">
        <title>ROBOTIK | DASHBOARD</title>
        <link href="../css/style.css" rel="stylesheet">
    </head>
    <body>
        <header class="dashboard_header">
            <h1>DASHBOARD</h1>
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
                    <a href="registrieren.php">Registrieren</a>
                </li>
                <li>
                    <a href="../php/ausloggen.php">Ausloggen</a>
                </li>
                <li>
                    <a href="profil.php">Profil</a>
                </li>
                <li>
                    <a href="users.php">Benutzer</a>
                </li>
                <li>
                    <a href="shop.php">Shop</a>
                </li>
                <li>Dashboard</li>
            </ul>
        </nav>
        <article>
            <div class="dashboard_comment_div">
                <h2>Kommentare</h2>
                <table class="dashboard_comment_table">
                    <tr>
                        <th>Optionen</th>
                        <th>id</th>
                        <th>username</th>
                        <th>comment</th>
                        <th>created_at</th>
                    </tr>
                    <?php
                    $dateipath = "../upload/profil/";
                    $username = "";
                    $comment = "";

                    $pdo = new PDO('mysql:host=localhost;dbname=robotik;charset=utf8', 'root', '');

                    $statement = $pdo->prepare("SELECT chat.id, profil.username, profil.dateiname, chat.comment, chat.created_at
                            FROM chat
                            LEFT JOIN profil ON chat.username = profil.username
                            ORDER BY chat.created_at DESC");

                    $statement->execute(array('id' => 1));

                    while($row = $statement->fetch()){
                        echo "<tr>
                                    <td>
                                        <form class=" . "dashboard_form" . " action=" . "../php/delete_comment.php" . " method=" . "POST" . ">" . "
                                            <input class=" . "dashboard_id_input" . " type=" . "number" . " value=" . $row['id'] . " name=" . "id" . " id=" . "id" . ">
                                            <input class=" . "dashboard_delete_button" . " type=" . "submit" . " value=" . "löschen" . ">
                                        </form>
                                        <form class=" . "dashboard_form" . " action=" . "update_comment.php" . " method=" . "POST" . ">" . "
                                            <input class=" . "dashboard_id_input" . " type=" . "number" . " value=" . $row['id'] . " name=" . "id" . " id=" . "id" . ">
                                            <input class=" . "dashboard_delete_button" . " type=" . "submit" . " value=" . "bearbeiten" . ">
                                        </form>
                                    </td>
                                    <td>" .
                                        $row['id'] .
                                    "</td>
                                    <td>" .
                                        $row['username'] .
                                    "</td>
                                    <td>" .
                                        $row['comment'] .
                                    "</td>
                                    <td>" .
                                        $row['created_at'] .
                                    "</td>
                            </tr>";
                    }
                    ?>
                </table>
            </div>
            <div class="dashboard_profil_div">
                <h2>Profile</h2>
                <table class="dashboard_comment_table">
                    <tr>
                        <th>Optionen</th>
                        <th>id</th>
                        <th>username</th>
                        <th>vorname</th>
                        <th>nachname</th>
                        <th>straße</th>
                        <th>plz</th>
                        <th>ort</th>
                        <th>telefon</th>
                        <th>created_at</th>
                        <th>updated_at</th>
                        <th>dateiname</th>
                    </tr>
                    <?php
                    $username = "";
                    $comment = "";

                    $pdo = new PDO('mysql:host=localhost;dbname=robotik;charset=utf8', 'root', '');

                    $statement = $pdo->prepare("SELECT * FROM profil");

                    $statement->execute(array('id' => 1));

                    while($row = $statement->fetch()){
                        $username = $row['username'];
                        $sql = "SELECT recht FROM login WHERE username = '$username'";
                        foreach($pdo->query($sql) as $user){
                            $button_class = "dashboard_delete_button";
                            if($user['recht'] == "admin_request")
                                $button_class = "dashboard_delete_button_red";
                        }
                        echo "<tr>
                                    <td>
                                        <form class=" . "dashboard_form" . " action=" . "../php/delete_profil.php" . " method=" . "POST" . ">" . "
                                            <input class=" . "dashboard_id_input" . " type=" . "text" . " value=" . $row['username'] . " name=" . "username" . " id=" . "username" . ">
                                            <input class=" . "dashboard_delete_button" . " type=" . "submit" . " value=" . "löschen" . ">
                                        </form>
                                        <form class=" . "dashboard_form" . " action=" . "update_profil.php" . " method=" . "POST" . ">" . "
                                            <input class=" . "dashboard_id_input" . " type=" . "text" . " value=" . $row['username'] . " name=" . "username" . " id=" . "username" . ">
                                            <input class=" . $button_class . " type=" . "submit" . " value=" . "bearbeiten" . ">
                                        </form>
                                    </td>
                                    <td>" .
                                    $row['id'] .
                                    "</td>
                                    <td>" .
                                    $row['username'] .
                                    "</td>
                                    <td>" .
                                    $row['vorname'] .
                                    "</td>
                                    <td>" .
                                    $row['nachname'] .
                                    "</td>
                                    <td>" .
                                    $row['strasse'] .
                                    "</td> .
                                    <td>" .
                                    $row['plz'] .
                                    "</td><td>" .
                                    $row['ort'] .
                                    "</td> .
                                    <td>" .
                                        $row['telefon'] .
                                    "</td>
                                    <td>" .
                                        $row['created_at'] .
                                    "</td>
                                    <td>" .
                                        $row['updated_at'] .
                                    "</td> .
                                    <td>
                                        <img src=" . $dateipath . $row['dateiname'] . " class=" . "dashboard_profil_photo" . ">" .
                                    "</td>
                            </tr>";
                    }
                    ?>
                </table>
                <!--
                <form method="POST" action="update_profil.php">
                    <input class="dashboard_id_input" type="text" id="create" name="create" value="erstellen">
                    <input type="submit" value="Neues Profil erstellen">
                </form>-->
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
