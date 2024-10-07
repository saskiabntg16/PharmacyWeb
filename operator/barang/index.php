<?php
// Mengaktifkan session
session_start();

// Koneksi ke database
require 'functions.php';

// Jika tidak ada username yang masuk
if (!isset($_SESSION["username"])) {
    echo "
        <script>
            alert('Anda Harus Login Dulu!');
            document.location.href = '../index.php';
        </script>
        ";
    exit;
}

$level = $_SESSION["level"];

// jika level bukan operator
if ($level != "operator") {
    echo "
        <script>
            alert('Anda tidak punya akses pada halaman Operator');
            document.location.href = '../../logout.php';
        </script>
        ";
    exit;
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Barang</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-link">
                <img src="../../dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .9">
                <span class="brand-text font-weight-bold">Apotek Salin Kasih</span>
            </a>


            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="../index.php" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-boxes"></i>
                                <p>
                                    Barang
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="index.php" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Barang</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../barangmasuk/index.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Barang Masuk</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../barangkeluar/index.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Barang Keluar</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="../supplier/index.php" class="nav-link">
                                <i class="nav-icon fas fa-people-carry"></i>
                                <p>
                                    Supplier
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../customer/index.php" class="nav-link">
                                <i class="nav-icon fas fa-dolly-flatbed"></i>
                                <p>
                                    Customer
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../logout.php" class="nav-link bg-danger">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Data Barang</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <!-- Tombol Tambah Admin -->
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah"><i class="fas fa-plus mr-1"></i>
                                    Tambah
                                </button>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <!-- arlert data barang sudah abis -->
                                <?php
                                $ambildatabarang = mysqli_query($conn, "select * from barang where stok < 1");
                                while ($row = mysqli_fetch_array($ambildatabarang)) :
                                    // untuk alert barang
                                    $barang = $row['nama_barang'];
                                ?>
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>Perhatian!</strong> Stok <?php echo ucwords($barang); ?> Telah Habis
                                    </div>
                                <?php endwhile; ?>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 50px;">
                                                <center>No</center>
                                            </th>
                                            <th style="width: 200px;">
                                                <center>Nama Barang</center>
                                            </th>
                                            <th style="width: 20px;">
                                                <center>Satuan</center>
                                            </th>
                                            <th style="width: 200px;">
                                                <center>Golongan</center>
                                            </th>
                                            <th style="width: 200px;">
                                                <center>Kategori</center>
                                            </th>
                                            <th style="width: 50px;">
                                                <center>Stok</center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // Query untuk memanggil data barang
                                        $barang = mysqli_query($conn, "SELECT * FROM barang ORDER BY nama_barang ASC");
                                        $i = 1;
                                        // pengulangan untuk menampilkan data
                                        while ($data = mysqli_fetch_array($barang)) :
                                        ?>
                                            <tr>
                                                <td style="text-align: center;"><?= $i++; ?></td>
                                                <td><?= ucwords($data['nama_barang']); ?></td>
                                                <td><?= ucwords($data['satuan']); ?></td>
                                                <td><?= ucwords($data['golongan']); ?></td>
                                                <td><?= ucwords($data['kategori']); ?></td>
                                                <td style="text-align: center;"><?= $data['stok']; ?></td>
                                            </tr>
                                        <?php
                                        endwhile;
                                        ?>
                                    </tbody>
                                    <tfoot>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2023 </strong>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!-- Modal tambah -->
    <div class="modal fade" id="tambah">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Barang</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->

                <!-- Form Tambah Barang -->
                <form method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" name="nama_barang" placeholder="Masukkan Nama Barang" class="form-control" id="nama_barang" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label for="satuan">Satuan</label><br>
                            <select class="form-control" name="satuan" placeholder="-- Pilih --" autocomplete="off" required>
                                <option value=""></option>
                                 <option value="botol">Botol</option>
                                 <option value="box" >Box</option>
                                 <option value="salep">Salep</option>
                                 <option value="strip" >Strip</option>
                                 <option value="tube">Tube</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="golongan">Golongan</label><br>
                                <select class="form-control" name="golongan" placeholder="-- Pilih --" autocomplete="off" required>
                                    <option value=""></option> 
                                    <option value="Obat Bebas Terbatas" >Obat Bebas Terbatas</option>
                                    <option value="Obat Bebas">Obat Bebas</option>
                                    <option value="Obat Keras" >Obat Keras</option>
                                    <option value="Obat Wajib Apotek (OWA)">Obat Wajib Apotek (OWA)</option>
                                    <option value="Obat Golongan Narkotika" >Obat Golongan Narkotika</option>
                                    <option value="Obat Psikotropika" >Obat Psikotropika</option>
                                    <option value="Obat Herbal" >Obat Herbal</option>
                                </select>
                                </div>
                            <div class="form-group">
                                <label for="kategori">Kategori</label><br>
                                <select class="form-control" name="kategori" data-placeholder="-- Pilih --" autocomplete="off" required>
                                    <option value=""></option>
                                    <option value="Flu dan Batuk" >Flu dan Batuk</option>
                                    <option value="Anti Nyeri" >Anti Nyeri</option>
                                    <option value="Antibiotik" >Antibiotik</option>
                                    <option value="Anti Gatal" >Anti Gatal</option>
                                    <option value="Anti Demam" >Anti Demam</option>
                                    <option value="Infeksi Pencernaan" >Infeksi Pencernaan</option>
                                   </select>
                            </div>
                        <br>
                        <button type="submit" class="btn btn-success btn-lg btn-block" name="tambah">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- page script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>