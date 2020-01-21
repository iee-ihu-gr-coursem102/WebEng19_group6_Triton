function validatelogin() {
    var $valid = true;
    document.getElementById("userinfo").innerHTML = "";
    document.getElementById("passinfo").innerHTML = "";

    var userName = document.getElementById("lusername").value;
    var password = document.getElementById("lpassword").value;
    if (userName == "") {
        document.getElementById("userinfo").innerHTML = "Συμπλήρωσε username";
        $valid = false;
    }
    if (password == "") {
        document.getElementById("passinfo").innerHTML = "Συμπλήρωσε password";
        $valid = false;
    }
    return $valid;
}

function svalidateregister() {
    var $valid = true;
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var pass = document.getElementById("pass").value;
    var confpass = document.getElementById("confpass").value;
    var uname = document.getElementById("uname").value;
    var email = document.getElementById("email").value;

    if (fname == "") {
        document.getElementById("regfname").innerHTML = "Συμπλήρωσε Όνομα";
        $valid = false;
    }
    if (lname == "") {
        document.getElementById("reglname").innerHTML = "Συμπλήρωσε Επώνυμο";
        $valid = false;
    }
    if (pass == "") {
        document.getElementById("regpass").innerHTML = "Συμπλήρωσε Κωδικό";
        $valid = false;
    }
    if (confpass == "") {
        document.getElementById("regconfpass").innerHTML = "Συμπλήρωσε Επιβεβαίωση κωδικού";
        $valid = false;
    }
    else {
        var password = document.getElementById("pass")
            , confirm_password = document.getElementById("confpass");
        if (password.value != confirm_password.value) {
            document.getElementById("regconfpass").innerHTML = "Οι κωδικοί δεν ταιριάζουν";
        }
    }
    if (uname == "") {
        document.getElementById("reguname").innerHTML = "Συμπλήρωσε Όνομα Χρήστη";
        $valid = false;
    }
    else if ((document.getElementById("unamediv") !== null) && (document.getElementById("unamediv").className == "invalid-feedback")) {
        $valid = false;
    }
    if (email == "") {
        document.getElementById("regemail").innerHTML = "Συμπλήρωσε email";
        $valid = false;
    }
    else if ((document.getElementById("emaildiv") !== null) && (document.getElementById("emaildiv").className == "invalid-feedback")) {
        $valid = false;
    }
    return $valid;

}

function validateregister() {

    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var pass = document.getElementById("pass").value;
    var confpass = document.getElementById("confpass").value;
    var uname = document.getElementById("uname").value;
    var email = document.getElementById("email").value;

    if (fname !== null && fname !== '') {
        document.getElementById("regfname").innerHTML = "";
    }
    if (lname !== null && lname !== '') {
        document.getElementById("reglname").innerHTML = "";
    }
    if (pass != null && pass !== '') {
        document.getElementById("regpass").innerHTML = "";
    }
    if (confpass !== null && confpass !== '') {
        document.getElementById("regconfpass").innerHTML = "";
    }

    if (uname !== null && uname !== '') {
        document.getElementById("reguname").innerHTML = "";
    }

    if (email !== null && email !== '') {
        document.getElementById("regemail").innerHTML = "";
    }
}

