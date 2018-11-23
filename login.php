<?php
session_start();
require_once 'libs/functions.php';
$file = fopen('logins.csv', 'r');
if(isset($_POST["mail"])) {
    while (($line = fgetcsv($file)) !== FALSE) {
        if($line[0] == $_POST["mail"] && $line[1] == md5($_POST["pwd"])) {
            $_SESSION["mail"] = $_POST["mail"];
            $_SESSION["pwd"] = $_POST["pwd"];
            redirection_dashboard();
        }
    }
}
fclose($file);
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <header>
        <h1 style="text-align: center">Connexion</h1>
    </header>
    <form action="" method="post">
        <p><input type="text" name="mail" placeholder="Adresse e-mail"></p>
        <p><input type="password" name="pwd" placeholder="Mot de passe"></p>
        <button type="submit" name="submit">OK</button>
    </form>
    <h2><a href="register.php">Créer un compte</a></h2>
</body>
</html>