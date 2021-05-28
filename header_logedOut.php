<?php
echo 'Loged out'
?>
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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      
      
      <a href="index.php" class="logo"><img src="assets/img/logo.png" alt="logo" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">

        <ul>
          <li><a href="index.php">Home</a></li>
       
             <!-- <li class="drop-down"><a href="#">Countries</a>
                <ul>
                  
                      <li><a href="spain.php">Spain</a></li>
                      
                      <li><a href="team.html">England</a></li>
                      <li><a href="testimonials.html">Paris</a></li>
                      <li><a href="team.html">Switzerland</a></li>
                      <li><a href="team.html">Norway</a></li>
                </ul>
              </li> -->
            
         
          <li><a href="services.php">Services</a></li>
          <li><a href="covid-g.php">Covid info</a></li>
          <li><a href="team.php">Our Team</a></li>
          <li><a href="pricing.php">Pricing</a></li>
          <!-- <li><a href="about.php">About Us</a></li> -->
          <li><a href="contact.php">Contact</a></li>
          
          
         
        </ul>

      </nav>
      

      <a href="login.php" class="get-started-btn ml-auto">Sign in</a>
      <a href="register.php" class="get-started-btn ml-auto">Sign up</a>
      <?php
                if (isset($_SESSION['userId'])) {
                    echo '<form action="includes/logout.inc.php" method="post" >
                    <button class="btn btn-outline-success" type="submit" name="logout-submit" id="logout">Logout</button>
                </form>';
                }
                if(isset($_COOKIE['id'])) {
                  echo '<form action="includes/logout.inc.php" method="post"  >
                  <button class="get-started-btn ml-auto"  type="submit" name="logout-submit" id="logout">Logout</button>
              </form>';
              }
        ?>
      <p id="loggedIn"> </p>
    </div>
  </header><!-- End Header -->
</body>
</html>