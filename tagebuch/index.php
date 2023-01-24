<!DOCTYPE html>
<html lang="de">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tagebuch</title>
</head>
<body>
<div class="topnav">

    <a class="active" href="http://10.10.30.42"><img src="../MM_Icon.png"></a>
    <div class="topnav-right">
        <a href="#">About Us</a>
        <a href="login">Account</a>
        <div class="dropdown-PC">
            <div class="dropdown-btnPC" onclick='dropdownFunction("pcDropdown")'>
                <span>Menu</span>
            </div>
            <div id="pcDropdown" class="dropdown-pcContent">
                <a href="#">Link1</a>
                <a href="#">Link2</a>
                <a href="#">Link3</a>
            </div>
        </div>
    </div>
    <div class="dropdown-mobile">
        <div class="dropdown-btn" onclick='dropdownFunction("mobileDropdown")'>
            <span>≡</span>
        </div>
        <div id="mobileDropdown" class="dropdown-content">
            <a href="#">About Us</a>
            <a href="#">Account</a>
        </div>
    </div>
</div>
<div class="top"><h1>Unser Tagebuch</h1></div>
<div class="textareaRead">
    <textarea class="styleArea" style="resize:none" readonly cols="100" rows="26">
    Hallo
</textarea>
</div>
    <form method="post">

        <div class="textarea">

            <input style="resize:none"id="text"type="date" name="dateofbirth" id="dateofbirth">
            <select class="select-selected">
                <option>Matthias Plaickner</option>
                <option>Simon Ploner</option>
            </select>

            <textarea class="styleArea styleHover" style="resize: none" cols="100" rows="8"></textarea>
            <button onclick=saveText()>Speichern</button>
        </div>

    </form>


<script>

    function saveText(){

    }
</script>
</body>
</html>
