<?php include('../databaseConnection.php') ?>

<?php


if (isset($_POST['edit-offline-users'])) {
    $id = $_GET['id'];
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $phone = $_POST['phone'];
    $selectOption = $_POST['year'];
    $selectOption1 = $_POST['month'];
    $selectOption2 = $_POST['day'];
    $gender = $_POST['optradio'];



    $query = "UPDATE registration SET id=$id,firstname = '$first_name' , lastname = '$last_name',phone = $phone,dob_Year=$selectOption,dob_Month=$selectOption1,dob_Day=$selectOption2,gender='$gender' Where id=$id";
    $query_execute = mysqli_query($conn, $query);
    header('location: userEditPage.php');
}
$id = $_GET['id'];
$past_data = "SELECT * FROM registration WHERE id = $id";
$query_past_data = mysqli_query($conn, $past_data);
while ($request = mysqli_fetch_array($query_past_data)) {




?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add User</title>
        <link rel="stylesheet" href="http://localhost/PROJECT%20BCA%20IV/bootstrap-4.1.3-dist/css/bootstrap.min.css">
    </head>

    <body>
        <section class="vh-100" style="background-color: #eee;">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-12 col-xl-11">
                        <div class="card text-black" style="border-radius: 25px;">
                            <div class="card-body p-md-5">
                                <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                        <form class="mx-1 mx-md-4" method="POST" action="" onsubmit="return ValidateEditUser()">
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0 mr-4">
                                                    <input type="text" name="first-name" id="firstName" class="form-control" value="<?php echo $request['firstname'] ?>" />
                                                    <label class="form-label" for="form3Example1c">First Name</label>
                                                    <p id="fResult" class="text-danger"></p>
                                                </div>
                                                <div class="form-outline flex-fill mb-0 ">
                                                    <input type="text" id="lastName" name="last-name" class="form-control" value="<?php echo $request['lastname'] ?>" />
                                                    <label class="form-label" for="form3Example1c">Last Name</label>
                                                    <p id="lResult" class="text-danger"></p>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="phone" id="phone" name="phone" class="form-control" value="<?php echo $request['phone'] ?>" />
                                                    <label class="form-label" for="form3Example3c">Phone</label>
                                                    <p id="nResult" class="text-danger"></p>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0 mr-1">
                                                    <div class="selectdiv">

                                                        <p>Year</p>
                                                        <select name="year" id="year" value="<?php echo $request['dob_Year'] ?>">
                                                            <?php
                                                            for ($i = date("Y") - 5; $i >= 1990; $i--) {
                                                                echo "<option>$i</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-outline flex-fill mb-0 mr-1">
                                                    <div class="selectdiv">
                                                        <p>Month</p>
                                                        <select name="month" id="month" value="<?php echo $request['dob_Month'] ?>">
                                                            <?php
                                                            for ($i = 1; $i <= 12; $i++) {
                                                                echo "<option>$i</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-outline flex-fill mb-0 mr-1">
                                                    <div class="selectdiv">
                                                        <p>Day</p>
                                                        <select name="day" id="day" value="<?php echo $request['dob_Day'] ?>">
                                                            <?php
                                                            for ($i = 1; $i <= 31; $i++) {
                                                                echo "<option>$i</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <label class="radio-inline mr-2"><input type="radio" class="optradio" value="Female" name="optradio">Female</label>
                                            <label class="radio-inline mr-2"><input type="radio" class="optradio" value="Male" name="optradio">Male</label>
                                            <label class="radio-inline mr-2"><input type="radio" class="optradio" value="Others" name="optradio">Others</label>
                                            <p id="gResult" class="text-danger"></p>

                                        <?php
                                    } ?>
                                        <div class="d-flex justify-content-center mx-4 mb-3 mt-4 mb-lg-4">
                                            <button type="submit" name="edit-offline-users" class="btn btn-primary btn-lg">Edit</button>
                                        </div>

                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
              function ValidateEditUser() {
            var first_name_pattern = /^[a-zA-Z]([a-zA-Z]){2,15}$/;
            var last_name_pattern = /^[a-zA-Z]([a-zA-Z]){2,15}$/;
            var city_name_pattern = /^[a-zA-Z]([a-zA-Z]){2,30}$/;
            var phone_pattern = /^([0-9]){10}$/;
            var validStatus = false;

            var first_name = document.getElementById('firstName').value;
            var last_name = document.getElementById('lastName').value;
            var phone = document.getElementById('phone').value;
            var option = document.getElementsByName('optradio');

            var fresult = document.getElementById("fResult");
            var lresult = document.getElementById("lResult");
            var presult = document.getElementById("nResult");
            var gresult = document.getElementById("gResult");

            if (!first_name_pattern.test(first_name)) {
                validStatus = false;
                fresult.innerHTML = "Please enter a valid first name";
            } else if (!last_name_pattern.test(last_name)) {
                validStatus = false;
                fresult.innerHTML = " ";
                lresult.innerHTML = "Please enter a valid first name";
            } else if (!phone_pattern.test(phone)) {
                lresult.innerHTML = " ";
                validStatus = false;
                presult.innerHTML = "Please enter a valid phone number";
            }  else if (!(option[0].checked || option[1].checked || option[2].checked)) {
                lresult.innerHTML = " ";
                validStatus = false;
                gresult.innerHTML = "please select one";
            } else {
                validStatus = true;
            }

            return validStatus;
            }
        </script>
    </body>

    </html>