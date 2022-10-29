
<?php

if(isset($_COOKIE['login'])){
    header("Location:./index.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>VMS Login</title>
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
          <h4>Welcome To SLTC Vaccine Management System</h4>
        </div>
        
      </div>

    </div>

  <section id="contact" class="contact">


      <div class="section-title">
        <h2>Login</h2>
        <p>Please Enter your Login Details</p>
      </div>


      <div class="col-lg-5 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="./db.php" method="POST" role="form" class="php-email-form">
            <div class="row">
              
              <div class="form-group">
                <label for="name">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" id="password" required>
            </div>
            <input type="submit" style="border-radius: 20px;" class="form-submit-button" value="login" name="login">
          </form>

        </div>

      </div>

    </div>
  </section>
  <div class="col-lg-6 cta-btn-container text-center">
    <label>Dont Have an Account Yet ?</label>
    <a class="cta-btn " href="register.php">Register</a>
  </div>
  </section><!-- End Contact Section -->


</body>
</html>