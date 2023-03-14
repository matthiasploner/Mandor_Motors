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
                <a href="/tagebuch">Tagebuch</a>
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
            <a href="/tagebuch">Tagebuch</a>
            <a href="/entwicklung">Entwicklung</a>
            <a href="/adminpage">Admin-Page</a>
        </div>
    </div>
    <button class="mobile-nav-btn" onclick="navopen()">≡</button>
</div>
<div class="impressum">
<div class="col-md-4 col-lg-4 col-sm-12 col-md-offset-1">
    <h1>Impressum:</h1>
    <h4>Verantwortlich für den Inhalt dieser Webseite gemäß § 5 TMG:</h4>
    <address>
        Mandor Motors GbR<br>
        +39 342 767 8341<br>
        Dantestraße, 39E 39042 Brixen, Autonome Provinz Bozen - Südtirol
    </address>
    <h4>Vertreten durch die Geschäftsführer:</h4>
    <ul>
        <li>Matthias Plaickner, Unterbrunnergasse 18, 39040 Natz-Schabs</li>
        <li>Simon Ploner, Nauders 6, 39037 Rodeneck</li>
    </ul>
    <h4>Kontakt:</h4>
    <ul>
        <li>Telefon: +39 349 628 9729</li>
        <li>E-Mail: <a href="mailto: mandormotors@gmail.com">mandormotors@gmail.com</a></li>
    </ul>
    <h4>Verantwortlich für den Inhalt nach § 55 Abs. 2 RStV:</h4>
    <ul>
        <li>Simon Ploner, Nauders 6, 39037 Rodeneck</li>
        <li>Micheal Huber, Kiener-Dorfweg 12, 39030 Kiens</li>
    </ul>
    <h4>Haftungshinweis:</h4>
    <p>Trotz sorgfältiger inhaltlicher Kontrolle übernehmen wir keine Haftung für die Inhalte externer Links. </p>
    <p> Für den Inhalt der verlinkten Seiten sind ausschließlich deren Betreiber verantwortlich.</p>
    <h4>Urheberrecht:</h4>
    <p>Die auf dieser Webseite verwendeten Texte, Bilder und Grafiken sind urheberrechtlich geschützt. </p>
    <p>Eine Vervielfältigung oder Verwendung dieser Inhalte in anderen elektronischen oder gedruckten Publikationen,</p>
    <p>ist ohne ausdrückliche Zustimmung des Autors nicht gestattet.</p>
</div>
</div>
</body>
</html>