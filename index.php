<!DOCTYPE html>
<html lang="en">
<head>
    <title>Compare Insurance Policies</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--navbar-->
    <?php require "include/navbar.php" ?>

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/main.jpg" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <h3 style="color:MidnightBlue;">Protect Your Cars</h3>
                <p style="color:MidnightBlue;">  Car insurance is a type of motor policy which provides protection against theft, third-party damages, man-made and natural calamities. </p>
              </div>
          </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/mainpic2.jpeg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              <h3 style="color:MidnightBlue;">Choose the best policy</h3>
              <p style="color:MidnightBlue;"> The car insurance policy quotes are generally premium of different insurers which plays a vital role in choosing the most suitable plan for your car. It helps policyholders to compare different quotes based on their requirements and budget to finalise the most ideal car insurance cover for them </p>
              
            </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/pic3.jpg" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h3 style="color:Black;">For the best price!</h3>
            <p style="color:Black;"> Save a lot of money by choosing the policy that is best suited for your needs </p>
            
          </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pooper.js/1.16.0/umd/poper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>