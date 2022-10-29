<?php

session_start();

if(!isset($_COOKIE['login']) || !isset($_COOKIE['email'])){
  header("Location:./login.php");
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
    <ul class="breadcrumb">
        <li><a href="home.php">Home</a></li>
        <li>Enter Your Vaccination Details</li>
      </ul>
    <section id="contact" class="contact">
        <div class="container" >
  
          <div class="section-title">
            <h4>Enter Vaccination Details</h4>
          </div>

          
              <?php

                if(isset($_SESSION['error'])){
                  echo "<p class='alert alert-danger text-center' >{$_SESSION['error']}</p>";
                  $_SESSION['error']=null;
                }
                if(isset( $_SESSION['msg'])){
                  echo "<p class='alert alert-success text-center' >{$_SESSION['msg']}</p>";
                   $_SESSION['msg']=null;
                }


              ?>

          
  
          <div class="row">
  

  
            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="db.php" method="POST" role="form" class="php-email-form">
                    <div class="row">
                      <div class="form-group col-md-6">
                        <p class="form-row form-row-first">
                          <input type="hidden" name="email" value="<?= $_COOKIE['email'] ?>"/>
                            <label class="text">Brand of the Vaccine</label>
                           <select title="country" name="vname" data-placeholder="United Kingdom" class="form-control"
                                    tabindex="1" required>
                                <option value="sinopharm">Sinopharm</option>
                                <option value="pfizer">Pfizer</option>
                                <option value="sputnikv">Sputnik V</option>
                                <option value="moderna">Moderna</option>
                                <option value="astrazeneka">Oxford/AstraZeneca</option>
                                
                                
                            </select>
                      </div>
                      <div class="form-group col-md-6">
                        <p class="form-row form-row-first ml-md-2">
                            <label class="text">Vaccination Dose</label>
                           <select title="dose" data-placeholder="United Kingdom" name="dose" class="form-control"
                                    tabindex="1" name="dose" required>
                                    <option value="first dose">First Dose</option>
                                    <option value="second dose">Second Dose</option>
                                    <option value="third dose">Third Dose</option>
                                    <option value="fourth dose">Fourth Dose</option>
                                
                                
                                
                            </select>
                        </p>
                      </div>
                    </div>
                    <div class="form-group">
                        <p class="form-row ">
                            <label class="text">Place Of Vaccination</label>
                            <input title="last" name="place" type="text" class="form-control" required>
                        </p>
                    </div>
                    <div class="form-group">
                      <label class="text"> Vaccinated Date </label>
                        <p>
                            <input type="date" 
                            class="form-control" name="date" required >
                        </p>
                   
                    <div class="text-center"> <p>
                        <input type="submit" value="Submit"
                            class="form-submit-button" name="add-data">
                        </p>
                    </div>
            </form>
            </div>
  
          </div>
  
        </div>
      </section>


      <script>
        let error=document.querySelector(".alert")

        setTimeout(()=>{
          if(error){
            error.remove();
          }

        },3000)

      </script>
</body>
</html>