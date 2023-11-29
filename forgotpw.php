<?php 
// require "function.php";

// session_start();

// if(isset($_POST['old-password'])){
//     $oldpassword = $_POST['old-password'];
//     $newpassword = $_POST['new-password'];
//     $confnewpassword = $_POST['conf-new-password'];
//     $username = $_SESSION['username'];

//     if($newpassword == $confnewpassword){

//         $response = api_connect(
//             $url = "https://asia-south1.gcp.data.mongodb-api.com/app/application-0-gqtfg/endpoint/getPenggunausernamepassword?username=$username&password=$oldpassword",
//             $method = 'GET',
//         );

//         if($response && password_verify($oldpassword, $response->password)){
//             api_connect(
//                 $url = "https://asia-south1.gcp.data.mongodb-api.com/app/application-0-gqtfg/endpoint/updatePengguna",
//                 $method = 'PUT',
//                 $data = [
//                     "username" => $username,
//                     "password" => password_hash($newpassword, PASSWORD_DEFAULT)
//                 ]
//             );
//             echo "<script>
//                     alert('Password Berhasil diubah');
//                     window.location.href = 'index.php';
//                 </script>";
//         }
//         else {
//             echo "<script>
//                     alert('Password salah');
//                     window.location.href = 'index.php';
//                 </script>";
//         }
//     }

//     else {
//         echo "<script>
//                     alert('Konfirmasi password baru salah salah');
//                     window.location.href = 'index.php';
//                 </script>";
//     }

// }
?>