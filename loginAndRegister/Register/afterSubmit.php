<?php
//DATABASE VARAIBLE
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym_management_system";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//create database
$sql = "CREATE DATABASE IF NOT EXISTS gym_management_system";
if ($conn->query($sql) === TRUE) {
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->close();
$conn = new mysqli($servername, $username, $password, $dbname);
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
} else {
    echo "Error creating table: " . $conn->error;
}
// define variables and set to empty values
$first_name = $last_name = $email = $phone = $password = $confirm_password = $gender = $selectOption = $selectOption1 = $selectOption2 = "";
if (isset($_POST["submit"])) {

    $first_name = $_POST["registerFirstName"];
    $last_name = $_POST["registerLastName"];
    $email = $_POST["email_id"];
    $phone = $_POST["phone"];
    $password = $_POST["registerPassword"];
    $confirm_password = $_POST["cPassword"];
    $gender = $_POST["rad"];
    $selectOption = $_POST['year'];
    $selectOption1 = $_POST['month'];
    $selectOption2 = $_POST['day'];

    //REGEX EXPRESSIONS
    $first_name_pattern = "/^[(a-zA-Z)+]{2,10}$/";
    $last_name_pattern = "/^[(a-zA-Z)+]{2,10}$/";
    $email_pattern = "/^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/";
    $phone_pattern = "/^([0-9]){10}$/";

    $validStatus = false;
    //CHECKING FIRST NAME

    if (preg_match($first_name_pattern, $first_name)) {
        $validStatus = true;
    } else {
        $validStatus = false;
        $first_name_error = "Error in username";
    }

    //CHECKING LAST NAME
    if (preg_match($last_name_pattern, $last_name)) {
        $validStatus = true;
    } else {
        $validStatus = false;
    }

    //CHECKING EMAIL
    if (preg_match($email_pattern, $email)) {
        $validStatus = true;
    } else {
        $validStatus = false;
    }
    //CHECKING PHONE
    if (preg_match($phone_pattern, $phone)) {
        $validStatus = true;
    } else {
        $validStatus= false;
    }

    //CHECKING PASSWORD
    if ($password == $confirm_password) {
        if (strlen($password) >= 20) {
            // echo "Password is too long it should be 20 or less than 20 character";
        } else if (strlen($password) <= 8) {
            $validStatus = false;
            // echo "Password is too short it should be 8 or more than 8 character";
            $validStatus = false;
        } else {
            $validStatus = true;
        }
    } else {
        // echo "Password doesnt match";
        $validStatus = false;
    }
    // GETTING RADIO BUTTON VALUE
    echo "<br>";
    if (!empty($_POST['rad'])) {
        // if ($gender == "Male") {
        //     echo "Male";
        // } else if ($gender == "Female") {
        //     echo "female";
        // } else {
        //     echo "Others";
        // }
        $validStatus = true;
    } else {
        // echo 'Please select the value';
        $validStatus = false;
    }
    //INSERTING DATA INTO DATABASE


    if ($validStatus == true) {
        $sql_record_insert = $conn->prepare("INSERT INTO registration(firstname,lastname,email,phone,password,dob_Year,dob_Month,dob_Day,gender) 
        VALUES (?,?,?,?,?,?,?,?,?)");
        $sql_record_insert->bind_param("sssisiiis", $first_name, $last_name, $email, $phone, $password, $selectOption, $selectOption1, $selectOption2, $gender);
        $sql_record_insert->execute();
        header("Location: ../Login/login.php");

        $sql_record_insert->close();

        // VALUES ($first_name, $last_name,$email,$phone,$password,$selectOption,$selectOption1,$selectOption2, $gender)
        // if ($conn->query($sql_record_insert) === TRUE) {
        //     echo "New record created successfully";
        // } else {
        //     echo "Error: " . $sql_record_insert . "<br>" . $conn->error;
        // }
    }
    else{
        echo "Error";
    }
}
$conn->close();
