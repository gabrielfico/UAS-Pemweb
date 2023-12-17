<?php

require_once('config.php');

// Handle registration logic here
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash password for security

    // Query untuk memasukkan data ke dalam tabel pengguna
    $sql = "INSERT INTO tbl_user (fullname, phone, email, pass) VALUES ('$name', '$phone', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration success.";
    }
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
header("Location: index.php");
exit();

// Tutup koneksi
mysqli_close($conn);
?>
