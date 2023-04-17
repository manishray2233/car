<?php

$id=$_GET['id'];

?>
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
						<h1><?php echo $data[$id]['car_name']; ?></h1>
					</header>

					<div class="row">
						<div class="col-md-6">
							<img src="<?php echo base_url(); ?>images/product-1-720x480.jpg" class="img-responsive" alt="">
						</div>

						<div class="col-md-6">
							<div class="row">
								<div class="col-md-4 col-xs-6"><img src="<?php echo base_url(); ?>images/product-1-720x480.jpg" class="img-responsive" alt=""></div>
								<div class="col-md-4 col-xs-6"><img src="<?php echo base_url(); ?>images/product-2-720x480.jpg" class="img-responsive" alt=""></div>
								<div class="col-md-4 col-xs-6"><img src="<?php echo base_url(); ?>images/product-3-720x480.jpg" class="img-responsive" alt=""></div>

								<div class="col-md-4 col-xs-6"><img src="<?php echo base_url(); ?>images/product-4-720x480.jpg" class="img-responsive" alt=""></div>
								<div class="col-md-4 col-xs-6"><img src="<?php echo base_url(); ?>images/product-5-720x480.jpg" class="img-responsive" alt=""></div>
								<div class="col-md-4 col-xs-6"><img src="<?php echo base_url(); ?>images/product-6-720x480.jpg" class="img-responsive" alt=""></div>
							</div>

							<br>

							<h2><del>$11 999</del> $<?php echo $data[$id]['car_price']; ?></h2>
						</div>
					</div>

					<br>

					<form action="#">
						<div class="fields">
							<div class="field quarter">
								<label>Type</label>

								<input type="text" readonly value="<?php echo $data[$id]['used_type']; ?>">
							</div>

							<div class="field quarter">
								<label>Make</label>

								<input type="text" readonly value="<?php echo $data[$id]['car_make']; ?>">
							</div>

							<div class="field quarter">
								<label>Model</label>

								<input type="text" readonly value="<?php echo $data[$id]['car_name']; ?>">
							</div>

							<div class="field quarter">
								<label>Year of registration</label>

								<input type="text" readonly value="<?php echo $data[$id]['car_year']; ?>">
							</div>

							<div class="field quarter">
								<label>Mileage</label>

								<input type="text" readonly value="<?php echo $data[$id]['car_mileage']; ?>">
							</div>

							<div class="field quarter">
								<label>Fuel</label>

								<input type="text" readonly value="<?php echo $data[$id]['car_fuel_type']; ?>">
							</div>

							<div class="field quarter">
								<label>Engine size</label>

								<input type="text" readonly value="<?php echo $data[$id]['car_engine_size']; ?> CC">
							</div>

							<div class="field quarter">
								<label>Power</label>

								<input type="text" readonly value="<?php echo $data[$id]['car_power']; ?> HP">
							</div>

							<div class="field quarter">
								<label>Gearbox</label>

								<input type="text" readonly value="<?php echo $data[$id]['car_gear']; ?>">
							</div>

							<div class="field quarter">
								<label>Number of seats</label>

								<input type="text" readonly value="<?php echo $data[$id]['car_seats']; ?>">
							</div>

							<div class="field quarter">
								<label>Kilometers Driven</label>

								<input type="text" readonly value="<?php echo $data[$id]['car_kilometer']; ?>">
							</div>

							<div class="field quarter">
								<label>Color</label>

								<input type="text" readonly value="Black">
							</div>
						</div>
					</form>
				</div>
			</section>

			<section id="contact">
				<div class="inner">
					<section>
						<header class="major">
							<h2>Vehicle Description</h2>
						</header>

						<p>- Colour coded bumpers<br>- Tinted glass<br>- Immobiliser<br>- Central locking - remote<br>- Passenger airbag<br>- Electric windows<br>- Rear head rests<br>- Radio<br>- CD player<br>- Ideal first car<br>- Warranty<br>- High level brake light<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</section>

					<section class="split">
						<section>
							<div class="contact-method">
								<span class="icon alt fa-user"></span>
								<h3>Name</h3>
								<span>John Smith</span>
							</div>
						</section>

						<section>
							<div class="contact-method">
								<span class="icon alt fa-envelope"></span>
								<h3>Email</h3>
								<a href="#">contact@company.com</a>
							</div>
						</section>
						<section>
							<div class="contact-method">
								<span class="icon alt fa-phone"></span>
								<h3>Phone</h3>
								<span>+1 333 4040 5566</span>
							</div>
						</section>

						<section>
							<div class="contact-method">
								<span class="icon alt fa-phone"></span>
								<h3>Mobile Phone</h3>
								<span>+1 333 5550 3366</span>
							</div>
						</section>
					</section>
				</div>
			</section>
		</div>

		<!-- Footer -->
		<footer id="footer">
			<div class="inner">
				<ul class="icons">
					<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
				</ul>
				<ul class="copyright">
					<li>Copyright © 2020 Company Name - Template by:</li>
					<li> <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
				</ul>
			</div>
		</footer>

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