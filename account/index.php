<?php
require_once "$_SERVER[DOCUMENT_ROOT]/config/auth_config.php";
?>

<head>
    <link rel="stylesheet" href="../resources/styles/mystyle.css" type="text/css">
</head>

<body>
<h1>Welcome <?php echo $_SESSION['username']; ?>!</h1>
</body>

<footer>
</footer>