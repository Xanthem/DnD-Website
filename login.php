<?php
require_once("./config/basic_config.php");
$DB_HOST = "127.0.0.1";
$DB_NAME = "user_db";
$DB_USER = "query";
$DB_PASS = "D&D#DnD4Lyfe";

$connect = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

ob_start();
?>

<html lang = "en">
<head>
    <link rel="stylesheet" href="../resources/styles/mystyle.css" type="text/css">
</head>

<body>

<h2>Enter Username and Password</h2>
<div class = "container form-signin">

    <?php
    $msg = '';

    if (isset($_POST['login']) && !empty($_POST['username'])
        && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        #echo "Username: $username<br>";
        #echo "Password: $password<br>";

        $query = "SELECT username, password FROM user_db.login_information WHERE username='$username' AND password='$password'";
        $result = mysqli_query($connect, $query);

        #echo "Query result: $result";


        if (mysqli_num_rows($result)>=1) {
            $_SESSION['valid'] = true;
            $_SESSION['timeout'] = time();
            $_SESSION['username'] = $username;

            echo 'You have entered valid use name and password<br>';
            echo "You are now logged in as $username.";
                header("Location: ./frontEnd/");

        }else {
            $msg = 'Wrong username or password';
        }
    }
    ?>
</div> <!-- /container -->

<div class = "container">
    <form class = "form-signin" role = "form"
          action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
          ?>" method = "post">
        <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
        <input type = "text" class = "form-control"
               name = "username" placeholder = "username"
               required autofocus></br>
        <input type = "password" class = "form-control"
               name = "password" placeholder = "password" required>
        <br>
        <button class = "btn btn-lg btn-primary btn-block" type = "submit"
                name = "login">Login</button>
    </form>
</div>

</body>
</html>