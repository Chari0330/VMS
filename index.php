<?php

if(isset($_COOKIE['login'])){
    header("Location:./home.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SLTC VMS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
  <section id="cta" class="cta">
    <div class="container" >

      <div class="row">
        <div class="col-lg-0 text-center text-lg-0">
          <h2>Welcome To SLTC Vaccine Management System</h2>
        </div>
        
      </div>

    </div>

  <div class="col-lg-0 cta-p text-center">
  
  <br/> 
  <p>

           One Stop Solution For Storing Your Vaccination Data.

</p>


      <p>

          Join Us Now.
</p>

    <a class="cta-btn align-middle" href="login.php">Login</a>
    <a class="cta-btn align-middle" href="register.php">Register</a>
  </div>
  

  <section id="about" class="about">
    <div class="container" >

      <div class="section-title">
        <!--<h4>About Us</h4>-->
      </div>

      <div class="row content">
        <div class="col-lg-8">
          <!-- <ul>
          <li>
           Us students of SLTC batch 8-B has created a website which stores your vaccination details 
           which can be acessed again easily .</li>
          </ul> -->
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <p> 
          </p>
        </div>
      </div>

    </div>
  </section>
  </section>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>