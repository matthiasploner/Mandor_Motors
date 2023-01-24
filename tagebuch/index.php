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

    <a class="active" href="http://10.10.30.42"><img src="../MM_Icon.png"></a>

<div class="top"><h1>Unser Tagebuch</h1></div>
    <div class="textareaRead">
        <textarea class="styleArea" style="resize:none" readonly cols="100" rows="16">
            Hallo
        </textarea>
    </div>
<div class="container-fluid">
    <div class="row">

                <div class="col-sm-1">
                    <form method="post">
                        <div class="">
                            <input style="resize:none"id="text"type="date" name="dateofbirth" id="dateofbirth">
                        </div>
                    </form>
                    <select class="select-selected">
                        <option>Matthias Plaickner</option>
                        <option>Simon Ploner</option>
                        <option>Thomas Reinthaler</option>
                        <option>Miacheal Huber</option>
                        <option>Matthias Ploner</option>
                    </select>
                </div>
                <div class="col-lg">
                    <div class="textarea">
                        <textarea class="styleArea styleHover" style="resize: none" cols="100" rows="8"></textarea>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="">
                        <button onclick=saveText()>Speichern</button>
                    </div>

                </div>


    </div>
</div>






<script>

    function saveText(){

    }
</script>


</body>
</html>

</body>
</html>
