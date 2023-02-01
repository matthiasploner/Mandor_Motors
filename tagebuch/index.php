<?php
    require '../login/loginfunctions.php';

    if(isset($_COOKIE['benutzername']) && isset($_COOKIE['token'])){
        verifyCookie();
    }
    else{
        header("Location: /login");
    }
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Tagebuch</title>
</head>
<body>
<div class="topnav">
    <a href="../"><img src="../MM_Icon.png"></a>
</div>

<div class="top"><h1>Unser Tagebuch</h1></div>
    <div class="textareaRead col-lg-8 col-lg-offset-2">
        <textarea class="styleArea form-control" style="resize:none" cols="100" readonly rows="18">
            Hallo
        </textarea>

    </div>

<div class="container-fluid">
    <div class="row">
        <div class="textarea">
            <h4>Daten einfügen:</h4>
            <div class="col-sm-2">
                <p>Benutzer für Eintrag auswählen:</p>
                    <select id="selectUser">
                        <option>--Alle--</option>
                        <option>Matthias Plaickner</option>
                        <option>Simon Ploner</option>
                        <option>Thomas Reinthaler</option>
                        <option>Michael Huber</option>
                        <option>Matthias Ploner</option>
                    </select>
                <input style="resize:none" id="datum" type="date" name="date">
            </div>
            <div class="col-lg-8">
                    <textarea class="styleArea styleHover form-control" id="message" style="resize: none"rows="8"></textarea>
            </div>
            <div class="col-sm-1">
                <button onclick=saveText()>Speichern</button>
            </div>

        </div>
    </div>
</div>

<script>

    function saveText(){

        var select = document.getElementById('selectUser');
        var selectValue = select.options[select.selectedIndex].value;
        const message = document.getElementById('message');

        var id;
        var date = document.getElementById("datum");

        if(selectValue=="Michael Huber"){
            id=1;
        }
        if(selectValue=="Matthias Plaickner"){
            id=2;
        }
        if(selectValue=="Matthias Ploner"){
            id=3;
        }
        if(selectValue=="Simon Ploner"){
            id=4;
        }
        if(selectValue=="Thomas Reinthaler"){
            id=5;
        }
        console.log(id);
        //console.log("uploadSQL.php?benutzer="+id+"&message="+message.value+"&date="+date.value);
        console.log(date.value);

        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", "uploadSQL.php?benutzer="+id+"&message="+message.value+"&date="+date.value,true);   //file.php muss natürlich angepasst werden

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                values = JSON.parse(xhttp.responseText);
                console.log(values);
                // values ist hier jetzt ein Objekt bzw. ein Array aus Objekten. Teste dies mit Ausgabe: console.log(values);
            }
        };
        xhttp.send();
        document.getElementById('message').value = '';

    }
</script>


</body>
</html>

</body>
</html>
