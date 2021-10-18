function validation() {
    var first_name = document.getElementById('Fname').value;
    var last_name = document.getElementById('Lname').value;

    var Institute_name = document.myForm.institute.value;
    var DOB = document.getElementById('dob').value;

    if (first_name == "") {
        document.getElementById('fname').innerHTML = "** Please fill this field";
        return false;
    } 
    
    if ((last_name == "") && (first_name != "")) {
        document.getElementById('lname').innerHTML = "** Please fill this field";
        document.getElementById('fname').innerHTML = "";
        return false;
    }

    if ((Institute_name == '') && (last_name != "")) {
        document.getElementById('InstituteE').innerHTML = "** Please fill this field";
        document.getElementById('branchE').innerHTML = "";
        return false;
    }

    if (!DOB.value) {
        document.getElementById('DateOfBirth').innerHTML = "Please enter a valid birthday";
        return false;
    }
}