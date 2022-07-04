<?php
//DATABASE VARAIBLE
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym_management_system";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//CREATING TABLE
$table = "CREATE TABLE IF NOT EXISTS offline_user_registration(
    offline_user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,                                                                      
    phone BIGINT(10) UNIQUE NOT NULL,
    dob_Year INT(4) NOT NULL,
    dob_Month INT(4) NOT NULL,
    dob_Day INT(4) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    trainer_assigned VARCHAR(20),
    package_active VARCHAR(30),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

if ($conn->query($table) === TRUE) {
} else {
    echo "Error creating table: " . $conn->error;
}
?>