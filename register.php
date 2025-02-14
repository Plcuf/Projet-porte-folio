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
    <title> Enregistrement </title>
</head>
<body>
    <h1> Enregistrement </h1>
    <p> Vous avez déjà un compte ? <a href="login.php"> Se connecter </a> </p>
    <hr>

    <form action="registering.php" method="post">

        <label for="name"> Prénom </label>
        <input type="text" id="name" name="name" required>

        <label for="lastname"> Nom </label>
        <input type="text" id="lastname" name="lastname" required>

        <label for="mail"> Email </label>
        <input type="text" id="mail" name="mail" required>

        <label for="password"> Mot de passe </label>
        <input type="password" id="password" name="password" required>

        <label for="password_confirm"> Confirmation du mot de passe </label>
        <input type="password" id="password_confirm" name="password_confirm" required>

        <button type="submit"> Créer un compte </button>
    </form>

</body>
</html>