-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 06:47 AM
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
-- Table structure for table `polling`
--

CREATE TABLE `polling` (
  `id` int(128) NOT NULL,
  `framework` varchar(128) NOT NULL,
  `value` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `polling`
--

INSERT INTO `polling` (`id`, `framework`, `value`) VALUES
(1, 'Sangat Bagus', 1),
(2, 'Bagus', 0),
(3, 'Cukup', 0),
(4, 'Kurang', 0);

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
(1, 'Gambar 1', 'Gambar 1', 'no-image-found-360x25011.png'),
(2, 'Gambar 2', 'Gambar 2', 'no-image-found-360x25012.png'),
(3, 'Gambar 3', 'Gambar 3', 'no-image-found-360x25013.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(128) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `isi` longtext NOT NULL,
  `nama_berkas` varchar(250) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul`, `isi`, `nama_berkas`, `tanggal`) VALUES
(5, 'judul contoh', 'Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci. Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci. Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci. Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.\r\n\r\nDonec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.vvv\r\n\r\nDonec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.\r\n\r\n\r\nDonec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.', '01072013-seleb-057.jpg', '2021-06-15 16:51:13'),
(6, 'aljaldkjl', 'Donec sit amet neque lectus. Ut vitae turpis justo. Nullam a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra orci.', 'no-image-found-360x25021.png', '2021-06-15 17:20:20'),
(7, 'nadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadira', 'nadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadira\r\n\r\nnadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadira\r\n\r\nnadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadira\r\n\r\nnadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadira\r\n\r\n\r\nnadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadira', 'contoh_struktur_organisasi6.png', '2021-06-15 17:58:11'),
(8, 'nadiranadiranadiranadiranadirana', 'nadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadira\r\n\r\nnadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadira\r\n\r\nnadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadira\r\n\r\nnadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadira\r\n\r\nnadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadiranadira', '01072013-seleb-058.jpg', '2021-06-15 18:01:16');

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
(7, '5408874fa61bea7521bfc96ba1d4a096.pdf', 'Alur Siabpadsim\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `id_galeri` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `nama_berkas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id_galeri`, `judul`, `nama_berkas`) VALUES
(1, 'Galeri 1', 'no-image-found-360x2504.png'),
(2, 'Galeri 2', 'no-image-found-360x2505.png'),
(3, 'Galeri  3', 'no-image-found-360x2506.png'),
(4, 'Galeri  4', 'no-image-found-360x2507.png'),
(5, 'Galeri  5', 'no-image-found-360x2508.png'),
(6, 'Galeri  6', 'no-image-found-360x2509.png'),
(7, 'Galeri  7', 'no-image-found-360x25010.png'),
(17, 'Gambar 1', 'no-image-found-360x25019.png'),
(18, 'jnbjnk.', 'no-image-found-360x25020.png'),
(19, 'asdljakd', 'no-image-found-360x25018.png'),
(20, 'asdlmd', 'no-image-found-360x25017.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_informasi`
--

CREATE TABLE `tbl_informasi` (
  `id_informasi` int(11) NOT NULL,
  `nama_berkas` varchar(128) NOT NULL,
  `keterangan_berkas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_informasi`
--

INSERT INTO `tbl_informasi` (`id_informasi`, `nama_berkas`, `keterangan_berkas`) VALUES
(1, 'IMG_0409.JPG', 'aaa\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profil`
--

CREATE TABLE `tbl_profil` (
  `id_profil` int(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `nama_berkas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_profil`
--

INSERT INTO `tbl_profil` (`id_profil`, `nama`, `jabatan`, `nama_berkas`) VALUES
(1, 'SULAIMAN LUBIS, S.E', 'Kepala Badan Keuangan Daerah Kota Padangsidimpuan', '01072013-seleb-051.jpg');

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
(1, 'no-image-found-360x25014.png'),
(2, 'no-image-found-360x25015.png'),
(3, 'no-image-found-360x25016.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tentangbakeuda`
--

CREATE TABLE `tbl_tentangbakeuda` (
  `id_tentangbakeuda` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `keterangan` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tentangbakeuda`
--

INSERT INTO `tbl_tentangbakeuda` (`id_tentangbakeuda`, `judul`, `keterangan`) VALUES
(1, 'Visi', 'adahdakdhakdhasdjk bkadajkdh akdj askdas kaksdfhasjkfhasjkf hklasfhasjklfhs ajkfh jkasfhaskl fhsaklj fhklj hsaflk 45 askdjhajkha klasjfhasjklfh ksdj fhsjkfhaskjf hsajkf hasjkfhasjklfh askfhsdkljfhsd kjfhsd jklfhsd jklfs klfhsajkl fhasjkfh sjklf 76 ak adahdakdhakdhasdjk bkadajkdh akdj askdas kaksdfhasjkfhasjkf hklasfhasjklfhs ajkfh jkasfhaskl fhsaklj fhklj hsaflk 45 askdjhajkha klasjfhasjklfh ksdj fhsjkfhaskjf hsajkf hasjkfhasjklfh askfhsdkljfhsd kjfhsd jklfhsd jklfs klfhsajkl fhasjkfh sjklf 76 ak 98'),
(2, 'Misi', 'adahdakdhakdhasdjk bkadajkdh akdj askdas kaksdfhasjkfhasjkf hklasfhasjklfhs ajkfh jkasfhaskl fhsaklj fhklj hsaflk 45 askdjhajkha klasjfhasjklfh ksdj fhsjkfhaskjf hsajkf hasjkfhasjklfh askfhsdkljfhsd kjfhsd jklfhsd jklfs klfhsajkl fhasjkfh sjklf 76 ak adahdakdhakdhasdjk bkadajkdh akdj askdas kaksdfhasjkfhasjkf hklasfhasjklfhs ajkfh jkasfhaskl fhsaklj fhklj hsaflk 45 askdjhajkha klasjfhasjklfh ksdj fhsjkfhaskjf hsajkf hasjkfhasjklfh askfhsdkljfhsd kjfhsd jklfhsd jklfs klfhsajkl fhasjkfh sjklf 76 ak 98 561'),
(3, 'Struktur', 'contoh_struktur_organisasi2.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE `tbl_video` (
  `id_video` int(128) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `link` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_video`
--

INSERT INTO `tbl_video` (`id_video`, `judul`, `keterangan`, `link`, `status`) VALUES
(1, 'Update Corona Indonesia 11 Juni 2021', 'JAKARTA, KOMPAS.TV  Satuan Tugas Penanganan Covid-19 merilis perkembangan data kasus Covid-19 di Indonesia.', 'sLexonNk16g', 'Utama'),
(2, 'Tempat Wisata Ditutup Saat Libur Lebaran', 'Pengelola Taman Wisata Alam Puntikayu Palembang, menutup aktivitasnya dari kunjungan. Hal itu dilakukan karena saat ini Kota Pal', 'EtfTeAmL2Gk', 'Pendukung'),
(3, '7 Cara Menjaga Sistem Imun Tubuh Tetap Sehat Lawan Corona', 'JAKARTA, KOMPAS.TV - Salah satu yang dapat dilakukan untuk melindungi diri dari paparan virus corona adalah menjaga sistem imun ', 'hW08aY3aE_k', 'Pendukung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `polling`
--
ALTER TABLE `polling`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bangunanbakeuda`
--
ALTER TABLE `tbl_bangunanbakeuda`
  ADD PRIMARY KEY (`id_bangunanbakeuda`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tbl_download`
--
ALTER TABLE `tbl_download`
  ADD PRIMARY KEY (`id_download`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `tbl_profil`
--
ALTER TABLE `tbl_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `tbl_slidegambarutama`
--
ALTER TABLE `tbl_slidegambarutama`
  ADD PRIMARY KEY (`id_slidegambarutama`);

--
-- Indexes for table `tbl_tentangbakeuda`
--
ALTER TABLE `tbl_tentangbakeuda`
  ADD PRIMARY KEY (`id_tentangbakeuda`,`judul`);

--
-- Indexes for table `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `polling`
--
ALTER TABLE `polling`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_bangunanbakeuda`
--
ALTER TABLE `tbl_bangunanbakeuda`
  MODIFY `id_bangunanbakeuda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_download`
--
ALTER TABLE `tbl_download`
  MODIFY `id_download` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_profil`
--
ALTER TABLE `tbl_profil`
  MODIFY `id_profil` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_slidegambarutama`
--
ALTER TABLE `tbl_slidegambarutama`
  MODIFY `id_slidegambarutama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_tentangbakeuda`
--
ALTER TABLE `tbl_tentangbakeuda`
  MODIFY `id_tentangbakeuda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `id_video` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
