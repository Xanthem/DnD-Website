<?php
require_once "$_SERVER[DOCUMENT_ROOT]/config/basic_config.php";

$DB_HOST = "127.0.0.1";
$DB_NAME = "user_db";
$DB_USER = "query";
$DB_PASS = "D&D#DnD4Lyfe";

$connect = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

ob_start();
?>
