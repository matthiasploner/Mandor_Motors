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
                    <a href="#">About Us</a>
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
        <div class="personenmain">
            <div class="col-md-12 col-lg-11 col-sm-12 col-md-offset-1" >
                <img src="../the_team.jpg" class="img-responsive" alt="Matthias Plaickner">
                <br><br>
            </div>
        </div>
            <div class="personen">
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <img src="../Matthias_Plaickner.jpg" class="img-responsive" alt="Matthias Plaickner">
                    <h3><b>Matthias Plaickner (CEO und COO)</b></h3>
                    <p>Als Leiter von Mandor-Motors, einem führenden Unternehmen in der Automobilindustrie, mit umfangreicher Erfahrung und Expertise in der Branche, hat Matthias das Unternehmen in den letzten Jahren erfolgreich geleitet und durch seine visionäre Führung zu einem der Marktführer gemacht. Seine umfassenden Kenntnisse in den Bereichen Operations, Business Development und strategische Planung haben ihm geholfen, Mandor-Motors durch komplexe Marktbedingungen zu navigieren und das Wachstum des Unternehmens kontinuierlich zu fördern. Durch seine Leidenschaft für Nachhaltigkeit und Umweltbewusstsein hat er das Unternehmen auf einen zukunftsorientierten Kurs gebracht und Mandor-Motors zu einem Vorreiter in der Branche selbstfahrende Autos gemacht.</p>
                    <h4><b>E-mail: <a href="mailto: stplamat@bx.fallmerayer.it">stplamat@bx.fallmerayer.it</a></b></h4>
                    <h4><b>Telefon: +39 349 628 9729</b></h4>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <img src="../Simon_Ploner.jpg" class="img-responsive" alt="Matthias Plaickner">
                    <h3><b>Simon Ploner (Head of Finance)</b></h3>
                    <p>Simon Ploner ist unser Mitarbeiter mit einer beeindruckenden Erfolgsbilanz in der Finanzbranche. Mit einem Abschluss in Betriebswirtschaftslehre und einer umfassenden Expertise in den Bereichen Finanzen, Accounting und Controlling, ist Simon ein kompetenter Mitarbeiter für alle finanziellen Angelegenheiten. Sein Fokus liegt darauf, durch eine effiziente Finanzplanung und eine kontinuierliche Optimierung der Geschäftsprozesse, das finanzielle Wachstum des Unternehmens zu fördern. Er ist in der Lage, komplexe Finanzthemen in leicht verständliche Sprache zu übersetzen und steht jederzeit als Berater und Unterstützer zur Seite. Simon ist bekannt für seine Fähigkeit, Finanzkennzahlen klar und transparent zu kommunizieren und so eine umfassende Entscheidungsgrundlage für das Management und die Stakeholder zu schaffen.</p>
                    <h4><b>E-mail: <a href="mailto: stplosim@bx.fallmerayer.it">stplosim@bx.fallmerayer.it</a></b></h4>
                    <h4><b>Telefon: +39 342 767 8341</b></h4>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <img src="../Matthias_Ploner.jpg" class="img-responsive" alt="Matthias Plaickner">
                    <h3><b>Matthias Ploner (Head of Programming)</b></h3>
                    <p>Matthias Ploner ist unser Leiter in der Programmierung, der sein Fachwissen und seine Leidenschaft für die Software-Entwicklung erfolgreich in zahlreichen Projekten unter Beweis gestellt hat. Mit einem Abschluss in Informatik und einer umfassenden Expertise in den Bereichen Programmierung, Architektur und Qualitätssicherung, ist Matthias ein zuverlässiger Mitarbeiter, der sein Team zu Höchstleistungen motiviert. Matthias ist bekannt für seine Fähigkeit, komplexe technische Themen verständlich zu kommunizieren und Lösungen auf Augenhöhe mit seinen Kollegen und Kunden zu erarbeiten. Sein Fokus liegt darauf, durch kontinuierliche Verbesserung und Innovationen die Software-Entwicklung auf ein neues Level zu bringen und so die Geschäftsprozesse und das Kundenerlebnis zu optimieren.</p>
                    <h4><b>E-mail: <a href="mailto: stplomat@bx.fallmerayer.it">stplomat@bx.fallmerayer.it</a></b></h4>
                    <h4><b>Telefon: +39 392 409 4441</b></h4>
                    <br>
                </div>
                <div class="col-lg-offset-1 col-md-offset-1 col-md-4 col-lg-4 col-sm-12">
                    <img src="../Michael_Huberr.jpg" class="img-responsive" alt="Matthias Plaickner">
                    <h3><b>Michael Huber (CMO)</b></h3>
                    <p>Michael Huber ist unser Leiter in der Marketingabteilung mit umfassender Erfahrung in der Entwicklung und Umsetzung von Marketingstrategien für Unternehmen verschiedener Branchen. Mit einem Abschluss in Marketing und einer umfangreichen Expertise in den Bereichen Branding, Kommunikation und Digital Marketing, ist Michael ein kompetenter Mitarbeiter für alle Fragen rund um das Thema Marketing. Er versteht es, die Stärken und Herausforderungen eines Unternehmens zu analysieren und maßgeschneiderte Lösungen zu entwickeln, um die Marktposition zu verbessern und das Wachstum zu fördern. Michael hat eine Leidenschaft für die Entwicklung von kreativen und effektiven Marketing-Kampagnen, die auf die Bedürfnisse der Zielgruppe zugeschnitten sind. Er ist in der Lage, die Entwicklung von Werbebotschaften und Inhalten zu leiten, um das Markenbewusstsein zu steigern und die Kundenbindung zu verbessern.</p>
                    <h4><b>E-mail: <a href="mailto: sthubmic2@bx.fallmerayer.it">sthubmic2@bx.fallmerayer.it</a></b></h4>
                    <h4><b>Telefon: +39 328 388 8854</b></h4>
                </div>
                <div class="col-lg-offset-2 col-md-4 col-lg-4 col-sm-12">
                    <img src="../Thomas_Reinthaler.jpg" class="img-responsive" alt="Matthias Plaickner">
                    <h3><b>Thomas Reinthaler (CTO)</b></h3>
                    <p>Thomas Reinthaler ist unser erfahrener Ingenieur-Leiter mit umfassender Erfahrung in der Leitung von Ingenieur-Teams und der Entwicklung von technischen Lösungen für verschiedene Branchen. Mit einem Abschluss in Maschinenbau und einer umfassenden Expertise in den Bereichen Produktentwicklung, Konstruktion und Fertigung, ist Thomas ein kompetenter Ansprechpartner für alle technischen Fragen und Herausforderungen. Sein Fokus liegt darauf, komplexe technische Probleme zu lösen und die Effizienz und Qualität in der Produktion zu optimieren. Er versteht es, Kundenbedürfnisse zu analysieren und maßgeschneiderte Lösungen zu entwickeln, um diese zu erfüllen und die Kundenzufriedenheit zu maximieren. Mit seiner Fähigkeit, technische Themen verständlich zu kommunizieren, ist Thomas ein wertvoller Ansprechpartner für alle Teams und Stakeholder.</p>
                    <h4><b>E-mail: <a href="mailto: streithom@bx.fallmerayer.it">streitho@bx.fallmerayer.it</a></b></h4>
                    <h4><b>Telefon: +39 345 684 0123</b></h4>
                </div>
        </div>
        <script src="functions.js"></script>
    </body>
</html>