<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Project Absensi</title>
</head>

<body>
    <div class="w-50 mx-auto border p-3 mt-5">
        <a href="index.php">Kembali</a>
        <form action="add_control.php" method="POST" enctype="multipart/form-data">
            <!-- <label for="No">No</label>
            <input type="text" id="No" name="No" class="form-control" required> -->

            <label for="No">Nama</label>
            <input type="text" id="Nama" name="Nama" class="form-control" />

            <label for="No">No Absen</label>
            <input type="text" id="No_Absen" name="No_Absen" class="form-control" required="" />

            <td>
                <label for="Kelas">Kelas</label>
                <br>
                <input type="radio" name="Kelas" value="XI TKJ 1" id="Kelas"> XI TKJ 1
                <br>
                <input type="radio" name="Kelas" value="XI TKJ 2" id="Kelas"> XI TKJ 2
            </td>
            <br>

            <!-- <select name="Kelas" id="Kelas" class="form-select" required>
                <option>Pilih Kelas</option>
                <option value="TKJ 1">XI TKJ 1</option>
                <option value="TKJ 2">XI TKJ 2</option>
            </select> -->
            <div>
                <label for="No">Foto</label>
                <input type="file" id="foto" name="foto" required="" />
            </div>
            <br>
            <div>
                <button type="submit" value="Simpan">Simpan Data</button>
            </div>
        </form>
    </div>
</body>

</html>