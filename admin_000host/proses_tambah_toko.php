<?php
ini_set('max_execution_time', 300); // 300 detik atau sesuaikan dengan kebutuhan
ini_set('mysql.connect_timeout', 300);
ini_set('default_socket_timeout', 300);
// Koneksi ke database (sesuaikan dengan informasi database Anda)
$servername = "localhost"; // Ganti sesuai dengan server Anda
    $username = "id21578052_capri"; // Ganti dengan username database Anda
    $password = "Capri_DNight1"; // Ganti dengan password database Anda
    $dbname = "id21578052_bitseed"; // Ganti dengan nama database Anda

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Tangkap data dari formulir
$nama_toko = $_POST['inputToko'];
$nomor_telp = $_POST['inputNomortelp'];
$lokasi_toko = $_POST['inputLokasi'];

// Tangkap data gambar
if (isset($_FILES['InputGambartoko']) && $_FILES['InputGambartoko']['error'] == UPLOAD_ERR_OK) {
    $gambar_toko = $_FILES['InputGambartoko']['tmp_name'];
    $gambar_toko = file_get_contents($gambar_toko);
} else {
    echo "Error uploading image.";
    // Handle the error accordingly (e.g., redirect back to the form)
    exit();
}

// Siapkan statement SQL untuk menyimpan data (tanpa menyertakan id_toko)
$sql = "INSERT INTO tbltoko (nama_toko, telp_toko, lokasi_toko, gambar_toko) VALUES (?, ?, ?, ?)";

// Gunakan prepared statement untuk mencegah SQL injection
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $nama_toko, $nomor_telp, $lokasi_toko, $gambar_toko);

// Eksekusi statement
$stmt->execute();

// Tutup statement dan koneksi
$stmt->close();

?>
<?php


$url = 'https://asia-south1.gcp.data.mongodb-api.com/app/application-0-gqtfg/endpoint/bitseed_insertToko';
$customrequest = 'POST';

$data = array(
    'nama_toko' => $nama_toko,
    'lokasi_toko' => $lokasi_toko,
    'nomor_telp' => $nomor_telp,
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
?>
<script>
    alert('Data baru berhasil ditambahkan');
    setTimeout(function() {
        window.location.href = 'toko.php';
    }, 2000); // Arahkan kembali ke index.php setelah 2 detik
</script>
