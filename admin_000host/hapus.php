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

if (isset($_GET['nama'])) {
    $nama_tanaman = $_GET['nama'];

    // Periksa apakah ada rekaman terkait di tblkoleksi
    $check_sql = "SELECT id_koleksi FROM tblkoleksi WHERE id_tanaman IN (SELECT id_tanaman FROM tbltanaman WHERE nama='$nama_tanaman')";
    $result = $conn->query($check_sql);

    if ($result->num_rows > 0) {
        // Hapus rekaman terkait di tblkoleksi
        $delete_koleksi_sql = "DELETE FROM tblkoleksi WHERE id_tanaman IN (SELECT id_tanaman FROM tbltanaman WHERE nama='$nama_tanaman')";
        $conn->query($delete_koleksi_sql);
    }

    // Sekarang, hapus rekaman dari tbltanaman
    $delete_tanaman_sql = "DELETE FROM tbltanaman WHERE nama='$nama_tanaman'";
    if ($conn->query($delete_tanaman_sql) === TRUE) {
        echo "Data berhasil dihapus";
    } else {
        echo "Error: " . $delete_tanaman_sql . "<br>" . $conn->error;
    }
}

?>
<?php

    $cUrl = curl_init();

    $options = array(
        CURLOPT_URL => 'https://asia-south1.gcp.data.mongodb-api.com/app/application-0-gqtfg/endpoint/bitseed_deleteTanaman?nama_tanaman='.$nama_tanaman,
        CURLOPT_CUSTOMREQUEST => 'DELETE'
    );

    curl_setopt_array($cUrl, $options);

    $response = curl_exec($cUrl);

    curl_close($cUrl);

    $conn->close();
?>
<script>
    alert('Data baru berhasil dihapus');
    setTimeout(function() {
        window.location.href = 'index.php';
    }, 2000); // Arahkan kembali ke index.php setelah 2 detik
</script>