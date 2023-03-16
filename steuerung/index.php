<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/vnd.microsoft.icon" href="../mmlogo.ico">
        <title>MM_Steuerung</title>
        <meta name="viewport" content="user-scalable=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">

    </head>
    <body scroll="no" onload="checkAutonom(),getSpeed(),checkALicht()">
    Geschwindigkeit:
    <label id = "speed">


    </label>
    Autonom Licht: <input type="checkbox" id="aLight" onclick="autoLight()">
    <button id="licht" onclick="led()">Licht</button>
        <div class="turn-str">
            <button onclick="hartLinks()">↶</button>
            <button onclick="hartLinks()">↷</button>
        </div>
        <div class="col-md-offset-6"><iframe id="myiframe" src="http://10.11.11.100:8000/index.html" width="700" height="550"></iframe></div>
        <div class="speed">
            Speed: <input oninput="changeSpeed()" type="range" min="1" max="100" value="50" class="slider" id="myRange">
        </div>

        Autonom Fahren: <input type="checkbox" id="auton" onclick="changeType()">

        <div class="str-grid">
            <button></button>
            <button onclick="vorwaerts()">↑</button>
            <button></button>
            <button onclick="left()">←</button>
            <button onclick="stop()">stop</button>
            <button onclick="rechts()">→</button>
            <button></button>
            <button onclick="zurueck()">↓</button>
            <button></button>
        </div>
    <script src="functions.js"></script>
    </body>
</html>