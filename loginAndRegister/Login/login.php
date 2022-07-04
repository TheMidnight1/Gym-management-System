<?php

session_start();

include("db_conn.php");
include("function.php");
$showInvalid = "True";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  //something was posted
  $user_email = $_POST['user-email'];
  $user_password = $_POST['user-password'];

  if (!empty($user_email) && !empty($user_password)) {

    //read from database
    $query = "SELECT * FROM registration WHERE email = '$user_email' limit 1";
    $result = mysqli_query($conn, $query);

    if ($result) {
      if ($result && mysqli_num_rows($result) > 0) {

        $user_data = mysqli_fetch_assoc($result);

        if ($user_data['password'] === $user_password) {

          $_SESSION['user-email'] = $user_data['email'];
          header("Location: ../.././afterUserLogin/userHomePage.php");
          die;
        }
      }
    }

    $showInvalid = false;
  } else {
    $showInvalid = false;
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="login.css">

  <title>Login Form Demo</title>
</head>

<body>
  <div class="logoOfLoginPage">
    <a href="../../home.php">Gym Shark</a>
  </div>

  <div class="login-wrapper">

    <form action="<?= $_SERVER['PHP_SELF']; ?>" class="form" autocomplete="off" method="POST">
      <?php
      if ($showInvalid == false) {
        echo '<h3 class="error" style="color: red;text-align:center;">Invalid email or password</h3>
      <h2>Login</h2>';
      }
      ?>

      <div class="input-group">
        <input type="text" name="user-email" id="loginUser" required>
        <label for="loginUser">Email</label>
      </div>
      <div class="input-group">
        <input type="password" name="user-password" id="loginPassword" required>
        <label for="loginPassword">Password</label>
      </div>
      <input type="submit" value="Login" class="submit-btn" name="login-submit"> <br>
      <a href="#forgot-pw" class="forgot-pw">Forgot Password</a> <br><br>
      -------------------------OR------------------------- <br><br>
      <input type="submit" value="Create New Account" id="createNewAccBtn" class="create-btn">
      <a href="#register" class="register"></a>
    </form>

    <div id="forgot-pw">
      <form action="" class="form">
        <a href="#" class="close">&times;</a>
        <h2>Reset Password</h2>
        <div class="input-group">
          <input type="email" name="email" id="email_id" required>
          <label for="email">Email</label>
        </div>

        <input type="submit" value="Submit" class="submit-btn">
      </form>
    </div>
  </div>
  <script src="login.js"></script>
</body>

</html>