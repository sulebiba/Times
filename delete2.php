<?php
include("session.php");
include("connection.php");
if(isset($_GET['id'])){
$id=$_GET['id'];
}
$delete=mysqli_query($db,"delete from contact where id='$id'") or die(mysqli_error($db));
$user_id=$_SESSION['id'];
header("location:admin_contact.php");
//header("location:index.php?delete_post='successful'");
//session_destroy();
?>


<?php mysqli_close($db); ?>