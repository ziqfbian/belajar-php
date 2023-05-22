<?php
include 'koneksi.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];

$sql = "SELECT * FROM karyawan WHERE NIK='$nik' AND nama='$nama'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

}
    $row = $result->fetch_assoc();
    $gaji_pokok = 3000000; 
    $tunjangan = 0;
    $bonus = 0;
    $iuran_asuransi = 0;

    if ($nik === 'K01') { 
        $tunjangan = 5000000;
        $bonus = 2500000;
    } elseif ($nik === 'K02') { 
        $tunjangan = 3000000;
    } elseif ($nik === 'K03') { 
        $tunjangan = 1000000;
    } elseif ($nik === 'K04') { 
        $bonus = 1000000;
    } else {
        echo "Karyawan dengan NIK $nik tidak ditemukan.";
        exit();
    }
   
    $total_penghasilan = $gaji_pokok + $tunjangan + $bonus;
    $iuran_asuransi = $total_penghasilan * 0.05;

    $thr = $total_penghasilan - $iuran_asuransi;
    
    require_once 'simpan.php';
    $sql = "INSERT INTO karyawan (nik, nama, thr) VALUES ('$nik', '$nama','$thr')";
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan ke database.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    echo "<h2>Detail THR Karyawan</h2>";
    echo "<p>NIK : " . $nik;
    echo "<p>Nama : " . $nama;
    echo "<p>Jumlah THR yang diberikan Rp." . $thr;

 