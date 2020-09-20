<?php
    session_start();
    $id = ($_SESSION['regNO']);
    if(!$id)
    {
        $id = $_POST['regNO'];
    }
    
    $conn = mysqli_connect('sql306.epizy.com','epiz_25729576','7ZaLTMSgDpg','epiz_25729576_jeca_sign_up'); 
    $sql1 = "select * from personal_info where id = $id";
    $result1 = mysqli_query($conn,$sql1);
    $row = $result1 -> fetch_assoc();

    $sql2 = "select college_name from college,college_choice where college.college_id = college_choice.college_id and college_choice.id=$id";
    $result2 = mysqli_query($conn,$sql2);
    $row1 = $result2 -> fetch_assoc();
    $sql3 = "select image from image where id=$id";
                        $result3 = mysqli_query($conn,$sql3);
                        $row3 = $result3 -> fetch_assoc();
                        $image = $row3['image'];
                        $image_src = "upload/image/".$image;
    

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
        #final_form{
            text-align: center;
            max-width: 500px;
            margin: 100px;
            margin-bottom: 20px;
            margin-left: 20rem;
        }
        footer{
            margin-top:80px;
        }
        body{
           
            background: none;
            background-color: #8aafeb;
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
         <li class="nav-item ">
            <a class="nav-link" href="firstpage.html">Home </a>
          </li>
        <li class="nav-item active"><a class="nav-link" href="jeca.html">JECA<span class="sr-only">(current)</span></a></li>
      </ul>
    </div>
  </nav>
    <div class="container">

    <table id = "final_form">
        <tr>
            <td><strong> <?php echo 'Registration No - '.$id;?> </strong></td>
            <td>
                     <img src='<?php echo $image_src;  ?>' style="width:90px; height:120px;" ></td>
        </tr>
        <tr>
            <td>Candidate Name :</td>
            <td><strong><?php echo $row['first_name']." ". $row['last_name'];?> </strong></td>
        </tr>
        <tr>
            <td>Father's Name :</td>
            <td><?php echo $row['fathers_name'];?></td>
        </tr>
        <tr>
            <td>Mother's Name :</td>
            <td><?php echo $row['mothers_name'];?></td>
        </tr>
        <tr>
            <td>Date Of Birth :</td>
            <td><?php echo $row['dob'];?></td>
        </tr>
        <tr>
            <td>Mobile No :</td>
            <td><?php echo $row['mobile_no'];?></td>
        </tr>
        <tr>
            <td>Email Id :</td>
            <td><?php echo $row['email_id'];?></td>
        </tr>
        <tr>
            <td>Sex :</td>
            <td><?php echo $row['sex'];?></td>
        </tr>
        <tr>
            <td>Category :</td>
            <td><?php echo $row['catagory'];?></td>
        </tr>
        <tr>
            <td>Contact Details :</td>
            <td><?php echo $row['house_no'].','.$row['road'].',<br>'.$row['city'].','.$row['pincode'].',<br>'.$row['state'].','.$row['country'].',<br>'.$row['phone'];?></td>
        </tr>
        <tr>
            <td>Alloted College : </td>
            <td><strong><?php echo $row1['college_name'];?></strong></td>
        </tr>

    
    </table>
    <button type="button" class="btn btn-light" onclick="window.print()" style="margin-left:30em;">Print Form</button>

    <p  style="text-align:center;color:red";>
    <br>
      <strong>N.B - Print this form and carry at the time of admission. </strong>  
    </p>

    
    </div>

    <footer id="sticky-footer" class="py-4">
    <div class="container text-center">
        © Copyright 2011-2020 www.seatallotment.epizy.com All rights reserved. Developed by Souvik Sarkar & Debleena
        Biswas.
    </div>
</footer>
  
     
    <?php session_destroy();
    ?>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</html>

