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
                        <h1>Our team members</h1>
                    </header>

                    <div class="row">
                        <div class="col-md-3 col-sm-6 co-xs-12 text-center">
                            <img src="<?php echo base_url(); ?>images/author-image-1-646x680.jpg" class="img-responsive" alt="">

                            <h3>Johnny William</h3>

                            <h4><em>CEO</em></h4>

                            <ul class="icons">
                                <li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
                                <li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
                            </ul>
                        </div>

                        <div class="col-md-3 col-sm-6 co-xs-12 text-center">
                            <img src="<?php echo base_url(); ?>images/author-image-2-646x680.jpg" class="img-responsive" alt="">

                            <h3>Karry Pitcher</h3>

                            <h4><em>CEO</em></h4>

                            <ul class="icons">
                                <li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
                                <li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
                            </ul>
                        </div>

                        <div class="col-md-3 col-sm-6 co-xs-12 text-center">
                            <img src="<?php echo base_url(); ?>images/author-image-3-646x680.jpg" class="img-responsive" alt="">

                            <h3>Mary Cool</h3>

                            <h4><em>CEO</em></h4>

                            <ul class="icons">
                                <li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
                                <li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
                            </ul>
                        </div>

                        <div class="col-md-3 col-sm-6 co-xs-12 text-center">
                            <img src="<?php echo base_url(); ?>images/author-image-4-646x680.jpg" class="img-responsive" alt="">

                            <h3>Michael Soft</h3>

                            <h4><em>CEO</em></h4>

                            <ul class="icons">
                                <li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
                                <li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
                            </ul>
                        </div>

                    </div>
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