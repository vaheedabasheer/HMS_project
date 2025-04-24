<?php
include 'connection.php';
session_start();
header("Cache-control: no-cache, no-store, must-revalidate");
header("Pragma:no-cache"); //HTTP 1.0
header("Expires: 0"); //proxies
if(!isset($_SESSION['id']))
{
  header("location:login.php");
  exit();
}
$data=mysqli_query($con,"SELECT * FROM `patient` INNER JOIN medical_report ON patient.p_id=medical_report.p_id INNER JOIN register ON register.id=patient.id INNER JOIN doctor on doctor.id=medical_report.id");
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
    <!-- nav  -->
<?php
include 'admin_nav.php';
if(mysqli_num_rows($data)>0)
{
?>
    <!-- nav  -->
 <br><br><br>

<center><h3><span style="color:#48BDC5">Medical Reports</span></h3></center>

<section class="service-overview section">
    <div class="container">
        <div class="row">
           <div class="col-md-12">
           <table class="table table-success table-striped">

    <tr>
    <th scope="col">Patient</th>
    <th scope="col">Age</th>
    <th scope="col">Doctor</th>
      <th scope="col">Department</th>
      <th scope="col">Disease</th>
     <th scope="col">Medicines</th>
     <th scope="col">Reference</th>
     <th scope="col">Actions</th>
  </tr>
    <?php
   
    ?>
 <?php

   
while($row=mysqli_fetch_assoc($data))
 {
 ?>
    <tr>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['age'];?></td>
      <td><?php $doc=$row['doctor'];
          $doct=mysqli_query($con,"SELECT * FROM `doctor` INNER JOIN register ON doctor.id=register.id WHERE d_id='$doc'");
      if(mysqli_num_rows($doct)>0) 
      {
        $row1=mysqli_fetch_assoc($doct);
        $doctor_name=$row1['name'];
        echo $doctor_name;
      }
      else{
        echo "no data";
      }
      ?>
      </td>
     <td><?php echo $row['p_department'];?></td>
      <td><?php echo $row['disease'];?> </td>
      <td><?php echo $row['medicines'];?></td>
      <td><?php echo $row['reference'];?></td>
      <td>
        <button >
          <a href="admin_del_med_rep.php?id=<?php echo $row['m_id'];?>" onclick="return confirm('Are you sure  want to delete this item?');">Delete</a>

        </button>
      </td>
 
    
     <?php
 }
     ?>
    
    </tr>
  
  
</table>
<?php
}
else
{
  ?>
   <br><br><br>
   <br><br><br>
 <center><h1><span style="color:#48BDC5">NO Medical Reports</span></h1></center>
  <?php
}
?>
 <br><br><br>
 <br><br><br>

<!--footer-main-->
<footer class="footer-main">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="about-widget">
            <div class="footer-logo">
              <figure>
                <a href="index.html">
                  <img src="images/logo-2.png" alt="">
                </a>
              </figure>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, temporibus?</p>
            <ul class="location-link">
              <li class="item">
                <i class="fa fa-map-marker"></i>
                <p>Modamba, NY 80021, United States</p>
              </li>
              <li class="item">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <a href="#">
                  <p>Support@medic.com</p>
                </a>
              </li>
              <li class="item">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <p>(88017) +123 4567</p>
              </li>
            </ul>
            <ul class="list-inline social-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <h6>Services</h6>
          <ul class="menu-link">
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Orthopadic Liabilities</a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Dental Clinic</a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Dormamu Clinic</a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Psycological Clinic</a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Gynaecological Clinic</a>
            </li>
          </ul>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="social-links">
            <h6>Recent Posts</h6>
            <ul>
              <li class="item">
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object" src="images/blog/post-thumb-small.jpg" alt="post-thumb">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#">Post Title</a></h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, dolorem.</p>
                  </div>
                </div>
              </li>
              <li class="item">
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object" src="images/blog/post-thumb-small.jpg" alt="post-thumb">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">
                      <a href="#">Post Title</a>
                    </h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, dolorem.</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container clearfix">
      <div class="copyright-text">
        <p>&copy; Copyright 2018. All Rights Reserved by
          <a href="index.html">Medic</a>
        </p>
      </div>
      <ul class="footer-bottom-link">
        <li>
          <a href="index.html">Home</a>
        </li>
        <li>
          <a href="about.html">About</a>
        </li>
        <li>
          <a href="contact.html">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</footer>
<!--End footer-main-->

</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
  <span class="icon fa fa-angle-up"></span>
</div>

<script>
  if(window.history.replaceState)
{
  window.history.replaceState(null, null, window.location.href);

}
window.onpageshow = function(event)
{
  if(event.persisted)
{
  window.location.reload();
}
};
</script>
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
