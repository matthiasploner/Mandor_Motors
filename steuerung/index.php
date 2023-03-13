<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/vnd.microsoft.icon" href="../mmlogo.ico">
        <title>MM_Steuerung</title>
        <meta name="viewport" content="user-scalable=no">
        <link rel="stylesheet" href="style.css">
        <script src="functions.js"></script>
    </head>
    <body scroll="no">
        <div class="turn-str">
            <button>↶</button>
            <button>↷</button>
        </div>
        <iframe id="myiframe" src="http://10.11.11.100:8000/index.html" width="640" height="480"></iframe>
        <div class="str-grid">
            <button>↖</button>
            <button onmousedown="vorwaerts()" onmouseup="stop()">↑</button>
            <button>↗</button>
            <button onmousedown="links()" onmouseup="stop()">←</button>
            <div></div>
            <button>→</button>
            <button>↙</button>
            <button>↓</button>
            <button>↘</button>
        </div>
    </body>
</html>