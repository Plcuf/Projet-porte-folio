<?php
include("connected.php");
if(!$connected) {
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Page d'acceuil </title>
</head>
<body>
        <h1> Bienvenue sur votre portfolio </h1>
        <a href="leave_session.php"> Se déconnecter </a>
        <hr>
</body>
</html>