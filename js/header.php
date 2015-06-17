<?php // rnheader.php
include 'functions.php';
session_start();
$loggedin = FALSE;

if (isset($_SESSION['user']))
{
    $user = $_SESSION['user'];
    $loggedin = TRUE;
}

if (isset($_SESSION['city']))
{
    $city = $_SESSION['city'];
}
else $city = "Бишкек";

?>