<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tables - SB Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>dashboardCss/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

    <script src="<?php echo base_url('application/js/jquery.session.js'); ?>"></script>
    <script src="<?php echo base_url('application/js/editData.js'); ?>"></script>

    <script type='text/javascript'>
        var baseURL = "<?php echo base_url(); ?>";
    </script>
    <style>
        .container {
            padding: 2rem 0rem;
        }

        h4 {
            margin: 2rem 0rem;
        }

        .panel {
            border-radius: 4px;
            padding: 1rem;
            margin-top: 0.2rem;
            background-color: #F5F5F5;
            color: #323B40;
        }

        .panel.panel-blue {
            background-color: #E0F5FF;
            color: #00A5FA;
        }

        .panel.panel-big-height {
            min-height: 150px;
        }

        .item {
            border-radius: 4px;
            padding: 0.5rem;
            margin: 0.2rem;
        }

        .item.item-blue {
            background-color: #B9E5FE;
            color: #00A5FA;
        }

        .item.item-green {
            background-color: #B7E0DC;
            color: #019888;
        }

        .item.item-lime {
            background-color: #C7E8C8;
            color: #42B045;
        }

        .item.item-yellow {
            background-color: #FFEEBA;
            color: #FF9901;
        }

        .item.item-pink {
            background-color: #FABAD0;
            color: #EF075F;
        }

        .item.item-red {
            background-color: #FEC9C6;
            color: #FD3D08;
        }

        .item.item-big-width {
            min-width: 380px;
        }

        @media screen and (min-width: 676px) {
            .modal-dialog {
                max-width: 1500px;
                /* New width for default modal */
            }
        }

        .button-85 {
            padding: 0.6em 2em;
            border: none;
            outline: none;
            color: rgb(255, 255, 255);
            background: #111;
            cursor: pointer;
            position: relative;
            z-index: 0;
            border-radius: 10px;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .button-85:before {
            content: "";
            background: linear-gradient(45deg,
                    #ff0000,
                    #ff7300,
                    #fffb00,
                    #48ff00,
                    #00ffd5,
                    #002bff,
                    #7a00ff,
                    #ff00c8,
                    #ff0000);
            position: absolute;
            top: -2px;
            left: -2px;
            background-size: 400%;
            z-index: -1;
            filter: blur(5px);
            -webkit-filter: blur(5px);
            width: calc(100% + 4px);
            height: calc(100% + 4px);
            animation: glowing-button-85 20s linear infinite;
            transition: opacity 0.3s ease-in-out;
            border-radius: 10px;
        }

        @keyframes glowing-button-85 {
            0% {
                background-position: 0 0;
            }

            50% {
                background-position: 400% 0;
            }

            100% {
                background-position: 0 0;
            }
        }

        .button-85:after {
            z-index: -1;
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: #222;
            left: 0;
            top: 0;
            border-radius: 10px;
        }
    </style>
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
                    <h1 class="mt-4">Show Car Data</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/Dashboard') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tables</li>
                    </ol>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Car Data
                        </div>
                        <div class="card-body" style="text-align: justify;" id="table">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Car Name</th>
                                        <th>Company</th>
                                        <th>Vehicle Type</th>
                                        <th>MIleage</th>
                                        <th>Engine Size(CC)</th>
                                        <th>Power(HP)</th>
                                        <th>Fuel Type</th>
                                        <th>Gear Box</th>
                                        <th>Seats</th>
                                        <th>Price</th>
                                        <th>Year of Purchase</th>
                                        <th>Kilometer Driven</th>
                                        <th>Edit Data</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Car Name</th>
                                        <th>Company</th>
                                        <th>Vehicle Type</th>
                                        <th>MIleage</th>
                                        <th>Engine Size(CC)</th>
                                        <th>Power(HP)</th>
                                        <th>Fuel Type</th>
                                        <th>Gear Box</th>
                                        <th>Seats</th>
                                        <th>Price</th>
                                        <th>Year of Purchase</th>
                                        <th>Kilometer Driven</th>
                                        <th>Edit Data</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    foreach ($carDetails['data'] as $row) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['car_name']; ?></td>
                                            <td><?php echo $row['car_make']; ?></td>
                                            <td><?php echo $row['used_type']; ?></td>
                                            <td><?php echo $row['car_mileage']; ?></td>
                                            <td><?php echo $row['car_engine_size']; ?></td>
                                            <td><?php echo $row['car_power']; ?></td>
                                            <td><?php echo $row['car_fuel_type']; ?></td>
                                            <td><?php echo $row['car_gear']; ?></td>
                                            <td><?php echo $row['car_seats']; ?></td>
                                            <td><?php echo $row['car_price']; ?></td>
                                            <td><?php echo $row['car_year']; ?></td>
                                            <td><?php echo $row['car_kilometer']; ?></td>
                                            <td><button role="button" type="button" class="button-85" data-toggle="modal" data-target="#form" onclick="editCustomerData(<?php echo $row['car_id']; ?>,baseURL)">Edit</button> <button class="button-85" role="button" onclick="deleteCustomerDataById(<?php echo $row['car_id']; ?>,baseURL)">Delete</button></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                    <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header border-bottom-0">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <form class="form-inline" method="POST" name="dataEdit" id="dataEdit">
                                                        <div class="row">
                                                            <div class="col border">
                                                                <label for="carName" class="">Car Name :-</label>

                                                                <select class="form-select " aria-label="Default select example" style="margin-top:5px;margin-bottom:15px;" id="carName" name="carName">
                                                                    <?php
                                                                    foreach ($carProperties['model'] as $row) {

                                                                    ?>
                                                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['Model']; ?></option>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>

                                                            <div class="col border">
                                                                <label for="company" class="">Company :-</label>

                                                                <select class="form-select " aria-label="Default select example" style="margin-top:5px;margin-bottom:15px;" id="company" name="company">
                                                                    <?php
                                                                    foreach ($carProperties['make'] as $row) {
                                                                    ?>
                                                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['Make']; ?></option>
                                                                    <?php

                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>

                                                            <div class="col border">
                                                                <label for="vehicleType" class="">Vehicle Type :-</label>

                                                                <select class="form-select " style="margin-top:5px;margin-bottom:15px;" id="vehicleType" name="vehicleType">
                                                                    <?php
                                                                    foreach ($carProperties['vehicleType'] as $row) {

                                                                    ?>
                                                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['VehicleType']; ?></option>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>

                                                            <div class="col border">
                                                                <label for="mileage" class="">Mileage :-</label>

                                                                <select class="form-select " aria-label="Default select example" style="margin-top:5px;margin-bottom:15px;" id="mileage" name="mileage">
                                                                    <?php
                                                                    foreach ($carProperties['mileage'] as $row) {

                                                                    ?>
                                                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['Mileage']; ?></option>

                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col border">
                                                                <label for="engineSize" class="">Engine Size(CC) :-</label>

                                                                <select class="form-select " aria-label="Default select example" style="margin-top:5px;margin-bottom:15px;" id="engineSize" name="engineSize">

                                                                    <?php
                                                                    foreach ($carProperties['engineSize'] as $row) {
                                                                    ?>
                                                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['EngineSize']; ?></option>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>

                                                            <div class="col border">
                                                                <label for="power" class="">Power(HP) :-</label>

                                                                <select class="form-select " aria-label="Default select example" style="margin-top:5px;margin-bottom:15px;" id="power" name="power">

                                                                    <?php
                                                                    foreach ($carProperties['power'] as $row) {
                                                                    ?>
                                                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['Power']; ?></option>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>

                                                            <div class="col border">
                                                                <label for="fuelType" class="">Fuel Type :-</label>

                                                                <select class="form-select " aria-label="Default select example" style="margin-top:5px;margin-bottom:15px;" id="fuelType" name="fuelType">

                                                                    <?php
                                                                    foreach ($carProperties['fuelType'] as $row) {
                                                                    ?>
                                                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['FuelType']; ?></option>
                                                                    <?php

                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>

                                                            <div class="col border">
                                                                <label for="gear" class="">Gear Box :-</label>

                                                                <select class="form-select " aria-label="Default select example" style="margin-top:5px;margin-bottom:15px;" id="gear" name="gear">

                                                                    <?php
                                                                    foreach ($carProperties['gearBox'] as $row) {

                                                                    ?>
                                                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['GearBox']; ?></option>
                                                                    <?php

                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="row ">
                                                            <div class="col border ">
                                                                <label for="seat" class="">Seats :-</label>

                                                                <select class="form-select " aria-label="Default select example" style="margin-top:5px;margin-bottom:15px;" id="seat" name="seat">

                                                                    <?php
                                                                    foreach ($carProperties['seat'] as $row) {

                                                                    ?>
                                                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['Seats']; ?></option>
                                                                    <?php

                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>

                                                            <div class="col border ">
                                                                <label for="price" class="">Price :-</label>

                                                                <select class="form-select " aria-label="Default select example" style="margin-top:5px;margin-bottom:15px;" id="price" name="price">

                                                                    <?php
                                                                    foreach ($carProperties['price'] as $row) {
                                                                    ?>
                                                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['price']; ?></option>
                                                                    <?php

                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>

                                                            <div class="col border">
                                                                <label for="yearOfPurchase" class="">Year of Purchase :-</label>

                                                                <select class="form-select " aria-label="Default select example" style="margin-top:5px;margin-bottom:15px;" id="yearOfPurchase" name="yearOfPurchase">

                                                                    <?php
                                                                    foreach ($carProperties['year'] as $row) {

                                                                    ?>
                                                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['year_of_purchase']; ?></option>
                                                                    <?php

                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>

                                                            <div class="col border">
                                                                <label for="kilometerDriven" class="">Kilometers Driven :-</label>

                                                                <select class="form-select " aria-label="Default select example" style="margin-top:5px;margin-bottom:15px;" id="kilometerDriven" name="kilometerDriven">

                                                                    <?php
                                                                    foreach ($carProperties['kilometer'] as $row) {

                                                                    ?>
                                                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['kilometer']; ?></option>
                                                                    <?php

                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer border-top-0 d-flex justify-content-center">
                                                            <button type="button" class="btn btn-success" data-dismiss="modal" aria-label="Close" onclick="saveData(baseURL)">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>dashboardCss/js/scripts.js"></script>
    <script src="<?php echo base_url(); ?>dashboardCss/js/datatables-simple-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer></script>


</body>

</html>

<!-- HTML !-->


/* CSS */