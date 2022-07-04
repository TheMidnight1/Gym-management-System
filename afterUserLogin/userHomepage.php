<?php
session_start();

include("../loginAndRegister/Login/db_conn.php");
include("../loginAndRegister/Login/function.php");
$user_data = check_login($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Shark</title>
    <link rel="stylesheet" href="userHomePageCss/userHomePage.css">
    <link rel="stylesheet" href="../Css/contactUs.css">
</head>

<body>
    <?php include("userNavBar.php") ?>
        <div class="user-homepage">
            <div class="side-menu-bar">
                <?php include("userSideMenuBar.php") ?>
            </div>
            <div class="main-page">
                <div class="first-column">
                    <!-- SLIDER FOR Membership Package -->
                    <div class="membership-container">
                        <div class="membership">
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
                                    <li>Personal trainer</li>

                                </ul>
                            </div>
                            <div class="package-select-button">
                                <a href="./packageHomePage.php"> <button id="package-select">Select a Package</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- END Membership-container  -->
                    <div class="hire-trainer-container">
                        <div class="hire-trainer">
                            <div class="trainer-detail-container">
                                <div class="trainer-img">
                                    <a href="#"> <img src="userHomePageImage/1.png" alt=""></a>
                                </div>
                                <div class="trainer-details">
                                    <p>Name of trainer</p>
                                </div>
                                <div class="hire-trainer-btn">
                                    <a href="trainerSelection.php"> <button>Hire Trainer</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="diet-plan-container">
                        <div class="diet-img">
                            <a href="#"> <img src="userHomePageImage/diet-plan.png" alt=""> </a>
                        </div>
                        <div class="diet-plan-btn">
                            <button>Get a diet plan</button>
                        </div>
                    </div>
                </div>
                <div class="second-column">
                    <div class="heading-BMI" id="bmi">
                        <h1>Calcualte BMI</h1>
                    </div>
                    <div class="second-row-container">
                        <div class="second-row">
                            <div class="height">
                                <p>Height in cm</p>
                                <input type="text">

                            </div>
                            <div class="weight">
                                <p>Weight in kg</p>
                                <input type="text">

                            </div>
                        </div>
                    </div>
                    <div class="bmi-result">
                        <p></p>
                    </div>
                    <div class="calculate-btn">
                        <button>Calculate</button>
                    </div>
                </div>
                <div class="third-column">
                    <div class="contact-us-container" id="contact-us">
                        <div class="contact-us-header">
                            <h1>Contact Us</h1>
                            <p>Feel Free to drop us a line below</p>
                        </div>
                        <div class="contact-us-box">
                            <div class="contact-us-info">
                                <div class="phone-number">
                                    <h1>Phone:</h1>
                                    <p>9803577330</p>
                                    <p>9865595797</p>
                                </div>
                                <div class="email-address">
                                    <h1>Email:</h1>
                                    <p>saugat.balami@gmail.com</p>
                                    <p>bhandarisudarshan96@gmail.com</p>

                                </div>
                                <div class="address">
                                    <h1>Address</h1>
                                    <p>Bhatkekopul-Kalopul Rd, Kathmandu 44600</p>

                                </div>
                            </div>
                            <form action="../contactUs/afterLoginUserContactFormSubmit.php" class="contact-form" autocomplete="off" onsubmit="return validateContactUs()" method="POST">
                        <div class="container-form" >
                            <div class="form-first-row">
                                <input type="text" name="full-name" id="full-name" placeholder="Full Name">
                                
                                <input type="email" name="email_id" id="email" placeholder="someone@gmail.com">
                            </div>

                            <div class="form-second-row">
                                <input type="text" name="phone" id="phone" placeholder="Your Phone">
                                <input type="text" name="subject" id="subject" placeholder="Subject">
                            </div>
                            <div class="form-third-row">
                                <textarea name="description" class="textarea-class" id="description" cols="30" rows="10" placeholder="Your message"></textarea>

                            </div>
                            <div class="form-fourth-row">
                                <button type="submit" class="contact-btn" id="contact-us-button" name="contact-submit">Send</button>
                                <p  id="contact-result" style="color: red;"></p>
                            </div>
                        </div>
                    </form>


                            </div>
                        </div>

                    </div>
                </div>

                <div class="fourth-column">
                    <h1>Footer</h1>
                </div>
            </div>

        </div>
<script src="./userHomePage.js"></script>
<script src="../Javascript/contactUs.js"></script>
</body>

</html>