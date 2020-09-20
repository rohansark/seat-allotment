function validateForm() {
    var x = document.forms["signup"]["firstName"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
    var x = document.forms["signup"]["lastName"].value
    if (x == "") {
        alert("Last Name must be filled out");
        return false;
    }
    var x = document.forms["signup"]["email"].value
    if (x == "") {
        alert("Valid email is needed");
        return false;
    }
    var x = document.forms["signup"]["password"].value
    letters = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[A-Za-z]).{6,14}$/;
    if (!x.match(letters)) {
        alert('Password length will be 6 to 14, containing alphabets, digits and special characters @, #, _ and must contain at least one alphabet, at least one digit and at least one of the special characters');
        return false;
    }
    var y = document.forms["signup"]["password2"].value
    if (y != x) {
        alert("password did not match");
        return false;
    }

}