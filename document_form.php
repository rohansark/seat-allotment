<?php
  session_start();
  //$_SESSION['regNO'] = $regNO;
  $id= ($_SESSION['regNO']);
  $conn = mysqli_connect('sql306.epizy.com','epiz_25729576','7ZaLTMSgDpg','epiz_25729576_jeca_sign_up');  
  error_reporting(E_ALL ^ E_NOTICE);
  /*Educational info */
    $board1 =$_POST['board1'];
    $institute1 =$_POST['institute1'];
    $marks1 =$_POST['marks1'];
    $year_of_passing1 =$_POST['year_of_passing1'];

    $board2 =$_POST['board2'];
    $institute2 =$_POST['institute2'];
    $marks2 =$_POST['marks2'];
    $year_of_passing2 =$_POST['year_of_passing2'];

    $board3 =$_POST['board3'];
    $institute3 =$_POST['institute3'];
    $marks3 =$_POST['marks3'];
    $year_of_passing3 =$_POST['year_of_passing3'];


    $query = "insert into educational_info(id,board1,institute1,marks1,year_of_passing1,board2,institute2,marks2,year_of_passing2,
    board3,institute3,marks3,year_of_passing3) values ($id,'$board1','$institute1',$marks1,$year_of_passing1,'$board2','$institute2',$marks2,$year_of_passing2,'$board3','$institute3',$marks3,$year_of_passing3)";


    mysqli_query($conn,$query);

    $query1 = "select (marks1+marks2+marks3) as total_marks from educational_info where id=$id";
    $result1=mysqli_query($conn,$query1);
    $row = $result1 -> fetch_assoc();
    $total = $row['total_marks'];
    $avg = $total/3;

    
    $_SESSION['avg'] = $avg;






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
    <a class="navbar-brand" href="firstpage.html">
      <img src="./wbjee.png" width="30" height="30" class="d-inline-block align-top" alt="">ABC JEEB
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
            <div class="card leftsidesection" style="width: 12rem; padding: 0.1rem; margin-left: 5rem;margin-bottom: 2rem;" id="notice">
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
            <form name="application" action="" method="POST" enctype="multipart/form-data">

                <h4 id="msg">Do not leave without finishing the whole form.</h4>
                <h3 id="infohead">Document Upload</h3>
                <div id="info">
                    <div id="regno">
                    <?php
                        echo 'Registration No - '.$id.'<br>';
                    ?>
                    </div><br>

                    <label class="required">Photo</label>
                    <input type="file" name="image" id="image"></input>
                    <h6>Please press "upload image" before submit.</h6>
                    <button type="submit" class="btn btn-secondary btn-sm" name="submit1" id="submit1" value="submit1" style="margin-left:20px;">Upload Image</button>
                    <br />
                    <br />
                    <label class="required">Caste Certificate:</label>
                    <input type="file" name="caste_certificate"></input>
                    <h6>Please press "upload caste" before submit.</h6>
                    <button type="submit" class="btn btn-secondary btn-sm" name="submit2" id="submit2" value="submit2" style="margin-left:20px;">Upload Caste Certificate</button>
                    <br />
                    <br />
                    <label class="required" >Address Proof</label>
                    <input type="file" name="domicile_certificate"></input>
                    <67>Please press "upload address" before submit.</h6>
                    <button type="submit" class="btn btn-secondary btn-sm" name="submit3" id="submit3" value="submit3" style="margin-left:20px;">Upload Address Proof</button>
                </div>
        
            </form>
             <form action="college_choose_form.php" method = "POST">
         <button class="btn btn-primary" type="submit" value="Save name" style="margin-left:370px;">Submit and Next</button>
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
  <script>
    x=document.getElementById

  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</html>

<?php
  $conn = mysqli_connect('sql306.epizy.com','epiz_25729576','7ZaLTMSgDpg','epiz_25729576_jeca_sign_up'); 

  if(isset($_POST['submit1'])){
   
    $name = $_FILES['image']['name'];
    $target_dir = "upload/image/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
  
    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");
  
    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){
   
       // Insert record
       $query = "insert into image(id,image,image_name) values('$id','$name','$name')";
       mysqli_query($conn,$query);
    
       // Upload file
       move_uploaded_file($_FILES['image']['tmp_name'],$target_dir.$name);
       $_SESSION['avg'] = $avg;
    }
   
  }
  
  if(isset($_POST['submit2'])){
   
    $name = $_FILES['caste_certificate']['name'];
    $target_dir = "upload/caste/";
    $target_file = $target_dir . basename($_FILES["caste_certificate"]["name"]);
  
    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
    // Valid file extensions
    $extensions_arr = array("pdf","docx");
  
    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){
   
       // Insert record
       $query = "insert into caste_certificate(id,caste_certificate_name) values('$id','$name')";
       mysqli_query($conn,$query);
    
       // Upload file
       move_uploaded_file($_FILES['caste_certificate']['tmp_name'],$target_dir.$name);
       $_SESSION['avg'] = $avg;
    }
   
  }
  
  if(isset($_POST['submit3'])){
   
    $name = $_FILES['domicile_certificate']['name'];
    $target_dir = "upload/domicile/";
    $target_file = $target_dir . basename($_FILES["domicile_certificate"]["name"]);
  
    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
    // Valid file extensions
    $extensions_arr = array("pdf","docx");
  
    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){
   
       // Insert record
       $query = "insert into domicile_certificate(id,domicile_certificate_name) values('$id','$name')";
       mysqli_query($conn,$query);
    
       // Upload file
       move_uploaded_file($_FILES['domicile_certificate']['tmp_name'],$target_dir.$name);
       $_SESSION['avg'] = $avg;
    }
   
  }
?>

