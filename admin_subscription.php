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
   <title>NationalTimes</title>
 <link rel="stylesheet" href="table.css">
</head>
<body>
        <h2 align='center'>Subscribers</h2>
    <div style="overflow-x:auto;">
            <table border="2"class="content-table">
                <thead>
               <tr>
                   <th>Email</th>
            </tr> 
            </thead>
            <?php
           if(isset($_SESSION['id'])){
            $select=mysqli_query($db,"SELECT * FROM subscription ORDER BY 1 DESC");
            while($row=mysqli_fetch_array($select)){
               
               
                $email=$row['sub'];
                
               

                echo"<tbody><tr>
                <th>$email</th>
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
