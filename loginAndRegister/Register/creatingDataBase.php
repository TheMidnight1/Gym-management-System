<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym_management_system";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname );
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//create database
$sql = "CREATE DATABASE IF NOT EXISTS gym_management_system";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

//CREATING TABLE
$table = "CREATE TABLE IF NOT EXISTS Registration (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50)  UNIQUE NOT NULL,
    phone BIGINT(10) UNIQUE NOT NULL,
    password VARCHAR(20) NOT NULL,
    dob_Year INT(4) NOT NULL,
    dob_Month INT(4) NOT NULL,
    dob_Day INT(4) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
if ($conn->query($table) === TRUE) {
  echo "Table registration created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$conn->close();
