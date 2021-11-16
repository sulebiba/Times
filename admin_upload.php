<?php
ob_start();
include('connection.php');
date_default_timezone_set('Africa/Lagos');
include('session.php');
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
    <link href="style.css" rel="stylesheet" type="text/css"/>
 
</head>

<body>
            <div class="d-inline-block fh5co_trading_posotion_relative"><a href="admin_delete.php" class="treding_btn">Delete News</a>
                
                <a href="admin_contact.php" class="treding_btn">Contacts</a>
                   
                
           <a href="admin_banner.php" class="treding_btn">Upload/delete a Banner</a>
                   
                <a href="admin_delete_sponsor.php" class="treding_btn">Delete Sponsored Post</a>
                   
                
           <a href="logout.php" class="treding_btn">Logout</a>
                 
                   
                
           
                   
                
                </div>
           
                
           
<hr>

<br>
<br>

 <div class="container">
  <form method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="fname">Post Headline</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="headline" placeholder="Headline"required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Post Author</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="author" placeholder="Author"required>
      </div>
    </div>
      <div class="row">
      <div class="col-25">
        <label for="lname">Headline Picture</label>
      </div>
      <div class="col-75">
        <input type="file" id="file" name="file" required>
      </div>
    </div>
      <div class="row">
      <div class="col-25">
        <label for="lname">Post date</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="date" placeholder="month,day and year"required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Post Category</label>
      </div>
      <div class="col-75">
          <select id="category" name="category">
          <?php
        $select=mysqli_query($db,"SELECT * FROM categories");
        while($row=mysqli_fetch_array($select)){
        $category=$row['category'];
        echo"<option value='$category'>$category</option>";
        }
        ?>
        
        </select>
      </div>
    </div>
    <input type="hidden" value="<?php echo date('Y-m-d h:i:s');?>" name="datet">
    <div class="row">
      <input type="submit" value="Post" name='submit'>
    </div>
  </form>
</div> 
     </body>
</html>

<?php
if(isset($_SESSION['id'])){
if(isset($_POST['submit'])){
    
    $headline=mysqli_real_escape_string($db,$_POST['headline']);
    $author=mysqli_real_escape_string($db,$_POST['author']);
    $date=mysqli_real_escape_string($db,$_POST['date']);
    $category=mysqli_real_escape_string($db,$_POST['category']);
    $datet=$_POST['datet'];
    $file=$_FILES['file']['name'];
$extention=explode('.',$file);
$end=end($extention);
$token=md5(uniqid(rand(),true));
$file =$token.".".$end;
$tmp=$_FILES['file']['tmp_name'];
    $target="posts/";
    
    
    $insert=mysqli_query($db,"INSERT INTO post_title (headline,author,date,category,token,date2) VALUES ('$headline','$author','$date','$category','$file','$datet')") or die(mysqli_error($db));
    move_uploaded_file($tmp,$target.$file);
    header("location:admin_upload_file.php?date=$date&headline=$headline&token=$file");
}
}
else{
            header("location:index.php");
            ob_end_flush();
            }

?>