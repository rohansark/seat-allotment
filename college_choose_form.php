<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
//$_SESSION['regNO'] = $regNO;
$id= ($_SESSION['regNO']);
$avg = ($_SESSION['avg']);
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
      <img src="./wbjee.png" width="30" height="30" class="d-inline-block align-top" alt="">ABCJEEB
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
         <li class="nav-item active">
            <a class="nav-link" href="jeca.html">Home </a>
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
        action=""
        method="POST">

        <h4 id="msg">Do not leave without finishing the whole form.</h4>
      <h3 id="infohead">College Choose</h3>
      <div id="info">
        <div id="regno">
          <?php
            echo 'Registration No - '.$id.'<br>';
          ?>
        </div><br> 
        <?php
        

/*
$q1 = "select caste from personal info where id=$id";
if($q1res == "gen")
{
    $sql = "select college_name from college where cut_off <= $avg and gen_seat_no >0";

}
else
    $sql = "select college_name from college where cut_off <= $avg and RESERVED_sEAT_seat_no >0";


*/



          $conn = mysqli_connect('sql306.epizy.com','epiz_25729576','7ZaLTMSgDpg','epiz_25729576_jeca_sign_up'); 
          $sql = "select college_name from college where cut_off <= $avg and gen_seat_no >0 or reserve_seat_no > 0";
          $result = mysqli_query($conn,$sql);
          echo ' <select name="college" id="college">
            <option>------college------</option>';
          while($row = $result -> fetch_assoc())
          {
            $x = $row['college_name'];
            echo '<option value= "'.$x.'">'.$x.'</option>';
          }
          echo '</select>';
          
          
        ?>
        <p><strong>please click the select college button before submit</strong></p>
        <button type="submit" class="btn btn-secondary btn-sm" name="submit" id="submit" style="margin-left:370px;">Select college</button></br>
    </form>
      
     
      <?php
        if(isset($_POST['submit']))
          $college_name = $_POST['college'];
        echo 'You have selecteted '.$college_name.' college successfully';
        
        $sql1 = "select college_id from college where college_name like '$college_name'";
        $result1 = mysqli_query($conn,$sql1);
        $row = $result1 -> fetch_assoc();
        echo '<br>College id is - '.$row['college_id'].'<br>';
        $college_id = $row['college_id'];
        $sql2 = "insert into college_choice values($id, $college_id)";
        mysqli_query($conn,$sql2);
        $sql3 = "update college set gen_seat_no=gen_seat_no-1 where college_id = $college_id";
        mysqli_query($conn,$sql3);


      ?>
       </div>
       <div id="note" style="text-align:center;color:red">
          <p>N.B - If you don't see any college in the list, that means you are not eligible to any college</p>
          <form action="final.php" method = "POST">
         <button class="btn btn-primary" type="submit" value="Save name" style="margin-left:50px;">Submit and Finish</button>
      </form>
       </div>

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


   

    



   