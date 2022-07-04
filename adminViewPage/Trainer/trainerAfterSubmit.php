<?php

include './trainerConnection.php';

if (isset($_POST['submit'])) {
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $selectOption = $_POST['year'];
    $selectOption1 = $_POST['month'];
    $selectOption2 = $_POST['day'];

    $first_name_pattern = "/^[(a-zA-Z)+]{2,20}$/";
    $last_name_pattern = "/^[(a-zA-Z)+]{2,20}$/";
    $city_pattern = "/^[(a-zA-Z)+]{2,20}$/";
    $phone_pattern = "/^([0-9]){10}$/";

    $validStatus = false;

    //CHECKING FIRST NAME

    if (preg_match($first_name_pattern, $first_name)) {
        $validStatus = true;
    } else {
        $validStatus = false;
    }

    //CHECKING LAST NAME
    if (preg_match($last_name_pattern, $last_name)) {
        $validStatus = true;
    } else {
        $validStatus = false;
    }
    //CHECKING PHONE
    if (preg_match($phone_pattern, $phone)) {
        $validStatus = true;
    } else {
        $validStatus = false;
    }
    //CHECKING CITY
    if (preg_match($city_pattern, $city)) {
        $validStatus = true;
    } else {
        $validStatus = false;
    }
    // GETTING RADIO BUTTON VALUE
    echo "<br>";
    if (!empty($_POST['gender'])) {
        $validStatus = true;
    } else {
        $validStatus = false;
    }

    if ($validStatus == true) {
        $sql_record_insert = $conn->prepare("INSERT INTO trainer(firstname,lastname,phone,city,gender,dob_Year,dob_Month,dob_Day) 
        VALUES (?,?,?,?,?,?,?,?)");
        $sql_record_insert->bind_param("ssissiii", $first_name, $last_name,$phone, $city, $gender, $selectOption, $selectOption1, $selectOption2);
        $sql_record_insert->execute();
        header("Location: ../trainerHomePage.php");

        $sql_record_insert->close();
    }
    else{
        echo "Error";
    }

    if (isset($_FILES['my_image'])) {

    
        $img_name = $_FILES['my_image']['name'];
        $img_size = $_FILES['my_image']['size'];
        $tmp_name = $_FILES['my_image']['tmp_name'];
        $error = $_FILES['my_image']['error'];
    
        if ($error === 0) {
            if ($img_size > 125000) {
                $em = "Sorry, your file is too large.";
                header("Location: index.php?error=$em");
            }else {
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);
    
                $allowed_exs = array("jpg", "jpeg", "png"); 
    
                if (in_array($img_ex_lc, $allowed_exs)) {
                    $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                    $img_upload_path = 'uploads/'.$new_img_name;
                    move_uploaded_file($tmp_name, $img_upload_path);
    
                    // Insert into Database
                    $sql = "INSERT INTO trainer(image_url) 
                            VALUES('$new_img_name')";
                    mysqli_query($conn, $sql);
                    header("Location: view.php");
                }else {
                    $em = "You can't upload files of this type";
                    header("Location: addTrainer.php?error=$em");
                }
            }
        }else {
            $em = "unknown error occurred!";
            header("Location: addTrainer.php?error=$em");
        }
    
    }else {
        header("Location: addTrainer.php");
    }
}
