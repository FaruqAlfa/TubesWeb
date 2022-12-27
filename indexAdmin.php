<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
    exit;
}
?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Index Admin</title>
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
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Bootstrap Sidebar</h3>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="danaMasuk/danaMasuk.php">Dana Masuk</a>
                </li>
                <li>
                    <a href="danaKeluar/danaKeluar.php">Dana Keluar</a>
                </li>
                <li>
                    <a href="karyawan/karyawan.php">Karyawan</a>
                </li>
                <li>
                    <a href="logout.php">logout</a>
                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"></a>
                            </li>
                            <li class="nav-item">
                                <?php
                                echo "Selamat Datang " . $_SESSION['username'];
                                ?>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Dana Masuk</h5>
                            <?php
                            include 'koneksi.php';
                            $query = mysqli_query($connect, "SELECT * FROM danamasuk");
                            $total = 0;
                            while ($data = mysqli_fetch_array($query)) {
                                $total = $total + $data['jumlahMasuk'];
                            }
                            echo "Rp. " . $total;
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Dana Keluar</h5>
                            <?php
                            include 'koneksi.php';
                            $query = mysqli_query($connect, "SELECT * FROM danakeluar");
                            $total = 0;
                            while ($data = mysqli_fetch_array($query)) {
                                $total = $total + $data['jumlahKeluar'];
                            }
                            echo "Rp. " . $total;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Total Dana Saat Ini</h5>
                            <?php
                            include 'koneksi.php';
                            $query = mysqli_query($connect, "SELECT * FROM danamasuk");
                            $query2 = mysqli_query($connect, "SELECT * FROM danakeluar");

                            $total = 0;
                            while ($data = mysqli_fetch_array($query)) {
                                $total = $total + $data['jumlahMasuk'];
                            }
                            $total2 = 0;
                            while ($data2 = mysqli_fetch_array($query2)) {
                                $total2 = $total2 + $data2['jumlahKeluar'];
                            }
                            $total3 = $total - $total2;

                            echo "Total Dana : " . $total3;
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Total Karyawan</h5>
                            <?php
                            include 'koneksi.php';
                            $query3 = mysqli_query($connect, "SELECT * FROM karyawan");
                            $total4 = mysqli_num_rows($query3);
                            echo "Total Karyawan : " . $total4;

                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>