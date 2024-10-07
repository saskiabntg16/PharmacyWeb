<?php
require '../../koneksi.php';

// Fungsi query 
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// Fungsi Mata Uang Rupiah
function rupiah($angka)
{
    $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
    return $hasil_rupiah;
}

// Fungsi Tanggal Indonesia
function dateIndonesian($date)
{
    $array_hari = array(1 => 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu');
    $array_bulan = array(1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
    $date  = strtotime($date);
    $hari  = $array_hari[date('N', $date)];
    $tanggal = date('j', $date);
    $bulan = $array_bulan[date('n', $date)];
    $tahun = date('Y', $date);
    $formatTanggal = $hari . ", " . $tanggal . " " . $bulan . " " . $tahun;
    return $formatTanggal;
}

// Koding Tambah Data Barang Masuk
if (isset($_POST['tambah'])) {
    $barang = $_POST['barang'];
    $jumlah = $_POST['jumlah'];
    $harga_beli = $_POST['harga_beli'];
    $supplier = $_POST['supplier'];

    // untuk mengambil stok berdasarkan id barang
    $cekbarang = mysqli_query($conn, "SELECT * FROM barang where id_barang = '$barang'");
    $ambilbarang = mysqli_fetch_array($cekbarang);
    $stoksekarang = $ambilbarang['stok'];

    // menambah stok dari jumlah
    $tambahstok = $stoksekarang + $jumlah;

    // hasil total harga seluruhnya
    $total_harga = $jumlah * $harga_beli;

    // Query menambah data di barang masuk && menambah stok di barang
    $tambah_barangmasuk = mysqli_query($conn, "INSERT into barangmasuk (id_barang, jumlah, harga_beli, total, id_supplier) VALUES('$barang','$jumlah','$harga_beli','$total_harga','$supplier')");
    $update_stokmasuk = mysqli_query($conn, "UPDATE barang set stok = '$tambahstok' WHERE id_barang = '$barang'");
    if ($tambah_barangmasuk && $update_stokmasuk) {
        echo "
        <script>
            alert('Data Barang Masuk Berhasil Ditambahkan!');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Barang Masuk Gagal Ditambahkan!');
            document.location.href = 'index.php';
        </script>
        ";
    }
}
