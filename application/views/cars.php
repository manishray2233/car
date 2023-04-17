<!DOCTYPE HTML>
<html>

<head>
	<title>PHPJabbers.com | Free Car Dealer Website Template</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/noscript.css" />
	</noscript>
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header" class="alt">
			<a href="<?php echo base_url('index.php/Index') ?>" class="logo"><strong>Car Dealer</strong> <span>Website</span></a>
			<nav>
				<a href="#menu">Menu</a>
			</nav>
		</header>

		<!-- Menu -->
		<nav id="menu">
			<ul class="links">
				<li> <a href="<?php echo base_url('index.php/login') ?>"> Login </a> </li>

				<li class="active"> <a href="<?php echo base_url('index.php/Index') ?>">Home </a> </li>

				<li> <a href="<?php echo base_url('index.php/Index/car') ?>">Search Car</a> </li>

				<li> <a href="<?php echo base_url('index.php/Index/about') ?>">About Us</a> </li>

				<li> <a href="<?php echo base_url('index.php/Index/blog') ?>">Blog</a> </li>

				<li><a href="<?php echo base_url('index.php/Index/contact') ?>">Contact Us</a></li>

				<li class="dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>

					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url('index.php/Index/team') ?>">Team</a></li>
						<li><a href="<?php echo base_url('index.php/Index/testimonials') ?>">Testimonials</a></li>
						<li><a href="<?php echo base_url('index.php/Index/faq') ?>">FAQ</a></li>
						<li><a href="<?php echo base_url('index.php/Index/terms') ?>">Terms</a></li>
					</ul>
				</li>
			</ul>
		</nav>

		<!-- Main -->
		<div id="main" class="alt">

			<!-- One -->
			<section id="one">
				<div class="inner">
					<header class="major">
						<h1>Cars</h1>
					</header>
				</div>
			</section>

			<section>
				<div class="inner">
					<form method="post" action="#">
						<div class="fields">
							<div class="field quarter">
								<label>Car Name :-</label>

								<select>
									<option value="" selected></option>

									<?php
									foreach ($model as $key) {

									?>
										<option value="<?php echo $key['Model']; ?>"><?php echo $key['Model']; ?></option>
									<?php
									}
									?>
								</select>
							</div>

							<div class="field quarter">
								<label>Company :-</label>

								<select>
									<option value="" selected></option>

									<?php
									foreach ($make as $key) {

									?>
										<option value="<?php echo $key['Make']; ?>"><?php echo $key['Make']; ?></option>
									<?php
									}
									?>
								</select>
							</div>

							<div class="field quarter">
								<label>Vehicle Type :-</label>

								<select>
									<option value="" selected></option>

									<?php
									foreach ($vehicleType as $key) {

									?>
										<option value="<?php echo $key['VehicleType']; ?>"><?php echo $key['VehicleType']; ?></option>
									<?php
									}
									?>
								</select>
							</div>

							<div class="field quarter">
								<label>Mileage :-</label>

								<select>
									<option value="" selected></option>

									<?php
									foreach ($mileage as $key) {

									?>
										<option value="<?php echo $key['Mileage']; ?>"><?php echo $key['Mileage']; ?></option>
									<?php
									}
									?>
								</select>
							</div>

							<div class="field quarter">
								<label>Engine Size :-</label>

								<select>
									<option value="" selected></option>

									<?php
									foreach ($engineSize as $key) {

									?>
										<option value="<?php echo $key['EngineSize']; ?>"><?php echo $key['EngineSize']; ?></option>
									<?php
									}
									?>
								</select>
							</div>

							<div class="field quarter">
								<label>Power:-</label>

								<select>
									<option value="" selected></option>

									<?php
									foreach ($power as $key) {

									?>
										<option value="<?php echo $key['Power']; ?>"><?php echo $key['Power']; ?></option>
									<?php
									}
									?>
								</select>
							</div>

							<div class="field quarter">
								<label>Fuel Type :-</label>

								<select>
									<option value="" selected></option>

									<?php
									foreach ($fuelType as $key) {

									?>
										<option value="<?php echo $key['FuelType']; ?>"><?php echo $key['FuelType']; ?></option>
									<?php
									}
									?>
								</select>
							</div>

							<div class="field quarter">
								<label>Gear Box :-</label>

								<select>
									<option value="" selected></option>

									<?php
									foreach ($gearBox as $key) {

									?>
										<option value="<?php echo $key['GearBox']; ?>"><?php echo $key['GearBox']; ?></option>
									<?php
									}
									?>
								</select>
							</div>

							<div class="field quarter">
								<label>Seats :-</label>

								<select>
									<option value="" selected></option>

									<?php
									foreach ($seat as $key) {

									?>
										<option value="<?php echo $key['Seats']; ?>"><?php echo $key['Seats']; ?></option>
									<?php
									}
									?>
								</select>
							</div>

							<div class="field quarter">
								<label>Price :-</label>

								<select>
									<option value="" selected></option>

									<?php
									foreach ($price as $key) {

									?>
										<option value="<?php echo $key['price']; ?>"><?php echo $key['price']; ?></option>
									<?php
									}
									?>
								</select>
							</div>

							<div class="field quarter">
								<label>Year of Purchase :-</label>

								<select>
									<option value="" selected></option>

									<?php
									foreach ($year as $key) {

									?>
										<option value="<?php echo $key['year_of_purchase']; ?>"><?php echo $key['year_of_purchase']; ?></option>
									<?php
									}
									?>
								</select>
							</div>

							<div class="field quarter">
								<label>Kilometers Driven :-</label>

								<select>
									<option value="" selected></option>

									<?php
									foreach ($kilometer as $key) {

									?>
										<option value="<?php echo $key['kilometer']; ?>"><?php echo $key['kilometer']; ?></option>
									<?php
									}
									?>
								</select>
							</div>

							<div class="field half text-right">
								<ul class="actions">
									<li><input type="submit" value="Search" class="primary"></li>
								</ul>
							</div>
						</div>
					</form>
				</div>
			</section>







		</div>

		<!-- Scripts -->
		<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.scrolly.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.scrollex.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/browser.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/breakpoints.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/util.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

</body>

</html>