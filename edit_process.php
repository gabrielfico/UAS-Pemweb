<?php

require_once('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["fullname"];
    $nim = $_POST["nim"];
    $tanggal_lahir = $_POST["birth"];
    $program_studi = $_POST["bachelor"];

    // Query untuk mengupdate data mahasiswa
    $sql = "UPDATE std_data SET fullname='$nama', nim='$nim', birth='$tanggal_lahir', bachelor='$program_studi' WHERE nim='$nim'";

    if (mysqli_query($conn, $sql)) {
        echo "Mahasiswa data updated successfully!";
    }
    else {
        echo "Error updating mahasiswa data: " . mysqli_error($conn);
    }
}
header("Location: display_data.php");
exit();

// Tutup koneksi
mysqli_close($conn);
?>
