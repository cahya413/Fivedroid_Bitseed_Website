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
    $nama_tanaman = $_POST['inputBuah'];
    $kategori = $_POST['inputKategori'];
    $deskripsi = $_POST['inputDeskripsi'];
    $persiapan = $_POST['inputPersiapanbibit'];
    $penanaman = $_POST['inputPenanaman'];
    $perawatan = $_POST['inputPerawatan'];
    // Dan seterusnya untuk data lainnya...

    // Query untuk memperbarui data ke database
    $sql = "UPDATE tbltanaman SET kategori='$kategori', deskripsi='$deskripsi', persiapan='$persiapan', penanaman='$penanaman', perawatan='$perawatan' WHERE nama='$nama_tanaman'";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diperbarui";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<script>
    alert('Data baru berhasil ditambahkan');
    setTimeout(function() {
        window.location.href = 'index.php';
    }, 2000);
</script>
