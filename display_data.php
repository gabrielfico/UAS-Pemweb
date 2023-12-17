<?php

require_once('config.php');

// Query untuk mengambil semua data dari tabel mahasiswa
$sql = "SELECT * FROM std_data";
$result = mysqli_query($conn, $sql);

// Cek apakah query berhasil dijalankan
if ($result) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Mahasiswa</title>
        <link rel="stylesheet" href="css/display_data.css">
    </head>
    <body>
        <h2>Data Mahasiswa</h2>

        <a href="add_data.php"><h4>Add Data</h4></a>
        <table border="1">
            <tr>
                <th>Nama Lengkap</th>
                <th>NIM</th>
                <th>Tanggal Lahir</th>
                <th>Program Studi</th>
                <th>Action</th>
            </tr>
            <?php
            // Mengulang data dan menampilkan data
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['fullname']; ?></td>
                    <td><?php echo $row['nim']; ?></td>
                    <td><?php echo $row['birth']; ?></td>
                    <td><?php echo $row['bachelor']; ?></td>
                    <td class="action-buttons">
                        <a href="edit_data.php?nim=<?php echo $row['nim']; ?>">Edit</a>
                        <a href="delete_data.php?nim=<?php echo $row['nim']; ?>">Delete</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
    </html>
    <?php
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>
