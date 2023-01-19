-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 06:24 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_akhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `telp_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `telp_admin`, `username`, `password`, `alamat`, `email`) VALUES
(1001, 'admin', '0894232556', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Kawedusan', 'fahmi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_order`
--

CREATE TABLE `tb_detail_order` (
  `id_detail` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `pembelian` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_order`
--

INSERT INTO `tb_detail_order` (`id_detail`, `id_order`, `id_produk`, `pembelian`, `status`) VALUES
(1, 44, 1, 2, ''),
(2, 44, 2, 2, ''),
(3, 45, 1, 1, ''),
(4, 45, 2, 3, ''),
(5, 46, 1, 2, ''),
(6, 46, 2, 3, ''),
(7, 46, 3, 1, ''),
(8, 47, 1, 1, ''),
(9, 48, 4, 5, ''),
(10, 49, 0, 4, ''),
(11, 50, 11, 1, ''),
(12, 51, 11, 1, ''),
(13, 52, 11, 1, ''),
(14, 53, 11, 3, ''),
(15, 54, 12, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_client` varchar(50) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `harga` int(50) NOT NULL,
  `cabang` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_client`, `nama_kategori`, `harga`, `cabang`, `foto`) VALUES
(1243, '', 'Smoothing Rambut', 55000, 'A', ''),
(2111, '', 'Potong rambut', 25000, 'B', ''),
(4321, '', 'Creambath', 70000, 'B', ''),
(8778, '', 'Cat Rambut', 50000, 'A', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id_order` int(10) UNSIGNED NOT NULL,
  `total_item` int(11) NOT NULL,
  `total_bayar` float NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`id_order`, `total_item`, `total_bayar`, `tgl_transaksi`, `status`) VALUES
(51, 1, 50000, '2021-01-21', ''),
(52, 1, 50000, '2021-01-21', ''),
(53, 3, 150000, '2021-01-21', ''),
(54, 2, 110000, '2021-01-21', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id` int(10) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga` float NOT NULL,
  `stok` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id`, `nama_barang`, `harga`, `stok`, `tanggal`) VALUES
(12, 'Sayur Kangkung', 55000, 10, '2021-01-22'),
(13, 'Ikan Lele', 150000, 5, '2021-01-21'),
(14, 'Daging Sapi', 250000, 5, '2021-01-19'),
(15, 'Beras', 400000, 20, '2021-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `nama_client` varchar(30) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `total_harga` varchar(50) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `jumlah_barang` varchar(50) NOT NULL,
  `id_karyawan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `nama_client`, `nama_barang`, `total_harga`, `tanggal_transaksi`, `jumlah_barang`, `id_karyawan`) VALUES
(1111, 'Bang Jun', 'sayur bayem', '500000000', '2021-01-02', '10', 6856785),
(1112, 'Steven', 'Cat Rambut', '50000', '0000-00-00', 'B', 0),
(1113, 'Kris', 'Smoothing Rambut', '70000', '0000-00-00', 'A', 0),
(456346, '', 'nagka', '500000000', '2021-01-09', '10', 67567);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_detail_order`
--
ALTER TABLE `tb_detail_order`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_detail_order`
--
ALTER TABLE `tb_detail_order`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id_order` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=456347;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
