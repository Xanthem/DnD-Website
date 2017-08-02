<?php
require_once "$_SERVER[DOCUMENT_ROOT]/config/basic_config.php";
require_once "$_SERVER[DOCUMENT_ROOT]/config/user_db_connect.php";
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "INSERT INTO characters ( char, password ) VALUES ( $username, $password )";



$connect->close();
header( "Location: ./index.php" );

?>
