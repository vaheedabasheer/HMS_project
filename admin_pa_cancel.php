<?php
include 'connection.php';
$id=$_GET['id'];
mysqli_query($con,"DELETE FROM `patient` where p_id='$id'");
header("location:admin_view_appo.php");
?>