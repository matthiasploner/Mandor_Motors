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

        .center {
            position: absolute;
            top: 20%;
            width: 100%;
            text-align: center;
            color: #f1f1f1;
        }

        .center h1 {
            font-size: 55px;
            font-family: PT Sans, serif;
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

        .show {
            display: block;
        }

        .menu-overlay {
            display: none;
        }

        .mobile-nav-btn {
            display: none
        }

        @media only screen and (max-width: 600px) {
            .topnav-right {
                display: none;
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
                font-family: PT Sans, serif;
            }

            .center p {
                font-size: 20px;
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

            #mobile-nav {
                position: fixed;
                display: block;
                top: 0;
                right: 0;
                width: 0;
                height: 100%;
                background-color: rgba(0,0,0,0.7);
                overflow-x: hidden;
                transition: right 0.5s ease;
                z-index: 1;
            }

            #mobile-nav a {
                padding: 8px;
                text-decoration: none;
                font-size: 60px;
                color: #818181;
                display: block;
                transition: 0.3s;
            }

            #mobile-nav a:hover {
                color: #f1f1f1;
            }

            .mobile-nav-btn{
                display: block;
                float: right;
                padding: 10px;
                background-color: transparent;
                border: none;
                font-size: 30px;
            }

            .mobile-nav-clsbtn{
                float: right;
                padding: 10px;
                color: #818181;
                background-color: transparent;
                border: none;
                font-size: 30px;
            }

            .mobile-content {
                position: relative;
                top: 25%;
                left: 15%;
                width: 100%;
                text-align: center;
                margin-top: 30px;
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
    <div id="mobile-nav" class="menu-overlay">
        <button class="mobile-nav-clsbtn" onclick="navclose()">≡</button>
        <div class="mobile-content">
            <a href="#">About Us</a>
            <a href="#">Account</a>
        </div>
    </div>

    <button class="mobile-nav-btn" onclick="navopen()">≡</button>
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