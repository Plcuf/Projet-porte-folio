<?php
include_once("connected.php");
if(!$connected) {
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Error </title>
</head>
<body>
    <h1> Tu es déjà connecté </h1>
    <a href="index_decision.php"> Retour </a>
</body>
</html>