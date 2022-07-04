<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="register.css">
  <title>Registration Form</title>
</head>

<body>

  <div class="login-wrapper">
    <form action="afterSubmit.php" class="form" method="POST" id="registration-form" onsubmit="return validateForm()">
      <h2>Register</h2>
      <div class="twoColumn">
        <div class="input-group">
          <input type="text" name="registerFirstName" id="firstName" autocomplete="off">
          <label for="registerFirstName">First Name</label>
          <p class="fResult" value="">
          </p>
        </div>

        <div class="input-group">
          <input type="text" name="registerLastName" id="lastName" autocomplete="off">
          <label for="registerLastName">Last Name</label>
          <span class="lResult"></span>
        </div>
      </div>
      <div class="twoColumn">
        <div class="input-group">
          <input type="email" name="email_id" id="email" autocomplete="off">
          <label for="email">Email</label>
          <span class="gResult"></span>
        </div>

        <div class="input-group">
          <input type="text" name="phone" id="phone" autocomplete="off">
          <label for="Phone">Phone</label>
          <span class="pError"></span>
        </div>
      </div>
      <div class="twoColumn">
        <div class="input-group">
          <input type="password" name="registerPassword" id="registerPassword">
          <label for="registerPassword">Password</label>
          <span class="psResult"></span>
        </div>

        <div class="input-group">
          <input type="password" name="cPassword" id="cPassword">
          <label for="registerPassword">Confirm Password</label>
          <span class="cpsError"></span>
        </div>
      </div>
      <p class="dob">Date of Birth</p>
      <div class="threeColumn">

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
      <p class="dob">Gender</p>
      <div class="radiobtnContainer">
        <label class="rad-label">
          <input type="radio" class="rad-input" name="rad" value="Male" id="male">
          <div class="rad-design"></div>
          <div class="rad-text">Male</div>
        </label>

        <label class="rad-label">
          <input type="radio" class="rad-input" name="rad" value="Female" id="female">
          <div class="rad-design"></div>
          <div class="rad-text">Female</div>
        </label>

        <label class="rad-label">
          <input type="radio" class="rad-input" value="Others" name="rad" id="others">
          <div class="rad-design"></div>
          <div class="rad-text">Others</div>
        </label>
        <span id="sResult"></span>
      </div>

      <button type="submit" id="regBtn" name="submit" class="create-btn"> Register </button>
      <p class="redirectToLogin"> <a href="../Login/login.php">Already have an account?</a> </p>
    </form>
  </div>

  <script src="validateForm.js"></script>
</body>

</html>