<?php
require_once "$_SERVER[DOCUMENT_ROOT]/config/user_db_connect.php";
$username = $_POST['username'];
$password = $_POST['password'];
# $username = $_POST['username'];


if ($password != NULL) {
    $sql = "INSERT INTO login_information ( username, password )
VALUES ( '$username', '$password' )";
    if(mysqli_query($connect, $sql)){
        echo "Records added successfully.";
        $msg = "Account Registration Success!";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
        $msg = "There was a problem registering the account. \n Please try again.";
    }
}
else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
    $msg = "Must enter a password.";
}

$connect->close();
header( "Location: ./login.php?$msg" );

?>
