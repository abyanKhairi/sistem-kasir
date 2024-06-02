<?php
include("../../function/koneksi.php");
include("class.php");

$dashboard = new Dashboard();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>General Dashboard</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="../../assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="../../assets/modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="../../assets/modules/weather-icon/css/weather-icons.min.css">
    <link rel="stylesheet" href="../../assets/modules/weather-icon/css/weather-icons-wind.min.css">
    <link rel="stylesheet" href="../../assets/modules/summernote/summernote-bs4.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                    </ul>

                </form>


                <!-- NavBAr-->

                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="../../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- <div class="dropdown-title">Logged in 5 min ago</div>
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="features-activities.html" class="dropdown-item has-icon">
                                <i class="fas fa-bolt"></i> Activities
                            </a>
                            <a href="features-settings.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a> -->
                            <!-- <div class="dropdown-divider"></div> -->
                            <a style="cursor: pointer;" data-toggle="tooltip" data-confirm="Yakin Ingin Log Out?" data-confirm-yes="window.location.href='../../login/login.php'" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>



            <!--sideBard-->


            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html">IYA</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">Y</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li class="dropdown active">
                            <a href="index.php"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                        </li>

                        
                        <li class="menu-header">User</li>
                        <li class="dropdown ">
                            <a href="../user/index.php"><i class="fas fa-user"></i><span>User Management</span></a>
                        </li>

                        <li class="menu-header">Produck</li>
                        <li class="dropdown ">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-shopping-basket"></i><span>Produck</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="../product/index.php">Product</a></li>
                                <li><a class="nav-link" href="../product/product.php">Product Settings</a></li>
                            </ul>

                        <li class="menu-header">Customers</li>
                        <li class="dropdown ">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i><span>Costumers</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="../costumer/index.php">Customers</a></li>
                                <li><a class="nav-link" href="../costumer/costumer.php">Costumers Settings</a></li>
                            </ul>


                        <li class="menu-header">Transaksi</li>
                        <li class="dropdown ">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-credit-card"></i><span>Transaksi</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="../transaksi/index.php">Transaksi</a></li>
                                <li><a class="nav-link" href="../transaksi/transaksi.php">Detail Transaksi</a></li>
                            </ul>

                    </ul>
                </aside>
            </div>







            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Dashboard</h1>
                    </div>
                    <div class="row">

                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-primary">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                    <a href="../user/index.php"> <h4>Total User</h4></a>
                                    </div>
                                    <div class="card-body">
                                        <!-- Jumlah Admin -->
                                        <?php echo $dashboard->jumlahAdmin()?>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-danger">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <a href="../costumer/index.php"> <h4>Total Costumers</h4></a>
                                        </div>
                                    <div class="card-body">
                                        <?php echo $dashboard->jumlahCostumer()?>
                                        <!-- Total Costumer -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-warning">
                                    <i class="fas fa-archive"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Total Product</h4>
                                    </div>
                                    <div class="card-body">
                                        <!-- Total Product -->
                                        <?php echo $dashboard->jumlahProduk()?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-success">
                                    <i class="fas fa-file"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Total Transaksi</h4>
                                    </div>
                                    <div class="card-body">
                                        <!-- Total Transaksi -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>





                    <div class="card">
                        <div class="card-header">
                            <h4 class="d-inline">User Admin And Super Admin</h4>

                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled list-unstyled-border">

                                <?php

                                global $conn;

                                $sql = "SELECT * FROM `user`";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <li class="media">
                                        <img class="mr-3 rounded-circle" width="50" src="../../assets/img/avatar/avatar-4.png" alt="avatar">
                                        <div class="media-body">
                                            <h6 class="media-title"><?php echo $row["nama"] ?></h6>
                                            <div class="text-small text-muted">@<?php echo $row["username"] ?> <div class="bullet"></div> <span class="text-primary"><?php echo $row["role"] ?></span></div>
                                        </div>
                                    </li>

                                <?php
                                }
                                ?>

                            </ul>
                        </div>
                    </div>
            </div>
        </div>



    </div>
    </section>
    </div>
    <footer class="main-footer">
        <div class="footer-left">
            <!-- Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a> -->
        </div>
        <div class="footer-right">

        </div>
    </footer>
    </div>
    </div>

    <!-- General JS Scripts -->
    <script src="../../assets/modules/jquery.min.js"></script>
    <script src="../../assets/modules/popper.js"></script>
    <script src="../../assets/modules/tooltip.js"></script>
    <script src="../../assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="../../assets/modules/moment.min.js"></script>
    <script src="../../assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="../../assets/modules/simple-weather/jquery.simpleWeather.min.js"></script>
    <script src="../../assets/modules/chart.min.js"></script>
    <script src="../../assets/modules/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="../../assets/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../../assets/modules/summernote/summernote-bs4.js"></script>
    <script src="../../assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="../../assets/js/page/index-0.js"></script>

    <!-- Template JS File -->
    <script src="../../assets/js/scripts.js"></script>
    <script src="../../assets/js/custom.js"></script>
</body>

</html>