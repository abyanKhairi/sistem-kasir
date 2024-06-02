<?php
include "../../function/koneksi.php";

//create costumers
if (isset($_POST["submit"])) {

   global $conn;

   $nama = $_POST['nama'];
   $alamat = $_POST['alamat'];
   $no_tlp = $_POST['no_tlp'];



   $sql = "INSERT INTO `pembeli`(`id_pembeli`, `nama`, `alamat`, `no_tlp`) VALUES (NULL,'$nama','$alamat','$no_tlp')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}


//edit costumers

$got = "SELECT * FROM pembeli";
$result = mysqli_query($conn, $got);
$row = mysqli_fetch_assoc($result);

if ($row["id_pembeli"]) {
   
   $id = $_GET["id_pembeli"];
   $got = "SELECT * FROM pembeli";
   $result = mysqli_query($conn, $got);
   $row = mysqli_fetch_assoc($result);


   if (isset($_POST["update"])) {


      $name = $_POST['nama'];
      $alamat = $_POST['alamat'];
      $no_tlp = $_POST['no_tlp'];


      $sql = "UPDATE `pembeli` SET `nama`='$name',`alamat`='$alamat',`no_tlp`='$no_tlp' WHERE id_pembeli = $id";

      $result = mysqli_query($conn, $sql);

      if ($result) {
         header("Location: index.php?msg=Data Diupdate");
      } else {
         echo "Failed: " . mysqli_error($conn);
      }
   }
} else {
   echo "lsaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssssssssssssssssss";
}

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
                  <li class="dropdown">
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
                        <li><a class="nav-link" href="index.php">Customers</a></li>
                        <li class=" active"><a class="nav-link" href="#">Costumers Settings</a></li>
                     </ul>


                  <li class="menu-header">Transaksi</li>
                  <li class="dropdown ">
                     <a href="#" class="nav-link has-dropdown"><i class="fas fa-credit-card"></i><span>Transaksi</span></a>
                     <ul class="dropdown-menu">
                        <li><a class="nav-link" href="index-0.html">Transaksi</a></li>
                        <li><a class="nav-link" href="index.html">Detail Transaksi</a></li>
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

               <div class="row">
                  <div class="col-12 col-md-6 col-lg-6">
                     <div class="card">
                        <form method="post">
                           <div class="card-header">
                              <h4>Tambah Costumer</h4>
                           </div>
                           <div class="card-body">
                              <div class="form-group">
                                 <label>Name</label>
                                 <input type="text" class="form-control" name="nama" required>
                              </div>
                              <div class="form-group">
                                 <label>Alamat</label>
                                 <input type="text" class="form-control" required name="alamat">
                              </div>
                              <div class="form-group">
                                 <label>Nomor Telpon</label>
                                 <input type="text" class="form-control" required name="no_tlp">
                              </div>
                           </div>
                           <div class="card-footer text-right">
                              <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                           </div>
                        </form>
                     </div>
                  </div>



                  <div class="col-12 col-md-6 col-lg-6">
                     <div class="card">
                        <form method="post">
                           <div class="card-header">
                              <h4>Edit Costumer</h4>
                           </div>
                           <div class="card-body">
                              <div class="form-group">
                                 <label>Name</label>
                                 <input type="text" class="form-control" name="nama" required value="<?php echo $row['nama'] ?>">
                              </div>
                              <div class="form-group">
                                 <label>Alamat</label>
                                 <input type="text" class="form-control" required name="alamat" value="<?php echo $row['alamat'] ?>">
                              </div>
                              <div class="form-group">
                                 <label>Nomor Telpon</label>
                                 <input type="text" class="form-control" required name="no_tlp" value="<?php echo $row['no_tlp'] ?>">
                              </div>
                           </div>
                           <div class="card-footer text-right">
                              <button class="btn btn-primary" type="submit" name="update">Update</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </section>
         </div>
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