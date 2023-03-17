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
        <a href="/login"><?php
            if(!isset($_COOKIE['benutzername'])){
                echo 'Account';
            }else{
                echo $_COOKIE['benutzername'];
            }
            ?></a>
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
            <a href="/login"><?php
                if(!isset($_COOKIE['benutzername'])){
                    echo 'Account';
                }else{
                    echo $_COOKIE['benutzername'];
                }
                ?></a>
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
    <p>Die Steuerung ist gerade besetzt.</p>
    <button onclick="window.location.href='../'">Home</button>
    <button onclick="window.location.href='/Stream'">Stream</button>
    <button onclick="window.location.href='/steuerung'">Erneut versuchen</button>
</div>


<script>
    function dropdownFunction() {
        document.getElementById("pcDropdown").classList.toggle("show");
    }
    function navopen() {
        document.getElementById("mobile-nav").style.width = "100%";
    }
    function navclose() {
        document.getElementById("mobile-nav").style.width = "0%";
    }
</script>
</body>
</html>