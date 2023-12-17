<?php

require_once('config.php');

// Ambil ID mahasiswa dari parameter URL
if (isset($_GET['nim'])) {
    $mahasiswaId = $_GET['nim'];

    // Query untuk menghapus data mahasiswa berdasarkan ID
    $sql = "DELETE FROM std_data WHERE nim = '$mahasiswaId'";

    if (mysqli_query($conn, $sql)) {
        echo "Mahasiswa data deleted successfully!";
    }
    else {
        echo "Error deleting mahasiswa data: " . mysqli_error($conn);
    }
} 
else {
    echo "Invalid request.";
}
header("Location: display_data.php");
exit();

// Tutup koneksi
mysqli_close($conn);
?>
