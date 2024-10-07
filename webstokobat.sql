-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 09:37 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webstokobat`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(9) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `golongan` varchar(30) NOT NULL,
  `kategori` varchar(40) NOT NULL,
  `stok` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `satuan`, `golongan`, `kategori`, `stok`) VALUES
(13, 'Vicks Formula 44 Sirup 100 ml ', 'botol', 'Obat Bebas Terbatas', 'Flu dan Batuk', 47),
(14, 'Sterimar Nose Hygiene and Comfort 50 ml', 'botol', 'Obat Bebas Terbatas', 'Flu dan Batuk', 50),
(15, 'Rhinos Sr 10 kapsul', 'strip', 'Obat Keras', 'Flu dan Batuk', 50),
(16, 'Rhinos Junior Syrup 60 ml', 'botol', 'Obat Bebas Terbatas', 'Flu dan Batuk', 50),
(17, 'Acetylcysteine 200 mg 10 Kapsul', 'strip', 'Obat Keras', 'Flu dan Batuk', 49),
(18, 'Epexol Drops 20 ml', 'botol', 'Obat Keras', 'Flu dan Batuk', 49),
(19, 'Actifed Plus Cough Supressant Sirup 60 ml', 'botol', 'Obat Bebas Terbatas', 'Flu dan Batuk', 50),
(20, 'Mucera 30 mg 10 Tablet', 'strip', 'Obat Keras', 'Flu dan Batuk', 50),
(21, 'Vectrine 300 mg 10 Kapsul', 'strip', 'Obat Keras', 'Flu dan Batuk', 50),
(22, 'Fluimucil 200 mg 10 Kapsul', 'strip', 'Obat Bebas Terbatas', 'Flu dan Batuk', 47),
(23, 'Rillus 6 Kapsul', 'strip', 'Obat Bebas Terbatas', 'Vitamin dan Suplemen', 0),
(24, 'Vometa FT 10 mg 10 Tablet', 'strip', 'Obat Keras', 'Infeksi Pencernaan', 0),
(25, 'Inpepsa Sirup 100 ml', 'botol', 'Obat Keras', 'Infeksi Pencernaan', 48),
(26, 'Buscopan 10 mg 10 Tablet', 'strip', 'Obat Keras', 'Infeksi Pencernaan', 50),
(27, 'Ardium 500 mg 15 Tablet', 'strip', 'Obat Herbal', 'Infeksi Pencernaan', 50),
(28, 'Imboost Force Ultimate 10 Kaplet', 'strip', 'Obat Bebas', 'Vitamin dan Suplemen', 48),
(29, 'Zegavit 5 Kaplet', 'strip', 'Obat Bebas', 'Vitamin dan Suplemen', 0),
(30, 'Prove D3-1000 IU 10 Tablet', 'strip', 'Obat Bebas', 'Vitamin dan Suplemen', 0),
(31, 'Maltofer Drops 30 ml', 'botol', 'Obat Bebas', 'Vitamin dan Suplemen', 0),
(32, 'Folamil Genio 30 Kapsul', 'botol', 'Obat Bebas', 'Vitamin dan Suplemen', 49),
(33, 'Arcoxia 90 mg 10 Tablet', 'strip', 'Obat Keras', 'Anti Nyeri', 50),
(34, 'Aclonac 50 mg 10 Tablet', 'strip', 'Obat Keras', 'Anti Nyeri', 50),
(35, 'Etorix 120 mg 10 Tablet', 'strip', 'Obat Keras', 'Anti Nyeri', 50),
(36, 'Kenacort 4 mg 10 Tablet', 'strip', 'Obat Keras', 'Anti Nyeri', 0),
(37, 'Exaflam 50 mg 10 Tablet', 'strip', 'Obat Keras', 'Anti Nyeri', 48),
(38, 'Tetracycline 500 mg 10 Kapsul', 'strip', 'Obat Keras', 'Anti Nyeri', 0),
(39, 'Befixim 100 mg 6 Kapsul', 'strip', 'Obat Keras', 'Antibiotik', 50),
(40, 'Nizoral Cream 5g', 'tube', 'Obat Bebas Terbatas', 'Anti Gatal', 0),
(41, 'Tong Kang Shuang Krim 10g', 'tube', 'Obat Bebas Terbatas', 'Anti Gatal', 0),
(42, 'Cerine Sirup 60 ml', 'botol', 'Obat Keras', 'Anti Gatal', 50),
(43, 'Histrine 10 mg 10 Tablet', 'strip', 'Obat Bebas Terbatas', 'Anti Gatal', 50),
(44, 'Vermint 12 Kapsul', 'botol', 'Obat Herbal', 'Anti Demam', 0),
(45, 'Vermint Forte 8 Sachel 2 Kapsul', 'box', 'Obat Herbal', 'Anti Demam', 0),
(46, 'Pyrexin Sirup 120 mg/ 5 ml 60 ml', 'botol', 'Obat Bebas', 'Anti Nyeri', 0),
(47, 'Salfenal 200 mg 10 Kaplet', 'strip', 'Obat Bebas Terbatas', 'Anti Demam', 0),
(48, 'Incidal-OD 4 Kapsul', 'strip', 'Obat Bebas Terbatas', 'Anti Gatal', 50),
(49, 'Intrizin Sirup 60 ml', 'botol', 'Obat Keras', 'Anti Gatal', 50),
(50, 'Cetirgi Sirup 60 ml ', 'botol', 'Obat Keras', 'Anti Gatal', 49),
(51, 'Intrizin 10 mg 10 Tablet', 'strip', 'Obat Keras', 'Anti Gatal', 50),
(52, 'Loratadine 10 mg 10 Tablet', 'strip', 'Obat Keras', 'Anti Gatal', 0),
(53, 'Tempra Sirup 60 Ml', 'botol', 'Obat Bebas', 'Anti Demam', 0),
(54, 'Becom-Zet 10 Kaplet', 'strip', 'Obat Bebas', 'Vitamin dan Suplemen', 50),
(55, 'Neurobion 10 Tablet', 'strip', 'Obat Bebas', 'Vitamin dan Suplemen', 0),
(56, 'Sangobion 10 Kapsul', 'strip', 'Obat Bebas', 'Vitamin dan Suplemen', 0),
(57, 'Halowell C (Vitamin C) 500 Mg 30 Tablet', 'botol', 'Obat Bebas', 'Vitamin dan Suplemen', 50),
(58, 'Caviplext 10 Kaplet', 'strip', 'Obat Bebas', 'Vitamin dan Suplemen', 47),
(59, 'Silex Sirup 100 Ml', 'botol', 'Obat Herbal', 'Flu dan Batuk', 0),
(60, 'Grantusif 10 Kaplet', 'strip', 'Obat Bebas Terbatas', 'Flu dan Batuk', 50),
(61, 'Methylprednisolone 16 Mg 10 Tablet', 'strip', 'Obat Keras', 'Anti Nyeri', 0),
(62, 'Novestrol 16 Mg 10 Tablet', 'strip', 'Obat Keras', 'Anti Nyeri', 0);

-- --------------------------------------------------------

--
-- Table structure for table `barangkeluar`
--

CREATE TABLE `barangkeluar` (
  `id_barangkeluar` int(9) NOT NULL,
  `tanggal_keluar` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_barang` int(9) NOT NULL,
  `jumlah` int(9) NOT NULL,
  `harga_jual` int(9) NOT NULL,
  `total` int(9) NOT NULL,
  `id_customer` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barangkeluar`
--

INSERT INTO `barangkeluar` (`id_barangkeluar`, `tanggal_keluar`, `id_barang`, `jumlah`, `harga_jual`, `total`, `id_customer`) VALUES
(16, '2023-01-16 10:48:32', 17, 1, 20000, 20000, 6),
(17, '2023-01-16 13:14:40', 28, 2, 42000, 84000, 15),
(18, '2023-01-16 13:15:07', 22, 3, 81000, 243000, 12),
(19, '2023-01-16 13:15:41', 32, 1, 84000, 84000, 14),
(20, '2023-01-16 13:16:07', 37, 2, 32000, 64000, 13),
(21, '2023-01-16 13:16:35', 50, 1, 89000, 89000, 11),
(22, '2023-01-16 13:19:52', 13, 3, 34000, 102000, 11),
(23, '2023-01-16 13:21:59', 18, 1, 56000, 56000, 9),
(24, '2023-01-16 13:22:53', 58, 3, 16000, 48000, 7),
(25, '2023-01-16 13:23:24', 25, 2, 100000, 200000, 8);

-- --------------------------------------------------------

--
-- Table structure for table `barangmasuk`
--

CREATE TABLE `barangmasuk` (
  `id_barangmasuk` int(9) NOT NULL,
  `tanggal_masuk` timestamp NULL DEFAULT current_timestamp(),
  `id_barang` int(9) NOT NULL,
  `jumlah` int(9) NOT NULL,
  `harga_beli` int(9) NOT NULL,
  `total` int(9) NOT NULL,
  `id_supplier` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barangmasuk`
--

INSERT INTO `barangmasuk` (`id_barangmasuk`, `tanggal_masuk`, `id_barang`, `jumlah`, `harga_beli`, `total`, `id_supplier`) VALUES
(18, '2023-01-16 10:39:07', 13, 50, 25600, 1280000, 6),
(19, '2023-01-16 10:39:58', 21, 50, 67700, 3385000, 7),
(20, '2023-01-16 10:41:04', 14, 50, 175200, 8760000, 8),
(21, '2023-01-16 10:42:20', 15, 50, 90000, 4500000, 9),
(22, '2023-01-16 10:43:02', 16, 50, 55600, 2780000, 10),
(23, '2023-01-16 10:43:52', 20, 50, 15600, 780000, 12),
(24, '2023-01-16 10:44:37', 22, 50, 75200, 3760000, 11),
(25, '2023-01-16 10:45:46', 18, 50, 48200, 2410000, 13),
(26, '2023-01-16 10:46:39', 19, 50, 62600, 3130000, 14),
(27, '2023-01-16 10:47:37', 17, 50, 17500, 875000, 15),
(28, '2023-01-16 12:54:46', 34, 50, 9800, 490000, 6),
(29, '2023-01-16 12:55:47', 33, 50, 184800, 9240000, 7),
(30, '2023-01-16 12:58:38', 27, 50, 150600, 7530000, 11),
(31, '2023-01-16 12:59:31', 54, 50, 21600, 1080000, 10),
(32, '2023-01-16 13:00:06', 39, 50, 25700, 1285000, 13),
(33, '2023-01-16 13:00:55', 26, 50, 30200, 1510000, 15),
(34, '2023-01-16 13:01:41', 58, 50, 12800, 640000, 13),
(35, '2023-01-16 13:02:52', 42, 50, 68600, 3430000, 9),
(36, '2023-01-16 13:03:09', 50, 50, 81200, 4060000, 11),
(37, '2023-01-16 13:03:54', 35, 50, 38100, 1905000, 8),
(38, '2023-01-16 13:04:22', 37, 50, 28400, 1420000, 14),
(39, '2023-01-16 13:05:07', 32, 50, 76800, 3840000, 13),
(40, '2023-01-16 13:05:22', 60, 50, 72100, 3605000, 7),
(41, '2023-01-16 13:05:44', 57, 50, 40800, 2040000, 9),
(42, '2023-01-16 13:06:10', 43, 50, 18100, 905000, 15),
(43, '2023-01-16 13:06:49', 28, 50, 35200, 1760000, 10),
(44, '2023-01-16 13:07:13', 48, 50, 23900, 1195000, 12),
(45, '2023-01-16 13:08:01', 25, 50, 78900, 3945000, 6),
(46, '2023-01-16 13:08:30', 51, 50, 18400, 920000, 12),
(47, '2023-01-16 13:08:49', 49, 50, 89600, 4480000, 13);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(9) NOT NULL,
  `nama_customer` varchar(255) NOT NULL,
  `telp_customer` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `telp_customer`) VALUES
(6, 'Jawir', '087710392780'),
(7, 'Andhika', '087722701049'),
(8, 'Rizqi', '085157782912'),
(9, 'Novia', '089668273611'),
(10, 'Dwi', '085677638119'),
(11, 'Fathia', '081371887263'),
(12, 'Putri', '087387199826'),
(13, 'Ricky', '085765368271'),
(14, 'Dwiky', '085267837619'),
(15, 'Ilham', '081672873997');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(9) NOT NULL,
  `nama_supplier` varchar(255) NOT NULL,
  `alamat_supplier` text NOT NULL,
  `telp_supplier` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `alamat_supplier`, `telp_supplier`) VALUES
(6, 'PT Abbot Indonesia', ' Jl. Sultan Iskandar Muda Kav. V – TA Pondok Indah, Jakarta 12310', '02127587888'),
(7, 'PT AstraZeneca Indonesia', ' Jl. T. B. Simatupang, Kebagusan, Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12520', '02178835777'),
(8, 'PT Berlico Mulia Farma', 'Jl. Juwangen Kalasan Km 10.6 Tromol Pos No. 8\r\nYOGYAKARTA – 55571', '0274496446'),
(9, 'PT Bristol Myers Squibb Indonesia Tbk', 'Jl Jenderal Sudirman Kav. 24 JAKARTA, 2760', '0215206727'),
(10, 'PT Cendo Pratama ', ' JI. Moh Toha Km 6,7 Cisirung, Palasari, Bandung 40255', '022503999'),
(11, 'PT Corsa Industri', 'JI. KS Tubun II-C 30 Jakarta 10410\r\n', '0215480408'),
(12, 'PT Dexa Medica', 'JI. RS Fatmawati Kav. 33 Lt.4 Jakarta 12430\r\n', '0217509575'),
(13, 'PT Durafarma Jaya', 'JI. Rungkut Industri 111/66 Surabaya 60293\r\n', '0318439617'),
(14, 'PT Erela', 'JI. Erlangga Raya 9-11-15-26 Semarang 50241\r\n', '0248310650'),
(15, 'PT Errita Pharma', 'JI. Pulo Gadung No 6 KIP Jakarta 13920', '021461513235');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(9) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `password` varchar(225) NOT NULL,
  `last_login` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `level`, `password`, `last_login`) VALUES
(7, 'Saskia Bintang Maharani', 'saskiabntg', 'owner', '$2y$10$1QGHrFtvW10PWzT4RdTG2.zkAVKmQGcpJ/7RKdN/NwRfLxzSniF8i', '2023-01-17 02:17:45'),
(8, 'Admin Apotek Salin Kasih', 'admsalinkasih', 'admin', '$2y$10$d4LuVUf1F78dOSL5zWR43uTAtZ9zlbE9JqcMS5E9bDaZNMCT3EGH.', '2023-01-17 06:58:07'),
(9, 'Raslina Wati', 'raslinawt', 'operator', '$2y$10$rp18VlZsnnBEU3cFqxfsQuWQ1NQRukTXm4LIa1UADnyixD6IAKgBe', '2023-01-16 22:50:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `barangkeluar`
--
ALTER TABLE `barangkeluar`
  ADD PRIMARY KEY (`id_barangkeluar`);

--
-- Indexes for table `barangmasuk`
--
ALTER TABLE `barangmasuk`
  ADD PRIMARY KEY (`id_barangmasuk`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `barangkeluar`
--
ALTER TABLE `barangkeluar`
  MODIFY `id_barangkeluar` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `barangmasuk`
--
ALTER TABLE `barangmasuk`
  MODIFY `id_barangmasuk` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
