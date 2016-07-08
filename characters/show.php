<?php
require_once "$_SERVER[DOCUMENT_ROOT]/config/auth_config.php";
require_once "$_SERVER[DOCUMENT_ROOT]/config/character_db_connect.php";

$sql = "SELECT *
        FROM characters 
        WHERE char_id = '$_GET[id]'";

$result = mysqli_query($connect, $sql);
$connect->close();
?>

<body>
<h1>Details for </h1>
</body>
