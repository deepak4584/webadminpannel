<?php
session_start();
include('config.php');
if(isset($_SESSION['mobile']))
{
header("location:index.php");
}
if(isset($_GET['eid']))
{
  $edit_id = $_GET['eid'];
  $sql = "SELECT * FROM users where id='$edit_id'";
  $result = $conn->query($sql);
  $getdata = $result->fetch_object();
 
}
 if(isset($_POST['submit_register']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mob'];
  $password = $_POST['pwd'];

   $sql = "INSERT INTO users (name, email,mobile,password)
VALUES ('$name', '$email', '$mobile','$password')";
$result = $conn->query($sql);
if ($result){
  header("location:login.php");
  die;
}
else{
  $error_msg = "faild";
}

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome To NewFurnitureHouse</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bethany - v2.2.1
  * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <?php include('header1.php'); ?>
  
  <section id="contact" style="margin-top:20px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-3" data-aos="fade-right">
            <div class="section-title">
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
           
            <div class="row">
             
              <div class="col-lg-6">
               
              </div>
            </div>
           <span style="color:red; font-size:16px;"><?php if(isset($error_msg)) { echo $error_msg; } else { } ?></span>
           <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
    
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="Name" placeholder="Enter student name" name="name"  value="<?php if(isset($getdata->name)) { echo $getdata->name; } ?>">
    </div>
  
    <div class="form-group">
      <label for="name">Mobile:</label>
      <input type="text" class="form-control" id="mobile" placeholder="Enter mobile number" name="mob" value="<?php if(isset($getdata->mobile)) { echo $getdata->mobile; } ?>">
    </div>
  
 
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php if(isset($getdata->email)) { echo $getdata->email; } ?>">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" value="<?php if(isset($getdata->password)) { echo $getdata->password; } ?>">
    </div>
              <div class="text-center"><button style="background: #009970;
    border: 0;
    padding: 10px 30px;
    color: #fff;
    transition: 0.4s;
    border-radius: 50px;" name="submit_register" type="submit" >Submit</button></div>
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  <?php include('footer.php'); ?>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>