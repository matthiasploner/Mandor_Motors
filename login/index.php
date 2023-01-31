<?php
    error_reporting(E_ALL);
    ini_set ('display_errors', 'On');
    if(isset($_COOKIE['benutzername']) && isset($_COOKIE['token'])){
        verifyCookie();
    }

    if(isset($_POST['benutzername']) && isset($_POST['passwort'])){
        verifylogin();
    }
    function verifyCookie(){
        $db = new mysqli('127.0.0.1', 'root', 'Kennwort0', 'website');
        $stmt = $db->prepare("SELECT * FROM Benutzer WHERE Benutzername = ? and Token like ?");
        $stmt->bind_param("ss", $_COOKIE['benutzername'], $_COOKIE['token']);
        $stmt->execute();
        $erg = $stmt->get_result();
        $stmt->close();

         if($erg->num_rows != 0){
            $db -> close();
            header("Location: /adminpage");
        }
        $db -> close();
    }
    function verifylogin(){
        $benutzer = $_POST['benutzername'];
        $passwort = $_POST['passwort'];
        $db = new mysqli("127.0.0.1", "root", "Kennwort0", "website");
        $stmt = $db->prepare("SELECT Passwort, Ablaufdatum FROM Benutzer WHERE Benutzername = ?");
        $stmt->bind_param("s", $benutzer);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();

        if($result->num_rows != 0){
            $ergebnis = $result->fetch_assoc();
            if(password_verify($passwort, $ergebnis['Passwort'])){
                $token = bin2hex(random_bytes(20));
                $stmt2 = $db->prepare("UPDATE Benutzer SET Ablaufdatum=ADDDATE(now(), 3), Token = ? WHERE Benutzername = ?");
                $stmt2->bind_param("ss", $token, $benutzer);
                $stmt2->execute();
                $stmt2->close();
                $db->close();
                setcookie("token", $token);
                setcookie("benutzername", $benutzer);
                header("Location: /adminpage");
            }
        }
        $db->close();
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
