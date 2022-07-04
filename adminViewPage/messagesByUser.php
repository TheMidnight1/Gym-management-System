<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages by User</title>
    <link rel="stylesheet" href="./adminCss/messagesByUser.css">
</head>

<body>
    <?php include './adminNavBar.php' ?>
</body>
<div class="container">
    <div class="side-bar">
        <?php include './adminSideBar.php' ?>
    </div>
    <div class="table-section">
        <div class="top-of-table">
            <div class="heading">
                <h2>Messages By User</h2>
            </div>

            <div class="add-trainer-btn">
            <a class="search-btn" href="./messageByUser/searchMessage.php"><button >Search</button></a>
                <!-- PHP FOR SEARCHING -->
            </div>
        </div>
        <div class="trainers-table">
            <table class="data-table">
                <tr class="data-heading">
                    <th class="table_head">Contact_id</th>
                    <th class="table_head">Full Name</th>
                    <th class="table_head">Email</th>
                    <th class="table_head">Phone Number</th>
                    <th class="table_head">Subject</th>
                    <th class="table_head">Description</th>
                    <th class="table_head">Edit/Delete</th>
                </tr>


                <?php
                include '../databaseConnection.php';
                $query = "SELECT * FROM contact_us";
                $query_execute = mysqli_query($conn, $query);
                while ($request = mysqli_fetch_array($query_execute)) {

                ?>
                    <tr>
                        <td><?php echo $request['contact_id'] ?></td>
                        <td><?php echo $request['fullname'] ?></td>
                        <td><?php echo $request['email'] ?></td>
                        <td><?php echo $request['phone'] ?></td>
                        <td><?php echo $request['subject'] ?></td>
                        <td><?php echo $request['description'] ?></td>
                        <td>
                            <button class="edit-btn"><a href="./Trainer/editTrainer.php?trainer_id=<?php echo $request['contact_id']; ?>"> Contact Back </a></button>
                            <button class="delete-btn"><a href="./messageByUser/deleteMessage.php?contact_id=<?php echo $request['contact_id']; ?>"> Delete </a></button>

                        </td>


                    </tr>
                <?php
                }
                ?>

            </table>
        </div>



    </div>
</div>

</html>