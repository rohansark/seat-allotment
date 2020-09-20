<?php
  session_start();
  $_SESSION['regNO'] = $regNO;
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Application</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="StyleSheetPage2.css" />
    <link rel="stylesheet" href="StyleForm.css" />
    <script src=checkBox.js></script>
    <style>
      #msg{
        color: red;
        text-align: center;
      }

    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="firstpage.html">
      <img src="./wbjee.png" width="30" height="30" class="d-inline-block align-top" alt="">
     ABCJEEB
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="firstpage.html">Home </a>
        </li>
        <li class="nav-item  active"><a class="nav-link" href="jeca.html">JECA<span class="sr-only">(current)</span></a></li>
    </ul>

</div>
</nav>

<div class="container-fluid" style="margin-top:1.5rem;">
  <div class="row">
      <div class="col-3">
          <div class="row">
              
              <div class="card leftsidesection" style="width: 12rem; padding: 0.1rem;margin-left: 5rem;margin-bottom:5rem;">
                    <div class="card-body">
                        <img src="wbjee.png" alt="abc logo.png" width="100px" height="100px">
                        <h5 class="card-title">ABC JOINT ENTRANCE EXAMINATION BOARD</h5>

                        <p class="card-text">Address : 94/A Anandamath Ichapure<br> North 24 Parganas<br>
                            Contact no : 9804191249<br>
                            <email us: abcjeeb@gmail.com></email>
                        </p>

                    </div>
                </div>

              
              
          </div>
          <div class="row">
              
                    <div class="card leftsidesection" style="width: 12rem; padding: 0.1rem; margin-left: 5rem;" id="notice">
                          <div class="card-body">
                              <h3 class="card-title">NOTICE</h3>
                              <hr>
                              <ul>
                                  <li><a class="card-link" href="notice1.pdf" target="_blank">Results Declared</a></li>
                                  <hr>
                                  <li><a class="card-link" href="collegeList.php" target="_blank">Seat Arrangement</a></li>
                                  <hr>
                                  <li><a class="card-link" href="notice3.pdf" target="_blank">Exam date reveals</a></li>
                                  <hr>
                                  <li><a class="card-link" href="#">see more..</a></li>
                              </ul>

                          </div>
                      </div>

              
              
          </div>

      </div>
      <div class="col-7">
      <h4 id="msg">Do not leave without finishing the whole form.</h4>

<h3 id="infohead">Personal Information</h3>

<div id="info">


  <form
    name="application"
    action="Education_form.php"
    onsubmit="return validateForm()"
    method="POST"  enctype="multipart/form-data"
  >

  <div id="regno">
  <?php
    echo 'Registration No - '.$regNO.'<br>';
  ?>
</div>
<br>

    <label class="required">First Name:</label>
    <input type="text" name="firstname" required />
    <label class="required">Last Name:</label>
    <input type="text" name="lastname" required />
    <br />
    <br />
    <label>Father's Name</label>
    <input type="text" name="fathersname" />
    <label>Mother's Name</label>
    <input type="text" name="mothersname" />
    <br />
    <br />
    <label class="required">Date of Birth</label>
    <input type="date" name="dob" required />
    <br />
    <br />
    <label class="required">Mobile Number</label>
    <input type="text" name="phno" required />

    <label class="required">Email id:</label>
    <input type="email" name="emailid" required />
    <br />
    <br />
    <label class="required">Sex:</label>
    Female
    <input type="radio" name="sex" value="female" />
    Male
    <input type="radio" name="sex" value="male" />
    Others
    <input type="radio" name="sex" value="others" />
    <br />
    <br />
    <label class="required">Catagory:</label>
    SC<input type="radio" name="catagory" value="sc" /> 
    ST<input type="radio"
      name="catagory"
      value="st"
    />
    OBC<input type="radio" name="catagory" value="obc" /> 
    GEN<input
      type="radio"
      name="catagory"
      value="gen"
    />
    <br />
    <br />
    <hr />
    <br />
    <br />
    <h4 class="required">Current Address:</h4>
    <br /><br />
    <label class="required">House No.:</label>
    <input type="text" name="hno" id="hno" />
    <label class="required">Road Name</label>
    <input type="text" name="road" id="road"/>
    <br />
    <br />
    <label class="required">City:</label>
    <input type="text" name="city" id="city" />
    <label class="required">Pin code:</label>
    <input type="text" name="pin" id="pin" />
    <br />
    <br />
    <label class="required">State:</label>
    <input type="text" name="state" id="state" />
    <label class="required">Country:</label>
    <input type="text" name="country" id="country" />
    <br />
    <br />
    <label class="required">Phone Number:</label>
    <input type="text" name="ph_number" id="ph_number" />
    <br />
    <br />
    <hr />
    <br />
    <br />
    <h4 class="required">Permanent Address:</h4>
    <br /><br />
    (check the box if same as current address)
    <input type="checkbox"  name="permanentAddress" id="permanentAddress" onclick="filladdress()"/><br /><br />
    <label class="required">House No.:</label>
    <input type="text" name="p_hno" id ="p_hno"/>
    <label class="required">Road Name</label>
    <input type="text" name="p_road"  id="p_road"/>
    <br />
    <br />
    <label class="required">City:</label>
    <input type="text" name="p_city" id="p_city" />
    <label class="required">Pin code:</label>
    <input type="text" name="p_pin" id="p_pin" />
    <br />
    <br />
    <label class="required">State:</label>
    <input type="text" name="p_state" id="p_state" />
    <label class="required">Country:</label>
    <input type="text" name="p_country" id="p_country" />
    <br />
    <br />
    <label class="required">Phone Number:</label>
    <input type="text" name="p_ph_number" id="p_ph_number"  />
  
</div>

<button class="btn btn-info"type="submit" value="Save name" name="but_upload" id="button" style=" margin-left:350px; margin-bottom:10px;">Submit and Next</button>
</form>

      </div>
  </div>
</div>



<footer id="sticky-footer" class="py-4">
    <div class="container text-center">
        © Copyright 2011-2020 www.seatallotment.epizy.com All rights reserved. Developed by Souvik Sarkar & Debleena
        Biswas.
    </div>
</footer>
    <script src="ApplicationFormCheck.js">
     
    </script>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</html>
