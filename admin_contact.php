<?php
include("session.php");
ob_start();
include('connection.php');
//include("session.php");
date_default_timezone_set('Africa/Lagos');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NationalTimes</title>
 <link rel="stylesheet" href="table.css">
</head>
<body>
        <h2 align='center'>Contact Information</h2>
    <div style="overflow-x:auto;">
            <table border="2"class="content-table">
                <thead>
               <tr>
                   <th>Name</th><th>Email</th><th>Subject</th><th>Message</th><th>Date</th>
            </tr> 
            </thead>
            <?php
           if(isset($_SESSION['id'])){
            $select=mysqli_query($db,"SELECT * FROM contact ORDER BY 1 DESC");
            while($row=mysqli_fetch_array($select)){
               
                $name=$row['name'];
                $email=$row['email'];
                $subject=$row['subject'];
                $message=$row['message'];
                $date=$row['date'];
                $id=$row['id'];
               

                echo"<tbody><tr>
                <th>$name</th><th>$email</th><th>$subject</th><th>$message</th><th>$date</th><th><a href='delete2.php?id=$id'>delete</a></th>
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
