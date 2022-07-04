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
    $table = "CREATE TABLE IF NOT EXISTS Contact_us (
        contact_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        fullname VARCHAR(30) NOT NULL,
        email VARCHAR(50) NOT NULL,
        phone BIGINT(10) NOT NULL,
        subject VARCHAR(30) NOT NULL,
        description VARCHAR(200) NOT NULL,
        submittion_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
    
    if ($conn->query($table) === TRUE) {
        echo "Table registration created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
}
$conn->close();
