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
                        <a href="#">Entwicklung</a>
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
                    <a href="#">Entwicklung</a>
                    <?php
                        if(isset($_COOKIE['benutzername'])) {
                            echo '<a href="/adminpage">Admin-Page</a>';
                        }
                    ?>
                </div>
            </div>

            <button class="mobile-nav-btn" onclick="navopen()">≡</button>
        </div>
        <div class="slideshow-container-1">
            <div class="slide-1 blueprint">
                <img src="../medien/entwicklungbilder/tomplan.png" class="img-responsive" alt="TomsPlan">
                <p>Erste Skizze des Bauplanes vom MK1</p>
            </div>
            <div class="slide-1 blueprint">
                <img src="../medien/entwicklungbilder/bauplan.png" class="img-responsive" alt="Bauplan">
                <p>Bauplan und 3d Modell des MK1</p>
            </div>
            <div class="slide-1 blueprint">
                <img src="../medien/entwicklungbilder/firstlook.jpg" class="img-responsive" alt="FirstLook">
                <p>MK1 auf der Teststrecke</p>
            </div>
            <div class="slide-1 blueprint">
                <img src="../medien/entwicklungbilder/proto2.jpg" class="img-responsive" alt="MK2">
                <p>MK2 mit neuen Mecanum-Wheels auf der Teststrecke</p>
            </div>
            <div class="slide-1 blueprint">
                <img src="../medien/entwicklungbilder/MK3.jpg" class="img-responsive" alt="MK3">
                <p>MK3 mit neuen Sensoren auf der Teststrecke</p>
            </div>
            <div class="slide-1 blueprint">
                <img src="../medien/entwicklungbilder/MK3front.jpg" class="img-responsive" alt="MK3Frontansicht">
                <p>MK3 Front-Ansicht</p>
            </div>
            <div class="slide-1 blueprint">
                <img src="../medien/entwicklungbilder/MK3unten.jpg" class="img-responsive" alt="MK3Unten">
                <p>Verkabelung unterhalb des MK3s</p>
            </div>
            <div class="slide-1 blueprint">
                <img src="../medien/entwicklungbilder/MK4.jpg" class="img-responsive" alt="MK4">
                <p>Der neue MK4</p>
            </div>
            <div class="slide-1 blueprint">
                <img src="../medien/entwicklungbilder/MK4side.jpg" class="img-responsive" alt="MK4Seite">
                <p>Seiten/Rückansicht vom MK4</p>
            </div>
            <div class="slide-1 blueprint">
                <img src="../medien/entwicklungbilder/MK4front.jpg" class="img-responsive" alt="MK4Front">
                <p>MK4 Front-Ansicht</p>
            </div>
            <div class="slide-1 blueprint">
                <img src="../medien/entwicklungbilder/MK4top.jpg" class="img-responsive" alt="MK4Top">
                <p>MK4 aus der Luftperspektive</p>
            </div>
            <a class="prev" onclick="arrowNextSlide(-1)">❮</a>
            <a class="next" onclick="arrowNextSlide(1)">❯</a>
        </div>
        <div class="components">
            <div class="col-md-4 col-lg-4 col-sm-12">
                <img src="../medien/entwicklungbilder/Raspberry.png" loading="lazy" class="img-responsive" alt="Raspberry">
                <h3>Raspberry Pi</h3>
                <p>Ein Raspberry Pi ist ein kleiner, kostengünstiger und vielseitiger Computer, der in der Größe einer Kreditkarte erhältlich ist. Er wurde entwickelt, um den Zugang zu Computertechnologie zu demokratisieren und ist eine beliebte Wahl für Bastler, Programmierer und Lernende. Der Raspberry Pi kann für eine Vielzahl von Projekten genutzt werden, wie z.B. als Medienzentrale, Spielkonsole oder für das IoT (Internet der Dinge).</p>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12">
                <img src="../medien/entwicklungbilder/Kamera.jpg"loading="lazy" class="img-responsive" alt="Kamera">
                <h3>Kamera</h3>
                <p>Die Raspberry Pi Kamera ist eine speziell entwickelte Kamera, die mit dem Raspberry Pi Computer kompatibel ist. Sie ist klein und einfach zu installieren und ermöglicht es dem Benutzer, Bilder und Videos aufzunehmen und zu streamen. Die Kamera kann für eine Vielzahl von Projekten genutzt werden, wie z.B. Überwachungskameras, Drohnen, Robotern und anderen Anwendungen im Bereich der Bildverarbeitung und -analyse.</p>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12">
                <img src="../medien/entwicklungbilder/StepDown.jpg"loading="lazy" class="img-responsive" alt="StepDown">
                <h3>Step-Downs</h3>
                <p>Ein Step-Down-5V-Regler ist eine elektronische Schaltung, die dazu verwendet wird, eine höhere Eingangsspannung auf eine stabilisierte 5-Volt-Ausgangsspannung zu reduzieren. Sie wird oft in elektronischen Geräten eingesetzt, die eine 5-Volt-Versorgung benötigen, wie z.B. Arduino und Raspberry Pi Boards, LED-Beleuchtungen oder USB-Geräte. Der Step-Down-5V-Regler arbeitet durch die Umwandlung von überschüssiger Eingangsleistung in Wärme, um den Stromfluss zu regulieren und eine stabile Ausgangsspannung zu liefern.</p>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12">
                <img src="../medien/entwicklungbilder/aakku.png"loading="lazy" class="img-responsive" alt="Akku">
                <h3>Stromversorgung</h3>
                <p>Ein RC-Auto-Akku ist ein wiederaufladbarer Energiespeicher, der speziell für den Einsatz in ferngesteuerten Autos entwickelt wurde. Diese Akkus haben typischerweise eine höhere Leistungsdichte als Standard-Akkus und können hohe Ströme liefern, um die Motoren von RC-Autos anzutreiben. RC-Auto-Akkus sind in verschiedenen Größen und Kapazitäten erhältlich und können je nach Modell des RC-Autos unterschiedliche Stecker- und Spannungsoptionen haben.</p>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12">
                <img src="../medien/entwicklungbilder/reifen.jpg"loading="lazy" class="img-responsive" alt="Reifen">
                <h3>Reifen</h3>
                <p>Mecanum-Räder sind spezielle omnidirektionale Räder, die es einem Fahrzeug ermöglichen, sich in jede Richtung zu bewegen, ohne seine Ausrichtung zu ändern. Diese Räder sind mit speziellen Rollen ausgestattet, die es dem Fahrzeug ermöglichen, seitlich zu bewegen, sich um die eigene Achse zu drehen und sogar diagonal zu fahren. Mecanum-Räder werden oft in Robotern, automatisierten Förderanlagen und anderen mobilen Maschinen eingesetzt, die eine präzise Bewegung in engen Räumen oder auf unebenem Gelände erfordern.</p>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12">
                <img src="../medien/entwicklungbilder/frontlicht.png"loading="lazy" class="img-responsive" alt="Frontlicht">
                <h3>Frontlicht</h3>
                <p>RC-Auto-Lichter sind spezielle LEDs, die in ferngesteuerten Autos als Frontscheinwerfer eingebaut werden. Diese Lichter dienen dazu, das RC-Auto besser sichtbar zu machen und der Kamera eine bessere Sicht zu ermöglichen. Enthusiasten nutzen diese Lichter oft, um ihre RC-Autos zu personalisieren und realistischer zu gestalten. RC-Auto-Lichter können entweder über den Hauptakku des Autos oder über separate Batterien betrieben werden. Per Code können sie dann ein und ausgeschalten werden und in Kombination mit einem Fotowiederstand leuchten sie nur, wenn es dunkel ist. </p>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12">
                <img src="../medien/entwicklungbilder/lichter.png"loading="lazy" class="img-responsive" alt="Ruecklichter">
                <h3>Rücklichtichter</h3>
                <p>LEDs sind auch als Rücklichter in ferngesteuerten Autos sehr beliebt. Diese speziellen LEDs dienen dazu, das RC-Auto besser sichtbar zu machen und ihm ein realistischeres Aussehen zu verleihen. Rücklichter können in verschiedenen Farben und Konfigurationen angebracht werden, um das RC-Auto individuell zu gestalten. RC-Auto-Lichter können entweder über den Hauptakku des Autos oder über separate Batterien betrieben werden. Man könnte sie auch als Blinker verwenden.</p>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12">
                <img src="../medien/entwicklungbilder/ddriver.png"loading="lazy" class="img-responsive" alt="Motordriver">
                <h3>Motoren Driver</h3>
                <p>Ein RC-Auto-Motortreiber ist eine elektronische Schaltung, die zwischen dem Motor und der Stromversorgung des ferngesteuerten Autos platziert wird. Der Motortreiber dient dazu, die Drehzahl und Richtung des Motors zu steuern, indem er die Stromversorgung moduliert und den Motor in verschiedene Drehrichtungen bewegt. Es gibt verschiedene Arten von Motortreibern, darunter bürstenlose DC-Motortreiber (BLDC) und H-Brückentreiber. Einige Motortreiber bieten auch Funktionen wie Stromüberwachung, Überhitzungsschutz und Anschlussmöglichkeiten für externe Steuerungssysteme.</p>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12">
                <img src="../medien/entwicklungbilder/motor.jpeg"loading="lazy" class="img-responsive" alt="Motor">
                <h3>Motoren</h3>
                <p>RC-Auto-Motoren sind elektrische Motoren, die speziell für den Einsatz in ferngesteuerten Autos entwickelt wurden. Diese Motoren sind in der Regel bürstenlos und haben eine hohe Leistungsdichte, um hohe Geschwindigkeiten und schnelle Beschleunigungen zu ermöglichen. RC-Auto-Motoren werden in verschiedenen Größen und Leistungsklassen angeboten und können je nach Modell des RC-Autos unterschiedliche Spannungsoptionen haben. Es gibt auch Motoren, die speziell für den Einsatz in Geländewagen oder Rennwagen ausgelegt sind. Der Motor ist eines der wichtigsten Elemente in einem RC-Auto und trägt entscheidend zur Leistung und Geschwindigkeit des Fahrzeugs bei.</p>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12">
                <img src="../medien/entwicklungbilder/ultrasonic.png"loading="lazy" class="img-responsive" alt="Ultraschallsensoren">
                <h3>Ultraschall-Sensoren</h3>
                <p>Ein Arduino Ultraschallsensor ist ein elektronisches Bauteil, das in der Lage ist, Ultraschallwellen auszusenden und das Echo dieser Wellen zu empfangen. Der Sensor wird normalerweise mit einem Arduino-Board verbunden, um Entfernungen zu messen, Objekte zu erkennen und andere Anwendungen zu realisieren. Der Sensor sendet Ultraschallwellen aus und misst die Zeit, die benötigt wird, um das Echo zurückzusenden. Anhand dieser Zeitmessung kann die Entfernung zum Zielobjekt berechnet werden</p>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12">
                <img src="../medien/entwicklungbilder/fotoresistor.png"loading="lazy" class="img-responsive" alt="Fotowiderstand">
                <h3>Fotoresistor</h3>
                <p>Ein Fotoresistor, auch bekannt als Lichtabhängiger Widerstand (LDR), ist ein elektronisches Bauteil, das den Widerstand in Abhängigkeit von der Intensität des auf ihn fallenden Lichts verändert. Das bedeutet, dass wenn das Licht auf den Fotoresistor fällt, sein Widerstand abnimmt, und wenn das Licht abnimmt, sein Widerstand zunimmt. Fotoresistoren werden häufig in elektronischen Schaltungen eingesetzt, um Licht zu messen oder als Helligkeitssensoren in Automobilbeleuchtung, Straßenlaternen, Kameras und anderen Geräten, die auf die Lichtintensität reagieren müssen.</p>
            </div>

            <div class="col-md-4 col-lg-4 col-sm-12">
                <img src="../medien/entwicklungbilder/farbsensor.png"loading="lazy" class="img-responsive" alt="Farbsensoren">
                <h3>Farbsensor</h3>
                <p>Farbsensoren sind elektronische Geräte, die verwendet werden, um die Farbe eines Objekts zu messen und zu identifizieren. Sie basieren auf einer Technologie namens Spektroskopie, die das Licht in seine verschiedenen Farbkomponenten zerlegt und misst, wie viel von jeder Farbe vorhanden ist. Es gibt verschiedene Arten von Farbsensoren, darunter RGB-Sensoren, die die drei Grundfarben Rot, Grün und Blau messen, und spektrale Sensoren, die das gesamte Spektrum des Lichts messen. </p>
            </div>
        </div>
        <script src="functions.js"></script>
    </body>
</html>