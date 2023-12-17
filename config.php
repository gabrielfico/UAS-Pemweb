<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_user";

// Buat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
else {
    echo "Koneksi Berhasil! --> ";
}
?>
