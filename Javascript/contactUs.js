

var description = document.getElementById('description');

var returnStats = false;

 function validateContactUs(){

    //FULL NAME CHECK
        var fullName = document.getElementById('full-name');
        var fError = document.getElementById('fError');
        var fullNameStored = fullName.value;
        var fullNamePattern = /^([\w]{3,12})+\s+([\w\s]{3,12})+$/i;
        if(fullNamePattern.test(fullNameStored)){
            fullName.style.border = "3px solid green";
            console.log(fullNameStored);
            returnStats = true;
        }
        else{
            fullName.style.border = "3px solid red";
            
             returnStats = false;
    }

    //Email validation

    var email = document.getElementById('email');
    var emailStored = email.value;
    var emailPattern = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,12}$/;
    if(emailPattern.test(emailStored)){
        email.style.border = "3px solid green";
        returnStats = true;
    }
    else{
        email.style.border = "3px solid red";
        returnStats =false;
    }
    //PHONE NUMBER VALDIATION
    var phone = document.getElementById('phone');
    var phoneStored = phone.value;
    var phonePattern = /^([0-9]){10}$/;
    if(phonePattern.test(phoneStored)){
        phone.style.border = "3px solid green";
        returnStats = true;
    }
    else{
        phone.style.border = "3px solid red";
        returnStats =false;
    }
    //SUBJECT VALDIATION
    var subject = document.getElementById('subject');
    var subjectStored = subject.value;
    var subjectPattern = /^([a-zA-Z]){3,25}$/;
    if(subjectPattern.test(subjectStored)){
        subject.style.border = "3px solid green";
        returnStats = true;
    }
    else{
        subject.style.border = "3px solid red";
        returnStats =false;
    }
        //TEXTAREA VALDIATION
        var description = document.getElementById('description');
        var descriptionStored = description.value;
        if(!descriptionStored == ""){
            description.style.border = "3px solid green";
            returnStats = true;
        }
        else{
            description.style.border = "3px solid red";
            returnStats =false;
        }
    return returnStats;
 }