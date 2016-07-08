<?php
require_once "$_SERVER[DOCUMENT_ROOT]/config/basic_config.php";

$DB_HOST = "127.0.0.1";
$DB_NAME = "user_db";
$DB_USER = "query";
$DB_PASS = "D&D#DnD4Lyfe";

$connect = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

ob_start();
$msg = '';
?>

<body>
<h2>Create a New Account</h2>
<div class = "container" style="text-align:center;">
    <form class = "form-signin" role = "form"
          action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
          ?>" method = "post">
        <h4 class = "form-signup-heading"><?php echo $msg; ?></h4>
        <input type = "username" class = "form-control"
               name = "username" placeholder = "Username"
               required autofocus>
        <br>
        <input type = "email" class = "form-control"
               name = "email" placeholder = "Email Address" required>
        <br>
        <input type = "password" class = "form-control"
               name = "password" placeholder = "Password" required>
        <br>
        <input type = "password" class = "form-control"
               name = "password_confirm" placeholder = "Confirm Password" required>
        <br>
        <button class = "btn btn-lg btn-primary btn-block" type = "submit"
                name = "register">Register</button>
    </form>
</div>
</body>
