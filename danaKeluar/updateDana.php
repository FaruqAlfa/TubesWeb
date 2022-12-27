<?php
include 'koneksi.php';
$idKeluar = $_POST['idKeluar'];
$jumlahKeluar = $_POST['jumlahKeluar'];
$keterangan = $_POST['keterangan'];
$tanggal = $_POST['tanggal'];
$sql = "UPDATE danakeluar SET jumlahKeluar = '$jumlahKeluar', keterangan = '$keterangan', tanggal = '$tanggal' WHERE idKeluar = $idKeluar";
if (mysqli_query($connect, $sql)) {
    header("location: danaKeluar.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}
mysqli_close($connect);
