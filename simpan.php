<?php
if (isset($_POST['submit'])) {
    
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];

require_once 'koneksi.php';

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    $sql = "INSERT INTO karyawan (nik, nama) VALUES ('$nik', '$nama')";
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan ke database.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>