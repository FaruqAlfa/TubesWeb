<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />

    <title>updateFormKaryawan</title>
</head>

<body>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
    <?php
    include 'koneksi.php';
    $id = $_GET['idKaryawan'];
    $query = "SELECT * FROM karyawan WHERE idKaryawan = '$id'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Update Data Karyawan</h1>
                <form action="updateKaryawan.php" method="POST">
                    <div class="form-group">
                        <label for="idKaryawan">ID Karyawan</label>
                        <input type="text" class="form-control" name="idKaryawan" id="idKaryawan" value="<?php echo $row['idKaryawan']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="namaKaryawan">Nama Karyawan</label>
                        <input type="text" class="form-control" name="namaKaryawan" id="namaKaryawan" value="<?php echo $row['namaKaryawan']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="nikKaryawan">NIK Karyawan</label>
                        <input type="text" class="form-control" name="nikKaryawan" id="nikKaryawan" value="<?php echo $row['nikKaryawan']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="statusKaryawan">No Telp Karyawan</label>
                        <input type="text" class="form-control" name="statusKaryawan" id="statusKaryawan" value="<?php echo $row['statusKaryawan']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary" name="Update" value="Update Data">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>