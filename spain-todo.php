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
  <link href="assets/css/blog.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Sailor - v2.3.1
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

<style>

.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>

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
               <li data-filter=".filter-web"><a href="spain-pricing.php">Packages </a></li>              
               <li data-filter=".filter-web"><a href="spain-trans.php">Translator </a></li>              
               <li data-filter=".filter-web" class="filter-active"><a href="spain-todo.php">Things to do</a></li> 
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
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
    
    <div id="myBtnContainer">
          <button class="btn active" onclick="filterSelection('all')"> Show all</button>
          <button class="btn" onclick="filterSelection('cars')"> Art</button>
          <button class="btn" onclick="filterSelection('animals')"> Food</button>
          <button class="btn" onclick="filterSelection('fruits')"> Entertainment</button>
        </div>
          </br>

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up"  >

            <article class="entry" >

              <div class="entry-img">
                <img src="assets/img/services/arts.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="">Visit the colourful town of Villajoyosa</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="">Art</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href=""><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                 Villajoyosa or La Vila Joiosa is a small town in Spain’s coastal area of Costa Blanca. The city prides itself with colorful houses lined along the shore of the Mediterranean Sea, making it a trendy destination for many travelers.  Touring this cute little town is possible as a day trip from Alicante, another coastal city of Costa Blanca area. You can get to Villajoyosa either by renting a car, a bus or by a tram from Alicante.
                </p>
                <div class="read-more">
                  <a href="">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->

          </div>
   
          <div class=" col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/services/tv.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Traditional Flamenco Show Ticket</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">Show</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Ad impedit qui officiis est in non aliquid veniam laborum. Id ipsum qui aut. Sit aliquam et quia molestias laboriosam. Tempora nam odit omnis eum corrupti qui aliquid excepturi molestiae. Facilis et sint quos sed voluptas. Maxime sed tempore enim omnis non alias.
                </p>
                <div class="read-more">
                  <a href="blog-single.html">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->

          </div>
         
          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up" id="food">
            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/services/r.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Pintxos bar crawl in San Sebastian</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="" >Food</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  The Basque region is especially famous for its food and eating is an intrinsic part of the region’s culture. In the stunning seaside city of San Sebastian, a bar crawl of pintxos bars in the Old Town is a gourmet experience you’ll always remember.                </p>
                <div class="read-more">
                  <a href="blog-single.html">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up" id="Art">
            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/services/arts2.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Discover the street art in Madrid</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                One of the best things to do in Spain is visiting Madrid. It is a vibrant city, full of life and with so many activities and things to see, you’ll want to stay a few days to explore the city. One of them is a walking tour to discover the best street art, definitely, one of the fun things to do in Madrid that will surprise you. If you like street art, do not hesitate to visit the Malasaña neighborhood, one of the most hipsters and unique neighborhoods in Madrid. Just walking around there you can watch several graffiti on the facades                </p>
                <div class="read-more">
                  <a href="blog-single.html">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

         
          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up" id="food">
            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/services/r2.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Barcelona Food Tour</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">Food</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                If you want an authentic take on the Barcelona food scene, then you must go on a food tour with Nuria, a Barcelona local. Unlike other food tours, which are created by expats who have only been living there for a few years, Nuria has truly special knowledge of the food scene in Barcelona as she’s lived there for over 30 years.                </p>
                <div class="read-more">
                  <a href="blog-single.html">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up" >
            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/services/arts3.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Enjoy the Palafrugell carnival</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                 Palafrugell is located on the Costa Brava, a glorious stretch of coastline north of Barcelona. Each May, the town hosts its Pentecostal carnival with huge floats, live bands and processions of people filling the streets. The event takes place along the central streets of the town and it feels as if half the population is taking part. Sweets are thrown to waiting children below and there’s a wonderful party atmosphere as confetti floats down onto the crowds.                </p>
                <div class="read-more">
                  <a href="blog-single.html">Read More</a>
               
              </div>

            </article><!-- End blog entry -->
          </div>
         
        </div>  
      

        <div class="blog-pagination" data-aos="fade-up">
          <ul class="justify-content-center">
            <li class="disabled"><i class="icofont-rounded-left"></i></li>
            <li class="active"><a href="#">1</a></li>
            <li ><a href="#">2</a></li>
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

  <script>
        filterSelection("all")
        function filterSelection(c) {
          var x, i;
          x = document.getElementsByClassName("filterDiv");
          if (c == "all") c = "";
          for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
          }
        }

        function w3AddClass(element, name) {
          var i, arr1, arr2;
          arr1 = element.className.split(" ");
          arr2 = name.split(" ");
          for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
          }
        }

        function w3RemoveClass(element, name) {
          var i, arr1, arr2;
          arr1 = element.className.split(" ");
          arr2 = name.split(" ");
          for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
              arr1.splice(arr1.indexOf(arr2[i]), 1);     
            }
          }
          element.className = arr1.join(" ");
        }

        // Add active class to the current button (highlight it)
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
          btns[i].addEventListener("click", function(){
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
          });
        }
    </script>


</body>
</html>
