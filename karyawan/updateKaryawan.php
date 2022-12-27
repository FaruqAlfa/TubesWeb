<?php
include 'koneksi.php';
$idKaryawan = $_POST['idKaryawan'];
$namaKaryawan = $_POST['namaKaryawan'];
$nikKaryawan = $_POST['nikKaryawan'];
$statusKaryawan = $_POST['statusKaryawan'];
$sql = "UPDATE karyawan SET namaKaryawan = '$namaKaryawan', nikKaryawan = '$nikKaryawan', statusKaryawan = '$statusKaryawan' WHERE idKaryawan = $idKaryawan";
if (mysqli_query($connect, $sql)) {
    header("location: karyawan.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}
mysqli_close($connect);
