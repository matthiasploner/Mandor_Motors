<!DOCTYPE html>
<html lang="de">
<head>
    <link rel="icon" type="image/vnd.microsoft.icon" href="../mmlogo.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mandor Motors</title>
</head>
<body>
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
                <a href="/tagebuch">Tagebuch</a>
                <a href="/driveassistent">Entwicklung</a>
                <?php
                    if(isset($_COOKIE['benutzername'])) {
                        echo '<a href="/adminpage">Admin-Page</a>';
                    }
                ?>
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
            <a href="/tagebuch">Tagebuch</a>
            <a href="/driveassistent">Entwicklung</a>
            <?php
                if(isset($_COOKIE['benutzername'])) {
                    echo '<a href="/adminpage">Admin-Page</a>';
                }
            ?>
        </div>
    </div>
        <button class="mobile-nav-btn" onclick="navopen()">≡</button>
    </div>
        <div class="download">
            <div class="programme-download">
                <h1><b>Andere Programme von uns:</b></h1>
                <div class="col-md-2 col-lg-2 col-sm-12">
                    <img src="../zip.png" class="img-responsive" alt="Download">
                    <h4><b>Fit and Run with Fun</b></h4>
                    <h4><b>Download: <a href="../FITandRUNwithFun.zip" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-offset-1 col-sm-12">
                    <img src="../zip.png" class="img-responsive" alt="Download">
                    <h4><b>Text to Speech</b></h4>
                    <h4><b>Download: <a href="../Text_to_Speech.zip" download>Hier</a></b></h4>
                </div>
            </div>
            <div class="tp-download">
                <h1><b>Technologie und Planung:</b></h1>
                <div class="col-md-2 col-lg-2 col-sm-12">
                    <img src="../pdf.png" class="img-responsive" alt="Download">
                    <h4><b>Websiteplanung.pdf</b></h4>
                    <h4><b>Download: <a href="../Websiteplanung.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-offset-1 col-sm-12">
                    <img src="../pdf.png" class="img-responsive" alt="Download">
                    <h4><b>Scrum-Methode.pdf</b></h4>
                    <h4><b>Download: <a href="../Scrum-Methode.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-offset-1 col-sm-12">
                    <img src="../pdf.png" class="img-responsive" alt="Download">
                    <h4><b>Figma, Trello, Gantt und Website.pdf</b></h4>
                    <h4><b>Download: <a href="../Figma, Trello, Gantt und Website.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-offset-1 col-sm-12">
                    <img src="../pdf.png" class="img-responsive" alt="Download">
                    <h4><b>ER-Modell und Use-Case.pdf</b></h4>
                    <h4><b>Download: <a href="../ER-Modell und Use-Case.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-12">
                    <img src="../pdf.png" class="img-responsive" alt="Download">
                    <h4><b>Bauplan_Advanced.pdf</b></h4>
                    <h4><b>Download: <a href="../Bauplan_Advanced.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-offset-1 col-sm-12">
                    <img src="../pdf.png" class="img-responsive" alt="Download">
                    <h4><b>Bauplan und Websiteplan.pdf</b></h4>
                    <h4><b>Download: <a href="../Bauplan und Websiteplan.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-offset-1 col-sm-12">
                    <img src="../pdf.png" class="img-responsive" alt="Download">
                    <h4><b>Angebot, Projektumfang und Kostenschätzung.pdf</b></h4>
                    <h4><b>Download: <a href="../Angebot, Projektumfang und Kostenschätzung.pdf" download>Hier</a></b></h4>
                </div>
            </div>
            <div class="pm-download">
                <h1><b>Projekt-Management:</b></h1>
                <div class="col-md-2 col-lg-2 col-sm-12">
                    <img src="../pdf.png" class="img-responsive" alt="Download">
                    <h4><b>Projektauftrag.pdf</b></h4>
                    <h4><b>Download: <a href="../Projektauftrag.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-offset-1 col-sm-12">
                    <img src="../pdf.png" class="img-responsive" alt="Download">
                    <h4><b>Finanzierungsplan.pdf</b></h4>
                    <h4><b>Download: <a href="../Finanzierungsplan.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-offset-1 col-sm-12">
                    <img src="../pdf.png" class="img-responsive" alt="Download">
                    <h4><b>Firmengründungsblatt.pdf</b></h4>
                    <h4><b>Download: <a href="../Firmengründungsblatt.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-offset-1 col-sm-12">
                    <img src="../pdf.png" class="img-responsive" alt="Download">
                    <h4><b>Gantt-Diagramm.pdf</b></h4>
                    <h4><b>Download: <a href="../Gantt-Diagramm.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-12">
                    <img src="../pdf.png" class="img-responsive" alt="Download">
                    <h4><b>Kostenplan.pdf</b></h4>
                    <h4><b>Download: <a href="../Kostenplan.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-offset-1 col-sm-12">
                    <img src="../pdf.png" class="img-responsive" alt="Download">
                    <h4><b>Meilensteine.pdf</b></h4>
                    <h4><b>Download: <a href="../Meilensteine.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-offset-1 col-sm-12">
                    <img src="../pdf.png" class="img-responsive" alt="Download">
                    <h4><b>OBS.pdf</b></h4>
                    <h4><b>Download: <a href="../OBS.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-offset-1 col-sm-12">
                    <img src="../pdf.png" class="img-responsive" alt="Download">
                    <h4><b>WBS.pdf</b></h4>
                    <h4><b>Download: <a href="../WBS.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-12">
                    <img src="../pdf.png" class="img-responsive" alt="Download">
                    <h4><b>Sponsoren_Broschüre.pdf</b></h4>
                    <h4><b>Download: <a href="../Sponsoren_Broschüre.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-offset-1 col-sm-12">
                    <img src="../pdf.png" class="img-responsive" alt="Download">
                    <h4><b>RessourcenPlan.pdf</b></h4>
                    <h4><b>Download: <a href="../RessourcenPlan.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-offset-1 col-sm-12">
                    <img src="../pdf.png" class="img-responsive" alt="Download">
                    <h4><b>Risikoanalyse.pdf</b></h4>
                    <h4><b>Download: <a href="../Risikoanalyse.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-offset-1 col-sm-12">
                    <img src="../pdf.png" class="img-responsive" alt="Download">
                    <h4><b>Rollenbeschreibung.pdf</b></h4>
                    <h4><b>Download: <a href="../Rollenbeschreibung.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-12">
                    <img src="../pdf.png" class="img-responsive" alt="Download">
                    <h4><b>Business Case und Lastenheft.pdf</b></h4>
                    <h4><b>Download: <a href="../Business Case und Lastenheft.pdf" download>Hier</a></b></h4>
                </div>
            </div>
        </div>
    </body>
</html>