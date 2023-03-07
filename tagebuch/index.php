<?php
    require '../login/loginfunctions.php';
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <link rel="icon" type="image/vnd.microsoft.icon" href="../mmlogo.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="functions.js"></script>
    <link rel="stylesheet" href="styleSheet.css">
    <title>Tagebuch</title>
</head>
<body onload="loadAll()">

    <div class="topnav">
        <a href="../"><img src="../MM_Icon.png"></a>
        <div class="topnav-right">
            <a href="/Team">About Us</a>
            <a href="/login">Account</a>
            <div class="dropdown-PC">
                <div class="dropdown-btnPC" onclick='dropdownFunction()'>
                    <a>Menu</a>
                </div>
                <div id="pcDropdown" class="dropdown-pcContent">
                    <a href="#">Tagebuch</a>
                    <a href="/entwicklung">Entwicklung</a>
                    <a href="/adminpage">Admin-Page</a>
                </div>
            </div>
        </div>
        <div id="mobile-nav" class="menu-overlay">
            <button class="mobile-nav-clsbtn" onclick="navclose()">≡</button>
            <div class="mobile-content">
                <a href="/Team">About Us</a>
                <a href="/login">Account</a>
                <a href="#">Tagebuch</a>
                <a href="/entwicklung">Entwicklung</a>
                <a href="/adminpage">Admin-Page</a>
            </div>
        </div>

        <button class="mobile-nav-btn" onclick="navopen()">≡</button>
    </div>
    <br><br>
    <?php
    if(isset($_COOKIE['benutzername']) && isset($_COOKIE['token'])){
        verifyCookie();

        echo '
        <div class="textareaRead col-lg-8">
                    <br>
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
                        <option>gemeinsame Arbeiten</option>
                        <option>Matthias Plaickner</option>
                        <option>Simon Ploner</option>
                        <option>Thomas Reinthaler</option>
                        <option>Michael Huber</option>
                        <option>Matthias Ploner</option>
                    </select>
                    <form id="form1" runat="server">
                        date: <input type="text" id="datepicker" />
                    </form>
                    <br>
                    <button onclick=readText()>Suchen</button>
                    <button onclick=loadAll()>Filter löschen</button>
            </div>   
        </div>
    <div  class="textareaRead col-lg-8">
    <br>
         <textarea class="styleArea styleHover form-control" id="message" style="resize: none"rows="8"></textarea>
    </div>
 
    <div class="col-lg-3">
   
    
                <br><br>
                <p>Benutzer und Datum für Eintrag auswählen:</p>
                    <select id="selectUser">
                        <option>gemeinsame Arbeiten</option>
                        <option>Matthias Plaickner</option>
                        <option>Simon Ploner</option>
                        <option>Thomas Reinthaler</option>
                        <option>Michael Huber</option>
                        <option>Matthias Ploner</option>
                    </select>
                    <input style="resize:none" id="date" type="date" name="date">
                    <button onclick=saveText()>Speichern</button>
    </div>';
    }
    else{
        setcookie("destination", "tagebuch", time() + 3600, "/");
        echo '
        <div class="textareaRead col-lg-8">
                    <br>
                    <div class="top"><h1>Unser Tagebuch</h1></div>            
                    <textarea class="styleArea form-control" style="resize:none" id="readArea" cols="100" readonly rows="21"></textarea>
        </div>
           <br><br><br><br><br>
            <a href='.'javascript:toggle("containerid")'.'>Filter anwenden</a>
            <div id="containerid" style="display:none">
             
                <p>Benutzer und Datum für Eintrag auswählen:</p>
                    <select id="selectReadUser">
                        <option>--Alle--</option>
                        <option>gemeinsame Arbeiten</option>
                        <option>Matthias Plaickner</option>
                        <option>Simon Ploner</option>
                        <option>Thomas Reinthaler</option>
                        <option>Michael Huber</option>
                        <option>Matthias Ploner</option>
                    </select>
                    <form id="form1" runat="server">
                        date: <input type="text" id="datepicker" />
                    </form>
                
            
                    <br>
                    <button onclick=readText()>Suchen</button>
                    <button onclick=loadAll()>Filter löschen</button>
            </div>   
        </div>';
    }
    ?>


</html>

