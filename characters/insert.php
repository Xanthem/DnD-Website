<?php
require_once "$_SERVER[DOCUMENT_ROOT]/config/user_db_connect.php";
$username = $_POST['username'];
$password = $_POST['password'];
$userquery = "SELECT username FROM user_db.login_information WHERE username = '$username'";

# Null password
if ($password != NULL) {
    # Username already exists
    if (mysqli_query($connect, $userquery) != false) {

        $sql = "INSERT INTO login_information ( username, password ) VALUES ( $username, $password )";

        if(mysqli_query($connect, $sql)){ 
            echo "Records added successfully.";
            $_SESSION['ERROR_MSG'] = "Account Registration Success!";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
            $msg = "There was a problem registering the account. \n Please try again.";
        }
    }

    else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
        $_SESSION['ERROR_MSG'] = "Username already taken.";

    }
}
else {
    echo "ERROR: Was not able to execute statement $sql. " . mysqli_error($connect);
    $_SESSION['ERROR_MSG'] = "Must enter a password.";
}

$connect->close();
header( "Location: ./login.php" );

?>
