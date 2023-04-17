
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
                <li> <a href="<?php echo base_url('index.php/login/') ?>"> Login </a> </li>

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

        <!-- Banner -->
        <section id="banner" class="major">
            <div class="inner">
                <header class="major">
                    <h1>Lorem ipsum dolor sit amet isicing</h1>
                </header>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, libero!</p>
                    <ul class="actions">
                        <li><a href="<?php echo base_url('index.php/Index/contact') ?>" class="button next scrolly">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Main -->
        <div id="main">

            <!-- Featured Cars -->
            <section class="tiles">

                <?php
                $i =1;
                foreach($data as $row)
                {
                ?>
                <article>
                    <span class="image">
                        <img src="<?php echo base_url(); ?>images/product-<?php echo $i;?>-720x480.jpg" alt="" />
                    </span>

                    <header class="major">
                        <p>
                            <i class="fa fa-dashboard"></i> <?php echo $row['car_kilometer'];?> KM &nbsp;&nbsp;
                            <i class="fa fa-cube"></i> <?php echo $row['car_power'];?> CC&nbsp;&nbsp;
                            <i class="fa fa-cog"></i> Manual
                        </p>

                        <h3><?php echo $row['car_name'];?></h3>

                        <p><del>$11199.00</del> <strong> $<?php echo $row['car_price'];?></strong></p>

                        <p><?php echo $row['car_engine_size'];?> HP / <?php echo $row['car_fuel_type'];?> / <?php echo $row['car_year'];?> / <?php echo $row['used_type'];?></p>



                        <div class="major-actions">
                            <a href="<?php echo base_url('index.php/Index/carDetails?id='.$i-1); ?>" class="button small next">View Car</a>
                        </div>
                    </header>
                </article>
                <?php
                $i++;
                }
                ?>
                
            </section>

            <!-- About us -->
            <section>
                <div class="inner">
                    <header class="major">
                        <h2>About us</h2>
                    </header>
                    <p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus pharetra. Pellentesque condimentum sem. In efficitur ligula tate urna. Maecenas laoreet massa vel lacinia pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus amet pharetra et feugiat tempus.</p>
                    <ul class="actions">
                        <li><a href="<?php echo base_url('index.php/Index/about') ?>" class="button next">Read more</a></li>
                    </ul>
                </div>
            </section>

            <!-- Blog Posts -->
            <section class="tiles">
                <article>
                    <span class="image">
                        <img src="<?php echo base_url(); ?>images/blog-1-720x480.jpg" alt="" />
                    </span>
                    <header class="major">
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</h3>

                        <p><br> <span>John Doe</span> | <span>12/06/2020 10:30 </span> | <span>114</span></p>

                        <div class="major-actions">
                            <a href="<?php echo base_url('index.php/Index/blogDetails') ?>" class="button small next scrolly">Read Blog</a>
                        </div>
                    </header>
                </article>
                <article>
                    <span class="image">
                        <img src="<?php echo base_url(); ?>images/blog-2-720x480.jpg" alt="" />
                    </span>
                    <header class="major">
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</h3>

                        <p><br> <span>John Doe</span> | <span>12/06/2020 10:30 </span> | <span>114</span></p>

                        <div class="major-actions">
                            <a href="<?php echo base_url('index.php/Index/blogDetails') ?>" class="button small next scrolly">Read Blog</a>
                        </div>
                    </header>
                </article>
                <article>
                    <span class="image">
                        <img src="<?php echo base_url(); ?>images/blog-3-720x480.jpg" alt="" />
                    </span>
                    <header class="major">
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</h3>

                        <p><br> <span>John Doe</span> | <span>12/06/2020 10:30 </span> | <span>114</span></p>

                        <div class="major-actions">
                            <a href="<?php echo base_url('index.php/Index/blogDetails') ?>" class="button small next scrolly">Read Blog</a>
                        </div>
                    </header>
                </article>
            </section>

            <!-- Testimonials -->
            <section>
                <div class="inner">
                    <header class="major">
                        <h2>Testimonials</h2>
                    </header>
                    <div class="row">
                        <div class="col-6">
                            <p><em>"Nullam et orci eu lorem consequat tincidunt vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus pharetra. Pellentesque condimentum sem. In efficitur ligula tate urna. Maecenas laoreet massa vel lacinia pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt."</em></p>
                            <p><strong>- John Doe</strong></p>

                        </div>

                        <div class="col-6">
                            <p><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores temporibus dolorum minus repudiandae, eaque error corporis aliquam, architecto amet itaque nobis. Omnis itaque est dolore, a nostrum numquam. Quae, facilis."</em></p>
                            <p><strong>- Jack Smith</strong></p>
                        </div>
                    </div>
                    <ul class="actions">
                        <li><a href="<?php echo base_url('index.php/Index/testimonials') ?>" class="button next">Read more</a></li>
                    </ul>
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