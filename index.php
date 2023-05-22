<!DOCTYPE html>
<html>
<head>
    <title>Hitung THR Karyawan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Hitung THR Karyawan</h1>
        <form action="hitung_thr.php" method="POST">
            <div class="form-group">
                <label for="nik">NIK:</label>
                <input type="text" id="nik" name="nik" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama Karyawan:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <button type="submit">Hitung dan Simpan</button>
        </form>
    </div>
</body>
</html>