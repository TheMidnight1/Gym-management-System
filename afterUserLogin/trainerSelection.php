<?php
    include '../databaseConnection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select a package</title>
    <link rel="stylesheet" href="./userHomePageCss/userNav.css">
    <link rel="stylesheet" href="./trainerSelection/trainerSelection.css">
</head>

<body>
    <?php
    include("./userNavBar.php");
    ?>


    <div class="body-container">
        <?php
        include("./userSideMenuBar.php");
        ?>
        <div class="trainer-container">

            <div class="first-row">
                <div class="trainers">
                    <div class="profile-pic">
                        <img src="./trainerImages/trainer-1.jpg" alt="Nikesh Bista" srcset="">
                    </div>

                    <div class="details">
                        <h2>Nikesh Bista</h2>
                        <p>personal trainer(30$/hr)</p>
                    </div>
                    <div class="rating">
                        <h3>rating</h3>
                    </div>
                    <a href=""> <button class="see-more-btn">Hire</button></a>
                </div>

                <div class="trainers">
                    <div class="profile-pic">
                        <img src="./trainerImages/trainer-2.png" alt="Nikesh Bista" srcset="">
                    </div>

                    <div class="details">
                        <h2>Nikesh Bista</h2>
                        <p>personal trainer(30$/hr)</p>
                    </div>
                    <div class="rating">
                        <h3>rating</h3>
                    </div>
                    <a href=""> <button class="see-more-btn">Hire</button></a>
                </div>

                <div class="trainers">
                    <div class="profile-pic">
                        <img src="./trainerImages/trainer_3.jpeg" alt="Nikesh Bista" srcset="">
                    </div>

                    <div class="details">
                        <h2>Nikesh Bista</h2>
                        <p>personal trainer(30$/hr)</p>
                    </div>
                    <div class="rating">
                        <h3>rating</h3>
                    </div>
                    <a href=""> <button class="see-more-btn">Hire</button></a>
                </div>

            </div>

            <div class="second-row">
                <div class="trainers">
                    <div class="profile-pic">
                        <img src="./trainerImages/trainer_4.jpg" alt="Nikesh Bista" srcset="">
                    </div>

                    <div class="details">
                        <h2>Nikesh Bista</h2>
                        <p>personal trainer(30$/hr)</p>
                    </div>
                    <div class="rating">
                        <h3>rating</h3>
                    </div>
                    <a href=""> <button class="see-more-btn">Hire</button></a>
                </div>

                <div class="trainers">
                    <div class="profile-pic">
                        <img src="./trainerImages/trainer-5.jpeg" alt="Nikesh Bista" srcset="">
                    </div>

                    <div class="details">
                        <h2>Nikesh Bista</h2>
                        <p>personal trainer(30$/hr)</p>

                    </div>
                    <div class="rating">
                        <h3>rating</h3>
                    </div>
                    <a href=""> <button class="see-more-btn">Hire</button></a>
                </div>

                <div class="trainers">
                    <div class="profile-pic">
                        <img src="./trainerImages/trainer-6.jpeg" alt="Nikesh Bista" srcset="">
                    </div>

                    <div class="details">
                        <h2>Nikesh Bista</h2>
                        <p>personal trainer(30$/hr)</p>
                    </div>
                    <div class="rating">
                        <h3>rating</h3>
                    </div>
                    <a href=""> <button class="see-more-btn">Hire</button></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>