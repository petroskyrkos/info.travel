<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>info.travel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logots.png" rel="icon">
  <link href="assets/img/logots.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="./css.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Sailor - v2.3.1
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>


<body>

  <!-- ======= Header ======= -->
 
  <?php include "header.php"; ?>

  <main id="main">

  <section id="breadcrumbs" class="breadcrumbs">
      
    </section><!-- End Breadcrumbs -->
  
    <!-- ======= Portfolio Section ======= -->


    
       

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

       <div class="d-flex justify-content-between align-items-center">
          <h2>COVID 19</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>COVID19</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->


    
    <div class="container">
        <div class="row justify-content-center">
        <iframe src="covid-map.php" title="Covid-19 world map" style="width:100%; height:800px" ></iframe>
        <br>
        <p>View the Covid-19 cases of the country you want to travel.</p>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Covid-19 Tracker</div>
                    
                    <div class="card-body">
                    <input type="text" id="countryName" class="form-control" placeholder="Country">
                    <button type="submit" id="submitBtn" class="btn btn-primary btn-block"  name="submit" >Search</button>
                    <div class="row" id="result"> </div>
                    </div>
                </div>
            </div>

        </div>

    </div>    
<script src="assets/js/covid.js"></script>

  </main><!-- End #main -->

 <!-- ======= Footer ======= -->
 <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Info.travel</h3>
              <p>
                Thessaloniki <br>
                Greece<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> infotravele@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://github.com/petroskyrkos/info.travel" target="_blank" class="linkedin"><i class='bx bxl-github' ></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="team.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.php">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Contact</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="covid-g.php">Covid19 info</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> Covid-19</a></li>
              <li><i class="bx bx-chevron-right"></i> Service Numbers</a></li>
              <li><i class="bx bx-chevron-right"></i> Policies</a></li>
              <li><i class="bx bx-chevron-right"></i> Communication Info</a></li>
              <li><i class="bx bx-chevron-right"></i> Book your trip</a></li>
              <li><i class="bx bx-chevron-right"></i> News</a></li>
            </ul>
          </div>
         
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Subscribe to our newsletter and stay updated on the latest developments and special offers!</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Info.travel</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
        Designed by <a href="https://github.com/petroskyrkos/info.travel">PetrElen</a>
      </div>
    </div>

    <?php    
  //include "./login.php";  
			    if (isset($_SESSION['userId'])) {
			        echo '<p id="loggedIn">You are logged in! </p>';
			        header('Location: ./index.php');
			    } else {
			        echo '<p id="loggedOut">You are logged out! </p>';
			    }
			    ?>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

</html>