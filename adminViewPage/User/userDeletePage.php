<?php


include '../Trainer/trainerConnection.php';
$offline_user_id = $_GET['offline_user_id'];
$query = "DELETE FROM offline_user_registration WHERE offline_user_id=$offline_user_id";
mysqli_query($conn,$query);
header('location: ../userOfflinePage.php');

?>