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
    <a href="../"><img src="../medien/backgrounds/MM_Icon.png"></a>
    <div class="topnav-right">
        <a href="/Team">About Us</a>
        <?php
        if(!isset($_COOKIE['benutzername'])){
            echo '<a href="/login">Login</a>';
        }else{
            echo '<a href="#" id="log-out" class="logOut">
                             <span class="initial-text">' . $_COOKIE["benutzername"]. '</span>
                             <span class="hover-text">Abmelden</span>
                           </a>';
        }
        ?>
        <div class="dropdown-PC">
            <div class="dropdown-btnPC" onclick='dropdownFunction()'>
                <a>Menu</a>
            </div>
            <div id="pcDropdown" class="dropdown-pcContent">
                <a href="/downloads">Downloads</a>
                <a href="/tagebuch">Tagebuch</a>
                <a href="/entwicklung">Entwicklung</a>
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
            <?php
            if(!isset($_COOKIE['benutzername'])){
                echo '<a href="/login">Login</a>';
            }else{
                echo '<a href="#" id="log-out" class="logOut">
                             <span class="initial-text">' . $_COOKIE["benutzername"]. '</span>
                             <span class="hover-text">Abmelden</span>
                           </a>';
            }
            ?>
            <a href="/downloads">Downloads</a>
            <a href="/tagebuch">Tagebuch</a>
            <a href="/entwicklung">Entwicklung</a>
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
                    <img src="../medien/downloadzips/zip.png" class="img-responsive" alt="Download">
                    <h4><b>Fit and Run with Fun</b></h4>
                    <h4><b>Download: <a href="../medien/downloadzips/FITandRUNwithFun.zip" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-offset-1 col-sm-12">
                    <img src="../medien/downloadzips/zip.png" class="img-responsive" alt="Download">
                    <h4><b>Text to Speech</b></h4>
                    <h4><b>Download: <a href="../medien/downloadzips/Text_to_Speech.zip" download>Hier</a></b></h4>
                </div>
            </div>
            <div class="tp-download">
                <h1><b>Technologie und Planung:</b></h1>
                <div class="col-md-2 col-lg-2 col-sm-12">
                    <img src="../medien/downloadzips/pdf.png" class="img-responsive" alt="Download">
                    <h4><b>Websiteplanung.pdf</b></h4>
                    <h4><b>Download: <a href="../medien/pmdownloads/Websiteplanung.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-offset-1 col-sm-12">
                    <img src="../medien/downloadzips/pdf.png" class="img-responsive" alt="Download">
                    <h4><b>Scrum-Methode.pdf</b></h4>
                    <h4><b>Download: <a href="../medien/pmdownloads/Scrum-Methode.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-offset-1 col-sm-12">
                    <img src="../medien/downloadzips/pdf.png" class="img-responsive" alt="Download">
                    <h4><b>Figma, Trello, Gantt und Website.pdf</b></h4>
                    <h4><b>Download: <a href="../medien/pmdownloads/Figma, Trello, Gantt und Website.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-offset-1 col-sm-12">
                    <img src="../medien/downloadzips/pdf.png" class="img-responsive" alt="Download">
                    <h4><b>ER-Modell und Use-Case.pdf</b></h4>
                    <h4><b>Download: <a href="../medien/pmdownloads/ER-Modell und Use-Case.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-12">
                    <img src="../medien/downloadzips/pdf.png" class="img-responsive" alt="Download">
                    <h4><b>Bauplan_Advanced.pdf</b></h4>
                    <h4><b>Download: <a href="../medien/pmdownloads/Bauplan_Advanced.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-offset-1 col-sm-12">
                    <img src="../medien/downloadzips/pdf.png" class="img-responsive" alt="Download">
                    <h4><b>Bauplan und Websiteplan.pdf</b></h4>
                    <h4><b>Download: <a href="../medien/pmdownloads/Bauplan und Websiteplan.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-offset-1 col-sm-12">
                    <img src="../medien/downloadzips/pdf.png" class="img-responsive" alt="Download">
                    <h4><b>Angebot, Projektumfang und Kostenschätzung.pdf</b></h4>
                    <h4><b>Download: <a href="../medien/pmdownloads/Angebot, Projektumfang und Kostenschätzung.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-offset-1 col-sm-12">
                    <img src="../medien/downloadzips/zip.png" class="img-responsive" alt="Download">
                    <h4><b>Technologie und Planung.zip</b></h4>
                    <h4><b>Download: <a href="../medien/downloadzips/TechnologieUndPlanung.zip" download>Hier</a></b></h4>
                </div>
            </div>
            <div class="pm-download">
                <h1><b>Projekt-Management:</b></h1>
                <div class="col-md-2 col-lg-2 col-sm-12">
                    <img src="../medien/downloadzips/pdf.png" class="img-responsive" alt="Download">
                    <h4><b>Projektauftrag.pdf</b></h4>
                    <h4><b>Download: <a href="../medien/pmdownloads/Projektauftrag.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-offset-1 col-sm-12">
                    <img src="../medien/downloadzips/pdf.png" class="img-responsive" alt="Download">
                    <h4><b>Finanzierungsplan.pdf</b></h4>
                    <h4><b>Download: <a href="../medien/pmdownloads/Finanzierungsplan.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-offset-1 col-sm-12">
                    <img src="../medien/downloadzips/pdf.png" class="img-responsive" alt="Download">
                    <h4><b>Firmengründungsblatt.pdf</b></h4>
                    <h4><b>Download: <a href="../medien/pmdownloads/Firmengründungsblatt.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-offset-1 col-sm-12">
                    <img src="../medien/downloadzips/pdf.png" class="img-responsive" alt="Download">
                    <h4><b>Gantt-Diagramm.pdf</b></h4>
                    <h4><b>Download: <a href="../medien/pmdownloads/Gantt-Diagramm.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-12">
                    <img src="../medien/downloadzips/pdf.png" class="img-responsive" alt="Download">
                    <h4><b>Kostenplan.pdf</b></h4>
                    <h4><b>Download: <a href="../medien/pmdownloads/Kostenplan.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-offset-1 col-sm-12">
                    <img src="../medien/downloadzips/pdf.png" class="img-responsive" alt="Download">
                    <h4><b>Meilensteine.pdf</b></h4>
                    <h4><b>Download: <a href="../medien/pmdownloads/Meilensteine.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-offset-1 col-sm-12">
                    <img src="../medien/downloadzips/pdf.png" class="img-responsive" alt="Download">
                    <h4><b>OBS.pdf</b></h4>
                    <h4><b>Download: <a href="../medien/pmdownloads/OBS.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-offset-1 col-sm-12">
                    <img src="../medien/downloadzips/pdf.png" class="img-responsive" alt="Download">
                    <h4><b>WBS.pdf</b></h4>
                    <h4><b>Download: <a href="../medien/pmdownloads/WBS.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-12">
                    <img src="../medien/downloadzips/pdf.png" class="img-responsive" alt="Download">
                    <h4><b>Sponsoren_Broschüre.pdf</b></h4>
                    <h4><b>Download: <a href="../medien/pmdownloads/Sponsoren_Broschüre.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-offset-1 col-sm-12">
                    <img src="../medien/downloadzips/pdf.png" class="img-responsive" alt="Download">
                    <h4><b>RessourcenPlan.pdf</b></h4>
                    <h4><b>Download: <a href="../medien/pmdownloads/RessourcenPlan.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-offset-1 col-sm-12">
                    <img src="../medien/downloadzips/pdf.png" class="img-responsive" alt="Download">
                    <h4><b>Risikoanalyse.pdf</b></h4>
                    <h4><b>Download: <a href="../medien/pmdownloads/Risikoanalyse.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-offset-1 col-sm-12">
                    <img src="../medien/downloadzips/pdf.png" class="img-responsive" alt="Download">
                    <h4><b>Rollenbeschreibung.pdf</b></h4>
                    <h4><b>Download: <a href="../medien/pmdownloads/Rollenbeschreibung.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-12">
                    <img src="../medien/downloadzips/pdf.png" class="img-responsive" alt="Download">
                    <h4><b>Business Case und Lastenheft.pdf</b></h4>
                    <h4><b>Download: <a href="../medien/pmdownloads/Business Case und Lastenheft.pdf" download>Hier</a></b></h4>
                </div>
                <div class="col-md-2 col-lg-offset-1 col-sm-12">
                    <img src="../medien/downloadzips/zip.png" class="img-responsive" alt="Download">
                    <h4><b>Projekt-Management.zip</b></h4>
                    <h4><b>Download: <a href="../medien/downloadzips/ProjektManagement.zip" download>Hier</a></b></h4>
                </div>
            </div>
        </div>
        <script src="functions.js"></script>
    </body>
</html>