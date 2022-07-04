<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "gym_management_system";

// Create connection
$conn = new mysqli($servername, $username, $password,$database );

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS trainer (
    trainer_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    phone BIGINT NOT NULL,
    city VARCHAR(20) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    dob_Year INT(4) NOT NULL,
    dob_Month INT(4) NOT NULL,
    dob_Day INT(4) NOT NULL,


    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if (!$conn->query($sql) === TRUE) {
        echo "Error creating table: " . $conn->error;
    } 
    
    $conn->close();
?>