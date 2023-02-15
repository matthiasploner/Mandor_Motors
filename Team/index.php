<!DOCTYPE html>
<html lang="de">
    <head>
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
                <a href="#">About Us</a>
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
                    <a href="#">About Us</a>
                    <a href="/login">Account</a>
                    <a href="/tagebuch">Tagebuch</a>
                    <a href="/bauplan">Bauplan</a>
                    <a href="/adminpage">Admin-Page</a>
                </div>
            </div>

            <button class="mobile-nav-btn" onclick="navopen()">≡</button>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-12">
            <img src="../Matthias_Plaickner.jpg" class="img-responsive" alt="Matthias Plaickner">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-12">
            <img src="../Matthias_Ploner.jpg" class="img-responsive" alt="Matthias Plaickner">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-12">
            <img src="../Simon_Ploner.jpg" class="img-responsive" alt="Matthias Plaickner">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-12">
            <img src="../Michael_Huber.jpg" class="img-responsive" alt="Matthias Plaickner">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-12">
            <img src="../Thomas_Reinthaler.jpg" class="img-responsive" alt="Matthias Plaickner">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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