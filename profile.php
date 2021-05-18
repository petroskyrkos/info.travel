<?php
   session_start();

  include 'Includes/dbconnect.php';
  $id=$_SESSION['userId'];
  $query=mysqli_query($mysqli,"SELECT * FROM users where id='$id'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
  ?>
<!DOCTYPE html>
<html>
<title>info.travel</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blog - Sailor Bootstrap Template</title>
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
  <link href="assets/css/calendar.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


<style>
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="w3-theme-l5">
<header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo"><a href="index.html">Sailor</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <?php include "header.php";
       ?>

      <a href="index.php" class="get-started-btn ml-auto">Get Started</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
      </div>
    </section><!-- End Breadcrumbs -->

    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Profile</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Profile</li>
          </ol>
        </div>
      </div>
    </section>
<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
    </div>
  </div>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
   <img src="assets/img/avatar2.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar">';
  </a>
 </div>
</div>


<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center"><br>My Profile</h4>
         <p class="w3-center">
         <?php
         $query = "SELECT * FROM users WHERE id = '$id'";
         $result = mysqli_query($mysqli, $query);
         $row = mysqli_fetch_array($result);

         if ($row['gender'] = 'female') {
          echo '<img src="assets/img/avatar2.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>';
         } else {
          echo '<img src="assets/img/avatar1.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>';
         } ?> 
         <hr>  
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i><?php echo $row['full_name']?></p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i><?php echo $row['address']?></p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i><?php echo $row['age']?></p>
         
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i>Profile Settings</button>
          <div id="Demo1" class="w3-hide w3-container">
            <p>Edit your profile </p>
            <button type="button" class="w3-button w3-theme"><a href="profile-input.php" style="color:white"><i class="fa fa-pencil"></i>Edit profile</a></button> 
            <hr>
          </div>
          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Events</button>
          <div id="Demo2" class="w3-hide w3-container">
                <ul class="w3-ul w3-card-4">
                  <li class="w3-bar">
                    <span class="w3-bar-item w3-button w3-white w3-xlarge w3-right"></span>
                      <span class="w3-large"><b>15/6/2021 07:00</b></span><br>
                      <span>Flight for Spain at Thessaloniki Airport</span>
                  </li>
                  <li class="w3-bar">
                    <span class="w3-bar-item w3-button w3-white w3-xlarge w3-right"></span>
                      <span class="w3-large"><b>16/6/2021 09:00</b></span><br>
                      <span>Booked a room at Four Seasons Hotel Madrid</span>
                  </li>
                  <li class="w3-bar">
                    <span class="w3-bar-item w3-button w3-white w3-xlarge w3-right"></span>
                            <span class="w3-large"><b>20/6/2021 22:00</b></span><br>
                            <span>Go to Buen Retiro Park Tour</span>
                        </li>
                      </ul>
              </div>
          <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
          <div id="Demo3" class="w3-hide w3-container">
         <div class="w3-row-padding">
         <br>
           <div class="w3-half">
             <img src="assets/img/portfolio/e5.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="assets/img/portfolio/sw4.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="assets/img/portfolio/sw2.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="assets/img/portfolio/fr3.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="assets/img/portfolio/ny.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="assets/img/portfolio/china.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
         </div>
         </div>
         <button onclick="myFunction('Demo4')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class='bx bxs-backpack'></i>Packing List</button>
          <div id="Demo4" class="w3-hide w3-container">
                            <div class="card-body">
                                <form action="javascript:void(0);">
                                    <input type="text" class="form-control add-task" placeholder="New Task...">
                                </form>
                                <ul class="nav nav-pills todo-nav">
                                    <li role="presentation" class="nav-item all-task active"><a href="#" class="nav-link">All</a></li>
                                    <li role="presentation" class="nav-item active-task"><a href="#" class="nav-link">Active</a></li>
                                    <li role="presentation" class="nav-item completed-task"><a href="#" class="nav-link">Completed</a></li>
                                  </ul>
                                <div class="todo-list">
                                    <div class="todo-item">
                                        <div class="checker"><span class=""><input type="checkbox"></span></div>
                                        <span>Passport</span>
                                        <a href="javascript:void(0);" class="float-right remove-todo-item"><i class="icon-close"></i></a>
                                    </div>
                                    <div class="todo-item">
                                        <div class="checker"><span class=""><input type="checkbox"></span></div>
                                        <span>Headphones</span>
                                        <a href="javascript:void(0);" class="float-right remove-todo-item"><i class="icon-close"></i></a>
                                    </div>
                                    
                                    <div class="todo-item">
                                        <div class="checker"><span class=""><input type="checkbox"></span></div>
                                        <span>Clothes</span>
                                        <a href="javascript:void(0);" class="float-right remove-todo-item"><i class="icon-close"></i></a>
                                    </div>
                                    <div class="todo-item">
                                        <div class="checker"><span><input type="checkbox"></span></div>
                                        <span>Credit Card</span>
                                        <a href="javascript:void(0);" class="float-right remove-todo-item"><i class="icon-close"></i></a>
                                    </div>
                                    <div class="todo-item">
                                        <div class="checker"><span><input type="checkbox"></span></div>
                                        <span>Tablet-Laptop</span>
                                        <a href="javascript:void(0);" class="float-right remove-todo-item"><i class="icon-close"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
      <br>
      
      <!-- Interests --> 
      <div class="w3-card w3-round w3-white w3-hide-small">
        <div class="w3-container">
          <p>Interests</p>
          <p>
            <span class="w3-tag w3-small w3-theme-d5">News</span>
            <span class="w3-tag w3-small w3-theme-d4"><?php echo $row['hobby']?></span>
            <span class="w3-tag w3-small w3-theme-d3">Labels</span>
            <span class="w3-tag w3-small w3-theme-d2">Games</span>
            <span class="w3-tag w3-small w3-theme-d1">Friends</span>
            <span class="w3-tag w3-small w3-theme">Games</span>
            <span class="w3-tag w3-small w3-theme-l1">Friends</span>
            <span class="w3-tag w3-small w3-theme-l2">Food</span>
            <span class="w3-tag w3-small w3-theme-l3">Design</span>
            <span class="w3-tag w3-small w3-theme-l4">Art</span>
            <span class="w3-tag w3-small w3-theme-l5">Photos</span>
          </p>
        </div>
      </div>
      <br>
      
      <!-- Alert Box -->
      <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
        <p><strong>Hey!</strong></p>
        <p>You have a scheduled trip to Spain on <b>Tuesday 1/6/2021</b>! Get prepared for your amazing trip!!</p>
      </div>
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
    
     <!-- <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">Edit your profile</h6>
              <p contenteditable="true" class="w3-border w3-padding"></p>
              <button type="button" class="w3-button w3-theme"><i class="fa fa-pencil"></i>  Post</button> 
            </div>
          </div>
        </div>
      </div> -->
      
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="assets/img/users/user1.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity">20/5/2021</span>
        <h4>Luci Christian </h4><br>
        <hr class="w3-clear">
        <p>I will never forget all these beautifull moments we had in Berne,Switzerland!!!We will do it again soon!!!
        Love you  </p>
          <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half">
              <img src="assets/img/slide/nature.jpg" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
            </div>
            <div class="w3-half">
              <img src="assets/img/slide/nature2.jpg" style="width:100%" alt="Nature" class="w3-margin-bottom">
          </div>
        </div>
        <!--<button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
        -->
      </div>
      
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="assets/img/users/user2.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity">15/5/2021</span>
        <h4>Jane Doe</h4><br>
        <hr class="w3-clear">
        <p>Are you ready for our trip to Spain?? I'm packing my things up already!!!Can't wait to go there and have so much fun together!!</p>
      </div>  

      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="assets/img/users/user3.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity">1/1/2021</span>
        <h4>Angie Jane</h4><br>
        <hr class="w3-clear">
        <p>Have you seen this?</p>
        <img src="assets/img/slide/nature3.jpg" style="width:100%" class="w3-margin-bottom">
        <p>I'm trying to find where this place is!!It's so beautifull!!Our next destination is there for sure.</p>
      </div> 
      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="w3-col m2">
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p><b>Upcoming Events:</b></p>
          <img src="assets/img/slide/nature4.jpg" alt="Forest" style="width:100%;">
          <p><strong>Holiday to Greece</strong></p>
          <p>Friday 15:00 2/6/2021</p>
          <p><button class="w3-button w3-block w3-theme-l4"><a href="pricing.php" style="color:black">More info</a></button></p>
        </div>
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p></p>
          <img src="assets/img/hotels/2.jpg" alt="Avatar" style="width:50%"><br>
          <span>Did you like your destination on our hotel?</span>
          <div class="w3-row w3-opacity">
            <div class="w3-half">
              <button id="show" onclick="myFunction()" class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
            </div>
            <div class="w3-half">
              <button id="show2" onclick="myFunction()" class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
            </div>
            <div class="w3-full">
              <script>$document()</script>
              <p id="btn2"><b>Thank you for rating us! </b></p>
            </div>
          </div>
        </div>
      </div>
      <br>
      

      <div class="w3-card w3-round w3-white w3-padding-32 w3-center">
        <div class="w3-container">
         <h3>Friends List</h3>
         <hr>
         <ul class="friend-list clearfix">
                            <li>
                                    <div class="friend-img"><img src="assets/img/users/user2.jpg" alt="" /></div>
                                    <div class="friend-info">
                                        <h4>Jane Doe</h4>
                                        <p>392 friends</p>
                                    </div>
                            </li>
                            <li>
                                    <div class="friend-img"><img src="assets/img/users/user3.jpg" alt="" /></div>
                                    <div class="friend-info">
                                        <h4>Angie Jane</h4>
                                        <p>128 friends</p>
                                    </div>
                            </li>
                            <li>
                                    <div class="friend-img"><img src="assets/img/users/user4.jpg" alt="" /></div>
                                    <div class="friend-info">
                                        <h4>Androkles Allen</h4>
                                        <p>12 friends</p>
                                    </div>
                            </li>
                            <li>
                                    <div class="friend-img"><img src="assets/img/users/user5.jpg" alt="" /></div>
                                    <div class="friend-info">
                                        <h4>Ithamar Silvio</h4>
                                        <p>1,923 friends</p>
                                    </div>
                            </li>
                      </ul>
        </div>
      </div>
      <br>

      <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
      <div class="w3-container">
        <h3>Ready for a new trip??</h3>
         <p>See our trip packages that are running right now</P>
         <p><button class="w3-button w3-block w3-theme-l4"><a href="pricing.php" style="color:black">See here</a></button></p>
        </div>
      </div>
    
      

      
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>
</section><!-- End Blog Section -->

</main>

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

  <script src="assets/js/calendar.js"></script>

  <script>
// Accordion
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme-d1";
  } else { 
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-theme-d1", "");
  }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>


<script>
$(document).ready(function(){
    $("#btn2").hide();
  });
  $("#show").click(function(){
    $("#btn2").show();
  });
  $("#show2").click(function(){
    $("#btn2").show();
  });

</script>

</body>

</html>
 