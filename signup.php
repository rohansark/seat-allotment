<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up successful</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="StyleSheetPage2.css"> 
    <style>
        footer{
            margin-top: 350px;
        }
        #container{
            line-height: 1;
            background-color: #fff;
            max-width: 380px;
            padding: 30px;
            border-radius: 5px;
            margin-top:50px;
            margin-left:22em;
            
        }
        td{
            padding: 5px;
        }
        #successful{
            text-align: center;
            margin-top: 30px;
        }
        .blinking{
            animation:blinkingText 0.8s infinite;
        }
        @keyframes blinkingText{
            0%{     color: #000;    }
            49%{    color: #000; }
            60%{    color: transparent; }
            99%{    color:transparent;  }
            100%{   color: #000;    }
        }
    </style>   
</head>
<?php
$conn = mysqli_connect('sql306.epizy.com','epiz_25729576','7ZaLTMSgDpg','epiz_25729576_jeca_sign_up'); 

$fN = $_POST['firstName'];
$lN =  $_POST['lastName'];
$email =  $_POST['email'];
$pass1 =  $_POST['password'];
$pass2 =  $_POST['password2'];

$query = "insert into signup(FirstName,LastName,Email,Password,ConfirmPassword) values ('$fN', '$lN', '$email', '$pass1', '$pass2' )";
$data = mysqli_query($conn,$query);

$sql = "SELECT id,FirstName, LastName,Email FROM signup where signup.Email='$email' AND signup.Password = '$pass1' AND signup.FirstName = '$fN'";
$result = mysqli_query($conn,$sql);
$row = $result->fetch_assoc();
echo '<body>
<nav class="navbar navbar-expand-lg navbar-dark">
<a class="navbar-brand" href="firstpage.html">
    <img src="./wbjee.png" width="30" height="30" class="d-inline-block align-top" alt="">
    ABC JEEB
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
        <h2 id="successful" class="blinking">You are successfully registered !!!</h2>
         
        <div id = "container">
            <table border="1" cellspacing="0" style="text-align=center;margin-left:1.5em;">
                        <tr>
                            <td>Registration No</td>
                            <td>';echo $row["id"].'</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>';echo $row["FirstName"]." ".$row["LastName"].'</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>';echo $row["Email"].'</td>
                        </tr>
                    </table>
        </div> 
    
    </div>
    <p id="successful">N.B - Note down the unique registration number for future use.</p>
    <h5 id="successful">Now <a href="jeca.html">sign in</a> to proceed.</h5>
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
</html>';
    


?>
