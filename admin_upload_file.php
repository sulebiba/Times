<?php
ob_start();
include("session.php");
include('connection.php');
date_default_timezone_set('Africa/Lagos');
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
          <link href="stylo.css"rel="stylesheet" />
    

</head>

<body>
    <div class="d-inline-block fh5co_trading_posotion_relative"><a href="admin_upload.php" class="treding_btn">Upload Another News</a>
                    <div class="fh5co_treding_position_absolute"></div>
                </div>
<hr>
<br>
<br>
 <div class="container">
     
<script>
  function validate(){
          var upload= document.getElementById("file").value;
         // var upload2= document.getElementById("upload2").value;
          //var upload3= document.getElementById("upload3").value;
          
            if(upload== "" || upload==" "){
            alert("Upload an Image");
            return false; 
             }
            else if(!upload.match(/(\.jpg|\.jpeg|\.png|\.mp4)$/i)){
	        alert("Only Pictures and Mp4 Video");
	        return false;
             }
            
              else{
                  return true;
              }
          }    
     
     
</script>
  
     
  <form method="post">   
<div class="row">
      <div class="col-25">
        <label for="subject">Subject</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>
      </div>
     <div class="row">
      <input type="submit" value="Submit" name="content">
    </div>
    </div>
     </form>
     
     <form method="post" onsubmit="return validate()" enctype="multipart/form-data">
    
    <div class="row">
      <div class="col-25">
        <label for="lname">Picture Title</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="title" placeholder="Picture title">
      </div>
    </div>
     <div class="row">
      <div class="col-25">
        <label for="lname">Photo Credit</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="credit" placeholder="Photo credit">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Photo picture/video (Upload 1 at a time)</label>
      </div>
      <div class="col-75">
        <input type="file" id="file" name="file" placeholder="Photo credit">
      </div>
    </div>
    
    
    <div class="row">
      <input type="submit" value="Submit" name='submit'>
    </div>
  </form>
     
   <form method="post">   
<div class="row">
      <div class="col-25">
        <label for="subject">link</label>
      </div>
     <div class="col-75">
        <input type="text" name="link" placeholder="link">
      </div>
     <div class="row">
      <input type="submit" name="long" value='submit'>
    </div>
    </div>
     </form>
     
     
</div> 
     </body>
</html>

<?php
if(isset($_SESSION['id'])){
if(isset($_GET['date'])){
    $date=$_GET['date'];
}
if(isset($_GET['headline'])){
   $headline=$_GET['headline'];
}
if(isset($_GET['token'])){
   $token=$_GET['token'];
}
if(isset($_POST['content'])){

    //$date=$_GET['date'];
    //$headline=$_GET['headline'];
    $content=mysqli_real_escape_string($db,$_POST['subject']);
    $title='none';
    $credit='none';
    $insert=mysqli_query($db,"INSERT INTO contents (title,credit,post,headline,date,token) VALUES ('$title','$credit','$content','$headline','$date','$token')") or die(mysqli_error($db));

}
}
else{
            header("location:index.php");
            ob_end_flush();
            }

?>

<?php
if(isset($_SESSION['id'])){
if(isset($_GET['date'])){
    $date=$_GET['date'];
}
if(isset($_GET['headline'])){
   $headline=$_GET['headline'];
}
if(isset($_GET['token'])){
   $token2=$_GET['token'];
}
if(isset($_POST['submit'])){
    $title=mysqli_real_escape_string($db,$_POST['title']);
    $credit=mysqli_real_escape_string($db,$_POST['credit']);
 $file=$_FILES['file']['name'];
$extention=explode('.',$file);
$end=end($extention);
$token=md5(uniqid(rand(),true));
$file =$token.".".$end;
$tmp=$_FILES['file']['tmp_name'];
       $target="posts/";
    
    $insert=mysqli_query($db,"INSERT INTO contents (title,credit,post,headline,date,token) VALUES ('$title','$credit','$file','$headline','$date','$token2')") or die(mysqli_error($db));
   move_uploaded_file($tmp,$target.$file);
}
}
else{
            header("location:index.php");
            ob_end_flush();
            }


?>






<?php
if(isset($_SESSION['id'])){
if(isset($_GET['date'])){
    $date=$_GET['date'];
}
if(isset($_GET['headline'])){
   $headline=$_GET['headline'];
}
if(isset($_GET['token'])){
   $token=$_GET['token'];
}
if(isset($_POST['long'])){

    //$date=$_GET['date'];
    //$headline=$_GET['headline'];
    $link=mysqli_real_escape_string($db,$_POST['link']);
    $title='none';
    $credit='none';
    $insert=mysqli_query($db,"INSERT INTO contents (title,credit,post,headline,date,token) VALUES ('$title','$credit','$link','$headline','$date','$token')") or die(mysqli_error($db));

}
}
else{
            header("location:index.php");
            ob_end_flush();
            }

?>
