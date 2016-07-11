<?php
require_once "$_SERVER[DOCUMENT_ROOT]/config/auth_config.php";
require_once "$_SERVER[DOCUMENT_ROOT]/config/user_db_connect.php";
require_once "$_SERVER[DOCUMENT_ROOT]/config/character_db_connect.php";

$sql = "SELECT char_id, char_name, char_class, char_race, char_lvl
        FROM character_db.characters 
          INNER JOIN user_db.login_information 
            ON user_db.login_information.user_id = character_db.characters.char_owner
        WHERE user_db.login_information.user_id = (SELECT user_id FROM user_db.login_information WHERE username='$_SESSION[username]')";

$result = mysqli_query($connect, $sql);
$connect->close();
?>

<body>
<h1>List of Characters</h1>

<table>
    <thead>
    <tr>
        <th><b>Name</b></th>
        <th><b>Class</b></th>
        <th><b>Race</b></th>
        <th><b>Level</b></th>
        <th data-sort-ignore="true"><b>Details</b></th>
    </tr>
    </thead>

    <tbody>
    <?php
    ?>
    <?php while($row = mysqli_fetch_array($result)):;?>
        <tr>
            <td class="capitalize"><?php echo $row["char_name"];?></td>
            <td><?php echo $row["char_class"];?></td>
            <td><?php echo $row["char_race"];?></td>
            <td><?php echo $row["char_lvl"];?></td>
            <td><?php echo '<a href="./show.php?id=' . $row["char_id"] . '">View Details</a>'?></td>
        </tr>
    <?php endwhile;?>

    <tr align="center">
        <td colspan="5"><a href="character_creator.php">Create a New Character</a></td>
    </tr>
    </tbody>
</table>
</body>

