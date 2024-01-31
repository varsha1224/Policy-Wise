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
  margin: 5px;
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
div.bg{
  margin:15px;
}
.space{
  height:150px;
  width:150px;
}
</style>
    

</head>

<body>
    <!--navbar-->
    <?php require "include/navbar.php" ?>
  <center>
   <h2 style="font-family:Blackletter">PRIVATE COMPANIES<h2>
    <center>
  <div class="d-flex flex-row justify-content-center">
   <div class="bg gallery">
  <a target="_blank" href="images/hdfc-ergo.png">
    <img src="images/hdfc-ergo.png" alt="HDFC" width="600" height="400" >
  </a>
  <div class="desc">HDFC ERGO</div>
    </div>

    <div class="bg gallery">
    <a target="_blank" href="images/bajaj.jpg">
        <img src="images/bajaj.jpg" alt="Bajaj" width="600" height="400" >
    </a>
    <div class="desc">Bajaj Allianz</div>
    </div>

    <div class="bg gallery">
    <a target="_blank" href="images/generali.jpg">
        <img src="images/generali.jpg" alt="Generali" width="600" height="400" >
    </a>
    <div class="desc">GENERALI</div>
    </div>
</div>
<div class="d-flex flex-row justify-content-center">
    <div class="bg gallery">
    <a target="_blank" href="images/tata_aig.jpg">
        <img src="images/tata_aig.jpg" alt="TATA AIG" width="600" height="400">
    </a>
    <div class="desc">TATA AIG</div>
    </div>

    <div class="bg gallery">
    <a target="_blank" href="images/SBI_Genral_Insurance.jpg">
        <img src="images/SBI_Genral_Insurance.jpg" alt="SBI General" width="600" height="400">
    </a>
    <div class="desc">SBI General</div>
    </div>

    <div class="bg gallery">
    <a target="_blank" href="images/iffco.png">
        <img src="images/iffco.png" alt="Iffco Tokio" width="600" height="400">
    </a>
    <div class="desc">IFFCO Tokio</div>
    </div>

    <div class="bg gallery">
    <a target="_blank" href="images/royal.jpg">
        <img src="images/royal.jpg" alt="Royal Sundaram" width="600" height="400">
    </a>
    <div class="desc">Royal Sundaram</div>
    </div>
</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pooper.js/1.16.0/umd/poper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>