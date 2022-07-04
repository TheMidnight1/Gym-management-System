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

                                    <form class="mx-1 mx-md-4" method="POST" action="../addUserSubmit.php" onsubmit="return validateForm()">
                                             <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0 mr-4">
                                                <input type="text" name="first-name" id="firstName" class="form-control" />
                                                <label class="form-label" for="form3Example1c">First Name</label>
                                                <span id="fResult"></span>
                                            </div>
                                            <div class="form-outline flex-fill mb-0 ">
                                                <input type="text" id="lastName" name="last-name" class="form-control" />
                                                <label class="form-label" for="form3Example1c">Last Name</label>
                                                <span id="lResult"></span>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="phone" id="phone" name="phone" class="form-control" />
                                                <label class="form-label" for="form3Example3c">Phone</label>
                                                <span id="nResult"></span>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0 mr-1">
                                                <div class="selectdiv">

                                                    <p>Year</p>
                                                    <select name="year" id="year">
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
                                                    <select name="month" id="month">
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
                                                    <select name="day" id="day">
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
                                        <p>Trainers</p>
                                        <select class="form-select" aria-label="Default select example" name="trainer">
                                            <option selected>
                                                
                                            </option>
                                            <option value="Nikesh Bista">Nikesh Bista</option>
                                            <option value="Basanta Gurung">Basanta Gurung</option>
                                            <option value="Sudarshan Bhandari">Sudarshan Bhandari</option>
                                        </select>
                                        <p>Package</p>
                                        <select class="form-select" aria-label="Default select example" name="package">

                                            <option value="Basic 1 Month Package">Basic 1 Month Package</option>
                                            <option value="Basic 3 Month Package">Basic 3 Month Package</option>
                                            <option value="Basic 6 Month Package">Basic 6 Month Package</option>
                                        </select>
                                        <div class="d-flex justify-content-center mx-4 mb-3 mt-4 mb-lg-4">
                                            <button type="submit" name="add-offline-user" class="btn btn-primary btn-lg">Register</button>
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
    <script src="./javascript/offlineUserValidation.js"></script>
</body>

</html>