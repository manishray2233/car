<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>loginCss/images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>loginCss/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>loginCss/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>loginCss/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>loginCss/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>loginCss/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>loginCss/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>loginCss/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>loginCss/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>loginCss/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>loginCss/css/main.css">
	<!--===============================================================================================-->
	<style>
		#password_error_message {
			margin: -19px 0px 0px 0px;
		}

		#password {
			margin: 19px 0px 0px 0px;
		}

		#userDiv {
			margin: 0px 0px 0px 0px;
		}
	</style>
</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo base_url(); ?>loginCss/images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" name="form1" action="<?php echo base_url('index.php/Login/post_validate') ?>" method="POST" autocomplete="off" onsubmit="return validateForm()">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate="Enter username" id="userDiv">
						<input class="input100" type="text" name="username" placeholder="Username" id="username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<p id="user_error_message" style="color: red;">
						<?php echo form_error('username'); ?>


					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password" id="password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<p id="password_error_message" style="color: red;">
						<?php echo form_error('pass'); ?>
                        <?php if (isset($error)) echo $error; ?>


					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>loginCss/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>loginCss/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>loginCss/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url(); ?>loginCss/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>loginCss/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>loginCss/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>loginCss/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>loginCss/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>loginCss/js/main.js"></script>
	<script>
		function validateForm() {
			var userName = document.getElementById("username").value;

			var password = document.getElementById("password").value;
			var userNameBox = document.getElementById("username");
			var passwordBox = document.getElementById("password");
			var userError = document.getElementById("user_error_message");
			var passwordError = document.getElementById("password_error_message");
			var passwordFlag, userNameFlag;
			// alert(userName);

			if (userName == "") {
				userError.innerText = "User name cannot be empty !!!";
				passwordError.innerHTML = "";

				userNameFlag = false;
				userNameBox.focus();
				return false;
			} else if (!(userName.length <= 15 && userName.length >= 5)) {
				userError.innerHTML = "User name must contain 5 to 15 characters !!!";
				passwordError.innerHTML = "";

				userNameFlag = false;
				userNameBox.focus();
				return false;
			} else if ((/[0-9]+/.test(userName))) {
				userError.innerHTML = "Please dont't use Numbers !!!";
				passwordError.innerHTML = "";

				passwordFlag = false;
				userNameBox.focus();
				return false;
			} else if (!(/[a-z]+/.test(userName))) {
				userError.innerHTML = "Please use a Small case letter also !!!";
				passwordError.innerHTML = "";

				userNameFlag = false;
				userNameBox.focus();
				return false;
			} else if (!(/[A-Z]+/.test(userName))) {
				userError.innerHTML = "Please use a Upper case letter also !!!";
				passwordError.innerHTML = "";

				userNameFlag = false;
				userNameBox.focus();
				return false;
			} else {
				userError.innerHTML = "";
				userNameFlag = true;
			}

			if (password == "") {
				passwordError.innerHTML = "Password can not be empty !!!";
				passwordFlag = false;
				passwordBox.focus();
				return false;
			} else if (!(password.length <= 15 && password.length >= 5)) {
				passwordError.innerHTML = "Password must contain 5 to 15 characters !!!";
				passwordFlag = false;
				passwordBox.focus();
				return false;
			} else if (!(/[@#$%^&*]/.test(password))) {
				passwordError.innerHTML = "Please use a Special character !!!"
				passwordFlag = false;
				passwordBox.focus();
				return false;
			} else if (!(/[0-9]+/.test(password))) {
				passwordError.innerHTML = "Please use a Number also !!!";
				passwordFlag = false;
				passwordBox.focus();
				return false;
			} else if (!(/[a-z]+/.test(password))) {
				passwordError.innerHTML = "Please use a Small Case letter also !!!";
				passwordFlag = false;
				passwordBox.focus();
				return false;
			} else if (!(/[A-Z]+/.test(password))) {
				passwordError.innerHTML = "Please use a Upper Case letter also !!!";
				passwordFlag = false;
				passwordBox.focus();
				return false;
			} else {
				passwordError.innerHTML = "";
				passwordFlag = true;
			}

			if (userNameFlag == true && passwordFlag == true) {



			} else {
				return false;
			}
		}
	</script>
</body>

</html>