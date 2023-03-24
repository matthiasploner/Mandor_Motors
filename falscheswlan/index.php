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

<div class="center">
    <h1>Es tut uns leid!</h1>
    <p>Sie befinden sich im flaschen W-Lan.</p>
    <p>Der Name des richtigen W-Lans lautet: "StartupLab"</p>
    <button onclick="window.location.href='../'">Home</button>
    <button onclick="window.location.href='/Stream'">Stream</button>
    <?php
    if(isset($_COOKIE['benutzername'])) {
        echo '<button onclick="window.location.href=\'/steuerung\'">Steuerung</button>';
    }
    ?>
    <button onclick="window.location.href='/driveassistent'">Drive-Assistent</button>
</div>
</body>
<script src="functions.js"></script>
</html>