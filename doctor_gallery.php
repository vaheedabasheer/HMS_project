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
  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->

  
<?php
include 'doctor_nav.php';
?>







<section class="video-gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3>Collected Media
                        <span>of Our Hospital</span>
                    </h3>
                    <p>Leverage agile frameworks to provide a robust synopsis for high level overv-
                        <br>iews. Iterative approaches to corporate strategy...</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="video-gallery-item">
                    <div class="image-holder">
                        <img src="images/gallery/video-thumb-01.jpg" class="img-responsive" alt="video-gallery">
                        <a data-fancybox href="https://www.youtube.com/watch?v=h-h5Mhlt6O0"><i class="fa fa-play"></i></a>
                    </div>
                    <h3>January 2018 Florida Conference</h3>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="video-gallery-item">
                    <div class="image-holder">
                        <img src="images/gallery/video-thumb-02.jpg" class="img-responsive" alt="video-gallery">
                        <a data-fancybox href="https://www.youtube.com/watch?v=h-h5Mhlt6O0">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                    <h3>December 2017 los angeles Conference</h3>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="video-gallery-item">
                    <div class="image-holder">
                        <img src="images/gallery/video-thumb-03.jpg" class="img-responsive" alt="video-gallery">
                        <a data-fancybox href="https://www.youtube.com/watch?v=h-h5Mhlt6O0">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                    <h3>November 2017 Texas Conference</h3>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="video-gallery-item">
                    <div class="image-holder">
                        <img src="images/gallery/video-thumb-04.jpg" class="img-responsive" alt="video-gallery">
                        <a data-fancybox href="https://www.youtube.com/watch?v=h-h5Mhlt6O0">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                    <h3>October 2017 san francisco Conference</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gallery bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3>Collected Shots
                        <span>of Our Hospital</span>
                    </h3>
                    <p>Leverage agile frameworks to provide a robust synopsis for high level overv-
                        <br>iews. Iterative approaches to corporate strategy...</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="gallery-item">
                    <img src="images/gallery/gallery-01.jpg" class="img-responsive" alt="gallery-image">
                    <a data-fancybox="images" href="images/gallery/gallery-01.jpg"></a>
                    <h3>Facility 01</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="gallery-item">
                    <img src="images/gallery/gallery-02.jpg" class="img-responsive" alt="gallery-image">
                    <a data-fancybox="images" href="images/gallery/gallery-02.jpg"></a>
                    <h3>Facility 02</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="gallery-item">
                    <img src="images/gallery/gallery-03.jpg" class="img-responsive" alt="gallery-image">
                    <a data-fancybox="images" href="images/gallery/gallery-03.jpg"></a>
                    <h3>Facility 03</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="gallery-item">
                    <img src="images/gallery/gallery-04.jpg" class="img-responsive" alt="gallery-image">
                    <a data-fancybox="images" href="images/gallery/gallery-04.jpg"></a>
                    <h3>Facility 04</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="gallery-item">
                    <img src="images/gallery/gallery-05.jpg" class="img-responsive" alt="gallery-image">
                    <a data-fancybox="images" href="images/gallery/gallery-05.jpg"></a>
                    <h3>Facility 05</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="gallery-item">
                    <img src="images/gallery/gallery-06.jpg" class="img-responsive" alt="gallery-image">
                    <a data-fancybox="images" href="images/gallery/gallery-06.jpg"></a>
                    <h3>Facility 06</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.</p>
                </div>
            </div>
        </div>
    </div>
</section>

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