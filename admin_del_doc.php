<?php
include 'connection.php';
$id=$_GET['id'];
$data=mysqli_query($con,"DELETE FROM `register` WHERE id='$id'");
header("location:admin_team.php");
?>

    
  




