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
        div.gallery {
            margin: 15px;
            border: 1px solid #ccc;
            float: left;
            width: 180px;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }

        .space{
            margin:10px;
        }

        .container{
            background-image : url("images/form_bg.jpg");
            background-size : cover;
            height : 100vh;
            width : 100vw;
        }
    </style>
    

</head>

<body>
    <!--navbar-->
    <?php require "include/navbar.php" ?>
    <center>
   <h2 style="font-family:Blackletter" class="space">PUBLIC COMPANIES<h2>
    <center>
   <div class="d-flex flex-row justify-content-center">
   <div class="gallery">
  <a target="_blank" href="images/united.jpg">
    <img src="images/united.jpg" alt="United India Insurance" width="600" height="400">
  </a>
  <div class="desc">United India Insurance</div>
    </div>

        <div class="gallery">
                <a target="_blank" href="images/nia.jpg">
                    <img src="images/nia.jpg" alt="New India Assurance" width="600" height="400">
                </a>
                <div class="desc">New India Assurance</div>
            </div>
            
            <div class="gallery">
                <a target="_blank" href="images/national.jpg">
                    <img src="images/national.jpg" alt="New India Assurance" width="600" height="400">
                </a>
                <div class="desc">National Insurance</div>
            </div>

            <div class="gallery">
                <a target="_blank" href="images/oriental.png">
                    <img src="images/oriental.png" alt="Oriental Insurance" width="600" height="400">
                </a>
                <div class="desc">Oriental Insurance</div>
            </div>
        </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pooper.js/1.16.0/umd/poper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>