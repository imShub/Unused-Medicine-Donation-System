<?php
session_start(); //to ensure you are using same session
$_SESSION['is_login'] = true;
session_destroy(); //destroy the session
header("location: index.php"); //to redirect back to "index.php" after logging out
exit();
