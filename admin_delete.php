<?php

ob_start();
include('connection.php');
include("session.php");
date_default_timezone_set('Africa/Lagos');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Service</title>
 <link rel="stylesheet" href="table.css">
</head>
<body>
        <h2 align='center'>Delete News</h2>
    <div style="overflow-x:auto;">
            <table border="2"class="content-table">
                <thead>
               <tr>
                   <th>Headline</th><th>Author</th><th>Date</th><th>Category</th>
            </tr> 
            </thead>
            <?php
           if(isset($_SESSION['id'])){
            $select=mysqli_query($db,"SELECT * FROM post_title ORDER BY 1 DESC");
            while($row=mysqli_fetch_array($select)){
               
                $headline=$row['headline'];
                $author=$row['author'];
                $date=$row['date'];
                $category=$row['category'];
                $id=$row['token'];
                $token=$row['token'];

                echo"<tbody><tr>
                <th>$headline</th><th>$author</th><th>$date</th><th>$category</th><th><a href='delete4.php?id=$id'>delete</a></th>
                <th><a href='admin_upload_file.php?date=$date&headline=$headline&token=$token'>Update news</a></th>
         </tr> </tbody></span>";
            }
           }
            else{
            header("location:index.php");
            ob_end_flush();
            }
            
           
            ?>
</table>
        
    </div>    
        
                
            
        
    
</body>
</html>
