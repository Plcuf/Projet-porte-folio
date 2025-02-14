<?php
include("connected.php");
if($connected) {
    header('location:index_desicion.php');
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Page d'accueil ?</title>
</head>
<body>
    <h1> Tu n'es pas connecté :/ </h1>

    <a href="login.php"> Se connecter </a>
    <a href="register.php"> S'enregistrer </a>
</body>
</html>