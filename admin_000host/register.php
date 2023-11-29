<?php
$servername = "localhost"; // Ganti sesuai dengan server Anda
    $username = "id21578052_capri"; // Ganti dengan username database Anda
    $password = "Capri_DNight1"; // Ganti dengan password database Anda
    $dbname = "id21578052_bitseed"; // Ganti dengan nama database Anda
// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil input pengguna
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);

    // Hasilkan token verifikasi
    $verificationToken = bin2hex(random_bytes(3));

    // Masukkan data pengguna ke tbluser
    $sql = "INSERT INTO tbluser (username, email, password, verification_token) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $username, $email, $password, $verificationToken);
    $stmt->execute();

    // Tutup pernyataan
    $stmt->close();

    // Kirim email verifikasi (Anda perlu mengimplementasikan bagian ini)
    // ...

    // Alihkan ke halaman sukses atau tampilkan pesan sukses
    header("Location: registration_success.php");
    exit();
}

// Tutup koneksi database
$conn->close();
?>