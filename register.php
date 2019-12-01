<?php include('server.php') ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v4 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<div class="image-holder">
					<img src="images/registration-form-4.jpg" alt="">
				</div>
				<form method="post" action="register.php">
						<?php include('errors.php'); ?>
					<h3>Sign Up</h3>
					<div class="form-holder active">
						<input type="text" name="username" placeholder="name" class="form-control">
					</div>
					<div class="form-holder">
						<input type="email"  name="email" placeholder="email"  class="form-control">
					</div>
					<div class="form-holder">
						<input type="password" name="password_1" placeholder="Password" class="form-control" style="font-size: 15px;">
					</div><div class="form-holder">
							<input type="password" name="password_2" placeholder="Password" class="form-control" style="font-size: 15px;">
						</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" checked> I agree all statement in <a href="#">Terms & Conditions</a>
							<span class="checkmark"></span>
						</label>
					</div>
					<div class="form-login">
						<button  name="reg_user">Sign up</button>
						<p>Already Have account? <a href="login.php">Login</a></p>
					</div>
				</form>
			</div>
		</div>

		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>