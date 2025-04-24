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
$id=$_SESSION['id'];
$data=mysqli_query($con,"SELECT * FROM `register` INNER JOIN login ON register.id=login.id INNER JOIN doctor ON doctor.id=login.id where login.id='$id'");
$row=mysqli_fetch_assoc($data);
$name=$row['name'];
$d_id=$row['d_id'];
$email=$row['email'];
$phone=$row['phone'];
$date=$row['date'];
$time=$row['time'];
// $t_time=$row['to_time'];
$department=$row['department'];
$file= $row['photo']; 
$dob=$row['dob'];

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
include 'doctor_nav.php';
?>
    <!-- nav  -->


<section class="service-overview section">

<div class="container">
        <div class="row">
           <div class="col-md-12">
      

  <?php
  if(mysqli_num_rows($data)>0)
{
    ?>
    <center>
           <div class="card text-bg-success mb-3" style="max-width: 35rem;">
  <div class="card-header text-danger"><b>PROFILE</b> </div>
  <div class="card-body">
  <img src="doctor/<?php echo $file?>"  height="200" width="200">
    <!-- <h5 class="card-title">Success card title</h5> -->
    <p class="card-text">
      <table>
        <tr>
        <th> <label for="exampleFormControlInput1" class="form-label text-danger">ID:</label></th>
          <td><label for="exampleFormControlInput1" class="form-label"><?php echo htmlspecialchars($d_id)?></label></td>
        </tr>
        <tr>
        <th ><label for="exampleFormControlInput1" class="form-label text-danger">Name:</label></th>
          <td><label for="exampleFormControlInput1" class="form-label"><?php echo htmlspecialchars($name)?></label></td>
        </tr>
        
        <tr>
        <th><label for="exampleFormControlInput1" class="form-label text-danger">Email:</label></th>
          <td><label for="exampleFormControlInput1" class="form-label"><?php echo htmlspecialchars($email)?></label></td>
        </tr>
        <tr>
        <th><label for="exampleFormControlInput1" class="form-label text-danger"> DOB</label></th>
          <td><label for="exampleFormControlInput1" class="form-label"><?php echo htmlspecialchars($dob)?></label></td>
        </tr>
        <tr>
        <th> <label for="exampleFormControlInput1" class="form-label text-danger">Phone</label></th>
          <td><label for="exampleFormControlInput1" class="form-label"><?php echo htmlspecialchars($phone)?></label></td>
        </tr>
        <tr>
        <th><label for="exampleFormControlInput1" class="form-label text-danger"> Date</label></th>
          <td><label for="exampleFormControlInput1" class="form-label"><?php echo htmlspecialchars($date)?></label></td>
        </tr>
        <tr>
        <th><label for="exampleFormControlInput1" class="form-label text-danger"> Time:</label></th>
          <td><label for="exampleFormControlInput1" class="form-label"><?php echo htmlspecialchars($time)?></label></td>
        </tr>
       
        <tr>
        <th><label for="exampleFormControlInput1" class="form-label text-danger"> Department</label></th>
          <td><label for="exampleFormControlInput1" class="form-label"><?php echo htmlspecialchars($department)?></label></td>
        </tr>
        <tr>
        <th><label for="exampleFormControlInput1" class="form-label text-danger"> Actions</label></th>
          <td><label for="exampleFormControlInput1" class="form-label"><a href="doctor_update.php?id=<?php echo $row['id'];?>">Update</a> /</label>
          <label for="exampleFormControlInput1" class="form-label"><a href="doctor_delete.php?id=<?php echo $row['id'];?>">Delete</a></label>  
        </td>
        </tr>
      </table>
    </p>
  </div>
</div>
</center>
    <?php
    }
    else{
      ?>
    <center><h2><span style="color:red">YOUR PROFILE IS NOT REGISTERED,<a href="doctor_add.php">Register Now</a></span></h2></center>
     
      <h2></h2>
      <?php
    }
    ?>  

</div>
</div>

                           
<!--Service Section-->
<section class="service-section bg-gray section">
    <div class="container">
        <div class="section-title text-center">
            <h3>Provided
                <span>Services</span>
            </h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet. qui suscipit atque <br>
                fugiat officia corporis rerum eaque neque totam animi, sapiente culpa. Architecto!</p>
        </div>
        <div class="row items-container clearfix">
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="images/gallery/1.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Better Service At Low Cost</span>
                        <a href="service.html">
                            <h6>Dormitory</h6>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="images/gallery/2.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Better Service At Low Cost</span>
                        <a href="service.html">
                            <h6>Germs Protection</h6>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="images/gallery/3.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Better Service At Low Cost</span>
                        <a href="service.html">
                            <h6>Psycology</h6>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="images/gallery/1.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Better Service At Low Cost</span>
                        <a href="service.html">
                            <h6>Dormitory</h6>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="images/gallery/2.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Better Service At Low Cost</span>
                        <a href="service.html">
                            <h6>Germs Protection</h6>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="images/gallery/3.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Better Service At Low Cost</span>
                        <a href="service.html">
                            <h6>Psycology</h6>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Service Section--> 

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
