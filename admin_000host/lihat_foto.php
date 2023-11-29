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

// Ambil ID ulasan dari parameter URL
$idUlasan = $_GET['id'];

// Query untuk mendapatkan informasi ulasan berdasarkan ID
$sql = "SELECT u.attachment FROM tblulasan u WHERE u.id = $idUlasan";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Tampilkan foto
    echo '<img src="data:image/jpeg;base64,' . base64_encode($row['attachment']) . '" alt="Ulasan Foto">';
    echo "ID Ulasan: " . $idUlasan;
} else {
    echo "Foto tidak ditemukan.";
}

// Menutup koneksi
$conn->close();
?>
