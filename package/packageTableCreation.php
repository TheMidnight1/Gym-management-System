<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'gym_management_system';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else {
    $table = "CREATE TABLE IF NOT EXISTS packages (
        package_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        package_name VARCHAR(30) NOT NULL,
        package_price VARCHAR(50) NOT NULL,
        pakcage_duration_month INT(10) NOT NULL
        )";
    
    if ($conn->query($table) === TRUE) {
        echo "Table registration created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
}
$conn->close();
