<?php
$servername = "localhost"; // Ganti sesuai dengan server Anda
    $username = "id21578052_capri"; // Ganti dengan username database Anda
    $password = "Capri_DNight1"; // Ganti dengan password database Anda
    $dbname = "id21578052_bitseed"; // Ganti dengan nama database Anda

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data yang disubmit dari form
    $id_toko = isset($_POST['id_toko']) ? $_POST['id_toko'] : null;
    $nama_produk = $_POST['inputNamaproduk'];
    $kategori_produk = $_POST['inputKategoriproduk'];
    $stok_produk = $_POST['inputStokproduk'];

    // Tangkap data gambar
    if (isset($_FILES['InputGambarproduk']) && $_FILES['InputGambarproduk']['error'] == UPLOAD_ERR_OK) {
        $gambar_produk = $_FILES['InputGambarproduk']['tmp_name'];
    } else {
        echo "Error uploading image.";
        // Handle the error accordingly (e.g., redirect back to the form)
        exit();
    }

    // Query untuk menyimpan data produk ke dalam tabel tblproduk
    $sql = "INSERT INTO tblproduk (id_toko, kategori_produk, nama_produk, gambar_produk, stok_produk) VALUES (?, ?, ?, ?, ?)";

    // Gunakan prepared statement untuk mencegah SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("issss", $id_toko, $kategori_produk, $nama_produk, $gambar_produk, $stok_produk);

    // Eksekusi statement
    if ($stmt->execute()) {
        echo "Data produk berhasil disimpan";
    } else {
        echo "Error: " . $sql . "<br>" . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
