<?php
include 'connection.php';
session_start();
$name=$_SESSION['name'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->

  

<!--header top-->
<div class="header-top">
      <div class="container clearfix">
            <div class="top-left">
                  <h6>Opening Hours : Saturday to Tuesday - 8am to 10pm</h6>
            </div>
            <div class="top-right">
                  <ul class="social-links">
                        <li>
                              <a href="#">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="#">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="#">
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="#">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="#">
                                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                              </a>
                        </li>
                  </ul>
            </div>
      </div>
</div>
<!--header top-->

<!--Header Upper-->
<section class="header-uper">
      <div class="container clearfix">
            <div class="logo">
                  <figure>
                        <a href="index.html">
                              <img src="images/logo.png" alt="" width="130">
                        </a>
                  </figure>
            </div>
            <div class="right-side">
                  <ul class="contact-info">
                        <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-envelope-o"></i>
                              </div>
                              <strong>Email</strong>
                              <br>
                              <a href="#">
                                    <span>info@medic.com</span>
                              </a>
                        </li>
                        <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-phone"></i>
                              </div>
                              <strong>Call Now</strong>
                              <br>
                              <span>+ (88017) - 123 - 4567</span>
                        </li>
                  </ul>
                  <div class="link-btn">
                        <a href="logout.php" class="btn-style-one">Doctor/Staff<br><span style="color:#FF0000"><?php echo $name?></span>  Log Out</a>
                  </div>
            </div>
      </div>
</section>
<!--Header Upper-->


<!--Main Header-->
<nav class="navbar navbar-default">
      <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                  </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                        <li class="active">
                              <a href="doctor.php">Home</a>
                        </li>
                        <li>
                              <a href="doctor_gallery.php">Gallery</a>
                        </li>
                       <li>
                              <a href="doctor_about.php">About</a>
                        </li>
                        <!-- <li>
                              <a href="doctor_profile.php">My Profile</a>
                        </li> -->
                        <li class="dropdown bg-bg-dark">
                              <a href="#" id="P" class="dropdown-toggle" data-toggle="dropdown" role="button" >My Profile
                                    <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu" >
                                    <li >
                                          <a style="color:black" href="doctor_add.php" class=bg-info>Add Profile</a>
                                    </li>
                                    <li>
                                          <a style="color:black" href="doctor_profile.php"  class=bg-info>View Profile</a>
                                    </li>
                                    
                                   
                              </ul>
                        </li>
                        <li>
                              <a href="doctor_viewlist.php">View Doctors List</a>
                        </li>
                        
                        <li>
                              <a href="doctor_appoinmnet.php">View Appointments</a>
                        </li>
                        <li>
                              <a href="doctor_patint_repo.php">patient Reports</a>
                        </li>
                      
                       
                      
                  </ul>
            </div>
            <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
</nav>
  <!--Page Title-->
  <section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Staff/Doctor</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="doctor.php">home &nbsp;/</a>
                </li>
                <li>Staff/Doctor</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->
</body>
</html>