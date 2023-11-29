<?php
session_start();
session_unset();
session_destroy();
header("Location: login.php"); // Change to the appropriate page after logout
exit();
?>
