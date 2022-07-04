<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <a class="search-btn" href="./User/searchUser.php"><button >Search</button></a>
                <!-- PHP FOR SEARCHING -->
            </div>
            </div>
            <div class="trainers-table">
                <table class="data-table">
                    <tr class="data-heading">
                        <th class="table_head">user_id</th>
                        <th class="table_head">first_name</th>
                        <th class="table_head">second_name</th>
                        <th class="table_head">email</th>
                        <th class="table_head">phone</th>
                        <th class="table_head">gender</th>
                        <th class="table_head">registered_date</th>
                        <th class="table_head">package_name</th>
                        <th class="table_head">trainer_assigned</th>
                        <th class="table_head">Edit/Delete</th>

                    </tr>
                    <?php
                    include '../databaseConnection.php';
                    $query = "SELECT * FROM registration";
                    $query_execute = mysqli_query($conn, $query);
                    
                    while ($request = mysqli_fetch_array($query_execute)) {

                    ?>
                        <tr>
                            <td><?php echo $request['id'] ?></td>
                            <td><?php echo $request['firstname'] ?></td>
                            <td><?php echo $request['lastname'] ?></td>
                            <td><?php echo $request['email'] ?></td>
                            <td><?php echo $request['phone'] ?></td>
                            <td><?php echo $request['gender'] ?></td>
                            <td><?php echo $request['reg_date'] ?></td>
                            <td></td>
                            <td></td>
                            <td>
                                <button class="edit-btn"><a href="./userOnlineEditPage.php?id=<?php echo $request['id']; ?>"> Edit </a></button>
                              <span>  <button class="delete-btn"><a href="./User/userOnlineDeletePage.php?id=<?php echo $request['id']; ?>"> Delete </a></button>
                              </span>
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