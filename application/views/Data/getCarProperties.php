<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>dashboardCss/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="<?php echo base_url('index.php/Dashboard') ?>">Start Bootstrap</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="<?php echo base_url('index.php/Index/logOut'); ?>">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="<?php echo base_url('index.php/Dashboard') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="<?php echo base_url('index.php/SaveData') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Add Car Properties
                        </a>
                        <a class="nav-link" href="<?php echo base_url('index.php/SaveData/carData') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Add Car
                        </a>
                        <a class="nav-link" href="<?php echo base_url('index.php/SaveData/showData') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Show Car
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Layouts
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?php echo base_url('index.php/Dashboard/staticLayout') ?>">Static Navigation</a>
                                <a class="nav-link" href="<?php echo base_url('index.php/Dashboard/sideNav') ?>">Light Sidenav</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Pages
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    Authentication
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="<?php echo base_url('index.php/Dashboard/login') ?>">Login</a>
                                        <a class="nav-link" href="<?php echo base_url('index.php/Dashboard/register') ?>">Register</a>
                                        <a class="nav-link" href="<?php echo base_url('index.php/Dashboard/password') ?>">Forgot Password</a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                    Error
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="<?php echo base_url('index.php/Dashboard/error401') ?>">401 Page</a>
                                        <a class="nav-link" href="<?php echo base_url('index.php/Dashboard/error404') ?>">404 Page</a>
                                        <a class="nav-link" href="<?php echo base_url('index.php/Dashboard/error500') ?>">500 Page</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="<?php echo base_url('index.php/Dashboard/charts') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Charts
                        </a>
                        <a class="nav-link" href="<?php echo base_url('index.php/Dashboard/tables') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tables
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    <?php echo $_SESSION['user_data'][0]['email']; ?>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Add Car Properties</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>

                    <div class="row">
                        <div class="col border">
                            <?php $name1 = 'VehicleType' ?>
                            <form class="form-inline" name="form1" action="<?php echo base_url('index.php/SaveData/post_validate?name=' . $name1); ?>" method="POST">
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="input1" class="">Vehicle Type :-</label>
                                    <input type="text" class="form-control" id="input1" name="VehicleType">
                                </div>
                                <?php echo form_error('VehicleType'); ?>

                                <div class="text-center">
                                    <input type="submit" value="Submit" class="btn btn-success mb-2">
                                </div>
                            </form>
                        </div>
                        <div class="col border">
                            <?php $name2 = 'Make' ?>
                            <form class="form-inline" name="form2" action="<?php echo base_url('index.php/SaveData/post_validate?name=' . $name2); ?>" method="POST">
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="input2" class="">Make :-</label>
                                    <input type="text" class="form-control" id="input2" name="Make">
                                </div>
                                <?php echo form_error('Make'); ?>

                                <div class="text-center">
                                    <input type="submit" value="Submit" class="btn btn-success mb-2">

                                </div>
                            </form>
                        </div>
                        <div class="col border">
                            <?php $name3 = 'Model' ?>
                            <form class="form-inline" name="form3" action="<?php echo base_url('index.php/SaveData/post_validate?name=' . $name3); ?>" method="POST">
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="input3" class="">Model :-</label>
                                    <input type="text" class="form-control" id="input3" name="Model">
                                </div>
                                <?php echo form_error('Model'); ?>

                                <div class="text-center">
                                    <input type="submit" value="Submit" class="btn btn-success mb-2">

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col border">
                            <?php $name4 = 'Mileage' ?>
                            <form class="form-inline" name="form4" action="<?php echo base_url('index.php/SaveData/post_validate?name=' . $name4); ?>" method="POST">
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="input4" class="">Mileage :-</label>
                                    <input type="text" class="form-control" id="input4" name="Mileage">
                                </div>
                                <?php echo form_error('Mileage'); ?>

                                <div class="text-center">
                                    <input type="submit" value="Submit" class="btn btn-success mb-2">

                                </div>
                            </form>
                        </div>
                        <div class="col border">
                            <?php $name5 = 'EngineSize' ?>
                            <form class="form-inline" name="form5" action="<?php echo base_url('index.php/SaveData/post_validate?name=' . $name5); ?>" method="POST">
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="input5" class="">Engine Size :-</label>
                                    <input type="text" class="form-control" id="input5" name="EngineSize">
                                </div>
                                <?php echo form_error('EngineSize'); ?>

                                <div class="text-center">
                                    <input type="submit" value="Submit" class="btn btn-success mb-2">

                                </div>
                            </form>
                        </div>
                        <div class="col border">
                            <?php $name6 = 'Power' ?>
                            <form class="form-inline" name="form6" action="<?php echo base_url('index.php/SaveData/post_validate?name=' . $name6); ?>" method="POST">
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="input6" class="">Power :-</label>
                                    <input type="text" class="form-control" id="input6" name="Power">
                                </div>
                                <?php echo form_error('Power'); ?>

                                <div class="text-center">
                                    <input type="submit" value="Submit" class="btn btn-success mb-2">

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col border">
                            <?php $name7 = 'FuelType' ?>
                            <form class="form-inline" name="form7" action="<?php echo base_url('index.php/SaveData/post_validate?name=' . $name7); ?>" method="POST">
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="input7" class="">Fuel Type :-</label>
                                    <input type="text" class="form-control" id="input7" name="FuelType">
                                </div>
                                <?php echo form_error('FuelType'); ?>

                                <div class="text-center">
                                    <input type="submit" value="Submit" class="btn btn-success mb-2">

                                </div>
                            </form>
                        </div>
                        <div class="col border">
                            <?php $name8 = 'GearBox' ?>
                            <form class="form-inline" name="form8" action="<?php echo base_url('index.php/SaveData/post_validate?name=' . $name8); ?>" method="POST">
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="input8" class="">Gear Box :-</label>
                                    <input type="text" class="form-control" id="input8" name="GearBox">
                                </div>
                                <?php echo form_error('GearBox'); ?>

                                <div class="text-center">
                                    <input type="submit" value="Submit" class="btn btn-success mb-2">

                                </div>
                            </form>
                        </div>
                        <div class="col border">
                            <?php $name9 = 'Seats' ?>
                            <form class="form-inline" name="form9" action="<?php echo base_url('index.php/SaveData/post_validate?name=' . $name9); ?>" method="POST">
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="input9" class="">Number Of Seats :-</label>
                                    <input type="text" class="form-control" id="input9" name="Seats">
                                </div>
                                <?php echo form_error('Seats'); ?>

                                <div class="text-center">
                                    <input type="submit" value="Submit" class="btn btn-success mb-2">

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col border">
                            <?php $name10 = 'price' ?>
                            <form class="form-inline" name="form9" action="<?php echo base_url('index.php/SaveData/post_validate?name=' . $name10); ?>" method="POST">
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="input10" class="">Price :-</label>
                                    <input type="number" class="form-control" id="input10" name="price">
                                </div>
                                <?php echo form_error('price'); ?>

                                <div class="text-center">
                                    <input type="submit" value="Submit" class="btn btn-success mb-2">

                                </div>
                            </form>
                        </div>
                        <div class="col border">
                            <?php $name11 = 'year_of_purchase' ?>
                            <form class="form-inline" name="form9" action="<?php echo base_url('index.php/SaveData/post_validate?name=' . $name11); ?>" method="POST">
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="input11" class="">Year of Purchase :-</label>
                                    <input type="year" class="form-control" id="input9" name="year_of_purchase">
                                </div>
                                <?php echo form_error('year_of_purchase'); ?>

                                <div class="text-center">
                                    <input type="submit" value="Submit" class="btn btn-success mb-2">

                                </div>
                            </form>
                        </div>
                        <div class="col border">
                            <?php $name12 = 'kilometer' ?>
                            <form class="form-inline" name="form9" action="<?php echo base_url('index.php/SaveData/post_validate?name=' . $name12); ?>" method="POST">
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="input9" class="">Kilometers Driven :-</label>
                                    <input type="number" class="form-control" id="input12" name="kilometer">
                                </div>
                                <?php echo form_error('kilometer'); ?>

                                <div class="text-center">
                                    <input type="submit" value="Submit" class="btn btn-success mb-2">

                                </div>
                            </form>
                        </div>

                    </div>



                </div>
            </main>
        </div>



    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>dashboardCss/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>dashboardCss/assets/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url(); ?>dashboardCss/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>dashboardCss/js/datatables-simple-demo.js"></script>
</body>

</html>