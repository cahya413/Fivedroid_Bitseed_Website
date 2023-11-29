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
    <!--<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">-->
    <!--    <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>-->
    <!--</div>-->
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
<?php
$servername = "localhost"; // Ganti sesuai dengan server Anda
    $username = "id21578052_capri"; // Ganti dengan username database Anda
    $password = "Capri_DNight1"; // Ganti dengan password database Anda
    $dbname = "id21578052_bitseed"; // Ganti dengan nama database Anda

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

?>

    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container text-center py-5">
        <?php
        $toko_id1 = isset($_GET['id']) ? $_GET['id'] : 0; // Ganti dengan parameter yang sesuai dari URL
    $sql1 = "SELECT id_toko, nama_toko FROM tbltoko WHERE id_toko = $toko_id1";
    $result1 = $conn->query($sql1);

    // Cek apakah ada data yang diambil
    if ($result1->num_rows > 0) {
        // Ambil data dari baris pertama
        $row = $result1->fetch_assoc();

        $nama_toko1 = $row["nama_toko"];

    echo '<h1 class="display-3 text-white mb-4 animated slideInDown">' . $nama_toko1 . '</h1>';}
    ?>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb justify-content-center mb-0">
              <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Fitur</li>
            <li class="breadcrumb-item active" aria-current="page">Tanam</li>
            <li class="breadcrumb-item active" aria-current="page">Buah</li>
            <?php
            echo '<li class="breadcrumb-item active" aria-current="page">'. $nama_toko1 .'</li>';
            ?>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <?php
// Koneksi ke database (sesuaikan dengan informasi database Anda)


// Periksa apakah parameter id_toko sudah diterima melalui URL
if (isset($_GET['id'])) {
    $id_toko = $_GET['id'];

    // Query untuk mengambil data detail toko berdasarkan id_toko
    $sql_toko = "SELECT id_toko, nama_toko, lokasi_toko, gambar_toko, telp_toko FROM tbltoko WHERE id_toko = $id_toko";
    $result_toko = $conn->query($sql_toko);

    if ($result_toko->num_rows > 0) {
        // Output data
        $row_toko = $result_toko->fetch_assoc();
        $nama_toko = $row_toko['nama_toko'];
        $lokasi_toko = $row_toko['lokasi_toko'];
        $gambar_toko = base64_encode($row_toko['gambar_toko']);
        $telp_toko = $row_toko['telp_toko'];

        // Tampilkan data dalam elemen HTML
        echo '<div class="container-xxl py-5">';
        echo '<div class="container">';
        echo '<div class="row g-5">';

        echo '<div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">';
        echo '<p class="fs-5 fw-bold text-primary">' . $telp_toko . '</p>';
        echo '<h1 class="display-5 mb-5">' . $nama_toko . '</h1>';

        // Dropdown Kategori
        echo '<label for="kategoriDropdown" class="text-white">Kategori</label>';
        echo '<select id="kategoriDropdown" class="form-control">';
        echo '<option value="all">All</option>';
        echo '<option value="buah">Buah</option>';
        echo '<option value="sayur">Sayur</option>';
        echo '<option value="tanaman hias">Tanaman Hias</option>';
        echo '<option value="pupuk">Pupuk</option>';
        echo '<option value="lain">Lain</option>';
        echo '</select>';

        // Tampilkan Tabel Produk
        echo '<table id="produkTable" class="table">';
        echo '<thead>';
        echo '<tr>';
        echo '<th scope="col">No.</th>';
        echo '<th scope="col">Kategori</th>';
        echo '<th scope="col">Nama Produk</th>';
        echo '<th scope="col">Stok</th>';
        // Tambahkan kolom lain sesuai kebutuhan
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        // Query untuk mengambil data produk sesuai dengan id_toko
        $sql_produk = "SELECT * FROM tblproduk WHERE id_toko = $id_toko";
        $result_produk = $conn->query($sql_produk);

        // Periksa dan tampilkan data produk di dalam tabel
        if ($result_produk->num_rows > 0) {
            $no = 1;
            while ($row_produk = $result_produk->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $no . '</td>';
                echo '<td>' . $row_produk['kategori_produk'] . '</td>';
                echo '<td>' . $row_produk['nama_produk'] . '</td>';
                echo '<td>' . $row_produk['stok_produk'] . '</td>';
                echo '</tr>';
                $no++;
            }
        } else {
            echo '<tr><td colspan="4">Tidak ada data produk.</td></tr>';
        }

        echo '</tbody>';
        echo '</table>';

        echo '</div>';

        echo '<div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">';
        echo '<div class="position-relative rounded overflow-hidden h-100">';
        // Tampilkan peta dengan ukuran yang lebih kecil
        echo '<iframe src="' . $lokasi_toko . '" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
        echo '</div>';
        echo '</div>';

        echo '</div>';
        echo '</div>';
        echo '</div>';
    } else {
        echo "Toko tidak ditemukan.";
    }
} else {
    echo "Parameter id_toko tidak ditemukan.";
}

// Tutup koneksi
$conn->close();
?>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var kategoriDropdown = document.getElementById("kategoriDropdown");
        var produkTable = document.getElementById("produkTable");

        kategoriDropdown.addEventListener("change", function () {
            filterByCategory(this.value);
        });

        function filterByCategory(selectedCategory) {
            var rows = produkTable.querySelectorAll("tbody tr");

            for (var i = 0; i < rows.length; i++) {
                var cells = rows[i].getElementsByTagName("td");
                var rowCategory = cells[2].textContent.trim(); // Sesuaikan indeks ini dengan kolom kategori_produk pada tabel

                if (selectedCategory === "all" || rowCategory === selectedCategory) {
                    rows[i].style.display = "";
                } else {
                    rows[i].style.display = "none";
                }
            }
        }

        // Output kategori ke layar untuk penelusuran kesalahan
        console.log("Kategori yang terdapat dalam tabel produk:");
        <?php
            // Query untuk mengambil data produk sesuai dengan id_toko
            $sql_produk = "SELECT DISTINCT kategori_produk FROM tblproduk WHERE id_toko = $id_toko";
            $result_produk = $conn->query($sql_produk);

            if ($result_produk->num_rows > 0) {
                while ($row_produk = $result_produk->fetch_assoc()) {
                    echo 'console.log("' . $row_produk['kategori_produk'] . '");';
                }
            }
        ?>
    });
</script>

    <!-- Contact End -->


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