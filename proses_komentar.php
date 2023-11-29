<?php
session_start();

// Pastikan ada sesi yang terautentikasi
if (!isset($_SESSION['user_identifier'])) {
    header("Location: login.php");
    exit();
}

// Ambil data dari formulir
$komentar = $_POST['komentar'];
$email = $_SESSION['user_identifier']; // Menggunakan sesi email pengguna yang terotentikasi

// Proses unggahan foto
if (isset($_FILES['imageUpload']) && $_FILES['imageUpload']['error'] == UPLOAD_ERR_OK) {
    $gambar_produk = $_FILES['imageUpload']['tmp_name'];
    $gambar_produk = file_get_contents($gambar_produk);
} else {
    echo "Error uploading image.";
    // Handle the error accordingly (e.g., redirect back to the form)
    exit();
}

// Simpan data ke database
$servername = "localhost";
$username = "id21578052_capri";
$password = "Capri_DNight1";
$dbname = "id21578052_bitseed";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO tblulasan (email, komen, attachment) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $email, $komentar, $gambar_produk); // Menggunakan $gambar_produk langsung

// Eksekusi statement
if ($stmt->execute()) {
} else {
    echo "Error: " . $sql . "<br>" . $stmt->error;
}

$stmt->close();
//menyimpan ke mongodb
?>
<?php

$url = 'https://asia-south1.gcp.data.mongodb-api.com/app/application-0-gqtfg/endpoint/bitseed_insertKomen';
$customrequest = 'POST';

$data = array(
    'email' => $email,
    'komentar' => $komentar,
);

$cUrl = curl_init();

$options = array(
    CURLOPT_URL => $url,
    CURLOPT_CUSTOMREQUEST => $customrequest,
    CURLOPT_POSTFIELDS => http_build_query($data), 
);

curl_setopt_array($cUrl, $options);

$response = curl_exec($cUrl);

curl_close($cUrl);

$conn->close();

// Redirect ke halaman testimonial setelah selesai
header("Location: komunitas.php");
exit();
?>
