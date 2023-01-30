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
    <div class="textareaRead">
        <textarea class="styleArea" style="resize:none" readonly cols="100" rows="16">
            Hallo
        </textarea>
    </div>
<div class="container-fluid">
    <div class="row">
        <div class="textarea">
            <div class="col-sm-1">
                <input style="resize:none" type="date" name="date">
            </div>
                <div class="col-sm-1">
                        <select id="selectUser">
                            <option>--Alle--</option>
                            <option>Matthias Plaickner</option>
                            <option>Simon Ploner</option>
                            <option>Thomas Reinthaler</option>
                            <option>Miacheal Huber</option>
                            <option>Matthias Ploner</option>
                        </select>
                </div>
            <div class="col-sm-8">
                    <textarea class="styleArea styleHover" id="message" style="resize: none" cols="100" rows="8"></textarea>
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
        var date = document.getElementById("date");
        if(selectValue==="Michael Huber"){
            id=1;
        }
        if(selectValue==="Matthias Plaickner"){
            id=2;
        }
        if(selectValue==="Matthias Ploner"){
            id=3;
        }
        if(selectValue==="Simon Ploner"){
            id=4;
        }
        if(selectValue==="Thomas Reinthaler"){
            id=5;
        }

        console.log(selectValue);
/*
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
*/
    }
</script>


</body>
</html>

</body>
</html>
