<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);

echo 'You have successfully logged out!';
header('Refresh: 2; URL = login.php');
?>