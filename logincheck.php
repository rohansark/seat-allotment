
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="StyleSheetPage2.css">
    <link rel="stylesheet" href="StyleForm.css">
   
</head>
<?php
    setcookie('cross-site-cookie', 'bar', ['samesite' => 'None', 'secure' => true]);
    $conn = mysqli_connect('sql306.epizy.com','epiz_25729576','7ZaLTMSgDpg','epiz_25729576_jeca_sign_up'); 

    $regNO = $_POST['regNO'];
    $password = $_POST['password'];
    $query = "select id from signup where signup.id like $regNO AND signup.password = '$password'";
    $result = $conn->query($query);
    if($result->num_rows > 0)
    {
        $query1 = "select id from personal_info where id=$regNO";
        $result1 = mysqli_query($conn,$query1);
        if($result1->num_rows > 0)
        {
            include('final.php');
        }
        else
            include('Application.php');   
    }
    else
    
        echo '<body>
        <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">
            <img src="./wbjee.png" width="30" height="30" class="d-inline-block align-top" alt="">
            ABC JEEB
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="jeca.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="jeca.html">JECA</a></li>
                <li class="nav-item"><a class="nav-link" href="jelet.html">JELET</a></li>
                <li class="nav-item"><a class="nav-link" href="wbjee.html">WBJEE</a></li>
                <li class="nav-item"><a class="nav-link" href="jehom.html">JEHOM</a></li>
                <li class="nav-item"><a class="nav-link" href="pumdet.html">PUMDET</a></li>

            </ul>

        </div>
    </nav>

    <div class="container" >
    <div class="row">

    </div>
    <div class="row">
        <div class="col-4">
        </div>
        <div class="col-4">
            <div class="alert alert-danger" role="alert">
                Incorrect registration number or password<br><a href="jeca.html" class="alert-link">Click here</a> to go back.
            </div>
                
        </div>
        <div class="col-4">
        </div>
    </div>
    <div class="row">
    </div>
</div>

    
        
        


        <footer id="sticky-footer" class="py-4" style=" margin-top:420px;">
        <div class="container text-center">
            © Copyright 2011-2020 www.wbjeeb.nic.in. All rights reserved. Developed by Souvik Sarkar & Debleena
            Biswas.
        </div>
    </footer>
 </body>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</html>' ;
?>


