<?php
include 'connection.php';
$pid=$_GET['pid'];
// var_dump($id);
// exit();
mysqli_query($con,"UPDATE `patient` SET `status`='approved' WHERE patient.p_id='$pid'");
echo "<script>window.location.href='doctor_appoinmnet.php';</script>";

?>