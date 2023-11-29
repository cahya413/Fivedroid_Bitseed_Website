<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BitSeed</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="icon" type="image/x-icon" href="img/icon/icon-bitseed.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h1 class="m-0">BitSeed</h1>
            <!-- <img width="97px" src="img/icon/logo-bitseed.png" alt=""> -->
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link">Beranda</a>
                <a href="about.php" class="nav-item nav-link">Tentang</a>
                <a href="fitur.php" class="nav-item nav-link">Fitur</a>
                <a href="contact.php" class="nav-item nav-link">Kontak</a>
                <a href="favorite.php" class="nav-item nav-link"><i class="fas fa-star"></i></a>            
            </div>
            <?php
                if (isset($_SESSION['user_identifier'])) {
                    echo '<a href="#" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">' . $_SESSION['username'] . '</a>';
                    echo '<a href="logout.php" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">Logout<i class="fa fa-arrow-right ms-3"></i></a>';
                } else {
                    echo '<a href="login.php" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">Sign in<i class="fa fa-arrow-right ms-3"></i></a>';
                }
            ?>
        </div>
    </nav>
    </nav>
<!-- Navbar End -->


    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Tentang Kami</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tentang</li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5 align-items-end">
          <div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
            <img
              class="img-fluid rounded"
              data-wow-delay="0.1s"
              src="img/about.jpg"
            />
          </div>
          <div class="col-lg-6 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
            <h1 class="display-1 text-primary mb-0">BitSeed</h1>
            <p class="text-primary mb-4">We Make It Grow</p>
            <h1 class="display-5 mb-4">
              Kami Membantu Membangung Perkebunan dan Taman Anda
            </h1>
            <p class="mb-4">
              Kami Membantu Banyak Masyarakat Terkhususnya Petani dan Hobis
              Tanaman Untuk Merawat Kebun atau Taman Mereka.
            </p>
            <!-- <a class="btn btn-primary py-3 px-4" href="">Lebih Lanjut</a> -->
          </div>
          <div class="col-lg-3 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
            <div class="row g-5">
              <div class="col-12 col-sm-6 col-lg-12">
                <div class="border-start ps-4">
                  <i class="fa fa-award fa-3x text-primary mb-3"></i>
                  <h4 class="mb-3">Terpercaya</h4>
                  <span
                    >Kami telah melakukan berbagai penelitian dan 
                    berunding dengan berbagai pakar dalam proyek kami.</span
                  >
                </div>
              </div>
              <div class="col-12 col-sm-6 col-lg-12">
                <div class="border-start ps-4">
                  <i class="fa fa-users fa-3x text-primary mb-3"></i>
                  <h4 class="mb-3">Team Profesional</h4>
                  <span
                    >Kami memiliki team profesional yang sedia selalu membantu anda
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    <div
      class="container-fluid facts my-5 py-5"
      data-parallax="scroll"
      data-image-src="img/carousel-1.jpg"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div
            class="col-sm-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.1s"
          >
            <h1 class="display-4 text-white">We</h1>
            <span class="fs-5 fw-semi-bold text-light">Simple</span>
          </div>
          <div
            class="col-sm-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.3s"
          >
            <h1 class="display-4 text-white">Make</h1>
            <span class="fs-5 fw-semi-bold text-light">Reliable</span>
          </div>
          <div
            class="col-sm-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.5s"
          >
            <h1 class="display-4 text-white">It</h1>
            <span class="fs-5 fw-semi-bold text-light">Easy</span>
          </div>
          <div
            class="col-sm-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.7s"
          >
            <h1 class="display-4 text-white">Grow</h1>
            <span class="fs-5 fw-semi-bold text-light">Healthy</span>
          </div>
        </div>
      </div>
    </div>
    <!-- Facts End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div
          class="text-center mx-auto wow fadeInUp"
          data-wow-delay="0.1s"
          style="max-width: 500px"
        >
          <p class="fs-5 fw-bold text-primary">Team Kami</p>
          <h1 class="display-5 mb-5">Anggota Tim yang Profesional & Berpengalaman</h1>
        </div>
        <div class="row g-4 justify-content-center">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item rounded">
              <img class="img-fluid" style="height: 500px;" src="img/akil2.jpg" alt="" />
              <div class="team-text">
                <h4 class="mb-0">Ibnu Aqil Mahendar</h4>
                <p class="text-primary">Front-End Developer</p>
                <div class="team-social d-flex">
                  <a class="btn btn-square rounded-circle me-2" href="https://www.instagram.com/akilmhndr/"
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="team-item rounded">
              <img class="img-fluid" style="height: 500px; width:420px;" src="img/fatfat.jpg" alt="" />
              <div class="team-text">
                <h4 class="mb-0">Muhammad Fathi Ramdhana</h4>
                <p class="text-primary">Graphic Designer</p>
                <div class="team-social d-flex">
                  <a class="btn btn-square rounded-circle me-2" href="https://www.instagram.com/ffathi__/"
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="team-item rounded">
              <img class="img-fluid" style="height: 500px; width:420px;" src="img/cahyai.jpg" alt="" />
              <div class="team-text">
                <h4 class="mb-0">Cahya Rudiansah</h4>
                <p class="text-primary">Graphic Designer</p>
                <div class="team-social d-flex">
                  <a class="btn btn-square rounded-circle me-2" href="https://www.instagram.com/cahrudiansah/"
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="team-item rounded">
              <img class="img-fluid" style="height: 500px;" src="img/fillahi.jpg" alt="" />
              <div class="team-text">
                <h4 class="mb-0">Muhammad Fillah Alfatih</h4>
                <p class="text-primary">Android Developer</p>
                <div class="team-social d-flex">
                  <a class="btn btn-square rounded-circle me-2" href="https://www.instagram.com/fillah_alfatih/"
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="team-item rounded">
              <img class="img-fluid" style="height: 500px;" src="img/dika1.jpg" alt="" />
              <div class="team-text">
                <h4 class="mb-0">Capriandika Putra Susanto</h4>
                <p class="text-primary">Web Developer</p>
                <div class="team-social d-flex">
                  <a class="btn btn-square rounded-circle me-2" href="https://www.instagram.com/dnightfall/"
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Team End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Kontak</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Sekolah Vokasi Institut Pertanian Bogor, Kota Bogor, Jawa Barat 16128</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>02518329101</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>halobitseed@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://twitter.com/HaloBitSeed"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://www.youtube.com/@HaloBitSeed"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://www.linkedin.com/in/bit-seed-309a25290"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Fitur</h4>
                    <a class="btn btn-link" href="tanam.php">Tanam</a>
                    <a class="btn btn-link" href="toko.php">Toko</a>
                    <a class="btn btn-link" href="komunitas.php">Komunitas</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="about.php">Tentang</a>
                    <a class="btn btn-link" href="fitur.php">Fitur</a>
                    <a class="btn btn-link" href="contact.php">Kontak</a>
                    <!-- <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a> -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <h1 style="font-size: 50px; text-align: center; margin-top: 50px;" class="text-white mt-6"><a style="color:white;" href="index.php">BitSeed</a></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; 2023 <a href="index.php">BitSeed</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    Designed By Fivedroid
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a
      href="#"
      class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>
