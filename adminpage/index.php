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
    <link rel="stylesheet" href="adminstyle.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminpage</title>
</head>

<body>
<div class="topnav">
    <a href="#"><img src="../MM_Icon.png"></a>
    <div class="topnav-right">
        <a href="#">About Us</a>
        <a href="#">Account</a>
        <div class="dropdown-PC">
            <div class="dropdown-btnPC" onclick='dropdownFunction("pcDropdown")'>
                <span>Menu</span>
            </div>
            <div id="pcDropdown" class="dropdown-pcContent">
                <a href="/tagebuch">Tagebuch</a>
                <a href="/bauplan">Bauplan</a>
                <a href="/adminpage">Admin-Page</a>
            </div>
        </div>
    </div>
    <div id="mobile-nav" class="menu-overlay">
        <button class="mobile-nav-clsbtn" onclick="navclose()">≡</button>
        <div class="mobile-content">
            <a href="#">About Us</a>
            <a href="#">Account</a>
            <a href="/tagebuch">Tagebuch</a>
            <a href="/bauplan">Bauplan</a>
            <a href="/adminpage">Admin-Page</a>
        </div>
    </div>
</div>
    <div class="centertext">
        <h1>Admin-Page</h1>
    </div>
    <div class="center">
        <button onclick="window.location.href='/tagebuch'">Steuerung</button>
        <button onclick="window.location.href='/tagebuch'">Stream</button>
        <button onclick="window.location.href='/tagebuch'">Informationen</button>
        <button onclick="window.location.href='/tagebuch'">Änderungen</button>
    </div>
</body>