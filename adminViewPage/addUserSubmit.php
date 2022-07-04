<?php

include '../databaseConnection.php';

if (isset($_POST['add-offline-user'])) {
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $phone = $_POST['phone'];
    $gender = $_POST['optradio'];
    $selectOption = $_POST['year'];
    $selectOption1 = $_POST['month'];
    $selectOption2 = $_POST['day'];
    $trainer_assigned = $_POST['trainer'];
    $package_active = $_POST['package'];

    
        $sql_record_insert = $conn->prepare("INSERT INTO offline_user_registration(firstname,lastname,phone,gender,dob_Year,dob_Month,dob_Day,trainer_assigned,package_active) 
        VALUES (?,?,?,?,?,?,?,?,?)");
        $sql_record_insert->bind_param("ssisiiiss", $first_name, $last_name,$phone, $gender, $selectOption, $selectOption1, $selectOption2,$trainer_assigned,$package_active);
        $sql_record_insert->execute();
        header("Location: userOfflinePage.php");

        $sql_record_insert->close();
}