<!DOCTYPE html>
<html>

<head>
	<title>News Api</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/materialize.min.css">
	<style type="text/css">
		#loader {
			height: 100vh;
			align-items: center;
			display: flex;
			justify-content: center;

		}

		.progress {
			display: none;
		}

		.errorMsg {
			font-size: 34px;
			height: 100vh;
			align-items: center;
			display: flex;
			justify-content: center;
		}
	</style>
</head>

<body>


	<div class="container">
		
		<div class="row">
			<div id="newsResults"></div>
		</div>

		<div id="loader">
			<div class="progress">
				<div class="indeterminate"></div>
			</div>
		</div>

	</div>

	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/materialize.min.js"></script>
	<script src="assets/js/app.js"></script>
</body>

</html>