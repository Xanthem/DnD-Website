<?php
require_once "$_SERVER[DOCUMENT_ROOT]/config/basic_config.php";
unset($_SESSION["username"]);
unset($_SESSION["password"]);
unset($_SESSION['valid']);
unset($_SESSION['timeout']);

echo 'You have successfully logged out!';
header('Refresh: 2; URL = login.php');
