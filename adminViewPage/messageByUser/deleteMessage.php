<?php


include '../../databaseConnection.php';
$contact_id = $_GET['contact_id'];
$query = "DELETE FROM contact_us WHERE contact_id =$contact_id";
mysqli_query($conn,$query);
header('location: ../messagesByUser.php');

?>