<?php
session_start();
require_once 'libs/functions.php';
$samepwd = true;

if(isset($_POST["pwd"]) OR isset($_POST["pwdconf"])) {
    if(empty($_POST["mail"])) {
        $_SESSION["error"] = "Une adresse mail est requise.";
        redirection_register();
    }
    if($_POST["pwd"] != $_POST["pwdconf"])  {
        $samepwd = false;
    }
    if($samepwd == false) {
        $_SESSION["error"] = "Les deux mots de passe ne correspondent pas !";
        redirection_register();
    }
}
$mail = $_POST["mail"];
$pwd = md5($_POST["pwd"]);
$login = array(
    "mail" => $mail,
    "pwd" => $pwd,
);

$fp = fopen('logins.csv', 'a+');
fputcsv($fp, $login);
fclose($fp);
redirection_registered();

?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <?php include 'layout/header.php'?>
    <form action="" method="post">
        <p><input type="text" name="mail" placeholder="Adresse e-mail"></p>
        <p><input type="password" name="pwd" placeholder="Mot de passe"></p>
        <p><input type="password" name="pwdconf" placeholder="Mot de passe identique"></p>
        <button type="submit" name="submit">OK</button>
    </form>
</body>
</html>