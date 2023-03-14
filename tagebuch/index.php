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
        <title>Mandor Motors</title>
    </head>
    <body onload="loadAll()">

        <div class="topnav">
            <a href="../"><img src="../MM_Icon.png"></a>
            <div class="topnav-right">
                <a href="/Team">About Us</a>
                <a href="/login"><?php
                    if(!isset($_COOKIE['benutzername'])){
                        echo 'Account';
                    }else{
                        echo $_COOKIE['benutzername'];
                    }
                    ?></a>
                <div class="dropdown-PC">
                    <div class="dropdown-btnPC" onclick='dropdownFunction()'>
                        <a>Menu</a>
                    </div>
                    <div id="pcDropdown" class="dropdown-pcContent">
                        <a href="/downloads">Downloads</a>
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
                    <a href="/login"><?php
                        if(!isset($_COOKIE['benutzername'])){
                            echo 'Account';
                        }else{
                            echo $_COOKIE['benutzername'];
                        }
                        ?></a>
                    <a href="/downloads">Downloads</a>
                    <a href="#">Tagebuch</a>
                    <a href="/entwicklung">Entwicklung</a>
                    <a href="/adminpage">Admin-Page</a>
                </div>
            </div>

            <button class="mobile-nav-btn" onclick="navopen()">≡</button>
        </div>
        <br><br>
        <div class="tagebuch">
            <div class="col-lg-8">
                <h1>Unser Tagebuch</h1>
                <textarea class="form-control styleArea" style="resize:none" id="readArea" cols="100" readonly rows="20"></textarea>
            </div>
            <div class="col-lg-3 search-select">
                <div id="containerid">
                    <p>Benutzer und Datum für Eintrag auswählen:</p>
                    <select class="search-select-user" id="selectReadUser">
                        <option>--Alle--</option>
                        <option>gemeinsame Arbeiten</option>
                        <option>Matthias Plaickner</option>
                        <option>Simon Ploner</option>
                        <option>Thomas Reinthaler</option>
                        <option>Michael Huber</option>
                        <option>Matthias Ploner</option>
                    </select>
                    <form class="search-select-date" id="form1" runat="server">
                        <input type="text" id="datepicker" placeholder=" yyyy-mm-dd"/>
                    </form>
                    <button onclick=readText()>Suchen</button>
                    <button onclick=loadAll()>Filter löschen</button>
                </div>
            </div>
        <?php
            if(isset($_COOKIE['benutzername']) && isset($_COOKIE['token'])){
                verifyCookie();

                echo '
            <div  class="col-lg-8 tagebuch-write">
                <textarea class="styleHover form-control styleArea" id="message" style="resize: none"rows="7"></textarea>
            </div>
         
            <div class="col-lg-3 save-select">
                        <p>Benutzer und Datum für Eintrag auswählen:</p>
                            <select class="save-select-user" id="selectUser">
                                <option>gemeinsame Arbeiten</option>
                                <option>Matthias Plaickner</option>
                                <option>Simon Ploner</option>
                                <option>Thomas Reinthaler</option>
                                <option>Michael Huber</option>
                                <option>Matthias Ploner</option>
                            </select>
                            <form class="save-select-date" id="form2" runat="server">
                                <input type="text" id="sec-datepicker" placeholder=" yyyy-mm-dd"/>
                            </form>
                            <button onclick=saveText()>Speichern</button>
            </div>';
            }
            else{
                setcookie("destination", "tagebuch", time() + 3600, "/");
            }
        ?>
        </div>
    </body>
</html>

