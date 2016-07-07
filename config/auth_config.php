<?php
session_start();
if(!isset($_SESSION['valid']) || $_SESSION['valid'] != true) {
    header('Location: /login.php');
}
include "$_SERVER[DOCUMENT_ROOT]/resources/header.php";

