<?php
session_start();

$servername = "localhost"; // Ganti sesuai dengan server Anda
    $username = "id21578052_capri"; // Ganti dengan username database Anda
    $password = "Capri_DNight1"; // Ganti dengan password database Anda
    $dbname = "id21578052_bitseed"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil input pengguna
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Query untuk mengambil data pengguna berdasarkan email
    $sql = "SELECT * FROM tblpengguna WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Pengguna ditemukan, verifikasi password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            // Password cocok, set session dan alihkan ke halaman sukses
            $_SESSION["user_identifier"] = $row["email"];
            $_SESSION["username"] = $row["username"]; // Assuming you have a 'username' column in your database
            header("Location: index.php"); // Ganti dengan halaman yang sesuai
            exit();
        } else {
            // Password tidak cocok, tampilkan pesan error
            echo "Invalid password";
        }
    } else {
        // Pengguna tidak ditemukan, tampilkan pesan error
        echo "User not found";
    }

    // Tutup pernyataan
    $stmt->close();
}

// Tutup koneksi database
$conn->close();
?>
