<?php include 'trainerTableCreation.php'; ?>
<?php include './trainerConnection.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./trainerCss/addTrainer.css">
</head>

<body>
  <a href="../adminHomePage.php" class="logo">Gym Shark</a>
  <div class="contact-us-form">
    <form action="./trainerAfterSubmit.php" method="post" onSubmit="return ValidateAddTrainer()">
      <div class="display-form-flex">
        <div class="two-column">
          <div>
            <p>First Name</p>
            <input type="text" placeholder="First Name" id="first_name" name="first-name">
            <p id="fresult" style="color: red;"></p>
          </div>

          <div>
            <p>Last Name</p>
            <input type="text" placeholder="Last Name" id="last_name" name="last-name">
            <p id="lresult" style="color: red;"></p>
          </div>

        </div>
        <div class="two-column">
          <div>
            <p>Phone number</p>
            <input type="text" placeholder="Enter Phone Number" id="phone" name="phone">
            <p id="presult" style="color: red;"></p>
          </div>

          <div>
            <p>City</p>
            <input type="text" placeholder="Kathmandu" id="city" name="city">
            <p id="cresult" style="color: red;"></p>
          </div>

        </div>

        <div class="threeColumn">
          <div class="dob">
            Date of birth
          </div>
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
        <div class="threeColumn">
          <span id="gresult" style="color: red;"></span>
          <div class="">
            Gender
          </div>
          <div>

            <input type="radio" name="gender" value="Male">
            <label for="gender">Male</label>

            <input type="radio" name="gender" value="Female">
            <label for="gender">Female</label>

            <input type="radio" name="gender" value="Other">
            <label for="gender">Other</label>
          </div>


        </div>
        <div class="upload photo">
          Upload trainer photo:
          <input type="file" name="my_image" id="">
          <!-- Error is displayed -->
          <?php if (isset($_GET['error'])) : ?>
            <p><?php echo $_GET['error']; ?></p>
          <?php endif ?>
        </div>
        <div class="submit-btn">
          <button type="submit" name="submit">Add</button>
          </div>

    </form>

  </div>
  </div>
  <script src="./trainer.js/validateAddTrainer.js"></script>
</body>

</html>