<!DOCTYPE html>
<html lang="de">
    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/vnd.microsoft.icon" href="mmlogo.ico">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mandor Motors</title>
    </head>
    <body>
        <div class="topnav">
            <a href=#><img src="medien/backgrounds/MM_Icon.png"></a>
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

        <div class="center">
            <h1>Sid MK5</h1>
            <p>What color is your Super-Intelligent-Driver?</p>
            <button onclick="window.location.href='/driveassistent'">Drive-Assistent</button>
            <?php
                if(isset($_COOKIE['benutzername'])){
                    echo '<button onclick="window.location.href=\'/steuerung\'">Steuerung</button>';
                }else{
                    echo '<button onclick="window.location.href=\'/Stream\'">Stream</button>';
                }
            ?>
        </div>

        <div class="navbar">
            <a href="/downloads">Downloads</a>
            <a href="/impressum">Impressum</a>
            <a href="mailto: mandormotors@gmail.com">Contact</a>
            <a href="https://www.google.com/maps/place/Dantestra%C3%9Fe,+39e,+39042+Brixen,+Autonome+Provinz+Bozen+-+S%C3%BCdtirol/@46.720341,11.6485398,18.21z/data=!4m6!3m5!1s0x4778050d856c4db3:0x5d34ee04dcc99ff7!8m2!3d46.7201447!4d11.6487849!16s%2Fg%2F11f4rdd5qz" target="_blank">Location</a>
        </div>

        <script src="functions.js"></script>
    </body>
</html>