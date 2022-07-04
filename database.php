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
//CREATING TABLE FOR REGISTRATION
$table[0] = "CREATE TABLE IF NOT EXISTS Registration (
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
//CREATING TABLE
$table[1] = "CREATE TABLE IF NOT EXISTS admins (
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
// sql to create table
$table[2] = "CREATE TABLE IF NOT EXISTS trainer (
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
    //CREATING TABLE
    $table[3] = "CREATE TABLE IF NOT EXISTS offline_user_registration(
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
//CREATING TABLE
$table[4] = "CREATE TABLE IF NOT EXISTS offline_user_registration(
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

    $table[5] = "CREATE TABLE IF NOT EXISTS Contact_us (
        contact_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        fullname VARCHAR(30) NOT NULL,
        email VARCHAR(50) NOT NULL,
        phone BIGINT(10) NOT NULL,
        subject VARCHAR(30) NOT NULL,
        description VARCHAR(200) NOT NULL,
        submittion_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
   for($i=0;$i<=5;$i++){
    $query_run = mysqli_query($conn,$table[$i]);
   }

$conn->close();
