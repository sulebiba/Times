<?php
$conn = new mysqli("localhost","root","","nationaltimes");
if($conn->connect_error){
  die("Failed to connect!".$conn->connect_error);  
}
if(isset($_POST['query'])){
    $inpText=$_POST['query'];
    $query="SELECT * FROM post_title WHERE headline LIKE '%$inpText%' OR author LIKE '%$inpText%' OR date LIKE '%$inpText%'";
    $result=$conn->query($query);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $author=$row['author'];
                    $date=$row['date'];
                    $headline=$row['headline'];
                    $token=$row['token'];
            echo"<a href='single.php?date=$date&headline=$headline&token=$token' class='list-group-item list-group-item-action border-1'>".$row['headline']."</a>";
        }
    }
    else{
        echo "<p class='list-group-item border-1'>No Record</p>";
    }
}
    

?>