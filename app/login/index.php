<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link href="images/wolfhead-10.png" rel="icon">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../homepage/css/style.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>
	<?php
	require_once '../template/navbar.php';
	$navbar = new navbar();
	?>
	<!-- Menampilkan Alert -->
	<div class="limiter">
		<div class="container-login100">
			<div class="border wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/wolfhead-10.png" alt="IMG">
				</div>
				<div class="dash-border">
					<h1>|</h1>
					<h1>|</h1>
					<h1>|</h1>
					<h1>|</h1>
					<h1>|</h1>
					<h1>|</h1>
					<h1>|</h1>
				</div>
				<form id="login-form" action="php/login.php" method="POST" class="login100-form validate-form">
					<span class="login100-form-title">
						Member Login
					</span>
					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" id="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" id="pass" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<script>
						if (window.location.hash == '#alert') {
							var alerttext = document.createElement("div");
							alerttext.setAttribute("class", "alert");
							alerttext.setAttribute("class", "alert-danger");
							alerttext.setAttribute("role", "alert");
							alerttext.appendChild(document.createTextNode("Email / Password Invalid"));
							document.getElementById("login-form").appendChild(alerttext);
						}
					</script>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn " type="submit" name="login">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>

					<div class="text-center p-t-136">

					</div>
				</form>
			</div>
		</div>
	</div>

	<?php
	require_once '../template/aboutus.php';
	$aboutus = new aboutus();
	?>
	</footer>



	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>


</body>

</html>