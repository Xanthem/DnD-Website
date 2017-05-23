<?php
require_once "$_SERVER[DOCUMENT_ROOT]/config/basic_config.php";
require_once "$_SERVER[DOCUMENT_ROOT]/config/user_db_connect.php";
$username = $_GET['username'];
#print "Username: " . $username . "\n";
$password = $_GET['password'];
#print "Password: " . $password . "\n";
$userquery = "SELECT username FROM user_db.login_information WHERE username = '$username'";

# Null password
if ($password != NULL) {
    # Username already exists
    if (mysqli_query($connect, $userquery) != false) {

        $sql = "INSERT INTO login_information ( username, password ) VALUES ( '$username', '$password' )";

        if (mysqli_query($connect, $sql)) {
            echo "Records added successfully.";
            $_SESSION["msg"] = "Account Registration Success!\n
                                Please login.";
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
            $msg = "There was a problem registering the account. \n Please try again.";
        }
    } else {
        echo mysqli_error($connect);
        $_SESSION["msg"] = "Username already taken.";
    }
} else {
    echo "ERROR: Was not able to execute. " . mysqli_error($connect);
    $_SESSION["msg"] = "Must enter a password.";
}
#print "\nQuery: " . $userquery;

#echo $_SESSION["msg"];
$connect->close();
header( "Location: ../login.php" );

?>
