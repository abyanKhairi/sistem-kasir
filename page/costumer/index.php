<?php
include("../../function/koneksi.php");


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
                            <a data-toggle="tooltip" data-confirm="Yakin Ingin Log Out?" data-confirm-yes="window.location.href='../../login/login.php'" class="dropdown-item has-icon text-danger">
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
                        <li class="dropdown">
                            <a href="../dashboard/index.php"><i class="fas fa-fire"></i><span>Dashboard</span></a>
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
                        <li class="dropdown  active ">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i><span>Costumers</span></a>
                            <ul class="dropdown-menu">
                                <li class=" active"><a class="nav-link" href="#">Customers</a></li>
                                <li><a class="nav-link" href="costumer.php">Costumers Settings</a></li>
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
                        <h1>Costumers</h1>
                    </div>

                    <div class="col-18 col-md-16 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Costumers Information</h4>
                            </div>
                            <div class="card-body p-0" style="text-align : center;">
                                <div class="table-responsive">
                                    <table class="table table-striped table-md">
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">No Hp</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        <?php
                                        $sql = "SELECT * FROM `pembeli`";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $row["nama"] ?></td>
                                                <td><?php echo $row["alamat"] ?></td>
                                                <td><?php echo $row["no_tlp"] ?></td>
                                                <td>
                                                    <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit" href="costumer.php?id_pembeli=<?php echo $row["id_pembeli"] ?>" ><i class="fas fa-pencil-alt"></i></a>
                                                    <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" href="class.php?id_pembeli=<?php echo $row["id_pembeli"] ?>" ><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <nav class="d-inline-block">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
            </div>

            </section>
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