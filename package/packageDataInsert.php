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


       $insert_query = "INSERT INTO packages (package_name,package_price,pakcage_duration_month) VALUES('Basic 1 Month Package',2500,1)";
        if ($conn->query($insert_query) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $insert_query . "<br>" . $conn->error;
        }
$conn->close();
