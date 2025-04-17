<?php
include 'connection.php';
session_start();
$id=$_SESSION['id'];
$data=mysqli_query($con,"SELECT * FROM `patient`inner join register on patient.id=register.id INNER join doctor on doctor.d_id=patient.doctor WHERE doctor.id='$id' && status='approved'");
// $row=mysqli_fetch_assoc($data);
// $p=$row['p_id'];
//  var_dump($p);
//  exit();

if(isset($_POST['submit']))
{
    $sel=$_POST['sel'];
    $age=$_POST['age'];
    $dis=$_POST['dis'];
    $med=$_POST['med'];
    $ref=$_POST['ref'];
   mysqli_query($con,"INSERT INTO `medical_report`(`p_id`, `age`, `disease`, `medicines`, `reference`, `id`) VALUES ('$sel','$age','$dis','$med','$ref','$id')"); 
header("location:doctor_patint_repo.php");
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
    <!-- jquery code -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
if(mysqli_num_rows($data)>0)
{
?>
<br>
 <center><h2 > <span style="color:blue">Patient Reports</span></h2></center>
 <br><br>
 <center>
<table>
<tr>
 <form action="" method="POST">
    <td>Name  : </td>
    <td>
<select name="sel" id="sel" required >
<option value="">SELECT</option>
<?php

 
while($row=mysqli_fetch_assoc($data))
{
  
?>

<option value="<?php echo $row['p_id'];?>"> <?php echo $row['name'];?> </option>
<?php
}
?>
</select> <br><br></td>
</tr>
<!-- <tr>
    <td>Age :</td>
    <td><input type="text" name="age" id="age"></td>
</tr> -->

<!-- <script>
//   alert("hy"); 
         $(document).ready(function() {
                                    $("#sel").change(function() {
                                     var dep = $(this).val();
                                    //  alert (dep);
                                   $.ajax({
                                        
                                    url: "get_age.php",
                                 type: "POST",
                                  data: {
                                 sel: dep
                                      },
                    //              success: function(data) {
                    //              $("#age").html(data);
                    // }
                    success: function(data) {
                        $('#ageTextbox').val(data);             },
                });
            });
        });
                              </script> -->
                              <script>
  $(document).ready(function () {
    $("#sel").change(function () {
      var dep = $(this).val();

      $.ajax({
        url: "get_age.php",
        type: "POST",
        data: { sel: dep }, // Correct way to send data
        success: function (data) {
          $('#ageTextbox').val(data); // Fill age in textbox
        },
        error: function () {
          alert('Error in AJAX request');
        }
      });
    });
  });
</script>

<tr>
    <td> Age :</td>
<td><input type="text" name="age" id="ageTextbox" > <br><br></td>
</tr>

<tr>
    <td>Disease : </td>

<td>
 <textarea name="dis" rows="5" cols="50"  placeholder="Disease" required></textarea> <br><br></td>
 </tr>
 <tr><td>Medicines :</td>
<td><textarea name="med" rows="5" cols="50"  placeholder="Medicines" required></textarea> <br><br>
</td></tr>
<tr><td>Reference :</td>
<td><textarea name="ref" rows="5" cols="50"  placeholder="Reference" required></textarea> <br><br>
</td></tr>
<tr><td></td><td><button name="submit">Add</button></td></tr>

   </form> 

   </table>
   <?php
   $data1=mysqli_query($con,"SELECT * FROM `medical_report` INNER join patient on medical_report.p_id=patient.p_id INNER JOIN register ON register.id=patient.id WHERE medical_report.id='$id'");
   if(mysqli_num_rows($data1)>0) 
   {
    ?>
   </center>
   <br><br><br>
   <table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Disease</th>
      <th scope="col">Medicines</th>
      <th scope="col">Reference</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php
       
       while($row1=mysqli_fetch_assoc($data1))
       {
        ?>
      <td><?php echo $row1['name'];?></td>
      <td><?php echo $row1['age'];?></td>
      <td><?php echo $row1['disease'];?></td>
      <td><?php echo $row1['medicines'];?></td>
      <td><?php echo $row1['reference'];?></td>
      <td><a href="edit_patient_repo.php?mid=<?php echo $row1['m_id'];?>">EDIT/</a>
    <a href="delete_patient_repo.php?mid=<?php echo $row1['m_id'];?>">DELETE</a>
    </td>
    </tr>
   <?php
}?>
  </tbody>
</table>
<?php
   }
   else
   {
    ?>
    <br><br>
    <center><h2><span style="color:blue">No Data</span></h2></center>
    <?php
   }
   ?>
<?php
}
else
{
?>
<br><br>
<center><h2><span style="color:red">No Patient Reports To Show</span></h2></center>
<?php
}
?>
<br><br><br><br><br><br>

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
