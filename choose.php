<!DOCTYPE html>
<html lang="en">
<head>
    <title>Compare Insurance Policies</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
            .container{
                background-image : url("images/form_bg.jpg");
                background-size : cover;
                height : 100vh;
                width : 100vw;
                }

            .color1{
                color : black;
                width:100px;
                height:50px;
                background-color:white;
                border-radius:8px;
                text-align:center;
                }
            .color2{
                color:black;
                padding:10px;
                margin:5px;
            }
    </style>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--navbar-->
    <?php require "include/navbar.php" ?>

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading text-center">
            <h2 class="color2">Enter the Details</h2>
            </div>
            <div class="panel-body">
            <form action = "submit.php" method="POST">
                <div class="form-group row">
                    <label for="exampleInputName1" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                        <input type="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Enter name" name='name'>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputAge1" class="col-sm-2 col-form-label">Age</label>
                        <div class="col-sm-10">
                        <input type="age" class="form-control" id="exampleInputAge1" aria-describedby="ageHelp" placeholder="Enter age" name='age'>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputVehicleAge1" class="col-sm-2 col-form-label">Vehicle Age</label>
                        <div class="col-sm-10">
                        <input type="age" class="form-control" id="exampleInputVehicleAge1" aria-describedby="vehicleAgeHelp" placeholder="Enter vehicle age" name= 'vehicle_age'>
                    </div>
                </div>
                <button type="submit" class="color1" >Submit</button>
            </form>
            </div>
        </div>
    </div>

        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pooper.js/1.16.0/umd/poper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>