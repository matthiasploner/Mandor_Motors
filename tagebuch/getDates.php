<?php

error_reporting(E_ALL);
$db = new mysqli("127.0.0.1", "root", "Kennwort0", "website");
if ($db->connect_error) {
    $ergebnis="Connection failed";
}

$result=$db->query("Select distinct Datum from Eintrag");
$ergebnis = $result->fetch_all();






if($result->num_rows != 0){

    $db->close();
}else{
    $db->close();
}



echo json_encode($ergebnis);
?>
