<!DOCTYPE html>
<html lang="de">
    <head>
        <link rel="icon" type="image/vnd.microsoft.icon" href="../mmlogo.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mandor Motors</title>
    </head>
    <body onload="getDistance(),lichtState(),color()">
        <div class="topnav">
            <a href="../"><img src="../medien/backgrounds/MM_Icon.png"></a>
            <div class="topnav-right">
                <a href="/Team">About Us</a>
                <?php
                if(!isset($_COOKIE['benutzername'])){
                    echo '<a href="/login">Login</a>';
                }else{
                    echo '<a href="#" id="log-out" class="logOut">
                             <span class="initial-text">' . $_COOKIE["benutzername"]. '</span>
                             <span class="hover-text">Abmelden</span>
                           </a>';
                }
                ?>
                <div class="dropdown-PC">
                    <div class="dropdown-btnPC" onclick='dropdownFunction()'>
                        <a>Menu</a>
                    </div>
                    <div id="pcDropdown" class="dropdown-pcContent">
                        <a href="/downloads">Downloads</a>
                        <a href="/tagebuch">Tagebuch</a>
                        <a href="/entwicklung">Entwicklung</a>
                        <?php
                            if(isset($_COOKIE['benutzername'])) {
                                echo '<a href="/adminpage">Admin-Page</a>';
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div id="mobile-nav" class="menu-overlay">
                <button class="mobile-nav-clsbtn" onclick="navclose()">≡</button>
                <div class="mobile-content">
                    <a href="/Team">About Us</a>
                    <?php
                    if(!isset($_COOKIE['benutzername'])){
                        echo '<a href="/login">Login</a>';
                    }else{
                        echo '<a href="#" id="log-out" class="logOut">
                             <span class="initial-text">' . $_COOKIE["benutzername"]. '</span>
                             <span class="hover-text">Abmelden</span>
                           </a>';
                    }
                    ?>
                    <a href="/downloads">Downloads</a>
                    <a href="/tagebuch">Tagebuch</a>
                    <a href="/entwicklung">Entwicklung</a>
                    <?php
                        if(isset($_COOKIE['benutzername'])) {
                            echo '<a href="/adminpage">Admin-Page</a>';
                        }
                    ?>
                </div>
            </div>
            <button class="mobile-nav-btn" onclick="navopen()">≡</button>
        </div>
        <div class="model">
            <div class="car">
                <img id="light">
            </div>
            <div class="distance">
                <div class="back-left">
                    <img id="HL">
                </div>
                <div class="back-right">
                    <img id="HR">
                </div>
                <div class="front-left">
                    <img id="VL">
                </div>
                <div class="front-right">
                    <img id="VR">
                </div>
            </div>
            <div class="colour-sens">
                <div class="left-colour">
                    <button id="links" class="left-sens" disabled></button>
                </div>
                <div class="right-colour">
                    <button id="rechts" class="right-sens" disabled></button>
                </div>
            </div>
        </div>
        <script src="functions.js"></script>
    </body>
</html>