-- phpMyAdmin SQL Dump
-- version 3.3.2deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 16, 2011 at 04:57 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.2-1ubuntu4.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `siemas`
--

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE IF NOT EXISTS `antrian` (
  `id_antrian` int(11) NOT NULL AUTO_INCREMENT,
  `status` enum('ANTRI','SEDANG DIPROSES','SELESAI','TUNDA','TERISI') DEFAULT NULL,
  `id_kunjungan` int(11) NOT NULL,
  `id_poli` int(20) NOT NULL,
  PRIMARY KEY (`id_antrian`),
  KEY `fk_antrian_kunjungan1` (`id_kunjungan`),
  KEY `fk_antrian_kode_poli1` (`id_poli`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`id_antrian`, `status`, `id_kunjungan`, `id_poli`) VALUES
(5, 'SELESAI', 5, 2),
(6, 'TERISI', 6, 1),
(7, 'SELESAI', 7, 2),
(8, 'SELESAI', 8, 2),
(9, 'ANTRI', 8, 5),
(10, 'SELESAI', 9, 2),
(11, 'ANTRI', 9, 4),
(12, 'TERISI', 10, 1),
(13, 'ANTRI', 11, 1),
(14, 'ANTRI', 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `diare`
--

CREATE TABLE IF NOT EXISTS `diare` (
  `id_diare` int(11) NOT NULL AUTO_INCREMENT,
  `etiologi_diare` text,
  `keadaan_umum` enum('baik','gelisah','lesu') DEFAULT NULL,
  `keadaan_mata` enum('normal','cekung','sangat kering') DEFAULT NULL,
  `keadaan_air_mata` enum('ada','tidak ada') DEFAULT NULL,
  `keadaan_mulut` enum('basah','kering','sangat kering') DEFAULT NULL,
  `rasa_haus` enum('bisa minum','haus','malas minum') DEFAULT NULL,
  `turgor` enum('kembali cepat','kembali lambat','kembali sangat lambat') DEFAULT NULL,
  `derajat_dehidrasi` enum('tanpa','sedang','berat') DEFAULT NULL,
  `pemeriksaan_lab_khorela` enum('negatif','positif') DEFAULT NULL,
  `pemakaian` enum('oralit','ringer laktate') DEFAULT NULL,
  `keterangan` text,
  `id_remed_umum` int(11) NOT NULL,
  PRIMARY KEY (`id_diare`),
  KEY `fk_diare_remed_poli_umum1` (`id_remed_umum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `diare`
--


-- --------------------------------------------------------

--
-- Table structure for table `history_harian_obat`
--

CREATE TABLE IF NOT EXISTS `history_harian_obat` (
  `id_history_harian_obat` bigint(20) NOT NULL AUTO_INCREMENT,
  `stok_awal` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `id_obat` int(11) NOT NULL,
  PRIMARY KEY (`id_history_harian_obat`),
  KEY `fk_history_harian_obat_obat1` (`id_obat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=235 ;

--
-- Dumping data for table `history_harian_obat`
--

INSERT INTO `history_harian_obat` (`id_history_harian_obat`, `stok_awal`, `tanggal`, `id_obat`) VALUES
(1, 0, '2011-09-16', 1),
(2, 0, '2011-09-16', 2),
(3, 0, '2011-09-16', 3),
(4, 0, '2011-09-16', 4),
(5, 0, '2011-09-16', 5),
(6, 0, '2011-09-16', 6),
(7, 0, '2011-09-16', 7),
(8, 0, '2011-09-16', 8),
(9, 0, '2011-09-16', 9),
(10, 0, '2011-09-16', 10),
(11, 0, '2011-09-16', 11),
(12, 0, '2011-09-16', 12),
(13, 0, '2011-09-16', 13),
(14, 0, '2011-09-16', 14),
(15, 0, '2011-09-16', 15),
(16, 0, '2011-09-16', 16),
(17, 0, '2011-09-16', 17),
(18, 0, '2011-09-16', 18),
(19, 0, '2011-09-16', 19),
(20, 0, '2011-09-16', 20),
(21, 0, '2011-09-16', 21),
(22, 0, '2011-09-16', 22),
(23, 0, '2011-09-16', 23),
(24, 0, '2011-09-16', 24),
(25, 0, '2011-09-16', 25),
(26, 0, '2011-09-16', 26),
(27, 0, '2011-09-16', 27),
(28, 0, '2011-09-16', 28),
(29, 0, '2011-09-16', 29),
(30, 0, '2011-09-16', 30),
(31, 0, '2011-09-16', 31),
(32, 0, '2011-09-16', 32),
(33, 0, '2011-09-16', 33),
(34, 0, '2011-09-16', 34),
(35, 0, '2011-09-16', 35),
(36, 0, '2011-09-16', 36),
(37, 0, '2011-09-16', 37),
(38, 0, '2011-09-16', 38),
(39, 0, '2011-09-16', 39),
(40, 0, '2011-09-16', 40),
(41, 0, '2011-09-16', 41),
(42, 0, '2011-09-16', 42),
(43, 0, '2011-09-16', 43),
(44, 0, '2011-09-16', 44),
(45, 0, '2011-09-16', 45),
(46, 0, '2011-09-16', 46),
(47, 0, '2011-09-16', 47),
(48, 0, '2011-09-16', 48),
(49, 0, '2011-09-16', 49),
(50, 0, '2011-09-16', 50),
(51, 0, '2011-09-16', 51),
(52, 0, '2011-09-16', 52),
(53, 0, '2011-09-16', 53),
(54, 0, '2011-09-16', 54),
(55, 0, '2011-09-16', 55),
(56, 0, '2011-09-16', 56),
(57, 0, '2011-09-16', 57),
(58, 0, '2011-09-16', 58),
(59, 0, '2011-09-16', 59),
(60, 0, '2011-09-16', 60),
(61, 0, '2011-09-16', 61),
(62, 0, '2011-09-16', 62),
(63, 0, '2011-09-16', 63),
(64, 0, '2011-09-16', 64),
(65, 0, '2011-09-16', 65),
(66, 0, '2011-09-16', 66),
(67, 0, '2011-09-16', 67),
(68, 0, '2011-09-16', 68),
(69, 0, '2011-09-16', 69),
(70, 0, '2011-09-16', 70),
(71, 0, '2011-09-16', 71),
(72, 0, '2011-09-16', 72),
(73, 0, '2011-09-16', 73),
(74, 0, '2011-09-16', 74),
(75, 0, '2011-09-16', 75),
(76, 0, '2011-09-16', 76),
(77, 0, '2011-09-16', 77),
(78, 0, '2011-09-16', 78),
(79, 0, '2011-09-16', 79),
(80, 0, '2011-09-16', 80),
(81, 0, '2011-09-16', 81),
(82, 0, '2011-09-16', 82),
(83, 0, '2011-09-16', 83),
(84, 0, '2011-09-16', 84),
(85, 0, '2011-09-16', 85),
(86, 0, '2011-09-16', 86),
(87, 0, '2011-09-16', 87),
(88, 0, '2011-09-16', 88),
(89, 0, '2011-09-16', 89),
(90, 0, '2011-09-16', 90),
(91, 0, '2011-09-16', 91),
(92, 0, '2011-09-16', 92),
(93, 0, '2011-09-16', 93),
(94, 0, '2011-09-16', 94),
(95, 0, '2011-09-16', 95),
(96, 0, '2011-09-16', 96),
(97, 0, '2011-09-16', 97),
(98, 0, '2011-09-16', 98),
(99, 0, '2011-09-16', 99),
(100, 0, '2011-09-16', 100),
(101, 0, '2011-09-16', 101),
(102, 0, '2011-09-16', 102),
(103, 0, '2011-09-16', 103),
(104, 0, '2011-09-16', 104),
(105, 0, '2011-09-16', 105),
(106, 0, '2011-09-16', 106),
(107, 0, '2011-09-16', 107),
(108, 0, '2011-09-16', 108),
(109, 0, '2011-09-16', 109),
(110, 0, '2011-09-16', 110),
(111, 0, '2011-09-16', 111),
(112, 0, '2011-09-16', 112),
(113, 0, '2011-09-16', 113),
(114, 0, '2011-09-16', 114),
(115, 0, '2011-09-16', 115),
(116, 0, '2011-09-16', 116),
(117, 0, '2011-09-16', 117),
(118, 0, '2011-09-16', 118),
(119, 0, '2011-09-16', 119),
(120, 0, '2011-09-16', 120),
(121, 0, '2011-09-16', 121),
(122, 0, '2011-09-16', 122),
(123, 0, '2011-09-16', 123),
(124, 0, '2011-09-16', 124),
(125, 0, '2011-09-16', 125),
(126, 0, '2011-09-16', 126),
(127, 0, '2011-09-16', 127),
(128, 0, '2011-09-16', 128),
(129, 0, '2011-09-16', 129),
(130, 0, '2011-09-16', 130),
(131, 0, '2011-09-16', 131),
(132, 0, '2011-09-16', 132),
(133, 0, '2011-09-16', 133),
(134, 0, '2011-09-16', 134),
(135, 0, '2011-09-16', 135),
(136, 0, '2011-09-16', 136),
(137, 0, '2011-09-16', 137),
(138, 0, '2011-09-16', 138),
(139, 0, '2011-09-16', 139),
(140, 0, '2011-09-16', 140),
(141, 0, '2011-09-16', 141),
(142, 0, '2011-09-16', 142),
(143, 0, '2011-09-16', 143),
(144, 0, '2011-09-16', 144),
(145, 0, '2011-09-16', 145),
(146, 0, '2011-09-16', 146),
(147, 0, '2011-09-16', 147),
(148, 0, '2011-09-16', 148),
(149, 0, '2011-09-16', 149),
(150, 0, '2011-09-16', 150),
(151, 0, '2011-09-16', 151),
(152, 0, '2011-09-16', 152),
(153, 0, '2011-09-16', 153),
(154, 0, '2011-09-16', 154),
(155, 0, '2011-09-16', 155),
(156, 0, '2011-09-16', 156),
(157, 0, '2011-09-16', 157),
(158, 0, '2011-09-16', 158),
(159, 0, '2011-09-16', 159),
(160, 0, '2011-09-16', 160),
(161, 0, '2011-09-16', 161),
(162, 0, '2011-09-16', 162),
(163, 0, '2011-09-16', 163),
(164, 0, '2011-09-16', 164),
(165, 0, '2011-09-16', 165),
(166, 0, '2011-09-16', 166),
(167, 0, '2011-09-16', 167),
(168, 0, '2011-09-16', 168),
(169, 0, '2011-09-16', 169),
(170, 0, '2011-09-16', 170),
(171, 0, '2011-09-16', 171),
(172, 0, '2011-09-16', 172),
(173, 0, '2011-09-16', 173),
(174, 0, '2011-09-16', 174),
(175, 0, '2011-09-16', 175),
(176, 0, '2011-09-16', 176),
(177, 0, '2011-09-16', 177),
(178, 0, '2011-09-16', 178),
(179, 0, '2011-09-16', 179),
(180, 0, '2011-09-16', 180),
(181, 0, '2011-09-16', 181),
(182, 0, '2011-09-16', 182),
(183, 0, '2011-09-16', 183),
(184, 0, '2011-09-16', 184),
(185, 0, '2011-09-16', 185),
(186, 0, '2011-09-16', 186),
(187, 0, '2011-09-16', 187),
(188, 0, '2011-09-16', 188),
(189, 0, '2011-09-16', 189),
(190, 0, '2011-09-16', 190),
(191, 0, '2011-09-16', 191),
(192, 0, '2011-09-16', 192),
(193, 0, '2011-09-16', 193),
(194, 0, '2011-09-16', 194),
(195, 0, '2011-09-16', 195),
(196, 0, '2011-09-16', 196),
(197, 0, '2011-09-16', 197),
(198, 0, '2011-09-16', 198),
(199, 0, '2011-09-16', 199),
(200, 0, '2011-09-16', 200),
(201, 0, '2011-09-16', 201),
(202, 0, '2011-09-16', 202),
(203, 0, '2011-09-16', 203),
(204, 0, '2011-09-16', 204),
(205, 0, '2011-09-16', 205),
(206, 0, '2011-09-16', 206),
(207, 0, '2011-09-16', 207),
(208, 0, '2011-09-16', 208),
(209, 0, '2011-09-16', 209),
(210, 0, '2011-09-16', 210),
(211, 0, '2011-09-16', 211),
(212, 0, '2011-09-16', 212),
(213, 0, '2011-09-16', 213),
(214, 0, '2011-09-16', 214),
(215, 0, '2011-09-16', 215),
(216, 0, '2011-09-16', 216),
(217, 0, '2011-09-16', 217),
(218, 0, '2011-09-16', 218),
(219, 0, '2011-09-16', 219),
(220, 0, '2011-09-16', 220),
(221, 0, '2011-09-16', 221),
(222, 0, '2011-09-16', 222),
(223, 0, '2011-09-16', 223),
(224, 0, '2011-09-16', 224),
(225, 0, '2011-09-16', 225),
(226, 0, '2011-09-16', 226),
(227, 0, '2011-09-16', 227),
(228, 0, '2011-09-16', 228),
(229, 0, '2011-09-16', 229),
(230, 0, '2011-09-16', 230),
(231, 0, '2011-09-16', 231),
(232, 0, '2011-09-16', 232),
(233, 0, '2011-09-16', 233),
(234, 0, '2011-09-16', 234);

-- --------------------------------------------------------

--
-- Table structure for table `history_obat`
--

CREATE TABLE IF NOT EXISTS `history_obat` (
  `id_history_obat` bigint(20) NOT NULL AUTO_INCREMENT,
  `no_sbkk` varchar(50) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `stok_awal_obat` int(11) DEFAULT NULL,
  `total_obat` int(11) DEFAULT NULL,
  `penambahan_obat` int(11) DEFAULT NULL,
  `tanggal_kadaluarsa` date DEFAULT NULL,
  `no_batch` varchar(50) DEFAULT NULL,
  `id_obat` int(11) NOT NULL,
  PRIMARY KEY (`id_history_obat`),
  KEY `fk_history_obat_obat1` (`id_obat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `history_obat`
--


-- --------------------------------------------------------

--
-- Table structure for table `isi_obat`
--

CREATE TABLE IF NOT EXISTS `isi_obat` (
  `id_obat` int(11) NOT NULL,
  `id_pemakainan_obat` bigint(20) NOT NULL,
  `jumlah_terpakai` int(11) NOT NULL,
  PRIMARY KEY (`id_obat`,`id_pemakainan_obat`),
  KEY `fk_obat_has_pemakainan_obat_pemakainan_obat1` (`id_pemakainan_obat`),
  KEY `fk_obat_has_pemakainan_obat_obat1` (`id_obat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `isi_obat`
--


-- --------------------------------------------------------

--
-- Table structure for table `isi_obat_intern`
--

CREATE TABLE IF NOT EXISTS `isi_obat_intern` (
  `id_obat` int(11) NOT NULL,
  `id_pemakainan_intern` bigint(20) NOT NULL,
  `jumlah_terpakai` int(11) NOT NULL,
  PRIMARY KEY (`id_obat`,`id_pemakainan_intern`),
  KEY `fk_obat_has_pemakainan_intern_pemakainan_intern1` (`id_pemakainan_intern`),
  KEY `fk_obat_has_pemakainan_intern_obat` (`id_obat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `isi_obat_intern`
--


-- --------------------------------------------------------

--
-- Table structure for table `isi_resep`
--

CREATE TABLE IF NOT EXISTS `isi_resep` (
  `id_obat` int(11) NOT NULL,
  `id_resep` bigint(20) NOT NULL,
  `jumlah_terpakai` int(11) NOT NULL,
  PRIMARY KEY (`id_obat`,`id_resep`),
  KEY `fk_obat_has_pemakainan_obat_pemakainan_obat1` (`id_resep`),
  KEY `fk_obat_has_pemakainan_obat_obat1` (`id_obat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `isi_resep`
--

INSERT INTO `isi_resep` (`id_obat`, `id_resep`, `jumlah_terpakai`) VALUES
(9, 1, 5),
(41, 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `ispa`
--

CREATE TABLE IF NOT EXISTS `ispa` (
  `id_ispa` int(11) NOT NULL AUTO_INCREMENT,
  `klasifikasi` enum('Bukan Pneumia','Pnemia','Pneumia Berat') DEFAULT NULL,
  `frek_nafas` int(11) DEFAULT NULL,
  `antibiotik` enum('ya','tidak') DEFAULT NULL,
  `kondisi_kunjungan_ulang` enum('membaik','tetap','memburuk') DEFAULT NULL,
  `keterangan` text,
  `tindak_lanjut` enum('rawat jalan','rujukan') DEFAULT NULL,
  `id_remed_umum` int(11) NOT NULL,
  PRIMARY KEY (`id_ispa`),
  KEY `fk_ispa_remed_poli_umum1` (`id_remed_umum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `ispa`
--


-- --------------------------------------------------------

--
-- Table structure for table `kk`
--

CREATE TABLE IF NOT EXISTS `kk` (
  `id_kk` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_pendaftaran` date DEFAULT NULL,
  `nama_kk` varchar(45) DEFAULT NULL,
  `jk_kk` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `alamat_kk` varchar(45) DEFAULT NULL,
  `kelurahan_kk` varchar(45) DEFAULT NULL,
  `kecamatan_kk` varchar(45) DEFAULT NULL,
  `kota_kab_kk` varchar(45) DEFAULT NULL,
  `status_wil_luar` enum('Luar Wilayah','Luar Kota Bogor') DEFAULT NULL,
  PRIMARY KEY (`id_kk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kk`
--

INSERT INTO `kk` (`id_kk`, `tanggal_pendaftaran`, `nama_kk`, `jk_kk`, `alamat_kk`, `kelurahan_kk`, `kecamatan_kk`, `kota_kab_kk`, `status_wil_luar`) VALUES
(2, '2011-09-16', 'Abrar Istiadi', 'Laki-laki', 'Gg. Babakan Raya 17 No. 3B', 'Cibogor', 'Bogor Tengah', 'Bogor', ''),
(3, '2011-09-16', 'Raden Bagus', 'Laki-laki', 'Jl. Murni Raya RT 08/09', 'Pabaton', 'Bogor Tengah', 'Bogor', ''),
(4, '2011-09-16', 'Arief Hidayatulloh', 'Laki-laki', 'Jl. H. Raden No. 65', 'Tanah Sereal', 'Bogor Tengah', 'Bogor', 'Luar Wilayah');

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE IF NOT EXISTS `kunjungan` (
  `id_kunjungan` int(11) NOT NULL AUTO_INCREMENT,
  `no_kunjungan` int(11) NOT NULL,
  `id_pasien` int(20) NOT NULL,
  `tanggal_kunjungan` date DEFAULT NULL,
  `status_pembayaran` enum('Lunas','Belum Lunas') DEFAULT 'Belum Lunas',
  `total_harga` float DEFAULT NULL,
  `status_bawa_kartu` enum('Bawa','Tidak') NOT NULL DEFAULT 'Bawa',
  PRIMARY KEY (`id_kunjungan`),
  KEY `fk_kunjungan_pasien2` (`id_pasien`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`id_kunjungan`, `no_kunjungan`, `id_pasien`, `tanggal_kunjungan`, `status_pembayaran`, `total_harga`, `status_bawa_kartu`) VALUES
(5, 1, 3, '2011-09-16', 'Belum Lunas', NULL, 'Bawa'),
(6, 2, 4, '2011-09-16', 'Belum Lunas', NULL, 'Bawa'),
(7, 3, 5, '2011-09-16', 'Belum Lunas', NULL, 'Bawa'),
(8, 4, 6, '2011-09-16', 'Belum Lunas', NULL, 'Bawa'),
(9, 5, 7, '2011-09-16', 'Belum Lunas', NULL, 'Bawa'),
(10, 6, 8, '2011-09-16', 'Belum Lunas', NULL, 'Bawa'),
(11, 7, 9, '2011-09-16', 'Belum Lunas', NULL, 'Bawa'),
(12, 8, 10, '2011-09-16', 'Belum Lunas', NULL, 'Bawa');

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan_has_layanan`
--

CREATE TABLE IF NOT EXISTS `kunjungan_has_layanan` (
  `id_kunjungan` int(11) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `harga_layanan` float DEFAULT '0',
  `poli` enum('GIGI','KIA','LAB','RADIOLOGI','UMUM') DEFAULT NULL,
  PRIMARY KEY (`id_kunjungan`,`id_layanan`),
  KEY `fk_kunjungan_has_layanan_layanan1` (`id_layanan`),
  KEY `fk_kunjungan_has_layanan_kunjungan1` (`id_kunjungan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kunjungan_has_layanan`
--


-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE IF NOT EXISTS `layanan` (
  `id_layanan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_layanan` varchar(100) DEFAULT NULL,
  `harga` float DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `poli` varchar(60) NOT NULL,
  PRIMARY KEY (`id_layanan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=192 ;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `nama_layanan`, `harga`, `keterangan`, `poli`) VALUES
(1, '-', 0, '', ''),
(2, 'Tambal gigi sementara', 10000, 'GIGI', 'Gigi'),
(3, 'Tambal gigi tetap amalgam', 20000, 'GIGI', 'Gigi'),
(4, 'Tambal gigi tetap silikat', 15000, 'GIGI', 'Gigi'),
(5, 'Tambal gigi dengan glass ionomer', 20000, 'GIGI', 'Gigi'),
(6, 'Tambal light Curing', 50000, 'GIGI', 'Gigi'),
(7, 'Cabut gigi susu', 15000, 'GIGI', 'Gigi'),
(8, 'Cabut gigi tetap', 15000, 'GIGI', 'Gigi'),
(9, 'Alveolektomi 1 gigi', 15000, 'GIGI', 'Gigi'),
(10, 'Ekstraksi gigi dg komplikasi', 20000, 'GIGI', 'Gigi'),
(11, 'Odontektomi ringan', 200000, 'GIGI', 'Gigi'),
(12, 'Scalling per-regio', 12500, 'GIGI', 'Gigi'),
(13, 'Gigi tiruan lepas sebagian', 100000, 'GIGI', 'Gigi'),
(14, 'Tambahan 1 gigi', 30000, 'GIGI', 'Gigi'),
(15, 'Saddle prothesy', 200000, 'GIGI', 'Gigi'),
(16, 'Jacket Crown Acrylic', 200000, 'GIGI', 'Gigi'),
(17, 'Jacket Crown Porcelain', 400000, 'GIGI', 'Gigi'),
(18, 'Jacket Crown Metal', 350000, 'GIGI', 'Gigi'),
(19, 'Gigi tiruan penuh 1 rahang', 600000, 'GIGI', 'Gigi'),
(20, 'Ordhonti ringan', 600000, 'GIGI', 'Gigi'),
(22, 'Overkulektomi', 15000, 'GIGI', 'gigi'),
(26, 'Hitung Jenis Lekosit', 4500, '', 'Lab'),
(31, 'Masa Pembekuan', 4000, '', ''),
(33, 'Alkali Phospahatase', 15000, NULL, ''),
(45, 'SGOT', 14000, 'Kimia Darah', 'Lab'),
(46, 'SGPT', 14000, 'Kimia Darah', 'Lab'),
(49, 'Globulin', 10000, NULL, ''),
(50, 'Protein Total', 20000, NULL, ''),
(51, 'TTT (Timol Turbidity Tes)', 15000, NULL, ''),
(52, 'Persalinan Normal', 350000, 'RB', 'KIA'),
(53, 'Persalinan dengan tindakan ringan', 400000, 'RB', ''),
(54, 'Kuretasi', 1e+06, NULL, ''),
(55, 'Vasektomi', 400000, NULL, ''),
(56, 'Tubektomi', 500000, NULL, ''),
(57, 'Pemasangan IUD', 100000, 'KB', ''),
(58, 'Pencabutan IUD tanpa penyulit', 15000, NULL, ''),
(59, 'Pemasangan Inplant', 150000, NULL, ''),
(60, 'Pencabutan Inplant', 40000, 'KB', ''),
(61, 'Suntik KB 3 bulan', 12000, 'KB', ''),
(62, 'Suntik KB 1 bulan', 15000, 'KB', ''),
(63, 'KB Pil 1 bulan', 10000, 'KB', ''),
(64, 'EKG', 35000, 'EKG', ''),
(65, 'USG', 60000, 'USG', ''),
(66, 'TT Catin Pria', 10000, 'catin', ''),
(67, 'TT Catin Wanita', 15000, 'catin', ''),
(68, 'Pem. Kesehatan Calon Haji (Wanita Usia Subur)', 40000, NULL, ''),
(69, 'Pem. Kesehatan Calon Haji (Wanita Bukan Usia Subur)', 25000, NULL, ''),
(70, 'Pem. Kesehatan Calon Haji (Laki-laki)', 25000, NULL, ''),
(71, 'Mantuox', 3000, NULL, ''),
(72, 'Pemeriksaan X-ray gigi (Radiologi)', 25000, '', 'Radiologi'),
(73, 'Pemeriksaan Thorax Foto (Radiologi)', 40000, '', 'Radiologi'),
(74, 'Hemoglobin', 3500, 'Haematologi', 'Lab'),
(75, 'Leukosit', 4000, 'Haematologi', 'Lab'),
(76, 'LED', 4000, 'Haematologi', 'Lab'),
(77, 'Diff. Leukosit', 0, 'Haematologi', 'Lab'),
(78, 'Eritrosit', 4500, 'Haematologi', 'Lab'),
(79, 'Trombosit', 5000, 'Haematologi', 'Lab'),
(80, 'Retikulosit', 0, 'Haematologi', 'Lab'),
(81, 'Hematokrit', 4000, 'Haematologi', 'Lab'),
(82, 'Gamb.Darah Tepi', 0, 'Haematologi', 'Lab'),
(83, 'Masa Pendarahan', 4000, 'Haematologi', 'Lab'),
(84, 'MCV, MCH, MCHC', 0, 'Haematologi', 'Lab'),
(85, 'Gol Darah + Rhesus', 10000, 'Haematologi', 'Lab'),
(86, 'Gula Darah Sewaktu', 12000, 'Kimia Darah', 'Lab'),
(87, 'Gula Darah Puasa', 12000, 'Kimia Darah', 'Lab'),
(88, 'Gula darah 2 Jam PP', 12000, 'Kimia Darah', 'Lab'),
(89, 'HBA 1 C', 0, 'Kimia Darah', 'Lab'),
(90, 'Ureum', 13000, 'Kimia Darah', 'Lab'),
(91, 'Kreatinin', 15000, 'Kimia Darah', 'Lab'),
(92, 'Asam Urat*', 16000, 'Kimia Darah', 'Lab'),
(93, 'Phosfatase Asam', 0, 'Kimia Darah', 'Lab'),
(94, 'Kolesterol', 16000, 'Kimia Darah', 'Lab'),
(95, 'HDL Kolesterol', 15500, 'Kimia Darah', 'Lab'),
(96, 'LDL Kolesterol', 10500, 'Kimia Darah', 'Lab'),
(97, 'Trigliserida', 16000, 'Kimia Darah', 'Lab'),
(98, 'Total Lipid', 0, 'Kimia Darah', 'Lab'),
(99, 'LDH', 0, 'Kimia Darah', 'Lab'),
(100, 'Total Protein', 0, 'Kimia Darah', 'Lab'),
(101, 'Albumin', 0, 'Kimia Darah', 'Lab'),
(102, 'Bilirubin Total', 13000, 'Kimia Darah', 'Lab'),
(103, 'Bilirubin Direk', 13000, 'Kimia Darah', 'Lab'),
(105, 'Gamma GT', 16500, 'Kimia Darah', 'Lab'),
(106, 'Phosfatase Alkali', 0, 'Kimia Darah', 'Lab'),
(107, 'TTT - Kunkel', 0, 'Kimia Darah', 'Lab'),
(108, 'Na, K, Ca, Cl, P, Mg', 0, 'Kimia Darah', 'Lab'),
(109, 'CHE', 0, 'Kimia Darah', 'Lab'),
(110, 'Amylase', 0, 'Kimia Darah', 'Lab'),
(111, 'Lypase', 0, 'Kimia Darah', 'Lab'),
(112, 'Widal', 0, 'IMMUN-SERO-VIROLOGI', 'Lab'),
(113, 'Malaria', 0, 'IMMUN-SERO-VIROLOGI', 'Lab'),
(114, 'ASTO', 0, 'IMMUN-SERO-VIROLOGI', 'Lab'),
(115, 'Rhematoid Faktor', 0, 'IMMUN-SERO-VIROLOGI', 'Lab'),
(116, 'CRP', 0, 'IMMUN-SERO-VIROLOGI', 'Lab'),
(117, 'VDRL', 0, 'IMMUN-SERO-VIROLOGI', 'Lab'),
(118, 'TPHA', 0, 'IMMUN-SERO-VIROLOGI', 'Lab'),
(119, 'HBs Ag', 0, 'IMMUN-SERO-VIROLOGI', 'Lab'),
(120, 'Anti Bhs', 0, 'IMMUN-SERO-VIROLOGI', 'Lab'),
(121, 'Anti HBs', 0, 'IMMUN-SERO-VIROLOGI', 'Lab'),
(122, 'IgM Anti HBc', 0, 'IMMUN-SERO-VIROLOGI', 'Lab'),
(123, 'Hbe Ag', 0, 'IMMUN-SERO-VIROLOGI', 'Lab'),
(124, 'Anti Hbe', 0, 'IMMUN-SERO-VIROLOGI', 'Lab'),
(125, 'IgM Anti HAV', 0, 'IMMUN-SERO-VIROLOGI', 'Lab'),
(126, 'Anti HCV', 0, 'IMMUN-SERO-VIROLOGI', 'Lab'),
(127, 'igE Total', 0, 'IMMUN-SERO-VIROLOGI', 'Lab'),
(128, 'Toxoplasma IgG', 0, 'IMMUN-SERO-VIROLOGI', 'Lab'),
(129, 'Toxoplasma IgM', 0, 'IMMUN-SERO-VIROLOGI', 'Lab'),
(130, 'CEA', 0, 'Penanda Tumor', 'Lab'),
(131, 'AFP', 0, 'Penanda Tumor', 'Lab'),
(132, 'PAP', 0, 'Penanda Tumor', 'Lab'),
(133, 'T3', 0, 'ENDOKRINOLOGI', 'Lab'),
(134, 'T4', 0, 'ENDOKRINOLOGI', 'Lab'),
(135, 'T3 Update', 0, 'ENDOKRINOLOGI', 'Lab'),
(136, 'TSH', 0, 'ENDOKRINOLOGI', 'Lab'),
(137, 'FTI', 0, 'ENDOKRINOLOGI', 'Lab'),
(138, 'Prolactin', 0, 'ENDOKRINOLOGI', 'Lab'),
(139, 'Estradiol', 0, 'ENDOKRINOLOGI', 'Lab'),
(140, 'Progesteron / Testosteron', 0, 'ENDOKRINOLOGI', 'Lab'),
(141, 'Spiitum BTA', 0, 'Mikrobiologi', 'Lab'),
(142, 'Prep Garam', 0, 'Mikrobiologi', 'Lab'),
(143, 'SekretGO', 0, 'Mikrobiologi', 'Lab'),
(144, 'Trichomanas', 0, 'Mikrobiologi', 'Lab'),
(145, 'Candida', 0, 'Mikrobiologi', 'Lab'),
(146, 'Gal Cultur', 0, 'Mikrobiologi', 'Lab'),
(147, 'Urine Cultur', 0, 'Mikrobiologi', 'Lab'),
(148, 'Faeces Cultur', 0, 'Mikrobiologi', 'Lab'),
(149, 'Analisa Sperma', 0, 'Mikrobiologi', 'Lab'),
(150, 'Urine Rutin Berat Jenis', 0, 'Urine', 'Lab'),
(151, 'Urine Rutin Reaksi pH', 0, 'Urine', 'Lab'),
(152, 'Urine Rutin Glukosa', 0, 'Urine', 'Lab'),
(153, 'Urine Rutin Urobilingen', 0, 'Urine', 'Lab'),
(154, 'Urine Rutin Bilirubin', 0, 'Urine', 'Lab'),
(155, 'Test Kehamilan', 0, 'Urine', 'Lab'),
(156, 'Gravindex', 0, 'Urine', 'Lab'),
(157, 'Faeces Rutin', 0, 'Faeces', 'Lab'),
(158, 'Faeces Benzidin', 0, 'Faeces', 'Lab'),
(159, 'Spesialis Anak', 20000, NULL, ''),
(160, 'Spesialis Dalam', 20000, NULL, ''),
(161, 'KIR Sekolah', 3000, 'KIR', 'UMUM'),
(162, 'KIR umum', 5000, 'KIR', 'UMUM'),
(163, 'Buta Warna', 7000, 'KIR', 'UMUM'),
(164, 'Kontrol Partus', 15000, 'KB', ''),
(165, 'Sunat', 15000, 'KB', ''),
(166, 'Tindik', 15000, 'KB', ''),
(167, 'Sunat + Tindik', 25000, 'KB', ''),
(168, 'Incisi (penyayatan bedah kecil) / Ekstipasi', 25000, 'Operasi Kecil', ''),
(169, 'Ganti Pembalut (Operasi Kecil)', 5000, 'Operasi Kecil', ''),
(170, 'Pertolongan luka yang perlu dijahit (Operasi Kecil)', 10000, NULL, ''),
(171, 'Pertolongan luka yang perlu dijahit (jahitan pertama)', 10000, 'Operasi Kecil', ''),
(172, 'Khitanan', 75000, 'Operasi Kecil', ''),
(173, 'Kontrol IUD', 20000, 'KB', ''),
(174, 'Penambahan Jahitan Berikutnya', 5000, NULL, ''),
(175, 'Persalinan dengan tindakan sedang', 500000, 'RB', ''),
(177, 'tes', NULL, NULL, ''),
(178, 'Tumpatan Gigi Tetap', NULL, 'GIGI', 'gigi'),
(179, 'Tumpatan Gigi Sulung', NULL, 'GIGI', 'gigi'),
(180, 'Pencabutan Gigi Tetap', NULL, 'GIGI', 'gigi'),
(181, 'Pencabutan Gigi Sulung', NULL, 'GIGI', 'gigi'),
(182, 'Tumpatan Sementara Gigi Tetap', NULL, 'GIGI', 'gigi'),
(183, 'Tumpatan Sementara Gigi Sulung', NULL, 'GIGI', 'gigi'),
(184, 'Pengobatan Pulpa', NULL, 'GIGI', 'gigi'),
(185, 'Pengobatan Periode', NULL, 'GIGI', 'gigi'),
(186, 'Pengobatan Abses', NULL, 'GIGI', 'gigi'),
(187, 'Skeling', NULL, 'GIGI', 'gigi'),
(188, 'Lainnya', 0, 'GIGI', 'gigi'),
(189, 'Pengobatan Pulpa & Jaringan Periapikal', 0, 'GIGI', 'gigi'),
(190, 'Pengobatan Gusi dan atau periodontal', 0, 'GIGI', 'gigi'),
(191, 'Pembersihan Karang Gigi', 0, 'GIGI', 'gigi');

-- --------------------------------------------------------

--
-- Table structure for table `layanan_remed_kia`
--

CREATE TABLE IF NOT EXISTS `layanan_remed_kia` (
  `id_layanan` int(11) NOT NULL,
  `id_remed_kia` int(11) NOT NULL,
  PRIMARY KEY (`id_layanan`,`id_remed_kia`),
  KEY `fk_layanan_has_remed_poli_kia_remed_poli_kia1` (`id_remed_kia`),
  KEY `fk_layanan_has_remed_poli_kia_layanan1` (`id_layanan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanan_remed_kia`
--


-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
  `id_obat` int(11) NOT NULL AUTO_INCREMENT,
  `nbk_obat` varchar(100) NOT NULL,
  `satuan_obat` varchar(50) DEFAULT NULL,
  `stok_obat` int(11) DEFAULT NULL,
  `narkotik` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id_obat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=235 ;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nbk_obat`, `satuan_obat`, `stok_obat`, `narkotik`) VALUES
(1, 'Air Raksa Dental Use ', 'Botol', 0, 0),
(2, 'Alat suntik sekali pakai 1 ml', 'Set', 0, 0),
(3, 'Alat suntik sekali pakai 2,5 ml', 'Set', 0, 0),
(4, 'Alat suntik sekali pakai 5 ml', 'Set', 0, 0),
(5, 'Alopurinol tablet 100 mg  ', 'Tablet', 0, 0),
(6, 'Aminofilin tablet 200 mg', 'Tablet', 0, 0),
(7, 'Aminofilin injeksi 24 mg/ml -10 ml', 'Ampul', 0, 0),
(8, 'Amitriptilin HCL tablet Salut 25 mg', 'Tablet', 0, 0),
(9, 'Amoksisilin Kapsul 250 mg', 'Kapsul', -5, 0),
(10, 'Amoksisilin 500 mg', 'Kaplet', 0, 0),
(11, 'Amoksisilin Sirup Kering 125 mg/5 ml', 'Botol', 0, 0),
(12, 'Antalgin (Metampiron) Tab.500 mg', 'Tablet', 0, 0),
(13, 'Antalgin Injeksi 250 mg/ml-2 ml', 'Ampul', 0, 0),
(14, 'Antasida Doen tablet', 'Tablet', 0, 0),
(15, 'Anti Bakteri Salep (Bacitr.-Polimik.)', 'Tube', 0, 0),
(16, 'Anti hemoroid DOEN', 'Supp', 0, 0),
(17, 'Antifungi DOEN ', 'Pot', 0, 0),
(18, 'Antimigren Kombinasi DOEN', 'Tablet', 0, 0),
(19, 'Aqua Pro Injeksi 20 ml', 'Ampul', 0, 0),
(20, 'Aquadest Steril 500 ml', 'Botol', 0, 0),
(21, 'Asam Ascorbat 50 mg tab.', 'Tablet', 0, 0),
(22, 'Asam Klorida 0,1 N 100 ml', 'Botol', 0, 0),
(23, 'Asam Sulfosalisilat 20 % 100 ml', 'Botol', 0, 0),
(24, 'Asetosal tablet 500 mg', 'Tablet', 0, 0),
(25, 'Atropin Sulfat Injeksi ', 'Ampul', 0, 0),
(26, 'Benzatin Benzil Penisilin Inj. 1,2 juta IU', 'Vial', 0, 0),
(27, 'Betametason Krim 0,1 %', 'Tube', 0, 0),
(28, 'Cat/Gut Benang bedah no.2/0-3/0', 'Sachet', 0, 0),
(29, 'Dapson tablet 100 mg', 'Tablet', 0, 0),
(30, 'Deksamethaso Inj. 1 ml', 'Ampul', 0, 0),
(31, 'Deksamethaso Tablet 0,5 mg', 'Tablet', 0, 0),
(32, 'Dekstrometorfan syr', 'Botol', 0, 0),
(33, 'Dekstrometorfan Tablet 15 mg', 'Tablet', 0, 0),
(34, 'Devitalisasi Pasta (Non Arsen)', 'Botol', 0, 0),
(35, 'Diazepam Inj. 2 ml', 'Ampul', 0, 1),
(36, 'Diazepam Tablet 2 mg', 'Tablet', 0, 1),
(37, 'Difenhidramin HCL Inj. 1 ml', 'Ampul', 0, 0),
(38, 'Digoxin tablet 0,25 mg', 'Tablet', 0, 0),
(39, 'Efedrin tablet 25 mg', 'Tablet', 0, 0),
(40, 'Ekstrak Bellad. Tab. 10 mg', 'Tablet', 0, 0),
(41, 'Efinefrin HCL/Bitartrat Inj. 0,1% 1 ml', 'Ampul', -7, 0),
(42, 'Etakridin 0,1 % 300 ml', 'Botol', 0, 0),
(43, 'Etambutol HCL Tablet 250 mg', 'Tablet', 0, 0),
(44, 'Etanol 70 % 1.000 ml', 'Botol', 0, 0),
(45, 'Etil Klorid Semprot 100 ml', 'Botol', 0, 0),
(46, 'Eugenol Cairan', 'Botol', 0, 0),
(47, 'Fenitoin Natrium Kapsul 100 mg', 'Kapsul', 0, 0),
(48, 'Fenitoin Natrium Kapsul 30 mg', 'Kapsul', 0, 0),
(49, 'Fenobarbital Inj 2 ml', 'Ampul', 0, 1),
(50, 'Fenobarbital tablet 30 mg', 'Tablet', 0, 1),
(51, 'Fenoksimetil Penisilina tablet 250 mg', 'Tablet', 0, 0),
(52, 'Fenoksimetil Penisilina tab. 500 mg', 'Tablet', 0, 0),
(53, 'Fenol Glicerol Tetes Telinga 10 %', 'Botol', 0, 0),
(54, 'Fitomenadion Inj. 1 ml', 'Ampul', 0, 0),
(55, 'Fitomenadion Tablet Salut 10 mg', 'Tablet', 0, 0),
(56, 'Furosemid tablet 40 mg', 'Tablet', 0, 0),
(57, 'Gameksan Emulsi 1% 100 ml', 'Botol', 0, 0),
(58, 'Garam Oralit 200 ml', 'Kantong', 0, 0),
(59, 'Gentian Violet 1 % 10 ml', 'Botol', 0, 0),
(60, 'Glass Ionomer Cement (GC IX)', 'Set', 0, 0),
(61, 'Glibenklamid tablet 5 mg', 'Tablet', 0, 0),
(62, 'Gliseri Guayacolat tab. 100 mg', 'Tablet', 0, 0),
(63, 'Gliserin 100 ml', 'Botol', 0, 0),
(64, 'Glucosa Lart. Infus 5% 500 ml', 'Botol', 0, 0),
(65, 'Glucosa Lart. Infus 10% 500 ml', 'Botol', 0, 0),
(66, 'Glucosa Lart. Infus 40% 25  ml', 'Ampul', 0, 0),
(67, 'Griseovulfin tab. 125 mg', 'Tablet', 0, 0),
(68, 'Haloperidol tab. 5 mg', 'Tablet', 0, 0),
(69, 'Haloperidol tab. 1,5  mg', 'Tablet', 0, 0),
(70, 'Hidroklortiazide tab. 25 mg', 'Tablet', 0, 0),
(71, 'Hidrocortison krim 2,5 %', 'Tube', 0, 0),
(72, 'Ibuprofen tab 200 mg', 'Tablet', 0, 0),
(73, 'Infusion Set anak', 'Set', 0, 0),
(74, 'Infusion Set dewasa', 'Set', 0, 0),
(75, 'Isoniazid tab. 300 mg', 'Tablet', 0, 0),
(76, 'Isosorbid Dinitrat Sub. Tab. 5 mg', 'Tablet', 0, 0),
(77, 'Jarum Jahit (Bedah) 9 s/d 14', 'Biji', 0, 0),
(78, 'Kalium Permanganat Serbuk 5 gr', 'Pot', 0, 0),
(79, 'Kalsium Hidroksi Pasata', 'Tube', 0, 0),
(80, 'Kalsium Laktat Tab. 500 mg', 'Tablet', 0, 0),
(81, 'Kapas Pembalut/Adsorben 250 gr', 'Bungkus', 0, 0),
(82, 'Karbamazepin tab. 200 mg', 'Tablet', 0, 0),
(83, 'Kasa Kompres 40/40 Steril', 'Bungkus', 0, 0),
(84, 'Kasa Pembalut 2 m X 80 cm', 'Rol', 0, 0),
(85, 'Kasa Pembalut Hydrofil 4 m X 3 cm', 'Rol', 0, 0),
(86, 'Kasa Pembalut Hydrofil 4 m X 15 cm', 'Rol', 0, 0),
(87, 'Kloramfenikol kapsul 250 mg', 'Kapsul', 0, 0),
(88, 'Kloramfenikol salep mata 1 %', 'Tube', 0, 0),
(89, 'Kloramfenikol tetes telinga 3 %', 'Botol', 0, 0),
(90, 'Klorfeniramin (CTM) tab. 4 mg', 'Tablet', 0, 0),
(91, 'Klorokuin tab. 150 mg', 'Tablet', 0, 0),
(92, 'Klorpromazin HCL Inj. 25 mg/ml 1 ml', 'Ampul', 0, 0),
(93, 'Klorpromazin HCL Inj. 5 mg/ml 2 ml', 'Ampul', 0, 0),
(94, 'Klorpromazin HCL tab. Salut 25 mgl', 'Tablet', 0, 0),
(95, 'Klorpromazin HCL tab. Salut 100 mgl', 'Tablet', 0, 0),
(96, 'Klorpropamid tab. 100 mg', 'Tablet', 0, 0),
(97, 'Kodein Fosfat tab. 10 mg', 'Tablet', 0, 0),
(98, 'Kotrimoksazol tab. Pediatrik', 'Tablet', 0, 0),
(99, 'Kotrimoksazol sirup', 'Botol', 0, 0),
(100, 'Kotrimoksazol tab 480 mg', 'Tablet', 0, 0),
(101, 'Kuinin tab. 250 mg', 'Tablet', 0, 0),
(102, 'Larutan Benedict 100 ml', 'Botol', 0, 0),
(103, 'Larutan Eosin 2 % 100 ml', 'Botol', 0, 0),
(104, 'Larutan Etanol Asam 100 ml', 'Botol', 0, 0),
(105, 'Larutan Gabbet 100 ml', 'Botol', 0, 0),
(106, 'Larutan Giemsa Stain 00 ml', 'Botol', 0, 0),
(107, 'Larutan Karbol Fuksin 100 ml', 'Botol', 0, 0),
(108, 'Larutan Kinyoun 100 ml', 'Botol', 0, 0),
(109, 'Larutan Metilen Biru 100 ml', 'Botol', 0, 0),
(110, 'Larutan Turk 100 ml', 'Botol', 0, 0),
(111, 'Lidocain Komp. Inj.', 'Ampul', 0, 0),
(112, 'Liso 50 % 1.000 ml', 'Botol', 0, 0),
(113, 'Mebendazol Sirup 100 mg/5 ml', 'Botol', 0, 0),
(114, 'Mebendazol Tab. 100 mg', 'Tablet', 0, 0),
(115, 'Metanol 100 ml', 'Botol', 0, 0),
(116, 'Metilergometrin Maleat tab. 0,125 mg', 'Tablet', 0, 0),
(117, 'Metilergometrin Maleat Inj. 0,200 mg 1ml', 'Ampul', 0, 0),
(118, 'Metronidazol tab. 250 mg', 'Tablet', 0, 0),
(119, 'Monoklorkamfer Mentol Cair', 'Botol', 0, 0),
(120, 'Mummifying Pasta', 'Botol', 0, 0),
(121, 'Natr. Bikarbonat tab. 500 mg', 'Tablet', 0, 0),
(122, 'Natr. Klorida lart. Infus 0,9 %', 'Botol', 0, 0),
(123, 'Nistatin Vagina 100.000 ui/g', 'Tablet', 0, 0),
(124, 'Obat Antituberkulosis Kategori I', 'Paket', 0, 0),
(125, 'Obat Antituberkulosis Kategori 2', 'Paket', 0, 0),
(126, 'Obat Antituberkulosis Kategori 3', 'Paket', 0, 0),
(127, 'Obat Antituberkulosis Kategori Sisipan', 'Paket', 0, 0),
(128, 'Obat Batuk Hitam (OBH) 100 ml', 'Botol', 0, 0),
(129, 'Oksitetracyclin Inj.', 'Ampul', 0, 0),
(130, 'Oksitetracyclin 1 % Salep Mata', 'Tube', 0, 0),
(131, 'Oksitetracyclin HCL Salep 3 %', 'Tube', 0, 0),
(132, 'Oksitosin Inj.', 'Ampul', 0, 0),
(133, 'Paraformaldehid tab. 1 gr', 'Tablet', 0, 0),
(134, 'Paracetamol sirup', 'Botol', 0, 0),
(135, 'Paracetamol Tab. 100 mg', 'Tablet', 0, 0),
(136, 'Paracetamol Tab. 500 mg', 'Tablet', 0, 0),
(137, 'Perfenazin HCL  tab 4 mg', 'Tablet', 0, 0),
(138, 'Perfenazin HCL  tab 16 mg', 'Tablet', 0, 0),
(139, 'Petidin Inj. 50 mg/ml 2 ml', 'Ampul', 0, 0),
(140, 'Pirantel tab.125 mg', 'Tablet', 0, 0),
(141, 'Piridoxin HCL tab. 10 mg', 'Tablet', 0, 0),
(142, 'Plester 5 yard x 2 inc', 'Rol', 0, 0),
(143, 'Polikresulen (Albotil) 10 ml', 'Botol', 0, 0),
(144, 'Povidon Iodida 10 % 300 ml', 'Botol', 0, 0),
(145, 'Prednison tab. 5 mg', 'Tablet', 0, 0),
(146, 'Primakuin tab. 15 mg', 'Tablet', 0, 0),
(147, 'Prokain Penisillin 3 juta IU/vial inj.', 'Vial', 0, 0),
(148, 'Propanolol HCL tab.40 mg', 'Tablet', 0, 0),
(149, 'Propiltiourasil tab. 100 mg', 'Tablet', 0, 0),
(150, 'Reserpin tab. 0,25 mg', 'Tablet', 0, 0),
(151, 'Retinol (Vit.A) kap. 200.000 IU', 'Kapsul', 0, 0),
(152, 'Rifampicin kap.300 mg', 'Kapsul', 0, 0),
(153, 'Rifampicin kap.450 mg', 'Kapsul', 0, 0),
(154, 'Rifampicin kap.600 mg', 'Kaplet', 0, 0),
(155, 'Ringer Laktat infus', 'Botol', 0, 0),
(156, 'Salbutamol tab. 2 mg', 'Tablet', 0, 0),
(157, 'Salep 2-4 (As. Sal. + Belerang )', 'Pot', 0, 0),
(158, 'Salisil Bedak 2 % 50 gr', 'Kotak', 0, 0),
(159, 'Semen Seng Fosfat Serbuk dan Cairan', 'Botol', 0, 0),
(160, 'Sianocobalamin (Vit.B12) Inj. 1 ml', 'Ampul', 0, 0),
(161, 'Silk no. 3/0 dengan jarum bedah', 'Sachet', 0, 0),
(162, 'Silver Amalgam Serbuk 65-75 %', 'Botol', 0, 0),
(163, 'Spon Gelatin Cubicles 1x1x1 cm', 'Buah', 0, 0),
(164, 'Streptomisin inj. 1.000 mg/vial', 'Vial', 0, 0),
(165, 'Streptomisin inj. 1.500 mg/vial', 'Vial', 0, 0),
(166, 'Sulfa Conus Krucut (Preparat)', 'Botol', 0, 0),
(167, 'Sulfadimidin tab. 500 mg', 'Tablet', 0, 0),
(168, 'Sulfasetamid Natrium Tetes Mata 15 %', 'Botol', 0, 0),
(169, 'Syntetic Filling Material', 'Set', 0, 0),
(170, 'Tablet Tambah Darah', 'Tablet', 0, 0),
(171, 'Temporary Stoping Fletcher', 'Set', 0, 0),
(172, 'Tetrasiklin kap.250 mg', 'Kapsul', 0, 0),
(173, 'Thiamin HCL inj. 100 mg/ml 1 ml', 'Ampul', 0, 0),
(174, 'Thiamin HCL tab. 50 mg', 'Tablet', 0, 0),
(175, 'Triheksifenidil HCL tab. 2 mg', 'Tablet', 0, 0),
(176, 'Trikresol Formalin (TKF) cairan 10 ml', 'Botol', 0, 0),
(177, 'Vitamin B Komplex tab.', 'Tablet', 0, 0),
(178, 'Yodium Povidon 10 % 1.000 ml', 'Botol', 0, 0),
(179, 'Acyclovir krim', 'Tube', 0, 0),
(180, 'Acyclovir tab. 400 mg', 'Tablet', 0, 0),
(181, 'As. Mefenamat tab. 500 mg', 'Tablet', 0, 0),
(182, 'Captopril tab. 25 mg', 'Tablet', 0, 0),
(183, 'Carbo Adsorben tab.', 'Tablet', 0, 0),
(184, 'Cimetidin tab. 200 mg', 'Tablet', 0, 0),
(185, 'Cefadroxil cap. 500 mg', 'Kapsul', 0, 0),
(186, 'Clindamycin cap. 150 mg', 'Kapsul', 0, 0),
(187, 'Cataflam tab. 50 mg', 'Tablet', 0, 0),
(188, 'Ciprofloxacin tab.500 mg', 'Tablet', 0, 0),
(189, 'Dextral tab', 'Tablet', 0, 0),
(190, 'Erythromicin tab. 500 mg', 'Tablet', 0, 0),
(191, 'Enzyplex tab', 'Tablet', 0, 0),
(192, 'Gentamicin salep', 'Tube', 0, 0),
(193, 'Fluvit C syr', 'Botol', 0, 0),
(194, 'Ichtiol Salep', 'Pot', 0, 0),
(195, 'Kaopectat syr', 'Botol', 0, 0),
(196, 'Levertran Salep', 'Pot', 0, 0),
(197, 'Lopamid tab', 'Tablet', 0, 0),
(198, 'Metoclopamid tab. 10 mg', 'Tablet', 0, 0),
(199, 'Mucohexin tab.', 'Tablet', 0, 0),
(200, 'Omeprazol cap. 10 mg', 'Kapsul', 0, 0),
(201, 'New Diaform tab.', 'Tablet', 0, 0),
(202, 'Nifedipin tab. 10 mg', 'Tablet', 0, 0),
(203, 'Neuropyron tab', 'Tablet', 0, 0),
(204, 'Papaverin tab. 40 mg', 'Tablet', 0, 0),
(205, 'Piroxicam cap.10 mg', 'Kapsul', 0, 0),
(206, 'Pyrazinamid tab.', 'Tablet', 0, 0),
(207, 'Ranitidin tab.150 mg', 'Tablet', 0, 0),
(208, 'Supraflu tab', 'Tablet', 0, 0),
(209, 'Thiamfenicol cap. 500 mg', 'Kapsul', 0, 0),
(210, 'Vit. B 12 tab', 'Tablet', 0, 0),
(211, 'Xepalat tab. 10 mg', 'Tablet', 0, 0),
(212, 'Zentropil cap 100 mg', 'Kapsul', 0, 0),
(213, 'Reagent Ziel Nelsen', 'Botol', 0, 0),
(214, 'Blood Lanset', '', 0, 0),
(215, 'Slide', '', 0, 0),
(216, 'Slide Box', '', 0, 0),
(217, 'Fe tab Program', 'Tablet', 0, 0),
(218, 'Etiket', '', 0, 0),
(219, 'Kertas Puder', '', 0, 0),
(220, 'Tetracain', 'Botol', 0, 0),
(221, 'Sarung tangan ', '', 0, 0),
(222, 'Masker', '', 0, 0),
(223, 'OBH Combi', 'Botol', 0, 0),
(224, 'Aspilet', 'Tablet', 0, 0),
(225, 'Piroz', 'Tablet', 0, 0),
(226, 'Antasid syr', 'Botol', 0, 0),
(227, 'Zink tab', 'Tablet', 0, 0),
(228, 'Citrizin', 'Tablet', 0, 0),
(229, 'Vit K Neo', 'Ampul', 0, 0),
(230, 'Etambutol 500 mg', 'Tablet', 0, 0),
(231, 'Hemoglobin C', 'Botol', 0, 0),
(232, 'Ambroxol syr', 'Botol', 0, 0),
(233, 'Urin Test', '', 0, 0),
(234, 'Etiket', 'Lembar', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `id_pasien` int(20) NOT NULL AUTO_INCREMENT,
  `tanggal_pendaftaran` date DEFAULT NULL,
  `nama_pasien` varchar(45) DEFAULT NULL,
  `jk_pasien` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `status_dalam_keluarga` enum('Kepala Keluarga','Ibu','Anak','Keponakan','Kakek','Nenek','Tinggal Sementara') DEFAULT NULL,
  `id_kunjungan` int(11) DEFAULT NULL,
  `status_pelayanan` enum('Askes','Jamkesmas','Umum','Lain-lain') DEFAULT NULL,
  `no_kartu_layanan` varchar(30) DEFAULT NULL,
  `id_KK` int(11) DEFAULT NULL,
  `kode_pasien` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_pasien`),
  KEY `fk_pasien_KK` (`id_KK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `tanggal_pendaftaran`, `nama_pasien`, `jk_pasien`, `tanggal_lahir`, `status_dalam_keluarga`, `id_kunjungan`, `status_pelayanan`, `no_kartu_layanan`, `id_KK`, `kode_pasien`) VALUES
(3, '2011-09-16', 'Kenia Utari', 'Perempuan', '1990-01-01', 'Anak', NULL, 'Umum', '', 2, 'K-0002-1'),
(4, '2011-09-16', 'Halimah Tus Sa''diyah', 'Perempuan', '1980-01-12', 'Ibu', NULL, 'Umum', '', 2, 'H-0002-2'),
(5, '2011-09-16', 'Tiara Mitra Lia', 'Perempuan', '1956-01-04', 'Kakek', NULL, 'Askes', '34567890567890000', 3, 'T-0003-1'),
(6, '2011-09-16', 'Anita ', 'Perempuan', '1988-01-02', 'Keponakan', NULL, 'Jamkesmas', '345678945456', 4, 'A-0004-1'),
(7, '2011-09-16', 'Wangi Saraswati', 'Perempuan', '1955-03-07', 'Kakek', NULL, 'Lain-lain', '', 4, 'W-0004-2'),
(8, '2011-09-16', 'Esa Ayu Pratama', 'Perempuan', '1990-06-15', 'Anak', NULL, 'Askes', '1234678904567', 3, 'E-0003-2'),
(9, '2011-09-16', 'Karimul Makhtidi', 'Laki-laki', '1980-05-22', 'Keponakan', NULL, 'Jamkesmas', '345678998765434567', 2, 'K-0002-3'),
(10, '2011-09-16', 'Halim Perdana Kusuma', 'Laki-laki', '1970-05-01', 'Tinggal Sementara', NULL, 'Askes', '9876545678998', 4, 'H-0004-3');

-- --------------------------------------------------------

--
-- Table structure for table `pemakainan_intern`
--

CREATE TABLE IF NOT EXISTS `pemakainan_intern` (
  `id_pemakainan_intern` bigint(20) NOT NULL,
  `waktu` datetime DEFAULT NULL,
  `keterangan` text,
  `poli` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_pemakainan_intern`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemakainan_intern`
--


-- --------------------------------------------------------

--
-- Table structure for table `pemakainan_obat`
--

CREATE TABLE IF NOT EXISTS `pemakainan_obat` (
  `id_pemakainan_obat` bigint(20) NOT NULL,
  `waktu` datetime DEFAULT NULL,
  PRIMARY KEY (`id_pemakainan_obat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemakainan_obat`
--


-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan_dahak`
--

CREATE TABLE IF NOT EXISTS `pemeriksaan_dahak` (
  `id_pemeriksaan_dahak` int(11) NOT NULL AUTO_INCREMENT,
  `waktu_pemeriksaan_dahak` enum('sebelum pengobatan','b','c','d','setelah pengobatan') DEFAULT NULL,
  `hasil` varchar(45) DEFAULT NULL,
  `id_tbc` int(11) NOT NULL,
  `id_pemeriksaan_lab` int(11) NOT NULL,
  `alasan_pemeriksaan` enum('Diagnosis','Follow up') DEFAULT NULL,
  PRIMARY KEY (`id_pemeriksaan_dahak`),
  KEY `fk_pemeriksaan_dahak_tbc1` (`id_tbc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `pemeriksaan_dahak`
--


-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE IF NOT EXISTS `penyakit` (
  `id_penyakit` int(11) NOT NULL AUTO_INCREMENT,
  `kode_penyakit` char(50) DEFAULT NULL,
  `nama_penyakit` char(50) DEFAULT NULL,
  `id_poli` int(20) NOT NULL,
  PRIMARY KEY (`id_penyakit`),
  KEY `fk_penyakit_poli1` (`id_poli`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `kode_penyakit`, `nama_penyakit`, `id_poli`) VALUES
(5, '1', '-', 1),
(6, '2', 'Karies Gigi', 1),
(7, '3', 'Penyakit Pulpa & Jaringan Periapikal', 1),
(8, '4', 'Penyakit Gusi & Periodontal', 1),
(9, '5', 'Penyakit Dentofasial termasuk Inaloklusi', 1),
(10, '8', 'Gangguan Gigi & Jaringan Penunjang Lain', 1),
(11, NULL, 'Kolera', 2),
(12, NULL, 'Diare', 2),
(13, NULL, 'Diare berdarah', 2),
(14, NULL, 'Tifus perut klinis', 2),
(15, NULL, 'TBC paru BTA(+)', 2),
(16, NULL, 'Tersangka TBC paru', 2),
(17, NULL, 'Kusta PB', 2),
(18, NULL, 'Kusta MB', 2),
(19, NULL, 'Campak', 2),
(20, NULL, 'Diften', 2),
(21, NULL, 'Batuk Rejan', 2),
(22, NULL, 'Tetanus', 2),
(23, NULL, 'Hepatitis klinis', 2),
(24, NULL, 'Malaria klinis', 2),
(25, NULL, 'Malaria Vivax', 2),
(26, NULL, 'Malaria Falsifarum', 2),
(27, NULL, 'Malaria Mix', 2),
(28, NULL, 'Demam berdarah dengue', 2),
(29, NULL, 'Demam dengue', 2),
(30, NULL, 'Pneumonia', 2),
(31, NULL, 'Sifilis', 2),
(32, NULL, 'Gonorrhoe', 2),
(33, NULL, 'Frambusia', 2),
(34, NULL, 'Filariasis', 2),
(35, NULL, 'Influensa', 2),
(36, NULL, 'lainnya', 1),
(37, NULL, 'lainnya', 2);

-- --------------------------------------------------------

--
-- Table structure for table `penyakit_remed_gigi`
--

CREATE TABLE IF NOT EXISTS `penyakit_remed_gigi` (
  `id_remed_gigi` int(20) NOT NULL,
  `id_penyakit` int(11) NOT NULL,
  KEY `fk_penyakit_has_remed_poli_gigi_remed_poli_gigi2` (`id_remed_gigi`),
  KEY `fk_penyakit_has_remed_poli_gigi_penyakit1` (`id_penyakit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit_remed_gigi`
--

INSERT INTO `penyakit_remed_gigi` (`id_remed_gigi`, `id_penyakit`) VALUES
(1, 6),
(2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `penyakit_remed_kia`
--

CREATE TABLE IF NOT EXISTS `penyakit_remed_kia` (
  `id_remed_kia` int(11) NOT NULL,
  `id_penyakit` int(11) NOT NULL,
  KEY `fk_penyakit_has_remed_poli_kia_remed_poli_kia1` (`id_remed_kia`),
  KEY `fk_penyakit_has_remed_poli_kia_penyakit1` (`id_penyakit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit_remed_kia`
--


-- --------------------------------------------------------

--
-- Table structure for table `penyakit_remed_umum`
--

CREATE TABLE IF NOT EXISTS `penyakit_remed_umum` (
  `id_penyakit` int(11) NOT NULL,
  `id_remed_umum` int(11) NOT NULL,
  `id_penyakit1` int(11) NOT NULL,
  PRIMARY KEY (`id_penyakit`),
  KEY `fk_penyakit_has_remed_poli_umum_remed_poli_umum1` (`id_remed_umum`),
  KEY `fk_penyakit_has_remed_poli_umum_penyakit1` (`id_penyakit1`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit_remed_umum`
--


-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE IF NOT EXISTS `poli` (
  `id_poli` int(20) NOT NULL AUTO_INCREMENT,
  `nama_poli` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id_poli`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id_poli`, `nama_poli`) VALUES
(1, 'Gigi'),
(2, 'Umum'),
(3, 'KIA'),
(4, 'Laboratorium'),
(5, 'Radiologi'),
(6, 'Rujukan'),
(9, 'Spesialis Anak'),
(10, 'Spesialis Penyakit Dalam');

-- --------------------------------------------------------

--
-- Table structure for table `remedi_umum_layanan`
--

CREATE TABLE IF NOT EXISTS `remedi_umum_layanan` (
  `id_remed_umum` int(11) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  PRIMARY KEY (`id_remed_umum`,`id_layanan`),
  KEY `fk_remed_poli_umum_has_layanan_layanan1` (`id_layanan`),
  KEY `fk_remed_poli_umum_has_layanan_remed_poli_umum1` (`id_remed_umum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remedi_umum_layanan`
--


-- --------------------------------------------------------

--
-- Table structure for table `remed_gigi_layanan`
--

CREATE TABLE IF NOT EXISTS `remed_gigi_layanan` (
  `id_remed_gigi` int(20) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  PRIMARY KEY (`id_remed_gigi`,`id_layanan`),
  KEY `fk_remed_poli_gigi_has_layanan_layanan1` (`id_layanan`),
  KEY `fk_remed_poli_gigi_has_layanan_remed_poli_gigi1` (`id_remed_gigi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remed_gigi_layanan`
--

INSERT INTO `remed_gigi_layanan` (`id_remed_gigi`, `id_layanan`) VALUES
(1, 3),
(2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `remed_poli_gigi`
--

CREATE TABLE IF NOT EXISTS `remed_poli_gigi` (
  `id_remed_gigi` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_kunjungan_gigi` date DEFAULT NULL,
  `anamnesis` text,
  `diagnosis` text,
  `id_kunjungan` int(11) NOT NULL,
  `keterangan` text,
  `id_pasien` int(11) NOT NULL,
  `Kunjungan_ibu_hamil` enum('Ya','Tidak') DEFAULT NULL,
  `Kunjungan_Anak_Prasekolah` enum('Ya','Tidak') DEFAULT NULL,
  `Khasus_penyakit` enum('Ya','Tidak') DEFAULT NULL,
  PRIMARY KEY (`id_remed_gigi`),
  KEY `fk_remed_poli_gigi_kunjungan1` (`id_kunjungan`),
  KEY `fk_remed_poli_gigi_pasien1` (`id_pasien`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `remed_poli_gigi`
--

INSERT INTO `remed_poli_gigi` (`id_remed_gigi`, `tanggal_kunjungan_gigi`, `anamnesis`, `diagnosis`, `id_kunjungan`, `keterangan`, `id_pasien`, `Kunjungan_ibu_hamil`, `Kunjungan_Anak_Prasekolah`, `Khasus_penyakit`) VALUES
(1, '2011-09-16', 'Karang gigi', 'Karies', 6, '', 4, 'Tidak', 'Tidak', ''),
(2, '2011-09-16', 'Testing', 'Testing', 10, 'Testing', 8, 'Tidak', 'Ya', '');

-- --------------------------------------------------------

--
-- Table structure for table `remed_poli_kia`
--

CREATE TABLE IF NOT EXISTS `remed_poli_kia` (
  `id_remed_kia` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_kunjungan_kia` date DEFAULT NULL,
  `anamnesis` text,
  `diagnosa` text,
  `id_kunjungan` int(11) NOT NULL,
  `keterangan` text,
  `id_pasien` int(11) NOT NULL,
  PRIMARY KEY (`id_remed_kia`),
  KEY `fk_remed_poli_kia_kunjungan1` (`id_kunjungan`),
  KEY `fk_remed_poli_kia_pasien1` (`id_pasien`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `remed_poli_kia`
--


-- --------------------------------------------------------

--
-- Table structure for table `remed_poli_umum`
--

CREATE TABLE IF NOT EXISTS `remed_poli_umum` (
  `id_remed_umum` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_kunjungan_umum` date DEFAULT NULL,
  `anamnesis` text,
  `diagnosa` text,
  `id_kunjungan` int(11) NOT NULL,
  `keterangan` text,
  `id_pasien` int(20) NOT NULL,
  PRIMARY KEY (`id_remed_umum`),
  KEY `fk_remed_poli_umum_kunjungan1` (`id_kunjungan`),
  KEY `fk_remed_poli_umum_pasien1` (`id_pasien`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `remed_poli_umum`
--


-- --------------------------------------------------------

--
-- Table structure for table `remed_umum_lab`
--

CREATE TABLE IF NOT EXISTS `remed_umum_lab` (
  `id_remed_umum` int(11) NOT NULL,
  `id_pemeriksaan_lab` int(11) NOT NULL,
  PRIMARY KEY (`id_remed_umum`,`id_pemeriksaan_lab`),
  KEY `fk_remed_poli_umum_has_pemeriksaan_lab_remed_poli_umum1` (`id_remed_umum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remed_umum_lab`
--


-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE IF NOT EXISTS `resep` (
  `id_resep` bigint(20) NOT NULL AUTO_INCREMENT,
  `waktu` datetime DEFAULT NULL,
  `id_pasien` int(20) NOT NULL,
  PRIMARY KEY (`id_resep`),
  KEY `fk_resep_pasien1` (`id_pasien`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`id_resep`, `waktu`, `id_pasien`) VALUES
(1, '2011-09-16 14:56:34', 3),
(2, '2011-09-16 14:58:41', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbc`
--

CREATE TABLE IF NOT EXISTS `tbc` (
  `id_tbc` int(11) NOT NULL AUTO_INCREMENT,
  `alasan_periksa_lab` text,
  `hasil_periksa_lab` text,
  `rejimen` text,
  `klasifikasi_penyakit` enum('paru','ekstra paru') DEFAULT NULL,
  `tipe_penderita` enum('baru','kambuh','pindahan','default','lainnya') DEFAULT NULL,
  `keterangan` text,
  `id_remed_umum` int(11) NOT NULL,
  PRIMARY KEY (`id_tbc`),
  KEY `fk_tbc_remed_poli_umum1` (`id_remed_umum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbc`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `antrian`
--
ALTER TABLE `antrian`
  ADD CONSTRAINT `fk_antrian_kode_poli1` FOREIGN KEY (`id_poli`) REFERENCES `poli` (`id_poli`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_antrian_kunjungan10` FOREIGN KEY (`id_kunjungan`) REFERENCES `kunjungan` (`id_kunjungan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `diare`
--
ALTER TABLE `diare`
  ADD CONSTRAINT `fk_diare_remed_poli_umum1` FOREIGN KEY (`id_remed_umum`) REFERENCES `remed_poli_umum` (`id_remed_umum`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `history_harian_obat`
--
ALTER TABLE `history_harian_obat`
  ADD CONSTRAINT `fk_history_harian_obat_obat1` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `history_obat`
--
ALTER TABLE `history_obat`
  ADD CONSTRAINT `fk_history_obat_obat100` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `isi_obat`
--
ALTER TABLE `isi_obat`
  ADD CONSTRAINT `fk_obat_has_pemakainan_obat_obat11` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_obat_has_pemakainan_obat_pemakainan_obat11` FOREIGN KEY (`id_pemakainan_obat`) REFERENCES `pemakainan_obat` (`id_pemakainan_obat`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `isi_obat_intern`
--
ALTER TABLE `isi_obat_intern`
  ADD CONSTRAINT `fk_obat_has_pemakainan_intern_obat00` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_obat_has_pemakainan_intern_pemakainan_intern100` FOREIGN KEY (`id_pemakainan_intern`) REFERENCES `pemakainan_intern` (`id_pemakainan_intern`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `isi_resep`
--
ALTER TABLE `isi_resep`
  ADD CONSTRAINT `fk_obat_has_pemakainan_obat_obat100` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_obat_has_pemakainan_obat_pemakainan_obat100` FOREIGN KEY (`id_resep`) REFERENCES `resep` (`id_resep`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ispa`
--
ALTER TABLE `ispa`
  ADD CONSTRAINT `fk_ispa_remed_poli_umum1` FOREIGN KEY (`id_remed_umum`) REFERENCES `remed_poli_umum` (`id_remed_umum`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD CONSTRAINT `fk_kunjungan_pasien2` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kunjungan_has_layanan`
--
ALTER TABLE `kunjungan_has_layanan`
  ADD CONSTRAINT `fk_kunjungan_has_layanan_kunjungan1` FOREIGN KEY (`id_kunjungan`) REFERENCES `kunjungan` (`id_kunjungan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_kunjungan_has_layanan_layanan1` FOREIGN KEY (`id_layanan`) REFERENCES `layanan` (`id_layanan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `layanan_remed_kia`
--
ALTER TABLE `layanan_remed_kia`
  ADD CONSTRAINT `fk_layanan_has_remed_poli_kia_layanan1` FOREIGN KEY (`id_layanan`) REFERENCES `layanan` (`id_layanan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_layanan_has_remed_poli_kia_remed_poli_kia1` FOREIGN KEY (`id_remed_kia`) REFERENCES `remed_poli_kia` (`id_remed_kia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `fk_pasien_KK0` FOREIGN KEY (`id_KK`) REFERENCES `kk` (`id_kk`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pemeriksaan_dahak`
--
ALTER TABLE `pemeriksaan_dahak`
  ADD CONSTRAINT `fk_pemeriksaan_dahak_tbc1` FOREIGN KEY (`id_tbc`) REFERENCES `tbc` (`id_tbc`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD CONSTRAINT `fk_penyakit_poli1` FOREIGN KEY (`id_poli`) REFERENCES `poli` (`id_poli`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `penyakit_remed_gigi`
--
ALTER TABLE `penyakit_remed_gigi`
  ADD CONSTRAINT `fk_penyakit_has_remed_poli_gigi_penyakit1` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id_penyakit`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_penyakit_has_remed_poli_gigi_remed_poli_gigi2` FOREIGN KEY (`id_remed_gigi`) REFERENCES `remed_poli_gigi` (`id_remed_gigi`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `penyakit_remed_kia`
--
ALTER TABLE `penyakit_remed_kia`
  ADD CONSTRAINT `fk_penyakit_has_remed_poli_kia_penyakit1` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id_penyakit`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_penyakit_has_remed_poli_kia_remed_poli_kia1` FOREIGN KEY (`id_remed_kia`) REFERENCES `remed_poli_kia` (`id_remed_kia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `penyakit_remed_umum`
--
ALTER TABLE `penyakit_remed_umum`
  ADD CONSTRAINT `fk_penyakit_has_remed_poli_umum_penyakit1` FOREIGN KEY (`id_penyakit1`) REFERENCES `penyakit` (`id_penyakit`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_penyakit_has_remed_poli_umum_remed_poli_umum1` FOREIGN KEY (`id_remed_umum`) REFERENCES `remed_poli_umum` (`id_remed_umum`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `remedi_umum_layanan`
--
ALTER TABLE `remedi_umum_layanan`
  ADD CONSTRAINT `fk_remed_poli_umum_has_layanan_layanan1` FOREIGN KEY (`id_layanan`) REFERENCES `layanan` (`id_layanan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_remed_poli_umum_has_layanan_remed_poli_umum1` FOREIGN KEY (`id_remed_umum`) REFERENCES `remed_poli_umum` (`id_remed_umum`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `remed_gigi_layanan`
--
ALTER TABLE `remed_gigi_layanan`
  ADD CONSTRAINT `fk_remed_poli_gigi_has_layanan_layanan1` FOREIGN KEY (`id_layanan`) REFERENCES `layanan` (`id_layanan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_remed_poli_gigi_has_layanan_remed_poli_gigi1` FOREIGN KEY (`id_remed_gigi`) REFERENCES `remed_poli_gigi` (`id_remed_gigi`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `remed_poli_gigi`
--
ALTER TABLE `remed_poli_gigi`
  ADD CONSTRAINT `fk_remed_poli_gigi_kunjungan1` FOREIGN KEY (`id_kunjungan`) REFERENCES `kunjungan` (`id_kunjungan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_remed_poli_gigi_pasien1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `remed_poli_kia`
--
ALTER TABLE `remed_poli_kia`
  ADD CONSTRAINT `fk_remed_poli_kia_kunjungan1` FOREIGN KEY (`id_kunjungan`) REFERENCES `kunjungan` (`id_kunjungan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_remed_poli_kia_pasien1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `remed_poli_umum`
--
ALTER TABLE `remed_poli_umum`
  ADD CONSTRAINT `fk_remed_poli_umum_kunjungan1` FOREIGN KEY (`id_kunjungan`) REFERENCES `kunjungan` (`id_kunjungan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_remed_poli_umum_pasien1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `remed_umum_lab`
--
ALTER TABLE `remed_umum_lab`
  ADD CONSTRAINT `fk_remed_poli_umum_has_pemeriksaan_lab_remed_poli_umum1` FOREIGN KEY (`id_remed_umum`) REFERENCES `remed_poli_umum` (`id_remed_umum`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `resep`
--
ALTER TABLE `resep`
  ADD CONSTRAINT `fk_resep_pasien1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbc`
--
ALTER TABLE `tbc`
  ADD CONSTRAINT `fk_tbc_remed_poli_umum1` FOREIGN KEY (`id_remed_umum`) REFERENCES `remed_poli_umum` (`id_remed_umum`) ON DELETE NO ACTION ON UPDATE NO ACTION;
