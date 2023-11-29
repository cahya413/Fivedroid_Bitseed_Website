<?php
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

// Cek apakah form telah disubmit
if(isset($_POST['submit'])) {
    // Validasi form untuk memastikan semua kolom yang diperlukan diisi
    if(empty($_POST['inputBuah']) || empty($_POST['inputKategori']) || empty($_POST['inputDeskripsi']) || empty($_POST['inputPersiapanbibit']) || empty($_POST['inputPenanaman']) || empty($_POST['inputPerawatan']) || !isset($_FILES['InputGambar'])) {
        echo "Harap isi semua kolom yang diperlukan.";
        exit();
    }

    // Gunakan prepared statement untuk mencegah SQL injection
    $stmt = $conn->prepare("INSERT INTO tbltanaman (nama, kategori, deskripsi, persiapan, penanaman, perawatan, gambar) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $nama_tanaman, $kategori, $deskripsi, $persiapan_bibit, $penanaman, $perawatan, $gambar);

    // Ambil data yang dikirim dari form HTML
    $nama_tanaman = $_POST['inputBuah'];
    $kategori = $_POST['inputKategori'];
    $deskripsi = $_POST['inputDeskripsi'];
    $persiapan_bibit = $_POST['inputPersiapanbibit'];
    $penanaman = $_POST['inputPenanaman'];
    $perawatan = $_POST['inputPerawatan'];

    if (isset($_FILES['InputGambar']) && $_FILES['InputGambar']['error'] == UPLOAD_ERR_OK) {
        $gambar = $_FILES['InputGambar']['tmp_name'];
        $gambar = file_get_contents($gambar);
    } else {
        echo "Error mengunggah gambar.";
        exit();
    }

    // Eksekusi prepared statement
    if ($stmt->execute()) {
        echo "Data baru berhasil ditambahkan";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Tutup prepared statement
    $stmt->close();
}

// Tutup koneksi ke database

?>
<?php


$url = 'https://asia-south1.gcp.data.mongodb-api.com/app/application-0-gqtfg/endpoint/bitseed_insertTanaman';
$customrequest = 'POST';

$data = array(
    'nama_tanaman' => $nama_tanaman,
    'kategori' => $kategori,
    'deskripsi' => $deskripsi,
    'persiapan_bibit' => $persiapan_bibit,
    'penanaman' => $penanaman,
    'perawatan' => $perawatan,
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
        window.location.href = 'index.php';
    }, 2000);
</script>
