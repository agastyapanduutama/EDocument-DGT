-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 29, 2020 at 08:09 PM
-- Server version: 5.7.30
-- PHP Version: 5.6.40-29+ubuntu20.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etbke`
--

-- --------------------------------------------------------

--
-- Table structure for table `mst_aksisurat`
--

CREATE TABLE `mst_aksisurat` (
  `id_aksi` int(10) NOT NULL,
  `kode_aksi` varchar(30) NOT NULL,
  `nama_aksi` varchar(100) DEFAULT NULL,
  `keterangan` text,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `add_user` varchar(100) DEFAULT NULL,
  `modified_user` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_aksisurat`
--

INSERT INTO `mst_aksisurat` (`id_aksi`, `kode_aksi`, `nama_aksi`, `keterangan`, `add_date`, `modified_date`, `add_user`, `modified_user`) VALUES
(0, '0', NULL, NULL, '2013-10-24 22:11:57', '0000-00-00 00:00:00', NULL, NULL),
(1, 'A001', 'Catat', 'Catat Surat saja', '2013-08-27 16:21:14', '2013-08-27 16:21:14', 'admin', 'admin'),
(2, 'A002', 'Untuk Diketahui / Diperhatikan', '', '2013-08-27 16:21:34', '2013-08-27 16:21:34', 'admin', NULL),
(3, 'A003', 'Untuk Diselesaikan', 'Untuk Diselesaikan', '2013-08-27 18:06:37', '2013-08-27 18:06:37', 'admin', NULL),
(4, 'A004', 'Harap Tanggapan dan Saran', 'Harap Tanggapan dan Saran', '2013-08-27 18:06:58', '2013-08-27 18:06:58', 'admin', NULL),
(5, 'A005', 'Harap Penjelasan', 'Harap Penjelasan', '2013-08-27 18:07:13', '2013-08-27 18:07:13', 'admin', NULL),
(6, 'A006', 'Edarkan', 'Edarkan', '2013-08-27 18:07:23', '2013-08-27 18:07:23', 'admin', NULL),
(7, 'A007', 'Teliti dan Pelajari', 'Teliti dan Pelajari', '2013-08-27 18:07:45', '2013-08-27 18:07:45', 'admin', NULL),
(8, 'A008', 'Siapkan Jawaban', 'Siapkan Jawaban', '2013-08-27 18:07:57', '2013-08-27 18:07:57', 'admin', NULL),
(9, 'A009', 'Buat Laporan', 'Buat Laporan', '2013-08-27 18:08:08', '2013-08-27 18:08:08', 'admin', NULL),
(10, 'A010', 'Agar Dipantau', 'Agar Dipantau', '2013-08-27 18:08:33', '2013-08-27 18:08:33', 'admin', NULL),
(11, 'A011', 'Ingatkan Saya', 'Ingatkan Saya', '2013-08-27 18:08:55', '2013-08-27 18:08:55', 'admin', NULL),
(12, 'A012', 'Harap Temui Saya', 'Harap Temui Saya', '2013-08-27 18:09:10', '2013-08-27 18:09:10', 'admin', NULL),
(13, 'A013', 'Harap Kembali', 'Harap Kembali', '2013-08-27 18:09:31', '2013-08-27 18:09:31', 'admin', NULL),
(14, 'A014', 'Simpan (File)', 'Harap Kembali', '2013-08-27 18:09:43', '2013-08-27 18:09:43', 'admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mst_content`
--

CREATE TABLE `mst_content` (
  `id_content` int(10) NOT NULL,
  `content_beranda` text,
  `content_tentang` text,
  `content_runningtext` text,
  `content_kontak` text,
  `content_backup1` text,
  `content_backup2` text,
  `content_backup3` text,
  `content_backup4` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_content`
--

INSERT INTO `mst_content` (`id_content`, `content_beranda`, `content_tentang`, `content_runningtext`, `content_kontak`, `content_backup1`, `content_backup2`, `content_backup3`, `content_backup4`) VALUES
(1, '<p><img style=\"float: left;\" src=\"/esdm/assets/tnymce/uploaded/edocshort.png\" alt=\"\" width=\"103\" height=\"111\" /></p>\n<p class=\"IsiLaporan\"><span lang=\"IT\">Aplikasi <em>e-Doc</em> merupakan salah satu aplikasi dalam kelompok Administrasi dan Manajemen pada blok fungsi e-Gov. Aplikasi ini dirancang untuk dapat mengelola berbagai dokumen yang ada dalam lembaga. Melalui proses <em>scanning</em>, dokumen <em>hard-copy</em> diubah menjadi <em>soft-copy</em> dan dimasukkan ke dalam <em>database</em> untuk pengolahan lebih lanjut. </span></p>\n<p class=\"IsiLaporan\"><span lang=\"IT\">&nbsp;</span></p>\n<h2><a name=\"_Toc362498838\"><span lang=\"IT\">Fungsionalitas aplikasi</span></a></h2>\n<p class=\"IsiLaporan\"><span lang=\"IT\">Secara umum, aplikasi <em>e-Doc</em> memiliki fungsionalitas sebagai berikut :</span></p>\n<p class=\"IsiLaporan\" style=\"margin-left: 72.0pt; text-indent: -18.0pt; mso-list: l0 level1 lfo1; tab-stops: list 72.0pt;\"><!--[if !supportLists]--><span style=\"font-family: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol; mso-ansi-language: SV;\" lang=\"SV\">&middot;<span style=\"font-size: 7pt; font-family: \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang=\"SV\">Mengelola pengguna dan grup pengguna</span></p>\n<p class=\"IsiLaporan\" style=\"margin-left: 72.0pt; text-indent: -18.0pt; mso-list: l0 level1 lfo1; tab-stops: list 72.0pt;\"><!--[if !supportLists]--><span style=\"font-family: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol; mso-ansi-language: SV;\" lang=\"SV\">&middot;<span style=\"font-size: 7pt; font-family: \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang=\"SV\">Mengelola dokumen dan kelompok dokumen</span></p>\n<p class=\"IsiLaporan\" style=\"margin-left: 72.0pt; text-indent: -18.0pt; mso-list: l0 level1 lfo1; tab-stops: list 72.0pt;\"><!--[if !supportLists]--><span style=\"font-family: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol; mso-ansi-language: SV;\" lang=\"SV\">&middot;<span style=\"font-size: 7pt; font-family: \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang=\"SV\">Memberikan fasilitas pencarian dokumen</span></p>\n<p class=\"IsiLaporan\" style=\"margin-left: 72.0pt; text-indent: -18.0pt; mso-list: l0 level1 lfo1; tab-stops: list 72.0pt;\"><!--[if !supportLists]--><span style=\"font-family: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol; mso-ansi-language: SV;\" lang=\"SV\">&middot;<span style=\"font-size: 7pt; font-family: \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang=\"SV\">Memberikan fasilitas melihat dokumen</span></p>\n<p class=\"IsiLaporan\" style=\"margin-left: 72.0pt; text-indent: -18.0pt; mso-list: l0 level1 lfo1; tab-stops: list 72.0pt;\"><!--[if !supportLists]--><span style=\"font-family: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol; mso-ansi-language: SV;\" lang=\"SV\">&middot;<span style=\"font-size: 7pt; font-family: \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang=\"SV\">Memberikan fasilitas pelaporan dokumen sesuai kebutuhan</span></p>\n<p>&nbsp;</p>\n<p class=\"IsiLaporan\" style=\"margin-left: 72.0pt; text-indent: -18.0pt; mso-list: l0 level1 lfo1; tab-stops: list 72.0pt;\"><!--[if !supportLists]--><span style=\"font-family: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol; mso-ansi-language: SV;\" lang=\"SV\">&middot;<span style=\"font-size: 7pt; font-family: \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang=\"SV\">Memberikan fasilitas ekspor data dokumen</span></p>', '<p style=\"margin: 0.4em 0px 0.8em; padding: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 11.818181991577148px; line-height: 17.27272605895996px; text-align: justify;\">Direktorat Jenderal Energi Baru, Terbarukan, dan Konservasi Energi berada di bawah dan bertanggung jawab kepada Menteri Energi dan Sumber Daya Mineral. Direktorat Jenderal Energi Baru, Terbarukan, dan Konservasi Energi dipimpin oleh Direktur Jenderal.</p>\n<p style=\"text-align: justify;\"><span style=\"font-family: Arial, Helvetica, sans-serif; font-size: 11.818181991577148px; line-height: 17.27272605895996px;\">Direktorat Jenderal Energi Baru, Terbarukan, dan Konservasi Energi terdiri atas:</span></p>\n<ol style=\"font-family: Arial, Helvetica, sans-serif; font-size: 11.818181991577148px; line-height: 17.27272605895996px; text-align: justify;\">\n<li style=\"padding-bottom: 5px;\">Sekretariat Direktorat Jenderal Energi Baru, Terbarukan, dan Konsewasi Energi;</li>\n<li style=\"padding-bottom: 5px;\">Direktorat Panas Bumi;</li>\n<li style=\"padding-bottom: 5px;\">Direktorat Bioenergi;</li>\n<li style=\"padding-bottom: 5px;\">Direktorat Aneka Energi Baru dan Energi Terbarukan; dan</li>\n<li style=\"padding-bottom: 5px;\">Direktorat Konsewasi Energi.</li>\n</ol>', 'Selamat Datang', '<p style=\"text-align: left;\"><strong><br /><br /></strong></p>\n<h2 style=\"font-size: 23px; margin: 0px 0px 10px; background-image: url(\'http://www.ebtke.esdm.go.id/templates/ja_seleni/img/bg_nav.png\'); padding: 5px 20px; color: white; font-family: ProximaNovaLtBold; font-weight: normal; border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px; line-height: 22px; border: medium none !important; background-position: 0px -4px; background-repeat: repeat no-repeat;\">Gedung Setjen KESDM</h2>\n<h3 style=\"margin: 0px 0px 10px; font-family: ProximaNovaRgRegular; border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px; font-size: 14px !important; background-image: none !important; background-attachment: scroll !important; padding: 0px !important; color: #333333 !important; font-weight: normal !important; border: medium none !important; background-position: 0px 0px !important; background-repeat: repeat repeat !important;\">Jl Pegangsaan Timur, No.1A, Jakarta Pusat, 10320</h3>', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mst_dokumen`
--

CREATE TABLE `mst_dokumen` (
  `id_dokumen` int(10) NOT NULL,
  `id_kategori` int(10) NOT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `deskripsi` text,
  `nama_file_asli` varchar(100) DEFAULT NULL,
  `nama_file_alias` varchar(100) DEFAULT NULL,
  `tipe_file` varchar(50) DEFAULT NULL,
  `tgl_publikasi` datetime DEFAULT NULL,
  `penulis` varchar(100) DEFAULT NULL,
  `pengunggah` int(10) DEFAULT NULL,
  `terbaca` int(10) DEFAULT NULL,
  `publik` smallint(1) DEFAULT NULL,
  `groupdok` varchar(200) DEFAULT NULL,
  `status` smallint(1) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `add_user` varchar(100) DEFAULT NULL,
  `modified_user` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_dokumen`
--

INSERT INTO `mst_dokumen` (`id_dokumen`, `id_kategori`, `judul`, `deskripsi`, `nama_file_asli`, `nama_file_alias`, `tipe_file`, `tgl_publikasi`, `penulis`, `pengunggah`, `terbaca`, `publik`, `groupdok`, `status`, `add_date`, `modified_date`, `add_user`, `modified_user`) VALUES
(2, 1, 'Testing Upload Dokumen1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquam viverra dui eu ullamcorper. Vestibulum id mi eros. Aenean non placerat erat. Suspendisse eu leo elit. Pellentesque elit velit, luctus vitae fermentum quis, cursus non ipsum. Suspendisse justo dolor, porta quis pharetra molestie, auctor quis metus. Vestibulum id ligula massa. Etiam rhoncus fringilla magna sit amet vulputate. Nullam quis est vitae est facilisis accumsan non vitae mi. Donec non enim at dolor iaculis ultrices. Pellentesque interdum vulputate egestas. ', 'pdfsample.pdf', '121126035218_pdfsample.pdf', 'pdf', '2012-11-26 03:52:18', 'John Doe', 33, 6, 1, '', 1, '2012-11-26 03:52:18', NULL, 'admin', NULL),
(3, 1, 'Testing Upload Dokumen2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquam viverra dui eu ullamcorper. Vestibulum id mi eros. Aenean non placerat erat. Suspendisse eu leo elit. Pellentesque elit velit, luctus vitae fermentum quis, cursus non ipsum. Suspendisse justo dolor, porta quis pharetra molestie, auctor quis metus. Vestibulum id ligula massa. Etiam rhoncus fringilla magna sit amet vulputate. Nullam quis est vitae est facilisis accumsan non vitae mi. Donec non enim at dolor iaculis ultrices. Pellentesque interdum vulputate egestas. ', 'pdfsample.pdf', '121126035239_pdfsample.pdf', 'pdf', '2012-12-02 19:42:14', 'John Doe', 33, 2, 0, '13,14,15,16,20', 1, '2012-11-26 03:52:39', '2012-12-02 19:42:14', 'admin', 'admin'),
(4, 1, 'Testing Upload Dokumen3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquam viverra dui eu ullamcorper. Vestibulum id mi eros. Aenean non placerat erat. Suspendisse eu leo elit. Pellentesque elit velit, luctus vitae fermentum quis, cursus non ipsum. Suspendisse justo dolor, porta quis pharetra molestie, auctor quis metus. Vestibulum id ligula massa. Etiam rhoncus fringilla magna sit amet vulputate. Nullam quis est vitae est facilisis accumsan non vitae mi. Donec non enim at dolor iaculis ultrices. Pellentesque interdum vulputate egestas. ', 'pdfsample.pdf', '121126035255_pdfsample.pdf', 'pdf', '2012-11-26 03:52:55', 'John Doe', 33, 6, 1, '', 1, '2012-11-26 03:52:55', NULL, 'admin', NULL),
(5, 1, 'Dokumen Percobaan Test', 'Semua Deskripsi Disini', 'samplepdf.pdf', '121128103626_samplepdf.pdf', 'pdf', '2012-12-02 19:41:44', 'Admin', 33, 2, 0, '13,14,15', 1, '2012-11-28 10:36:26', '2012-12-02 19:41:44', 'admin', 'admin'),
(10, 1, 'NKRI Dokumen Testing', '\r\nRepublik Indonesia disingkat RI atau Indonesia adalah negara di Asia Tenggara, yang dilintasi garis khatulistiwa dan berada di antara benua Asia dan Australia serta antara Samudra Pasifik dan Samudra Hindia. Indonesia adalah negara kepulauan terbesar di dunia yang terdiri dari 13.487 pulau,[5][6] oleh karena itu ia disebut juga sebagai Nusantara (\"pulau luar\", di samping Jawa yang dianggap pusat).[7] Dengan populasi sebesar 222 juta jiwa pada tahun 2006,[8] Indonesia adalah negara berpenduduk terbesar keempat di dunia dan negara yang berpenduduk Muslim terbesar di dunia, meskipun secara resmi bukanlah negara Islam. Bentuk pemerintahan Indonesia adalah republik, dengan Dewan Perwakilan Rakyat, Dewan Perwakilan Daerah dan Presiden yang dipilih langsung. Ibukota negara ialah Jakarta. Indonesia berbatasan darat dengan Malaysia di Pulau Kalimantan, dengan Papua Nugini di Pulau Papua dan dengan Timor Leste di Pulau Timor. Negara tetangga lainnya adalah Singapura, Filipina, Australia, dan wilayah persatuan Kepulauan Andaman dan Nikobar di India.\r\n\r\nSejarah Indonesia banyak dipengaruhi oleh bangsa lainnya. Kepulauan Indonesia menjadi wilayah perdagangan penting setidaknya sejak abad ke-7, yaitu ketika Kerajaan Sriwijaya di Palembang menjalin hubungan agama dan perdagangan dengan Tiongkok dan India. Kerajaan-kerajaan Hindu dan Buddha telah tumbuh pada awal abad Masehi, diikuti para pedagang yang membawa agama Islam, serta berbagai kekuatan Eropa yang saling bertempur untuk memonopoli perdagangan rempah-rempah Maluku semasa era penjelajahan samudra. Setelah berada di bawah penjajahan Belanda, Indonesia yang saat itu bernama Hindia-Belanda menyatakan kemerdekaannya di akhir Perang Dunia II. Selanjutnya Indonesia mendapat berbagai hambatan, ancaman dan tantangan dari bencana alam, korupsi, separatisme, proses demokratisasi dan periode perubahan ekonomi yang pesat.', 'indonesia.pdf', '121202195243_indonesia.pdf', 'pdf', '2012-12-02 19:52:43', 'wikipedia', 33, 1, 1, '', 1, '2012-12-02 19:52:43', NULL, 'admin', NULL),
(12, 1, 'Daerah Khusus DKI Jakarta', 'Daerah Khusus Ibukota Jakarta (DKI Jakarta, Jakarta Raya) adalah ibu kota negara Indonesia. Jakarta merupakan satu-satunya kota di Indonesia yang memiliki status setingkat provinsi. Jakarta terletak di bagian barat laut Pulau Jawa. Dahulu pernah dikenal dengan nama Sunda Kelapa (sebelum 1527), Jayakarta (1527-1619), Batavia/Batauia, atau Jaccatra (1619-1942), dan Djakarta (1942-1972).\r\n\r\nJakarta memiliki luas sekitar 661,52 kmÂ² (lautan: 6.977,5 kmÂ²), dengan penduduk berjumlah 9.607.787 jiwa (2010).[2] Wilayah metropolitan Jakarta (Jabotabek) yang berpenduduk sekitar 28 juta jiwa,[5] merupakan metropolitan terbesar di Indonesia atau urutan keenam dunia.', 'Jakarta.pdf', '121202195430_Jakarta.pdf', 'pdf', '2012-12-02 19:54:30', 'wikipedia', 33, 12, 1, '', 1, '2012-12-02 19:54:30', NULL, 'admin', NULL),
(13, 1, 'Coba Operator saja', 'Entry', 'samplepdf.pdf', '121203031420_samplepdf.pdf', 'pdf', '2012-12-03 03:19:34', 'Operator', 54, 0, 0, '14', 1, '2012-12-03 03:14:20', '2012-12-03 03:19:34', 'operator', 'operator'),
(14, 1, 'Coba Juga Operator', 'Coba', 'Jakarta.pdf', '121203031504_Jakarta.pdf', 'pdf', '2012-12-03 03:15:04', 'Operator', 54, 1, 1, '', 1, '2012-12-03 03:15:04', NULL, 'operator', NULL),
(15, 12, 'alifbata', 'uwu', 'Analisis  Numerik2-Algoritma Persamaan Non Linier-v0.1.pptx', '200729124851_Analisis  Numerik2-Algoritma Persamaan Non Linier-v0.1.pptx', '1', '2020-07-29 12:48:51', 'uwu', 33, 0, 1, '', 1, '2020-07-29 12:48:51', NULL, 'admin', NULL),
(16, 11, 'cek', '123', 'Analisis  Numerik2-Algoritma Persamaan Non Linier-v0.1.pptx', '200729125513_Analisis  Numerik2-Algoritma Persamaan Non Linier-v0.1.pptx', '1', '2020-07-29 12:55:13', 'cek', 58, 0, 0, '32', 1, '2020-07-29 12:55:13', NULL, 'pandu', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mst_dokumenkat`
--

CREATE TABLE `mst_dokumenkat` (
  `id_kategori` int(10) NOT NULL,
  `kode_kategori` varchar(50) NOT NULL,
  `nama_kategori` varchar(200) DEFAULT NULL,
  `id_group` int(11) DEFAULT NULL,
  `keterangan` text,
  `add_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `add_user` varchar(100) DEFAULT NULL,
  `modified_user` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_dokumenkat`
--

INSERT INTO `mst_dokumenkat` (`id_kategori`, `kode_kategori`, `nama_kategori`, `id_group`, `keterangan`, `add_date`, `modified_date`, `add_user`, `modified_user`) VALUES
(12, '03', 'Laboratorium', 33, '', NULL, NULL, NULL, NULL),
(11, '02', 'RKA/RKT', 33, '', NULL, NULL, NULL, NULL),
(10, '01', 'Kurikulum', 33, '', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mst_dokumenlog`
--

CREATE TABLE `mst_dokumenlog` (
  `id_log` int(10) NOT NULL,
  `id_dokumen` int(10) NOT NULL,
  `id_user` int(10) NOT NULL DEFAULT '0',
  `username` varchar(100) DEFAULT NULL,
  `ip_address` varchar(100) DEFAULT NULL,
  `tgl_baca` datetime DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `add_user` varchar(100) DEFAULT NULL,
  `modified_user` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_dokumenlog`
--

INSERT INTO `mst_dokumenlog` (`id_log`, `id_dokumen`, `id_user`, `username`, `ip_address`, `tgl_baca`, `add_date`, `modified_date`, `add_user`, `modified_user`) VALUES
(1, 2, 33, 'Administrator', '127.0.0.1', '2012-12-01 12:52:06', NULL, NULL, NULL, NULL),
(2, 2, 33, 'Administrator', '127.0.0.1', '2012-12-01 12:52:30', NULL, NULL, NULL, NULL),
(3, 2, 33, 'Administrator', '', '2012-12-01 12:55:10', NULL, NULL, NULL, NULL),
(4, 4, 33, 'Administrator', '127.0.0.1', '2012-12-01 13:12:13', NULL, NULL, NULL, NULL),
(5, 4, 33, 'Administrator', '127.0.0.1', '2012-12-01 13:12:37', NULL, NULL, NULL, NULL),
(6, 6, 33, 'Administrator', '127.0.0.1', '2012-12-01 13:13:53', NULL, NULL, NULL, NULL),
(7, 6, 33, 'Administrator', '127.0.0.1', '2012-12-01 13:17:23', NULL, NULL, NULL, NULL),
(8, 6, 33, 'Administrator', '127.0.0.1', '2012-12-01 13:17:38', NULL, NULL, NULL, NULL),
(9, 6, 33, 'Administrator', '127.0.0.1', '2012-12-01 13:17:43', NULL, NULL, NULL, NULL),
(10, 6, 33, 'Administrator', '127.0.0.1', '2012-12-01 13:17:52', NULL, NULL, NULL, NULL),
(11, 6, 33, 'Administrator', '127.0.0.1', '2012-12-01 13:18:13', NULL, NULL, NULL, NULL),
(12, 2, 33, 'Administrator', '127.0.0.1', '2012-12-01 13:18:21', NULL, NULL, NULL, NULL),
(13, 4, 33, 'Administrator', '127.0.0.1', '2012-12-01 13:24:42', NULL, NULL, NULL, NULL),
(14, 4, 33, 'Administrator', '127.0.0.1', '2012-12-02 00:07:54', NULL, NULL, NULL, NULL),
(15, 4, 33, 'Administrator', '127.0.0.1', '2012-12-02 00:08:13', NULL, NULL, NULL, NULL),
(16, 6, 0, 'Publik', '127.0.0.1', '2012-12-02 15:42:11', NULL, NULL, NULL, NULL),
(17, 12, 33, 'Administrator', '127.0.0.1', '2012-12-02 19:54:56', NULL, NULL, NULL, NULL),
(18, 12, 33, 'Administrator', '127.0.0.1', '2012-12-02 19:57:18', NULL, NULL, NULL, NULL),
(19, 12, 33, 'Administrator', '127.0.0.1', '2012-12-02 19:57:52', NULL, NULL, NULL, NULL),
(20, 12, 33, 'Administrator', '127.0.0.1', '2012-12-02 19:57:58', NULL, NULL, NULL, NULL),
(21, 12, 33, 'Administrator', '127.0.0.1', '2012-12-02 19:58:36', NULL, NULL, NULL, NULL),
(22, 4, 33, 'Administrator', '127.0.0.1', '2012-12-02 23:09:01', NULL, NULL, NULL, NULL),
(23, 2, 33, 'Administrator', '127.0.0.1', '2012-12-03 01:28:50', NULL, NULL, NULL, NULL),
(24, 5, 33, 'Administrator', '127.0.0.1', '2012-12-03 01:28:57', NULL, NULL, NULL, NULL),
(25, 12, 33, 'Administrator', '127.0.0.1', '2012-12-03 01:29:36', NULL, NULL, NULL, NULL),
(26, 2, 33, 'Administrator', '127.0.0.1', '2012-12-03 01:29:51', NULL, NULL, NULL, NULL),
(27, 11, 33, 'Administrator', '127.0.0.1', '2012-12-03 01:30:52', NULL, NULL, NULL, NULL),
(28, 2, 33, 'Administrator', '127.0.0.1', '2012-12-03 01:33:21', NULL, NULL, NULL, NULL),
(29, 12, 0, 'Publik', '127.0.0.1', '2012-12-03 01:43:06', NULL, NULL, NULL, NULL),
(30, 14, 54, 'operator', '127.0.0.1', '2012-12-03 03:20:54', NULL, NULL, NULL, NULL),
(31, 12, 55, 'user saja', '127.0.0.1', '2012-12-03 03:49:12', NULL, NULL, NULL, NULL),
(32, 20, 33, 'Administrator', '127.0.0.1', '2012-12-03 04:27:38', NULL, NULL, NULL, NULL),
(33, 10, 0, 'Publik', '127.0.0.1', '2012-12-16 13:02:06', NULL, NULL, NULL, NULL),
(34, 12, 0, 'Publik', '127.0.0.1', '2012-12-27 00:49:34', NULL, NULL, NULL, NULL),
(35, 12, 0, 'Publik', '127.0.0.1', '2012-12-29 09:39:34', NULL, NULL, NULL, NULL),
(36, 5, 33, 'Administrator', '127.0.0.1', '2013-10-20 14:20:02', NULL, NULL, NULL, NULL),
(37, 12, 33, 'Administrator', '203.189.88.200', '2013-10-24 21:31:18', NULL, NULL, NULL, NULL),
(38, 12, 33, 'Administrator', '110.138.44.63', '2013-10-31 02:33:33', NULL, NULL, NULL, NULL),
(39, 3, 33, 'Administrator', '140.0.202.126', '2019-11-06 12:28:01', NULL, NULL, NULL, NULL),
(40, 3, 33, 'Administrator', '140.0.202.126', '2019-11-06 12:32:48', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mst_feedback`
--

CREATE TABLE `mst_feedback` (
  `id_feedback` int(10) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `hp` varchar(30) DEFAULT NULL,
  `feedback` text,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mst_group`
--

CREATE TABLE `mst_group` (
  `id_group` int(10) NOT NULL,
  `header_group` int(10) NOT NULL,
  `kode_group` varchar(20) NOT NULL,
  `nama_group` varchar(100) DEFAULT NULL,
  `parent` varchar(100) DEFAULT NULL,
  `level` int(11) NOT NULL,
  `keterangan` text,
  `dpp` int(1) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `add_user` varchar(100) DEFAULT NULL,
  `modified_user` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_group`
--

INSERT INTO `mst_group` (`id_group`, `header_group`, `kode_group`, `nama_group`, `parent`, `level`, `keterangan`, `dpp`, `add_date`, `modified_date`, `add_user`, `modified_user`) VALUES
(47, 0, '01 - 1 - 1', 'Lab ', 'Prodi Keperawatan', 3, '', NULL, NULL, NULL, NULL, NULL),
(45, 0, '01', 'Bagian 1', 'Paling Atas', 1, '', NULL, NULL, NULL, NULL, NULL),
(46, 0, '01 - 1 ', 'Prodi Keperawatan', 'Bagian 1', 2, '', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mst_jabatan`
--

CREATE TABLE `mst_jabatan` (
  `id_jabatan` int(10) NOT NULL,
  `kode_jabatan` varchar(20) NOT NULL,
  `inisial` varchar(10) DEFAULT NULL,
  `nama_jabatan` varchar(300) DEFAULT NULL,
  `parent_jabatan` int(10) DEFAULT NULL,
  `lev` int(10) DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `add_user` varchar(100) DEFAULT NULL,
  `modified_user` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_jabatan`
--

INSERT INTO `mst_jabatan` (`id_jabatan`, `kode_jabatan`, `inisial`, `nama_jabatan`, `parent_jabatan`, `lev`, `keterangan`, `add_date`, `modified_date`, `add_user`, `modified_user`) VALUES
(2, 'DIR', 'DIR', 'Direktur', 0, 1, '', '2013-07-18 07:44:10', NULL, 'admin', NULL),
(4, 'KA', 'KA', 'Kabag', 2, 2, 'Kabag DPP', '2013-10-15 15:50:04', NULL, 'admin', NULL),
(5, 'KAS', 'KAS', 'Kasubag', 4, 3, '', '2013-10-15 15:50:27', NULL, 'admin', NULL),
(6, 'STAFF', 'STAFF', 'Staff', 5, 4, '', '2013-10-15 16:35:01', NULL, 'admin', NULL),
(7, 'dirk', 'DJE', 'Dirjen', 2, 0, '', '2013-10-30 23:28:13', NULL, 'admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mst_jenis`
--

CREATE TABLE `mst_jenis` (
  `id_jenissurat` int(10) NOT NULL,
  `kode_jenis` varchar(20) NOT NULL,
  `nama_jenis` varchar(100) DEFAULT NULL,
  `keterangan` varchar(300) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `add_user` varchar(100) DEFAULT NULL,
  `modified_user` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_jenis`
--

INSERT INTO `mst_jenis` (`id_jenissurat`, `kode_jenis`, `nama_jenis`, `keterangan`, `add_date`, `modified_date`, `add_user`, `modified_user`) VALUES
(1, '001', 'Surat Dinas', 'Surat Dinas', NULL, '2013-10-24 20:01:49', NULL, 'admin'),
(2, '002', 'Surat Tugas', 'Surat Tugas', NULL, '2013-10-24 20:02:06', NULL, 'admin'),
(3, '003', 'Memorandum', 'Memorandum Saja', NULL, '2013-10-24 20:02:20', NULL, 'admin'),
(4, '004', 'Nota Dinas', '', '2013-10-30 22:37:23', NULL, 'admin', NULL),
(5, '005', 'nd', '', '2013-10-30 23:16:36', NULL, 'admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mst_jenispekerjaan`
--

CREATE TABLE `mst_jenispekerjaan` (
  `id_jenispekerjaan` int(10) NOT NULL,
  `kode_jenispekerjaan` varchar(100) NOT NULL,
  `nama_jenispekerjaan` varchar(225) DEFAULT NULL,
  `keterangan` text,
  `add_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `add_user` varchar(100) DEFAULT NULL,
  `modified_user` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_jenispekerjaan`
--

INSERT INTO `mst_jenispekerjaan` (`id_jenispekerjaan`, `kode_jenispekerjaan`, `nama_jenispekerjaan`, `keterangan`, `add_date`, `modified_date`, `add_user`, `modified_user`) VALUES
(4, 'PE001', 'Koordinasi dengan Tim Kerja untuk Menyusun Rencana Kerja Detail', '\r\n', '2013-09-06 01:35:35', '2013-09-06 01:36:05', 'admin', 'admin'),
(5, 'PE002', 'Penugasan Pengurusan Perijinan Aktivitas ke Dinas Terkait', 'Penugasan Pengurusan Perijinan Aktivitas ke Dinas Terkait\r\n', '2013-09-06 01:35:58', NULL, 'admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mst_jenissurvey`
--

CREATE TABLE `mst_jenissurvey` (
  `id_jenissurvey` int(10) NOT NULL,
  `kode_jenissurvey` varchar(100) NOT NULL,
  `nama_jenissurvey` varchar(225) DEFAULT NULL,
  `keterangan` text,
  `add_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `add_user` varchar(100) DEFAULT NULL,
  `modified_user` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_jenissurvey`
--

INSERT INTO `mst_jenissurvey` (`id_jenissurvey`, `kode_jenissurvey`, `nama_jenissurvey`, `keterangan`, `add_date`, `modified_date`, `add_user`, `modified_user`) VALUES
(1, 'SRV001', 'percobaan', 'percobaan', NULL, '2013-09-06 01:28:42', NULL, 'admin'),
(2, 'SRV0002', 'Pembelian peta topografi, citra dan foto', 'Pembelian peta topografi, citra dan foto\r\n', NULL, NULL, NULL, NULL),
(4, 'PE001', 'Koordinasi dengan Tim Kerja untuk Menyusun Rencana Kerja Detail', 'Koordinasi dengan Tim Kerja untuk Menyusun Rencana Kerja Detail\r\n', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mst_komponenbiaya`
--

CREATE TABLE `mst_komponenbiaya` (
  `id_komponen` int(10) NOT NULL,
  `kode_komponen` varchar(100) NOT NULL,
  `nama_komponen` varchar(100) DEFAULT NULL,
  `keterangan` text,
  `add_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `add_user` varchar(100) DEFAULT NULL,
  `modified_user` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_komponenbiaya`
--

INSERT INTO `mst_komponenbiaya` (`id_komponen`, `kode_komponen`, `nama_komponen`, `keterangan`, `add_date`, `modified_date`, `add_user`, `modified_user`) VALUES
(3, 'KLP01', 'Off-Site Allowance', 'Off-Site Allowance', '2013-10-09 00:24:08', NULL, 'admin', NULL),
(4, 'KLP02', 'Report & Presentation', 'Report & Presentation', '2013-10-09 00:24:19', NULL, 'admin', NULL),
(5, 'KLP03', 'Materials', 'Materials', '2013-10-09 00:24:32', NULL, 'admin', NULL),
(6, 'KLP04', 'On-Site Allowance', 'On-Site Allowance', '2013-10-09 00:24:53', NULL, 'admin', NULL),
(7, 'KLP05', 'Lab & Analysis', 'Lab & Analysis', '2013-10-09 00:25:05', NULL, 'admin', NULL),
(8, 'KLP06', 'Transportation & Accomodation', 'Transportation & Accomodation', '2013-10-09 00:25:20', NULL, 'admin', NULL),
(9, 'KLP07', 'Equipment', 'Equipment', '2013-10-09 00:25:33', NULL, 'admin', NULL),
(10, 'KLP08', 'Personel', 'Personel', '2013-10-09 00:25:50', NULL, 'admin', NULL),
(11, 'KLP09', 'Geomagnetic Survey', 'Geomagnetic Survey', '2013-10-09 00:26:06', NULL, 'admin', NULL),
(12, 'KLP10', 'Gaya Berat Survey', 'Gaya Berat Survey', '2013-10-09 00:26:18', '2013-10-09 00:26:30', 'admin', 'admin'),
(13, 'KLP011', 'MT Survey', 'MT Survey', '2013-10-09 00:26:45', NULL, 'admin', NULL),
(14, 'KLP012', 'TDEM Survey', 'TDEM Survey', '2013-10-09 00:26:54', NULL, 'admin', NULL),
(15, 'KLP012', 'GPS Survey', 'GPS Survey', '2013-10-09 00:27:09', NULL, 'admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mst_kota`
--

CREATE TABLE `mst_kota` (
  `kota_id` int(10) NOT NULL,
  `kota_kabupaten` varchar(100) NOT NULL,
  `propinsi_id` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_kota`
--

INSERT INTO `mst_kota` (`kota_id`, `kota_kabupaten`, `propinsi_id`) VALUES
(1, 'Kabupaten Aceh Barat', 1),
(2, 'Kabupaten Aceh Barat Daya', 1),
(3, 'Kabupaten Aceh Besar', 1),
(4, 'Kabupaten Aceh Jaya', 1),
(5, 'Kabupaten Aceh Selatan', 1),
(6, 'Kabupaten Aceh Singkil', 1),
(7, 'Kabupaten Aceh Tamiang', 1),
(8, 'Kabupaten Aceh Tengah', 1),
(9, 'Kabupaten Aceh Tenggara', 1),
(10, 'Kabupaten Aceh Timur', 1),
(11, 'Kabupaten Aceh Utara', 1),
(12, 'Kabupaten Bener Meriah', 1),
(13, 'Kabupaten Bireuen', 1),
(14, 'Kabupaten Gayo Lues', 1),
(15, 'Kabupaten Nagan Raya', 1),
(16, 'Kabupaten Pidie', 1),
(17, 'Kabupaten Pidie Jaya', 1),
(18, 'Kabupaten Simeulue', 1),
(19, 'Kota Banda Aceh', 1),
(20, 'Kota Langsa', 1),
(21, 'Kota Lhokseumawe', 1),
(22, 'Kota Sabang', 1),
(23, 'Kota Subulussalam', 1),
(24, 'Kabupaten Asahan', 2),
(25, 'Kabupaten Batu Bara', 2),
(26, 'Kabupaten Dairi', 2),
(27, 'Kabupaten Deli Serdang', 2),
(28, 'Kabupaten Humbang Hasundutan', 2),
(29, 'Kabupaten Karo', 2),
(30, 'Kabupaten Labuhanbatu', 2),
(31, 'Kabupaten Labuhanbatu Selatan', 2),
(32, 'Kabupaten Labuhanbatu Utara', 2),
(33, 'Kabupaten Langkat', 2),
(34, 'Kabupaten Mandailing Natal', 2),
(35, 'Kabupaten Nias', 2),
(36, 'Kabupaten Nias Barat', 2),
(37, 'Kabupaten Nias Selatan', 2),
(38, 'Kabupaten Nias Utara', 2),
(39, 'Kabupaten Padang Lawas', 2),
(40, 'Kabupaten Padang Lawas Utara', 2),
(41, 'Kabupaten Pakpak Bharat', 2),
(42, 'Kabupaten Samosir', 2),
(43, 'Kabupaten Serdang Bedagai', 2),
(44, 'Kabupaten Simalungun', 2),
(45, 'Kabupaten Tapanuli Selatan', 2),
(46, 'Kabupaten Tapanuli Tengah', 2),
(47, 'Kabupaten Tapanuli Utara', 2),
(48, 'Kabupaten Toba Samosir', 2),
(49, 'Kota Binjai', 2),
(50, 'Kota Gunung Sitoli', 2),
(51, 'Kota Medan', 2),
(52, 'Kota Padang Sidempuan', 2),
(53, 'Kota Pematangsiantar', 2),
(54, 'Kota Sibolga', 2),
(55, 'Kota Tanjung Balai', 2),
(56, 'Kota Tebing Tinggi', 2),
(57, 'Kabupaten Bengkulu Selatan', 3),
(58, 'Kabupaten Bengkulu Tengah', 3),
(59, 'Kabupaten Bengkulu Utara', 3),
(60, 'Kabupaten Benteng', 3),
(61, 'Kabupaten Kaur', 3),
(62, 'Kabupaten Kepahiang', 3),
(63, 'Kabupaten Lebong', 3),
(64, 'Kabupaten Mukomuko', 3),
(65, 'Kabupaten Rejang Lebong', 3),
(66, 'Kabupaten Seluma', 3),
(67, 'Kota Bengkulu', 3),
(68, 'Kabupaten Batang Hari', 4),
(69, 'Kabupaten Bungo', 4),
(70, 'Kabupaten Kerinci', 4),
(71, 'Kabupaten Merangin', 4),
(72, 'Kabupaten Muaro Jambi', 4),
(73, 'Kabupaten Sarolangun', 4),
(74, 'Kabupaten Tanjung Jabung Barat', 4),
(75, 'Kabupaten Tanjung Jabung Timur', 4),
(76, 'Kabupaten Tebo', 4),
(77, 'Kota Jambi', 4),
(78, 'Kota Sungai Penuh', 4),
(79, 'Kabupaten Bengkalis', 5),
(80, 'Kabupaten Indragiri Hilir', 5),
(81, 'Kabupaten Indragiri Hulu', 5),
(82, 'Kabupaten Kampar', 5),
(83, 'Kabupaten Kuantan Singingi', 5),
(84, 'Kabupaten Pelalawan', 5),
(85, 'Kabupaten Rokan Hilir', 5),
(86, 'Kabupaten Rokan Hulu', 5),
(87, 'Kabupaten Siak', 5),
(88, 'Kota Pekanbaru', 5),
(89, 'Kota Dumai', 5),
(90, 'Kabupaten Kepulauan Meranti', 5),
(91, 'Kabupaten Agam', 6),
(92, 'Kabupaten Dharmasraya', 6),
(93, 'Kabupaten Kepulauan Mentawai', 6),
(94, 'Kabupaten Lima Puluh Kota', 6),
(95, 'Kabupaten Padang Pariaman', 6),
(96, 'Kabupaten Pasaman', 6),
(97, 'Kabupaten Pasaman Barat', 6),
(98, 'Kabupaten Pesisir Selatan', 6),
(99, 'Kabupaten Sijunjung', 6),
(100, 'Kabupaten Solok', 6),
(101, 'Kabupaten Solok Selatan', 6),
(102, 'Kabupaten Tanah Datar', 6),
(103, 'Kota Bukittinggi', 6),
(104, 'Kota Padang', 6),
(105, 'Kota Padangpanjang', 6),
(106, 'Kota Pariaman', 6),
(107, 'Kota Payakumbuh', 6),
(108, 'Kota Sawahlunto', 6),
(109, 'Kota Solok', 6),
(110, 'Kabupaten Banyuasin', 7),
(111, 'Kabupaten Empat Lawang', 7),
(112, 'Kabupaten Lahat', 7),
(113, 'Kabupaten Muara Enim', 7),
(114, 'Kabupaten Musi Banyuasin', 7),
(115, 'Kabupaten Musi Rawas', 7),
(116, 'Kabupaten Ogan Ilir', 7),
(117, 'Kabupaten Ogan Komering Ilir', 7),
(118, 'Kabupaten Ogan Komering Ulu', 7),
(119, 'Kabupaten Ogan Komering Ulu Selatan', 7),
(120, 'Kabupaten Ogan Komering Ulu Timur', 7),
(121, 'Kota Lubuklinggau', 7),
(122, 'Kota Pagar Alam', 7),
(123, 'Kota Palembang', 7),
(124, 'Kota Prabumulih', 7),
(125, 'Kabupaten Lampung Barat', 8),
(126, 'Kabupaten Lampung Selatan', 8),
(127, 'Kabupaten Lampung Tengah', 8),
(128, 'Kabupaten Lampung Timur', 8),
(129, 'Kabupaten Lampung Utara', 8),
(130, 'Kabupaten Mesuji', 8),
(131, 'Kabupaten Pesawaran', 8),
(132, 'Kabupaten Pringsewu', 8),
(133, 'Kabupaten Tanggamus', 8),
(134, 'Kabupaten Tulang Bawang', 8),
(135, 'Kabupaten Tulang Bawang Barat', 8),
(136, 'Kabupaten Way Kanan', 8),
(137, 'Kota Bandar Lampung', 8),
(138, 'Kota Metro', 8),
(139, 'Kabupaten Bangka', 9),
(140, 'Kabupaten Bangka Barat', 9),
(141, 'Kabupaten Bangka Selatan', 9),
(142, 'Kabupaten Bangka Tengah', 9),
(143, 'Kabupaten Belitung', 9),
(144, 'Kabupaten Belitung Timur', 9),
(145, 'Kota Pangkal Pinang', 9),
(146, 'Kabupaten Bintan', 10),
(147, 'Kabupaten Karimun', 10),
(148, 'Kabupaten Kepulauan Anambas', 10),
(149, 'Kabupaten Lingga', 10),
(150, 'Kabupaten Natuna', 10),
(151, 'Kota Batam', 10),
(152, 'Kota Tanjung Pinang', 10),
(153, 'Kabupaten Lebak', 11),
(154, 'Kabupaten Pandeglang', 11),
(155, 'Kabupaten Serang', 11),
(156, 'Kabupaten Tangerang', 11),
(157, 'Kota Cilegon', 11),
(158, 'Kota Serang', 11),
(159, 'Kota Tangerang', 11),
(160, 'Kota Tangerang Selatan', 11),
(161, 'Kabupaten Bandung', 12),
(162, 'Kabupaten Bandung Barat', 12),
(163, 'Kabupaten Bekasi', 12),
(164, 'Kabupaten Bogor', 12),
(165, 'Kabupaten Ciamis', 12),
(166, 'Kabupaten Cianjur', 12),
(167, 'Kabupaten Cirebon', 12),
(168, 'Kabupaten Garut', 12),
(169, 'Kabupaten Indramayu', 12),
(170, 'Kabupaten Karawang', 12),
(171, 'Kabupaten Kuningan', 12),
(172, 'Kabupaten Majalengka', 12),
(173, 'Kabupaten Purwakarta', 12),
(174, 'Kabupaten Subang', 12),
(175, 'Kabupaten Sukabumi', 12),
(176, 'Kabupaten Sumedang', 12),
(177, 'Kabupaten Tasikmalaya', 12),
(178, 'Kota Bandung', 12),
(179, 'Kota Banjar', 12),
(180, 'Kota Bekasi', 12),
(181, 'Kota Bogor', 12),
(182, 'Kota Cimahi', 12),
(183, 'Kota Cirebon', 12),
(184, 'Kota Depok', 12),
(185, 'Kota Sukabumi', 12),
(186, 'Kota Tasikmalaya', 12),
(187, 'Kabupaten Administrasi Kepulauan Seribu', 13),
(188, 'Kota Administrasi Jakarta Barat', 13),
(189, 'Kota Administrasi Jakarta Pusat', 13),
(190, 'Kota Administrasi Jakarta Selatan', 13),
(191, 'Kota Administrasi Jakarta Timur', 13),
(192, 'Kota Administrasi Jakarta Utara', 13),
(193, 'Kabupaten Banjarnegara', 14),
(194, 'Kabupaten Banyumas', 14),
(195, 'Kabupaten Batang', 14),
(196, 'Kabupaten Blora', 14),
(197, 'Kabupaten Boyolali', 14),
(198, 'Kabupaten Brebes', 14),
(199, 'Kabupaten Cilacap', 14),
(200, 'Kabupaten Demak', 14),
(201, 'Kabupaten Grobogan', 14),
(202, 'Kabupaten Jepara', 14),
(203, 'Kabupaten Karanganyar', 14),
(204, 'Kabupaten Kebumen', 14),
(205, 'Kabupaten Kendal', 14),
(206, 'Kabupaten Klaten', 14),
(207, 'Kabupaten Kudus', 14),
(208, 'Kabupaten Magelang', 14),
(209, 'Kabupaten Pati', 14),
(210, 'Kabupaten Pekalongan', 14),
(211, 'Kabupaten Pemalang', 14),
(212, 'Kabupaten Purbalingga', 14),
(213, 'Kabupaten Purworejo', 14),
(214, 'Kabupaten Rembang', 14),
(215, 'Kabupaten Semarang', 14),
(216, 'Kabupaten Sragen', 14),
(217, 'Kabupaten Sukoharjo', 14),
(218, 'Kabupaten Tegal', 14),
(219, 'Kabupaten Temanggung', 14),
(220, 'Kabupaten Wonogiri', 14),
(221, 'Kabupaten Wonosobo', 14),
(222, 'Kota Magelang', 14),
(223, 'Kota Pekalongan', 14),
(224, 'Kota Salatiga', 14),
(225, 'Kota Semarang', 14),
(226, 'Kota Surakarta', 14),
(227, 'Kota Tegal', 14),
(228, 'Kabupaten Bangkalan', 15),
(229, 'Kabupaten Banyuwangi', 15),
(230, 'Kabupaten Blitar', 15),
(231, 'Kabupaten Bojonegoro', 15),
(232, 'Kabupaten Bondowoso', 15),
(233, 'Kabupaten Gresik', 15),
(234, 'Kabupaten Jember', 15),
(235, 'Kabupaten Jombang', 15),
(236, 'Kabupaten Kediri', 15),
(237, 'Kabupaten Lamongan', 15),
(238, 'Kabupaten Lumajang', 15),
(239, 'Kabupaten Madiun', 15),
(240, 'Kabupaten Magetan', 15),
(241, 'Kabupaten Malang', 15),
(242, 'Kabupaten Mojokerto', 15),
(243, 'Kabupaten Nganjuk', 15),
(244, 'Kabupaten Ngawi', 15),
(245, 'Kabupaten Pacitan', 15),
(246, 'Kabupaten Pamekasan', 15),
(247, 'Kabupaten Pasuruan', 15),
(248, 'Kabupaten Ponorogo', 15),
(249, 'Kabupaten Probolinggo', 15),
(250, 'Kabupaten Sampang', 15),
(251, 'Kabupaten Sidoarjo', 15),
(252, 'Kabupaten Situbondo', 15),
(253, 'Kabupaten Sumenep', 15),
(254, 'Kabupaten Trenggalek', 15),
(255, 'Kabupaten Tuban', 15),
(256, 'Kabupaten Tulungagung', 15),
(257, 'Kota Batu', 15),
(258, 'Kota Blitar', 15),
(259, 'Kota Kediri', 15),
(260, 'Kota Madiun', 15),
(261, 'Kota Malang', 15),
(262, 'Kota Mojokerto', 15),
(263, 'Kota Pasuruan', 15),
(264, 'Kota Probolinggo', 15),
(265, 'Kota Surabaya', 15),
(266, 'Kabupaten Bantul', 16),
(267, 'Kabupaten Gunung Kidul', 16),
(268, 'Kabupaten Kulon Progo', 16),
(269, 'Kabupaten Sleman', 16),
(270, 'Kota Yogyakarta', 16),
(271, 'Kabupaten Badung', 17),
(272, 'Kabupaten Bangli', 17),
(273, 'Kabupaten Buleleng', 17),
(274, 'Kabupaten Gianyar', 17),
(275, 'Kabupaten Jembrana', 17),
(276, 'Kabupaten Karangasem', 17),
(277, 'Kabupaten Klungkung', 17),
(278, 'Kabupaten Tabanan', 17),
(279, 'Kota Denpasar', 17),
(280, 'Kabupaten Bima', 18),
(281, 'Kabupaten Dompu', 18),
(282, 'Kabupaten Lombok Barat', 18),
(283, 'Kabupaten Lombok Tengah', 18),
(284, 'Kabupaten Lombok Timur', 18),
(285, 'Kabupaten Lombok Utara', 18),
(286, 'Kabupaten Sumbawa', 18),
(287, 'Kabupaten Sumbawa Barat', 18),
(288, 'Kota Bima', 18),
(289, 'Kota Mataram', 18),
(290, 'Kabupaten Kupang', 19),
(291, 'Kabupaten Timor Tengah Selatan', 19),
(292, 'Kabupaten Timor Tengah Utara', 19),
(293, 'Kabupaten Belu', 19),
(294, 'Kabupaten Alor', 19),
(295, 'Kabupaten Flores Timur', 19),
(296, 'Kabupaten Sikka', 19),
(297, 'Kabupaten Ende', 19),
(298, 'Kabupaten Ngada', 19),
(299, 'Kabupaten Manggarai', 19),
(300, 'Kabupaten Sumba Timur', 19),
(301, 'Kabupaten Sumba Barat', 19),
(302, 'Kabupaten Lembata', 19),
(303, 'Kabupaten Rote Ndao', 19),
(304, 'Kabupaten Manggarai Barat', 19),
(305, 'Kabupaten Nagekeo', 19),
(306, 'Kabupaten Sumba Tengah', 19),
(307, 'Kabupaten Sumba Barat Daya', 19),
(308, 'Kabupaten Manggarai Timur', 19),
(309, 'Kabupaten Sabu Raijua', 19),
(310, 'Kota Kupang', 19),
(311, 'Kabupaten Bengkayang', 20),
(312, 'Kabupaten Kapuas Hulu', 20),
(313, 'Kabupaten Kayong Utara', 20),
(314, 'Kabupaten Ketapang', 20),
(315, 'Kabupaten Kubu Raya', 20),
(316, 'Kabupaten Landak', 20),
(317, 'Kabupaten Melawi', 20),
(318, 'Kabupaten Pontianak', 20),
(319, 'Kabupaten Sambas', 20),
(320, 'Kabupaten Sanggau', 20),
(321, 'Kabupaten Sekadau', 20),
(322, 'Kabupaten Sintang', 20),
(323, 'Kota Pontianak', 20),
(324, 'Kota Singkawang', 20),
(325, 'Kabupaten Balangan', 21),
(326, 'Kabupaten Banjar', 21),
(327, 'Kabupaten Barito Kuala', 21),
(328, 'Kabupaten Hulu Sungai Selatan', 21),
(329, 'Kabupaten Hulu Sungai Tengah', 21),
(330, 'Kabupaten Hulu Sungai Utara', 21),
(331, 'Kabupaten Kotabaru', 21),
(332, 'Kabupaten Tabalong', 21),
(333, 'Kabupaten Tanah Bumbu', 21),
(334, 'Kabupaten Tanah Laut', 21),
(335, 'Kabupaten Tapin', 21),
(336, 'Kota Banjarbaru', 21),
(337, 'Kota Banjarmasin', 21),
(338, 'Kabupaten Barito Selatan', 22),
(339, 'Kabupaten Barito Timur', 22),
(340, 'Kabupaten Barito Utara', 22),
(341, 'Kabupaten Gunung Mas', 22),
(342, 'Kabupaten Kapuas', 22),
(343, 'Kabupaten Katingan', 22),
(344, 'Kabupaten Kotawaringin Barat', 22),
(345, 'Kabupaten Kotawaringin Timur', 22),
(346, 'Kabupaten Lamandau', 22),
(347, 'Kabupaten Murung Raya', 22),
(348, 'Kabupaten Pulang Pisau', 22),
(349, 'Kabupaten Sukamara', 22),
(350, 'Kabupaten Seruyan', 22),
(351, 'Kota Palangka Raya', 22),
(352, 'Kabupaten Berau', 23),
(353, 'Kabupaten Bulungan', 23),
(354, 'Kabupaten Kutai Barat', 23),
(355, 'Kabupaten Kutai Kartanegara', 23),
(356, 'Kabupaten Kutai Timur', 23),
(357, 'Kabupaten Malinau', 23),
(358, 'Kabupaten Nunukan', 23),
(359, 'Kabupaten Paser', 23),
(360, 'Kabupaten Penajam Paser Utara', 23),
(361, 'Kabupaten Tana Tidung', 23),
(362, 'Kota Balikpapan', 23),
(363, 'Kota Bontang', 23),
(364, 'Kota Samarinda', 23),
(365, 'Kota Tarakan', 23),
(366, 'Kabupaten Boalemo', 24),
(367, 'Kabupaten Bone Bolango', 24),
(368, 'Kabupaten Gorontalo', 24),
(369, 'Kabupaten Gorontalo Utara', 24),
(370, 'Kabupaten Pohuwato', 24),
(371, 'Kota Gorontalo', 24),
(372, 'Kabupaten Bantaeng', 25),
(373, 'Kabupaten Barru', 25),
(374, 'Kabupaten Bone', 25),
(375, 'Kabupaten Bulukumba', 25),
(376, 'Kabupaten Enrekang', 25),
(377, 'Kabupaten Gowa', 25),
(378, 'Kabupaten Jeneponto', 25),
(379, 'Kabupaten Kepulauan Selayar', 25),
(380, 'Kabupaten Luwu', 25),
(381, 'Kabupaten Luwu Timur', 25),
(382, 'Kabupaten Luwu Utara', 25),
(383, 'Kabupaten Maros', 25),
(384, 'Kabupaten Pangkajene dan Kepulauan', 25),
(385, 'Kabupaten Pinrang', 25),
(386, 'Kabupaten Sidenreng Rappang', 25),
(387, 'Kabupaten Sinjai', 25),
(388, 'Kabupaten Soppeng', 25),
(389, 'Kabupaten Takalar', 25),
(390, 'Kabupaten Tana Toraja', 25),
(391, 'Kabupaten Toraja Utara', 25),
(392, 'Kabupaten Wajo', 25),
(393, 'Kota Makassar', 25),
(394, 'Kota Palopo', 25),
(395, 'Kota Parepare', 25),
(396, 'Kabupaten Bombana', 26),
(397, 'Kabupaten Buton', 26),
(398, 'Kabupaten Buton Utara', 26),
(399, 'Kabupaten Kolaka', 26),
(400, 'Kabupaten Kolaka Utara', 26),
(401, 'Kabupaten Konawe', 26),
(402, 'Kabupaten Konawe Selatan', 26),
(403, 'Kabupaten Konawe Utara', 26),
(404, 'Kabupaten Muna', 26),
(405, 'Kabupaten Wakatobi', 26),
(406, 'Kota Bau-Bau', 26),
(407, 'Kota Kendari', 26),
(408, 'Kabupaten Banggai', 27),
(409, 'Kabupaten Banggai Kepulauan', 27),
(410, 'Kabupaten Buol', 27),
(411, 'Kabupaten Donggala', 27),
(412, 'Kabupaten Morowali', 27),
(413, 'Kabupaten Parigi Moutong', 27),
(414, 'Kabupaten Poso', 27),
(415, 'Kabupaten Tojo Una-Una', 27),
(416, 'Kabupaten Toli-Toli', 27),
(417, 'Kabupaten Sigi', 27),
(418, 'Kota Palu', 27),
(419, 'Kabupaten Bolaang Mongondow', 28),
(420, 'Kabupaten Bolaang Mongondow Selatan', 28),
(421, 'Kabupaten Bolaang Mongondow Timur', 28),
(422, 'Kabupaten Bolaang Mongondow Utara', 28),
(423, 'Kabupaten Kepulauan Sangihe', 28),
(424, 'Kabupaten Kepulauan Siau Tagulandang Biaro', 28),
(425, 'Kabupaten Kepulauan Talaud', 28),
(426, 'Kabupaten Minahasa', 28),
(427, 'Kabupaten Minahasa Selatan', 28),
(428, 'Kabupaten Minahasa Tenggara', 28),
(429, 'Kabupaten Minahasa Utara', 28),
(430, 'Kota Bitung', 28),
(431, 'Kota Kotamobagu', 28),
(432, 'Kota Manado', 28),
(433, 'Kota Tomohon', 28),
(434, 'Kabupaten Majene', 29),
(435, 'Kabupaten Mamasa', 29),
(436, 'Kabupaten Mamuju', 29),
(437, 'Kabupaten Mamuju Utara', 29),
(438, 'Kabupaten Polewali Mandar', 29),
(439, 'Kabupaten Buru', 30),
(440, 'Kabupaten Buru Selatan', 30),
(441, 'Kabupaten Kepulauan Aru', 30),
(442, 'Kabupaten Maluku Barat Daya', 30),
(443, 'Kabupaten Maluku Tengah', 30),
(444, 'Kabupaten Maluku Tenggara', 30),
(445, 'Kabupaten Maluku Tenggara Barat', 30),
(446, 'Kabupaten Seram Bagian Barat', 30),
(447, 'Kabupaten Seram Bagian Timur', 30),
(448, 'Kota Ambon', 30),
(449, 'Kota Tual', 30),
(450, 'Kabupaten Halmahera Barat', 31),
(451, 'Kabupaten Halmahera Tengah', 31),
(452, 'Kabupaten Halmahera Utara', 31),
(453, 'Kabupaten Halmahera Selatan', 31),
(454, 'Kabupaten Kepulauan Sula', 31),
(455, 'Kabupaten Halmahera Timur', 31),
(456, 'Kabupaten Pulau Morotai', 31),
(457, 'Kota Ternate', 31),
(458, 'Kota Tidore Kepulauan', 31),
(459, 'Kabupaten Asmat', 32),
(460, 'Kabupaten Biak Numfor', 32),
(461, 'Kabupaten Boven Digoel', 32),
(462, 'Kabupaten Deiyai', 32),
(463, 'Kabupaten Dogiyai', 32),
(464, 'Kabupaten Intan Jaya', 32),
(465, 'Kabupaten Jayapura', 32),
(466, 'Kabupaten Jayawijaya', 32),
(467, 'Kabupaten Keerom', 32),
(468, 'Kabupaten Kepulauan Yapen', 32),
(469, 'Kabupaten Lanny Jaya', 32),
(470, 'Kabupaten Mamberamo Raya', 32),
(471, 'Kabupaten Mamberamo Tengah', 32),
(472, 'Kabupaten Mappi', 32),
(473, 'Kabupaten Merauke', 32),
(474, 'Kabupaten Mimika', 32),
(475, 'Kabupaten Nabire', 32),
(476, 'Kabupaten Nduga', 32),
(477, 'Kabupaten Paniai', 32),
(478, 'Kabupaten Pegunungan Bintang', 32),
(479, 'Kabupaten Puncak', 32),
(480, 'Kabupaten Puncak Jaya', 32),
(481, 'Kabupaten Sarmi', 32),
(482, 'Kabupaten Supiori', 32),
(483, 'Kabupaten Tolikara', 32),
(484, 'Kabupaten Waropen', 32),
(485, 'Kabupaten Yahukimo', 32),
(486, 'Kabupaten Yalimo', 32),
(487, 'Kota Jayapura', 32),
(488, 'Kabupaten Fakfak', 33),
(489, 'Kabupaten Kaimana', 33),
(490, 'Kabupaten Manokwari', 33),
(491, 'Kabupaten Maybrat', 33),
(492, 'Kabupaten Raja Ampat', 33),
(493, 'Kabupaten Sorong', 33),
(494, 'Kabupaten Sorong Selatan', 33),
(495, 'Kabupaten Tambrauw', 33),
(496, 'Kabupaten Teluk Bintuni', 33),
(497, 'Kabupaten Teluk Wondama', 33),
(498, 'Kota Sorong', 33);

-- --------------------------------------------------------

--
-- Table structure for table `mst_link`
--

CREATE TABLE `mst_link` (
  `id_link` int(10) NOT NULL,
  `url_link` varchar(100) DEFAULT NULL,
  `nama_link` varchar(100) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `add_user` varchar(200) DEFAULT NULL,
  `modified_user` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_link`
--

INSERT INTO `mst_link` (`id_link`, `url_link`, `nama_link`, `add_date`, `modified_date`, `add_user`, `modified_user`) VALUES
(1, 'http://www.bappenas.go.id/', 'Bapennas Website', NULL, '2012-11-29 11:19:20', NULL, 'admin'),
(2, 'http://www.kemendiknas.go.id', 'Kemendiknas Website', NULL, '2012-12-01 12:16:46', NULL, 'admin'),
(5, 'http://www.kemenkumham.go.id/', 'kemenkumham website', '2012-12-01 12:18:02', NULL, 'admin', NULL),
(6, 'http://www.depdagri.go.id/', 'depdagri website', '2012-12-01 12:18:50', NULL, 'admin', NULL),
(7, 'http://www.kemenag.go.id/', 'kemenag website', '2012-12-01 12:19:28', NULL, 'admin', NULL),
(8, 'http://www.kominfo.go.id/', 'kominfo website', '2012-12-01 12:20:50', NULL, 'admin', NULL),
(9, 'http://www.depkeu.go.id/', 'kemenkeu website', '2012-12-01 12:22:05', NULL, 'admin', NULL),
(10, 'http://www.esdm.go.id/', 'Kementerian ESDM', '2013-10-24 16:51:08', NULL, 'admin', NULL),
(11, 'http://www.ebtke.esdm.go.id/', 'Dirjen EBTKE KESDM', '2013-10-24 16:51:30', NULL, 'admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mst_news`
--

CREATE TABLE `mst_news` (
  `id_news` int(10) NOT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `penulis` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `tgl_publikasi` datetime DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `add_user` varchar(100) DEFAULT NULL,
  `modified_user` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_news`
--

INSERT INTO `mst_news` (`id_news`, `judul`, `penulis`, `deskripsi`, `tgl_publikasi`, `add_date`, `modified_date`, `add_user`, `modified_user`) VALUES
(1, 'Trans TV Akui Super Trap Edisi Toilet Umum Hanya Rekayasa', 'http://id.omg.yahoo.com/news/trans-tv-akui-super-trap-edisi-toilet-umum-105100547.html', '<div class=\"yog-col yog-5u\" style=\"margin: 0px 20px 0px 0px; padding: 0px; float: left; width: 190px; font-family: arial, helvetica, clean, sans-serif; font-size: 13px; line-height: 16px;\">\r\n<div id=\"mediaarticlerelated\" class=\"yom-mod yom-art-related yom-art-related-modal\" style=\"margin: 0px; padding: 0px; zoom: 1; border-top-style: none; border-color: #84a3bf;\">\r\n<div class=\"hd\" style=\"margin: 0px; padding: 0px 0px 15px; zoom: 1;\">\r\n<h3 style=\"margin: 0px; padding: 0px; font-size: 13px; display: inline; color: #222222;\">Terkait Konten</h3>\r\n</div>\r\n<div class=\"bd\" style=\"margin: 0px 0px 10px; padding: 0px; zoom: 1; border-bottom-width: 3px; border-bottom-style: double; border-bottom-color: #dadada;\">\r\n<ul style=\"margin: 0px; padding: 0px; list-style: none;\">\r\n<li class=\"photo first last\" style=\"margin: 0px 0px 20px; padding: 0px; list-style: none; vertical-align: top; font-size: 11px; line-height: 1.45em; color: #444444;\"><a class=\"media\" style=\"color: #f1238d; text-decoration: initial; display: inline-block; position: relative; overflow: hidden; background-color: #000000; zoom: 1; margin-bottom: 2px; font-weight: bold;\" href=\"http://id.omg.yahoo.com/foto/trans-tv-akui-super-trap-edisi-toilet-umum-photo-105100492.html\"><img style=\"display: block; background-repeat: no-repeat no-repeat;\" title=\"Trans TV Akui Super Trap Edisi Toilet Umum Hanya Rekayasa\" src=\"http://l.yimg.com/bt/api/res/1.2/8I5gkA_O.uoNFi.vtCKyww--/YXBwaWQ9eW5ld3M7Y2g9MzAwO2NyPTE7Y3c9MjI4O2R4PTA7ZHk9MDtmaT11bGNyb3A7aD0yNTA7cT04NTt3PTE5MA--/http://media.zenfs.com/id_ID/News/Kapanlagi/Trans_TV_Akui_Super_Trap-bde6d02bc4981872bd0593f94c3fb050\" alt=\"Trans TV Akui Super Trap Edisi Toilet Umum Hanya Rekayasa\" width=\"190\" height=\"250\" /><span class=\"action enlarge\" style=\"display: block; position: absolute; bottom: 0px; left: 0px; width: 190px; padding: 7px 7px 7px 29px; color: #ffffff; font-size: 12px; background-image: url(\'http://l.yimg.com/os/mit/media/themes/pinkf1238d/images/map-theme_ltr-361055.png\'); background-attachment: scroll; opacity: 0.7 !important; background-position: 5px -1542px; background-repeat: no-repeat no-repeat;\">Lihat Foto</span></a>\r\n<p style=\"margin: 0px; padding: 0px; font-family: arial;\">Trans TV Akui Super Trap Edisi Toilet Umum Hanya Rekayasa</p>\r\n</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"yui_3_5_1_1_1354178367728_1062\" class=\"yog-col yog-11u\" style=\"margin: 0px 10px 0px 0px; padding: 0px; float: none; width: auto; overflow: visible; font-family: arial, helvetica, clean, sans-serif; font-size: 13px; line-height: 16px;\">\r\n<div id=\"yui_3_5_1_1_1354178367728_1061\" class=\"yom-mod yom-art-content \" style=\"margin: 0px 0px 5px; padding: 0px 0px 20px; zoom: 0; border-top-style: none; border-color: #84a3bf;\">\r\n<div id=\"yui_3_5_1_1_1354178367728_1060\" class=\"bd\" style=\"margin: 0px; padding: 0px; zoom: 0; font-size: 14px; font-family: Georgia, Times, \'Times New Roman\', serif; line-height: 1.6em;\">\r\n<p class=\"first\" style=\"margin: 0px; padding: 0px;\">KAPANLAGI.COM - Acara Super Trap edisi toilet umum yang mendapat banyak protes dari masyarakat ternyata hanya sebuah rekayasa yang dilakukan oleh kru Trans TV. Para talent mendapat bayaran untuk melakukan aksi tersebut.</p>\r\n<p style=\"margin: 11px 0px 0px; padding: 0px;\">Hal tersebut disampaikan oleh D Mayo selaku Eksekutif Produser Super Trap. Mayo menambahkan hanya episode tersebut yang direkayasa.</p>\r\n<p style=\"margin: 11px 0px 0px; padding: 0px;\">\"Ini bagian dari entertain, maksudnya semua tayangan Super Trap real namun beberapa kuota tayangan kita membuat rekayasa adegannya,\" kata Mayo saat ditemui di kantor KPI bilangan Gajah Mada, Jakarta Pusat, Rabu (28/11).</p>\r\n<p style=\"margin: 11px 0px 0px; padding: 0px;\">Mayo juga menyadari tayangan yang disiarkan pada hari Minggu kemarin tidak layak kalau seandainya nyata, untuk itu tim mereka membuat rekayasa dengan membayar beberapa talent.</p>\r\n<p style=\"margin: 11px 0px 0px; padding: 0px;\">\"Sebenarnya semua real makanya saya bilang ini sial yang beruntutan. Secara naluri dan moral tidak layak makanya yang episode ini kita buat sendiri adegannya aja yang lainnya sih real,\" tandasnya. (kpl/aal/uji/dew)</p>\r\n</div>\r\n</div>\r\n</div>', '2012-11-29 09:40:31', '2012-11-29 09:40:31', NULL, 'admin', NULL),
(3, 'Ditanya Ingin Jadi Firaun Baru, Presiden Mesir Tertawa Keras ', 'http://news.detik.com/read/2012/11/29/155735/2105155/1148/ditanya-ingin-jadi-firaun-baru-presiden-me', '<div class=\"author\"><strong>Rita Uli Hutapea</strong> - detikNews</div>\r\n<div class=\"leftside\">\r\n<div class=\"banner_inside_article\">\r\n<div class=\"banner_reg\">\r\n<div id=\"beacon_535f8903de\" style=\"position: absolute; left: 0px; top: 0px; visibility: hidden;\"><img style=\"width: 0px; height: 0px;\" src=\"http://openx.detik.com/delivery/lg.php?bannerid=30555&amp;campaignid=4402&amp;zoneid=24&amp;channel_ids=,&amp;loc=http%3A%2F%2Fnews.detik.com%2Fread%2F2012%2F11%2F29%2F155735%2F2105155%2F1148%2Fditanya-ingin-jadi-firaun-baru-presiden-mesir-tertawa-keras%3F9911012&amp;referer=http%3A%2F%2Fwww.detik.com%2F&amp;cb=535f8903de\" alt=\"\" width=\"0\" height=\"0\" /></div>\r\n</div>\r\n<div class=\"googleads\">&nbsp;</div>\r\n</div>\r\n</div>\r\n<div class=\"pic_artikel\"><img src=\"http://images.detik.com/content/2012/11/29/1148/morsinewdlm.jpg\" alt=\"\" /> <span> Mohamed Morsi (AFP) </span></div>\r\n<p><strong>Kairo,</strong> - Presiden Mesir Mohamed Morsi tengah menuai kritikan dari berbagai pihak di negerinya terkait dekrit yang baru dikeluarkannya. Sejumlah pihak bahkan menuding Morsi ingin menjadi \"Firaun baru\".<br /><br />Namun ketika hal itu ditanyakan padanya, Morsi pun tertawa. \"Firaun baru?\" tanya Morsi sebelum kemudian tertawa keras. \"Apa saya bisa?\" ujarnya. \"Saya pribadi telah menderita,\" cetusnya.<br /><br />\"Saya tertarik dan saya akan selalu tertarik soal pengalihan kekuasaan. Saya presiden terpilih,\" kata Morsi.<br /><br />Mengenai maraknya aksi demo besar-besaran untuk memprotes dirinya, Morsi mengatakan hal tersebut sebagai sinyal positif bahwa Mesir tengah berada di jalur demokrasi, setelah menggulingkan diktator Hosni Mubarak pada Februari 2011 lalu.<br /><br />\"Panggung dunia itu sangat sulit. Tidak mudah untuk berada di atas panggung dunia,\" ujar Morsi dalam wawancara dengan majalah Time.<br /><br />\"Tanggung jawab utama saya adalah menjaga kapal nasional ini dalam melewati periode transisinya. Ini tidak mudah. Warga Mesir bertekad untuk terus melangkah di jalur kebebasan dan demokrasi,\" imbuhnya.<br /><br />Pekan lalu, Morsi mengeluarkan dekrit yang memungkinkan dirinya mengeluarkan keputusan atau aturan apapun yang sifatnya final dan tak bisa diganggu gugat. Dekrit tersebut menempatkan diri Morsi tidak di bawah pengawasan siapapun juga dan bahwa keputusannya tidak dapat diubah oleh pengadilan atau otoritas lainnya.<br /><br />Dekrit tersebut menuai protes rakyat Mesir di berbagai wilayah. Ribuan pendukung oposisi termasuk politisi liberal Mohamad ElBaradei, mantan kepala badan tenaga atom PBB, telah ikut dalam aksi demo menentang dekrit itu. ElBaradei menuding Morsi menjadikan dirinya sebagai \"Firaun baru\" dengan mengambil begitu banyak wewenang.<br /><br />Namun Morsi menegaskan, dirinya hanya ingin membawa Mesir melangkah maju sebagai negara yang stabil dan aman. Morsi juga menegaskan, dekrit tersebut sifatnya hanya temporer.<br /><br /><strong> (ita/nwk)</strong></p>', '2012-11-29 10:09:32', '2012-11-29 10:09:32', NULL, 'admin', NULL),
(10, 'Grand Final Ajang Prestasi Pahlawan Hemat Energi 2013', 'http://www.ebtke.esdm.go.id/', '<p class=\"MsoNormal\" style=\"margin: 10px 0px; font-size: 12px; font-family: \'Helvetica Neue\', Arial, \'Liberation Sans\', FreeSans, sans-serif; text-align: justify;\"><img style=\"float: left;\" src=\"http://www.ebtke.esdm.go.id/images/stories/grandfinal.jpg\" alt=\"Grand Final\" width=\"410\" height=\"342\" />EBTKE-- Wakil Menteri Energi dan Sumber Daya Mineral (MESDM), Susilo Siswoutomo membuka Grand Final Ajang Prestasi Pahlawan Hemat Energi 2013 yang berlangsung di Balai Kartini, Jakarta, Selasa, 22 Oktober 2013. Acara ini diselenggarakan oleh Direktorat Jenderal Energi Baru Terbarukan dan Konservasi Energi (Ditjen EBTKE), KESDM dalam rangka mempromosikan efisiensi dan konservasi energi di Indonesia.</p>\n<p class=\"MsoNormal\" style=\"margin: 10px 0px; font-size: 12px; font-family: \'Helvetica Neue\', Arial, \'Liberation Sans\', FreeSans, sans-serif; text-align: justify;\">Dalam kesempatan tersebut hadir pula Direktur Jenderal EBTKE Rida Mulyana, kemudian Staf Ahli Bidang Kelembagaan dan Strategis I Gusti Nyoman Wiratmadja, Direktur Konserasi Energi Maritje Hutapea serta pejabat eselon dua di lingkungan Kementerian ESDM.</p>\n<p class=\"MsoNormal\" style=\"margin: 10px 0px; font-size: 12px; font-family: \'Helvetica Neue\', Arial, \'Liberation Sans\', FreeSans, sans-serif; text-align: justify;\">Dalam sambutannya, Susilo mengatakan ajang ini dapat memberikan pengenalan dan<span>&nbsp;&nbsp;</span>penanaman nilai-nilai efisiensi dan konservasi energi kepada masyarakat sejak usia dini, khususnya kepada anak-anak usia tingkat sekolah dasar melalui kegiatan yang menarik dan menyenangkan melalui Lomba Pidato, Lomba Cerdas Cermat, Lomba Menggambar, Lomba Hasta Karya, Lomba Majalah Dinding, dan Lomba Rangking 1 tentang konservasi energi dan efisiensi energi. \"Dengan ada acara ini anak-anak memperoleh pengalaman baru untuk lebih aware hemat energi,\"ujar dia.</p>\n<p class=\"MsoNormal\" style=\"margin: 10px 0px; font-size: 12px; font-family: \'Helvetica Neue\', Arial, \'Liberation Sans\', FreeSans, sans-serif; text-align: justify;\">Dia menegaskan, persoalan yang dihadapi saat ini penghematan energi belum menjadi budaya.\"Konotasi masyarakat kita kalau sudah bayar kenapa harus hemat padahal kalau berhemat keuntungannya besar,\"kata Susilo.</p>\n<p class=\"MsoNormal\" style=\"margin: 10px 0px; font-size: 12px; font-family: \'Helvetica Neue\', Arial, \'Liberation Sans\', FreeSans, sans-serif; text-align: justify;\">Padahal, sambungnya, jika melakukan penghematan potensi keuntungan sangat besar.\"Sebagai contoh di Jakarta kebutuhan listrik 5600 megawatt (MW), 10 persen nya saja sudah dapat melistriki seluruh kabupaten,\"pungkasnya.</p>\n<p class=\"MsoNormal\" style=\"margin: 10px 0px; font-size: 12px; font-family: \'Helvetica Neue\', Arial, \'Liberation Sans\', FreeSans, sans-serif; text-align: justify;\">Kegiatan Grand Final Ajang Prestasi Pahlawan Hemat Energi 2013 merupakan acara puncak dari rangkaian kegiatan penyisihan Ajang Prestasi Pahlawan Energi 2013 yang diadakan sejak bulan September 2013 di Sekolah Dasar di 4 (empat) wilayah Jabodetabek, yaitu Jakarta, Bogor &ndash; Depok, Tangerang, dan Bekasi. Pada tahap penyisihan di masing-masing wilayah, melibatkan 25 Sekolah Dasar. Masing-masing sekolah mengirimkan 30 siswa, sehingga jumlah siswa yang terlibat pada setiap wilayah sebanyak 750 siswa, dan untuk 4 wilayah berjumlah 3.000 siswa. Sedangkan untuk kegiatan tahap grand final diikuti oleh 400 orang finalis.</p>\n<p class=\"MsoNormal\" style=\"margin: 10px 0px; font-size: 12px; font-family: \'Helvetica Neue\', Arial, \'Liberation Sans\', FreeSans, sans-serif; text-align: justify;\">Dari hasil kegiatan Ajang Prestasi Pahlawan Hemat Energi 2013 diharapkan akan menghasilkan Pahlawan Hemat Energi khususnya para pemenang lomba dan seluruh siswa yang terlibat pada umumnya mulai dari tahap penyisihan. Para Pahlawan Hemat Energi ini diharapkan menjadi motivator dalam pelaksanaan hemat energi di sekolah dan di rumah dan lingkungan masing-masing. (<em>ferial</em>)</p>', '2013-10-24 16:39:24', '2013-10-24 16:39:24', NULL, 'admin', NULL),
(11, 'Catur Dharma Energi', 'website resmi Kementerian ESDM', '<p class=\"MsoNormal\" style=\"margin: 10px 0px; font-size: 12px; font-family: \'Helvetica Neue\', Arial, \'Liberation Sans\', FreeSans, sans-serif; text-align: justify;\"><img style=\"float: left;\" src=\"http://www.ebtke.esdm.go.id/images/stories/jerobppt.jpg\" alt=\"Catur Dharma Energi\" width=\"410\" height=\"238\" />EBTKE--Bauran energi nasional yang masih didominasi minyak bumi harus segera diperbaiki. Peran minyak minyak harus segera dikurangi dan diganti dengan gas dan energy baru terbarukan yang lebih&nbsp;<em>sustainable</em>&nbsp;dan ramah lingkungan.</p>\n<p class=\"MsoNormal\" style=\"margin: 10px 0px; font-size: 12px; font-family: \'Helvetica Neue\', Arial, \'Liberation Sans\', FreeSans, sans-serif; text-align: justify;\">Demikian disampaikan Menteri Energi Dan Sumber Daya Mineral, Jero Wacik saat&nbsp;memberikan&nbsp;<em>keynote speech</em>&nbsp;diacara business Forum SP-IATMI&nbsp;<em>APOGCE</em>, Senin, 21 Oktober 2013.</p>\n<p class=\"MsoNormal\" style=\"margin: 10px 0px; font-size: 12px; font-family: \'Helvetica Neue\', Arial, \'Liberation Sans\', FreeSans, sans-serif; text-align: justify;\">&ldquo; Paradigma minyak harus ditinggalkan. Harus pindah ke gas, ke energi baru terbarukan. Ini tugas besar para insinyur, kita semua dan Saya sudah temukan formulanya,&rdquo; ujar dia.</p>\n<p class=\"MsoNormal\" style=\"margin: 10px 0px; font-size: 12px; font-family: \'Helvetica Neue\', Arial, \'Liberation Sans\', FreeSans, sans-serif; text-align: justify;\">Ditambahkannya, ada empat tugas besar atau utama Indonesia di bidang energi atau catur dharma energi yang harus didorong dengan keras. Empat tugas ini yaitu, tingkatkan produksi migas, misalnya dengan memperbanyak kegiatan eksplorasi dengan memberikan insentif agar investor dapat tertarik. Kedua, kurangi pemakaian BBM, utamanya pada sektor pembangkit listrik. Ketiga, mendorong secara masif pengembangan energi baru terbarukan dan terakhir, lakukan gerakan hemat energi.</p>\n<p class=\"MsoNormal\" style=\"margin: 10px 0px; font-size: 12px; font-family: \'Helvetica Neue\', Arial, \'Liberation Sans\', FreeSans, sans-serif; text-align: justify;\">&ldquo;Bangsa kita masih masuk kategori bangsa yang tidak hemat. Sedang dipersiapkan aturan- aturan dan&nbsp;&nbsp;cara-cara mengajak bangsa kita untuk berhemat,&rdquo;ucap Jero.</p>\n<p class=\"MsoNormal\" style=\"margin: 10px 0px; font-size: 12px; font-family: \'Helvetica Neue\', Arial, \'Liberation Sans\', FreeSans, sans-serif; text-align: justify;\">Konsumsi BBM Bersubsidi cenderung menurun setelah dinaikan harga ecerannya. &ldquo;Kabar bagus, penggunaan BBM subsidi sebelum naik, susah ajak orang Indonesia hemat BBM. Tapi setelah naik menjadi Rp 6500, sekarang penggumaan BBM subsidi tahun ini tidak melewati batas. Jadi bangsa Indonesia sudah mau berhemat kalau dirasa mahal harganya,&rdquo; tambahnya.</p>\n<p class=\"MsoNormal\" style=\"margin: 10px 0px; font-size: 12px; font-family: \'Helvetica Neue\', Arial, \'Liberation Sans\', FreeSans, sans-serif; text-align: justify;\">&ldquo;Jangan&nbsp;<em>wait and see</em>, kerjakan apa yg bisa dikerjakan sekarang,&rdquo; pungkas Jero.</p>\n<p class=\"MsoNormal\" style=\"margin: 10px 0px; font-size: 12px; font-family: \'Helvetica Neue\', Arial, \'Liberation Sans\', FreeSans, sans-serif; text-align: justify;\"><em>Sumber : website resmi Kementerian ESDM</em></p>', '2013-10-24 16:49:54', '2013-10-24 16:42:35', '2013-10-24 16:49:54', 'admin', 'admin'),
(9, 'Pilgub Jabar, Kapolda: Polisi Harus Netral', 'http://news.detik.com/', '<p style=\"text-align: justify;\"><strong>Mansyur Hidayat</strong> - detikNews <strong><br /></strong></p>\r\n<p style=\"text-align: justify;\"><strong>Garut</strong> - Dalam pelaksanaan pilihan gubernur Jawa Barat untuk periode 2013-2018, Polisi diharapkan bertindak netral tidak mendukung, dan mengarahkan kepada salah satu calon gubernur.</p>\r\n<p style=\"text-align: justify;\"><br />Kapolda Jawa Barat, Brigjen Polis Tubangus Anis Angkawijaya, mengatakan bahwa sikap netralitas tersebut tidak menunjukkan keberpihakan, mengarahkan keluarga atau warga dilingkungan tempat tinggal agar memilih pasangan calon gubernur.<br /><br />\"Biarkan, mau merah, kuning, hijau atau lainnya kita sebagai Polisi harus netral\", ujarnya, Sabtu (1/12/2012), kepada wartawan pada kunjungan kerja Kapolda Jawa Barat di mapolres Garut.<br /><br />Terkait saat ini seluruh calon pasangan gubernur dan wakilnya sedang melaksanakan pengenalan diri di Kabupten dan kota di Jawa Barat diharapkan agar tidak memancing suasana panas dengan saling menjelekan calon gubernur lainnya.<br /><br />\"Ya harus santun dalam pengenalan diri masing-masing, tanpa harus menjelek-jelekkan calon lainnya \" ungkap Tubagus.<br /><br />Tubagus menambahkan bahwa beberapa daerah di Jawa Barat ditandai sebagai daerah rawan terjadinya konflik pilkada termasuk Kabupaten Garut, namun diakuinya bahwa jajaran Polda Jawa Barat saat ini sudah melakukan antisipasi dini.<br /><br />\"Saya yakin warga Jabar bisa saling menghargai dalam perbedaan pendapat sehingga pelaksanaan pilihan gubernur lancar dan aman \", tandasnya.<br /><br /><strong> (gah/gah)</strong></p>', '2012-12-01 12:24:24', '2012-12-01 12:24:24', NULL, 'admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mst_perusahaan`
--

CREATE TABLE `mst_perusahaan` (
  `id_perusahaan` int(10) NOT NULL,
  `npwp` varchar(100) NOT NULL,
  `nama_perusahaan` varchar(225) DEFAULT NULL,
  `pimpinan` varchar(225) DEFAULT NULL,
  `siup` varchar(100) DEFAULT NULL,
  `tgl_siup` date DEFAULT NULL,
  `alamat_perusahaan` varchar(225) DEFAULT NULL,
  `telp_perusahaan` varchar(100) DEFAULT NULL,
  `notaris` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `kontak_person` varchar(100) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `add_user` varchar(100) DEFAULT NULL,
  `modified_user` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_perusahaan`
--

INSERT INTO `mst_perusahaan` (`id_perusahaan`, `npwp`, `nama_perusahaan`, `pimpinan`, `siup`, `tgl_siup`, `alamat_perusahaan`, `telp_perusahaan`, `notaris`, `email`, `kontak_person`, `status`, `add_date`, `modified_date`, `add_user`, `modified_user`) VALUES
(6, '8899044', 'PT. Mentari Mendung', 'Siska Nugraha', '9998798789', '2013-09-10', 'Jl. Surya', '8099877676', 'Rika Suniarni', 'blurify@gmail.com', 'mita', '1', '2013-09-05 23:41:41', '2013-09-06 00:07:11', 'admin', 'admin'),
(8, '865644554', 'PT. Karya Abadi', 'Junadi', '56145767655', '2013-10-18', 'Jl. Ada Apa Saja', '564654654', 'Rani Maharani', 'blurify@gmail.com', 'Deni Sudarmanto', '1', '2013-09-05 23:43:02', NULL, 'admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mst_propinsi`
--

CREATE TABLE `mst_propinsi` (
  `propinsi_id` tinyint(4) NOT NULL,
  `propinsi` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_propinsi`
--

INSERT INTO `mst_propinsi` (`propinsi_id`, `propinsi`) VALUES
(1, 'Aceh'),
(2, 'Sumatera Utara'),
(3, 'Bengkulu'),
(4, 'Jambi'),
(5, 'Riau'),
(6, 'Sumatera Barat'),
(7, 'Sumatera Selatan'),
(8, 'Lampung'),
(9, 'Kepulauan Bangka Belitung'),
(10, 'Kepulauan Riau'),
(11, 'Banten'),
(12, 'Jawa Barat'),
(13, 'DKI Jakarta'),
(14, 'Jawa Tengah'),
(15, 'Jawa Timur'),
(16, 'Daerah Istimewa Yogyakarta'),
(17, 'Bali'),
(18, 'Nusa Tenggara Barat'),
(19, 'Nusa Tenggara Timur'),
(20, 'Kalimantan Barat'),
(21, 'Kalimantan Selatan'),
(22, 'Kalimantan Tengah'),
(23, 'Kalimantan Timur'),
(24, 'Gorontalo'),
(25, 'Sulawesi Selatan'),
(26, 'Sulawesi Tenggara'),
(27, 'Sulawesi Tengah'),
(28, 'Sulawesi Utara'),
(29, 'Sulawesi Barat'),
(30, 'Maluku'),
(31, 'Maluku Utara'),
(32, 'Papua'),
(33, 'Papua Barat');

-- --------------------------------------------------------

--
-- Table structure for table `mst_sifatsurat`
--

CREATE TABLE `mst_sifatsurat` (
  `id_sifat` int(10) NOT NULL,
  `kode_sifat` varchar(20) NOT NULL,
  `nama_sifat` varchar(100) DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `add_user` varchar(100) DEFAULT NULL,
  `modified_user` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_sifatsurat`
--

INSERT INTO `mst_sifatsurat` (`id_sifat`, `kode_sifat`, `nama_sifat`, `keterangan`, `add_date`, `modified_date`, `add_user`, `modified_user`) VALUES
(1, '001', 'Penting', 'Penting', NULL, '2013-10-24 20:02:48', NULL, 'admin'),
(2, '002', 'Mendesak', 'Mendesak', '2013-10-24 20:03:22', NULL, 'admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mst_staff`
--

CREATE TABLE `mst_staff` (
  `id_staff` int(10) NOT NULL,
  `no_induk` varchar(100) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `kelamin` char(1) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `id_jabatan` int(10) DEFAULT NULL,
  `id_group` int(10) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `add_user` varchar(100) DEFAULT NULL,
  `modified_user` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_staff`
--

INSERT INTO `mst_staff` (`id_staff`, `no_induk`, `nama`, `kelamin`, `photo`, `email`, `username`, `password`, `id_jabatan`, `id_group`, `status`, `add_date`, `modified_date`, `add_user`, `modified_user`) VALUES
(2, '4455445', 'Zulay', 'L', '4455445_photoz7.jpg', 'blurify@gmail.com', NULL, NULL, NULL, NULL, 'Y', '2013-08-25 18:53:20', NULL, 'admin', NULL),
(4, 'ST005', 'Sandy Nugraha', 'L', '', 'sandy@yahoo.com', 'sandy', '21232f297a57a5a743894a0e4a801fc3', 4, 15, 'Y', '2013-10-15 17:16:04', NULL, 'admin', NULL),
(5, 'ST006', 'Rika Supriatna', 'L', '', 'sandy@yahoo.com', 'kasubag', '21232f297a57a5a743894a0e4a801fc3', 5, 14, 'Y', '2013-10-15 17:16:49', NULL, 'admin', NULL),
(6, '9090', 'Reni subagja', 'L', '', 'ruby_lee17@yahoo.com', 'kabag', '21232f297a57a5a743894a0e4a801fc3', 4, 14, 'Y', '2013-10-15 17:58:54', NULL, 'admin', NULL),
(7, '78765665', 'Mirna Sumarni', 'P', '', 'mirna@yahoo.com', '', '', 5, 15, 'Y', '2013-10-16 20:17:02', NULL, 'admin', NULL),
(8, '4455445B', 'Staff Andy Suwira', 'L', '', 'staffq@yahoo.com', 'staff', '21232f297a57a5a743894a0e4a801fc3', 6, 14, 'Y', '2013-10-16 21:37:29', NULL, 'admin', NULL),
(9, '7844775', 'Staff Deri Jumadi', 'L', '', 'staff3@yahoo.com', NULL, NULL, 6, 14, 'Y', '2013-10-16 21:38:05', NULL, 'admin', NULL),
(10, '11877676', 'Neni Nurani', 'L', '', 'neni@jmail.com', NULL, NULL, 6, 14, 'Y', '2013-10-16 21:38:43', NULL, 'admin', NULL),
(11, '010405', 'Direktur Panas Bumi', 'L', '', 'dir_panasbumi@yahoo.com', 'direktur', '21232f297a57a5a743894a0e4a801fc3', 2, 0, 'Y', '2013-10-17 02:01:42', NULL, 'admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mst_statussurat`
--

CREATE TABLE `mst_statussurat` (
  `id_status` int(10) NOT NULL,
  `kode_status` varchar(20) NOT NULL,
  `nama_status` varchar(100) DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `add_user` varchar(100) DEFAULT NULL,
  `modified_user` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_statussurat`
--

INSERT INTO `mst_statussurat` (`id_status`, `kode_status`, `nama_status`, `keterangan`, `add_date`, `modified_date`, `add_user`, `modified_user`) VALUES
(2, '345', 'Proses', 'Proses', '2013-07-17 11:16:50', '2013-10-24 20:03:54', 'admin', 'admin'),
(3, '346', 'Selesai', 'Selesai', '2013-10-24 20:04:16', NULL, 'admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mst_subgroup`
--

CREATE TABLE `mst_subgroup` (
  `id_subgroup` int(10) NOT NULL,
  `header_subgroup` int(10) NOT NULL,
  `kode_subgroup` varchar(20) NOT NULL,
  `nama_subgroup` varchar(100) DEFAULT NULL,
  `id_group` int(11) DEFAULT NULL,
  `keterangan` text,
  `dpp` int(1) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `add_user` varchar(100) DEFAULT NULL,
  `modified_user` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_subgroup`
--

INSERT INTO `mst_subgroup` (`id_subgroup`, `header_subgroup`, `kode_subgroup`, `nama_subgroup`, `id_group`, `keterangan`, `dpp`, `add_date`, `modified_date`, `add_user`, `modified_user`) VALUES
(1, 0, '01', 'Prodi Keperawatan', 4, '', NULL, NULL, NULL, NULL, NULL),
(2, 0, '02', 'Prodi TLM', 4, '', NULL, NULL, NULL, NULL, NULL),
(3, 0, '03', 'Keuangan', 5, '', NULL, NULL, NULL, NULL, NULL),
(4, 0, '04', 'SARPRAS', 5, '', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mst_tujuansurat`
--

CREATE TABLE `mst_tujuansurat` (
  `id_tujuan` int(10) NOT NULL,
  `kode_tujuan` varchar(20) NOT NULL,
  `nama_tujuan` varchar(100) DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `add_user` varchar(100) DEFAULT NULL,
  `modified_user` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_tujuansurat`
--

INSERT INTO `mst_tujuansurat` (`id_tujuan`, `kode_tujuan`, `nama_tujuan`, `keterangan`, `add_date`, `modified_date`, `add_user`, `modified_user`) VALUES
(1, '002', 'Eksternal', 'Pihak Eksternal', '2013-07-17 12:20:50', '2013-10-24 20:05:13', 'admin', 'admin'),
(2, '003', 'Sekjen ESDM', 'Sekjen ESDM', '2013-07-17 12:26:24', '2013-10-24 20:04:56', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `mst_user`
--

CREATE TABLE `mst_user` (
  `id_user` int(10) NOT NULL,
  `id_group` int(10) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `level` char(1) DEFAULT NULL,
  `keterangan` text,
  `status` smallint(1) NOT NULL DEFAULT '1',
  `last_login` datetime DEFAULT NULL,
  `modul` char(1) DEFAULT NULL COMMENT '0 all, 1 eletter only, 2 edoc only',
  `add_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `add_user` varchar(100) DEFAULT NULL,
  `modified_user` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_user`
--

INSERT INTO `mst_user` (`id_user`, `id_group`, `username`, `password`, `nama_lengkap`, `level`, `keterangan`, `status`, `last_login`, `modul`, `add_date`, `modified_date`, `add_user`, `modified_user`) VALUES
(33, 0, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'A', 'admin', 1, NULL, 'A', '2012-11-25 17:53:42', '2012-12-03 02:33:38', '567', 'admin'),
(54, 14, 'operator', '4b583376b2767b923c3e1da60d10de59', 'operator', 'O', 'operator', 1, NULL, 'B', '2012-11-25 19:41:33', '2012-11-25 19:48:27', 'admin', 'admin'),
(55, 14, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user saja', 'U', 'PErcobaan Data', 1, NULL, 'C', '2012-12-03 03:47:35', NULL, 'admin', NULL),
(57, 0, 'helloworld', 'ad556d63e9333734ab1fd7e76f753269', 'pandu', 'A', '', 1, NULL, NULL, '2020-07-27 08:04:33', NULL, 'admin', NULL),
(58, 32, 'pandu', '202cb962ac59075b964b07152d234b70', 'pandu', 'O', '', 1, NULL, NULL, '2020-07-29 12:35:26', NULL, 'admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trans_disposisi`
--

CREATE TABLE `trans_disposisi` (
  `id_disposisi` int(10) NOT NULL,
  `id_surat` int(10) NOT NULL,
  `id_staff` int(10) NOT NULL,
  `id_aksi` int(10) DEFAULT NULL,
  `dispose_by` int(10) DEFAULT NULL,
  `tanggal_disposisi` date DEFAULT NULL,
  `tanggal_penyelesaian` date DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `keterangan` text,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `add_user` varchar(100) DEFAULT NULL,
  `modified_user` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans_disposisi`
--

INSERT INTO `trans_disposisi` (`id_disposisi`, `id_surat`, `id_staff`, `id_aksi`, `dispose_by`, `tanggal_disposisi`, `tanggal_penyelesaian`, `status`, `keterangan`, `add_date`, `modified_date`, `add_user`, `modified_user`) VALUES
(1, 10, 6, 3, 11, '2013-10-18', '2013-10-24', NULL, 'Proses Lanjut Segera', '2013-10-16 20:24:44', '0000-00-00 00:00:00', NULL, NULL),
(2, 10, 5, 9, 6, '2013-10-25', '2013-10-19', NULL, 'Lakukan Segera', '2013-10-16 20:25:39', '0000-00-00 00:00:00', NULL, NULL),
(3, 10, 7, 9, 6, '2013-10-25', '2013-10-19', NULL, 'Lakukan Segera', '2013-10-16 20:25:39', '0000-00-00 00:00:00', NULL, NULL),
(4, 10, 8, 6, 5, '2013-10-26', '2013-10-31', NULL, 'Edarkan Segera', '2013-10-16 20:26:37', '0000-00-00 00:00:00', NULL, NULL),
(5, 10, 9, 6, 5, '2013-10-26', '2013-10-31', NULL, 'Edarkan Segera', '2013-10-16 20:26:38', '0000-00-00 00:00:00', NULL, NULL),
(6, 10, 10, 6, 5, '2013-10-26', '2013-10-31', NULL, 'Edarkan Segera', '2013-10-16 20:26:38', '0000-00-00 00:00:00', NULL, NULL),
(7, 12, 6, 6, 33, '2013-10-18', '2013-10-23', NULL, 'test', '2013-10-15 15:08:49', '0000-00-00 00:00:00', NULL, NULL),
(8, 12, 4, 6, 33, '2013-10-18', '2013-10-23', NULL, 'test', '2013-10-15 15:08:50', '0000-00-00 00:00:00', NULL, NULL),
(9, 7, 6, 1, 11, '2013-10-09', '2013-10-24', NULL, 'percobaan data', '2013-10-24 02:02:02', '0000-00-00 00:00:00', NULL, NULL),
(10, 7, 4, 1, 11, '2013-10-09', '2013-10-24', NULL, 'percobaan data', '2013-10-24 02:02:02', '0000-00-00 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trans_keluar`
--

CREATE TABLE `trans_keluar` (
  `id_keluar` int(10) NOT NULL,
  `id_surat` int(10) NOT NULL,
  `id_staff` int(10) NOT NULL,
  `tanggal_buat` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `id_aksi` int(10) DEFAULT NULL,
  `perihal` text,
  `catatan` text,
  `status_keluar` int(1) DEFAULT NULL COMMENT '0 = belum keluar, 1 = proses lanjut, 2 = lanjut catatan, 3 = tola',
  `id_pembuat` int(10) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `add_user` varchar(100) DEFAULT NULL,
  `modified_user` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans_keluar`
--

INSERT INTO `trans_keluar` (`id_keluar`, `id_surat`, `id_staff`, `tanggal_buat`, `tanggal_selesai`, `id_aksi`, `perihal`, `catatan`, `status_keluar`, `id_pembuat`, `add_date`, `modified_date`, `add_user`, `modified_user`) VALUES
(1, 1, 5, '2013-10-23', '2013-10-15', 1, 'Testing Data', 'Percobaan Data', 0, 8, '2013-10-23 21:36:42', '2013-10-24 20:20:43', 'staff', 'kasubag'),
(2, 2, 5, '2013-10-16', '2013-10-18', 1, 'test', 'Percobaan Data', 1, 8, '2013-10-23 21:53:07', '2013-10-24 21:36:25', 'staff', 'kasubag'),
(3, 3, 5, '2013-10-24', '2013-10-26', 1, 'Coba Saja', 'Percobaan Data', 2, 8, '2013-10-23 21:53:28', '2013-10-24 21:35:13', 'staff', 'kasubag'),
(28, 3, 6, '2013-10-24', '2013-10-26', 0, 'Coba Saja', 'Mohon lanjutkan jika data sudah lengkap', 1, 5, '2013-10-24 21:35:13', '2013-10-24 21:43:40', 'kasubag', 'kabag'),
(29, 2, 6, '2013-10-16', '2013-10-18', 0, 'test', 'ini Semua sudah valid', 1, 5, '2013-10-24 21:36:25', '2013-10-24 21:43:26', 'kasubag', 'kabag'),
(30, 2, 11, '2013-10-16', '2013-10-18', 0, 'test', 'Tamat Sudah', 4, 6, '2013-10-24 21:43:26', '2013-10-24 22:45:17', 'kabag', 'kasubag'),
(31, 3, 11, '2013-10-24', '2013-10-31', 0, 'Ok Sajalah', 'Sudah Selesai', 4, 6, '2013-10-24 21:43:40', '2013-10-24 22:42:39', 'kabag', 'kasubag'),
(32, 4, 5, '2013-10-15', '2013-10-02', 0, 'test', 'test', 0, 8, '2013-10-24 23:04:14', NULL, 'staff', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trans_pekerjaan`
--

CREATE TABLE `trans_pekerjaan` (
  `id_project` int(10) NOT NULL,
  `id_pekerjaan` int(10) NOT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `anggaran` double DEFAULT NULL,
  `keterangan` text,
  `add_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `add_user` varchar(50) DEFAULT NULL,
  `modified_user` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans_pekerjaan`
--

INSERT INTO `trans_pekerjaan` (`id_project`, `id_pekerjaan`, `pekerjaan`, `anggaran`, `keterangan`, `add_date`, `modified_date`, `add_user`, `modified_user`) VALUES
(1, 1, 'Pra Pekerjaan Lapangan', 1250000, 'Pra Pekerjaan Lapangan', NULL, '2013-10-12 00:24:05', NULL, 'admin'),
(1, 2, 'Pekerjaan Lapangan', 1250000, 'Pekerjaan Lapangan', NULL, '2013-10-12 00:24:05', NULL, 'admin'),
(1, 3, 'Laboratorium', 1250000, 'Laboratorium', NULL, '2013-10-12 00:24:05', NULL, 'admin'),
(3, 1, 'Transportasi & Akomodasi', 8000000, 'Keterangan Transportasi & Akomodasi', NULL, '2013-10-11 23:56:15', NULL, 'admin'),
(3, 2, 'Equipment', 7000000, 'Keterangan Equipment', NULL, '2013-10-11 23:56:15', NULL, 'admin'),
(3, 3, 'Analisa & Pelaporan', 6000000, 'Keterangan Analisa & Pelaporan', NULL, '2013-10-11 23:56:15', NULL, 'admin'),
(4, 1, 'Percobaan 1', 400021, 'Ok', NULL, '2013-10-08 23:35:30', NULL, 'admin'),
(4, 2, 'Percobaan 2', 52421242, 'Ok', NULL, '2013-10-08 23:35:30', NULL, 'admin'),
(4, 3, 'Percobaan 3', 44444, 'Ok', NULL, '2013-10-08 23:35:30', NULL, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `trans_pekerjaanbiaya`
--

CREATE TABLE `trans_pekerjaanbiaya` (
  `id_biaya` int(10) NOT NULL,
  `id_detail` int(10) NOT NULL,
  `id_pekerjaan` int(10) NOT NULL,
  `id_project` int(10) NOT NULL,
  `id_komponen` int(10) NOT NULL,
  `nama_biaya` varchar(225) DEFAULT NULL,
  `anggaran` double DEFAULT NULL,
  `detail` varchar(225) DEFAULT NULL,
  `keterangan` text,
  `add_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `add_user` varchar(50) DEFAULT NULL,
  `modified_user` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans_pekerjaanbiaya`
--

INSERT INTO `trans_pekerjaanbiaya` (`id_biaya`, `id_detail`, `id_pekerjaan`, `id_project`, `id_komponen`, `nama_biaya`, `anggaran`, `detail`, `keterangan`, `add_date`, `modified_date`, `add_user`, `modified_user`) VALUES
(1, 1, 1, 4, 3, 'Geothermal Exploration Expert', 600000, NULL, 'Geothermal Exploration Expert', NULL, '2013-10-09 23:46:14', NULL, 'admin'),
(1, 2, 1, 4, 8, 'Senior Geologist/Petrologi volkanik -alterasi', 250000, NULL, '', NULL, '2013-10-09 23:35:24', NULL, 'admin'),
(1, 3, 1, 3, 3, 'Vehicles Fuel', 150000, NULL, '', NULL, '2013-10-12 00:00:21', NULL, 'admin'),
(1, 3, 1, 4, 7, 'Senior Geologist/Petrologi volkanik -alterasi', 4000000, NULL, '', NULL, '2013-10-09 23:40:26', NULL, 'admin'),
(1, 4, 1, 3, 3, 'Geothermal Exploration Expert', 1000000, NULL, '', NULL, '2013-10-11 23:59:50', NULL, 'admin'),
(1, 5, 1, 3, 3, 'Geothermal Exploration Expert', 2500000, NULL, '', NULL, '2013-10-11 23:59:00', NULL, 'admin'),
(1, 5, 1, 4, 9, 'Geothermal Exploration Expert', 5000000, NULL, '', NULL, '2013-10-10 00:17:46', NULL, 'admin'),
(2, 1, 1, 4, 3, 'Field Asisten (3 orang)', 3000000, NULL, '-', NULL, '2013-10-09 23:46:14', NULL, 'admin'),
(2, 2, 1, 4, 5, 'Office supplies, phones. etc', 150000, NULL, '', NULL, '2013-10-09 23:35:24', NULL, 'admin'),
(2, 3, 1, 3, 6, 'Vehicles Fuel', 1500000, NULL, '', NULL, '2013-10-12 00:00:22', NULL, 'admin'),
(2, 3, 1, 4, 9, 'Percobaan Saja', 500000, NULL, '', NULL, '2013-10-09 23:40:26', NULL, 'admin'),
(2, 4, 1, 3, 3, 'Senior Geochemist', 1000000, NULL, '', NULL, '2013-10-11 23:59:50', NULL, 'admin'),
(2, 5, 1, 3, 3, 'Senior Geologist/Petrologi volkanik -alterasi', 2500000, NULL, '', NULL, '2013-10-11 23:59:00', NULL, 'admin'),
(2, 5, 1, 4, 14, 'Fotocopy literatur, membeli jurnal, dll', 3600000, NULL, '', NULL, '2013-10-10 00:17:46', NULL, 'admin'),
(3, 1, 1, 4, 3, 'Senior Geochemist', 1250000, NULL, '-', NULL, '2013-10-09 23:46:14', NULL, 'admin'),
(3, 2, 1, 4, 5, 'Fotocopy literatur, membeli jurnal, dll', 500000, NULL, '', NULL, '2013-10-09 23:35:25', NULL, 'admin'),
(3, 3, 1, 3, 7, 'Vehicles Fuel', 150000, NULL, '', NULL, '2013-10-12 00:00:22', NULL, 'admin'),
(3, 4, 1, 3, 4, 'Final Report and Maps', 1000000, NULL, '', NULL, '2013-10-11 23:59:50', NULL, 'admin'),
(3, 5, 1, 3, 3, 'Senior Geologist/Struktur geologi', 2500000, NULL, '', NULL, '2013-10-11 23:59:00', NULL, 'admin'),
(4, 1, 1, 4, 7, 'Gas analysis', 2600000, NULL, '-', NULL, '2013-10-09 23:46:14', NULL, 'admin'),
(4, 3, 1, 3, 8, 'Vehicles Fuel', 150000, NULL, '', NULL, '2013-10-12 00:00:22', NULL, 'admin'),
(4, 4, 1, 3, 8, 'Presentation', 1000000, NULL, '', NULL, '2013-10-11 23:59:50', NULL, 'admin'),
(4, 5, 1, 3, 3, 'Geothermal Exploration Expert', 2500000, NULL, '', NULL, '2013-10-11 23:59:00', NULL, 'admin'),
(5, 1, 1, 4, 6, 'Ganalysisas ', 850000, NULL, '', NULL, '2013-10-09 23:46:14', NULL, 'admin'),
(5, 3, 1, 3, 6, 'Vehicles Fuel', 150000, NULL, '', NULL, '2013-10-12 00:00:22', NULL, 'admin'),
(5, 4, 1, 3, 10, 'Personnel Mob. Bandung - Site VV', 1000000, NULL, '', NULL, '2013-10-11 23:59:50', NULL, 'admin'),
(5, 5, 1, 3, 3, 'Senior Geologist/Petrologi volkanik -alterasi', 2500000, NULL, '', NULL, '2013-10-11 23:59:00', NULL, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `trans_pekerjaandet`
--

CREATE TABLE `trans_pekerjaandet` (
  `id_detail` int(10) NOT NULL,
  `id_pekerjaan` int(10) NOT NULL,
  `id_project` int(10) NOT NULL,
  `detail` varchar(225) DEFAULT NULL,
  `keterangan` text,
  `add_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `add_user` varchar(50) DEFAULT NULL,
  `modified_user` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans_pekerjaandet`
--

INSERT INTO `trans_pekerjaandet` (`id_detail`, `id_pekerjaan`, `id_project`, `detail`, `keterangan`, `add_date`, `modified_date`, `add_user`, `modified_user`) VALUES
(1, 1, 1, 'Pengumpulan literatur', 'Pengumpulan literatur', NULL, '2013-10-12 00:24:44', NULL, 'admin'),
(1, 1, 3, 'Personnel Mob. Bandung - Site VV', 'Personnel Mob. Bandung - Site VV', NULL, '2013-10-11 23:56:57', NULL, 'admin'),
(1, 2, 1, 'Pengambilan sampel air', 'Pengambilan sampel air', NULL, '2013-10-12 00:25:04', NULL, 'admin'),
(1, 2, 3, 'Software Licence Lease', 'Software Licence Lease', NULL, '2013-10-11 23:57:26', NULL, 'admin'),
(1, 2, 4, 'Percobaan Detail 1', 'Test1', NULL, '2013-10-09 23:42:54', NULL, 'admin'),
(1, 3, 1, 'Analisa air 10-20 sampel', 'Analisa air 10-20 sampel', NULL, '2013-10-12 00:25:28', NULL, 'admin'),
(1, 3, 3, 'Analisa + Laporan petrografi 30-50 sampe', 'Analisa + Laporan petrografi 30-50 sampe', NULL, '2013-10-11 23:57:49', NULL, 'admin'),
(2, 1, 1, 'Studi literatur dan perencanaan jalur survei', 'Studi literatur dan perencanaan jalur survei', NULL, '2013-10-12 00:24:44', NULL, 'admin'),
(2, 1, 3, '4-WD Vehicles Rent (2 unit)', '4-WD Vehicles Rent (2 unit)', NULL, '2013-10-11 23:56:57', NULL, 'admin'),
(2, 1, 4, 'Periksa Data', 'Periksa Data', NULL, '2013-10-09 23:41:06', NULL, 'admin'),
(2, 2, 1, 'Pengambilan sampel gas', 'Pengambilan sampel gas', NULL, '2013-10-12 00:25:04', NULL, 'admin'),
(2, 2, 3, 'Workstation Lease (3 units)', 'Workstation Lease (3 units)', NULL, '2013-10-11 23:57:26', NULL, 'admin'),
(2, 3, 1, 'Analisa gas', 'Analisa gas', NULL, '2013-10-12 00:25:28', NULL, 'admin'),
(2, 3, 3, 'Analisa + Laporan XRD 30-50 sampel', 'Analisa + Laporan XRD 30-50 sampel', NULL, '2013-10-11 23:57:49', NULL, 'admin'),
(3, 1, 1, 'Persiapan', 'Persiapan', NULL, '2013-10-12 00:24:44', NULL, 'admin'),
(3, 1, 3, 'Vehicles Fuel', 'Vehicles Fuel', NULL, '2013-10-11 23:56:57', NULL, 'admin'),
(3, 1, 4, 'Quality Control', 'Quality Control', NULL, '2013-10-09 23:41:06', NULL, 'admin'),
(3, 2, 1, 'Pengambilan sampel tanah dan udara tanah', 'Pengambilan sampel tanah dan udara tanah', NULL, '2013-10-12 00:25:04', NULL, 'admin'),
(3, 2, 3, 'Geological Equipment Rent (4 set)', 'Geological Equipment Rent (4 set)', NULL, '2013-10-11 23:57:26', NULL, 'admin'),
(3, 2, 4, 'Percobaan Detail 5', 'Test4', NULL, '2013-10-09 23:42:54', NULL, 'admin'),
(3, 3, 1, 'Analisa isotop', 'Analisa isotop', NULL, '2013-10-12 00:25:28', NULL, 'admin'),
(3, 3, 3, 'Analisa+ Laporan umur radiometri C14 dan/atau  Ar/Ar ', 'Analisa+ Laporan umur radiometri C14 dan/atau  Ar/Ar ', NULL, '2013-10-11 23:57:49', NULL, 'admin'),
(4, 1, 3, 'Personnel Life and Accident Insurances', 'Personnel Life and Accident Insurances', NULL, '2013-10-11 23:56:57', NULL, 'admin'),
(4, 2, 3, 'Field Work Consumables*', 'Field Work Consumables*', NULL, '2013-10-11 23:57:26', NULL, 'admin'),
(4, 3, 3, 'Integrasi seluruh data dan data literatur', 'Integrasi seluruh data dan data literatur', NULL, '2013-10-11 23:57:49', NULL, 'admin'),
(5, 1, 3, 'Accomodation and Living Cost', 'Accomodation and Living Cost', NULL, '2013-10-11 23:56:57', NULL, 'admin'),
(5, 1, 4, 'Penentuan  traverse dan lokasi sampling', 'Penentuan  traverse dan lokasi sampling', NULL, '2013-10-09 23:41:07', NULL, 'admin'),
(5, 2, 3, 'ASD FieldSpec Rent', 'ASD FieldSpec Rent', NULL, '2013-10-11 23:57:26', NULL, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `trans_planning`
--

CREATE TABLE `trans_planning` (
  `id_planning` int(10) NOT NULL,
  `id_project` int(10) NOT NULL,
  `id_pekerjaan` int(10) NOT NULL,
  `id_detail` int(10) NOT NULL,
  `m1` char(1) DEFAULT NULL,
  `m2` char(1) DEFAULT NULL,
  `m3` char(1) DEFAULT NULL,
  `m4` char(1) DEFAULT NULL,
  `m5` char(1) DEFAULT NULL,
  `m6` char(1) DEFAULT NULL,
  `m7` char(1) DEFAULT NULL,
  `m8` char(1) DEFAULT NULL,
  `m9` char(1) DEFAULT NULL,
  `m10` char(1) DEFAULT NULL,
  `m11` char(1) DEFAULT NULL,
  `m12` char(1) DEFAULT NULL,
  `output1` text,
  `m13` char(1) DEFAULT NULL,
  `m14` char(1) DEFAULT NULL,
  `m15` char(1) DEFAULT NULL,
  `m16` char(1) DEFAULT NULL,
  `m17` char(1) DEFAULT NULL,
  `m18` char(1) DEFAULT NULL,
  `m19` char(1) DEFAULT NULL,
  `m20` char(1) DEFAULT NULL,
  `m21` char(1) DEFAULT NULL,
  `m22` char(1) DEFAULT NULL,
  `m24` char(1) DEFAULT NULL,
  `m25` char(1) DEFAULT NULL,
  `output2` text,
  `m26` char(1) DEFAULT NULL,
  `m27` char(1) DEFAULT NULL,
  `m28` char(1) DEFAULT NULL,
  `m29` char(1) DEFAULT NULL,
  `m30` char(1) DEFAULT NULL,
  `m31` char(1) DEFAULT NULL,
  `m32` char(1) DEFAULT NULL,
  `m34` char(1) DEFAULT NULL,
  `m35` char(1) DEFAULT NULL,
  `m36` char(1) DEFAULT NULL,
  `m37` char(1) DEFAULT NULL,
  `m38` char(1) DEFAULT NULL,
  `output3` text,
  `m39` char(1) DEFAULT NULL,
  `m40` char(1) DEFAULT NULL,
  `m41` char(1) DEFAULT NULL,
  `m42` char(1) DEFAULT NULL,
  `m43` char(1) DEFAULT NULL,
  `m44` char(1) DEFAULT NULL,
  `m45` char(1) DEFAULT NULL,
  `m46` char(1) DEFAULT NULL,
  `m47` char(1) DEFAULT NULL,
  `m48` char(1) DEFAULT NULL,
  `m49` char(1) DEFAULT NULL,
  `m51` char(1) DEFAULT NULL,
  `m52` char(1) DEFAULT NULL,
  `output4` text,
  `keterangan` text,
  `add_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `add_user` varchar(50) DEFAULT NULL,
  `modified_user` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans_planning`
--

INSERT INTO `trans_planning` (`id_planning`, `id_project`, `id_pekerjaan`, `id_detail`, `m1`, `m2`, `m3`, `m4`, `m5`, `m6`, `m7`, `m8`, `m9`, `m10`, `m11`, `m12`, `output1`, `m13`, `m14`, `m15`, `m16`, `m17`, `m18`, `m19`, `m20`, `m21`, `m22`, `m24`, `m25`, `output2`, `m26`, `m27`, `m28`, `m29`, `m30`, `m31`, `m32`, `m34`, `m35`, `m36`, `m37`, `m38`, `output3`, `m39`, `m40`, `m41`, `m42`, `m43`, `m44`, `m45`, `m46`, `m47`, `m48`, `m49`, `m51`, `m52`, `output4`, `keterangan`, `add_date`, `modified_date`, `add_user`, `modified_user`) VALUES
(1, 4, 1, 2, 'Y', 'Y', 'Y', 'Y', 'Y', '', NULL, NULL, NULL, NULL, NULL, NULL, 'coba', 'Y', 'Y', 'Y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquam viverra dui eu\nullamcorper. Vestibulum id mi eros. Aenean non placerat erat. Suspendisse eu leo elit.\nPellentesque elit velit, luctus vitae fermentum quis, cursus non ipsum. Suspendisse justo\ndolor, porta quis pharetra molestie, auctor quis metus.', '2013-10-11 15:05:27', '2013-10-24 21:40:47', 'admin', 'admin'),
(2, 4, 1, 3, 'Y', 'Y', 'Y', NULL, 'Y', 'Y', NULL, NULL, NULL, 'Y', '', 'Y', 'Sesuatu Percobaan Saja', 'Y', 'Y', 'Y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquam viverra dui eu\nullamcorper. Vestibulum id mi eros. Aenean non placerat erat. Suspendisse eu leo elit.\nPellentesque elit velit, luctus vitae fermentum quis, cursus non ipsum. Suspendisse justo\ndolor, porta quis pharetra molestie, auctor quis metus.', '2013-10-11 15:05:32', '2013-10-12 11:34:42', 'admin', 'admin'),
(3, 4, 1, 5, 'Y', 'Y', NULL, NULL, 'Y', NULL, NULL, 'Y', NULL, NULL, 'Y', NULL, 'ok saja', 'Y', 'Y', 'Y', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquam viverra dui eu\nullamcorper. Vestibulum id mi eros. Aenean non placerat erat. Suspendisse eu leo elit.\nPellentesque elit velit, luctus vitae fermentum quis, cursus non ipsum. Suspendisse justo\ndolor, porta quis pharetra molestie, auctor quis metus.', '2013-10-11 15:05:46', '2013-10-11 23:53:38', 'admin', 'admin'),
(4, 4, 2, 1, 'Y', 'Y', NULL, NULL, 'Y', NULL, NULL, NULL, NULL, NULL, 'Y', 'Y', 'Ok lah', 'Y', 'Y', 'Y', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'okhjghhghg', '2013-10-11 15:05:55', '2013-10-12 11:34:53', 'admin', 'admin'),
(5, 4, 2, 3, 'Y', 'Y', NULL, NULL, NULL, NULL, NULL, 'Y', NULL, NULL, 'Y', 'Y', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquam viverra dui eu\nullamcorper. Vestibulum id mi eros. Aenean non placerat erat. Suspendisse eu leo elit.\nPellentesque elit velit, luctus vitae fermentum quis, cursus non ipsum. Suspendisse justo\ndolor, porta quis pharetra molestie, auctor quis metus.', 'Y', 'Y', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Percobaan Data', 'Testing', '2013-10-11 15:05:57', '2013-10-11 23:52:05', 'admin', 'admin'),
(6, 3, 1, 1, 'Y', 'Y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquam viverra dui eu\nullamcorper. Vestibulum id mi eros. Aenean non placerat erat. Suspendisse eu leo elit.\nPellentesque elit velit, luctus vitae fermentum quis, cursus non ipsum. Suspendisse justo\ndolor, porta quis pharetra molestie, auctor quis metus.', '2013-10-12 00:12:27', '2013-10-12 00:22:47', 'admin', 'admin'),
(7, 3, 1, 2, 'Y', 'Y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2013-10-12 00:12:33', '2013-10-12 00:12:46', 'admin', 'admin'),
(8, 3, 1, 3, 'Y', 'Y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2013-10-12 00:12:35', '2013-10-12 00:12:48', 'admin', 'admin'),
(9, 3, 1, 4, 'Y', 'Y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2013-10-12 00:12:37', '2013-10-12 00:12:50', 'admin', 'admin'),
(10, 3, 1, 5, 'Y', 'Y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2013-10-12 00:12:39', '2013-10-12 00:12:51', 'admin', 'admin'),
(11, 3, 2, 1, '', 'Y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2013-10-12 00:12:41', '2013-10-12 00:13:07', 'admin', 'admin'),
(12, 1, 1, 1, 'Y', 'Y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquam viverra dui eu\nullamcorper. Vestibulum id mi eros.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2013-10-12 00:27:01', '2013-10-12 00:27:49', 'admin', 'admin'),
(13, 1, 1, 2, 'Y', 'Y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet,', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2013-10-12 00:27:04', '2013-10-12 00:28:32', 'admin', 'admin'),
(14, 1, 1, 3, 'Y', 'Y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet,', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2013-10-12 00:27:06', '2013-10-12 00:28:30', 'admin', 'admin'),
(15, 1, 2, 1, 'Y', 'Y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet,', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2013-10-12 00:27:08', '2013-10-12 00:28:29', 'admin', 'admin'),
(16, 1, 2, 2, 'Y', 'Y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet,', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2013-10-12 00:27:10', '2013-10-12 00:28:27', 'admin', 'admin'),
(17, 1, 2, 3, 'Y', 'Y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet,', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2013-10-12 00:27:12', '2013-10-12 00:28:26', 'admin', 'admin'),
(18, 1, 3, 1, 'Y', 'Y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet,', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2013-10-12 00:27:13', '2013-10-12 00:28:11', 'admin', 'admin'),
(19, 1, 3, 2, 'Y', 'Y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet,', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2013-10-12 00:27:15', '2013-10-12 00:28:14', 'admin', 'admin'),
(20, 1, 3, 3, 'Y', 'Y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet,', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2013-10-12 00:27:17', '2013-10-12 00:28:15', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `trans_projectplan`
--

CREATE TABLE `trans_projectplan` (
  `id_set` int(10) NOT NULL,
  `id_project` int(10) NOT NULL,
  `header_job` varchar(100) DEFAULT NULL,
  `detail_job` varchar(100) DEFAULT NULL,
  `id_komponen` int(10) DEFAULT NULL,
  `anggaran` double DEFAULT NULL,
  `m01` char(1) DEFAULT NULL,
  `m02` char(1) DEFAULT NULL,
  `m03` char(1) DEFAULT NULL,
  `m04` char(1) DEFAULT NULL,
  `m05` char(1) DEFAULT NULL,
  `m06` char(1) DEFAULT NULL,
  `m07` char(1) DEFAULT NULL,
  `m08` char(1) DEFAULT NULL,
  `m09` char(1) DEFAULT NULL,
  `m10` char(1) DEFAULT NULL,
  `m11` char(1) DEFAULT NULL,
  `m12` char(1) DEFAULT NULL,
  `output1` text,
  `m13` char(1) DEFAULT NULL,
  `m14` char(1) DEFAULT NULL,
  `m15` char(1) DEFAULT NULL,
  `m16` char(1) DEFAULT NULL,
  `m17` char(1) DEFAULT NULL,
  `m18` char(1) DEFAULT NULL,
  `m19` char(1) DEFAULT NULL,
  `m20` char(1) DEFAULT NULL,
  `m21` char(1) DEFAULT NULL,
  `m22` char(1) DEFAULT NULL,
  `m24` char(1) DEFAULT NULL,
  `m25` char(1) DEFAULT NULL,
  `output2` text,
  `m26` char(1) DEFAULT NULL,
  `m27` char(1) DEFAULT NULL,
  `m28` char(1) DEFAULT NULL,
  `m29` char(1) DEFAULT NULL,
  `m30` char(1) DEFAULT NULL,
  `m31` char(1) DEFAULT NULL,
  `m32` char(1) DEFAULT NULL,
  `m34` char(1) DEFAULT NULL,
  `m35` char(1) DEFAULT NULL,
  `m36` char(1) DEFAULT NULL,
  `m37` char(1) DEFAULT NULL,
  `m38` char(1) DEFAULT NULL,
  `output3` text,
  `m39` char(1) DEFAULT NULL,
  `m40` char(1) DEFAULT NULL,
  `m41` char(1) DEFAULT NULL,
  `m42` char(1) DEFAULT NULL,
  `m43` char(1) DEFAULT NULL,
  `m44` char(1) DEFAULT NULL,
  `m45` char(1) DEFAULT NULL,
  `m46` char(1) DEFAULT NULL,
  `m47` char(1) DEFAULT NULL,
  `m48` char(1) DEFAULT NULL,
  `m49` char(1) DEFAULT NULL,
  `m51` char(1) DEFAULT NULL,
  `m52` char(1) DEFAULT NULL,
  `output4` text,
  `keterangan` text,
  `add_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `add_user` varchar(50) DEFAULT NULL,
  `modified_user` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trans_realisasi`
--

CREATE TABLE `trans_realisasi` (
  `id_realisasi` int(10) NOT NULL,
  `id_project` int(10) NOT NULL,
  `id_pekerjaan` int(10) NOT NULL,
  `id_detail` int(10) NOT NULL,
  `m1` char(1) DEFAULT NULL,
  `m2` char(1) DEFAULT NULL,
  `m3` char(1) DEFAULT NULL,
  `m4` char(1) DEFAULT NULL,
  `m5` char(1) DEFAULT NULL,
  `m6` char(1) DEFAULT NULL,
  `m7` char(1) DEFAULT NULL,
  `m8` char(1) DEFAULT NULL,
  `m9` char(1) DEFAULT NULL,
  `m10` char(1) DEFAULT NULL,
  `m11` char(1) DEFAULT NULL,
  `m12` char(1) DEFAULT NULL,
  `output1` text,
  `m13` char(1) DEFAULT NULL,
  `m14` char(1) DEFAULT NULL,
  `m15` char(1) DEFAULT NULL,
  `m16` char(1) DEFAULT NULL,
  `m17` char(1) DEFAULT NULL,
  `m18` char(1) DEFAULT NULL,
  `m19` char(1) DEFAULT NULL,
  `m20` char(1) DEFAULT NULL,
  `m21` char(1) DEFAULT NULL,
  `m22` char(1) DEFAULT NULL,
  `m24` char(1) DEFAULT NULL,
  `m25` char(1) DEFAULT NULL,
  `output2` text,
  `m26` char(1) DEFAULT NULL,
  `m27` char(1) DEFAULT NULL,
  `m28` char(1) DEFAULT NULL,
  `m29` char(1) DEFAULT NULL,
  `m30` char(1) DEFAULT NULL,
  `m31` char(1) DEFAULT NULL,
  `m32` char(1) DEFAULT NULL,
  `m34` char(1) DEFAULT NULL,
  `m35` char(1) DEFAULT NULL,
  `m36` char(1) DEFAULT NULL,
  `m37` char(1) DEFAULT NULL,
  `m38` char(1) DEFAULT NULL,
  `output3` text,
  `m39` char(1) DEFAULT NULL,
  `m40` char(1) DEFAULT NULL,
  `m41` char(1) DEFAULT NULL,
  `m42` char(1) DEFAULT NULL,
  `m43` char(1) DEFAULT NULL,
  `m44` char(1) DEFAULT NULL,
  `m45` char(1) DEFAULT NULL,
  `m46` char(1) DEFAULT NULL,
  `m47` char(1) DEFAULT NULL,
  `m48` char(1) DEFAULT NULL,
  `m49` char(1) DEFAULT NULL,
  `m51` char(1) DEFAULT NULL,
  `m52` char(1) DEFAULT NULL,
  `output4` text,
  `keterangan` text,
  `add_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `add_user` varchar(50) DEFAULT NULL,
  `modified_user` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans_realisasi`
--

INSERT INTO `trans_realisasi` (`id_realisasi`, `id_project`, `id_pekerjaan`, `id_detail`, `m1`, `m2`, `m3`, `m4`, `m5`, `m6`, `m7`, `m8`, `m9`, `m10`, `m11`, `m12`, `output1`, `m13`, `m14`, `m15`, `m16`, `m17`, `m18`, `m19`, `m20`, `m21`, `m22`, `m24`, `m25`, `output2`, `m26`, `m27`, `m28`, `m29`, `m30`, `m31`, `m32`, `m34`, `m35`, `m36`, `m37`, `m38`, `output3`, `m39`, `m40`, `m41`, `m42`, `m43`, `m44`, `m45`, `m46`, `m47`, `m48`, `m49`, `m51`, `m52`, `output4`, `keterangan`, `add_date`, `modified_date`, `add_user`, `modified_user`) VALUES
(21, 3, 1, 1, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Lorem ipsum dolor sit amet,', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2013-10-12 09:45:09', '2013-10-12 09:46:12', 'admin', 'admin'),
(22, 3, 1, 2, 'Y', 'Y', 'Y', 'Y', '', 'Y', NULL, NULL, NULL, NULL, NULL, NULL, 'Test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2013-10-12 09:45:29', '2013-10-15 19:19:49', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `trans_surat`
--

CREATE TABLE `trans_surat` (
  `id_surat` int(10) NOT NULL,
  `fk_id` varchar(100) NOT NULL COMMENT 'foreign key surat',
  `no_agenda` varchar(100) NOT NULL COMMENT 'auto generate',
  `no_surat` varchar(100) DEFAULT NULL COMMENT 'manual',
  `no_urut` int(10) DEFAULT NULL,
  `tanggal` date DEFAULT NULL COMMENT 'tanggal dibuat',
  `tanggal_klarifikasi` date DEFAULT NULL,
  `asal_surat` varchar(200) DEFAULT NULL COMMENT 'manual',
  `lampiran` varchar(200) DEFAULT NULL COMMENT 'manual',
  `kode_arsip` varchar(100) DEFAULT NULL COMMENT 'manual',
  `tunjuk_silang` varchar(200) DEFAULT NULL COMMENT 'manual',
  `jadwal_penyusutan` varchar(100) DEFAULT NULL COMMENT 'manual',
  `tempat_penyimpanan` varchar(200) DEFAULT NULL COMMENT 'manual',
  `indeks` text COMMENT 'manual',
  `hal` text COMMENT 'manual',
  `catatan` text,
  `lama_penyelesaian` date DEFAULT NULL COMMENT 'hari ini, 1-2 hari, 5 hari',
  `tanggal_penyelesaian` date DEFAULT NULL COMMENT 'menjumlah : tanggal + lama_penyelasaian',
  `file_surat` varchar(200) DEFAULT NULL COMMENT 'file atatched',
  `id_group` int(10) DEFAULT NULL COMMENT 'alamat aksi',
  `id_staff` int(10) DEFAULT NULL COMMENT 'orang tujuan',
  `id_sifat` int(10) DEFAULT NULL,
  `id_jenissurat` int(10) DEFAULT NULL,
  `id_aksi` int(10) DEFAULT NULL,
  `status_disposisi` int(1) DEFAULT NULL COMMENT 'Status telah/belum di diposisikan',
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `add_user` varchar(200) DEFAULT NULL,
  `modified_user` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans_surat`
--

INSERT INTO `trans_surat` (`id_surat`, `fk_id`, `no_agenda`, `no_surat`, `no_urut`, `tanggal`, `tanggal_klarifikasi`, `asal_surat`, `lampiran`, `kode_arsip`, `tunjuk_silang`, `jadwal_penyusutan`, `tempat_penyimpanan`, `indeks`, `hal`, `catatan`, `lama_penyelesaian`, `tanggal_penyelesaian`, `file_surat`, `id_group`, `id_staff`, `id_sifat`, `id_jenissurat`, `id_aksi`, `status_disposisi`, `add_date`, `modified_date`, `add_user`, `modified_user`) VALUES
(3, 'aa9cb1651abe4442092733bd74801437', '1/001/DPP/G/2013', '96754455', NULL, '2013-08-15', '2013-08-20', 'Kementerian Hukum', 'Ada', NULL, NULL, NULL, NULL, NULL, 'Percobaan Entri Data Dummy...', 'Percobaan Entri Data Dummy...', NULL, NULL, '5c6d3e7e247074d59caaeb81e6585363.pdf', 0, 2, 1, 1, 1, 0, '2013-10-24 22:01:22', '2013-08-27 21:41:03', 'admin', NULL),
(4, '4cb15b60fb9f5772750fca20e0c32943', '2/001/DPP/G/2013', '77807667', NULL, '2013-08-16', '2013-08-20', 'Kejaksaan Agung', 'Ada', NULL, NULL, NULL, NULL, NULL, 'Percobaan Entri Data Dummy...', 'Percobaan Entri Data Dummy...', NULL, NULL, '5c6d3e7e247074d59caaeb81e6585363.pdf', 0, 2, 1, 1, 1, 0, '2013-10-24 22:01:24', '2013-08-27 21:43:34', 'admin', NULL),
(5, '119c2b19b5c24a62c2f41da3b9f094a9', '3/001/DPP/G/2013', '7878787', NULL, '2013-08-29', '2013-08-20', 'Kementerian Lingkugna Hidup', 'Ada', NULL, NULL, NULL, NULL, NULL, 'Percobaan Entri Data Dummy...', 'Percobaan Entri Data Dummy...', NULL, NULL, '5c6d3e7e247074d59caaeb81e6585363.pdf', 0, 2, 1, 1, 1, 0, '2013-10-24 22:01:21', '2013-08-27 21:47:38', 'admin', NULL),
(6, 'e4f27640ea548f4cc7a710e014f33eb9', '4/001/DPP/2013', '111978675', NULL, '2013-08-08', '2013-08-16', 'Kementerian Kelautan', 'Ada', NULL, NULL, NULL, NULL, NULL, 'Percobaan Entri Data Dummy...', 'Percobaan Entri Data Dummy...', NULL, NULL, '5c6d3e7e247074d59caaeb81e6585363.pdf', 13, 2, 1, 1, 7, 0, '2013-10-24 22:01:20', '2013-08-27 21:50:16', 'admin', NULL),
(7, '5c6d3e7e247074d59caaeb81e6585363', '5/001/DPP/G/2013', '076656565', NULL, '2013-08-06', '2013-08-28', 'Perwakilan Daerah', 'Ada', NULL, NULL, NULL, NULL, NULL, 'Percobaan Entri Data Dummy...', 'Percobaan Entri Data Dummy...', NULL, NULL, '5c6d3e7e247074d59caaeb81e6585363.pdf', 0, 2, 1, 1, 1, 2, '2013-11-10 12:38:15', '2013-08-27 21:52:29', 'admin', NULL),
(8, 'c4170e83cecfb2d658e5aeeff059bd94', '6/001/DPP/P2K/2013', '65678876', NULL, '2013-08-13', '2013-08-20', 'LSM Karya Alam', 'Ada', NULL, NULL, NULL, NULL, NULL, 'Percobaan Entri Data Dummy...', 'Percobaan Entri Data Dummy...', NULL, NULL, '5c6d3e7e247074d59caaeb81e6585363.pdf', 19, 2, 1, 1, 1, 0, '2013-10-24 22:01:18', '2013-08-27 21:53:12', 'admin', NULL),
(9, 'a41aeaeb791a3c9a1473a9c4477a6e95', '7/001/DPP/2013', 'B77541654', NULL, '2013-08-15', '2013-08-21', 'Dharma Wanita', 'Tidak Ada', NULL, NULL, NULL, NULL, NULL, 'Percobaan Data', 'Percobaan Data', NULL, NULL, '5c6d3e7e247074d59caaeb81e6585363.pdf', 13, 3, 1, 1, 1, 0, '2013-10-24 22:01:18', '2013-08-27 22:40:41', 'admin', NULL),
(10, '5c6d3e7e247074d59caaeb81e6585363', '8/001/DPP/G/2013', '076656565', NULL, '2013-08-06', '2013-08-28', 'Perwakilan Daerah', 'Ada', NULL, 'Rudi Sudarwo', 'Oktober', 'Gudang Terbuka', 'Testing', 'Percobaan Entri Data Dummy...', 'Percobaan Entri Data Dummy...', NULL, NULL, '5c6d3e7e247074d59caaeb81e6585363.pdf', 0, 2, 1, 1, 1, 3, '2013-10-24 22:00:19', '2013-08-28 00:03:46', 'admin', NULL),
(11, 'efb00dac58d4a7c89ed7e7d0036ae467', '9/001/DPP/DPK/2013', '', NULL, '0000-00-00', '0000-00-00', 'kementerian ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg', 'Ada', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, 16, 2, 1, 1, 0, 0, '2013-10-24 22:17:02', '2013-10-25 12:17:02', 'admin', NULL),
(12, 'c4498576af641bb845b0a4de3ec0a93a', '10/001/DPP/2013', 'S-2635/AG/2013', NULL, '2013-10-21', '2013-10-24', 'Ditjen Anggaran Kemnkeu', 'Ada', NULL, NULL, NULL, NULL, NULL, 'Rapat kemnkeu', 'siapkan bahan', NULL, NULL, '', 13, 2, 1, 1, 1, 0, '2013-10-30 15:19:26', '2013-10-31 05:19:26', 'admin', NULL),
(13, 'e979f3f3ef2f1b6eeb99f24b4be9bd54', '11/001/DPP/G/2013', '23/ESDM/X/2013', NULL, '2013-10-14', '2013-10-16', 'Sekjen ESDM', 'Ada', NULL, NULL, NULL, NULL, NULL, 'Konfirmasi dokumen yang akan dirapatkan dengan pihak DPR.', '', NULL, NULL, 'e979f3f3ef2f1b6eeb99f24b4be9bd54.pdf', 0, 2, 1, 1, 0, 1, '2013-11-10 10:29:45', '2013-11-10 10:17:18', 'admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trans_suratkeluar`
--

CREATE TABLE `trans_suratkeluar` (
  `id_surat` int(10) NOT NULL,
  `id_staff` int(10) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `no_agenda` varchar(100) DEFAULT NULL,
  `tanggal_buat` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `file_surat` varchar(225) DEFAULT NULL,
  `perihal` text,
  `catatan` text,
  `id_aksi` int(10) DEFAULT NULL,
  `id_sifat` int(10) DEFAULT NULL,
  `id_jenissurat` int(10) DEFAULT NULL,
  `lampiran` varchar(100) DEFAULT NULL,
  `status_keluar` int(11) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `add_user` varchar(100) DEFAULT NULL,
  `modified_user` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans_suratkeluar`
--

INSERT INTO `trans_suratkeluar` (`id_surat`, `id_staff`, `no_surat`, `no_agenda`, `tanggal_buat`, `tanggal_selesai`, `file_surat`, `perihal`, `catatan`, `id_aksi`, `id_sifat`, `id_jenissurat`, `lampiran`, `status_keluar`, `add_date`, `modified_date`, `add_user`, `modified_user`) VALUES
(1, 8, 'STAFF01', '9/001/DPP/DPA/2013', '2013-10-23', '2013-10-15', 'c4170e83cecfb2d658e5aeeff059bd94.pdf', 'Testing Data', 'Percobaan Data', 1, 1, 1, 'Ada', 1, '2013-10-23 21:36:42', NULL, 'staff', NULL),
(2, 8, 'STAFF02', '9/001/DPP/DPA/2013', '2013-10-16', '2013-10-18', 'c4170e83cecfb2d658e5aeeff059bd94.pdf', 'test', 'Percobaan Data', 1, 1, 1, 'Ada', 1, '2013-10-23 21:53:06', NULL, 'staff', NULL),
(3, 8, 'STAFF03SURAT', '9/001/DPP/DPA/2013', '2013-10-24', '2013-10-26', 'c4170e83cecfb2d658e5aeeff059bd94.pdf', 'Coba Saja', 'Percobaan Data', 1, 1, 1, 'Ada', 1, '2013-10-23 21:53:27', NULL, 'staff', NULL),
(4, 8, 'STYHH', '9/001/DPP/DPA/2013', '2013-10-15', '2013-10-02', '7bf72c89294645c8f750aebe1d38ad61.pdf', 'test', 'test', 0, 1, 1, 'Ada', 1, '2013-10-24 23:04:14', NULL, 'staff', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trans_wilayah`
--

CREATE TABLE `trans_wilayah` (
  `id_project` int(10) NOT NULL,
  `kode_project` varchar(50) NOT NULL,
  `id_survey` int(10) DEFAULT NULL,
  `id_perusahaan` int(10) DEFAULT NULL,
  `tanggal_awal` date DEFAULT NULL,
  `tanggal_akhir` date DEFAULT NULL,
  `nama_daerah` varchar(100) DEFAULT NULL,
  `kota_id` int(11) DEFAULT NULL,
  `luas_wilayah` varchar(50) DEFAULT NULL,
  `sumber_daya` int(11) DEFAULT NULL,
  `cadangan` int(11) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `sk_menteri` varchar(50) DEFAULT NULL,
  `keterangan` text,
  `add_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `add_user` varchar(50) DEFAULT NULL,
  `modified_user` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans_wilayah`
--

INSERT INTO `trans_wilayah` (`id_project`, `kode_project`, `id_survey`, `id_perusahaan`, `tanggal_awal`, `tanggal_akhir`, `nama_daerah`, `kota_id`, `luas_wilayah`, `sumber_daya`, `cadangan`, `status`, `sk_menteri`, `keterangan`, `add_date`, `modified_date`, `add_user`, `modified_user`) VALUES
(1, 'PRO001', 2, 8, '2013-10-01', '2013-10-31', 'Sawah Lunto', 8, '89Ha', 1, 1, 'N', '', 'Test data', '2013-10-05 14:31:54', NULL, 'admin', NULL),
(3, 'PRO003', 2, 8, '2013-10-10', '2013-10-30', 'Percobaan', 33, '9', 9, 9, 'Y', '09882265643676', 'PRO003', '2013-10-05 14:34:54', '2013-10-12 09:37:17', 'admin', 'admin'),
(4, 'PRO004', 4, 8, '2013-10-08', '2013-10-24', 'Karawang', 170, '89Ha', 1, 1, 'N', '', '', '2013-10-08 21:08:50', NULL, 'admin', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mst_aksisurat`
--
ALTER TABLE `mst_aksisurat`
  ADD PRIMARY KEY (`id_aksi`,`kode_aksi`),
  ADD UNIQUE KEY `id_aksi` (`id_aksi`);

--
-- Indexes for table `mst_content`
--
ALTER TABLE `mst_content`
  ADD PRIMARY KEY (`id_content`);

--
-- Indexes for table `mst_dokumen`
--
ALTER TABLE `mst_dokumen`
  ADD PRIMARY KEY (`id_dokumen`,`id_kategori`),
  ADD UNIQUE KEY `id_dokumen` (`id_dokumen`);

--
-- Indexes for table `mst_dokumenkat`
--
ALTER TABLE `mst_dokumenkat`
  ADD PRIMARY KEY (`id_kategori`,`kode_kategori`),
  ADD UNIQUE KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `mst_dokumenlog`
--
ALTER TABLE `mst_dokumenlog`
  ADD PRIMARY KEY (`id_log`,`id_dokumen`);

--
-- Indexes for table `mst_feedback`
--
ALTER TABLE `mst_feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Indexes for table `mst_group`
--
ALTER TABLE `mst_group`
  ADD PRIMARY KEY (`id_group`,`header_group`,`kode_group`),
  ADD UNIQUE KEY `id_group` (`id_group`);

--
-- Indexes for table `mst_jabatan`
--
ALTER TABLE `mst_jabatan`
  ADD PRIMARY KEY (`id_jabatan`,`kode_jabatan`),
  ADD UNIQUE KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `mst_jenis`
--
ALTER TABLE `mst_jenis`
  ADD PRIMARY KEY (`id_jenissurat`,`kode_jenis`);

--
-- Indexes for table `mst_jenispekerjaan`
--
ALTER TABLE `mst_jenispekerjaan`
  ADD PRIMARY KEY (`id_jenispekerjaan`,`kode_jenispekerjaan`),
  ADD UNIQUE KEY `id_jenispekerjaan` (`id_jenispekerjaan`);

--
-- Indexes for table `mst_jenissurvey`
--
ALTER TABLE `mst_jenissurvey`
  ADD PRIMARY KEY (`id_jenissurvey`,`kode_jenissurvey`),
  ADD UNIQUE KEY `id_jenissurvey` (`id_jenissurvey`);

--
-- Indexes for table `mst_komponenbiaya`
--
ALTER TABLE `mst_komponenbiaya`
  ADD PRIMARY KEY (`id_komponen`,`kode_komponen`),
  ADD UNIQUE KEY `id_komponen` (`id_komponen`);

--
-- Indexes for table `mst_kota`
--
ALTER TABLE `mst_kota`
  ADD PRIMARY KEY (`kota_id`),
  ADD KEY `kota_id` (`propinsi_id`);

--
-- Indexes for table `mst_link`
--
ALTER TABLE `mst_link`
  ADD PRIMARY KEY (`id_link`);

--
-- Indexes for table `mst_news`
--
ALTER TABLE `mst_news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `mst_perusahaan`
--
ALTER TABLE `mst_perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`,`npwp`),
  ADD UNIQUE KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indexes for table `mst_propinsi`
--
ALTER TABLE `mst_propinsi`
  ADD PRIMARY KEY (`propinsi_id`);

--
-- Indexes for table `mst_sifatsurat`
--
ALTER TABLE `mst_sifatsurat`
  ADD PRIMARY KEY (`id_sifat`,`kode_sifat`);

--
-- Indexes for table `mst_staff`
--
ALTER TABLE `mst_staff`
  ADD PRIMARY KEY (`id_staff`,`no_induk`),
  ADD UNIQUE KEY `id_staff` (`id_staff`);

--
-- Indexes for table `mst_statussurat`
--
ALTER TABLE `mst_statussurat`
  ADD PRIMARY KEY (`id_status`,`kode_status`),
  ADD UNIQUE KEY `id_status` (`id_status`);

--
-- Indexes for table `mst_subgroup`
--
ALTER TABLE `mst_subgroup`
  ADD PRIMARY KEY (`id_subgroup`,`header_subgroup`,`kode_subgroup`),
  ADD UNIQUE KEY `id_subgroup` (`id_subgroup`);

--
-- Indexes for table `mst_tujuansurat`
--
ALTER TABLE `mst_tujuansurat`
  ADD PRIMARY KEY (`id_tujuan`,`kode_tujuan`);

--
-- Indexes for table `mst_user`
--
ALTER TABLE `mst_user`
  ADD PRIMARY KEY (`id_user`,`username`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `trans_disposisi`
--
ALTER TABLE `trans_disposisi`
  ADD PRIMARY KEY (`id_disposisi`,`id_surat`,`id_staff`),
  ADD UNIQUE KEY `id_disposisi` (`id_disposisi`);

--
-- Indexes for table `trans_keluar`
--
ALTER TABLE `trans_keluar`
  ADD PRIMARY KEY (`id_keluar`,`id_surat`,`id_staff`),
  ADD UNIQUE KEY `id_keluar` (`id_keluar`);

--
-- Indexes for table `trans_pekerjaan`
--
ALTER TABLE `trans_pekerjaan`
  ADD PRIMARY KEY (`id_project`,`id_pekerjaan`),
  ADD UNIQUE KEY `id_pekerjaan` (`id_pekerjaan`,`id_project`);

--
-- Indexes for table `trans_pekerjaanbiaya`
--
ALTER TABLE `trans_pekerjaanbiaya`
  ADD PRIMARY KEY (`id_biaya`,`id_detail`,`id_pekerjaan`,`id_project`),
  ADD UNIQUE KEY `id_biaya` (`id_biaya`,`id_detail`,`id_pekerjaan`,`id_project`);

--
-- Indexes for table `trans_pekerjaandet`
--
ALTER TABLE `trans_pekerjaandet`
  ADD PRIMARY KEY (`id_detail`,`id_pekerjaan`,`id_project`),
  ADD UNIQUE KEY `id_detail` (`id_detail`,`id_pekerjaan`,`id_project`);

--
-- Indexes for table `trans_planning`
--
ALTER TABLE `trans_planning`
  ADD PRIMARY KEY (`id_planning`,`id_project`,`id_pekerjaan`,`id_detail`),
  ADD UNIQUE KEY `id_planning` (`id_planning`,`id_project`,`id_pekerjaan`,`id_detail`);

--
-- Indexes for table `trans_projectplan`
--
ALTER TABLE `trans_projectplan`
  ADD PRIMARY KEY (`id_set`,`id_project`),
  ADD UNIQUE KEY `id_set` (`id_set`);

--
-- Indexes for table `trans_realisasi`
--
ALTER TABLE `trans_realisasi`
  ADD PRIMARY KEY (`id_realisasi`,`id_project`,`id_pekerjaan`,`id_detail`),
  ADD UNIQUE KEY `id_realisasi` (`id_realisasi`,`id_project`,`id_pekerjaan`,`id_detail`);

--
-- Indexes for table `trans_surat`
--
ALTER TABLE `trans_surat`
  ADD PRIMARY KEY (`id_surat`,`fk_id`,`no_agenda`),
  ADD UNIQUE KEY `id_surat` (`id_surat`);

--
-- Indexes for table `trans_suratkeluar`
--
ALTER TABLE `trans_suratkeluar`
  ADD PRIMARY KEY (`id_surat`,`id_staff`,`no_surat`),
  ADD UNIQUE KEY `id_surat` (`id_surat`);

--
-- Indexes for table `trans_wilayah`
--
ALTER TABLE `trans_wilayah`
  ADD PRIMARY KEY (`id_project`,`kode_project`),
  ADD UNIQUE KEY `id_project` (`id_project`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mst_aksisurat`
--
ALTER TABLE `mst_aksisurat`
  MODIFY `id_aksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mst_dokumen`
--
ALTER TABLE `mst_dokumen`
  MODIFY `id_dokumen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `mst_dokumenkat`
--
ALTER TABLE `mst_dokumenkat`
  MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mst_dokumenlog`
--
ALTER TABLE `mst_dokumenlog`
  MODIFY `id_log` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `mst_feedback`
--
ALTER TABLE `mst_feedback`
  MODIFY `id_feedback` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mst_group`
--
ALTER TABLE `mst_group`
  MODIFY `id_group` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `mst_jabatan`
--
ALTER TABLE `mst_jabatan`
  MODIFY `id_jabatan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mst_jenis`
--
ALTER TABLE `mst_jenis`
  MODIFY `id_jenissurat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mst_jenispekerjaan`
--
ALTER TABLE `mst_jenispekerjaan`
  MODIFY `id_jenispekerjaan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mst_jenissurvey`
--
ALTER TABLE `mst_jenissurvey`
  MODIFY `id_jenissurvey` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mst_komponenbiaya`
--
ALTER TABLE `mst_komponenbiaya`
  MODIFY `id_komponen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mst_kota`
--
ALTER TABLE `mst_kota`
  MODIFY `kota_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=499;

--
-- AUTO_INCREMENT for table `mst_link`
--
ALTER TABLE `mst_link`
  MODIFY `id_link` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mst_news`
--
ALTER TABLE `mst_news`
  MODIFY `id_news` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mst_perusahaan`
--
ALTER TABLE `mst_perusahaan`
  MODIFY `id_perusahaan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mst_sifatsurat`
--
ALTER TABLE `mst_sifatsurat`
  MODIFY `id_sifat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mst_staff`
--
ALTER TABLE `mst_staff`
  MODIFY `id_staff` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mst_statussurat`
--
ALTER TABLE `mst_statussurat`
  MODIFY `id_status` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mst_subgroup`
--
ALTER TABLE `mst_subgroup`
  MODIFY `id_subgroup` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mst_tujuansurat`
--
ALTER TABLE `mst_tujuansurat`
  MODIFY `id_tujuan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mst_user`
--
ALTER TABLE `mst_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `trans_disposisi`
--
ALTER TABLE `trans_disposisi`
  MODIFY `id_disposisi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `trans_keluar`
--
ALTER TABLE `trans_keluar`
  MODIFY `id_keluar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `trans_planning`
--
ALTER TABLE `trans_planning`
  MODIFY `id_planning` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `trans_projectplan`
--
ALTER TABLE `trans_projectplan`
  MODIFY `id_set` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trans_realisasi`
--
ALTER TABLE `trans_realisasi`
  MODIFY `id_realisasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `trans_surat`
--
ALTER TABLE `trans_surat`
  MODIFY `id_surat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `trans_suratkeluar`
--
ALTER TABLE `trans_suratkeluar`
  MODIFY `id_surat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trans_wilayah`
--
ALTER TABLE `trans_wilayah`
  MODIFY `id_project` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
