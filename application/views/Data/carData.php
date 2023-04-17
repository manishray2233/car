
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
                    <h1 class="mt-4">Add Car </h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>

                    <form action="<?php echo base_url('index.php/SaveData/validateCarDetails') ?>" class="form-inline" method="POST" name="DataForm">


                        <div class="row ">
                            <div class="col border">

                                <label for="vehiclType" class="">Vehicle Type :-</label>

                                <select class="form-select " style="margin-top:5px;margin-bottom:15px;" id="vehiclType" name="vehiclType">
                                    <option value="" selected></option>

                                    <?php

                                    foreach ($vehicleType as $row) {

                                    ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['VehicleType']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <?php echo form_error('vehiclType'); ?>
                            </div>
                            <div class="col border">

                                <label for="input2" class="">Make :-</label>

                                <select class="form-select " aria-label="Default select example" style="margin-top:5px;margin-bottom:15px;" id="input2" name="make">
                                    <option value=" " selected></option>

                                    <?php
                                    foreach ($make as $row) {
                                    ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['Make']; ?></option>
                                    <?php

                                    }
                                    ?>
                                </select>
                                <?php echo form_error('make'); ?>

                            </div>
                            <div class="col border">

                                <label for="input3" class="">Model :-</label>

                                <select class="form-select " aria-label="Default select example" style="margin-top:5px;margin-bottom:15px;" id="input3" name="model">
                                    <option value=" " selected></option>

                                    <?php
                                    foreach ($model as $row) {

                                    ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['Model']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <?php echo form_error('model'); ?>

                            </div>

                        </div>
                        <div class="row ">
                            <div class="col border">

                                <label for="input4" class="">Mileage :-</label>

                                <select class="form-select " aria-label="Default select example" style="margin-top:5px;margin-bottom:15px;" id="input4" name="mileage">
                                    <option value=" " selected></option>

                                    <?php
                                    foreach ($mileage as $row) {

                                    ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['Mileage']; ?></option>

                                    <?php
                                    }
                                    ?>
                                </select>
                                <?php echo form_error('mileage'); ?>

                            </div>
                            <div class="col border">

                                <label for="input5" class="">Engine Size :-</label>

                                <select class="form-select " aria-label="Default select example" style="margin-top:5px;margin-bottom:15px;" id="input5" name="engineSize">
                                    <option value=" " selected></option>

                                    <?php
                                    foreach ($engineSize as $row) {
                                    ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['EngineSize']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <?php echo form_error('engineSize'); ?>

                            </div>
                            <div class="col border">

                                <label for="input6" class="">Power :-</label>

                                <select class="form-select " aria-label="Default select example" style="margin-top:5px;margin-bottom:15px;" id="input6" name="power">
                                    <option value=" " selected></option>

                                    <?php
                                    foreach ($power as $row) {
                                    ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['Power']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <?php echo form_error('power'); ?>

                            </div>

                        </div>
                        <div class="row ">
                            <div class="col border">

                                <label for="input7" class="">Fuel Type :-</label>

                                <select class="form-select " aria-label="Default select example" style="margin-top:5px;margin-bottom:15px;" id="input7" name="fuel">
                                    <option value=" " selected></option>

                                    <?php
                                    foreach ($fuelType as $row) {
                                    ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['FuelType']; ?></option>
                                    <?php
                                       
                                    }
                                    ?>
                                </select>
                                <?php echo form_error('fuel'); ?>

                            </div>
                            <div class="col border">

                                <label for="input8" class="">Gear Box :-</label>

                                <select class="form-select " aria-label="Default select example" style="margin-top:5px;margin-bottom:15px;" id="input8" name="gear">
                                    <option value=" " selected></option>

                                    <?php
                                    foreach ($gearBox as $row) {

                                    ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['GearBox']; ?></option>
                                    <?php
                                      
                                    }
                                    ?>
                                </select>
                                <?php echo form_error('gear'); ?>

                            </div>
                            <div class="col border">

                                <label for="input9" class="">Seats :-</label>

                                <select class="form-select " aria-label="Default select example" style="margin-top:5px;margin-bottom:15px;" id="input9" name="seat">
                                    <option value=" " selected></option>

                                    <?php
                                    foreach ($seat as $row) {

                                    ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['Seats']; ?></option>
                                    <?php
                                       
                                    }
                                    ?>
                                </select>
                                <?php echo form_error('seat'); ?>

                            </div>

                        </div>
                        <div class="row ">
                            <div class="col border">

                                <label for="input10" class="">Price :-</label>

                                <select class="form-select " aria-label="Default select example" style="margin-top:5px;margin-bottom:15px;" id="input10" name="price">
                                    <option value=" " selected></option>

                                    <?php
                                    foreach ($price as $row) {
                                    ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['price']; ?></option>
                                    <?php
                                      
                                    }
                                    ?>
                                </select>
                                <?php echo form_error('price'); ?>

                            </div>
                            <div class="col border">

                                <label for="input11" class="">Year of Purchase :-</label>

                                <select class="form-select " aria-label="Default select example" style="margin-top:5px;margin-bottom:15px;" id="input11" name="year">
                                    <option value=" " selected></option>

                                    <?php
                                    foreach ($year as $row) {

                                    ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['year_of_purchase']; ?></option>
                                    <?php
                                      
                                    }
                                    ?>
                                </select>
                                <?php echo form_error('year'); ?>

                            </div>
                            <div class="col border">

                                <label for="input12" class="">Kilometers Driven :-</label>

                                <select class="form-select " aria-label="Default select example" style="margin-top:5px;margin-bottom:15px;" id="input12" name="kilometer">
                                    <option value=" " selected></option>

                                    <?php
                                    foreach ($kilometer as $row) {

                                    ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['kilometer']; ?></option>
                                    <?php
                                       
                                    }
                                    ?>
                                </select>
                                <?php echo form_error('kilometer'); ?>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col border">
                                <div class="text-center" style="margin-top:10px;">
                                    <input type="submit" value="Submit" class="btn btn-success mb-2">

                                </div>
                            </div>
                        </div>
                    </form>

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