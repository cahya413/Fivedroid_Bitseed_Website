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

// Query untuk mengambil data dari tabel tbltanaman
$sql = "SELECT nama FROM tbltanaman";
$result = $conn->query($sql);

// Memeriksa dan menampilkan data
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<div class="col-md-6 col-xl-3 column-card">';
        echo '<div class="card text-center">';
        echo '<div class="mb-2 card-body text-muted">';
        echo '<h3 class="text-info mt-2">' . $row["nama"] . '</h3>';
        echo '<a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Edit</a>';
        echo '</div></div></div>';
    }
} else {
    echo "0 results";
}

$conn->close();
?>
