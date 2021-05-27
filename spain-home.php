<?php include "details/weather.php" ?>
<!DOCTYPE html>
<html>
<title>info-traveler</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">


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

<style>
body,h1,h2,h3,h4,h5,h6,h8{font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
.w3-quarter{ width:350px}
.read-more{
  float:center;
}
h8{
  font-size:40px;
}
 
</style>
<body>

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
             <li data-filter="*" class="filter-active"><a href="spain-home.php">Guide</a></li>    
             <li data-filter="*" ><a href="spain.php">Hotels</a></li>               
             <li data-filter=".filter-app"><a href="spain-blog.php">News</a></li>
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
   
  
    <hr>
<!-- About Section -->
<div class="w3-container w3-padding-32 w3-center">  
  <h3>SPAIN TRAVEL GUIDE</h3><br>
  <img src="assets/img/services/main.jpg" alt="Me" class="w3-image" style="display:block;margin:auto" width="800" height="533">
  <div class="w3-padding-32">
    <h4><b>Travel to Madrid,Spain!</b></h4>
    <h6><i>THE CAPITAL CITY WITH A THOUSAND OPTIONS</i></h6>
    <p>Madrid, cheerful and vibrant at all hours, is famous for being an open city with all kinds of people from anywhere in the world.</p>
    <p>In addition to its famous museums, busy streets dotted with all kinds of shops, restaurants with world cuisine or unbeatable nightlife, Madrid will surprise you with its charming, tranquil historic spots, with traditional and family-run century-old bars where friends meet up for a drink, all kinds of neighbourhoods, and cultural centres that offer an alternative type of tourism. Madrid has an authenticity that is hard to match. It is welcoming and diverse. Madrid is, without a doubt, one of Europe’s most interesting cities. </p>
  </div>
</div>
<hr>

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
 

   

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1400px;margin-top:100px;padding:6px;">
<section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/portfolio/sp1.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog1.php">What to visit</a>
              </h2>

              <div class="entry-meta">
                <ul>
                 <!--
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                -->
                </ul>
              </div>

              <div class="entry-content">
                <p>
                Select from the list or hover over the map to find out about points of interest.
                . Find the best places to visit such as museums,sights and others for your best experience in Madrid.
                </p>
                <div class="read-more">
                  <a href="blog-sights.php">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>
 
          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/portfolio/sp2.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Day trips from to Madrid </a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <!--
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                
                --></ul>
              </div>

              <div class="entry-content">
                <p>
                If you’re reading this, you’ve probably decided to holiday in Madrid, or at least you’re considering it. You’ve made the right choice, because Madrid is a city full of life and culture, with a huge range of things to do and see, fabulous sites like the Royal Palace, and museums that everyone should visit at least once in their lives, such as the Prado.
                </p>
                <div class="read-more">
                  <a href="blog-single.html">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/services/plane.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">How to get there</a>
              </h2>



  
  <div class="entry-content">
                <p>
                Select the means of transport to see how to get there or how to get around at your destination(planes,trains,busses,cars etc). See also information for your transport.
                </p>
                <div class="read-more">
                  <a href="blog-single.html">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/services/watch.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Top 5 Things to See and Do in Madrid</a>
              </h2>

              

              <div class="entry-content">
                <p>
                  Watch the suggestions for the best things to do and see in Madrid...
                </p>
                <div class="read-more">
                  <a href="blog-single.html">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/portfolio/sp3.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Madrid Travel Costs</a>
              </h2>


              <div class="entry-content">
                <p>
                  Check out the costs in Madrid for hotels,hostels,food and others...
                </p>
                <div class="read-more">
                  <a href="blog-single.html">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/services/back.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Backpacking Madrid Suggested Budgets</a>
              </h2>


              <div class="entry-content">
                <p>
                  Learn about the backpacking budgets in Madrid.
                </p>
                <div class="read-more" >
                  <a href="blog-single.html">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>
          </div>  </div>

      <h8>Shows, festivals, sports...</h8>

      <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/services/fest1.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-festivals.php">JANUARY/FEBRUARY</a>
              </h2>

              <div class="entry-meta">
                <ul>
                 
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href=""><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
              
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Check out the festivals in Spain on January-February...
                </p>
                <div class="read-more">
                  <a href="blog-festivals.php">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>
 
          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/services/fest2.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-festivals.php">MARCH/APRIL</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href=""><time datetime="2020-03-01">April 1, 2020</time></a></li>
                
               </ul>
              </div>

              <div class="entry-content">
                <p>
                  Check out the festivals in Spain on March-April...
                </p>
                <div class="read-more">
                  <a href="blog-festivals.php">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
            </div>
            <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/services/fest3.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-festivals.php">MAY/AUGUST</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href=""><time datetime="2020-05-01">May 1, 2020</time></a></li>
                
                </ul>
              </div>

              <div class="entry-content">
                <p>
                Check out the festivals in Spain on May-August...
                </p>
                <div class="read-more">
                  <a href="blog-festivals.php">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry --> </div>
          </div>  </div>
  </section>


  </main>
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


<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
