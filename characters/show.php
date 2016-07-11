<?php
require_once "$_SERVER[DOCUMENT_ROOT]/config/auth_config.php";
require_once "$_SERVER[DOCUMENT_ROOT]/config/character_db_connect.php";

$sql = "SELECT *
        FROM characters 
        WHERE char_id = '$_GET[id]'";

$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result);
$connect->close();
?>

<body>
<h1>Details for <?php echo $row["char_name"]; ?></h1>
</body>
