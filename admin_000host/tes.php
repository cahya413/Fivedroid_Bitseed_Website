<?php
$servername = "localhost";
$username = "capri";
$password = "dika1234";
$dbname = "toko";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
// ... (kode sebelumnya)

// Display the form

// Fetch and display products associated with the selected toko
$sql_produk = "SELECT * FROM tblproduk WHERE id_toko = ?";
$stmt_produk = $conn->prepare($sql_produk);
$stmt_produk->bind_param("i", $id_toko);

if ($stmt_produk->execute()) {
    $result_produk = $stmt_produk->get_result();

    while ($row_produk = $result_produk->fetch_assoc()) {
        echo '<div class="col-md-6 col-xl-3 column-card">';
        echo '<div class="card text-center">';
        echo '<div class="mb-2 card-body text-muted">';
        echo '<h3 class="text-info mt-2">' . $row_produk['nama_produk'] . '</h3>';
        echo '<a class="btn btn-sm" href="edit_produk.php?id_produk=' . $row_produk['id_produk'] . '"><i class="fa fa-pen text-primary me-2"></i>Edit</a>';
        echo '<a class="btn btn-sm" href="hapus_produk.php?id_produk=' . $row_produk['id_produk'] . '" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\')"><i class="fa fa-trash text-danger me-2"></i>Hapus</a>';
        echo '</div></div></div>';
    }
} else {
    // Handle if the query fails
    echo "Error: " . $sql_produk . "<br>" . $stmt_produk->error;
}

$stmt_produk->close();

// Close the connection
$conn->close();
?>
