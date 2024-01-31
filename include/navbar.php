<?php
	$stylesheet_url = "style.css";
?>

<head>
    <script src="https://kit.fontawesome.com/1bd8fbf9cc.js" crossorigin="anonymous"></script>
    <style>
            .fa-solid{
                color: white;
                }
    </style>
</head>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: SkyBlue;">
    <i class="fa-solid fa-car-burst" style="font-size: 2em;"></i>

      <a style="font-family:Blackletter" class="navbar-brand" href="#">PolicyWise</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categories
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="private.php">Private Sector</a>
                    <a class="dropdown-item" href="public.php">Public Sector</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="choose.php">Choose your policy</a>
            </li>
          </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
         </ul>
    </nav>