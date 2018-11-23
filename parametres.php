<?php
session_start();
?><!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="dashboard.css" />
	<title>Dashboard</title>
</head>
<h1>Dashboard</h1>
<p>Bienvenue sur votre espace membre.</p>
<body>
	<nav>
		<ul>
			<li><a href="dashboard.php">General</a></li>
			<li><a href="parametres.php">Parametres</a></li>
		</ul>
	</nav>
  <p><button type="submit" name="change_mail">Changer l'adresse mail</button></p>
  <p><button type="submit" name="change_pwd">Changer le mot de passe</button></p>
  <p><button type="submit" name="delete_account">Supprimer le compte</button></p>
  <button type="submit" name="disconnection"><a href="disconnection.php">Déconnexion</a></button>   
</body>
</html>
