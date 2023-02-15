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
    <link rel="icon" type="image/vnd.microsoft.icon" href="mmlogo.ico">
    <link rel="stylesheet" href="adminstyle.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminpage</title>
</head>

<body>
    <div class="topnav">
        <a href="../"><img src="../MM_Icon.png"></a>
        <div class="topnav-right">
            <a href="/Team">About Us</a>
            <a href="/login">Account</a>
            <div class="dropdown-PC">
                <div class="dropdown-btnPC" onclick='dropdownFunction()'>
                    <a>Menu</a>
                </div>
                <div id="pcDropdown" class="dropdown-pcContent">
                    <a href="/tagebuch">Tagebuch</a>
                    <a href="/bauplan">Bauplan</a>
                    <a href="#">Admin-Page</a>
                </div>
            </div>
        </div>
        <div id="mobile-nav" class="menu-overlay">
            <button class="mobile-nav-clsbtn" onclick="navclose()">≡</button>
            <div class="mobile-content">
                <a href="/Team">About Us</a>
                <a href="/login">Account</a>
                <a href="/tagebuch">Tagebuch</a>
                <a href="/bauplan">Bauplan</a>
                <a href="#">Admin-Page</a>
            </div>
        </div>

        <button class="mobile-nav-btn" onclick="navopen()">≡</button>
    </div>
    <div class="centertext">
        <h1>Admin-Page</h1>
    </div>
    <div class="center">
        <button onclick="window.location.href='/steuerung'">Steuerung</button>
        <button onclick="window.location.href='/tagebuch'">Stream</button>
        <button onclick="window.location.href='/tagebuch'">Informationen</button>
        <button onclick="window.location.href='/tagebuch'">Änderungen</button>
    </div>
    <script>
        function navopen() {
        document.getElementById("mobile-nav").style.width = "100%";
        }
        function navclose() {
        document.getElementById("mobile-nav").style.width = "0%";
        }
    </script>
</body>