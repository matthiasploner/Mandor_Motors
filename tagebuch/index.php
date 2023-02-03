<?php
    require '../login/loginfunctions.php';
?>
<!DOCTYPE html>
<html lang="de">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styleSheet.css">
    <title>Tagebuch</title>
</head>
<body>
    <div class="topnav">
        <a href="../"><img src="../MM_Icon.png"></a>
    </div>



    <?php
    if(isset($_COOKIE['benutzername']) && isset($_COOKIE['token'])){
        verifyCookie();
    echo '
    <div class="textareaRead col-lg-8 col-lg-offset-2">
            <div class="top"><h1>Unser Tagebuch</h1></div>
            <textarea class="styleArea form-control" style="resize:none" id="readArea" cols="100" readonly rows="16">
            </textarea>
            <p>
    
    
    
            </p>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="textarea">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Benutzer und Datum für Eintrag auswählen:</p>
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
                <div class="col-lg-8 col-lg-offset-2">
                        <textarea class="styleArea styleHover form-control" id="message" style="resize: none"rows="8"></textarea>
                </div>
                <div class="col-sm-1">
                    <button onclick=saveText()>Speichern</button>
                </div>
            </div>
        </div>
    </div><br>';}
    else{
        setcookie("destination", "tagebuch", time() + 3600, "/");
        echo '<div class="top"><h1>Unser Tagebuch</h1></div><div class="col-lg-2">
                    <br><br><br><br>
                    <p>Benutzer und Datum für Eintrag auswählen:</p>
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
                <div class="textareaRead col-lg-8">         
            <textarea class="styleArea form-control" style="resize:none" id="readArea" cols="100" readonly rows="18">
            </textarea>
            <p>
    
    
    
            </p>
        </div>
                <div class="col-lg-4 col-lg-offset-2"><button onclick=window.location.href="/login">Anmelden</button></div>';
    }
    ?>


    <script>
        function readText(){
            var select = document.getElementById('selectUser');
            var selectValue = select.options[select.selectedIndex].value;
            var id=getUser(selectValue);
            var readArea=document.getElementById('readArea');
            readArea.valueOf();
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

        function getUser(name){
            var id;
            if(name=="Michael Huber"){
                id=5;
            }
            if(name=="Matthias Plaickner"){
                id=2;
            }
            if(name=="Matthias Ploner"){
                id=1;
            }
            if(name=="Simon Ploner"){
                id=4;
            }
            if(name=="Thomas Reinthaler"){
                id=3;
            }if(name=="--Alle--"){
                id=6;
            }
            return id;
        }

        function saveText(){
            var select = document.getElementById('selectUser');
            var selectValue = select.options[select.selectedIndex].value;
            const message = document.getElementById('message');
            var id=getUser(selectValue);
            var date = document.getElementById("datum");


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

