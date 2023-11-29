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

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/komunitas.css">
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
                <a href="favorite.html" class="nav-item nav-link"><i class="fas fa-star"></i></a>            
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
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Tambah Ulasans</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="fitur.php">Fitur</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Komunitas</li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Ulasan</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div id="main-content" class="blog-page">
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 mx-auto mt-4">
                    <div class="card single_post shadow p-3">
                        <form action="proses_komentar.php" method="post" enctype="multipart/form-data" accept=".jpeg, .jpg, .png, .heic">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Komen</label>
                                <textarea class="form-control" name="komentar" id="exampleFormControlTextarea1" rows="5" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Photo</label>
                                <input type="file" name="imageUpload" id="imageUpload" required>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary me-2">Simpan</button>
                                <a href="komunitas.php" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 right-box shadow">
                        <a class="container btn btn-success mt-4" href=""><i class="fas fa-plus me-2"></i>Tambah Artikel</a>
                    <div class="card">

                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Popular Posts</h2>                        
                        </div>
                        <div class="body widget popular-post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="single_post">
                                        <p class="m-b-0">DIKA</p>
                                        <span>November 22, 2023</span>
                                        <div class="img-post">
                                            <img src="/img/cahya/gal1.jpg" alt="Awesome Image">                                        
                                        </div>                                            
                                    </div>
                                    <div class="single_post">
                                        <p class="m-b-0">Akil</p>
                                        <span>November 26, 2023</span>
                                        <div class="img-post">
                                            <img src="/img/cahya/gal2.jpg" alt="Awesome Image">                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Instagram Post</h2>
                        </div>
                        <div class="container body widget">
                            <ul class="list-unstyled instagram-plugin m-b-0" >
                                <li><a href="javascript:void(0);"><img src="/img/cahya/toko1.jpeg" style="width: 20%;" alt="image description"></a></li>
                                <li><a href="javascript:void(0);"><img src="/img/cahya/toko2.jpeg" style="width: 20%;" alt="image description"></a></li>
                                <li><a href="javascript:void(0);"><img src="/img/cahya/toko3.jpeg" style="width: 20%;" alt="image description"></a></li>
                                <li><a href="javascript:void(0);"><img src="/img/cahya/toko4.jpeg" style="width: 50%;" alt="image description"></a></li>
                                <li><a href="javascript:void(0);"><img src="/img/cahya/toko5.jpeg" style="width: 50%;" alt="image description"></a></li>
                                <li><a href="javascript:void(0);"><img src="/img/cahya/toko6.jpeg" style="width: 50%;" alt="image description"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    </div>

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
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


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