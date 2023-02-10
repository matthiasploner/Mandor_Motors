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
        <link rel="stylesheet" href="myStyle.css">
    </head>
    <body>
        <?php
            if(isset($_COOKIE['accepted_cookie']) || isset($_POST['cookie_consent']) && $_POST['cookie_consent'] == 'yes'){
                setcookie('accepted_cookie', 'yes', time() + (86400 * 30), "/");
                ?>
                <form method = "post"">
                    <p>Benutzername: <input type="text" name="benutzername"/></p>
                    <p>Passwort: <input type="password" name="passwort"/></p>
                    <p><input type="submit" /></p>
                </form>
                <?php
            }
            else if(isset($_POST['cookie_consent']) && $_POST['cookie_consent'] == 'no'){
                header("Location: /");
            }
            else{
                ?>
                <form method = "post"">
                    <p>Benutzername: <input type="text" name="benutzername" disabled/></p>
                    <p>Passwort: <input type="password" name="passwort" disabled/></p>
                    <p><input type="submit" /></p>
                </form>

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
    </body>
</html>
