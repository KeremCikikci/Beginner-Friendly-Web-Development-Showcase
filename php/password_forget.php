<?php
    $email = $_POST['email'];
    if(isset($_POST['passwort'])){
       $password = $_POST['passwort'];
    }
    else {
        // Create Password
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array();
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        $password = implode($pass);
    }

    $pdo = new PDO('mysql:host=localhost;dbname=robotik;charset=utf8', 'root', '');

    // Fetch Data
    $statement = $pdo->prepare("SELECT * FROM login WHERE email= :email");
    $result = $statement->execute(array('email' => $email));
    $user = $statement->fetch();

    $username = $user['username'];
    $email = $user['email'];
    $passwort = $user['passwort'];
    $recht = $user['recht'];
    $created_at = $user['created_at'];

    // Delete Account
    $sql = "DELETE FROM login WHERE email = '$email'";
    $affected = $pdo->exec($sql);


    // Recreate Account
    $passwort_hash = password_hash($password, PASSWORD_DEFAULT);

    $statement = $pdo->prepare("INSERT INTO login(username, email, passwort, recht)
                                                           VALUES (:username, :email, :passwort, :recht)");
    $result = $statement->execute(array('email' => $email, 'username' => $username, 'passwort' => $passwort_hash, 'recht' => $recht));

    if($result){
        echo 'Neues Passwort wurde erstellt. <br> Passwort:' . $password . '<br><a href="../html/login.php">Zum Login</a>';
    }

?>

<?php
if(isset($errorMassage)){
    echo $errorMassage;
}
?>