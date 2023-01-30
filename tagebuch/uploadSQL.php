<?php
    error_reporting(E_ALL);
    $db = new mysqli("127.0.0.1", "root", "Kennwort0","website");
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    echo "Connected";
/*
    // set parameters and execute
    $datum = $_GET["datum"];
    $message = $_GET["message"];
    $userId=$_GET["benutzer"];

    $stmt = $db->prepare("INSERT INTO Eintrag (Datum,Eintragstext,BenutzerID ) VALUES (?,?,?)");

    $stmt->bind_param("ssi", $datum, $message, $userId);

    $stmt->execute();

    printf("Datenätze eingefügt: %d.\n", $stmt->error);

    echo "New entries created successfully";

    $stmt->close();
    $db->close();*/
    $string=$_GET["message"];
    echo json_encode($string);
?>
