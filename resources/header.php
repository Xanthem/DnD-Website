<head>
    <link rel="stylesheet" href="../resources/styles/mystyle.css" type="text/css">
    <!-- <link rel="stylesheet" href="../resources/styles/background.css" type="text/css"> -->
    <link rel="stylesheet" href="../resources/styles/someOtherStyle.css" type="text/css">
    <link rel="stylesheet" href="../resources/styles/inputs.css" type="text/css">
</head>

<body>
    <!-- <div id="wrapperHeader">
        <div id="header">
            <img src="../resources/images/D&D%20Logo%20NEW.png" align="center"/>
        </div>
    </div> -->
    


    <ul id="nav-bar">
        <a href="http://dnd.wizards.com/"><img src="../resources/images/D&D%20Splat%20Transparent.png" border="0" alt="Image_link" align="left" height="42" width="250"></a>
        <li><a href="/">Home</a></li>
        <li><a href="/spells">Spells</a></li>
        <li><a href="/monsters">Monsters</a></li>
        <li><a href="/sessions">Live Sessions</a></li>
        <li><a href="/account">Account</a></li>


        <?php
        if (isset($_SESSION['valid']))
        { ?>
            <li><a href="/characters/index.php">Characters</a></li>
            <li><a href="/characters/character_creator.php">Character Creator</a></li>
            <li style="float:right"><a href="/logout.php">Logout</a></li>
        <?php } else
        { ?>
            <li style="float:right"><a href="/login.php">Login</a></li>
        <?php } ?>
    </ul>
