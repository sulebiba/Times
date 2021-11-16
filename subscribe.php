<?php 
include("connection.php");
?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>NationalTimes</title>
<meta name="viewport"content="width-device-width,initial-scale=1" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4,7.0/css/font-awesome.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="style.css"rel="stylesheet" />
   <script src = "/scripts/jquery.min.js"></script>
      <script src = "/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap CSS -->
   <link href="style.css" rel="stylesheet" type="text/css"/>
    <!-- Modernizr JS -->
    <script src="js/modernizr-3.5.0.min.js"></script>
     <link href="stylo.css"rel="stylesheet" />
 
</head>

<body>
<hr>
<br>
<br><script>
  function validate()  { 
          var name=document.getElementById('name').value;
          
             
           if(name== "" || name==" "){
           alert('Enter your email Address');
            return false; 
             }
      else{
          return true;
      }
  }
    </script>
 <form method="post" onsubmit="return validate()">
  <div class="imgcontainer">
    <img src="images/national.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
   <div class="col-6 py-3">
                        <input type="email" name='name' id='name'class="form-control fh5co_contact_text_box" placeholder="Enter your email Address for updates" />
                    </div>


    <button type="submit" name='submit'>Login</button>
   
  </div>

  <div class="container" style="background-color:#f1f1f1">
   
    
  </div>
</form> 
     </body>
<?php
     
if(isset($_POST['submit'])){
    
    $email=mysqli_real_escape_string($db,$_POST['name']);
    
    
    $insert=mysqli_query($db,"INSERT INTO subscription (sub) VALUES ('$email')") or die(mysqli_error($db));
    echo"<script>alert('Thank you for Subscribing')</script>";
}
?>
