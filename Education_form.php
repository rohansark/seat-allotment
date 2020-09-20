<?php
  session_start();
   // $_SESSION['regNO'] = $regNO;
    $id= ($_SESSION['regNO']);
    $conn = mysqli_connect('sql306.epizy.com','epiz_25729576','7ZaLTMSgDpg','epiz_25729576_jeca_sign_up'); 
    /*personal info */
    $fn = $_POST['firstname'];
    $ln = $_POST['lastname'];
    $fathersname = $_POST['fathersname'];
    $mothersname = $_POST['mothersname'];
    $dob = $_POST['dob'];
    $phno = $_POST['phno'];
    $email = $_POST['emailid']; 
    $sex = $_POST['sex'];/*sex */
    $catagory = $_POST['catagory'];/*category */

    /*address */
    $hno = $_POST['hno'];
    $road = $_POST['road'];
    $city = $_POST['city'];
    $pin = $_POST['pin'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $ph_number = $_POST['ph_number'];

    /*permanent address */
    $p_hno = $_POST['p_hno'];
    $p_road = $_POST['p_road'];
    $p_city = $_POST['p_city'];
    $p_pin = $_POST['p_pin'];
    $p_state = $_POST['p_state'];
    $p_country = $_POST['p_country'];
    $p_ph_number = $_POST['p_ph_number'];

    $query = "insert into personal_info(id,first_name,last_name,fathers_name,mothers_name,dob,mobile_no,email_id,sex,catagory,house_no,road,city,
    pincode,state,country,phone,p_house_no,p_road,p_city,p_pincode,p_state,p_country,p_phone) values($id,'$fn','$ln','$fathersname',
    '$mothersname','$dob',$phno,'$email','$sex','$catagory','$hno','$road','$city',$pin,'$state','$country',$ph_number,'$p_hno','$p_road',
    '$p_city',$p_pin,'$p_state','$p_country',$p_ph_number)";

    mysqli_query($conn,$query);
    

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
    <style>
      table{

      }
      #msg{
        color: red;
        text-align: center;
      }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">
      <img src="./wbjee.png" width="30" height="30" class="d-inline-block align-top" alt="">ABC JEEB
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
         <li class="nav-item active">
            <a class="nav-link" href="#">Home </a>
          </li>
        <li class="nav-item"><a class="nav-link" href="jeca.html">JECA<span class="sr-only">(current)</span></a></li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid" style="margin-top:5rem;">
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
            <div class="card leftsidesection" style="width: 12rem; padding: 0.1rem; margin-left: 5rem;margin-bottom:2rem;" id="notice">
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
        <form
                    name="application"
                    action="document_form.php"
                    method="POST" >
            
                

                <h4 id="msg">Do not leave without finishing the whole form.</h4>
                <h3 id="infohead">Educational Information</h3>
                <div id="info">
                      <div id="regno">
                        <?php
                          echo 'Registration No - '.$id.'<br>';
                        ?>
                      </div><br>
                        <table border="1">
                          <tr>
                            <th>Course</th>
                            <th>Board/University</th>
                            <th>Name of the intitution</th>
                            <th>Marks(%)</th>
                            <th>Year of passing</th>
                          </tr>
                          <tr>
                            <td>10th</td>
                            <td><input type="text" name="board1" /></td>
                            <td><input type="text" name="institute1" /></td>
                            <td><input type="text" name="marks1" size="5" /></td>
                            <td><input type="text" name="year_of_passing1" size="4" /></td>
                          </tr>
                          <tr>
                            <td>(10+2)</td>
                            <td><input type="text" name="board2" /></td>
                            <td><input type="text" name="institute2" /></td>
                            <td><input type="text" name="marks2" size="5"/></td>
                            <td><input type="text" name="year_of_passing2" size="4"/></td>
                          </tr>
                          <tr>
                            <td>(10+2+3)</td>
                            <td><input type="text" name="board3" /></td>
                            <td><input type="text" name="institute3" /></td>
                            <td><input type="text" name="marks3" size="5"/></td>
                            <td><input type="text" name="year_of_passing3" size="4"/></td>
                          </tr>
                        </table>
                      </div>

                      <button class="btn btn-info" type="submit" value="Save name" name="but_upload" style="margin-left:350px;">Submit and Next</button>
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
    
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</html>