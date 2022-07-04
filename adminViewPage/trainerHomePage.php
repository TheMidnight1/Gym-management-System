
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainer Homeapage</title>
    <link rel="stylesheet" href="./Trainer/trainerCss/trainerHomePage.css">
</head>

<body>
    <?php
    include 'adminNavBar.php';
    ?>
    <div class="container">
        <div>
            <?php
            include 'adminSideBar.php';
            ?>
        </div>
        <div class="table-section">
            <div class="top-of-table">
                <div class="heading">
                    <h2>Trainers</h2>
                </div>

                <div class="add-trainer-btn">

                    <a class="search-btn" href="./Trainer/searchTrainer.php"><button >Search</button></a>
                    <!-- PHP FOR SEARCHING -->



                    <a class="add-trainer-btn"href="./Trainer/addTrainer.php"><button type="submit">Add Trainer</button></a>
                </div>
            </div>
            <div class="trainers-table">
                <table class="data-table">
                    <tr class="data-heading">
                        <th class="table_head">Trainer_id</th>
                        <th class="table_head">First Name</th>
                        <th class="table_head">Last Name</th>
                        <th class="table_head">Phone Number</th>
                        <th class="table_head">City</th>
                        <th class="table_head">Gender</th>
                        <th class="table_head">Date of Birth</th>
                        <th class="table_head">Registration date</th>
                        <th class="table_head">Edit/Delete</th>
                    </tr>


                    <?php
                    include '../databaseConnection.php';
                    $query = "SELECT * FROM trainer";
                    $query_execute = mysqli_query($conn, $query);
                    while ($request = mysqli_fetch_array($query_execute)) {

                    ?>
                        <tr>
                            <td><?php echo $request['trainer_id'] ?></td>
                            <td><?php echo $request['firstname'] ?></td>
                            <td><?php echo $request['lastname'] ?></td>
                            <td><?php echo $request['phone'] ?></td>
                            <td><?php echo $request['city'] ?></td>
                            <td><?php echo $request['gender'] ?></td>
                            <td><?php echo $request['dob_Year'] . '/' . $request['dob_Month'] . '/' . $request['trainer_id'] ?></td>
                            <td><?php echo $request['reg_date'] ?></td>
                            <td>
                                <button class="edit-btn"><a href="./Trainer/editTrainer.php?trainer_id=<?php echo $request['trainer_id']; ?>"> Edit </a></button>
                                <button class="delete-btn"><a href="./Trainer/deleteTrainer.php?trainer_id=<?php echo $request['trainer_id']; ?>"> Delete </a></button>

                            </td>


                        </tr>
                    <?php
                    }
                    ?>

                </table>
            </div>


        </div>

    </div>
</body>

</html>