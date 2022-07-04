<?php


include 'trainerConnection.php';
$trainer_id = $_GET['trainer_id'];
$query = "DELETE FROM trainer WHERE trainer_id =$trainer_id";
mysqli_query($conn,$query);
header('location: ../trainerHomePage.php')

?>