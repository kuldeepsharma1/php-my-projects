<?php
// Start or resume the session
session_start();


// Destroy the session
session_destroy();

// Redirect to the login page or any other page as needed
header("Location: login.php");
exit();
?>
