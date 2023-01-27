<!DOCTYPE html>
<html lang="de">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Tagebuch</title>
</head>
<body>
<div class="topnav">

    <a class="active" href="../"><img src="../MM_Icon.png"></a>

<div class="top"><h1>Unser Tagebuch</h1></div>
    <div class="textareaRead">
        <textarea class="styleArea" style="resize:none" readonly cols="100" rows="16">
            Hallo
        </textarea>
    </div>
<div class="container-fluid">
    <div class="row">
        <div class="textarea">
            <div class="col-sm-1">
                <form method="post">
                        <input style="resize:none"id="date"type="date" name="dateofbirth" id="dateofbirth">
                </form>
            </div>
            <div class="col-sm-1">
                    <select id="selectUser">
                        <option>--Alle--</option>
                        <option>Matthias Plaickner</option>
                        <option>Simon Ploner</option>
                        <option>Thomas Reinthaler</option>
                        <option>Miacheal Huber</option>
                        <option>Matthias Ploner</option>
                    </select>
            </div>
            <div class="col-sm-8">
                    <textarea class="styleArea styleHover" id="message" style="resize: none" cols="100" rows="8"></textarea>
            </div>
            <div class="col-sm-1">
                    <button onclick=saveText()>Speichern</button>
            </div>

        </div>
    </div>
</div>

<script>

    function saveText(){
        var select = document.getElementById('selectUser');
        var value = select.options[select.selectedIndex].value;
        console.log(value);

        const message = document.getElementById('message');
        console.log(message.value);

        var x = document.getElementById("date");
        console.log(x.value)
    }
</script>


</body>
</html>

</body>
</html>
