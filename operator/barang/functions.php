<?php
require '../../koneksi.php';

// Fungsi Tanggal Indonesia
function dateIndonesian($date)
{
    $array_hari = array(1 => 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu');
    $array_bulan = array(1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
    $date  = strtotime($date);
    $hari  = $array_hari[date('N', $date)];
    $tanggal = date('d', $date);
    $bulan = $array_bulan[date('n', $date)];
    $tahun = date('Y', $date);
    $formatTanggal = $hari . ", " . $tanggal . " " . $bulan . " " . $tahun;
    return $formatTanggal;
}

// koding tambah data barang
if (isset($_POST['tambah'])) {
    $nama_barang = $_POST['nama_barang'];
    $satuan = $_POST['satuan'];
    $golongan = $_POST['golongan'];
    $kategori = $_POST['kategori'];
    
    $tambah_barang = mysqli_query($conn, "INSERT INTO barang (id_obat, nama_obat, satuan, golongan, kategori, stok) values('$id_obat','$nama_obat','$satuan','$golongan', '$kategori', 0)");
    if ($tambah_barang) {
        echo "
        <script>
            alert('Data Barang Berhasil Ditambahkan!');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Barang Gagal Ditambahkan!');
            document.location.href = 'index.php';
        </script>
        ";
    }
}
