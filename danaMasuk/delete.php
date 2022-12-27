<?php
include 'koneksi.php';
$idMasuk = $_GET['idMasuk'];
$sql = "DELETE FROM danamasuk WHERE idMasuk = $idMasuk";
if (mysqli_query($connect, $sql)) {
    header("location: danaMasuk.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}
mysqli_close($connect);
