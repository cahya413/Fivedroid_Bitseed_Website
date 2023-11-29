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

// Memeriksa apakah form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data yang disubmit dari form
    $nama_toko = $_POST['inputToko'];
    $nomor_toko = (int)$_POST['inputNomortelp'];
    $lokasi_toko = $_POST['inputLokasi'];

    $gambar_toko = null;
    if (isset($_FILES['InputGambartoko']) && $_FILES['InputGambartoko']['error'] == UPLOAD_ERR_OK) {
        $gambar_toko_tmp = $_FILES['InputGambartoko']['tmp_name'];
        $gambar_toko = file_get_contents($gambar_toko_tmp);
    }

    // Query untuk memperbarui data ke database
    $sql = "UPDATE tbltoko SET telp_toko=?, lokasi_toko=?, gambar_toko=? WHERE nama_toko=?";
    
    // Gunakan prepared statement untuk mencegah SQL injection
    $stmt = $conn->prepare($sql);
    
    // Binding parameter
    $stmt->bind_param("ssbs", $nomor_toko, $lokasi_toko, $gambar_toko, $nama_toko);

    if ($stmt->execute()) {
        echo "Data berhasil diperbarui";
    } else {
        echo "Error: " . $sql . "<br>" . $stmt->error;
    }
}

$conn->close();
?>

<script>
    alert('Data baru berhasil ditambahkan');
    setTimeout(function() {
        window.location.href = 'toko.php';
    }, 2000); // Arahkan kembali ke index.php setelah 2 detik
</script>
