<?php
	require_once('config.php');
	require_once('controller.Class.php');
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>info.traveler</title>
	<link rel="shortcut icon" type="image" href="assets/img/logot.jpg">
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
						<div class="card-body" >
							<h4 class="card-title">Login</h4>
							<form method="POST" class="my-login-validation" novalidate="" action="./Includes/login.inc.php">
								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="mailuid" type="email" class="form-control" name="mailuid" value="" required autofocus>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>

								<div class="form-group">
									<label for="password">Password
										<a href="forgot.html" class="float-right">
											Forgot Password?
										</a>
									</label>
									<input id="pwd" type="password" class="form-control" name="pwd" required data-eye>
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="remember" id="remember" class="custom-control-input">
										<label for="remember" class="custom-control-label">Remember Me</label>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block"  name="login-submit" >
										Login
									</button>
								</div>
								<div class="mt-4 text-center">
									Don't have an account? <a href="register.html">Create One</a>
								</div>
							</form>
						</div>
					</div>
					<button onclick="window.location = '<?php echo $login_url; ?>'" type="button" class="btn btn-danger">Login with Google</button>

					<div class="footer">
						Copyright &copy; 2021 &mdash; PetrElen1
					</div>
				</div>
			</div>
		</div>
	</section>

	
	<script src="js/my-login.js"></script>
</body>
</html>
