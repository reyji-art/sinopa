<?php
$host = "HOST_MYSQL";
$user = "USERNAME_MYSQL";
$pass = "PASSWORD_MYSQL";
$db   = "NAMA_DATABASE";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
