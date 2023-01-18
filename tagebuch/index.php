<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mandor Motors</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;

            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .textareaRead{

            font-size: 16px;
            resize: none;
            top:100px;
            position: fixed;
            margin: auto;
            width: 90%;
            text-align: center;
        }

        button{
            align-items: center;
            background: #FFFFFF;
            border: 0 solid #E2E8F0;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            box-sizing: border-box;
            color: #1A202C;
            display: inline-flex;
            font-family: Inter, sans-serif;
            font-size: 1rem;
            font-weight: 700;
            height: 56px;
            justify-content: center;
            line-height: 24px;
            overflow-wrap: break-word;
            padding: 24px;
            text-decoration: none;
            width: auto;
            border-radius: 8px;
            cursor: pointer;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            position: absolute;
            top:50%;
        }

        .topnav {
            overflow: hidden;
            background-color: transparent;
        }

        .topnav a {
            float: left;
            color: #ffffff;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 20px;
        }

        .topnav a:hover {
            color: black;
        }

        .topnav-right {
            float: right;
        }

        .topnav img{
            width: 208px;
            height: 40px;
        }

        .dropdown-PC {
            float: left;
        }

        .dropdown-btnPC {
            background-color: transparent;
            color: white;
            padding: 14px 16px;
            font-size: 20px;
            border: none
        }

        .dropdown-pcContent {
            display: none;
            position: absolute;
            background-color: transparent;
            min-width: 80px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-pcContent a {
            float: none;
            color: #f1f1f1;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-pcContent a:hover {
            background-color: transparent;
            color: black;
        }

        .dropdown-PC:hover .dropdown-pcContent {
            display: block;
        }

        .dropdown-PC:hover .dropdown-btnPC {
            background-color: transparent;
            color: black;
            cursor: pointer;
        }

        .top {
            position: absolute;
            top: 0%;
            width: 100%;
            text-align: center;
            color: #f1f1f1;
        }

        .top h1 {
            font-size: 30px;
            font-family: Arial, Helvetica, sans-serif;
            color: black;
        }

        .navbar {
            overflow: hidden;
            background-color: transparent;
            position: absolute;
            text-align: center;
            bottom: 0;
            width: 100%;
        }

        .navbar a {
            color: #ffffff;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 16px;
        }

        .dropdown-content {
            display: none;
        }

        .dropdown-btn {
            display: none;
        }
        .textarea{

            height: 150px;
            padding: 12px 20px;
            /*box-sizing: border-box;*/
            /*border: 2px solid #ccc;
            border-radius: 4px;
            background-color: #f8f8f8;*/
            font-size: 16px;
            resize: none;
            bottom:10px;
            position: fixed;
            margin: auto;
            width: 90%;
            text-align: center;
        }
        @media only screen and (max-width: 600px) {
            .topnav-right {
                display: none;
                flex-direction: column;
                align-items: flex-start;
            }

            .topnav-right a {
                margin: 10px 0;
                float: none;
                display: block;
            }

            .center {
                position: absolute;
                top: 7%;
                width: 100%;
                text-align: center;
                color: #f1f1f1;
            }

            .center h1 {
                font-size: 40px;
            }

            .center p {
                font-size: 20px;
            }

            .dropdown-mobile{
                float: left;
            }

            .dropdown-btn {
                display: flex;
                align-items: center;
                justify-content: space-between;
                width: 100%;
                background-color: transparent;
                color: white;
                padding: 20px;
            }
            .dropdown-btn:hover {
                background-color: #1111;
            }
            .dropdown-btn i {
                font-size: 24px;
            }


            .dropdown-content {
                display: none;
                position: absolute;
                background-color: transparent;
                min-width: 160px;
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
                z-index: 1;
                left: auto;
                right: 0;
            }
            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            body {

                background-repeat: no-repeat;
                background-position: center;
                background-attachment: fixed;
                background-size: cover;
                height:100%;
                width:100%;
            }

        }
    </style>
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
    <textarea readonly cols="100" rows="20">
    Hallo
</textarea>
</div>

    <form method="post">
        <div class="textarea">
            <textarea id="text" name="text" cols="100" rows="8"></textarea>
            <button onclick=saveText()>What is the time?</button>
        </div>
    </form>

<script>

    function saveText(){

    }
</script>
</body>
</html>
