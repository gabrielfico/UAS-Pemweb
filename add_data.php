<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Mahasiswa Data</title>
    <link rel="stylesheet" href="css/styles2.css">
</head>
<body>
    <h2>Tambah Mahasiswa Data</h2>
    <form action="add_process.php" method="post">
        <label for="fullname">Nama:</label>
        <input type="text" name="fullname" required>
        <br>
        <label for="nim">NIM:</label>
        <input type="text" name="nim" required>
        <br>
        <label for="birth">Tanggal Lahir:</label>
        <input type="text" name="birth" required>
        <br>
        <label for="bachelor">Program Studi:</label>
        <input type="text" name="bachelor" required>
        <br>
        <button type="submit">Tambah</button>
    </form>
</body>
</html>