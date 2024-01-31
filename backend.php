<?php
$servername = "192.168.56.1";
$username = "root";
$password = "";
$dbname = "insurance_policy_comp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}