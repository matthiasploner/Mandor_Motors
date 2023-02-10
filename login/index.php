<?php
    error_reporting(E_ALL);
    ini_set ('display_errors', 'On');
    require 'loginfunctions.php';
    if(isset($_COOKIE['benutzername']) && isset($_COOKIE['token']) && isset($_COOKIE['accepted_cookie'])){
        header("Location: /adminpage");
    }
    if(isset($_POST['benutzername']) && isset($_POST['passwort']) && isset($_COOKIE['accepted_cookie'])){
        verifylogin();
    }
?>

<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="myStyle.css">
    </head>
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
                            <label>Username</label>
                        </div>
                        <div class="input-container">
                            <input type="password" name="passwort"/>
                            <label>Passwort</label>
                        </div>
                        <button type="submit" class="btn">submit</button>
                    </form>
                </div>
                <?php
            }
            else if(isset($_POST['cookie_consent']) && $_POST['cookie_consent'] == 'no'){
                header("Location: /");
            }
            else{
                ?>
                <div class="box">
                    <form method="post">
                        <span class="text-center">login</span>
                        <div class="input-container">
                            <input type="text" name="benutzername"/>
                            <label>Username</label>
                        </div>
                        <div class="input-container">
                            <input type="password" name="passwort"/>
                            <label>Passwort</label>
                        </div>
                        <button type="submit" class="btn">submit</button>
                    </form>
                </div>
                    <div class="cookie-consent">
                        <p>Wir verwenden Cookies. Damit Sie sich einloggen können, müssen sie den Cookies zustimmen</p>
                        <form method="post">
                            <input type="hidden" name="cookie_consent" value="yes">
                            <button type="submit">Akzeptieren</button>
                            <button type="submit" name="cookie_consent" value="no">Ablehnen</button>
                        </form>
                    </div>

                <?php
            }
        ?>
    </div>
    </body>
</html>
