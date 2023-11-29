<?php
// index.php

session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    // Jika belum login, redirect ke halaman login
    header("Location: login.html");
    exit();
}

// Jika sudah login, tampilkan halaman dengan dropdown
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Dashboard | BITSEED</title>
    <script>
        function loadData(category) {
          var xhr = new XMLHttpRequest();
          xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("dataContainer").innerHTML = this.responseText;
            }
          };

          // Ganti "get_data.php" dengan nama file atau URL yang sesuai untuk mengambil data dari database
          xhr.open("GET", "get_data.php?category=" + category, true);
          xhr.send();
        }
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      content="Premium Multipurpose Admin & Dashboard Template"
      name="description"
    />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />

    <!-- Bootstrap Css -->
    <link
      href="assets/css/bootstrap.min.css"
      id="bootstrap-style"
      rel="stylesheet"
      type="text/css"
    />

    <link
      href="assets/css/index.css"
      id="bootstrap-style"
      rel="stylesheet"
      type="text/css"
    />

    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link
      href="assets/css/app.min.css"
      id="app-style"
      rel="stylesheet"
      type="text/css"
    />
  </head>

  <body data-sidebar="dark">


    <!-- Loader -->
    <div id="preloader">
      <div id="status">
        <div class="spinner"></div>
      </div>
    </div>

    <!-- Begin page -->
    <div id="layout-wrapper">
      <header id="page-topbar">
        <div class="navbar-header">
          <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
              <a href="index.php" class="logo logo-dark">
                <span class="logo-sm">
                  <p style="text-align: center; font-size: 20px; color: whitesmoke;" class="mt-5">BitSeed | Admin</p>
                </span>
                <span class="logo-lg">
                  <p style="text-align: center; font-size: 20px; color: whitesmoke;" class="mt-5">BitSeed | Admin</p>
                </span>
              </a>

              <a href="index.php" class="logo logo-light">
                <span class="logo-sm">
                  <p style="text-align: center; font-size: 20px; color: whitesmoke;" class="mt-5">BitSeed | Admin</p>
                </span>
                <span class="logo-lg">
                  <p style="text-align: center; font-size: 20px; color: whitesmoke;" class="mt-5">BitSeed | Admin</p>
                </span>
              </a>
            </div>

            <button
              type="button"
              class="btn btn-sm px-3 font-size-24 header-item waves-effect"
              id="vertical-menu-btn"
            >
              <i class="mdi mdi-menu"></i>
            </button>

            <div class="d-none d-sm-block ms-2">
              <h4 class="page-title font-size-18">Dashboard</h4>
            </div>
          </div>
          
          <!-- Search input -->
          <div class="search-wrap" id="search-wrap">
            <div class="search-bar">
              <input class="search-input form-control" placeholder="Search" />
              <a
                href="#"
                class="close-search toggle-search"
                data-bs-target="#search-wrap"
              >
                <i class="mdi mdi-close-circle"></i>
              </a>
            </div>
          </div>

          <div class="d-flex">
            <div class="dropdown d-none d-lg-inline-block">
              <button
                type="button"
                class="btn header-item toggle-search noti-icon waves-effect"
                data-bs-target="#search-wrap"
              >
                <i class="mdi mdi-magnify"></i>
              </button>
            </div>

            <div class="dropdown d-none d-lg-inline-block">
              <button
                type="button"
                class="btn header-item noti-icon waves-effect"
                data-bs-toggle="fullscreen"
              >
                <i class="mdi mdi-fullscreen"></i>
              </button>
            </div>

            <div class="dropdown d-inline-block ms-2">
        <button
            type="button"
            class="btn header-item waves-effect"
            id="page-header-user-dropdown"
            data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
        >
            <img
                class="rounded-circle header-profile-user"
                src="assets/images/users/avatar-1.jpg"
                alt="Header Avatar"
            />
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <?php
                if (isset($_SESSION['user_identifier'])) {
                    echo '<a class="dropdown-item" href="#" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">' . $_SESSION['username'] . '</a>';
                    echo '<a class="dropdown-item" href="logout.php" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">Logout<i class="fa fa-arrow-right ms-3"></i></a>';
                } else {
                    echo '<a class="dropdown-item" href="login.html" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">Sign in<i class="fa fa-arrow-right ms-3"></i></a>';
                }
            ?>
        </div>
    </div>

            <div class="dropdown d-inline-block">
              <button
                type="button"
                class="btn header-item noti-icon right-bar-toggle waves-effect"
              >
                <i class="mdi mdi-spin mdi-cog"></i>
              </button>
            </div>
          </div>
        </div>
      </header>

    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">
      <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
          <!-- Left Menu Start -->
          <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title">Main</li>

            <li>
              <a href="index.php" class="waves-effect">
                <i class="dripicons-device-desktop"></i>
                <span>Dashboard</span>
              </a>
            </li>
            <li>
              <a href="ulasan.php" class="waves-effect">
                <i class="dripicons-star"></i>
                <span>Ulasan</span>
              </a>
            </li>
            <li>
                <a href="toko.php" class="waves-effect">
                  <i class="dripicons-store"></i>
                  <span>Toko</span>
                </a>
            </li>
            <li class="menu-title">Extras</li>

            </li>

            <li>
              <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="dripicons-copy"></i>
                <span> Pages </span>
              </a>
              <ul class="sub-menu" aria-expanded="false">
                <li><a href="pages-login.html">Login</a></li>
                <li><a href="pages-register.html">Register</a></li>
                <li><a href="pages-starter.html">Starter Page</a></li>
                <li><a href="pages-404.html">Error 404</a></li>
                <li><a href="pages-500.html">Error 500</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- Sidebar -->
      </div>
    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  Admin MA IPB<span class="d-none d-sm-inline-block">
                    - Kelompok 4 <i class="mdi mdi-heart text-danger"></i> by
                    Keluarga cemara</span
                  >
                </div>
              </div>
            </div>
          </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">
        <div class="rightbar-title px-3 py-4">
            <a href="javascript:void(0);" class="right-bar-toggle float-end">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
            <h5 class="m-0">Settings</h5>
        </div>

        <!-- Settings -->
        <hr class="mt-0" />
        <h6 class="text-center mb-0">Choose Demo</h6>

        <div class="p-4">
            <div class="mb-2">
                <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                <label class="form-check-label" for="light-mode-switch">Light Mode</label>
            </div>

            <div class="mb-2">
                <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
                <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
            </div>

            <div class="mb-2">
                <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch">
                <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
            </div>

            <h6 class="mt-4">Select Custom Colors</h6>
            <div class="d-flex">
                
            <ul class="list-unstyled mb-0">
                <li class="form-check">
                    <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-default" value="default" onchange="document.documentElement.setAttribute('data-theme-mode', 'default')" checked>
                    <label class="form-check-label" for="theme-default">Default</label>
                </li>
                <li class="form-check">
                    <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-orange" value="orange" onchange="document.documentElement.setAttribute('data-theme-mode', 'orange')">
                    <label class="form-check-label" for="theme-orange">Orange</label>
                </li>
                <li class="form-check">
                    <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-teal" value="teal" onchange="document.documentElement.setAttribute('data-theme-mode', 'teal')">
                    <label class="form-check-label" for="theme-teal">Teal</label>
                </li>
            </ul>

            <ul class="list-unstyled mb-0 ms-4">
                <li class="form-check">
                    <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-purple" value="purple" onchange="document.documentElement.setAttribute('data-theme-mode', 'purple')">
                    <label class="form-check-label" for="theme-purple">Purple</label>
                </li>
                <li class="form-check">
                    <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-green" value="green" onchange="document.documentElement.setAttribute('data-theme-mode', 'green')">
                    <label class="form-check-label" for="theme-green">Green</label>
                </li>
                <li class="form-check">
                    <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-red" value="red" onchange="document.documentElement.setAttribute('data-theme-mode', 'red')">
                    <label class="form-check-label" for="theme-red">Red</label>
                </li>
            </ul>

            </div>
        </div>

    </div>
    <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->
<div class="main-content" style="margin-top: -8%;">
    <div class="page-content mb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-5">Ulasan</h4>

                            <table id="datatable-buttons"
                                class="table table-striped table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Komen</th>
                                        <th>Attachment</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $servername = "localhost"; // Ganti sesuai dengan server Anda
    $username = "id21578052_capri"; // Ganti dengan username database Anda
    $password = "Capri_DNight1"; // Ganti dengan password database Anda
    $dbname = "id21578052_bitseed"; // Ganti dengan nama database Anda
                
                                    // Membuat koneksi
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                
                                    // Memeriksa koneksi
                                    if ($conn->connect_error) {
                                        die("Koneksi gagal: " . $conn->connect_error);
                                    }
                                    // Menggabungkan data dari tblulasan dan tblpengguna berdasarkan email
                                    $sql = "SELECT u.id, p.username, p.email, u.komen, u.attachment FROM tblulasan u
                                            INNER JOIN tblpengguna p ON u.email = p.email";

                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row["username"]; ?></td>
                                                <td><?php echo $row["email"]; ?></td>
                                                <td><?php echo $row["komen"]; ?></td>
                                                <td>
                                                    <!-- Tombol untuk melihat foto -->
                                                    <a href="lihat_foto.php?id=<?php echo $row["id"]; ?>" class="btn btn-info btn-sm">Lihat Foto</a>
                                                </td>
                                                <td>
                                                    <!-- Tombol untuk menghapus data -->
                                                    <a href="hapus_ulasan.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus ulasan ini?')">Hapus</a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        echo "<tr><td colspan='5'>Tidak ada ulasan.</td></tr>";
                                    }

                                    // Menutup koneksi setelah selesai
                                    $conn->close();
                                    ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </div>
</div>



<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>

<!-- Required datatable js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="assets/libs/jszip/jszip.min.js"></script>
<script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="assets/js/pages/datatables.init.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>