<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/PROJECT%20BCA%20IV/bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./searchMessage.css">
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
                        <a class="nav-link active" aria-current="page" href="../messagesByUser.php">Home</a>
                    </li>
                </ul>
                <form action="" method="GET">
                    <div class="input-group mb-7">
                        <input type="text" class="form-control" value="<?php if (isset($_GET['search-bar'])) {
                                                                            echo $_GET['search-bar'];
                                                                        } ?>" name="search-bar" placeholder="Email,Fullname,phone">
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
                                <th class="table_head">Contact_id</th>
                                <th class="table_head">Full Name</th>
                                <th class="table_head">Email</th>
                                <th class="table_head">Phone Number</th>
                                <th class="table_head">Subject</th>
                                <th class="table_head">Description</th>
                                <th class="table_head">Edit/Delete</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include '../../databaseConnection.php';
                            if (isset($_GET['search-bar'])) {
                                $filter_value = $_GET['search-bar'];
                                $statement =  "SELECT * FROM contact_us where CONCAT(contact_id,phone,email) LIKE '%$filter_value%'";
                                $query = mysqli_query($conn, $statement);
                                if (mysqli_num_rows($query) > 0) {
                                    foreach ($query as $request) {
                            ?>
                                        <tr>
                                            <td><?php echo $request['contact_id'] ?></td>
                                            <td><?php echo $request['fullname'] ?></td>
                                            <td><?php echo $request['email'] ?></td>
                                            <td><?php echo $request['phone'] ?></td>
                                            <td><?php echo $request['subject'] ?></td>
                                            <td><?php echo $request['description'] ?></td>
                                            <td>
                                        <a class="btn btn-primary"href="./Trainer/editTrainer.php?trainer_id=<?php echo $request['contact_id']; ?>"> Contact Back </a>
                                            <a class="btn btn-danger"href="./Trainer/deleteTrainer.php?trainer_id=<?php echo $request['contact_id']; ?>"> Delete </a>

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