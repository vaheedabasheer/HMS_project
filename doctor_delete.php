<?php
include 'connection.php';
$id=$_GET['id'];
mysqli_query($con,"DELETE FROM `doctor` WHERE id='$id'");
mysqli_query($con,"DELETE FROM `login` WHERE id='$id'");
mysqli_query($con,"DELETE FROM `register` WHERE id='$id'");
echo "<script>alert ('Deleted Successfully');</script>";
header("location:login.php");


?>