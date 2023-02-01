<?php
    require 'loginfunctions.php';

    if(isset($_COOKIE['benutzername']) && isset($_COOKIE['token'])){
        header("Location: /adminpage");
    }
    if(isset($_POST['benutzername']) && isset($_POST['passwort'])){
        verifylogin();
    }
?>

<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form method = "post">
            <p>Benutzername: <input type="text" name="benutzername" /></p>
            <p>Passwort: <input type="password" name="passwort" /></p>
            <p><input type="submit" /></p>
        </form>
    </body>
</html>
