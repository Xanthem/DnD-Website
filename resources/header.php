<head>
    <link rel="stylesheet" href="../resources/styles/mystyle.css" type="text/css">
    <link rel="stylesheet" href="../resources/styles/someOtherStyle.css" type="text/css">
</head>

<body>
    <ul id="nav-bar">
        <a href="http://dnd.wizards.com/"><img src="../resources/images/D&D%20Splat%20Transparent.png" border="0" alt="Image_link" align="left" height="42" width="250"></a>
        <li><a href="/index.php">Home</a></li>
        <li><a href="/account/">Account</a></li>
        <li><a href="/characters/index.php">Characters</a></li>

        <?php
        if (isset($_SESSION['valid']))
        { ?>
            <li style="float:right"><a href="/logout.php">Logout</a></li>
        <?php } else
        { ?>
            <li style="float:right"><a href="/login.php">Login</a></li>
        <?php } ?>
    </ul>
