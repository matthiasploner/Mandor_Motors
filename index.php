    <!DOCTYPE html>
<html lang="de">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mandor Motors</title>
    <style>

    </style>
</head>
<body>
<div class="topnav">
    <a class="active" href="#"><img src="MM_Icon.png"></a>
    <div class="topnav-right">
        <a href="#">About Us</a>
        <a href="#">Account</a>
        <div class="dropdown-PC">
            <div class="dropdown-btnPC" onclick='dropdownFunction("pcDropdown")'>
                <span>Menu</span>
            </div>
            <div id="pcDropdown" class="dropdown-pcContent">
                <a href="/tagebuch">Tagebuch</a>
                <a href="#">Bauplan</a>
            </div>
        </div>
    </div>
    <div id="mobile-nav" class="menu-overlay">
        <button class="mobile-nav-clsbtn" onclick="navclose()">≡</button>
        <div class="mobile-content">
            <a href="#">About Us</a>
            <a href="#">Account</a>
        </div>
    </div>

    <button class="mobile-nav-btn" onclick="navopen()">≡</button>
</div>

<div class="center">
    <h1>MK1</h1>
    <p>What colour is your MK1?</p>
    <button onclick="window.location.href='/tagebuch'">More about MK1</button>
    <button onclick="window.location.href='/tagebuch'">Stream</button>
</div>

<div class="navbar">
    <a href="#">Mandor Motors</a>
    <a href="#">Privacy & Legal</a>
    <a href="#">Contact</a>
    <a href="#">Careers</a>
    <a href="#">News</a>
    <a href="#">Locations</a>
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