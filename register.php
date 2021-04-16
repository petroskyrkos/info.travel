<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>info.travel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/my-login.css">
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="card fat">
						<div class="brand">
							<img src="assets/img/logo.png" alt="logo">
						</div>
						<div class="card-body">
							<h4 class="card-title">Register</h4>
							<form method="POST" class="my-login-validation" novalidate="" action="./Includes/signup.inc.php">
							<?php
								if(isset($_SESSION['userId'])){
									echo '<form action="includes/logout.inc.php" method="post" >
										<button class="btn btn-outline-success" type="submit" name="logout-submit" id="logout">Logout</button>
										</form>';
								} else {
									echo '<div class="form-group">
									<label for="name">Name</label>
									<input id="name" type="text" class="form-control" name="uid" required autofocus>
									<div class="invalid-feedback">
										What is your name?
									</div>
								</div>

								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="mail" required>
									<div class="invalid-feedback">
										Your email is invalid
									</div>
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control" name="pwd" required data-eye>
									<div class="invalid-feedback">
										Password is required
									</div>
								</div>
								<div class="form-group">
									<label for="password">Repeat Password</label>
									<input id="password" type="password" class="form-control" name="pwd-repeat" required data-eye>
									<div class="invalid-feedback">
										Repeat your Password
									</div>
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="agree" id="agree" class="custom-control-input" required="">
										<label for="agree" class="custom-control-label">I agree to the <a href="#">Terms and Conditions</a></label>
										<div class="invalid-feedback">
											You must agree with our Terms and Conditions
										</div>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block" name="signup-submit">
										Register
									</button>
									<button onclick="window.location = <?php echo $login_url; ?>" type="button" class="btn btn-primary btn-block">Login with Google</button>
									
									<button class="btn btn-primary btn-block" style="height:50px;" onclick="window.location = index.php" >Return to Homepage</button>
								</div>
								<div class="mt-4 text-center">
									Already have an account? <a href="index.html">Login</a>
								</div>';
								}
							?>
								
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2021 &mdash; PetrElen 
					</div>
				</div>
			</div>
		</div>
	</section>

	
	<script src="js/my-login.js"></script>
</body>
</html>