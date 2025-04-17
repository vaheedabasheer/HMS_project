<?php
include 'connection.php';

// var_dump($patient_id);
// exit();


?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Medic | Medical HTML Template</title>

  
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
  
  <!-- Stylesheets -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>


<body>
  <?php
  include 'admin_nav.php';
  ?>

<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Admin Page</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.html">home &nbsp;/</a>
                </li>
                <li>Admin</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->
<br><br>
<center><h3><span style="color:black">Appoinments</span></h3></center>

<section class="service-overview section">
    <div class="container">
        <div class="row">
           <div class="col-md-12">
           <table class="table table-success table-striped">

    <tr>
    <th scope="col">Patient</th>
    <th scope="col">Doctor</th>
      <th scope="col">Department</th>
      <th scope="col">Date</th>
     <th scope="col">Time</th>
     <th scope="col">Status</th>
     <th scope="col">Actions</th>
  </tr>
    <?php
   
    ?>
 <?php
$data=mysqli_query($con,"SELECT * FROM `patient` INNER JOIN `register`ON patient.id=register.id");
   
while($row=mysqli_fetch_assoc($data))
 {
 ?>
    <tr>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['doctor'];?></td>
      <td><?php echo $row['p_department'];?></td>
      <td><?php echo $row['p_date'];?> </td>
      <td><?php echo $row['p_time'];?></td>
      <td><?php echo $row['status'];?></td>
      <td><button><a href="admin_pa_cancel.php?id=<?php echo $row['p_id'];?>">Cancel</a></button></td>
 
    
     <?php
 }
     ?>
    
    </tr>
  
  
</table>


<br><br><br><br><br>
<!--footer-main-->

<!--End footer-main-->

</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
  <span class="icon fa fa-angle-up"></span>
</div>

<script src="plugins/jquery.js"></script>
<script src="plugins/bootstrap.min.js"></script>
<script src="plugins/bootstrap-select.min.js"></script>
<!-- Slick Slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- FancyBox -->
<script src="plugins/fancybox/jquery.fancybox.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="plugins/google-map/gmap.js"></script>

<script src="plugins/validate.js"></script>
<script src="plugins/wow.js"></script>
<script src="plugins/jquery-ui.js"></script>
<script src="plugins/timePicker.js"></script>
<script src="js/script.js"></script>
</body>

</html>
