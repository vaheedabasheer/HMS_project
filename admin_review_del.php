<?php
include 'connection.php';
$id=$_GET['id'];
mysqli_query($con,"DELETE FROM `review` WHERE re_id='$id'");
header("location:admin_reviews.php");

?>