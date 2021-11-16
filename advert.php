<?php
include("connection.php");
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
 
</head>

<body>
<hr>
<br>
<br>
 <div class="container">
  <div style="text-align:center">
    <h2>Advertise with us</h2>
      <p><b>Note: Banner ads will have to be designed by you with the Standard banner size</b> </p>
  </div>
  <div class="row">
    <div class="column">
      <img src="images/national.jpg" style="width:100%">
    </div>
    <div class="column">
      <form method='post'>
        <label for="fname">Phone No</label>
        <input type="text" id="fname" name="phone" placeholder="Your contact info.." required>
        <label for="lname">Email</label>
        <input type="text" id="lname" name="email" placeholder="Your email Address.." required>
        <label for="country">Advert type</label>
        <select id="country" name="advert">
          <option value="Banner">Banner</option>
          <option value="Sponsored Post">Sponsored Post</option>
          
        </select>
           <input type="hidden" value="<?php echo date('Y-m-d h:i:s');?>" name="date">
        <label for="subject">Message</label>
        <textarea id="subject" name="message" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit" name='submit'>
      </form>
    </div>
  </div>
</div> 
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $phone=mysqli_real_escape_string($db,$_POST['phone']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $advert=mysqli_real_escape_string($db,$_POST['advert']);
    $message=mysqli_real_escape_string($db,$_POST['message']);
    $date=$_POST['date'];
    
    
    $insert=mysqli_query($db,"INSERT INTO advertisement (phone,email,advert,message,date) VALUES ('$phone','$email','$advert','$message','$date')") or die(mysqli_error($db));
    echo"<script>alert('Thanks! Our Rate and payment details will be sent to your mail')</script>";
}
?>