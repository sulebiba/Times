<?php

include('connection.php');
include('session.php');
?>
<html>
 <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Boldaman</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>

<body>
<hr>
<br>
<br>
 
 <form method="post">
  <div class="imgcontainer">
    <img src="images/national.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" name='submit'>Login</button>
   
  </div>

  
</form> 
    
    
<?php
if(isset($_POST['submit'])){
    $email=mysqli_real_escape_string($db,$_POST['username']);
   $password=mysqli_real_escape_string($db,(md5($_POST['password'])));
    
    $select=mysqli_query($db,"SELECT * FROM login WHERE username='$email'AND password='$password'") or die (mysqli_error($db));
    if(mysqli_num_rows($select)>0){
       
        echo"<script>alert('Log in Successful')</script>";
        header("Location:admin_upload.php?success=log_in_Successful");
        ob_end_flush();
    while($row=mysqli_fetch_array($select)){
    $user_id=$row['id'];
    $username=$row['username'];
    $password=$row['password'];
    $_SESSION['id']=$user_id;
    //echo $nocv_id2=$_SESSION['nocv_id'];
    }
    
    }
    else{
        echo"<script>alert('Incorrect email or Password')</script>";
    }
}
?>
<?php mysqli_close($db); ?>