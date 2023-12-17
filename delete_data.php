<?php
// delete_mahasiswa.php

require_once('config.php');

// Ambil ID mahasiswa dari parameter URL
if (isset($_GET['nim'])) {
    $mahasiswaId = $_GET['nim'];

    // Query untuk menghapus data mahasiswa berdasarkan ID
    $sql = "DELETE FROM std_data WHERE nim = '$mahasiswaId'";

    if (mysqli_query($conn, $sql)) {
        // echo "Mahasiswa data deleted successfully!";
        header("Location: display_data.php");
        exit();
    } else {
        echo "Error deleting mahasiswa data: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}

// Tutup koneksi
mysqli_close($conn);
?>