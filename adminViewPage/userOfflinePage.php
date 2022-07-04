<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Offline Page</title>
    <link rel="stylesheet" href="./User/userEdit.css">
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
                    <h2>USERS</h2>
                </div>

                <div class="add-trainer-btn">
                  <a href="./User/searchOfflineUser.php"><button type="submit">Search</button></a>  
                   <a href="./User/addOfflineUser.php"><button type="submit">Add User</button></a> 
                    
                </div>
            </div>
            <div class="trainers-table">
                <table class="data-table">
                    <tr class="data-heading">
                        <th class="table_head">user_id</th>
                        <th class="table_head">first_name</th>
                        <th class="table_head">second_name</th>
                        <th class="table_head">phone</th>
                        <th class="table_head">gender</th>
                        <th class="table_head">package_name</th>
                        <th class="table_head">trainer_assigned</th>
                        <th class="table_head">registered_date</th>
                        <th class="table_head">Edit/Delete</th>

                    </tr>
                    <?php
                    include '../databaseConnection.php';
                    $query = "SELECT * FROM offline_user_registration";
                    $query_execute = mysqli_query($conn, $query);
                    
                    while ($request = mysqli_fetch_array($query_execute)) {

                    ?>
                        <tr>
                            <td><?php echo $request['offline_user_id'] ?></td>
                            <td><?php echo $request['firstname'] ?></td>
                            <td><?php echo $request['lastname'] ?></td>
                            <td><?php echo $request['phone'] ?></td>
                            <td><?php echo $request['gender'] ?></td>
                            <td><?php echo $request['package_active'] ?></td>
                            <td><?php echo $request['trainer_assigned'] ?></td>
                            <td><?php echo $request['reg_date'] ?></td>
                            <td>
                                <button class="edit-btn"><a href="./User/userEditPage.php?offline_user_id=<?php echo $request['offline_user_id']; ?>"> Edit </a></button>
                                <button class="delete-btn"><a href="./User/userDeletePage.php?offline_user_id=<?php echo $request['offline_user_id']; ?>"> Delete </a></button>

                            </td>  


                        </tr>
                    <?php
                    }
                    ?>
                </table>

            </div>


        </div>

    </div>
    <script src="http://localhost/PROJECT%20BCA%20IV/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    <script src="http://localhost/PROJECT%20BCA%20IV/bootstrap-4.1.3-dist/jquery/jquery-3.6.0.min.js"></script>
</body>

</html>