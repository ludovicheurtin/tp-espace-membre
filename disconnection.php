<?php
session_start();
session_destroy();
header("Location: /tp-espace-membre/login.php");
exit;
?>