<?php
require_once "$_SERVER[DOCUMENT_ROOT]/config/basic_config.php";
require_once "$_SERVER[DOCUMENT_ROOT]/config/gameplay_db_connect.php";

$sql = "SELECT * FROM spells;";

$result = mysqli_query($connect, $sql);
$connect->close();

?>

<head>
    <script src="/resources/scripts/functions.js"></script>
</head>
<body>

<script src="/resources/scripts/functions.js" type="text/javascript"></script>

<h1>List of Spells</h1>

Click on a row for more info:
<table onload="tableHide()">
    <tr>
        <td>
            <p>Name</p>
        </td>
        <td>
            <p>Age</p>
        </td>
        <td>
            <p>Info</p>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <p>Blah blah blah blah blah blah blah blah.</p>
        </td>
    </tr>
</table>

<table>
    <thead>
    <tr>
        <th><b>Name</b></th>
        <th><b>Spell Level</b></th>
        <th><b>Available Classes</b></th>
        <th><b>Duration</b></th>
        <th><b>Details</b></th>
    </tr>
    </thead>

    <tbody>
    <?php
    ?>
    <?php while($row = mysqli_fetch_array($result)):;?>
        <tr class="header" align="center">
            <td style="vertical-align:center;" class="capitalize"><?php echo $row["spell_name"];?></td>
            <td style="vertical-align:center;"><?php echo $row["spell_level"];?></td>
            <td style="vertical-align:center;"><?php echo $row["spell_classes"];?></td>
            <td style="vertical-align:center;"><?php echo $row["spell_duration"];?></td>
            <td class="expander" style="vertical-align:center;">[+]</td>
        <tr>
            <td colspan="5" onload="tableHide()" class="capitalize">
                <p><?php echo $row["spell_description"];?></p>
            </td>
        </tr>
        

    <?php endwhile;?>
    </tbody>
</table>
</body>
