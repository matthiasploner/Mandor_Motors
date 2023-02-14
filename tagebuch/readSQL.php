<?php

    error_reporting(E_ALL);
    $db = new mysqli("127.0.0.1", "root", "Kennwort0", "website");
    if ($db->connect_error) {
        $ergebnis="Connection failed";
    }
    if(isset($_GET["date"])==true){
        $datum = $_GET["date"];
        $userId = $_GET["benutzer"];

        $stmt = $db->prepare("SELECT Eintragstext FROM Eintrag WHERE BenutzerID = ? and Datum = ? ;");

        $stmt->bind_param("is", $userId, $datum);
        $stmt->execute();

        $result = $stmt->get_result();
        $stmt->close();
        $ergebnis = $result->fetch_assoc();
    }

    if($result->num_rows != 0){

        $db->close();
    }else{
        $db->close();
    }



    echo json_encode($ergebnis);
?>
