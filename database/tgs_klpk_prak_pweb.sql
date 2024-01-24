-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2024 at 08:43 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tgs_klpk_prak_pweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id_pelanggan` int(11) PRIMARY KEY NOT NULL,
  `nama_pelanggan` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `umur` int(11) NOT NULL,
  `alamat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `jenis_kelamin`, `umur`, `alamat`) VALUES
(1, 'Ibmal', 'Laki-Laki', 20, 'Pekanbaru'),
(2, 'Vania', 'Perempuan', 19, 'Padang Panjang'),
(3, 'Annisa', 'Perempuan', 19, 'Rokan Hulu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemasukan`
--

CREATE TABLE `tbl_pemasukan` (
  `id_pemasukan` int(11) PRIMARY KEY NOT NULL,
  `tgl_pemasukan` date NOT NULL,
  `produk` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pemasukan`
--

INSERT INTO `tbl_pemasukan` (`id_pemasukan`, `tgl_pemasukan`, `produk`, `harga`, `stok`) VALUES
(1, '2024-01-14', 'Daging sapi', 130000, 1),
(2, '2024-01-15', 'buah salak', 17000, 2),
(3, '2024-01-15', 'buah alpukat', 20000, 2),
(4, '2024-01-16', 'ayam potong', 35000, 1),
(5, '2024-01-19', 'mie rebus indomie', 120000, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
