<?php
include 'connection.php';
$p_id=$_GET['pid'];
mysqli_query($con,"delete from `patient` where p_id='$p_id'");
header("location:view_appoinment.php");
?>