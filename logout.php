<?php
require_once "$_SERVER[DOCUMENT_ROOT]/config/basic_config.php";
unset($_SESSION["username"]);
unset($_SESSION["password"]);
unset($_SESSION['valid']);
unset($_SESSION['timeout']);
?>
<h2 class="centered"> <?php echo 'Logout Successful!'; ?> <h2>
<?php header('Refresh: 1; URL = login.php'); ?>
