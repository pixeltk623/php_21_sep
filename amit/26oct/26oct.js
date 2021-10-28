function getEmailValue() {
    const email = document.getElementById('email').value;
    const listOfEmail = ["s@gmail.com", "a@gmail.com"]
    const found = listOfEmail.includes(email);
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


    if (email == "") {
        document.getElementById("e1").innerHTML = "fill the Email";
        document.getElementById("e1").style.color = "red";
    } else if (email != "") {
        if (re.test(email) == true) {
            if (found == true) {
                document.getElementById("e1").innerHTML = "Email Already Exist";
                document.getElementById("e1").style.color = "red";
            } else if (found == false) {
                document.getElementById("e1").innerHTML = "Email is Available";
                document.getElementById("e1").style.color = "green";
            }
        } else if (re.test(email) == false) {
            document.getElementById("e1").innerHTML = "wrong email";
            document.getElementById("e1").style.color = "red";
        }
    }


    let password = document.getElementById('password').value;
    let capitalletter = /[A-Z]/;
    let smallletter = /[a-z]/;
    let number = /[0-9]/;


    if (password.includes("@") || password.includes("#")) {
        document.getElementById("e3").innerHTML = "";
    } else {
        document.getElementById("e3").innerHTML = "One special character";
    }

    if (capitalletter.test(password)) {
        document.getElementById("e4").innerHTML = "";
    } else {
        document.getElementById("e4").innerHTML = "One uppercase character";
    }

    if (smallletter.test(password)) {
        document.getElementById("e2").innerHTML = "";
    } else {
        document.getElementById("e2").innerHTML = "One lowercase character";
    }

    if (password.length < 8) {
        document.getElementById("e5").innerHTML = "8 characters minimum";
    } else {
        document.getElementById("e5").innerHTML = "";
    }

    if (number.test(password)) {
        document.getElementById("e6").innerHTML = "";
    } else {
        document.getElementById("e6").innerHTML = "One number";
    }

    if ((password.includes("@") || password.includes("#")) && capitalletter.test(password) && smallletter.test(password) && password.length > 7 && number.test(password)) {
        document.getElementById("e7").innerHTML = "Your password is secure and you're all set!";
    } else {
        document.getElementById("e7").innerHTML = "";
    }


    let d1 = document.getElementById("e7");
    let d2 = document.getElementById("e1");
    if (d1.innerHTML == "Your password is secure and you're all set!" && d2.innerHTML == "Email is Available") {
        document.getElementById("myBtn").disabled = false;
    } else {
        document.getElementById("myBtn").disabled = true;
    }


}

function showhide() {

    let x = document.getElementById("password");
    let y = document.getElementById("showhide");
    if (x.type === "password") {
        x.type = "text";
        y.innerHTML = "hide"
    } else {
        x.type = "password";
        y.innerHTML = "show"
    }

    return false;
}


