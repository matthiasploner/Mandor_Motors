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
<body onload="loadAll()">

    <div class="topnav">
        <a href="../"><img src="../MM_Icon.png"></a>
    </div>
    <?php
    if(isset($_COOKIE['benutzername']) && isset($_COOKIE['token'])){
        verifyCookie();

        echo '
        <div class="textareaRead col-lg-8">
                    <div class="top"><h1>Unser Tagebuch</h1></div>            
                    <textarea class="styleArea form-control" style="resize:none" id="readArea" cols="100" readonly rows="12"></textarea>
        </div>
        <br><br><br><br><br>
        <div class="col-lg-3">
         <a href='.'javascript:toggle("containerid")'.'>Filter anwenden</a>
            <div id="containerid" style="display:none">
             
                <p>Benutzer und Datum für Eintrag auswählen:</p>
                    <select id="selectReadUser">
                        <option>--Alle--</option>
                        <option>Matthias Plaickner</option>
                        <option>Simon Ploner</option>
                        <option>Thomas Reinthaler</option>
                        <option>Michael Huber</option>
                        <option>Matthias Ploner</option>
                    </select>
                    <input style="resize:none" id="readDate" type="date" name="date">
                    <button onclick=readText()>Suchen</button>
            </div>   
        </div>
    <div  class="textareaRead col-lg-8">
    <br>
         <textarea class="styleArea styleHover form-control" id="message" style="resize: none"rows="8"></textarea>
    </div>
 
    <div class="col-lg-3">
   
    
                <br><br>
                <p>Benutzer und Datum für Eintrag auswählen:</p>
                    <select id="selectReadUser">
                        <option>--Alle--</option>
                        <option>Matthias Plaickner</option>
                        <option>Simon Ploner</option>
                        <option>Thomas Reinthaler</option>
                        <option>Michael Huber</option>
                        <option>Matthias Ploner</option>
                    </select>
                    <input style="resize:none" id="readDate" type="date" name="date">
                    <button onclick=saveText()>Speichern</button>
    </div>';
    }
    else{
        setcookie("destination", "tagebuch", time() + 3600, "/");
        echo '
        <div class="textareaRead col-lg-8">
                    <div class="top"><h1>Unser Tagebuch</h1></div>            
                    <textarea class="styleArea form-control" style="resize:none" id="readArea" cols="100" readonly rows="16"></textarea>
        </div>
           <br><br><br><br><br>
            <a href='.'javascript:toggle("containerid")'.'>Filter anwenden</a>
            <div id="containerid" style="display:none">
             
                <p>Benutzer und Datum für Eintrag auswählen:</p>
                    <select id="selectReadUser">
                        <option>--Alle--</option>
                        <option>Matthias Plaickner</option>
                        <option>Simon Ploner</option>
                        <option>Thomas Reinthaler</option>
                        <option>Michael Huber</option>
                        <option>Matthias Ploner</option>
                    </select>
                    <input style="resize:none" id="readDate" type="date" name="date">
                    <button onclick=readText()>Suchen</button>
            </div>   
        </div>';
    }
    ?>


    <script>
        var controlle=0;

        function toggle(id){

            var e= document.getElementById(id);
            if (e.style.display == "none"){
                e.style.display = "";
            } else {
                e.style.display = "none";
            }
        }

        function loadAll(){
            var xhttp = new XMLHttpRequest();


            xhttp.open("GET", "readAll.php",true);   //file.php muss natürlich angepasst werden

            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    values = JSON.parse(xhttp.responseText);
                    console.log(values);

                    document.getElementById('readArea').value = values["Eintragstext"];
                    // values ist hier jetzt ein Objekt bzw. ein Array aus Objekten. Teste dies mit Ausgabe: console.log(values);
                }
            };
            xhttp.send();
        }


        function readText(){


            var select = document.getElementById('selectReadUser');
            var selectValue = select.options[select.selectedIndex].value;
            var id=getUser(selectValue);
            var readArea=document.getElementById('readArea');
            readArea.valueOf();
            var date = document.getElementById("readDate");
            var xhttp = new XMLHttpRequest();


            xhttp.open("GET", "readSQL.php?benutzer="+id+"&date="+date.value,true);   //file.php muss natürlich angepasst werden

            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    values = JSON.parse(xhttp.responseText);
                    console.log(values);

                    document.getElementById('readArea').value = values["Eintragstext"];
                    // values ist hier jetzt ein Objekt bzw. ein Array aus Objekten. Teste dies mit Ausgabe: console.log(values);
                }
            };
            xhttp.send();

        }



        function saveText(){
            var select = document.getElementById('selectUser');
            var selectValue = select.options[select.selectedIndex].value;
            const message = document.getElementById('message');
            var id=getUser(selectValue);
            var date = document.getElementById("datum");


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
    </script>
</>
</html>

