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
            <a href="#"><img src="MM_Icon.png"></a>
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
                    <a href="/bauplan">Bauplan</a>
                    <a href="/adminpage">Admin-Page</a>
                </div>
            </div>

            <button class="mobile-nav-btn" onclick="navopen()">≡</button>
        </div>

        <div class="center">
            <h1>MK1</h1>
            <p>What color is your MK1?</p>
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