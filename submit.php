<!DOCTYPE html>
<html>
<head>
    <title>Policy Results</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
	
	<style>
		body {
			background-image: url('background-image.jpg');
			background-size: cover;
			background-position: center;
		}
		table {
			border-collapse: collapse;
			width: 100%;
			color: #333;
			font-size: 14px;
			text-align: left;
			margin-top: 50px;
		}
		table th {
			background: #f5f5f5;
			font-weight: bold;
			color: #333;
			padding: 12px;
			border: 1px solid #ccc;
		}
		table td {
			padding: 12px;
			border: 1px solid #ccc;
		}
        .insurer-name {
            font-weight: bold;
            text-decoration: underline;
        }
        .policy-details {
            margin-bottom: 30px;
        }
        .policy-details p {
            margin: 0;
            line-height: 1.5;
        }
        .facilities {
            font-style: italic;
        }
    </style>
</head>
<body>
        <!--navbar-->
        <?php require "include/navbar.php" ?>
    
        <?php
        $name=$_POST['name'];
        $age=$_POST['age'];
        $vehicle_age=$_POST['vehicle_age'];
        include 'backend.php';
        $sql = "CALL insert_details('$name', '$age', '$vehicle_age')";
        if(mysqli_query($conn, $sql)) {
        
        } 
        else 
        {
        echo "Error: " . mysqli_error($conn);
        }

        $age_limit = $_POST['vehicle_age'];

        $stmt = $conn->prepare("CALL print_policy(?)");
        $stmt->bind_param('i', $age_limit);
        $stmt->execute();

        $rows = mysqli_fetch_all($stmt->get_result(), MYSQLI_ASSOC);

        $prev_insurer = "";
        $prev_premium = "";

        echo "These are the recommended policies from our side."
        foreach($rows as $row) {
            if ($row["insurer_name"] == $prev_insurer && $row["premium_amt"] == $prev_premium) {
                echo "<div class='policy-details'>";
                echo "<p class='facilities'>".$row["facilities"]."</p>";
                echo "<p>".$row["risk_assessment_criteria"]."</p>";
                echo "</div>";
            }
            else {
                if ($prev_insurer != "") {
                    echo "<br><br>";
                }
                echo "<div class='policy-details'>";
                echo "<p class='insurer-name'>".$row["insurer_name"]."</p>";
                echo "<p>".$row["premium_amt"]."</p>";
                echo "<p class='facilities'>".$row["facilities"]."</p>";
                echo "<p>".$row["risk_assessment_criteria"]."</p>";
                echo "</div>";
                $prev_insurer = $row["insurer_name"];
                $prev_premium = $row["premium_amt"];
            }
        }

        mysqli_close($conn);
        ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pooper.js/1.16.0/umd/poper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
