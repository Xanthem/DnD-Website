<?php
require_once "$_SERVER[DOCUMENT_ROOT]/config/basic_config.php";
require_once "$_SERVER[DOCUMENT_ROOT]/config/character_db_connect.php";

ob_start();
$msg = '';
?>

<body>
<h1>Creating new Character...</h1>
<div class = "container" style="text-align:center;">
    <form class = "form-signin" role = "form"
          action = "insert.php" method = "post">
        <h4 class = "form-signup-heading"><?php echo $msg; ?></h4>
        <input type = "username" class = "form-control"
               name = "username" placeholder = "Username"
               required autofocus>
        <br>
        <!-- LATER IMPLEMENTATION -->
        <!-- <input type = "email" class = "form-control"
               name = "email" placeholder = "Email Address" required>
        <br> -->
        <input type = "password" class = "form-control"
               name = "password" placeholder = "Password" required>
        <br>
        <!-- LATER IMPLEMENTATION -->
        <!-- <input type = "password" class = "form-control"
               name = "password_confirm" placeholder = "Confirm Password" required>
        <br> -->
        <span id="errMsgBox" style="color:red"></span>
        <button class = "btn btn-lg btn-primary btn-block" type = "submit"
                name = "register">Register Account</button>
    </form>
</div>
</body>