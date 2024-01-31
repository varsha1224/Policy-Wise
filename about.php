<?php
	$stylesheet_url = "style.css";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Compare Insurance Policies</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        }

        html {
        box-sizing: border-box;
        }

        *, *:before, *:after {
        box-sizing: inherit;
        }

        .column {
        float: left;
        width: 33.3%;
        margin-bottom: 16px;
        padding: 0 8px;
        }

        .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        margin: 8px;
        }

        .about-section {
        padding: 50px;
        text-align: center;
        background-color: #474e5d;
        color: white;
        }

        .container {
        padding: 0 16px;
        }

        .container::after, .row::after {
        content: "";
        clear: both;
        display: table;
        }

        .title {
        color: grey;
        }

        .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        }

        .button:hover {
        background-color: #555;
        }

        @media screen and (max-width: 650px) {
        .column {
            width: 100%;
            display: block;
        }
        }
    </style>
    

</head>

<body>
    <!--navbar-->
    <?php require "include/navbar.php" ?>
    <div class="about-section">
    <h1>About Us Page</h1>
    <p>We find the best policy for you.</p>
    <p>Don't waste your money. Be wise using PolicyWise</p>
    </div>

    <h2 style="text-align:center">Our Team</h2>
    <div class="row">
    <div class="column">
        <div class="card">
        <img src="images/jane.jpg" alt="Jane" style="width:100%">
        <div class="container">
            <h2>Jane Doe</h2>
            <p class="title">CEO & Founder</p>
            <p>I found this company. I am a good leader.</p>
            <p>jane@example.com</p>
            <p><button class="button">Contact</button></p>
        </div>
        </div>
    </div>

    <div class="column">
        <div class="card">
        <img src="images/mike.jpg" alt="Mike" style="width:100%">
        <div class="container">
            <h2>Mike Ross</h2>
            <p class="title">Art Director</p>
            <p>I have a passion for art.</p>
            <p>mike@example.com</p>
            <p><button class="button">Contact</button></p>
        </div>
        </div>
    </div>

    <div class="column">
        <div class="card">
        <img src="images/john.jpg" alt="John" style="width:100%">
        <div class="container">
            <h2>John Doe</h2>
            <p class="title">Designer</p>
            <p>I have started designing at the age of 12.</p>
            <p>john@example.com</p>
            <p><button class="button">Contact</button></p>
        </div>
        </div>
    </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pooper.js/1.16.0/umd/poper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>