<?php
include_once("connected.php");


$name = $username;
session_unset();
session_destroy();
setcookie(session_name(), "", strtotime("-1 day"));


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Aurevoir </title>
</head>
<body>
    <<h2> Aurevoir <?php echo $name ?>, à bientôt ! </h2>
    <a href="index_decision.php"> Revenir à l'accueil </a>
</body>
</html>