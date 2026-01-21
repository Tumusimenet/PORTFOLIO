<?php
session_start();

// If the session variable 'login' is not set, send them back to login page
if (!isset($_SESSION['login'])) {
    header("location:login.php");
    exit();
}
?>