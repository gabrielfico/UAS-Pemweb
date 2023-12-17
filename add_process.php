<?php

require_once('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["fullname"];
    $nim = $_POST["nim"];
    $tanggal_lahir = $_POST["birth"];
    $program_studi = $_POST["bachelor"];

    // Query untuk menambahkan data
    $sql = "INSERT INTO std_data (fullname, nim, birth, bachelor) VALUES ('$nama', '$nim', '$tanggal_lahir', '$program_studi')";

    if (mysqli_query($conn, $sql)) {
        echo "Mahasiswa data added successfully!";
    }
    else {
        echo "Error adding mahasiswa data: " . mysqli_error($conn);
    }
    header("Location: display_data.php");
    exit();
}

mysqli_close($conn);
?>
