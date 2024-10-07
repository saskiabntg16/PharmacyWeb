<?php
require '../../koneksi.php';

// Koding untuk tambah supplier
if (isset($_POST['tambah'])) {
    $nama_supplier = $_POST['nama_supplier'];
    $alamat_supplier = $_POST['alamat_supplier'];
    $telp_supplier = $_POST['telp_supplier'];

    // query untuk tambah supplier
    $tambah_supplier = mysqli_query($conn, "INSERT INTO supplier (nama_supplier, alamat_supplier, telp_supplier) values('$nama_supplier', '$alamat_supplier', '$telp_supplier')");
    if ($tambah_supplier) {
        echo "
        <script>
            alert('Data Supplier Berhasil Ditambahkan!');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Supplier Gagal Ditambahkan!');
            document.location.href = 'index.php';
        </script>
        ";
    }
}

// koding untuk edit supplier
if (isset($_POST['edit'])) {
    $id_supplier = $_POST['id_supplier'];
    $nama_supplier = $_POST['nama_supplier'];
    $alamat_supplier = $_POST['alamat_supplier'];
    $telp_supplier = $_POST['telp_supplier'];

    // query untuk edit supplier
    $edit_supplier = mysqli_query($conn, "UPDATE supplier set nama_supplier = '$nama_supplier', alamat_supplier = '$alamat_supplier', telp_supplier = '$telp_supplier' WHERE id_supplier = '$id_supplier'");
    if ($edit_supplier) {
        echo "
        <script>
            alert('Data Supplier Berhasil Diedit!');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Supplier Gagal Diedit!');
            document.location.href = 'index.php';
        </script>
        ";
    }
}
