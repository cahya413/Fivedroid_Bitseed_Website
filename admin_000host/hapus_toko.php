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

if(isset($_GET['nama_toko'])) {
    $nama_toko = $_GET['nama_toko'];
    
    // Hapus terlebih dahulu data terkait dari tabel tblproduk
    $sql_delete_produk = "DELETE FROM tblproduk WHERE id_toko IN (SELECT id_toko FROM tbltoko WHERE nama_toko='$nama_toko')";
    if ($conn->query($sql_delete_produk) === TRUE) {
        // Setelah menghapus data terkait, hapus data dari tabel tbltoko
        $sql_delete_toko = "DELETE FROM tbltoko WHERE nama_toko='$nama_toko'";
        if ($conn->query($sql_delete_toko) === TRUE) {
            echo "Data berhasil dihapus";
        } else {
            echo "Error saat menghapus data toko: " . $sql_delete_toko . "<br>" . $conn->error;
        }
    } else {
        echo "Error saat menghapus data produk: " . $sql_delete_produk . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<script>
    alert('Data baru berhasil dihapus');
    setTimeout(function() {
        window.location.href = 'toko.php';
    }, 2000); // Arahkan kembali ke index.php setelah 2 detik
</script>