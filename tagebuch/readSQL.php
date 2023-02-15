<?php

    error_reporting(E_ALL);
    $db = new mysqli("127.0.0.1", "root", "Kennwort0", "website");
    if ($db->connect_error) {
        $ergebnis="Connection failed";
    }
    $userId = $_GET["benutzer"];
    if($_GET["date"]!=null){
        $datum = $_GET["date"];

        if($_GET["benutzer"]!=7) {
            $stmt = $db->prepare("SELECT Eintragstext FROM Eintrag WHERE BenutzerID = ? and Datum = ? ;");
            $stmt->bind_param("is", $userId, $datum);
        }else{
            $stmt = $db->prepare("SELECT Eintragstext,Benutzername FROM Eintrag natural join Benutzer WHERE Datum = ?;");
            $stmt->bind_param("s",  $datum);
        }



    }else{
        $stmt = $db->prepare("SELECT Eintragstext,Datum FROM Eintrag WHERE BenutzerID = ?;");
        $stmt->bind_param("i",  $userId);
    }
    $stmt->execute();

    $result = $stmt->get_result();
    $stmt->close();
    $ergebnis = $result->fetch_all();
    $stmt->close();
    $db->close();




    echo json_encode($ergebnis);
?>
