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
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<h1 class="capitalize">Details for <?php echo $row["char_name"]; ?></h1>

<div class="nav nav-tabs">
    <ul class="tab-links">
        <li class="active"><a data-toggle="tab" href="#overview">Overview</a> </li>
        <li><a data-toggle="tab" href="#statistics">Statistics</a> </li>
        <li><a data-toggle="tab" href="#equipment">Equipment</a> </li>
        <li><a data-toggle="tab" href="#spells">Spells</a> </li>
    </ul>
</div>
<div class="tab-content">
    <div id="overview" class="tab-pane fade in active">
        <p>This is the overview tab</p>
    </div>

    <div id="statistics" class="tab-pane fade">
        <p>This is the statistics tab</p>
    </div>

    <div id="equipment" class="tab-pane fade">
        <p>This is the equipment tab</p>
    </div>

    <div id="spells" class="tab-pane fade">
        <p>This is the spells tab</p>
    </div>
</div>

</body>
