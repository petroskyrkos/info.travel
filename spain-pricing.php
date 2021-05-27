<?php include "details/weather.php" ?>

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
             <li data-filter=".filter-app"><a href="spain-blog.php">News</a></li>
               <li data-filter=".filter-card"><a href="spain-covid.php">Covid 19</a></li>
               <li data-filter=".filter-web" ><a href="spain-services.php">Services </a></li>              
               <li data-filter=".filter-web"><a href="spain-trans.php">Translator </a></li>
               <li data-filter=".filter-web" class="filter-active"><a href="spain-pricing.php">Packages </a></li>              
               <li data-filter=".filter-web"><a href="spain-todo.php">Things to do</a></li> 
               <li data-filter=".filter-web"><a href="spain-testimonials.php">Regulations </a></li>
             </ul>
           </div>
         </div>
 
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Packages</h2>
          <ol>
            <li><a href="index.php" >Home</a></li>
            <li>Packages</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

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

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="box">
              <h3>2 nights in Madrid</h3>
              <h4><sup>$</sup>400<span></span></h4>
              <ul>
                <li>2 nights in Madrid</li>
                <li>Tour to Royal Palace and Main Square</li>
                <li>Breakfast included</li>
                <li class="na">Coach</li>
                <li class="na">Flight</li>
                <br>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              <h3>3 nights in Barcelona</h3>
              <h4><sup>$</sup>819<span></span></h4>
              <ul>
                <li>Flight into Barcelona</li>
                <li>Hotel for 3 nights in Barcelona</li>
                <li>Tours to sights</li>
                <li>Coach</li>
                <li>Breakfast Included</li>
                <br>
                <br>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <h3>3 days in Madrid</h3>
              <h4><sup>$</sup>929<span></span></h4>
              <ul>
                <li>Flight into Madrid</li>
                <li>Hotel for 3 nights in Madrid</li>
                <li>Tours to sights</li>
                <li>Coach</li>
                <li>Breakfast Included</li>
                <br>
                <br>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <span class="advanced">Exclusive</span>
              <h3>Ultimate</h3>
              <h4><sup>$</sup>1249<span></span></h4>
              <ul>
                <li>VIP tours</li>
                <li>5 star hotels</li>
                <li>Flight from Madrid to Barcelona</li>
                <li>7 nights in Madrid and 7 in Barcelona</li>
                <li>VIP coach</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </div>

        <div class="row faq-item d-flex align-items-stretch">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>Is Spain expensive?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Spain still offers great value compared to most Europe. The best thing is that you can still travel on a budget and visit, just depends on the season and where in Spain you want to travel.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>When is the best time to visit Spain?</h4>
          </div>
          <div class="col-lg-7">
            <p>
             It depends on where you want to go. Southern Spain is sunny all year round but expect melting hot temperatures during July and August. Northern Spain’s weather is excellent in the summer and can be moody the rest of the year. But in general, spring or fall tends to be ideal. If you are thinking on skiing, check December through Easter week for good snow in most resorts. Or visit the Canary Islands for an almost all year sunny weather.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>How do i get around Spain?Can i drive by myself?</h4>
          </div>
          <div class="col-lg-7">
            <p>
            The answer depends on where you want to go. We always tell you how to get to the destinations we write about, so you can choose wisely. Most top destinations are connected between them by train, bus and/or plane. Just take into account that regular trains are not that fast (fast ones are marked as AVE) and buses sometimes are limited when visiting under-the-radar destinations.

            If you are planning to drive in Spain, we recommend obtaining an international driving permit prior to your arrival in Spain.            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>Is a Visa required?</h4>
          </div>
          <div class="col-lg-7">
            <p>
            No visas are required for most Americans but tourists can only stay in the Schenghen area up to 180 days. Tourists cannot work in Spain, but they allow you to study as long as you don’t stay over 180 days.

            For European citizens: Spain belongs to Schenghen area.

            If you are from another country, please ask your local government or contact the Spanish Embassy.            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>I don't speak Spanish.Is that a problem?</h4>
          </div>
          <div class="col-lg-7">
            <p>
            Learning a few basic words of Spanish is always handy. Most Spaniards don’t speak English at all, with the exception of the most touristic areas. Does it mean that you won’t find anybody to talk to? Absolutely not! Spaniards are open and easygoing, the younger generations study English at school and there are lots of foreigners here that will surely be glad to help you out. 
            
            And…you can check out our translator: <a href="spain-trans.php"><b>HERE</b> </a>    
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

      </div>
    </section><!-- End Frequently Asked Questions Section -->

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
                <strong>Email:</strong> infotraveler@gmail.com<br>
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
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
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
  </footer>

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