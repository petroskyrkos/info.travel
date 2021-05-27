<?php include "details/weather.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>info-travel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logots.png" rel="icon">
  <link href="assets/img/logots.png" rel="apple-touch-icon">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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
<!-- End Header -->

  <main id="main">
  <section id="breadcrumbs" class="breadcrumbs">
 
 </section><!-- End Breadcrumbs -->
   <section id="portfolio" class="portfolio">
       <div class="container">
 
         <div class="row">
           <div class="col-lg-12 d-flex justify-content-center">
             <ul id="portfolio-flters">
             <li data-filter="*"><a href="spain-home.php">Guide</a></li>    
             <li data-filter="*" ><a href="spain.php">Hotels</a></li>               
             <li data-filter=".filter-app" class="filter-active"><a href="spain-blog.php">News</a></li>
               <li data-filter=".filter-card"><a href="spain-covid.php">Covid 19</a></li>
               <li data-filter=".filter-web" ><a href="spain-services.php">Services </a></li>              
               <li data-filter=".filter-web"><a href="spain-trans.php">Translator </a></li>              
               <li data-filter=".filter-web"><a href="spain-pricing.php">Packages </a></li> 
               <li data-filter=".filter-web"><a href="spain-todo.php">Things to do</a></li> 
               <li data-filter=".filter-web"><a href="spain-testimonials.php">Regulations </a></li>
             </ul>
           </div>
         </div>
 
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>
          <ol>
            <li><a href="index.php" >Home</a></li>
            <li>Blog</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

   
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">
      <form class="search" action="" >
        <input class="input" type="text"> 
        <input type="submit" value="Search"/>

      </form>
<br>
      <div class="container">
      

           
<div class="bottomright">
            <div class="weather">
                <div class="current">
                    <div class="info">
                        <div>&nbsp;</div>
                        <div class="city"><?php echo $city_name ?></div>
                        <div class="temp"><?php echo ''.round($temperature_inC);?>&deg; <small>C</small></div>
                        <div class="wind"><?php echo $temp_weather; ?> </div>
                        <div>&nbsp;</div>
                    </div>
                    <div class="icon">
                        
                        <!--<span class="iconify" data-icon="wi-day-sunny" data-inline="false"></span>'; -->
                        
                    </div>
                </div>
                <div class="future">
                    <div class="day">
                        <h3>
                        <?php 
                         echo ''.date("l");
                         ?>
                         </br>
                        <?php 
                        date_default_timezone_set("Europe/madrid");
                        echo ''.date("Y/m/d");
                        ?>
                        </br>
                        <?php
                        echo "". date("h:i:sa");
                        ?></h3>

                        
                    </div>
                  </div>
              
            </div>
       
</div>
 
<iframe src="news.php" title="Covid-19 world map" style="width:100%; height:700px" ></iframe>


        </div>

        <div class="blog-pagination" data-aos="fade-up">
          <ul class="justify-content-center">
            <li class="disabled"><i class="icofont-rounded-left"></i></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
          </ul>
        </div>

      </div>
    </section><!-- End Blog Section -->

  


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