<?php
include 'connection.php';
$id=$_GET['id'];
mysqli_query($con,"DELETE FROM `medical_report` WHERE m_id='$id'");
header("location:admin_view_repo.php");
?>