

// File uploaded

// Size = > 100 - 500KB 
// Error = > issue with size 
// Exyr = jpg and png 



function formCheckValidation() {

    var name = document.getElementById("name").value;
    var Email = document.getElementById("email").value;
    var genders = document.getElementsByName("gender");
    var hobby = document.getElementsByName("hobby[]");
    var cities = document.getElementById("city");
    var cityvalid = cities.value;
    var file = document.getElementById("fileUpload");
    var fileUpload = file.value;
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    const filevalidation = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
    

    if (name == "") {
        document.getElementById("e1").innerHTML = "fill the name";
    } else {
        document.getElementById("e1").innerHTML = ""; 
    }


    if (Email == "") {
        document.getElementById("e2").innerHTML = "email can't be blank";
    } else {
        if (re.test(Email) == true) {
            document.getElementById("e2").innerHTML = "";
        } else if (re.test(Email) == false) {
            document.getElementById("e2").innerHTML = "wrong email";
        }
    }


    if (genders[0].checked || genders[1].checked) {
        document.getElementById("e3").innerHTML = "";
    } else {
        document.getElementById("e3").innerHTML = "select your gender";
    }

    var hoobyList = [];
    for (var i = 0; i < hobby.length; i++) {

        if (hobby[i].checked) {
            hoobyList.push(hobby[i].value)
        }
    }


    if (hoobyList.length == 0) {
        document.getElementById("e4").innerHTML = "select your hobby";
    } else {

        if (hoobyList.length < 2) {
            document.getElementById("e4").innerHTML = "atleast two hobby must be selected";
        } else {
            document.getElementById("e4").innerHTML = "";
        }

    }

    if (cityvalid == "select") {
        document.getElementById("e5").innerHTML = "select your city";
    } else {
        document.getElementById("e5").innerHTML = "";
    }

    if (fileUpload == "") {
        document.getElementById("e6").innerHTML = "file should be uploaded";
    } else {
        if (filevalidation.test(fileUpload) == true) {
            document.getElementById("e6").innerHTML = "";
        } else if (filevalidation.test(fileUpload) == false) {
            document.getElementById("e6").innerHTML = "wrong file format";
        }
    }

    return false;
}