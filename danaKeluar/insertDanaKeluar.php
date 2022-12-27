<?php
include "koneksi.php";
$jumlahKeluar = $_POST['jumlahKeluar'];
$keterangan = $_POST['keterangan'];
$tanggal = $_POST['tanggal'];

$sql = "INSERT INTO danakeluar (jumlahKeluar, keterangan, tanggal) VALUES ('$jumlahKeluar', '$keterangan', '$tanggal')";

if (mysqli_query($connect, $sql)) {
    echo "Sukses menambahkan Data Baru";
    header("location: danaKeluar.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}
