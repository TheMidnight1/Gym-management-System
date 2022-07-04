<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/PROJECT%20BCA%20IV/bootstrap-4.1.3-dist/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../adminHomePage.php">Gym Shark</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../trainerHomePage.php">Home</a>
                    </li>
                </ul>
                <form action="" method="GET">
                    <div class="input-group mb-7">
                        <input type="text" class="form-control" value="<?php if (isset($_GET['search-bar'])) {
                                                                            echo $_GET['search-bar'];
                                                                        } ?>" name="search-bar" placeholder="trainer's name">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </nav>
    <div class="col-md-12">
        <div class="card">
            <div class="card mt-4">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Trainer_id</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone Number</th>
                                <th>City</th>
                                <th>Gender</th>
                                <th>Date of Birth</th>
                                <th>Registration date</th>
                                <th>Edit/Delete</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include './trainerConnection.php';
                            if (isset($_GET['search-bar'])) {
                                $filter_value = $_GET['search-bar'];
                                $statement =  "SELECT * FROM trainer where CONCAT(trainer_id,firstname,lastname) LIKE '%$filter_value%'";
                                $query = mysqli_query($conn, $statement);
                                if (mysqli_num_rows($query) > 0) {
                                    foreach ($query as $items) {
                            ?>
                                        <tr>
                                            <td><?= $items['trainer_id'] ?></td>
                                            <td><?= $items['firstname'] ?></td>
                                            <td><?= $items['lastname'] ?></td>
                                            <td><?= $items['phone'] ?></td>
                                            <td><?= $items['city'] ?></td>
                                            <td><?= $items['gender'] ?></td>
                                            <td><?= $items['dob_Year'] . '' . $items['dob_Month'] . '' . $items['dob_Day']  ?></td>
                                            <td><?= $items['reg_date'] ?></td>
                                            <td>
                                                <button class="btn btn-primary"><a style="text-decoration:none; color:white;"href="editTrainer.php?trainer_id=<?php echo $items['trainer_id']; ?>"> Edit </a></button>
                                                <button class="btn btn-danger"><a style="text-decoration:none;color:white;"href="deleteTrainer.php?trainer_id=<?php echo $items['trainer_id']; ?>"> Delete </a></button>

                                            </td>

                                        </tr>
                                    <?php

                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="9">No Record Found</td>
                                    </tr>
                            <?php

                                }
                            }
                            ?>

                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
    <script src="http://localhost/PROJECT%20BCA%20IV/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    <script src="http://localhost/PROJECT%20BCA%20IV/bootstrap-4.1.3-dist/jquery/jquery-3.6.0.min.js"></script>
</body>

</html>