-- phpMyAdmin SQL Dump
-- version 3.3.2deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 09, 2011 at 01:45 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.2-1ubuntu4.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `siemas_simpeg`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE IF NOT EXISTS `absensi` (
  `id_absensi` bigint(20) NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `hadir` tinyint(1) DEFAULT NULL,
  `jam_hadir` time DEFAULT NULL,
  `id_pegawai` int(11) NOT NULL,
  PRIMARY KEY (`id_absensi`),
  KEY `fk_absensi_pegawai1` (`id_pegawai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `tanggal`, `hadir`, `jam_hadir`, `id_pegawai`) VALUES
(28, '2011-08-04', 1, '07:30:00', 1),
(29, '2011-08-04', 0, '00:00:00', 2),
(30, '2011-08-04', 1, '08:30:00', 3),
(31, '2011-08-04', 0, '00:00:00', 4),
(32, '2011-08-04', 1, '00:00:00', 5),
(33, '2011-08-04', 0, '00:00:00', 7),
(34, '2011-08-04', 1, '00:00:00', 8),
(35, '2011-08-04', 0, '00:00:00', 9),
(36, '2011-08-04', 1, '00:00:00', 10),
(37, '2011-08-04', 0, '00:00:00', 11),
(38, '2011-08-04', 1, '00:00:00', 6),
(39, '2011-08-04', 0, '00:00:00', 12),
(40, '2011-08-03', 1, '00:00:00', 2),
(41, '2011-08-03', 1, '00:00:00', 3),
(42, '2011-08-03', 0, '00:00:00', 4),
(43, '2011-08-03', 1, '00:00:00', 5),
(44, '2011-08-03', 1, '00:00:00', 7),
(45, '2011-08-03', 0, '00:00:00', 8),
(46, '2011-08-03', 1, '00:00:00', 9),
(47, '2011-08-03', 1, '00:00:00', 10),
(48, '2011-08-03', 1, '00:00:00', 11),
(49, '2011-08-03', 0, '00:00:00', 6),
(50, '2011-08-03', 1, '00:00:00', 12),
(63, '2011-08-02', 1, '07:30:00', 1),
(64, '2011-08-02', 1, '07:30:00', 2),
(65, '2011-08-02', 1, '07:30:00', 3),
(66, '2011-08-02', 1, '07:30:00', 4),
(67, '2011-08-02', 1, '07:30:00', 5),
(68, '2011-08-02', 1, '07:30:00', 7),
(69, '2011-08-02', 1, '07:30:00', 8),
(70, '2011-08-02', 1, '07:30:00', 9),
(71, '2011-08-02', 1, '07:30:00', 10),
(72, '2011-08-02', 1, '07:30:00', 11),
(73, '2011-08-02', 1, '07:30:00', 6),
(74, '2011-08-02', 1, '07:30:00', 12),
(75, '2011-08-05', 1, '07:30:00', 1),
(76, '2011-08-05', 1, '07:30:00', 2),
(77, '2011-08-05', 0, '07:30:00', 3),
(78, '2011-08-05', 0, '07:30:00', 4),
(79, '2011-08-05', 1, '07:30:00', 5),
(80, '2011-08-05', 1, '07:30:00', 7),
(81, '2011-08-05', 1, '07:30:00', 8),
(82, '2011-08-05', 1, '07:30:00', 9),
(83, '2011-08-05', 1, '07:30:00', 10),
(84, '2011-08-05', 1, '07:30:00', 11),
(85, '2011-08-05', 1, '07:30:00', 6),
(86, '2011-08-05', 1, '07:30:00', 12),
(89, '2010-08-02', 1, '07:30:00', 1),
(90, '2010-08-02', 1, '07:30:00', 2),
(91, '2010-08-02', 1, '07:30:00', 3),
(92, '2010-08-02', 1, '07:30:00', 4),
(93, '2010-08-02', 1, '07:30:00', 5),
(94, '2010-08-02', 1, '07:30:00', 7),
(95, '2010-08-02', 1, '07:30:00', 8),
(96, '2010-08-02', 1, '07:30:00', 9),
(97, '2010-08-02', 1, '07:30:00', 10),
(98, '2010-08-02', 1, '07:30:00', 11),
(99, '2010-08-02', 1, '07:30:00', 6),
(100, '2010-08-02', 1, '07:30:00', 12);

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE IF NOT EXISTS `cuti` (
  `id_cuti` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `keperluan` varchar(45) DEFAULT NULL,
  `alamat_cuti` varchar(255) DEFAULT NULL,
  `id_pegawai` int(11) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_cuti`),
  KEY `fk_cuti_pegawai1` (`id_pegawai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`id_cuti`, `tanggal_mulai`, `tanggal_selesai`, `keperluan`, `alamat_cuti`, `id_pegawai`, `keterangan`) VALUES
(2, '2011-08-02', '2011-08-04', 'Cuti tahunan', '', 6, '');

-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

CREATE TABLE IF NOT EXISTS `gaji` (
  `id_gaji` int(11) NOT NULL AUTO_INCREMENT,
  `TMT` date DEFAULT NULL,
  `gaji` decimal(12,4) DEFAULT NULL,
  `id_pegawai` int(11) NOT NULL,
  PRIMARY KEY (`id_gaji`),
  KEY `fk_gaji_pegawai1` (`id_pegawai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `gaji`
--

INSERT INTO `gaji` (`id_gaji`, `TMT`, `gaji`, `id_pegawai`) VALUES
(1, '1970-01-01', '0.0000', 1),
(2, '1970-01-01', '0.0000', 2),
(3, '1970-01-01', '0.0000', 3),
(4, '1970-01-01', '0.0000', 4),
(5, '1970-01-01', '0.0000', 5),
(6, '1970-01-01', '0.0000', 6),
(7, '1970-01-01', '0.0000', 7),
(8, '1970-01-01', '0.0000', 8),
(9, '1970-01-01', '0.0000', 9),
(10, '2011-07-05', '4500000.0000', 10),
(11, '0000-00-00', '0.0000', 11),
(12, '0000-00-00', '0.0000', 12),
(13, '2011-08-05', '99999999.9999', 10),
(14, '2011-08-03', '45678900.0000', 9),
(15, '0000-00-00', '0.0000', 13),
(16, '2011-08-24', '99999999.9999', 10),
(17, '0000-00-00', '0.0000', 14),
(18, '0000-00-00', '0.0000', 15);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
  `id_jabatan` int(11) NOT NULL AUTO_INCREMENT,
  `TMT` date DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `id_pegawai` int(11) NOT NULL,
  PRIMARY KEY (`id_jabatan`),
  KEY `fk_jabatan_pegawai1` (`id_pegawai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `TMT`, `jabatan`, `id_pegawai`) VALUES
(1, '1970-01-01', '', 1),
(2, '1970-01-01', '', 2),
(3, '1970-01-01', '', 3),
(4, '1970-01-01', '', 4),
(5, '1970-01-01', '', 5),
(6, '1970-01-01', 'Dokter', 6),
(7, '1970-01-01', '', 7),
(8, '1970-01-01', '', 8),
(9, '1970-01-01', '', 9),
(10, '2011-07-05', 'Developer', 10),
(11, '0000-00-00', '', 11),
(12, '0000-00-00', '', 12),
(14, '0000-00-00', '', 13),
(15, '0000-00-00', '', 14),
(16, '0000-00-00', '', 15);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_puskesmas`
--

CREATE TABLE IF NOT EXISTS `jadwal_puskesmas` (
  `id_jadwal_puskesmas` int(11) NOT NULL AUTO_INCREMENT,
  `hari` varchar(45) DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `bp_pemda` tinyint(1) DEFAULT NULL,
  `buka` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_jadwal_puskesmas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `jadwal_puskesmas`
--

INSERT INTO `jadwal_puskesmas` (`id_jadwal_puskesmas`, `hari`, `jam_mulai`, `jam_selesai`, `bp_pemda`, `buka`) VALUES
(1, 'senin', '08:30:00', '14:30:00', 0, 1),
(2, 'senin', '00:00:00', '00:00:00', 1, 1),
(3, 'selasa', '00:00:00', '00:00:00', 0, 1),
(4, 'selasa', '00:00:00', '00:00:00', 1, 1),
(5, 'rabu', '00:00:00', '00:00:00', 0, 1),
(6, 'rabu', '00:00:00', '00:00:00', 1, 1),
(7, 'kamis', '00:00:00', '00:00:00', 0, 1),
(8, 'kamis', '00:00:00', '00:00:00', 1, 1),
(9, 'jumat', '07:30:00', '14:00:00', 0, 1),
(10, 'jumat', '00:00:00', '00:00:00', 1, 1),
(11, 'sabtu', '00:00:00', '00:00:00', 0, 0),
(12, 'sabtu', '00:00:00', '00:00:00', 1, 0),
(13, 'minggu', '00:00:00', '00:00:00', 0, 0),
(14, 'minggu', '00:00:00', '00:00:00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE IF NOT EXISTS `kegiatan` (
  `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `kegiatan` varchar(255) DEFAULT NULL,
  `id_pegawai` int(11) NOT NULL,
  PRIMARY KEY (`id_kegiatan`),
  KEY `fk_kegiatan_pegawai1` (`id_pegawai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `tanggal`, `lokasi`, `kegiatan`, `id_pegawai`) VALUES
(1, '2011-08-02', 'IPB', 'Ngajar', 10),
(2, '2011-08-05', 'IPB', 'Kuliah', 12),
(3, '2011-08-09', 'Kampung Rambutan', 'Sosialisasi dan promosi kesehatan', 12),
(4, '2011-08-24', 'sfdsf', 'werwetertery wetew tw', 10);

-- --------------------------------------------------------

--
-- Table structure for table `kontribusi_tpp`
--

CREATE TABLE IF NOT EXISTS `kontribusi_tpp` (
  `jumlah_kehadiran` int(11) DEFAULT NULL,
  `jumlah_apel` int(11) DEFAULT NULL,
  `jumlah_jam_efek` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontribusi_tpp`
--

INSERT INTO `kontribusi_tpp` (`jumlah_kehadiran`, `jumlah_apel`, `jumlah_jam_efek`) VALUES
(40, 20, 40);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_dp3`
--

CREATE TABLE IF NOT EXISTS `nilai_dp3` (
  `id_dp3` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_pegawai` int(11) NOT NULL,
  `tahun` int(11) DEFAULT NULL,
  `kesetiaan` int(11) DEFAULT NULL,
  `prestasi_kerja` int(11) DEFAULT NULL,
  `tanggung_jawab` int(11) DEFAULT NULL,
  `ketaatan` int(11) DEFAULT NULL,
  `kejujuran` int(11) DEFAULT NULL,
  `kerjasama` int(11) DEFAULT NULL,
  `prakarsa` int(11) DEFAULT NULL,
  `kepemimpinan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_dp3`),
  KEY `fk_dp3_pegawai1` (`id_pegawai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=205 ;

--
-- Dumping data for table `nilai_dp3`
--

INSERT INTO `nilai_dp3` (`id_dp3`, `id_pegawai`, `tahun`, `kesetiaan`, `prestasi_kerja`, `tanggung_jawab`, `ketaatan`, `kejujuran`, `kerjasama`, `prakarsa`, `kepemimpinan`) VALUES
(49, 1, 2009, 8, 8, 8, 0, 0, 0, 0, 0),
(50, 2, 2009, 8, 8, 8, 0, 0, 0, 0, 0),
(51, 3, 2009, 8, 8, 8, 0, 0, 0, 0, 0),
(52, 4, 2009, 8, 8, 8, 0, 0, 0, 0, 0),
(53, 5, 2009, 8, 8, 8, 0, 0, 0, 0, 0),
(54, 6, 2009, 8, 8, 8, 0, 0, 0, 0, 0),
(55, 7, 2009, 8, 8, 8, 0, 0, 0, 0, 0),
(56, 8, 2009, 8, 8, 8, 0, 0, 0, 0, 0),
(57, 9, 2009, 8, 8, 8, 0, 0, 0, 0, 0),
(58, 10, 2009, 8, 8, 8, 0, 0, 0, 0, 0),
(59, 11, 2009, 8, 8, 8, 0, 0, 0, 0, 0),
(60, 12, 2009, 8, 8, 8, 0, 0, 0, 0, 0),
(61, 1, 2010, 77, 77, 77, 77, 77, 77, 77, 77),
(62, 2, 2010, 0, 0, 0, 77, 77, 0, 0, 0),
(63, 3, 2010, 0, 0, 0, 77, 77, 0, 0, 0),
(64, 4, 2010, 0, 0, 0, 77, 77, 0, 0, 0),
(65, 5, 2010, 0, 0, 0, 77, 77, 0, 0, 0),
(66, 6, 2010, 0, 0, 0, 77, 77, 0, 0, 0),
(67, 7, 2010, 0, 0, 0, 0, 0, 0, 0, 0),
(68, 8, 2010, 0, 0, 0, 0, 0, 0, 0, 0),
(69, 9, 2010, 0, 0, 0, 0, 0, 0, 0, 0),
(70, 10, 2010, 0, 0, 0, 0, 0, 0, 0, 0),
(71, 11, 2010, 0, 0, 0, 0, 0, 0, 0, 0),
(72, 12, 2010, 0, 0, 0, 0, 0, 0, 0, 0),
(135, 1, 2013, 0, 0, 0, 0, 0, 0, 0, 0),
(136, 2, 2013, 0, 0, 0, 0, 0, 0, 0, 0),
(137, 3, 2013, 0, 0, 0, 0, 0, 0, 0, 0),
(138, 4, 2013, 0, 0, 0, 0, 0, 0, 0, 0),
(139, 5, 2013, 0, 0, 0, 0, 0, 0, 0, 0),
(140, 6, 2013, 0, 0, 0, 0, 0, 0, 0, 0),
(141, 7, 2013, 0, 0, 0, 0, 0, 0, 0, 0),
(142, 8, 2013, 0, 0, 0, 0, 0, 0, 0, 0),
(143, 9, 2013, 0, 0, 0, 0, 0, 0, 0, 0),
(144, 10, 2013, 0, 0, 0, 0, 0, 0, 0, 0),
(145, 11, 2013, 0, 0, 0, 0, 0, 0, 0, 0),
(146, 12, 2013, 0, 0, 0, 0, 0, 0, 0, 0),
(147, 13, 2013, 0, 0, 0, 0, 0, 0, 0, 0),
(148, 14, 2013, 0, 0, 0, 0, 0, 0, 0, 0),
(149, 1, 2015, 0, 0, 0, 0, 0, 0, 0, 0),
(150, 2, 2015, 0, 0, 0, 0, 0, 0, 0, 0),
(151, 3, 2015, 0, 0, 0, 0, 0, 0, 0, 0),
(152, 4, 2015, 0, 0, 0, 0, 0, 0, 0, 0),
(153, 5, 2015, 0, 0, 0, 0, 0, 0, 0, 0),
(154, 6, 2015, 0, 0, 0, 0, 0, 0, 0, 0),
(155, 7, 2015, 0, 0, 0, 0, 0, 0, 0, 0),
(156, 8, 2015, 0, 0, 0, 0, 0, 0, 0, 0),
(157, 9, 2015, 0, 0, 0, 0, 0, 0, 0, 0),
(158, 10, 2015, 0, 0, 0, 0, 0, 0, 0, 0),
(159, 11, 2015, 0, 0, 0, 0, 0, 0, 0, 0),
(160, 12, 2015, 0, 0, 0, 0, 0, 0, 0, 0),
(161, 13, 2015, 0, 0, 0, 0, 0, 0, 0, 0),
(162, 14, 2015, 0, 0, 0, 0, 0, 0, 0, 0),
(163, 1, 2016, 0, 0, 0, 0, 0, 0, 0, 0),
(164, 2, 2016, 0, 0, 0, 0, 0, 0, 0, 0),
(165, 3, 2016, 0, 0, 0, 0, 0, 0, 0, 0),
(166, 4, 2016, 0, 0, 0, 0, 0, 0, 0, 0),
(167, 5, 2016, 0, 0, 0, 0, 0, 0, 0, 0),
(168, 6, 2016, 0, 0, 0, 0, 0, 0, 0, 0),
(169, 7, 2016, 0, 0, 0, 0, 0, 0, 0, 0),
(170, 8, 2016, 0, 0, 0, 0, 0, 0, 0, 0),
(171, 9, 2016, 0, 0, 0, 0, 0, 0, 0, 0),
(172, 10, 2016, 0, 0, 0, 0, 0, 0, 0, 0),
(173, 11, 2016, 0, 0, 0, 0, 0, 0, 0, 0),
(174, 12, 2016, 0, 0, 0, 0, 0, 0, 0, 0),
(175, 13, 2016, 0, 0, 0, 0, 0, 0, 0, 0),
(176, 14, 2016, 0, 0, 0, 0, 0, 0, 0, 0),
(177, 1, 2011, 70, 0, 30, 0, 0, 0, 20, 0),
(178, 2, 2011, 100, 70, 0, 0, 0, 20, 0, 30),
(179, 3, 2011, 65, 0, 70, 0, 20, 0, 30, 0),
(180, 4, 2011, 56, 0, 0, 70, 0, 30, 0, 0),
(181, 5, 2011, 56, 0, 20, 0, 70, 0, 0, 0),
(182, 6, 2011, 56, 20, 0, 30, 0, 70, 0, 0),
(183, 8, 2011, 65, 30, 0, 0, 0, 0, 0, 70),
(184, 9, 2011, 56, 0, 10, 0, 0, 0, 50, 0),
(185, 10, 2011, 65, 40, 0, 10, 0, 50, 0, 0),
(186, 11, 2011, 56, 0, 40, 0, 50, 0, 0, 0),
(187, 12, 2011, 65, 0, 0, 50, 0, 10, 0, 0),
(188, 13, 2011, 1, 1, 1, 1, 1, 1, 1, 1),
(189, 14, 2011, 2, 2, 2, 2, 2, 2, 2, 2),
(190, 15, 2011, 3, 4, 4, 5, 6, 7, 8, 9),
(191, 1, 2012, 0, 0, 0, 0, 0, 0, 0, 0),
(192, 2, 2012, 0, 0, 0, 0, 0, 0, 0, 0),
(193, 3, 2012, 0, 0, 0, 0, 0, 0, 0, 0),
(194, 4, 2012, 0, 0, 0, 0, 0, 0, 0, 0),
(195, 5, 2012, 0, 0, 0, 0, 0, 0, 0, 0),
(196, 6, 2012, 0, 0, 0, 0, 0, 0, 0, 0),
(197, 8, 2012, 0, 0, 0, 0, 0, 0, 0, 0),
(198, 9, 2012, 0, 0, 0, 0, 0, 0, 0, 0),
(199, 10, 2012, 0, 0, 0, 0, 0, 0, 0, 0),
(200, 11, 2012, 0, 0, 0, 0, 0, 0, 0, 0),
(201, 12, 2012, 0, 0, 0, 0, 0, 0, 0, 0),
(202, 13, 2012, 0, 0, 0, 0, 0, 0, 0, 0),
(203, 14, 2012, 3, 3, 3, 0, 3, 3, 3, 34),
(204, 15, 2012, 4, 4, 4, 4, 4, 4, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_tpp`
--

CREATE TABLE IF NOT EXISTS `nilai_tpp` (
  `id_nilai_tpp` bigint(20) NOT NULL AUTO_INCREMENT,
  `tahun` int(11) DEFAULT NULL,
  `bulan` int(11) DEFAULT NULL,
  `tpp` float DEFAULT NULL,
  `pegawai_id_pegawai` int(11) NOT NULL,
  PRIMARY KEY (`id_nilai_tpp`),
  KEY `fk_nilai_tpp_pegawai1` (`pegawai_id_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `nilai_tpp`
--


-- --------------------------------------------------------

--
-- Table structure for table `pangkat_golongan`
--

CREATE TABLE IF NOT EXISTS `pangkat_golongan` (
  `id_pangkat_golongan` int(11) NOT NULL AUTO_INCREMENT,
  `TMT` date DEFAULT NULL,
  `pangkat` varchar(45) DEFAULT NULL,
  `golongan` varchar(45) DEFAULT NULL,
  `id_pegawai` int(11) NOT NULL,
  PRIMARY KEY (`id_pangkat_golongan`),
  KEY `fk_pangkat_golongan_pegawai1` (`id_pegawai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `pangkat_golongan`
--

INSERT INTO `pangkat_golongan` (`id_pangkat_golongan`, `TMT`, `pangkat`, `golongan`, `id_pegawai`) VALUES
(1, '1970-01-01', '', '-', 1),
(2, '1970-01-01', '', '-', 2),
(3, '1970-01-01', '', '-', 3),
(4, '1970-01-01', '', '-', 4),
(5, '1970-01-01', '', '-', 5),
(6, '1970-01-01', '', '-', 6),
(7, '1970-01-01', '', '-', 7),
(8, '1970-01-01', '', '-', 8),
(9, '1970-01-01', '', '-', 9),
(10, '2011-06-02', 'Penata Muda Tingkat 1', 'III / b', 10),
(11, '0000-00-00', '', '-', 11),
(12, '0000-00-00', '', '-', 12),
(13, '2011-08-17', 'Penata', 'III / c', 10),
(14, '2011-08-01', 'Penata Muda', 'III / a', 7),
(15, '0000-00-00', '', '-', 13),
(16, '2011-08-17', 'Pembina Utama Muda', 'IV / c', 10),
(17, '2011-08-17', 'Penata', 'III / c', 12),
(18, '2011-08-31', 'Pembina', 'IV / a', 12),
(19, '2011-08-01', 'Penata Muda Tingkat 1', 'III / b', 1),
(20, '2011-08-02', 'Penata Tingkat 1', 'III / d', 2),
(21, '2011-08-10', 'Pembina Utama Muda', 'IV / c', 14),
(22, '0000-00-00', '', 'I / a', 15);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id_pegawai` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(18) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(45) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jk` enum('L','P') DEFAULT NULL,
  `agama` varchar(45) DEFAULT NULL,
  `gol_darah` varchar(10) DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `pasfoto` varchar(255) DEFAULT NULL,
  `kenaikan_YAD` date DEFAULT NULL,
  `status_kepegawaian` varchar(100) DEFAULT NULL,
  `sumber_gaji` varchar(255) DEFAULT NULL,
  `id_atasan` int(11) DEFAULT NULL,
  `bp_pemda` tinyint(1) DEFAULT NULL,
  `aktif` tinyint(1) DEFAULT '1',
  `rank_pangkat` int(11) NOT NULL,
  `rank_struktural` int(11) NOT NULL,
  PRIMARY KEY (`id_pegawai`),
  KEY `fk_pegawai_pegawai` (`id_atasan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `jk`, `agama`, `gol_darah`, `telepon`, `status`, `tanggal_masuk`, `pasfoto`, `kenaikan_YAD`, `status_kepegawaian`, `sumber_gaji`, `id_atasan`, `bp_pemda`, `aktif`, `rank_pangkat`, `rank_struktural`) VALUES
(1, '', 'Pegawai Satu', '', '1970-01-01', '', '', '', '', '', '', '1970-01-01', '0', '1970-01-01', 'PNS', 'DIPA daerah', 7, 0, 1, 10, 1),
(2, 'nnn', 'Pegawai Dua', '', '1970-01-01', '', '', '', '', '', '', '1970-01-01', 'DSC00607.JPG', '1970-01-01', 'PNS', 'DIPA daerah', 7, 0, 1, 12, 1),
(3, 'mmm', 'Pegawai Tiga', '', '1970-01-01', '', '', '', '', '', '', '1970-01-01', 'DSC006071.JPG', '1970-01-01', 'PNS', 'DIPA daerah', 4, 0, 1, 0, 4),
(4, 'pppp', 'Test', '', '1970-01-01', '', '', '', '', '', '', '1970-01-01', 'DSC02143.JPG', '1970-01-01', 'PNS', 'DIPA daerah', 5, 0, 1, 0, 3),
(5, '11111', 'Kosong', '', '1945-08-17', '', '', '', '', '', '', '1970-01-01', 'colors.jpg', '1970-01-01', 'PNS', 'DIPA daerah', 6, 0, 1, 0, 2),
(6, '666', 'Enam', 'bogor', '1990-01-01', 'jauh', 'L', '', 'AB', '', 'Belum menikah', '1979-01-04', 'colors.jpg', '1970-01-01', 'CPNS', 'DIPA daerahh', 7, 1, 1, 0, 1),
(7, '', 'Pegawai Tujuh', '', '1972-01-01', '', '', '', '', '', '', '1970-01-01', '0', '1970-01-13', 'PNS', 'DIPA daerah', NULL, 0, 1, 0, 0),
(8, '', 'Tanpa Foto', '', '1970-01-01', '', '', '', '', '', '', '1970-01-01', '', '1970-01-01', 'PNS', 'DIPA daerah', 7, 0, 1, 0, 1),
(9, '', 'Fulann', '', '1971-01-01', '', '', '', '', '', '', '1970-01-01', 'naruto_sasuke0004.jpg', '1970-01-01', 'PNS', 'DIPA daerah', 7, 0, 1, 0, 1),
(10, '123454321', 'Muhammad Abrar', 'Klaten', '1990-08-29', 'Bogor', 'L', 'Islam', 'B', '081379915387', 'Menikah', '2011-07-14', 'naruto_sasuke0004.jpg', '2011-08-19', 'PNS', 'DIPA daerah', 7, 0, 1, 0, 1),
(11, '', 'Tanpa poto', '', '0000-00-00', '', 'P', '', '', '', '', '2011-07-02', 'Y400_right_bright_.jpg', '0000-00-00', 'PNS', 'DIPA daerah', 7, 0, 1, 0, 1),
(12, '', 'Catur', '', '0000-00-00', '', '', '', '', '', '', '0000-00-00', '0', '0000-00-00', 'PNS', 'DIPA daerah', 7, 1, 1, 13, 1),
(13, '', '', '', '0000-00-00', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', 'PNS', 'DIPA daerah', 7, 0, 1, 0, 1),
(14, '556166121267152', 'Yanto Suyanto', 'Bolanganmongondow', '1976-08-12', 'Perumahan', '', '', '', '', '', '0000-00-00', '', '0000-00-00', 'PNS', 'DIPA daerah', 10, 0, 1, 15, 2),
(15, '', 'Fulan Subarkah', '', '0000-00-00', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', 'PNS', 'DIPA daerah', 2, 0, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pelatihan`
--

CREATE TABLE IF NOT EXISTS `pelatihan` (
  `id_pelatihan` int(11) NOT NULL AUTO_INCREMENT,
  `tahun` int(11) DEFAULT NULL,
  `pelatihan` varchar(255) DEFAULT NULL,
  `id_pegawai` int(11) NOT NULL,
  PRIMARY KEY (`id_pelatihan`),
  KEY `fk_pelatihan_pegawai1` (`id_pegawai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pelatihan`
--

INSERT INTO `pelatihan` (`id_pelatihan`, `tahun`, `pelatihan`, `id_pegawai`) VALUES
(1, 2000, 'Saya', 4),
(2, 2001, 'pendidikan 1', 5),
(3, 2003, 'pendidikan 2', 5),
(4, 2011, 'Pelatihan PHP', 10),
(5, 2012, 'Pelatihan Sekuriti', 10);

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE IF NOT EXISTS `pendidikan` (
  `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_ijazah` int(11) DEFAULT NULL,
  `pendidikan` varchar(255) DEFAULT NULL,
  `id_pegawai` int(11) NOT NULL,
  PRIMARY KEY (`id_pendidikan`),
  KEY `fk_pendidikan_pegawai1` (`id_pegawai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id_pendidikan`, `tahun_ijazah`, `pendidikan`, `id_pegawai`) VALUES
(1, 2000, 'Saya', 4),
(2, 2001, 'pendidikan 1', 5),
(3, 2003, 'pendidikan 2', 5),
(4, 2008, 'SMA N 1 Metro', 10),
(5, 2012, 'Institut Pertanian Bogor', 10),
(12, 2005, 'SMP Negeri 1 Metro', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tanggal_libur`
--

CREATE TABLE IF NOT EXISTS `tanggal_libur` (
  `id_tanggal_libur` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `bp_pemda` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_tanggal_libur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tanggal_libur`
--

INSERT INTO `tanggal_libur` (`id_tanggal_libur`, `tanggal`, `keterangan`, `bp_pemda`) VALUES
(8, '2011-07-29', 'Liburr', 0),
(9, '2011-07-30', 'Testing', 0),
(10, '2011-07-08', 'Lalalalala', 1),
(11, '2011-08-17', 'Kemerdekaan', 0),
(12, '2011-08-17', 'Kemerdekaan RI', 1),
(13, '2011-08-18', 'Lanjut kemerdekaan', 1),
(14, '2011-08-02', 'Test', 0),
(15, '2011-07-14', 'Test', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tanggungan`
--

CREATE TABLE IF NOT EXISTS `tanggungan` (
  `id_tanggungan` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tanggal_nikah` date DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `dapat_tunjangan` tinyint(1) DEFAULT NULL,
  `keterangan` varchar(45) DEFAULT NULL,
  `id_pegawai` int(11) NOT NULL,
  PRIMARY KEY (`id_tanggungan`),
  KEY `fk_tanggungan_pegawai1` (`id_pegawai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tanggungan`
--

INSERT INTO `tanggungan` (`id_tanggungan`, `nama`, `tanggal_lahir`, `tanggal_nikah`, `pekerjaan`, `dapat_tunjangan`, `keterangan`, `id_pegawai`) VALUES
(1, 'tttt', '1970-01-01', '1970-01-01', '', 1, 'uuuu', 4),
(2, 'tanggungan 1', '1970-01-01', '1970-01-01', '', 0, '', 5),
(3, 'tanggungan 2', '1970-01-01', '1970-01-01', '', 1, '', 5),
(4, 'Fulanah', '1990-12-04', '2014-07-03', 'Guru', 1, 'Istri', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tunjangan`
--

CREATE TABLE IF NOT EXISTS `tunjangan` (
  `id_tunjangan` int(11) NOT NULL AUTO_INCREMENT,
  `tahun` int(11) DEFAULT NULL,
  `bulan` int(11) DEFAULT NULL,
  `tunjangan` decimal(12,4) DEFAULT NULL,
  `pph21` decimal(12,4) DEFAULT NULL,
  `pegawai_id_pegawai` int(11) NOT NULL,
  PRIMARY KEY (`id_tunjangan`),
  KEY `fk_tunjangan_pegawai1` (`pegawai_id_pegawai`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=202 ;

--
-- Dumping data for table `tunjangan`
--

INSERT INTO `tunjangan` (`id_tunjangan`, `tahun`, `bulan`, `tunjangan`, `pph21`, `pegawai_id_pegawai`) VALUES
(198, 2011, 8, '750000.0000', '37500.0000', 12),
(197, 2011, 8, '400000.0000', '0.0000', 11),
(196, 2011, 8, '800000.0000', '120000.0000', 10),
(195, 2011, 8, '700000.0000', '0.0000', 9),
(194, 2011, 8, '600000.0000', '0.0000', 8),
(193, 2011, 8, '600000.0000', '90000.0000', 7),
(192, 2011, 8, '500000.0000', '0.0000', 6),
(191, 2011, 8, '500000.0000', '0.0000', 5),
(190, 2011, 8, '70000.0000', '0.0000', 4),
(189, 2011, 8, '70000.0000', '0.0000', 3),
(188, 2011, 8, '70000.0000', '10500.0000', 2),
(187, 2011, 8, '1500000.0000', '225000.0000', 1),
(97, 2011, 7, '0.0000', '0.0000', 12),
(96, 2011, 7, '0.0000', '0.0000', 11),
(95, 2011, 7, '0.0000', '0.0000', 10),
(94, 2011, 7, '0.0000', '0.0000', 9),
(93, 2011, 7, '0.0000', '0.0000', 8),
(92, 2011, 7, '0.0000', '0.0000', 7),
(91, 2011, 7, '0.0000', '0.0000', 6),
(90, 2011, 7, '0.0000', '0.0000', 5),
(89, 2011, 7, '0.0000', '0.0000', 4),
(88, 2011, 7, '300000.0000', '300000.0000', 3),
(87, 2011, 7, '1500000.0000', '400000.0000', 2),
(86, 2011, 7, '1200000.0000', '0.0000', 1),
(49, 2010, 7, '0.0000', '0.0000', 1),
(50, 2010, 7, '0.0000', '0.0000', 2),
(51, 2010, 7, '0.0000', '0.0000', 3),
(52, 2010, 7, '0.0000', '0.0000', 4),
(53, 2010, 7, '0.0000', '0.0000', 5),
(54, 2010, 7, '0.0000', '0.0000', 6),
(55, 2010, 7, '0.0000', '0.0000', 7),
(56, 2010, 7, '0.0000', '0.0000', 8),
(57, 2010, 7, '0.0000', '0.0000', 9),
(58, 2010, 7, '0.0000', '0.0000', 10),
(59, 2010, 7, '0.0000', '0.0000', 11),
(60, 2010, 7, '0.0000', '0.0000', 12),
(61, 2011, 9, '0.0000', '0.0000', 1),
(62, 2011, 9, '0.0000', '0.0000', 2),
(63, 2011, 9, '0.0000', '0.0000', 3),
(64, 2011, 9, '0.0000', '0.0000', 4),
(65, 2011, 9, '0.0000', '0.0000', 5),
(66, 2011, 9, '0.0000', '0.0000', 6),
(67, 2011, 9, '0.0000', '0.0000', 7),
(68, 2011, 9, '0.0000', '0.0000', 8),
(69, 2011, 9, '0.0000', '0.0000', 9),
(70, 2011, 9, '0.0000', '0.0000', 10),
(71, 2011, 9, '0.0000', '0.0000', 11),
(72, 2011, 9, '0.0000', '0.0000', 12),
(73, 2011, 9, '0.0000', '0.0000', 13),
(158, 2011, 12, '0.0000', '0.0000', 1),
(159, 2011, 12, '0.0000', '0.0000', 2),
(160, 2011, 12, '0.0000', '0.0000', 3),
(161, 2011, 12, '0.0000', '0.0000', 4),
(162, 2011, 12, '0.0000', '0.0000', 5),
(163, 2011, 12, '0.0000', '0.0000', 6),
(164, 2011, 12, '0.0000', '0.0000', 7),
(165, 2011, 12, '0.0000', '0.0000', 8),
(166, 2011, 12, '0.0000', '0.0000', 9),
(167, 2011, 12, '0.0000', '0.0000', 10),
(168, 2011, 12, '0.0000', '0.0000', 11),
(169, 2011, 12, '0.0000', '0.0000', 12),
(170, 2011, 12, '0.0000', '0.0000', 13),
(171, 2011, 12, '0.0000', '0.0000', 14),
(172, 2011, 11, '1500000.0000', '225000.0000', 1),
(173, 2011, 11, '1250000.0000', '187500.0000', 2),
(174, 2011, 11, '1000000.0000', '0.0000', 3),
(175, 2011, 11, '750000.0000', '0.0000', 4),
(176, 2011, 11, '300000.0000', '0.0000', 5),
(177, 2011, 11, '300000.0000', '0.0000', 6),
(178, 2011, 11, '300000.0000', '45000.0000', 7),
(179, 2011, 11, '300000.0000', '0.0000', 8),
(180, 2011, 11, '300000.0000', '0.0000', 9),
(181, 2011, 11, '300000.0000', '45000.0000', 10),
(182, 2011, 11, '300000.0000', '0.0000', 11),
(183, 2011, 11, '600000.0000', '30000.0000', 12),
(184, 2011, 11, '600000.0000', '0.0000', 13),
(185, 2011, 11, '600000.0000', '30000.0000', 14),
(186, 2011, 11, '600000.0000', '0.0000', 15),
(199, 2011, 8, '0.0000', '0.0000', 13),
(200, 2011, 8, '0.0000', '0.0000', 14),
(201, 2011, 8, '0.0000', '0.0000', 15);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `fk_absensi_pegawai1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cuti`
--
ALTER TABLE `cuti`
  ADD CONSTRAINT `fk_cuti_pegawai1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `gaji`
--
ALTER TABLE `gaji`
  ADD CONSTRAINT `fk_gaji_pegawai1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD CONSTRAINT `fk_jabatan_pegawai1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `fk_kegiatan_pegawai1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `nilai_dp3`
--
ALTER TABLE `nilai_dp3`
  ADD CONSTRAINT `fk_dp3_pegawai1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `nilai_tpp`
--
ALTER TABLE `nilai_tpp`
  ADD CONSTRAINT `fk_nilai_tpp_pegawai1` FOREIGN KEY (`pegawai_id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pangkat_golongan`
--
ALTER TABLE `pangkat_golongan`
  ADD CONSTRAINT `fk_pangkat_golongan_pegawai1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `fk_pegawai_pegawai` FOREIGN KEY (`id_atasan`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD CONSTRAINT `fk_pelatihan_pegawai1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD CONSTRAINT `fk_pendidikan_pegawai1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tanggungan`
--
ALTER TABLE `tanggungan`
  ADD CONSTRAINT `fk_tanggungan_pegawai1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE NO ACTION ON UPDATE NO ACTION;
