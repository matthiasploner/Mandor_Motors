<!DOCTYPE html>
<html lang="de">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mandor Motors</title>
</head>
<body>
<div class="topnav">

    <a class="active" href="#"><img src="../MM_Icon.png"></a>
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
    <textarea style="resize:none" readonly cols="100" rows="28">
    Hallo
</textarea>
</div>
    <form method="post">
        <div class="textarea">
            <div><input type="date" name="dateofbirth" id="dateofbirth"></div>

            <textarea style="resize:none" id="text" name="text" cols="100" rows="8"></textarea>
            <button onclick=saveText()>Speichern</button>
        </div>
    </form>
<select>
    <option>Matthias Plaickner</option>
    <option>Simon Ploner</option>
</select>
<script>

    function saveText(){

    }
</script>
</body>
</html>