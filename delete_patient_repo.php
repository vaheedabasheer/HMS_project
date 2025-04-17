<?php
include 'connection.php';
$mid=$_GET['mid'];
mysqli_query($con,"delete from `medical_report` where m_id='$mid'");
header("location:doctor_patint_repo.php");
?>