<?php
session_start(); // Start the session to access it
session_unset(); // Remove all session variables
session_destroy(); // Destroy the session entirely

// Redirect the user back to the login page
header("location:login.php");
exit();
?>