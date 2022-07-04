<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainer Name</title>
    <style>
        .body-container {
            display: flex;
            gap: 2rem;
            text-align: center;
            background-color: black;
            color: white;
        }
        .trainer-section{
            display: flex;
            gap:2rem;
        }
        .img-of-trainer{
            width: auto;
            height: 300px;
            margin: 5rem 2rem;
        }
        .about-trainer{
            margin: 5rem 2rem;
        }
    </style>
</head>

<body>
    <?php
    include('./userNavBar.php')
    ?>
    <div class="body-container">
        <div>
            <?php
            include('./userSideMenuBar.php')
            ?>
        </div>
        <div class="trainer-section">
            <div class="photo-rating">
                <img src="./trainerImages/trainer-1.jpg" alt="Miku" srcset="" class="img-of-trainer">
                <h1>Name of Trainer</h1>
                <p>This is suppose to be rating</p>
                <button> HIRE Trainer </button>
            </div>
            <div class="about-trainer">
                <h1>About Trainer</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos similique libero, alias sapiente dolorum assumenda exercitationem aut facilis nemo repellendus ea, quisquam, distinctio nostrum maxime quidem possimus. Eos, exercitationem doloribus.</p>
            </div>
        </div>

    </div>
</body>

</html>