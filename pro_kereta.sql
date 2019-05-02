-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2017 at 02:43 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pro_kereta`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_input`
--

CREATE TABLE `tbl_input` (
  `kode_kereta` varchar(15) NOT NULL,
  `kereta` varchar(30) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `kota_asal` varchar(30) NOT NULL,
  `kota_tujuan` varchar(30) NOT NULL,
  `berangkat` time NOT NULL,
  `tiba` time NOT NULL,
  `harga` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_input`
--

INSERT INTO `tbl_input` (`kode_kereta`, `kereta`, `kelas`, `tgl_berangkat`, `kota_asal`, `kota_tujuan`, `berangkat`, `tiba`, `harga`) VALUES
('B111', 'Manggarai', 'ekonomi', '2017-12-07', 'Bogor', 'Surabaya', '10:00:00', '12:00:00', 100000),
('B112', 'Paledang', 'bisnis', '2017-12-15', 'bogor', 'jakarta', '09:00:00', '11:00:00', 20000),
('B113', 'Manggarai', 'bisnis', '2017-12-15', 'bogor', 'jakarta', '08:00:00', '09:00:00', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id_user` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `akses` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id_user`, `username`, `password`, `akses`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesan`
--

CREATE TABLE `tbl_pesan` (
  `kode_kereta` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nomor_hp` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pesan`
--

INSERT INTO `tbl_pesan` (`kode_kereta`, `nama`, `alamat`, `nomor_hp`) VALUES
('B114', 'Fadlan', 'Tapos', 869),
('B111', 'Muhamad Rivaldi', 'kkkk', 983402);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_input`
--
ALTER TABLE `tbl_input`
  ADD PRIMARY KEY (`kode_kereta`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
