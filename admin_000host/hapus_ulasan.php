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

// Ambil ID ulasan dari parameter URL
$idUlasan = $_GET['id'];

// Query untuk mendapatkan email pengguna yang memberikan ulasan
$sqlEmail = "SELECT email FROM tblulasan WHERE id = $idUlasan";
$resultEmail = $conn->query($sqlEmail);

if ($resultEmail->num_rows > 0) {
    $rowEmail = $resultEmail->fetch_assoc();
    $emailPengguna = $rowEmail['email'];

    // Query untuk menghapus ulasan dari database
    $sql = "DELETE FROM tblulasan WHERE id = $idUlasan";

    if ($conn->query($sql) === TRUE) {

        // Redirect kembali ke halaman utama atau halaman lain yang sesuai
        header("Location: ulasan.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "ID ulasan tidak valid.";
}
?>
<?php

    // $cUrl = curl_init();

    // $options = array(
    //     CURLOPT_URL => 'https://asia-south1.gcp.data.mongodb-api.com/app/application-0-gqtfg/endpoint/bitseed_delete_komentar?id='.$idUlasan,
    //     CURLOPT_CUSTOMREQUEST => 'DELETE'
    // );

    // curl_setopt_array($cUrl, $options);

    // $response = curl_exec($cUrl);

    // curl_close($cUrl);


    // $conn->close();
?>
// <script>
//     alert('Data baru berhasil dihapus');
//     setTimeout(function() {
//         window.location.href = 'ulasan.php';
//     }, 2000); // Arahkan kembali ke index.php setelah 2 detik
// </script>
