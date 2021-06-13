-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 10:18 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakeuda`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akun`
--

CREATE TABLE `tbl_akun` (
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `level` varchar(128) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_akun`
--

INSERT INTO `tbl_akun` (`username`, `password`, `nama`, `level`) VALUES
('arin', 'arin', 'arin\r\n', 'admin'),
('yulia', 'yulia', 'yulia', 'admin'),
('nadira', 'nadira', 'nadira', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bangunanbakeuda`
--

CREATE TABLE `tbl_bangunanbakeuda` (
  `id_bangunanbakeuda` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `nama_berkas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bangunanbakeuda`
--

INSERT INTO `tbl_bangunanbakeuda` (`id_bangunanbakeuda`, `judul`, `keterangan`, `nama_berkas`) VALUES
(1, 'Gambar 1', 'Gambar 1', 'Gambar 1'),
(2, 'Gambar 2', 'Gambar 2', 'Gambar 2'),
(3, 'Gambar 3', 'Gambar 3', 'Gambar 3\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_strukturorganisasi` int(128) NOT NULL,
  `nama_berkas` varchar(128) NOT NULL,
  `keterangan_berkas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_strukturorganisasi`, `nama_berkas`, `keterangan_berkas`) VALUES
(4, '03940cb9e46f5e4d8d5fa3c9f3ba56fc.jpg', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_download`
--

CREATE TABLE `tbl_download` (
  `id_download` int(128) NOT NULL,
  `nama_berkas` varchar(128) NOT NULL,
  `keterangan_berkas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_download`
--

INSERT INTO `tbl_download` (`id_download`, `nama_berkas`, `keterangan_berkas`) VALUES
(2, 'e9406976eacb093523894855bffb6046.pdf', 'Buku Kas Umum'),
(5, '0091b1375ba577244334b72fd865a399.jpg', 'arin\r\n'),
(6, 'b34fc99dc41224a64edf3f8f6c994ade.pdf', 'Struktur Organisasi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slidegambarutama`
--

CREATE TABLE `tbl_slidegambarutama` (
  `id_slidegambarutama` int(11) NOT NULL,
  `nama_berkas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_slidegambarutama`
--

INSERT INTO `tbl_slidegambarutama` (`id_slidegambarutama`, `nama_berkas`) VALUES
(3, 'slide_03.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE `tbl_video` (
  `id_video` int(128) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `link` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_video`
--

INSERT INTO `tbl_video` (`id_video`, `judul`, `keterangan`, `link`, `status`) VALUES
(1, 'Update Corona Indonesia 11 Juni 2021', 'JAKARTA, KOMPAS.TV  Satuan Tugas Penanganan Covid-19 merilis perkembangan data kasus Covid-19 di Indonesia.', 'https://www.youtube.com/watch?v=sLexonNk16g', 'Utama'),
(2, 'judul pendukung 1', 'keterangan pendukung 1', 'link pendukung 1', 'Pendukung'),
(3, 'judul pendukung 2', 'keterangan pendukung 2', 'link pendukung 2', 'Pendukung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bangunanbakeuda`
--
ALTER TABLE `tbl_bangunanbakeuda`
  ADD PRIMARY KEY (`id_bangunanbakeuda`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_strukturorganisasi`);

--
-- Indexes for table `tbl_download`
--
ALTER TABLE `tbl_download`
  ADD PRIMARY KEY (`id_download`);

--
-- Indexes for table `tbl_slidegambarutama`
--
ALTER TABLE `tbl_slidegambarutama`
  ADD PRIMARY KEY (`id_slidegambarutama`);

--
-- Indexes for table `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bangunanbakeuda`
--
ALTER TABLE `tbl_bangunanbakeuda`
  MODIFY `id_bangunanbakeuda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_strukturorganisasi` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_download`
--
ALTER TABLE `tbl_download`
  MODIFY `id_download` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_slidegambarutama`
--
ALTER TABLE `tbl_slidegambarutama`
  MODIFY `id_slidegambarutama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `id_video` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
