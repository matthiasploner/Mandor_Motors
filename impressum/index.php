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
                    <a href="/login"><?php
                        if(!isset($_COOKIE['benutzername'])){
                            echo 'Account';
                        }else{
                            echo $_COOKIE['benutzername'];
                        }
                        ?></a>
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
        <div class="impressum">
            <div class="col-md-3 col-lg-6 col-sm-12 col-md-offset-1">
                <h1>Impressum:</h1>
                <h4>Verantwortlich für den Inhalt dieser Webseite gemäß § 5 TMG:</h4>
                <address>
                    Mandor Motors GbR<br>
                    <a href="tel:+393427678341">+39 342 767 8341</a><br>
                    <a href="https://www.google.com/maps/place/Dantestra%C3%9Fe,+39e,+39042+Brixen,+Autonome+Provinz+Bozen+-+S%C3%BCdtirol/@46.720341,11.6485398,18.21z/data=!4m6!3m5!1s0x4778050d856c4db3:0x5d34ee04dcc99ff7!8m2!3d46.7201447!4d11.6487849!16s%2Fg%2F11f4rdd5qz" target="_blank">Dantestraße, 39E 39042 Brixen, Autonome Provinz Bozen - Südtirol</a>
                </address>
                <h4>Vertreten durch die Geschäftsführer:</h4>
                <ul>
                    <li>Matthias Plaickner, <a href="https://www.google.com/maps/place/Unterbrunnergasse,+18,+39040+Natz,+Autonome+Provinz+Bozen+-+S%C3%BCdtirol/@46.7522479,11.6805642,17z/data=!3m1!4b1!4m5!3m4!1s0x477804c743602409:0x1f9e53515a3d1629!8m2!3d46.7522442!4d11.6827529" target="_blank">Unterbrunnergasse 18, 39040 Natz-Schabs</a></li>
                    <li>Simon Ploner, <a href="https://www.google.com/maps/place/Nauders,+6,+39037+Rodengo+BZ/@46.78652,11.686132,17z/data=!3m1!4b1!4m6!3m5!1s0x4778033e220376ef:0x95eb94c37582355!8m2!3d46.7865163!4d11.6883207!16s%2Fg%2F11t9pb6b91" target="_blank"> Nauders 6, 39037 Rodeneck </a></li>
                </ul>
                <h4>Kontakt:</h4>
                <ul>
                    <li>Telefon: <a href="tel:+393496289729">+39 349 628 9729</a></li>
                    <li>E-Mail: <a href="mailto: mandormotors@gmail.com">mandormotors@gmail.com</a></li>
                </ul>
                <h4>Verantwortlich für den Inhalt nach § 55 Abs. 2 RStV:</h4>
                <ul>
                    <li>Simon Ploner, <a href="https://www.google.com/maps/place/Nauders,+6,+39037+Rodengo+BZ/@46.78652,11.686132,17z/data=!3m1!4b1!4m6!3m5!1s0x4778033e220376ef:0x95eb94c37582355!8m2!3d46.7865163!4d11.6883207!16s%2Fg%2F11t9pb6b91" target="_blank"> Nauders 6, 39037 Rodeneck</a></li>
                    <li>Micheal Huber, <a href="https://www.google.com/maps/place/Kiener+Dorfweg,+12,+39030+Kiens,+Autonome+Provinz+Bozen+-+S%C3%BCdtirol/@46.8077112,11.8352907,17z/data=!3m1!4b1!4m6!3m5!1s0x47781e70323c96fd:0x539962f03be0a3a1!8m2!3d46.8077075!4d11.8374794!16s%2Fg%2F11cpktzr5j" target="_blank"> Kiener-Dorfweg 12, 39030 Kiens </a></li>
                </ul>
                <h4>Haftungshinweis:</h4>
                <p>Trotz sorgfältiger inhaltlicher Kontrolle übernehmen wir keine Haftung für die Inhalte externer Links. </p>
                <p> Für den Inhalt der verlinkten Seiten sind ausschließlich deren Betreiber verantwortlich.</p>
                <h4>Urheberrecht:</h4>
                <p>Die auf dieser Webseite verwendeten Texte, Bilder und Grafiken sind urheberrechtlich geschützt. </p>
                <p>Eine Vervielfältigung oder Verwendung dieser Inhalte in anderen elektronischen oder gedruckten Publikationen, ist ohne ausdrückliche Zustimmung des Autors nicht gestattet.</p>
            </div>
        </div>
        <script src="functions.js"></script>
    </body>
</html>