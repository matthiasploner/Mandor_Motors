<?php
    require '../login/loginfunctions.php';

    if(isset($_COOKIE['benutzername']) && isset($_COOKIE['token'])){
        verifyCookie();
    }
    else{
        header("Location: /login");
    }
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <link rel="icon" type="image/vnd.microsoft.icon" href="../mmlogo.ico">
    <link rel="stylesheet" href="adminstyle.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mandor Motors</title>
</head>

<body>
    <div class="topnav">
        <a href="../"><img src="/medien/backgrounds/MM_Icon.png"></a>
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
                    <a href="#">Admin-Page</a>
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
                <a href="#">Admin-Page</a>
            </div>
        </div>

        <button class="mobile-nav-btn" onclick="navopen()">≡</button>
    </div>
    <div class="centertext">
        <h1>Admin-Page</h1>
    </div>
    <br>
    <div class="center">
        <button onclick="window.location.href='/steuerung'">Steuerung</button>
        <button onclick="window.location.href='/Stream'">Stream</button>
        <button onclick="window.location.href='/driveassistent'">Drive-Assistent</button>
    </div>
    <script src="functions.js"></script>
</body>