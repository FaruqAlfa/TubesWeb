<?php
include "koneksi.php";

$idMasuk = $_GET['idMasuk'];
$jumlahMasuk = $_GET['jumlahMasuk'];
$keterangan = $_GET['keterangan'];
$tanggal = $_GET['tanggal'];

$sql = "INSERT INTO danamasuk (idMasuk, jumlahMasuk, keterangan, tanggal) VALUES ('$idMasuk', '$jumlahMasuk', '$keterangan', '$tanggal')";

if (mysqli_query($connect, $sql)) {
    echo "Sukses menambahkan Data Baru";
    header("location: danaMasuk.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}
