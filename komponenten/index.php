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
        <a href="#">About Us</a>
        <a href="/login">Account</a>
        <div class="dropdown-PC">
            <div class="dropdown-btnPC" onclick='dropdownFunction()'>
                <a>Menu</a>
            </div>
            <div id="pcDropdown" class="dropdown-pcContent">
                <a href="/tagebuch">Tagebuch</a>
                <a href="/bauplan">Bauplan</a>
                <a href="/adminpage">Admin-Page</a>
            </div>
        </div>
    </div>
    <div id="mobile-nav" class="menu-overlay">
        <button class="mobile-nav-clsbtn" onclick="navclose()">≡</button>
        <div class="mobile-content">
            <a href="#">About Us</a>
            <a href="/login">Account</a>
            <a href="/tagebuch">Tagebuch</a>
            <a href="/bauplan">Bauplan</a>
            <a href="/adminpage">Admin-Page</a>
        </div>
    </div>

    <button class="mobile-nav-btn" onclick="navopen()">≡</button>
</div>
<img src="../BP_IMG.jpg" class="img-responsive" alt="Bild">

<div class="col-md-4 col-lg-4 col-sm-12">
    <img src="../Raspberry.png" class="img-responsive" alt="Bild">
    <p>Raspberry Pi</p>
    <p>Ein Raspberry Pi ist ein kleiner, kostengünstiger und vielseitiger Computer, der in der Größe einer Kreditkarte erhältlich ist. Er wurde entwickelt, um den Zugang zu Computertechnologie zu demokratisieren und ist eine beliebte Wahl für Bastler, Programmierer und Lernende. Der Raspberry Pi kann für eine Vielzahl von Projekten genutzt werden, wie z.B. als Medienzentrale, Spielkonsole oder für das IoT (Internet der Dinge).</p>
</div>
<div class="col-md-4 col-lg-4 col-sm-12">
    <img src="../Kamera.jpg" class="img-responsive" alt="Bild">
    <p>Kamera</p>
    <p>Die Raspberry Pi Kamera ist eine speziell entwickelte Kamera, die mit dem Raspberry Pi Computer kompatibel ist. Sie ist klein und einfach zu installieren und ermöglicht es dem Benutzer, Bilder und Videos aufzunehmen und zu streamen. Die Kamera kann für eine Vielzahl von Projekten genutzt werden, wie z.B. Überwachungskameras, Drohnen, Robotern und anderen Anwendungen im Bereich der Bildverarbeitung und -analyse.</p>
</div>
<div class="col-md-4 col-lg-4 col-sm-12">
    <img src="../StepDown.jpg" class="img-responsive" alt="Bild">
    <p>Step-Downs</p>
    <p>Ein Step-Down-5V-Regler ist eine elektronische Schaltung, die dazu verwendet wird, eine höhere Eingangsspannung auf eine stabilisierte 5-Volt-Ausgangsspannung zu reduzieren. Sie wird oft in elektronischen Geräten eingesetzt, die eine 5-Volt-Versorgung benötigen, wie z.B. Arduino und Raspberry Pi Boards, LED-Beleuchtungen oder USB-Geräte. Der Step-Down-5V-Regler arbeitet durch die Umwandlung von überschüssiger Eingangsleistung in Wärme, um den Stromfluss zu regulieren und eine stabile Ausgangsspannung zu liefern.</p>
</div>
<div class="col-md-4 col-lg-4 col-sm-12">
    <img src="../aakku.png" class="img-responsive" alt="Bild">
    <p>Stromversorgung</p>
    <p>Ein RC-Auto-Akku ist ein wiederaufladbarer Energiespeicher, der speziell für den Einsatz in ferngesteuerten Autos entwickelt wurde. Diese Akkus haben typischerweise eine höhere Leistungsdichte als Standard-Akkus und können hohe Ströme liefern, um die Motoren von RC-Autos anzutreiben. RC-Auto-Akkus sind in verschiedenen Größen und Kapazitäten erhältlich und können je nach Modell des RC-Autos unterschiedliche Stecker- und Spannungsoptionen haben.</p>
</div>
<div class="col-md-4 col-lg-4 col-sm-12">
    <img src="../reifen.jpg" class="img-responsive" alt="Bild">
    <p>Reifen</p>
    <p>Mecanum-Räder sind spezielle omnidirektionale Räder, die es einem Fahrzeug ermöglichen, sich in jede Richtung zu bewegen, ohne seine Ausrichtung zu ändern. Diese Räder sind mit speziellen Rollen ausgestattet, die es dem Fahrzeug ermöglichen, seitlich zu bewegen, sich um die eigene Achse zu drehen und sogar diagonal zu fahren. Mecanum-Räder werden oft in Robotern, automatisierten Förderanlagen und anderen mobilen Maschinen eingesetzt, die eine präzise Bewegung in engen Räumen oder auf unebenem Gelände erfordern.</p>
</div>
<div class="col-md-4 col-lg-4 col-sm-12">
    <img src="../lichter.png" class="img-responsive" alt="Bild">
    <p>Lichter</p>
    <p>RC-Auto-Lichter sind spezielle LEDs, die in ferngesteuerten Autos eingebaut werden, um sie besser sichtbar zu machen und ihnen ein realistischeres Aussehen zu verleihen. Diese Lichter können in einer Vielzahl von Farben und Konfigurationen angebracht werden, wie z.B. Frontscheinwerfer, Rücklichter, Blinker und Nebelscheinwerfer. RC-Auto-Lichter werden oft von Enthusiasten genutzt, um ihre RC-Autos zu personalisieren und realistischer zu gestalten. Sie können entweder über den Hauptakku des RC-Autos oder über separate Batterien betrieben werden.</p>
</div>
<div class="col-md-4 col-lg-4 col-sm-12">
    <img src="../ddriver.png" class="img-responsive" alt="Bild">
    <p>Motoren Driver</p>
    <p>Ein RC-Auto-Motortreiber ist eine elektronische Schaltung, die zwischen dem Motor und der Stromversorgung des ferngesteuerten Autos platziert wird. Der Motortreiber dient dazu, die Drehzahl und Richtung des Motors zu steuern, indem er die Stromversorgung moduliert und den Motor in verschiedene Drehrichtungen bewegt. Es gibt verschiedene Arten von Motortreibern, darunter bürstenlose DC-Motortreiber (BLDC) und H-Brückentreiber. Einige Motortreiber bieten auch Funktionen wie Stromüberwachung, Überhitzungsschutz und Anschlussmöglichkeiten für externe Steuerungssysteme.</p>
</div>
<div class="col-md-4 col-lg-4 col-sm-12">
    <img src="../motor.jpeg" class="img-responsive" alt="Bild">
    <p>Motoren</p>
    <p>RC-Auto-Motoren sind elektrische Motoren, die speziell für den Einsatz in ferngesteuerten Autos entwickelt wurden. Diese Motoren sind in der Regel bürstenlos und haben eine hohe Leistungsdichte, um hohe Geschwindigkeiten und schnelle Beschleunigungen zu ermöglichen. RC-Auto-Motoren werden in verschiedenen Größen und Leistungsklassen angeboten und können je nach Modell des RC-Autos unterschiedliche Spannungsoptionen haben. Es gibt auch Motoren, die speziell für den Einsatz in Geländewagen oder Rennwagen ausgelegt sind. Der Motor ist eines der wichtigsten Elemente in einem RC-Auto und trägt entscheidend zur Leistung und Geschwindigkeit des Fahrzeugs bei.</p>
</div>

<script>
    function dropdownFunction() {
        document.getElementById("pcDropdown").classList.toggle("show");
    }
    function navopen() {
        document.getElementById("mobile-nav").style.width = "100%";
    }
    function navclose() {
        document.getElementById("mobile-nav").style.width = "0%";
    }
</script>
</body>
</html>