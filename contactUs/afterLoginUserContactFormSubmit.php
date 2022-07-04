<?php
//DATABASE VARAIBLE
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym_management_system";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    $full_name = $email = $phone = $subject= $description = "";
    //IF THE SUBMIT BUTTON IS CLICK ISSET RETURN TRUE THEN WE GET THE VALUE USER TYPED
    if(isset($_POST['contact-submit'])){
        $full_name = $_POST['full-name'];
        $email = $_POST['email_id'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $description = $_POST['description'];

        // $insert_query = "INSERT INTO contact_us('fullname','email','phone','description') VALUES('$full_name','$email','$subject','$description')";
        // if(mysqli_query($conn,$insert_query)){
        //     echo" RECORDED SUCCESFULLY";
        // }
        // else{
        //     echo "ERROR";
        // }

        //INSERT QUERY BY BINDING
        $sql_record_insert = $conn->prepare("INSERT INTO contact_us(fullname,email,phone,subject,description)VALUES (?,?,?,?,?)");
        $sql_record_insert->bind_param("ssiss",$full_name,$email,$phone,$subject,$description);
        $sql_record_insert->execute();
        echo "registration sucess";
        header("Location: ../afterUserLogin/userHomePage.php");
        $sql_record_insert->close();

    $conn->close();
}
?>