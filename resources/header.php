<head>
    <link rel="stylesheet" href="../resources/styles/mystyle.css" type="text/css">
</head>

<body>
    <ul>
        <li><a href="/index.php">Home</a></li>
        <li><a href="/frontEnd/character.php">Characters</a></li>

        <?php
        if (isset($_SESSION['valid']))
        { ?>
            <li style="float:right"><a class="active" href="/logout.php">Logout</a></li>
        <?php } else
        { ?>
            <li style="float:right"><a class="active" href="/login.php">Login</a></li>
        <?php } ?>
    </ul>

