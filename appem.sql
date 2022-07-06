-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 06:22 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appem`
--

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` char(16) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `ussername` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `ussername`, `password`, `telp`) VALUES
('084358389', 'Somi', 'somi', 'somi', '09745356334'),
('45667', 'Wendy', 'wendy', 'wendy', '0878678564'),
('56789', 'Kang Seulgi', 'seulgi', 'seulgi', '8972398469327'),
('67834', 'Irene', 'irene', 'irene', '0987635423'),
('97363', 'Yeri', 'yeri', 'yeri', '0868545245');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `nik` char(16) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('0','proses','selesai','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `isi_laporan`, `foto`, `status`) VALUES
(14, '2020-04-20', '97363', 'saya melaporkan adanya pencurian', '', 'selesai'),
(15, '2020-04-20', '97363', 'saya bertemu dengan penguasa yang semena mena', '380kZz.jpg', 'selesai'),
(16, '2020-04-20', '56789', 'mencari orang hilang', 'unnamed.jpg', 'selesai'),
(17, '2020-04-20', '56789', 'sampah menumpuk di jalan mohon untuk diperhatikan', 'sampah.jpg', 'selesai'),
(18, '2020-04-20', '56789', 'mohon untuk membetulkan jalan', '97835194749-12-10_hl_--_jalan_rusak_ditanami_pohon_pisang.jpg', 'selesai'),
(19, '2020-04-20', '084358389', 'mohon untuk diberi penerangan lagi atau satpam karena banyak begal', 'BERITA_1583406745_61b416a20981e5636e7dc8b2e6b71fad.jpg', '0'),
(20, '2020-04-20', '084358389', 'terjadi pencurian ,mohon untuk lebih diperhatikan lagi keamanannya', 'robber-punches-police-escapes-in-hojai-39cd6fce2fde5bfbfbc6cd7ddf7d81d6_600x400.jpg', 'selesai'),
(21, '2020-04-20', '084358389', 'masih banyak orang yang tidak menggunakan masker ,dimohon tuk sosialisasi dari wabah ini agar masyarakat lebih sadar', '', 'selesai'),
(22, '2020-04-20', '45667', 'dimohon untuk pemotongan gaji pemerintah agar diberikan kepada rumah sakit untuk menangani virus corona', '', 'proses');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `ussername` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `level` enum('admin','petugas','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `ussername`, `password`, `telp`, `level`) VALUES
(1, 'Admin', 'admin', 'admin', '28347535', 'admin'),
(5, 'Petugas', 'petugas', 'petugas', '09872354211', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) VALUES
(8, 14, '2020-04-20', '\r\ntapi keren', 1),
(9, 15, '2020-04-20', '\r\n', 1),
(10, 16, '2020-04-20', 'siap saya bantu carikan\r\n', 1),
(11, 17, '2020-04-20', '\r\nsiap kami akan bantu', 1),
(12, 18, '2020-04-20', '\r\nakan kami perbaiki', 1),
(13, 20, '2020-04-20', '\r\nkami mengirimkan 2 pasukan CIA ', 1),
(14, 21, '2022-02-01', '\r\nzdsdc', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`),
  ADD KEY `id_pengaduan` (`id_pengaduan`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `pengaduan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `masyarakat` (`nik`);

--
-- Constraints for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD CONSTRAINT `tanggapan_ibfk_1` FOREIGN KEY (`id_pengaduan`) REFERENCES `pengaduan` (`id_pengaduan`),
  ADD CONSTRAINT `tanggapan_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
