
<?php

session_start();
include './Trainer/trainerConnection.php';
include("./function.php");
$user_data = check_login($conn);

//CODE TO COUNT NO.OF ROWS
 $count = "SELECT id FROM registration ORDER BY id";
 $query_count = mysqli_query($conn,$count);
 $row = mysqli_num_rows($query_count);

 $count_trainer = "SELECT trainer_id FROM trainer ORDER BY trainer_id";
 $query_count_trainer = mysqli_query($conn,$count_trainer);
 $row_trainer = mysqli_num_rows($query_count_trainer);

 $count_contact = "SELECT contact_id FROM contact_us ORDER BY contact_id";
 $query_count_contact = mysqli_query($conn,$count_contact);
 $row_contact = mysqli_num_rows($query_count_contact);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="adminCss/adminHomePage.css">
</head>
<body>

    <header>
    <?php include 'adminNavBar.php'?>
    </header>
    <div class="body-container">
        <div class="side-bar">
        <?php include 'adminSideBar.php'?>
        </div>
        <div class="main-content">
            <div class="first-row">
                <div class="total-user boxes-container">
                    <h1>Total User</h1>
                    <h4><?php echo "$row";
                        
                    ?></h4>
                </div>
                <div class="total-trainer boxes-container">
                    <h1>Total Trainer</h1>
                    <h4><?php echo "$row_trainer";
                        
                        ?></h4>
                </div>
                <div class="payments boxes-container">
                    <h1>Total number of payments</h1>
                </div>
            </div>
            <div class="second-row">
                <div class="payment-due boxes-container">
                    <h1>Total Payments due</h1>
                </div>
                <div class="requests boxes-container">
                    <h1>No. of message</h1>
                    <p>
                    <?php echo "$row_contact";
                        
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <script src="AdminJs/adminNavBar.js"></script>
</body>
</html>