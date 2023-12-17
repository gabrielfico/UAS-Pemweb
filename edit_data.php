<?php

require_once('config.php');

// Ambil ID mahasiswa dari parameter URL
if (isset($_GET['nim'])) {
    $mahasiswaId = $_GET['nim'];

    // Query untuk mengambil data mahasiswa berdasarkan ID
    $sql = "SELECT * FROM std_data WHERE nim = '$mahasiswaId'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $mahasiswaData = mysqli_fetch_assoc($result);
    }
    else {
        echo "Mahasiswa not found.";
        exit();
    }
}
else {
    echo "Invalid request.";
    exit();
}

// Tutup koneksi
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa Data</title>
    <link rel="stylesheet" href="css/styles2.css">
</head>
<body>
    <h2>Edit Mahasiswa Data</h2>
    <div class="form">
        <form action="edit_process.php" method="post">
            <label for="fullname">Nama:</label>
            <input type="text" name="fullname" value="<?php echo $mahasiswaData['fullname']; ?>" required>
            <br>
            <label for="nim">NIM:</label>
            <input type="text" name="nim" value="<?php echo $mahasiswaData['nim']; ?>" required>
            <br>
            <label for="birth">Tanggal Lahir:</label>
            <input type="text" name="birth" value="<?php echo $mahasiswaData['birth']; ?>" required>
            <br>
            <label for="bachelor">Program Studi:</label>
            <input type="text" name="bachelor" value="<?php echo $mahasiswaData['bachelor']; ?>" required>
            <br>
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
