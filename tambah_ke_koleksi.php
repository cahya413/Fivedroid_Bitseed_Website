<?php
session_start();

if (isset($_SESSION['user_identifier'])) {
    $user_email = $_SESSION['user_identifier'];
    $tanaman_id = isset($_GET['id']) ? $_GET['id'] : 0;

    // Lakukan koneksi ke database
    $servername = "localhost"; // Ganti sesuai dengan server Anda
    $username = "id21578052_capri"; // Ganti dengan username database Anda
    $password = "Capri_DNight1"; // Ganti dengan password database Anda
    $dbname = "id21578052_bitseed"; // Ganti dengan nama database Anda

    // Membuat koneksi
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Cek koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Query untuk menambahkan ke koleksi
    $sql = "INSERT INTO tblkoleksi (id_tanaman, email) VALUES ($tanaman_id, '$user_email')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: favorite.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Tutup koneksi ke database
    $conn->close();
} else {
    echo "Silakan login terlebih dahulu.";
}
?>
