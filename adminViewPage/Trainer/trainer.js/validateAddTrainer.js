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
