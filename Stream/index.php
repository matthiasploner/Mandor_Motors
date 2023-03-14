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
                        <a href="/entwicklung">Entwicklung</a>
                        <a href="/adminpage">Admin-Page</a>
                    </div>
                </div>
            </div>
            <div id="mobile-nav" class="menu-overlay">
                <button class="mobile-nav-clsbtn" onclick="navclose()">≡</button>
                <div class="mobile-content">
                    <a href="/Team">About Us</a>
                    <a href="/login">Account</a>
                    <a href="/tagebuch">Tagebuch</a>
                    <a href="/entwicklung">Entwicklung</a>
                    <a href="/adminpage">Admin-Page</a>
                </div>
            </div>
            <button class="mobile-nav-btn" onclick="navopen()">≡</button>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 stream-window">
            <iframe class="stream-frame" id="myiframe" src="http://10.11.11.100:8000/index.html" width="660" height="500"></iframe>
        </div>
    </body>
</html>