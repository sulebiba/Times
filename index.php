<?php
include("connection.php");
?>

<!DOCTYPE html>
<!--
	24 News by FreeHTML5.co
	Twitter: https://twitter.com/fh5co
	Facebook: https://fb.com/fh5co
	URL: https://freehtml5.co
-->
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
   
    
    
    <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->

    
<!-- Latest compiled JavaScript -->
 
     
    
    


<!-- jQuery library -->


    
    <!-- Modernizr JS -->
    <script src="js/modernizr-3.5.0.min.js"></script>
     <link href="style.css" rel="stylesheet" type="text/css"/>
     <link href="style2.css" rel="stylesheet" type="text/css"/>
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
<body>
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
                <div class="text-center d-inline-block">
                    <div clas='container'>
                <div class='row'>
                <div class='col-md-8 col-lg-12 offset-md-2  p-4 t-3'>
                   <form method="post" class="form-inline p-3">
                    <input type="text" name="search" id="search" class="form-control form-control-lg rounded-0" placeholder="search" style="width:70%;">
                    
                       <input type="submit" name="submit" value="search" class="btn btn-danger btn-lg rounded-0" style="width:30%">
                    </form> 
                    <div class="col-md-5 col-lg-12" style="position:relative;margin-top:-16px;">
                        <div class="list-group" id="show-list">
                        
                        </div>
                    </div>
                    <script>
                    $(document).ready(function(){
                     $("#search").keyup(function(){
                        var searchText = $(this).val();
                         if(searchText!=''){
                             $.ajax({
                             url:'action.php',
                             method:'post',
                             data:{query:searchText},
                             success:function(response){
                                 $("#show-list").html(response);
                             }
                             });
                         }
                         else{
                             $("#show-list").html('');
                         }
                     });
                        $(document).on('click','a',function(){
                           $("#search").val($(this).text());
                            $("#show-list").html('');
                        });
                    });
                    
                    
                    
                    </script>
                </div>
                </div>
                    </div>
                <br>
                </div>
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
                    aria-label="Toggle navigation"><span class="fa fa-bar"></span></button>
            <a class="navbar-brand" href="index.php"><img src="images/national.png" alt="img" class="mobile_logo_width"/></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="news.php">News <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="videos.php">Videos <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  id="dropdownMenuButton2" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">News Categories<span class="sr-only"></span></a>
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
          <br>
        
        </nav>
    
    </div>

</div>

    <?php
     $select=mysqli_query($db,"SELECT * FROM banner");
    if(mysqli_num_rows($select)>0){
    while($row=mysqli_fetch_array($select)){
      $banner=$row['banner'];  
    echo"<div id='ads'><div class='col-lg-12 col-md-3 col-sm-12 col-xs-12'>
                <img src='banner/$banner' class = 'img-responsive' width='100%' height='100px'>
                </div></div>";
    }
    }
    else{
    echo"<div id='adss'><h2 align='center'>ADVERTISE WITH US</h2></div>";
    
    }
    
    ?>
    
<div class="container-fluid paddding mb-5">
    <div class="row mx-0">
        <div class="col-md-6 col-12" data-animate-effect="fadeIn">
            
                <?php
                
                 $select=mysqli_query($db,"SELECT * FROM post_title WHERE Category NOT LIKE '%Sponsored Post%' ORDER BY id desc LIMIT 0,1");
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
                
                echo"
                <div class='fh5co_suceefh5co_height'><a href='single.php?date=$date&headline=$headline&token=$token'><img src='posts/$token' alt='img'width='100%'/></a>
                <div class='fh5co_suceefh5co_height_position_absolute'></div>
                <div class='fh5co_suceefh5co_height_position_absolute_font'>
                    <div class=''><a href='single.php?date=$date&headline=$headline&token=$token' class='color_fff'> <i class='fa fa-clock-o'></i>&nbsp;&nbsp;$date
                    </a></div>
                    <div class=''><a href='single.php?date=$date&headline=$headline&token=$token' class='fh5co_good_font'>$headline </a></div>
                </div>";
                    }
                }
                ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12 col-12" data-animate-effect="fadeIn">
                    <?php
                
                 $select=mysqli_query($db,"SELECT * FROM post_title WHERE Category LIKE '%sport%' ORDER BY id desc LIMIT 0,1");
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
                
                    echo"<div class='fh5co_suceefh5co_height_2'><a href='single.php?date=$date&headline=$headline&token=$token'><img src='posts/$token' alt='img'/></a>
                        <div class='fh5co_suceefh5co_height_position_absolute'></div>
                        <div class='fh5co_suceefh5co_height_position_absolute_font_2'>
                            <div class=''><a href='single.php?date=$date&headline=$headline&token=$token' class='color_fff'> <i class='fa fa-clock-o'></i>&nbsp;&nbsp;$date</a></div>
                            <div class=''><a href='single.php?date=$date&headline=$headline&token=$token' class='fh5co_good_font_2'>$headline</a></div>
                        </div>";
                    }
                }
                    ?>
                    </div>        
                </div>
                 <div class="col-md-12 col-12" data-animate-effect="fadeIn">
                    <?php
                
                 $select=mysqli_query($db,"SELECT * FROM post_title WHERE Category LIKE '%politics%' ORDER BY id desc LIMIT 0,1");
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
                
                    echo"<div class='fh5co_suceefh5co_height_2'><a href='single.php?date=$date&headline=$headline&token=$token'><img src='posts/$token' alt='img'/></a>
                        <div class='fh5co_suceefh5co_height_position_absolute'></div>
                        <div class='fh5co_suceefh5co_height_position_absolute_font_2'>
                            <div class=''><a href='single.php?date=$date&headline=$headline&token=$token' class='color_fff'> <i class='fa fa-clock-o'></i>&nbsp;&nbsp;$date </a></div>
                            <div class=''><a href='single.php?date=$date&headline=$headline&token=$token' class='fh5co_good_font_2'>$headline</a></div>
                        </div>";
                    }
                }
                    ?>
                    </div>
                
                
            </div>
        </div>
    </div>
</div>

<div class="container-fluid pt-3">
    <div class="container animate-box" data-animate-effect="fadeIn">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">All News</div>
        </div>
        <div class="owl-carousel owl-theme js" id="slider1">
            
             <?php
                
                 $select=mysqli_query($db,"SELECT * FROM post_title WHERE Category NOT LIKE '%Sponsored Post%' ORDER BY id desc LIMIT 0,4");
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
                        
            echo"<div class='item px-2'>
                <div class='fh5co_latest_trading_img_position_relative'>
                    <div class='fh5co_latest_trading_img'><img src='posts/$token' alt=''
                                                           class=''/></div>
                    <div class='fh5co_latest_trading_img_position_absolute'></div>
                    <div class='fh5co_latest_trading_img_position_absolute_1'>
                        <a href='single.php?date=$date&headline=$headline&token=$token' class='text-white'> $headline </a>
                        <div class='fh5co_latest_trading_date_and_name_color'><a href='single.php?date=$date&headline=$headline&token=$token'>$author- $date</a></div>
                    </div>
                </div>
            </div>";
                    }
                }
            
            ?>
        </div>
    </div>
</div>
<div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Sport</div>
        </div>
        <div class="owl-carousel owl-theme" id="slider2">
            
        <?php
                
                 $select=mysqli_query($db,"SELECT * FROM post_title WHERE Category LIKE '%sport%' ORDER BY id desc LIMIT 0,4");
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
                        
            echo"<div class='item px-2'>
                <div class='fh5co_hover_news_img'>
                    <div class='fh5co_news_img'><img src='posts/$token' alt=''/></div>
                    <div>
                        <a href='single.php?date=$date&headline=$headline&token=$token' class='d-block fh5co_small_post_heading'><span class=''>$headline</span></a>
                        <div class='c_g'><i class='fa fa-clock-o'></i><a href='single.php?date=$date&headline=$headline&token=$token'> $date</a></div>
                    </div>
                </div>
            </div>";
            
                    }
                }
           ?>
            
        </div>
    </div>
</div>
<div class="container-fluid fh5co_video_news_bg pb-4">
    <div class="container animate-box" data-animate-effect="fadeIn">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom pt-5 pb-2 mb-4  text-white">Video News</div>
        </div>
        <div>
            <div class="owl-carousel owl-theme" id="slider3">
                
            <?php
                 $select=mysqli_query($db,"SELECT * FROM post_title ORDER BY id desc LIMIT 0,3");
                while($row=mysqli_fetch_array($select)){
                    $headline=$row['headline'];
                    $author=$row['author'];
                    $date=$row['date'];
                    $date2=$row['date2'];
                    $token=$row['token'];
                $select_content=mysqli_query($db,"SELECT * FROM contents WHERE token ='$token' AND post LIKE '%mp4%'");
                    while($row_content=mysqli_fetch_array($select_content)){
                    $pos=$row_content['post'];
                    $post=substr($pos, 0, 210);
                
                
                
               echo" <div class='item px-2'>
                    <div class='fh5co_hover_news_img'>
                        <div class='fh5co_hover_news_img_video_tag_position_relative'>
                            <div class='fh5co_news_img'>
                                <video controls='controls'width='100%' height='200'>
                                <source src='posts/$pos' type='video/mp4'>
                                 </video>
                            </div>
                            <div class='fh5co_hover_news_img_video_tag_position_absolute fh5co_hide'>
                                <img src='posts/token' alt=''/>
                            </div>
                            <div class='fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide' id='play-video'>
                                <div class='fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1'>
                                    <div class='fh5co_hover_news_img_video_tag_position_absolute_1_play_button'>
                                        <span><i class='fa fa-play'></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='pt-2'>
                            <a href='single.php?date=$date&headline=$headline&token=$token' class='d-block fh5co_small_post_heading fh5co_small_post_heading_1'>
                            <span class=''>$headline </span></a>
                            <div class='c_g'><i class='fa fa-clock-o'></i><a href='single.php?date=$date&headline=$headline&token=$token'> $date</a></div>
                        </div>
                    </div>
                </div>";
                    }
                }
                        ?>
                
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Entertainment</div>
                </div>
                <?php
                
                 if(isset($_GET['page'])){   
                $page=$_GET['page'];
                }
                else{
                    $page=1;
                }
                $num_per_page=4;
                $start_from = ($page-1)*4;
                
                 $select=mysqli_query($db,"SELECT * FROM post_title WHERE Category LIKE '%Entertainment%' ORDER BY id desc LIMIT $start_from,$num_per_page");
                while($row=mysqli_fetch_array($select)){
                    $headline=$row['headline'];
                    $author=$row['author'];
                    $date=$row['date'];
                    $date2=$row['date2'];
                    $token=$row['token'];
                $select_content=mysqli_query($db,"SELECT * FROM contents WHERE token ='$token' AND post NOT LIKE '%jpg%' AND post NOT LIKE '%png%'AND post NOT LIKE '%jpeg%'AND post NOT LIKE '%mp4%'AND post NOT LIKE '%.com%'AND post NOT LIKE '%.ng%'
                AND post NOT LIKE '%.edu%'AND post NOT LIKE '%.net%'AND post NOT LIKE '%.org%'AND post NOT LIKE '%.co%'AND post NOT LIKE '%.uk%' LIMIT 0,1 ");
                    while($row_content=mysqli_fetch_array($select_content)){
                    $pos=$row_content['post'];
                    $post=substr($pos, 0, 210);
                
                
                echo"<div class='row pb-4'>
                    <div class='col-md-5'>
                        <div class='fh5co_hover_news_img'>
                            <div class='fh5co_news_img'><img src='posts/$token' alt=''/></div>
                            <div></div>
                        </div>
                    </div>
                    <div class='col-md-7 animate-box'>
                        <a href='single.php?date=$date&headline=$headline&token=$token' class='fh5co_magna py-2'>$headline </a> <a href='single.php?date=$date&headline=$headline&token=$token' class='fh5co_mini_time py-3'> $author -
                        $date </a>
                        <div class='fh5co_consectetur'><a href='single.php?date=$date&headline=$headline&token=$token'> $post</a>
                        </div>
                    </div>
                </div>";
                    }
                }
               ?> 
                
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
                AND post NOT LIKE '%.edu%'AND post NOT LIKE '%.net%'AND post NOT LIKE '%.org%'AND post NOT LIKE '%.co%'AND post NOT LIKE '%.uk%'LIMIT 0,1");
                    while($row_content=mysqli_fetch_array($select_content)){
                    $pos=$row_content['post'];
                    $post=substr($pos, 0, 210);
                
                echo"<div class='row pb-3'>
                    <div class='col-5 align-self-center'>
                        <a href='single.php?date=$date&headline=$headline&token=$token'><img src='posts/$token' alt='img' class='fh5co_most_trading'/></a>
                    </div>
                    <div class='col-7 paddding'>
                        <div class='most_fh5co_treding_font'> <a href='single.php?date=$date&headline=$headline&token=$token'>$headline</a></div>
                        <div class='most_fh5co_treding_font_123'><a href='single.php?date=$date&headline=$headline&token=$token'>$date</a></div>
                    </div>
                </div>";
                    }
                }
                ?>
                
            </div>
        </div>
        <div class="row mx-0 animate-box" data-animate-effect="fadeInUp">
            <?php
        $q=mysqli_query($db,"SELECT * FROM post_title WHERE Category LIKE '%Entertainment%'");
        $total_q=mysqli_num_rows($q);
        $total_page=ceil($total_q/$num_per_page);
        
        if($page>1){
            
          echo"<a href='index.php?page=".($page-1)."' class='btn btn-danger'>previous</a>";   
        }
        
        for($i=1;$i<$total_page;$i++){
          echo"<a href='index.php?page=".$i."' class='btn btn-primary'>$i</a>";   
        }
        
        
        if($i>$page){
            
          echo"<a href='index.php?page=".($page+1)."' class='btn btn-danger'>next</a>";   
        }
        ?>
        
        </div>
    </div>
</div>
<div class="container-fluid fh5co_footer_bg pb-3">
    <div class="container animate-box">
        <div class="row">
            <div class="col-12 spdp_right py-5"><a href='index.php'><img src="images/national.png" alt="img" class="footer_logo"/></a></div>
            <div class="clearfix"></div>
            <div class="col-12 col-md-4 col-lg-3">
                
            </div>
            <div class="col-12 col-md-3 col-lg-2">
                <div class="footer_main_title py-3"> Category</div>
                <ul class="footer_menu">
                    <?php
                            $select=mysqli_query($db,"SELECT * FROM categories");
                            while($row=mysqli_fetch_array($select)){
                            $category=$row['category'];
                            echo"<li><a href='category.php?category=$category' class=''><i class='fa fa-angle-right'></i>&nbsp;&nbsp; $category</a></li>";
                            }
                           ?>
                    
                </ul>
            </div>
           <div class="col-12 col-md-5 col-lg-3 position_footer_relative">
                <div class="footer_main_title py-3">Incase You missed</div>
                <?php
                
               
                $select=mysqli_query($db,"SELECT * FROM post_title ORDER BY RAND() LIMIT 0,3");
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
                echo"<div class='footer_makes_sub_font'><a href='single.php?date=$date&headline=$headline&token=$token'>$date</a></div>
                <a href='single.php?date=$date&headline=$headline&token=$token' class='footer_post pb-4'> $headline </a>";
                        
                    }
                }
                
                    ?>
                
                <div class="footer_position_absolute"><img src="images/footer_sub_tipik.png" alt="img" class="width_footer_sub_img"/></div>
            </div>
           
           
        </div>
        <div class="row justify-content-center pt-2 pb-4">
            <div class="col-12 col-md-8 col-lg-7 ">
                
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

