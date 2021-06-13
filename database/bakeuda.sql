-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jun 2021 pada 07.59
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.30

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
-- Struktur dari tabel `tbl_akun`
--

CREATE TABLE `tbl_akun` (
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `level` varchar(128) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_akun`
--

INSERT INTO `tbl_akun` (`username`, `password`, `nama`, `level`) VALUES
('arin', 'arin', 'arin\r\n', 'admin'),
('yulia', 'yulia', 'yulia', 'admin'),
('nadira', 'nadira', 'nadira', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_strukturorganisasi` int(128) NOT NULL,
  `nama_berkas` varchar(128) NOT NULL,
  `keterangan_berkas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_strukturorganisasi`, `nama_berkas`, `keterangan_berkas`) VALUES
(4, '03940cb9e46f5e4d8d5fa3c9f3ba56fc.jpg', 'D');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_download`
--

CREATE TABLE `tbl_download` (
  `id_download` int(128) NOT NULL,
  `nama_berkas` varchar(128) NOT NULL,
  `keterangan_berkas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_download`
--

INSERT INTO `tbl_download` (`id_download`, `nama_berkas`, `keterangan_berkas`) VALUES
(2, 'e9406976eacb093523894855bffb6046.pdf', 'Buku Kas Umum'),
(5, '0091b1375ba577244334b72fd865a399.jpg', 'arin\r\n'),
(6, 'b34fc99dc41224a64edf3f8f6c994ade.pdf', 'Struktur Organisasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_slidegambarutama`
--

CREATE TABLE `tbl_slidegambarutama` (
  `id_slidegambarutama` int(11) NOT NULL,
  `nama_berkas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_slidegambarutama`
--

INSERT INTO `tbl_slidegambarutama` (`id_slidegambarutama`, `nama_berkas`) VALUES
(3, 'slide_03.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_strukturorganisasi`);

--
-- Indeks untuk tabel `tbl_download`
--
ALTER TABLE `tbl_download`
  ADD PRIMARY KEY (`id_download`);

--
-- Indeks untuk tabel `tbl_slidegambarutama`
--
ALTER TABLE `tbl_slidegambarutama`
  ADD PRIMARY KEY (`id_slidegambarutama`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_strukturorganisasi` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_download`
--
ALTER TABLE `tbl_download`
  MODIFY `id_download` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_slidegambarutama`
--
ALTER TABLE `tbl_slidegambarutama`
  MODIFY `id_slidegambarutama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
