<?php
require_once "$_SERVER[DOCUMENT_ROOT]/config/basic_config.php";
require_once "$_SERVER[DOCUMENT_ROOT]/config/user_db_connect.php";

ob_start();
?>

<html lang = "en">

<body>

<h2>Enter Username and Password</h2>
<div class = "container form-signin">

    <?php
    if (isset($_GET['msg'])) {
        echo $_GET['msg'];
    }
    else {
        $msg = '';
    }

    if (isset($_POST['login']) && !empty($_POST['username'])
        && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT username, password FROM user_db.login_information WHERE username='$username' AND password='$password'";
        $result = mysqli_query($connect, $query);

        if (mysqli_num_rows($result)>=1) {
            $_SESSION['valid'] = true;
            $_SESSION['timeout'] = time();
            $_SESSION['username'] = $username;

            echo 'You have entered valid use name and password<br>';
            echo "You are now logged in as $username.";
                header("Location: ./account/");

        }else {
            $msg = 'Wrong username or password';
        }
    }
    ?>
</div>

<div class = "container" style="text-align:center;">
    <form class = "form-signin" role = "form"
          action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
          ?>" method = "post">
        <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
        <input type = "username" class = "form-control"
               name = "username" placeholder = "username"
               required autofocus>
        <br>
        <input type = "password" class = "form-control"
               name = "password" placeholder = "password" required>
        <br>
        <button class = "btn btn-lg btn-primary btn-block" type = "submit"
                name = "login">Login</button>
    </form>
    <h4>New user? <a href="/signup.php">Click here!</a></h4>
</div>

</body>
</html>