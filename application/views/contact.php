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
						<h1>Contact Us</h1>
					</header>
					<span class="image main"><img src="<?php echo base_url(); ?>images/map.jpg" alt="" /></span>
					<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fergiat. Pellentesque in mi eu massa lacinia malesuada et a elit. Donec urna ex, lacinia in purus ac, pretium pulvinar mauris. Curabitur sapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit.</p>
				</div>
			</section>

		</div>

		<!-- Contact -->
		<section id="contact">
			<div class="inner">
				<section>
					<header class="major">
						<h2>Contact us</h2>
					</header>

					<form method="post" action="#">
						<div class="fields">
							<div class="field half">
								<label for="name">Name</label>
								<input type="text" name="name" id="name" />
							</div>
							<div class="field half">
								<label for="email">Email</label>
								<input type="text" name="email" id="email" />
							</div>
							<div class="field">
								<label for="subject">Subject</label>
								<input type="text" name="subject" id="subject" />
							</div>
							<div class="field">
								<label for="message">Notes</label>
								<textarea name="message" id="message" rows="6"></textarea>
							</div>

							<div class="field half text-right">
								<ul class="actions">
									<li><input type="submit" value="Send Message" class="primary" /></li>
								</ul>
							</div>
						</div>
					</form>
				</section>
				<section class="split">
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
							<br>
							<span>+1 333 5550 3366</span>
						</div>
					</section>
					<section>
						<div class="contact-method">
							<span class="icon alt fa-home"></span>
							<h3>Address</h3>
							<span>212 Barrington Court <br> New York, ABC 10001 <br> United States of America</span>
						</div>
					</section>
				</section>
			</div>
		</section>


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