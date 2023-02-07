<!DOCTYPE html>
<html lang="de">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mandor Motors</title>
</head>
<body>
<div class="topnav">
    <a href="../"><img src="../MM_Icon.png"></a>
    <div class="topnav-right">
        <a href="#">About Us</a>
        <a href="/login">Account</a>
        <div class="dropdown-PC">
            <div class="dropdown-btnPC" onclick='dropdownFunction("pcDropdown")'>
                <span>Menu</span>
            </div>
            <div id="pcDropdown" class="dropdown-pcContent">
                <a href="/tagebuch">Tagebuch</a>
                <a href="/bauplan">Bauplan</a>
            </div>
        </div>
    </div>
    <div id="mobile-nav" class="menu-overlay">
        <button class="mobile-nav-clsbtn" onclick="navclose()">≡</button>
        <div class="mobile-content">
            <a href="#">About Us</a>
            <a href="/login">Account</a>
            <a href="/tagebuch">Tagebuch</a>
            <a href="/bauplan">Bauplan</a>
        </div>
    </div>

    <button class="mobile-nav-btn" onclick="navopen()">≡</button>
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