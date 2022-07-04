// var registration_form = document.getElementById('registration-form');
// registration_form.addEventListener('submit',(e)=>{
//     e.preventDefault();
//     validateForm();
// })

let first_name_error = document.getElementsByClassName("fResult");
let last_name_error = document.getElementsByClassName("lResult");
let email_error = document.getElementsByClassName("gResult");
let phone_error = document.getElementsByClassName("pResult");
let password_error = document.getElementsByClassName("psResult");
let confirm_error = document.getElementsByClassName("cpsResult");
let gender_error = document.getElementById("sResult");

let first_name_pattern = /^[a-zA-Z]([a-zA-Z]){2,10}$/;
let last_name_pattern = /^[a-zA-Z]([a-zA-Z]){2,10}$/;
let email_pattern =/^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
let phone_pattern = /^([0-9]){10}$/;
var returnValid = false;
//WHEN SUBMI TTHIS FUNCTION GETS CALLED
function validateForm() {
  //firstNameCheck();
  var first_name = document.getElementById("firstName").value;
  if (first_name_pattern.test(first_name)) {
    console.log("Your name is valid", first_name);
    first_name_error.innerHtml = "Error in first name";
    returnValid = true;
  } else {
    console.log("Your name is not valid", first_name);
    first_name_error.innerHtml = "invalid Name";
    returnValid = false;
    alert("Your first name is invalid");
  }

  //lastNameCheck();
  var last_name = document.getElementById("lastName").value;
  if (last_name_pattern.test(last_name)) {
    console.log("Your last name is valid", last_name);
    last_name_error.innerHtml = "Valid Name";
    returnValid = true;
  } else {
    console.log("Your last name is not valid", last_name);
    first_name_error.innerHtml = "invalid Name";
    returnValid = false;
    alert("Your last name is invalid");
  }

  //emailCheck();
  let email = document.getElementById("email").value;
  if (email_pattern.test(email)) {
    console.log("Your email is valid", email);
    email_error.innerHtml = "Valid Email";
    returnValid = true;
  } else {
    console.log("Your email is not valid", email);
    first_name_error.innerHtml = "invalid Email";
    returnValid = false;
    alert("Your email is invalid");
  }
  //numberCheck();
  let phone = document.getElementById("phone").value;
  if (phone_pattern.test(phone)) {
    console.log("Your phone is valid", phone);
    phone_error.innerHtml = "Valid phone";
    returnValid = true;
  } else {
    console.log("Your phone is not valid", phone);
    returnValid = false;
    alert("Your phone is not invalid");
  }

  //passwordCheck();
  let password = document.getElementById("registerPassword").value;
  let confirm_password = document.getElementById("cPassword").value;
  if (password == confirm_password) {
    if (password.length < 20 && password.length > 2) {
      console.log("Vailid Password");
      returnValid = true;
    } else {
      console.log("Invalid Password");
      returnValid = false;
      alert("Your password is invalid");
    }
  } else {
    console.log("Password not same");
    returnValid = false;
  }
  //genderCheck();
  var option = document.getElementsByName("rad");

  if (!(option[0].checked || option[1].checked || option[2].checked)) {
    console.log("Please Select Your Gender");
    alert("Please select your gender");
    returnValid = false;
  } else {
    console.log("gender validated");
    returnValid = true;
  }
  return returnValid;
}
