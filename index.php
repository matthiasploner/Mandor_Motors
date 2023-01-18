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
            background-image: url('car.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
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
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
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

        .center {
            position: absolute;
            top: 20%;
            width: 100%;
            text-align: center;
            color: #f1f1f1;
        }

        .center h1 {
            font-size: 55px;
            font-family: PT Sans;
        }

        .center p {
            font-size: 20px;
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

        .main {
            padding: 16px;
            margin-bottom: 30px;
        }

        .dropdown-content {
            display: none;
        }

        .dropdown-btn {
            display: none;
        }

        .show {
            display: block;
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
                font-family: PT Sans;
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
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
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
            .show {
                display: block;
            }

            body {
                background-image: url('car.jpg');
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
    <a class="active" href="#"><img src="MM_Icon.png"></a>
    <div class="topnav-right">
        <a href="#">About Us</a>
        <a href="#">Account</a>
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

<div class="center">
    <h1>MK1</h1>
    <p>What colour is your MK1?</p>
</div>

<div class="navbar">
    <a href="#">Mandor Motors</a>
    <a href="#">Privacy & Legal</a>
    <a href="#">Contact</a>
    <a href="#">Careers</a>
    <a href="#">News</a>
    <a href="#">Locations</a>
</div>

<script>
    function dropdownFunction(String str) {
        document.getElementById(str).classList.toggle("show");
    }
</script>
</body>
</html>