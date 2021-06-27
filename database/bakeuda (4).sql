-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2021 at 07:37 AM
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
(2, 'Bagus', 1),
(3, 'Cukup', 2),
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
('nadira', 'nadira', 'nadira', 'admin'),
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
(1, 'Gambar 1', 'Gambar 1', 'WhatsApp_Image_2021-06-22_at_12_32_15.jpeg'),
(2, 'Gambar 2', 'Gambar 2', 'WhatsApp_Image_2021-06-22_at_12_32_291.jpeg'),
(3, 'Gambar 3', 'Gambar 3', 'WhatsApp_Image_2021-06-22_at_12_32_14.jpeg');

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
(5, 'Makam Jenazah Pasien Covid-19 Minta Dipindahkan, Wali Kota: Beri Kami Kesempatan...', 'Penulis Kontributor Padang Sidempuan, Oryza Pasaribu | Editor I Kadek Wira Aditya\r\n\r\nPADANG SIDEMPUAN, KOMPAS.com - Menyikapi kekhawatiran warga yang menimbulkan penolakan terhadap pemakaman pasien Covid-19 di Lingkungan I, Kelurahan Aek Tampang, Kecamatan Padang Sidempuan Selatan, Wali Kota Padang Sidempuan Irsan Efendi Nasution menyebut, terkait proses pemulasaraan hingga pemakaman jenazah sudah dilakukan sesuai dengan protokol kesehatan.\r\n\r\n\"Sebagai Ketua Satgas Covid-19, saya pastikan semua prokes sudah kami lakukan, mulai dari merawat almarhum selama beberapa hari di ruang isolasi rumah sakit. Kemudian, pemulasaraan jenazahnya juga sudah mempedomani ketentuan perundang-undangan,\" ujar Wali Kota Padang Sidempuan, Irsan Efendi Nasution ketika mendatangi lokasi pemakaman, Minggu (23/5/2021) sore.', '60ab7a6102306.jpg', '2021-06-15 16:51:13'),
(6, 'Bongkar Paksa Makam Jenazah Covid-19, Warga Sesalkan Tidak Ada Koordinasi Saat Pemakaman', 'Editor Khairina KOMPAS.com- Satu warga terkonfirmasi Covid-19 meninggal dan dimakamkan di area perkuburan umum di Lingkungan I, Kelurahan Aek Tampang, Kecamatan Padang Sidempuan Selatan, Kota Padang Sidempuan, Sabtu (22/5/2021) malam. Masyarakat menolak pemakaman itu. Penolakan tersebut berujung dengan aksi pembakaran area makam warga yang dikebumikan dan upaya pembongkaran paksa. Tokoh masyarakat setempat, Haidir Nasution menyampaikan, ia mengetahui adanya pemakaman Covid-19 itu berdasarkan laporan warga dan melihat video saat pemakaman. \"Saya melihat petugas memakamkan menggunakan APD lengkap, artinya sudah menduga ke arah Covid-19. Maka harapan kami, agar makam dibongkar dan dipindahkan,\" ujar Haidir mewakili warga yang menolak.\r\n\r\nArtikel ini telah tayang di Kompas.com dengan judul \"Bongkar Paksa Makam Jenazah Covid-19, Warga Sesalkan Tidak Ada Koordinasi Saat Pemakaman\", Klik untuk baca: https://regional.kompas.com/read/2021/05/23/140132278/bongkar-paksa-makam-jenazah-covid-19-warga-sesalkan-tidak-ada-koordinasi.\r\n\r\nEditor : Khairina', '60a99ffb9da29.jpg', '2021-06-15 17:20:20'),
(7, 'Walikota: Masyarakat tetap patuhi protokol kesehatan, virus corona belum hilang', 'Padangsidimpuan (ANTARA) - Wali Kota Padangsidimpuan Irsan Efendi Nasution menyampaikan kepada masyarakat bahwa dianjurkan kepada masyarakat Kota Padangsidimpuan untuk tertib dan disiplin protokol kesehatan mengingat penyebaran virus corona belum hilang. \r\n\r\nIrsan Efendi Nasution berharap bersama-sama masyarakat untuk dapat menekan penyebaran virus corona tersebut dan tetap jaga kesehatan, mengingat sekarang ini segala upaya telah dilakukan pemerintah, termaksud Pelaksanaan Pemberlakuan Pembatasan Kegiatan Masyarakat (PPKM) telah dilakukan agar masyarakat dapat membatasi waktunya, termaksud untuk pemilik cafe dan restoran di Kota Padangsidimpuan.\r\n\r\nBaca juga: Wartawan di Padangsidimpuan gelar unjuk rasa solidaritas\r\n\r\n\"Penyebaran virus corona ini tidak hanya melanda Kota Padangsidimpuan semata akan tetapi seluruh daerah yang ada di negara ini, tahapan dan upaya yang dilakukan hampir sama seperti yang disampaikan pemerintah pusat, kejadian ini bukan keinginan kita,\" ucap Irsan.\r\n\r\nTidak terasa penyebaran virus corona sudah berjalan dua tahun, efeknya maha dahsyat mulai tingkatan pendidikan ekonomi dan yang terburuk menyerang kesehatan hingga meninggal dunia, mari bersama-sama mendoakan negeri ini kembali sehat sehingga kembali normal dan masyarakat kita juga dapat menggapai rezekinya tidak seperti sekarang ini.\r\n\r\nSebelumnya Direktur RSUD Padangsidimpuan, Masrip Sarumpaet juga melaporkan sudah 10 pasien yang sedang dirawat sampai sekarang ini, katanya.\r\n\r\nPewarta : Khairul Arief\r\nEditor: Juraidi\r\nCOPYRIGHT © ANTARA 2021\r\n', 'IMG-20210209-WA0029_copy_800x465.jpg', '2021-06-15 17:58:11'),
(11, 'Satgas TMMD Kodim 0212/TS bantu mobil warga yang mogok', 'Padangsidimpuan (ANTARA) - Satgas TMMD ke 111 Kodim 0212/TS membantu mobil warga yang mogok akibat tidak kuatnya menanjak dengan cara mendorongnya.. \r\n\r\nKondisi jalan yang belum mulus dan kondisi jalan tanah yang licin mengakibatkan kondisi mobil menjadi slip dan tidak bisa menanjak, ucap Dansatgas TMMD ke 111 Kodim 0212/TS Letkol Info Rooy Chandra Sihombing, Rabu (23/6). \r\n\r\nBaca juga: Satgas TMMD bersihkan gereja di Desa Sihuom\r\n\r\n\"Selama ini angkutan wargalah yang dipergunakan masyarakat sekitar sebagai angkutan umum untuk memudahkan akses penghubung desa terisolir tepatnya Desa Sihuom tersebut,\" ucap Letkol Rooy. \r\n\r\nMimpi masyarakat yang selama ini ingin memiliki desa lebih maju dan meningkat perekonomiannya, mungkin segera akan terwujud, katanya. \r\n\r\nSementara itu amaluddin Siregar pemilik mobil mengucapkan terimakasih kepada TNI yang telah membantu mobilnya yang mogok dan sempat terperosok. \r\n\r\n\"Kita sangat bersyukur dengan keberadaan Satgas TMMD ke 111 Kodim 0212/TS didesa kami ini, karena selain pembukaan jalan, personel Satgas TMMD juga membantu warga yang kesusahan,\" ucapnya.\r\nPewarta : Khairul Arief\r\nEditor: Juraidi', 'IMG-20210623-WA0057_copy_800x470.jpg', '2021-06-23 17:25:47');

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
(1, 'Galeri 1', 'WhatsApp_Image_2021-06-22_at_12_32_20.jpeg'),
(2, 'Galeri 2', 'WhatsApp_Image_2021-06-22_at_12_32_311.jpeg'),
(3, 'Galeri  3', 'WhatsApp_Image_2021-06-22_at_12_32_26.jpeg'),
(4, 'Galeri  4', 'WhatsApp_Image_2021-06-22_at_12_32_27.jpeg'),
(5, 'Galeri  5', 'WhatsApp_Image_2021-06-22_at_12_32_28.jpeg'),
(6, 'Galeri  6', 'WhatsApp_Image_2021-06-22_at_12_32_31.jpeg'),
(7, 'Galeri  7', 'WhatsApp_Image_2021-06-22_at_12_32_29.jpeg'),
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
-- Table structure for table `tbl_situsterkait`
--

CREATE TABLE `tbl_situsterkait` (
  `id_situsterkait` int(128) NOT NULL,
  `link_situs` varchar(128) NOT NULL,
  `nama_berkas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, '07032021101436-Tanjungmeru-Kebumen-gutama-_1_1.jpeg'),
(2, 'maxresdefault.jpeg'),
(3, 'WhatsApp_Image_2021-06-22_at_12_32_14.jpg');

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
(1, 'Visi', 'Badan Pengelolaan Keuangan dan Pendapatan Daerah mempunyai tugas melaksanakan penyusunan dan pelaksanaan kebijakan Daerah dibidang keuangan, pendapatan dan barang milik Daerah.'),
(2, 'Misi', 'adahdakdhakdhasdjk bkadajkdh akdj askdas kaksdfhasjkfhasjkf hklasfhasjklfhs ajkfh jkasfhaskl fhsaklj fhklj hsaflk 45 askdjhajkha klasjfhasjklfh ksdj fhsjkfhaskjf hsajkf hasjkfhasjklfh askfhsdkljfhsd kjfhsd jklfhsd jklfs klfhsajkl fhasjkfh sjklf 76 ak adahdakdhakdhasdjk bkadajkdh akdj askdas kaksdfhasjkfhasjkf hklasfhasjklfhs ajkfh jkasfhaskl fhsaklj fhklj hsaflk 45 askdjhajkha klasjfhasjklfh ksdj fhsjkfhaskjf hsajkf hasjkfhasjklfh askfhsdkljfhsd kjfhsd jklfhsd jklfs klfhsajkl fhasjkfh sjklf 76 ak 98 561'),
(13, 'Struktur', 'Tanpa_judul.jpg');

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
-- Indexes for table `tbl_situsterkait`
--
ALTER TABLE `tbl_situsterkait`
  ADD PRIMARY KEY (`id_situsterkait`);

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
  MODIFY `id_berita` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_download`
--
ALTER TABLE `tbl_download`
  MODIFY `id_download` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- AUTO_INCREMENT for table `tbl_situsterkait`
--
ALTER TABLE `tbl_situsterkait`
  MODIFY `id_situsterkait` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_slidegambarutama`
--
ALTER TABLE `tbl_slidegambarutama`
  MODIFY `id_slidegambarutama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_tentangbakeuda`
--
ALTER TABLE `tbl_tentangbakeuda`
  MODIFY `id_tentangbakeuda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `id_video` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
