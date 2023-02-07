<?php

    error_reporting(E_ALL);
    $db = new mysqli("127.0.0.1", "root", "Kennwort0", "website");
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    // set parameters and execute
    $datum = $_GET["date"];
    $userId = $_GET["benutzer"];

    $stmt = $db->prepare("SELECT Eintragstext FROM Eintrag WHERE BenutzerID = ? and Datum = ? ");

    $stmt->bind_param("is", $userId, $datum);

    $stmt->execute();

    $result = $stmt->get_result();
    if($result->num_rows != 0){
        $ergebnis = $result->fetch_assoc();
    }else{
        $db->close();
    }
    //echo "New entries created successfully";

    $stmt->close();
    $db->close();

    echo json_encode($ergebnis);
?>
