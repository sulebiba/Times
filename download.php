<?php
ob_start();
include("connection.php");
date_default_timezone_set('Africa/Lagos');
?>
<!DOCTYPE html>

<html lang="en" class="no-js">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NationalTimes</title>
    <link href="images/National.jpg" rel="icon">
    <link href="css/media_query.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="css/animate.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/>
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap CSS -->
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <!-- Latest compiled and minified CSS -->
    
    
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
    
    
    <!-- Modernizr JS -->
    <script src="js/modernizr-3.5.0.min.js"></script>
    <style>
    #ads{
    border: 1px solid white;
    width:100%;
    height: 102px;
    background: white;
}
#adss{
    border: 1px solid white;
    width:100%;
    height: 102px;
    background: black;
}
#ads h2,#adss h2{
    margin-top: 30px;
    color: red;
}
    
    </style>
</head>
<body class="single">
<div class="container-fluid fh5co_header_bg">
    <div class="container">
        <div class="row">
            <div class="col-12 fh5co_mediya_center"><a href="advert.php" class="color_fff fh5co_mediya_setting">&nbsp;&nbsp;&nbsp;Advert Enquiry</a>
                <div class="d-inline-block fh5co_trading_posotion_relative"><a href="subscribe.php" class="treding_btn">Subscribe</a>
                    <div class="fh5co_treding_position_absolute"></div>
                </div>
               
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 fh5co_padding_menu">
                <a href='index.php'><img src="images/National.png" alt="img" class="fh5co_logo_width"/></a>
            </div>
            <div class="col-12 col-md-9 align-self-center fh5co_mediya_right">
               
                <br>
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a href="" target="_blank" class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a href="" target="_blank" class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div></a>
                </div>
                <!--<div class="d-inline-block text-center"><img src="images/country.png" alt="img" class="fh5co_country_width"/></div>-->
               
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
    <div class="container padding_786">
        <nav class="navbar navbar-toggleable-md navbar-light ">
            <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
            <a class="navbar-brand" href="#"><img src="images/national.png" alt="img" class="mobile_logo_width"/></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="news.php">News <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="videos.php">Videos <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">News Categories<span class="sr-only">(current)</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                            <?php
                            $select=mysqli_query($db,"SELECT * FROM categories");
                            while($row=mysqli_fetch_array($select)){
                            $category=$row['category'];
                            echo"<a class='dropdown-item' href='category.php?category=$category'>$category</a>";
                            }
                           ?>
                        </div>
                    </li>
                   
                    <li class="nav-item ">
                        <a class="nav-link" href="Contact_us.php">Contact <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
    <br>
    <br>
    <?php
    
     if(isset($_GET['token'])){
         $token=$_GET['token'];
    $select=mysqli_query($db,"SELECT * FROM post_title WHERE token ='$token'");
                while($row=mysqli_fetch_array($select)){
                    $headlines=$row['headline'];
                    $author=$row['author'];
                    $date=$row['date'];
                    $date2=$row['date2'];
                    $token=$row['token'];
    echo"<h2 align='center'><b>$headlines</b></h2>";
     }
     }
     
    ?>
    <br>
    <br>
    
 <div class="col-lg-9 col-md-3 col-sm-12 col-xs-12" align='center'>
     <?php
     if(isset($_GET['token'])){
         $token=$_GET['token'];
                echo"<img src='posts/$token' class = 'img-responsive' width='100%' height='400px'>";
     }
                ?>
                </div>
    
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                
                <?php
                
                if(isset($_GET['token'])){
         $token=$_GET['token'];
           $select=mysqli_query($db,"SELECT * FROM post_title WHERE token ='$token'");
                while($row=mysqli_fetch_array($select)){
                    $headlines=$row['headline'];
                    $author=$row['author'];
                    $date=$row['date'];
                    $date2=$row['date2'];
                    $token=$row['token'];
                    echo $author;
                    echo"<br>";
                    echo $date;
                    echo"<br><br>";
             $select_content=mysqli_query($db,"SELECT * FROM contents WHERE token ='$token' ORDER BY id asc");
                    while($row_content=mysqli_fetch_array($select_content)){
                    $title=$row_content['title'];
                    $credit=$row_content['credit'];
                    $pos=$row_content['post'];
                    $extention=explode('.',$pos); 
                    $end=end($extention); 
                    if($end =='mp4'  || $end =='MP4'){  
                    echo"<video controls='controls'width='100%' height='240'>
                    <source src='posts/$pos' type='video/mp4'>
                    </video><br><br>$title&nbsp;&nbsp;&nbsp;&nbsp;$credit<br><br>";    
                    }
                    else if($end =='jpg'  || $end =='JPG'){  
                    echo"<div class='col-lg-12 col-md-3 col-sm-12 col-xs-12'>
                <img src='posts/$pos' class = 'img-responsive' width='100%' height='400'>
                </div>
                <br><br>$title&nbsp;&nbsp;&nbsp;&nbsp;$credit<br><br>";    
                    }
                else if($end =='jpeg'  || $end =='JPEG'){  
                    echo"<div class='col-lg-12 col-md-3 col-sm-12 col-xs-12'>
                <img src='posts/$pos' class = 'img-responsive' width='100%'>
                </div>
                <br><br>$title&nbsp;&nbsp;&nbsp;&nbsp;$credit<br><br>";    
                    }
                else if($end =='png' || $end =='PNG' ){  
                    echo"<div class='col-lg-12 col-md-3 col-sm-12 col-xs-12'>
                <img src='posts/$pos' class = 'img-responsive' width='100%'>
                </div>
                <br><br>$title&nbsp;&nbsp;&nbsp;&nbsp;$credit<br><br>";    
                    }
                        else if(strpos($pos,'.ng')){
                            echo"<div class='col-lg-12 col-md-3 col-sm-12 col-xs-12'><a href='$pos'>$pos</a></div>";
                            
                        }
                        else if(strpos($pos,'.com')){
                            echo"<div class='col-lg-12 col-md-3 col-sm-12 col-xs-12'><a href='$pos'>$pos</a></div>";
                            
                        }
                        else if(strpos($pos,'.net')){
                            echo"<div class='col-lg-12 col-md-3 col-sm-12 col-xs-12'><a href='$pos'>$pos</a></div>";
                            
                        }
                        else if(strpos($pos,'.edu')){
                            echo"<div class='col-lg-12 col-md-3 col-sm-12 col-xs-12'><a href='$pos'>$pos</a></div>";
                            
                        }
                        else if(strpos($pos,'.org')){
                            echo"<div class='col-lg-12 col-md-3 col-sm-12 col-xs-12'><a href='$pos'>$pos</a></div>";
                            
                        }
                        else if(strpos($pos,'.co')){
                            echo"<div class='col-lg-12 col-md-3 col-sm-12 col-xs-12'><a href='$pos'>$pos</a></div>";
                            
                        }
                        else if(strpos($pos,'.uk')){
                            echo"<div class='col-lg-12 col-md-3 col-sm-12 col-xs-12'><a href='$pos'>$pos</a></div>";
                            
                        }
                        
                else{
                     echo"<div class='col-lg-12 col-md-3 col-sm-12 col-xs-12'><p>$pos</p><br><br></div>"; 
                }
                }
                }
                }
                  
                 
                ?>
                <br>
                <?php
                if(isset($_GET['headline'])){
                    $headline=$_GET['headline'];
                }
                if(isset($_GET['date'])){
                    $date=$_GET['date'];
                }
                if(isset($_GET['headline'])){
                    $token=$_GET['token'];
                }
                echo"<span align='right'><a href='download.php?date=$date&headline=$headline&token=$token&file='download'' class='btn btn-danger' download>PDF</a></span>";
                ?>
               <hr>
                <div class='container'>
<script>
function validate(){
var name=document.getElementById("name").value;
 var review=document.getElementById("comment").value;
    
    if(name=="" || name==" "){
     alert("write something");
     return false;
    
    }
 else if(review=="" || review==" "){
     alert("write something");
     return false;
    
    }
    else if(review.length>250){
                alert("Comment too long");
                 return false;
                 }
    else{
        return true;
    }
}
</script>
<form method="post" onsubmit="return validate()">
    <div class="form-group">
    <input type='text' name="name" id="name" class="form-control" placeholder="Enter name" />
        
    
    </div>
    <div class="form-group">
    <textarea name="comment" id="comment" class="form-control" placeholder="Enter comment" rows='5'></textarea>
        
    
    </div>
    <input type='hidden' name='date' class='btn btn-primary' value="<?php echo date('Y-m-d h:i:s') ?>">
    
    <div class="form-group">
   <input type="submit" id="submit" name="submit" class="btn btn-info" value="submit">
    </div>
</form>
<div class="commentbox">
<?php
    
if(isset($_GET['token'])){
$token=$_GET['token'];
$select=mysqli_query($db,"SELECT * FROM comments WHERE token='$token'") or die (mysqli_error($db));
while($row=mysqli_fetch_array($select)){
    $comment=$row['comment'];
    $date=$row['date'];
    $name=$row['name'];
echo"
<div id='comment col-lg-6 col-md-3 col-sm-12 col-xs-12'class='comment col-lg-12 col-md-3 col-sm-12 col-xs-12'>
<p>$name</p>
<br>
<p>$comment</p>
<br>
<p>$date</p>
<hr>
<br>             
                  
</div>";
}
}

?>
</div>
<span id="comment_message"></span>
<br>
<div id="display_comment"></div>
</div>
            </div>
            
            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tags</div>
                </div>
                <div class="clearfix"></div>
                <div class="fh5co_tags_all">
                   <?php
                            $select=mysqli_query($db,"SELECT * FROM categories");
                            while($row=mysqli_fetch_array($select)){
                            $category=$row['category'];
                            echo"<a href='category.php?category=$category' class='fh5co_tagg'>$category</a>";
                            }
                           ?>
                    
                </div>
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">What you missed</div>
                </div>
                <?php
                
                 $select=mysqli_query($db,"SELECT * FROM post_title WHERE Category NOT LIKE '%Sponsored post%' ORDER BY Rand() LIMIT 0,4");
                while($row=mysqli_fetch_array($select)){
                    $headline=$row['headline'];
                    $author=$row['author'];
                    $date=$row['date'];
                    $date2=$row['date2'];
                    $token=$row['token'];
                $select_content=mysqli_query($db,"SELECT * FROM contents WHERE token ='$token' AND post NOT LIKE '%jpg%' AND post NOT LIKE '%png%'AND post NOT LIKE '%jpeg%'AND post NOT LIKE '%mp4%'AND post NOT LIKE '%.com%'AND post NOT LIKE '%.ng%'
                AND post NOT LIKE '%.edu%'AND post NOT LIKE '%.net%'AND post NOT LIKE '%.org%'AND post NOT LIKE '%.co%'AND post NOT LIKE '%.uk%' LIMIT 0,1");
                    while($row_content=mysqli_fetch_array($select_content)){
                    $pos=$row_content['post'];
                    $post=substr($pos, 0, 210);
                
                echo"<div class='row pb-3'>
                    <div class='col-5 align-self-center'>
                        <a href='single.php?date=$date&headline=$headline&token=$token'><img src='posts/$token' alt='img' class='fh5co_most_trading'/></a>
                    </div>
                    <div class='col-7 paddding'>
                        <div class='most_fh5co_treding_font'><a href='single.php?date=$date&headline=$headline&token=$token'>$headline</a></div>
                        <div class='most_fh5co_treding_font_123'><a href='single.php?date=$date&headline=$headline&token=$token'>$date<a/></div>
                    </div>
                </div>";
                    }
                }
                ?>
               
            </div>
        </div>
       
    </div>
</div>

<div class="container-fluid fh5co_footer_right_reserved">
    <div class="container">
        <div class="row  ">
            <div class="col-12 col-md-6 py-4 Reserved"> © Copyright 2020, All rights reserved</div>
            <div class="col-12 col-md-6 spdp_right py-4">
                <a href="index.php" class="footer_last_part_menu">Home</a>
                <a href="about.php" class="footer_last_part_menu">About</a>
                <a href="Contact_us.php" class="footer_last_part_menu">Contact</a>
                <a href="news.php" class="footer_last_part_menu">Latest News</a></div>
        </div>
    </div>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Main -->
<script src="js/main.js"></script>

</body>
</html>
<?php
if(isset($_GET['token'])){
$token=$_GET['token'];
}
if(isset($_GET['headline'])){
$headline=$_GET['headline'];
}
if(isset($_GET['date'])){
$datet=$_GET['date'];
}
if(isset($_POST['submit'])){
$name = mysqli_real_escape_string($db,$_POST['name']);
$date = mysqli_real_escape_string($db,$_POST['date']);
$comment = mysqli_real_escape_string($db,$_POST['comment']);


$insert= mysqli_query($db,"INSERT INTO comments (name,comment,date,token) VALUES ('$name','$comment','$date','$token')")or die (mysqli_error($db));
//header("Refresh:1;single.php?date=$datet&headline=$headline&token=$token");
header("Location:single.php?date=$datet&headline=$headline&token=$token");
ob_end_flush();
//echo"<script>alert('Post submission Successful')</script>";
}

?>









<?php 
  
header("Content-Type: application/octet-stream"); 
  
$file = $_GET["file"]  . ".pdf"; 
  
header("Content-Disposition: attachment; filename=" . urlencode($file));    
header("Content-Type: application/download"); 
header("Content-Description: File Transfer");             
header("Content-Length: " . filesize($file)); 
  
flush(); // This doesn't really matter. 
  
$fp = fopen($file, "r"); 
while (!feof($fp)) { 
    echo fread($fp, 65536); 
    flush(); // This is essential for large downloads 
}  
  
fclose($fp);  
?> 

