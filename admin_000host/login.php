<?php
session_start();

$servername = "localhost"; // Ganti sesuai dengan server Anda
    $username = "id21578052_capri"; // Ganti dengan username database Anda
    $password = "Capri_DNight1"; // Ganti dengan password database Anda
    $dbname = "id21578052_bitseed"; // Ganti dengan nama database Anda

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM tbluser WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            // Password cocok, set session dan alihkan ke halaman sukses
            $_SESSION["user_identifier"] = $row["email"];
            $_SESSION["username"] = $row["username"]; // Assuming you have a 'username' column in your database
            header("Location: index.php"); // Ganti dengan halaman yang sesuai
            exit();
        } else {
            echo "Invalid password"; // Debug line
        }
    } else {
        echo "User not found"; // Debug line
    }

    $stmt->close();
}

$conn->close();
?>
