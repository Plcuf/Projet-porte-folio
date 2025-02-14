<?php

include_once('connected.php');

if($connected) {
    header('location:index_decision.php');
}

if ($_POST['password'] == $_POST['password_confirm']) {
    $password_h = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $mail = htmlspecialchars($_POST["mail"]);

    // need changement
    //$pdo = new PDO(dsn:"mysql:host=localhost;dbname=tp3_bdd", username:"root", password:"");

    
    $stmt = $pdo->prepare('SELECT * FROM Users WHERE Email = :email');
    $stmt->execute(['username' => $mail]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    if(sizeof($result) == 0) {
        $stmt = $pdo->prepare("INSERT INTO users (Email, Password, First_Name, Last_Name) values (:email, :password_h, :firstname, :lastname)");
        $stmt->execute(["email"=> $mail, "password_h"=> $password_h, "firstname"=> $firstname, "lastname"=> $lastname]);
        header('location:index_decision.php');
    } else {
        header('location:register.php');
    }
    
} else {
    header('location:register.php');
}
