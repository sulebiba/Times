<?php
ob_start();
include("connection.php");
include("session.php");
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
<br>
 <?php
    $select=mysqli_query($db,"SELECT * FROM banner");
    if(mysqli_num_rows($select)>0){
    while($row=mysqli_fetch_array($select)){
      $id=$row['id'];  
    echo"<div class='imgcontainer'>
    <img src='images/national.png' alt='Avatar' class='avatar'>
  </div>";
    echo"<a href='deletebanner.php?id=$id'class ='btn btn-danger'>delete</a>";
    }
    }
    else{
        
 echo"<form method='post' enctype='multipart/form-data'>
  <div class='imgcontainer'>
    <img src='images/national.png' alt='Avatar' class='avatar'>
  </div>

  <div class='container'>
   

    <label for='psw'><b>Banner</b></label>
    <input type='file' name='banner' required>

    <button type='submit' name='banner'>Upload</button>
   
  </div>

  <div class='container' style='background-color:#f1f1f1'>
   
   
  </div>
</form> ";
     }
    ?>
<?php
    if(isset($_SESSION['id'])){
    if(isset($_POST['banner'])){
 $file=$_FILES['banner']['name'];
$tmp=$_FILES['banner']['tmp_name'];
       $target="banner/";
    
    $insert=mysqli_query($db,"INSERT INTO banner (banner) VALUES ('$file')") or die(mysqli_error($db));
   move_uploaded_file($tmp,$target.$file);
}
    }
    else{
            header("location:index.php");
            ob_end_flush();
            }
    ?>