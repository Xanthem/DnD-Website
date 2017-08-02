<?php
require_once "$_SERVER[DOCUMENT_ROOT]/config/basic_config.php";
require_once "$_SERVER[DOCUMENT_ROOT]/config/gameplay_db_connect.php";

$sql = "SELECT * FROM spells;";

$result = mysqli_query($connect, $sql);
$connect->close();

?>

<h1>List of Spells</h1>
<body>
<table>
    <thead>
    <tr>
        <th><b>Name</b></th>
        <th><b>Available Classes</b></th>
        <th><b>Spell Level</b></th>
        <th><b>Description</b></th>
    </tr>
    </thead>

    <tbody>
    <?php
    ?>
    <?php while($row = mysqli_fetch_array($result)):;?>
        <tr align="center">
            <td style="vertical-align:top;" class="capitalize"><?php echo $row["spell_name"];?></td>
            <td style="vertical-align:top;"><?php echo $row["spell_classes"];?></td>
            <td style="vertical-align:top;"><?php echo $row["spell_level"];?></td>
            <td style="vertical-align:top;"><?php echo $row["spell_description"];?></td>
        </tr>
    <?php endwhile;?>
    </tbody>
</table>
</body>
