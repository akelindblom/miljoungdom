<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Miljöungdom</title>

    <!-- CSS -->
    <link rel="stylesheet" type ="text/css" href="css/style.css">

    <!-- Menu Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <!-- For the Arrows -->
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond&display=swap" rel="stylesheet">

</head>
<body>
    
    <!-- Menu big screen -->
    <nav id="slideNav1" class="big-screen">
        <a href="index.php" class="logo" id="logo">
            <p>Miljöungdom</p>
        </a>
        <ul>
            <li><a href="sida2.php">Bli medlem</a></li>
            <li><a href="sida3.php">Nyheter</a></li>
            <li><a href="sida4.php">Verksamhet</a></li>
            <li><a href="sida5.php">Föreningar</a></li>
            <li><a href="sida6.php">Stöd oss</a></li>
            <li><a href="sida7.php">Om oss</a></li>
        </ul>
    </nav>

    <!-- Menu small screen -->
    <nav id="slideNav2" class="small-screen">
        <div class="topnav">
            <a href="index.php" class="logo">
                <p>Miljöungdom</p>
            </a>
            <div class="icon">
                <a href="javascript:void(0);" onclick="dropdownNavbar()">
                    <div><i class="fa fa-bars"></i></div>
                </a>
            </div>
        </div>
        <div class="smallMenu">
            <div id="dropdownMenu">
                <ul id="dropdown">
                    <li><a href="sida2.php">Bli medlem</a></li>
                    <li><a href="sida3.php">Nyheter</a></li>
                    <li><a href="sida4.php">Verksamhet</a></li>
                    <li><a href="sida5.php">Föreningar</a></li>
                    <li><a href="sida6.php">Stöd oss</a></li>
                    <li><a href="sida7.php">Om oss</a></li>
                </ul>
            </div>
        </div>
    </nav>
