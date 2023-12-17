<?php
$servername = "localhost"; // Ganti dengan nama server
$username = "root"; // Ganti dengan nama pengguna database 
$password = ""; // Ganti dengan kata sandi database 
$dbname = "db_user"; // Ganti dengan nama database

// Buat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
else {
    // echo "Koneksi Berhasil! --> ";
}
?>
