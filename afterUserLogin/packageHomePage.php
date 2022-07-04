<?php
include '../databaseConnection.php';
include '../esewa/setting.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages</title>
    <link rel="stylesheet" href="../package/packageHomePage.css">
</head>

<body>
    <?php include './userNavBar.php' ?>
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <h1>Package Name</h1>
            <h3>Package Price</h3>
            <h3>Package Duration</h3>
            <body>
    <form action=<?php echo $epay_url?> method="POST">
    <input value="100" name="tAmt" type="hidden">
    <input value="90" name="amt" type="hidden">
    <input value="5" name="txAmt" type="hidden">
    <input value="2" name="psc" type="hidden">
    <input value="3" name="pdc" type="hidden">
    <input value="EPAYTEST" name="scd" type="hidden">
    <input value="<?php echo $gympackage1?>" name="pid" type="hidden">
    <input value="https://esewa-success.000webhostapp.com/" type="hidden" name="su">
    <input value="http://merchant.com.np/page/esewa_payment_failed?q=fu" type="hidden" name="fu">
    <input value="Pay with E-sewa" type="submit">
    </form>
</body>
        </div>
    </div>
    <div class="container">
        <div>
            <?php include './userSideMenuBar.php' ?>
        </div>

        <div class="package-form">
            <div class="first-row">
                <div class="first-package card">
                    <h1>Membership Packages</h1>
                    <h2>Basic Plan for 1 Month</h2>
                    <div class="price">
                        <h1>NPR 2500</h1>


                    </div>
                    <div class="list">
                        <ul>
                            <li>Gym Equiments</li>
                            <li>Shower</li>
                            <li>Diet Plan</li>
                            <li>Tread mill</li>
                            <button type="submit" class="select-btn" name="btn1" id="myBtn1">Select</button>



                        </ul>

                    </div>
                </div><!-- first pakage end -->
                <div class="second-package card">
                    <h1>Membership Packages</h1>
                    <h2>Basic Plan for 3 Month</h2>
                    <div class="price">
                        <h1>NPR 9040</h1>
                    </div>
                    <div class="list">
                        <ul>
                            <li>Gym Equiments</li>
                            <li>Shower</li>
                            <li>Diet Plan</li>
                            <li>Tread mill</li>
                            <button class="select-btn" id="myBtn2">Select</button>
                        </ul>
                    </div>
                </div>

                <div class="third-package card">
                    <h1>Membership Packages</h1>
                    <h2>Basic Plan for 6 Month</h2>
                    <div class="price">
                        <h1>NPR 16385</h1>
                    </div>
                    <div class="list">
                        <ul>
                            <li>Gym Equiments</li>
                            <li>Shower</li>
                            <li>Diet Plan</li>
                            <li>Tread mill</li>
                            <button class="select-btn" id="myBtn3">Select</button>
                        </ul>

                    </div>

                </div>
            </div>
            <div class="second-row">
                <div class="fourth-package card">
                    <h1>Premium Membership Packages</h1>
                    <h2>Basic Plan for 1 Month</h2>
                    <div class="price">
                        <h1>NPR 25000</h1>
                    </div>
                    <div class="list">
                        <ul>
                            <li>Gym Equiments</li>
                            <li>Shower</li>
                            <li>Sauna</li>
                            <li>Diet Plan</li>
                            <li>Tread mill</li>
                            <li>Personal trainer</li>
                            <button class="select-btn" id="myBtn4">Select</button>
                        </ul>

                    </div>
                </div><!-- first pakage end -->
                <div class="fifth-package card">
                    <h1>Premium Membership Packages</h1>
                    <h2>Basic Plan for 3 Month</h2>
                    <div class="price">
                        <h1>NPR 70000</h1>
                    </div>
                    <div class="list">
                        <ul>
                            <li>Gym Equiments</li>
                            <li>Shower</li>
                            <li>Sauna</li>
                            <li>Diet Plan</li>
                            <li>Tread mill</li>
                            <li>Personal trainer</li>
                            <button class="select-btn" id="myBtn5">Select</button>
                        </ul>
                    </div>

                </div>

                <div class="sixth-package card">
                    <h1>Premium Membership Packages</h1>
                    <h2>Basic Plan for 6 Month</h2>
                    <div class="price">
                        <h1>NPR 140000</h1>
                    </div>
                    <div class="list">
                        <ul>
                            <li>Gym Equiments</li>
                            <li>Shower</li>
                            <li>Sauna</li>
                            <li>Diet Plan</li>
                            <li>Tread mill</li>
                            <li>Personal trainer</li>
                            <button class="select-btn" id="myBtn6">Select</button>
                        </ul>

                    </div>

                </div>
            </div>
        </div>

    </div>
    <script src="../package/packageHomePage.js"></script>
</body>

</html>