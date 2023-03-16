<?php
    error_reporting(E_ALL);
    ini_set ('display_errors', 'On');
    require 'loginfunctions.php';
    /*if(isset($_COOKIE['benutzername']) && isset($_COOKIE['token']) && isset($_COOKIE['accepted_cookie'])){
        header("Location: /adminpage");
    }*/
    if(isset($_POST['benutzername']) && isset($_POST['passwort']) && isset($_COOKIE['accepted_cookie'])){
        verifylogin();
    }
?>

<html>
    <head>
        <title>Mandor Motors</title>
        <link rel="icon" type="image/vnd.microsoft.icon" href="../mmlogo.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="myStyle.css">
    </head>

    <body>
    <div class="topnav">
        <a href="../"><img src="../MM_Icon.png"></a>
        <div class="topnav-right">
            <a href="/Team">About Us</a>
            <a href="#"><?php
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
                <a href="#"><?php
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
        <div>
            <?php
                if(isset($_COOKIE['accepted_cookie']) || isset($_POST['cookie_consent']) && $_POST['cookie_consent'] == 'yes'){
                    setcookie('accepted_cookie', 'yes', time() + (86400 * 30), "/");
                    ?>
                    <div class="box">
                        <form method="post">
                            <span class="text-center">login</span>
                            <div class="input-container">
                                <input type="text" name="benutzername"/>
                                <label>Benutzer:</label><br>
                            </div>
                            <div class="input-container">
                                <input type="password" name="passwort"/>
                                <label>Passwort:</label><br>
                            </div>
                            <button type="submit" class="btn">Anmelden</button>
                        </form>
                        <?php if(isset($_COOKIE['benutzername']) && isset($_COOKIE['token'])){
                            echo'<button id="log-out" type="submit" class="btn">Abmelden</button>';
                        }
                        ?>
                    </div>
                    <?php
                }
                else if(isset($_POST['cookie_consent']) && $_POST['cookie_consent'] == 'no'){
                    header("Location: ../");
                }
                else{
                    ?>
                    </div>
                        <div class="cookie-consent">
                            <p>Wir verwenden Cookies! Damit Sie sich einloggen können, müssen sie den Cookies zustimmen.</p>
                            <form method="post">
                                <input type="hidden" name="cookie_consent" value="yes">
                                <div class="button_wrap">
                                    <div class="button1">
                                        <button type="submit">Akzeptieren</button>
                                    </div>
                                    <div class="button2">
                                        <button type="submit" name="cookie_consent" value="no">Ablehnen</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                <?php
                }
            ?>
        </div>
    </body>
    <script src="functions.js"></script>
</html>