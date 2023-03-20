<?php
    if(!isset($_COOKIE['benutzername']) || !isset($_COOKIE['token'])){
        header("Location: /login");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/vnd.microsoft.icon" href="../mmlogo.ico">
        <title>Mandor Motors</title>
        <meta name="viewport" content="user-scalable=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">

    </head>
    <body scroll="no" onload="checkAutonom(),getSpeed(),checkALicht()">
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
        <div class="user-interface">
            <div class="stream">
                <iframe id="myiframe" src="http://10.11.11.100:8000/index.html"></iframe>
            </div>

            <div class="auto-drive">
                <h3>Autonom Fahren:</h3>
                <p>Ein / Aus: <input type="checkbox" id="auton" onclick="changeType()"></p>
            </div>

            <div class="light">
                <h3>Licht:</h3>
                <p>Ein / Aus: <button id="licht" onclick="led()">Licht</button></p>
                <p>Autonom Licht: <input type="checkbox" id="aLight" onclick="autoLight()"></p>
            </div>

            <div class="speed">
                <h3>Speed:</h3>
                <p>In x/y :<label id = "speed"></label></p>
                <p>In % :</p>
                <input oninput="changeSpeed()" type="range" min="1" max="100" value="50" class="slider" id="myRange">
            </div>

            <div class="line-colour">
                <h3>Strassen Linie: </h3>
                <label class="line-colour-red">
                    <input type="radio" name="options" value="red" checked>
                </label>
                <label class="line-colour-blue">
                    <input type="radio" name="options" value="blue">
                </label>
                <label class="line-colour-green">
                    <input type="radio" name="options" value="green">
                </label>
                <label class="line-colour-yellow">
                    <input type="radio" name="options" value="yellow">
                </label>
                <label class="line-colour-white">
                    <input type="radio" name="options" value="white">
                </label>
                <label class="line-colour-black">
                    <input type="radio" name="options" value="black">
                </label>
            </div>

            <div class="bus-line-colour">
                <h3>Bus Linie: </h3>
                <label class="bus-colour-red">
                    <input type="radio" name="bus-options" value="red" checked>
                </label>
                <label class="bus-colour-blue">
                    <input type="radio" name="bus-options" value="blue">
                </label>
                <label class="bus-colour-green">
                    <input type="radio" name="bus-options" value="green">
                </label>
                <label class="bus-colour-yellow">
                    <input type="radio" name="bus-options" value="yellow">
                </label>
                <label class="bus-colour-white">
                    <input type="radio" name="bus-options" value="white">
                </label>
                <label class="bus-colour-black">
                    <input type="radio" name="bus-options" value="black">
                </label>
            </div>

            <div class="turn-str">
                <button onclick="hartLinks()">↶</button>
                <button onclick="hartLinks()">↷</button>
            </div>

            <div class="str-grid">
                <button></button>
                <button onclick="vorwaerts()">↑</button>
                <button></button>
                <button onclick="left()">←</button>
                <button onclick="stop()"><b>| |</b></button>
                <button onclick="rechts()">→</button>
                <button></button>
                <button onclick="zurueck()">↓</button>
                <button></button>
            </div>
        </div>

        <script src="functions.js"></script>
    </body>
</html>