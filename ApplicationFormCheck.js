function validateForm() {
  var x = document.forms["application"]["firstname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  var x = document.forms["application"]["lastname"].value;
  if (x == "") {
    alert("Last Name must be filled out");
    return false;
  }
  var x = document.forms["application"]["dob"].value;
  if (x == "") {
    alert("Date Of Birth is needed");
    return false;
  }
  var x = document.forms["application"]["phno"].value;
  if (x == "") {
    alert("Phone Number is needed");
    return false;
  }
  var x = document.forms["application"]["emailid"].value;
  if (x == "") {
    alert("Valid email is needed");
    return false;
  }
  if (
    document.application.sex[0].checked == false &&
    document.application.sex[1].checked == false &&
    document.application.sex[2].checked == false
  ) {
    alert("Please choose your Gender: Male or Female");
    return false;
  }

  if (
    document.application.catagory[0].checked == false &&
    document.application.catagory[1].checked == false &&
    document.application.catagory[2].checked == false &&
    document.application.catagory[3].checked == false
  ) {
    alert("Please choose your Catagory : SC,ST,OBC or GENERAL");
    return false;
  }
  var a = document.forms["application"]["hno"].value;
  if (a == "") {
    alert("Valid house number is needed");
    return false;
  }
  var b = document.forms["application"]["road"].value;
  if (b == "") {
    alert("Valid road is needed");
    return false;
  }
  var c = document.forms["application"]["city"].value;
  if (c == "") {
    alert("Valid city is needed");
    return false;
  }
  var d = document.forms["application"]["pin"].value;
  if (d == "") {
    alert("Valid pin is needed");
    return false;
  }
  var e = document.forms["application"]["state"].value;
  if (e == "") {
    alert("Valid state is needed");
    return false;
  }
  var f = document.forms["application"]["country"].value;
  if (f == "") {
    alert("Valid country is needed");
    return false;
  }
  var g = document.forms["application"]["ph_number"].value;
  if (g == "") {
    alert("Valid Phone Number is needed");
    return false;
  }

  var a = document.forms["application"]["p_hno"].value;
  if (a == "") {
    alert("Valid house number is needed");
    return false;
  }
  var b = document.forms["application"]["p_road"].value;
  if (b == "") {
    alert("Valid road is needed");
    return false;
  }
  var c = document.forms["application"]["p_city"].value;
  if (c == "") {
    alert("Valid city is needed");
    return false;
  }
  var d = document.forms["application"]["p_pin"].value;
  if (d == "") {
    alert("Valid pin is needed");
    return false;
  }
  var e = document.forms["application"]["p_state"].value;
  if (e == "") {
    alert("Valid state is needed");
    return false;
  }
  var f = document.forms["application"]["p_country"].value;
  if (f == "") {
    alert("Valid country is needed");
    return false;
  }
  var g = document.forms["application"]["p_ph_number"].value;
  if (g == "") {
    alert("Valid Phone Number is needed");
    return false;
  }
}
