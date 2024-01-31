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
        * {
            margin: 0;
            padding: 0;
        }



        :root {
            --navbar-height: 59px;
        }

        .logo {
            width: 20%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo img {
            width: 33%;
            border: 2px solid white;
            border-radius: 50px;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: center;
            position: sticky;
            top: 0;
            cursor: pointer;
        }

        .nav-list {
            width: 70%;
            display: flex;
        }

        .nav-list li {
            list-style: none;
            padding: 2px 6px;
        }

        .nav-list li a {
            text-decoration: none;
            color: white;
        }

        .nav-list li a:hover {
            color: grey;
        }

        .rightNav {
            width: 50;
            text-align: right;
        }

        #search {
            padding: 5px;
            font-size: 17px;
            border: 2px solid grey;
            border-radius: 9px;
        }

        .background {
            background-color: #555;
            background-blend-mode: darken;
            background-size: cover;
        }

        .firstsection {
            height: 100vh;
        }

        .box-main {
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            max-width: 50%;
            margin: auto;
            height: 80%;
        }

        .firstHalf {
            width: 75%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .firstHalf img {
            display: flex;
            border-radius: 9050px;
        }

        .text-big {
            font-family: "Piazzolla", serif;
            font-weight: bold;
            font-size: 41px;
            text-align: center;
        }

        .text-small {
            font-family: "Sansita Swashed", cursive;
            font-size: 18px;
            text-align: center;
        }

        #service {
            margin: 34px;
            display: flex;
        }

        #service .box {
            padding: 45px;
            margin: 3px 6px;
            border-radius: 28px;
        }

        #service .box img {
            margin-top: 20px;
            height: 100px;
            margin: auto;
            display: block;
            border-radius: 200px;
        }

        #service .box p {
            font-family: sans-serif;
            text-align: center;
        }

        .btn {
            padding: 8px 20px;
            margin: 7px 0;
            border: 2px solid white;
            border-radius: 8px;
            background: none;
            color: white;
            cursor: pointer;
        }

        .btn-sm {
            padding: 6px 10px;
            vertical-align: middle;
        }

        .center {
            text-align: center;
        }

        .text-footer {
            text-align: center;
            padding: 30px 0;
            font-family: "Ubuntu", sans-serif;
            display: flex;
            justify-content: center;
        }

    </style>
</head>

<body>
    <!--navbar-->
    <?php require "include/navbar.php" ?>
		
	<section class="background firstsection">
		<div class="box-main">
			<div class="firstHalf">	
				<p class="text-big">Contact Us</p>

				<p class="text-small">
					You can Contact Us if you face any problem
				</p>

				<br>
				<p class="center"
				style="text-decoration:none;
						color:white;">
					Click on the below options to Contact us
				</p>

			</div>
		</div>
	</section>
	<section class="service">
		
		<!-- Heading-->
		<h1 class="h-primary center"
			style="margin-top:30px;">
			Options to Contact
		</h1>
		<div id="service">
			<div class="box">
				<!-- Form -->
				<h4 class="center">9878945699</h4>
				<br>
				
				<!-- Displaying text at
					the center of the box-->
				<p class="center">
					Phone No.
				</p>

			</div>
			<div class="box">
				
				<!-- Email -->
				<h4 class="center">policywise123@gmail.com</h4>
				<br>
				
					<!-- Displaying text at
					the center of the box-->
				<p class="center">
					Use this Email to send us about the problem faced
				</p>

			</div>
			<div class="box">
            <h4>+1800200300400</h4>
				<br>
				
				<!-- Displaying text at
					the center of the box-->
				<p class="center">
					Use this Toll Free Number
				</p>

			</div>

            <div class="box">
            <h4 class="center">12, Avinashi Road, Coimbatore</h4>
				<br>
				
				<!-- Displaying text at
					the center of the box-->
				<p class="center">
					Visit Us
				</p>

			</div>
		</div>
	</section>
	<footer class="background">
		<p class="text-footer">
			Copyright @-All rights are reserved
		</p>

	</footer>
</body>

</html>
