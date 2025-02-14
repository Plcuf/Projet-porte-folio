<?php
    include_once("connected.php");
    if($connected) {
        header('location:already_connected.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Connexion </title>
</head>
<body>
    <h1> Connexion </h1>
    <p> Vous n'avez pas de compte ? <a href="register.php"> Inscrivez-vous </a></p>
    <hr>

    <form action="connecting.php" method="post">
        <label for="mail"> Email </label>
        <input type="text" id="mail" name="mail" required>

        <label for="password"> Mot de passe </label>
        <input type="password" id="password" name="password" required>

        <button type="submit"> Se connecter </button>
    </form>
</body>
</html>