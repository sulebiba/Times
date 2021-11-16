<?php
include("session.php");
include("connection.php");
if(isset($_GET['id'])){
$id=$_GET['id'];
}
$delete=mysqli_query($db,"delete from post_title where token='$id'") or die(mysqli_error($db));
$deleteb=mysqli_query($db,"delete from contents where token='$id'") or die(mysqli_error($db));
$deletec=mysqli_query($db,"delete from comments where token='$id'") or die(mysqli_error($db));
$user_id=$_SESSION['id'];
header("location:admin_delete.php");
//header("location:index.php?delete_post='successful'");
//session_destroy();
?>


<?php mysqli_close($db); ?>