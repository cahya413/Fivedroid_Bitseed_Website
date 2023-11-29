<?php
session_start();

if (isset($_SESSION['user_identifier'])) {
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

    // Periksa apakah pengguna sudah login
    $user_email = $_SESSION['user_identifier'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data tanaman yang akan dihapus dari formulir
        $id_tanaman = isset($_POST['id_tanaman']) ? $_POST['id_tanaman'] : 0;

        // Query untuk menghapus tanaman dari koleksi pengguna
        $sql = "DELETE FROM tblkoleksi WHERE email = '$user_email' AND id_tanaman = $id_tanaman";

        if ($conn->query($sql) === TRUE) {
            // Redirect kembali ke favorit.php
            header("Location: favorite.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Tutup koneksi ke database
    $conn->close();
} else {
    echo "Silakan login terlebih dahulu.";
}
?>
