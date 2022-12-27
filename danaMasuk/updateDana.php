<?php
include 'koneksi.php';
$idMasuk = $_POST['idMasuk'];
$jumlahMasuk = $_POST['jumlahMasuk'];
$keterangan = $_POST['keterangan'];
$tanggal = $_POST['tanggal'];
$sql = "UPDATE danamasuk SET jumlahMasuk = '$jumlahMasuk', keterangan = '$keterangan', tanggal = '$tanggal' WHERE idMasuk = $idMasuk";
if (mysqli_query($connect, $sql)) {
    header("location: danaMasuk.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}
mysqli_close($connect);
