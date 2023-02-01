<?php
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
                $stmt = $db->prepare("UPDATE Benutzer SET Ablaufdatum=ADDDATE(now(), 3), Token = ? WHERE Benutzername = ?");
                $stmt->bind_param( "ss", $token, $benutzer);
                $stmt->execute();
                $stmt->close();
                $db->close();
                setcookie("token", $token, time() + (86400 * 30), "/");
                setcookie("benutzername", $benutzer, time() + (86400 * 30), "/");
                header("Location: /adminpage");
            }
        }else{
            $db->close();
            echo "falsche Anmeldedaten";
        }
    }
    function verifyCookie(){
        $db = new mysqli('127.0.0.1', 'root', 'Kennwort0', 'website');
        $stmt = $db->prepare("SELECT Token, DateDiff(Ablaufdatum, now()) AS Differenz FROM Benutzer WHERE Benutzername LIKE ? And Token LIKE ?");
        $stmt->bind_param("ss", $_COOKIE['benutzername'], $_COOKIE['token']);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();

        if($result->num_rows == 0 || $result->fetch_assoc()['Differenz'] < 0){
            setcookie('token', "", time() - 3600, "/"); //cookies werden gelöscht
            setcookie('benutzername', "", time() - 3600, "/");
            unset($_COOKIE['token']);
            unset($_COOKIE['benutzername']);
            $db -> close();
            header("Location: /login");
        }else{
            $stmt = $db->prepare("UPDATE Benutzer SET Ablaufdatum=ADDDATE(now(), 3) WHERE Benutzername LIKE ?");
            $stmt->bind_param("s", $benutzer);
            $stmt->execute();
            $stmt->close();
            $db -> close();
        }
    }
?>