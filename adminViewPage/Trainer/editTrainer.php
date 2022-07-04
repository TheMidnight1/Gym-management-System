<?php
include './trainerConnection.php';

if (isset($_POST['edit'])) {
  $trainer_id = $_GET['trainer_id'];
  $first_name = $_POST['first-name'];
  $last_name = $_POST['last-name'];
  $phone = $_POST['phone'];
  $city = $_POST['city'];
  $gender = $_POST['gender'];
  $selectOption = $_POST['year'];
  $selectOption1 = $_POST['month'];
  $selectOption2 = $_POST['day'];

  $query = "UPDATE trainer SET trainer_id=$trainer_id,firstname = '$first_name' , lastname = '$last_name',phone = $phone,city='$city',gender='$gender',dob_Year=$selectOption,dob_Month=$selectOption1,dob_Day=$selectOption2 Where trainer_id=$trainer_id";

  $query_execute = mysqli_query($conn, $query);
  header('location: ../trainerHomePage.php');
}
$trainer_id = $_GET['trainer_id'];
$past_data = "SELECT * FROM trainer WHERE trainer_id = $trainer_id";
$query_past_data = mysqli_query($conn, $past_data);
while ($request = mysqli_fetch_array($query_past_data)) {




?>
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
    <form action="" method="post" onSubmit="return ValidateAddTrainer()">
      <div class="display-form-flex">
        <div class="two-column">
          <div>
            <p>First Name</p>
            <input type="text" value="<?php echo $request['firstname']?>" id="first_name" name="first-name">
            <p id="fresult" style="color: red;"></p>
          </div>

          <div>
            <p>Last Name</p>
            <input type="text" value="<?php echo $request['lastname']?>" id="last_name" name="last-name">
            <p id="lresult" style="color: red;"></p>
          </div>

        </div>
        <div class="two-column">
          <div>
            <p>Phone number</p>
            <input type="text" value="<?php echo $request['phone']?>" id="phone" name="phone">
            <p id="presult" style="color: red;"></p>
          </div>

          <div>
            <p>City</p>
            <input type="text" value="<?php echo $request['city']?>" id="city" name="city">
            <p id="cresult" style="color: red;"></p>
          </div>

        </div>

        <div class="threeColumn">
          <div class="dob">
            Date of birth
          </div>
          <div class="selectdiv">

            <p>Year</p>
            <select name="year" id="year" value="<?php echo $request['dob_Year']?>">
              <?php
              for ($i = date("Y") - 5; $i >= 1990; $i--) {
                echo "<option>$i</option>";
              }
              ?>
            </select>
          </div>

          <div class="selectdiv">
            <p>Month</p>
            <select name="month" id="month" value="<?php echo $request['dob_Month']?>">
              <?php
              for ($i = 1; $i <= 12; $i++) {
                echo "<option>$i</option>";
              }
              ?>
            </select>
          </div>

          <div class="selectdiv">
            <p>Day</p>
            <select name="day" id="day" value="<?php echo $request['dob_Day']?>">
              <?php
              for ($i = 1; $i <= 31; $i++) {
                echo "<option>$i</option>";
              }
              ?>
            </select>
          </div>

        </div>
        <div class="threeColumn">
          <p id="gresult" style="color: red;"></p>
          <div class="">
            Gender
          </div>
          <div>

            <input type="radio" name="gender" value="Male" checked>
            <label for="gender">Male</label>

            <input type="radio" name="gender" value="Female">
            <label for="gender">Female</label>

            <input type="radio" name="gender" value="Others">
            <label for="gender">Other</label>
          </div>
<?php
}?>

        </div>
        <div class="submit-btn">
          <button type="submit" name="edit">Add</button>
        </div>




    </form>

  </div>
  </div>
<script>
  function ValidateAddTrainer() {


var first_name_pattern = /^[a-zA-Z]([a-zA-Z]){2,15}$/;
var last_name_pattern = /^[a-zA-Z]([a-zA-Z]){2,15}$/;
var city_name_pattern = /^[a-zA-Z]([a-zA-Z]){2,30}$/;
var phone_pattern = /^([0-9]){10}$/;

var validStatus = false;

var first_name = document.getElementById("first_name").value;
var last_name = document.getElementById("last_name").value;
var phone = document.getElementById("phone").value;
var city = document.getElementById("city").value;
var option = document.getElementsByName("gender");

var fresult = document.getElementById("fresult");
var lresult = document.getElementById("lresult");
var presult = document.getElementById("presult");
var cresult = document.getElementById("cresult");

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
} else if (!city_name_pattern.test(city)) {
  presult.innerHTML = " ";
  validStatus = false;
  cresult.innerHTML = "Please enter a valid city";
} else if (!(option[0].checked || option[1].checked || option[2].checked)) {
  cresult.innerHTML = " ";
  var result = document.getElementById("gresult");
  validStatus = false;
  result.innerHTML = "please select one";
} else {
  validStatus = true;
}

return validStatus;
}

</script>
</body>

</html>