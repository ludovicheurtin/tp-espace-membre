<?php
function redirection_register() {
    header("Location: /tp-espace-membre/register.php");
    die;
}

function redirection_dashboard() {
    header("Location: /tp-espace-membre/dashboard.php");
    die;
}

function redirection_registered() {
    header("Location: /tp-espace-membre/registered.php");
    die;
}