<?php
echo 'Loged out'
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sailor Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
          <li class="active"><a href="index.php">Home</a></li>

          <li><a href="spain.php">Spain</a></li>
          <li><a href="index.html">England</a></li>
          <li><a href="index.html">Paris</a></li>
          <li><a href="index.html">Switzerland</a></li>
          <li><a href="index.html">Norway</a></li>


          <!-- <li class="drop-down"><a href="#">Countries</a>
            <ul>
              <li><a href="about.html">Spain</a></li>
              <ul>
                <li><a href="team.html">England</a></li>
              </ul>
              <li><a href="team.html">England</a></li>
              <li><a href="testimonials.html">Paris</a></li>
              <li><a href="team.html">Switzerland</a></li>
              <li><a href="team.html">Norway</a></li>

              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li>

          <li><a href="services.html">Services</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="pricing.html">Pricing</a></li>
          <li><a href="blog.html">Blog</a></li> -->
          <li><a href="contact.html">Contact</a></li>

        </ul>

      </nav><!-- .nav-menu -->

      <a href="login.php" class="get-started-btn ml-auto">Sign in</a>
      <a href="register.php" class="get-started-btn ml-auto">Sign up</a>
      <?php
                if (isset($_SESSION['userId'])) {
                    echo '<form action="includes/logout.inc.php" method="post" >
                    <button class="btn btn-outline-success" type="submit" name="logout-submit" id="logout">Logout</button>
                </form>';
                }
        ?>
      <p id="loggedIn"> </p>
    </div>
  </header><!-- End Header -->
</body>
</html>