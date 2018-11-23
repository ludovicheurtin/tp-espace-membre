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
  <p>Email: <?php echo $_SESSION["mail"] ?></p>
  <p>Statut du compte: actif</p>

  <button type="submit" name="disconnection"><a href="disconnection.php">Déconnexion</a></button>
     
</body>

</body>
</html>
