<?php
session_start();
var_dump($_SESSION["mail"]);
var_dump($_SESSION["pwd"]);

// if(isset($_POST["disconnection"])) {
//     header("Location: /tp-espace-membre/disconnection.php");
// }
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
<button type="submit" name="disconnection"><a href="disconnection.php">Déconnexion</a></button>
</body>
</html>