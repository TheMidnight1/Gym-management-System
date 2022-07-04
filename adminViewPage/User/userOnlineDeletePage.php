<?php


include '../Trainer/trainerConnection.php';
$id = $_GET['id'];
$query = "DELETE FROM registration WHERE id =$id";
mysqli_query($conn,$query);
header('location: ../userEditPage.php')

?>