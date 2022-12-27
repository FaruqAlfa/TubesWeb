<?php
include 'koneksi.php';
$idKeluar = $_GET['idKeluar'];
$sql = "DELETE FROM danakeluar WHERE idKeluar = $idKeluar";
if (mysqli_query($connect, $sql)) {
    header("location: danaKeluar.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}
mysqli_close($connect);
