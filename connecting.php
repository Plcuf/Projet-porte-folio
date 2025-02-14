<?php
include_once('connected.php');

if($connected) {
    header('location:index_decision.php');
}

if(isset($_POST['mail']) && !empty($_POST["mail"]) && isset($_POST['password']) && !empty($_POST['password'])) {
    $mail = htmlspecialchars($_POST["mail"]);

    // need changement
    //$pdo = new PDO(dsn:"mysql:host=localhost;dbname=tp3_bdd", username:"root", password:"");

    $stmt = $pdo->prepare('SELECT * FROM users WHERE Username = :username');
    $stmt->bindParam(':username', $mail, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (sizeof($result) > 0) {
        if (password_verify($_POST["password"], $result[0]["Password_H"])) {
            $_SESSION['username'] = $mail;
            header("location:index_decision.php");
        } else {
            header('location:login.php');
        }     
    } else {
        header('location:login.php');
    }
} else {
    header('location:login.php');
}
?>