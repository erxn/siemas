-- phpMyAdmin SQL Dump
-- version 3.3.2deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 04, 2011 at 09:45 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `tanggal`, `hadir`, `jam_hadir`, `id_pegawai`) VALUES
(27, '2011-08-03', 1, '00:00:00', 1),
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
(51, '2011-08-11', 1, '07:30:00', 1),
(52, '2011-08-11', 1, '07:30:00', 2),
(53, '2011-08-11', 1, '07:30:00', 3),
(54, '2011-08-11', 1, '07:30:00', 4),
(55, '2011-08-11', 1, '07:30:00', 5),
(56, '2011-08-11', 1, '07:30:00', 7),
(57, '2011-08-11', 1, '07:30:00', 8),
(58, '2011-08-11', 1, '07:30:00', 9),
(59, '2011-08-11', 0, '07:30:00', 10),
(60, '2011-08-11', 0, '07:30:00', 11),
(61, '2011-08-11', 0, '07:30:00', 6),
(62, '2011-08-11', 0, '07:30:00', 12);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`id_cuti`, `tanggal_mulai`, `tanggal_selesai`, `keperluan`, `alamat_cuti`, `id_pegawai`, `keterangan`) VALUES
(1, '2011-07-31', '2011-08-03', 'Cuti bersalin', 'Bogor', 10, ':)'),
(2, '2011-08-07', '2011-08-17', 'Cuti tahunan', '...', 7, ''),
(3, '2011-07-07', '2011-08-29', 'Cuti tahunan', '.....', 12, '.....'),
(5, '2011-08-09', '2011-08-10', 'Cuti tahunan', 'jdgjds', 10, 'jasdgasjd'),
(7, '2011-08-01', '2011-10-31', 'Cuti karena alasan penting', '', 10, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

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
(14, '2011-08-03', '45678900.0000', 9);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

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
(13, '2000-01-05', 'Mahasiswa', 10);

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
(9, 'jumat', '00:00:00', '00:00:00', 0, 1),
(10, 'jumat', '00:00:00', '00:00:00', 1, 1),
(11, 'sabtu', '00:00:00', '00:00:00', 0, 1),
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `tanggal`, `lokasi`, `kegiatan`, `id_pegawai`) VALUES
(1, '2011-08-02', 'IPB', 'Ngajar', 10);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=109 ;

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
(97, 1, 2011, 70, 0, 30, 0, 0, 0, 20, 0),
(98, 2, 2011, 100, 70, 0, 0, 0, 20, 0, 30),
(99, 3, 2011, 65, 0, 70, 0, 20, 0, 30, 0),
(100, 4, 2011, 56, 0, 0, 70, 0, 30, 0, 0),
(101, 5, 2011, 56, 0, 20, 0, 70, 0, 0, 0),
(102, 6, 2011, 56, 20, 0, 30, 0, 70, 0, 0),
(103, 7, 2011, 65, 0, 30, 0, 0, 0, 70, 0),
(104, 8, 2011, 65, 30, 0, 0, 0, 0, 0, 70),
(105, 9, 2011, 56, 0, 10, 0, 0, 0, 50, 0),
(106, 10, 2011, 65, 40, 0, 10, 0, 50, 0, 0),
(107, 11, 2011, 56, 0, 40, 0, 50, 0, 0, 0),
(108, 12, 2011, 65, 0, 0, 50, 0, 10, 0, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

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
(12, '0000-00-00', '', '-', 12);

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
  PRIMARY KEY (`id_pegawai`),
  KEY `fk_pegawai_pegawai` (`id_atasan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `jk`, `agama`, `gol_darah`, `telepon`, `status`, `tanggal_masuk`, `pasfoto`, `kenaikan_YAD`, `status_kepegawaian`, `sumber_gaji`, `id_atasan`, `bp_pemda`, `aktif`) VALUES
(1, '', 'Pegawai Satu', '', '1970-01-01', '', '', '', '', '', '', '1970-01-01', '0', '1970-01-01', 'PNS', 'DIPA daerah', 4, 0, 1),
(2, 'nnn', 'Pegawai Dua', '', '1970-01-01', '', '', '', '', '', '', '1970-01-01', 'DSC00607.JPG', '1970-01-01', 'PNS', 'DIPA daerah', 4, 0, 1),
(3, 'mmm', 'Pegawai Tiga', '', '1970-01-01', '', '', '', '', '', '', '1970-01-01', 'DSC006071.JPG', '1970-01-01', 'PNS', 'DIPA daerah', 4, 0, 1),
(4, 'pppp', 'Test', '', '1970-01-01', '', '', '', '', '', '', '1970-01-01', 'DSC02143.JPG', '1970-01-01', 'PNS', 'DIPA daerah', NULL, 0, 1),
(5, '11111', 'Kosong', '', '1945-08-17', '', '', '', '', '', '', '1970-01-01', 'merokok-baru.gif', '1970-01-01', 'PNS', 'DIPA daerah', 4, 0, 1),
(6, '666', 'Enam', 'bogor', '1990-01-01', 'jauh', 'L', '', 'AB', '', 'Belum menikah', '1979-01-04', 'colors.jpg', '1970-01-01', 'CPNS', 'DIPA daerahh', 4, 1, 1),
(7, '', 'Pegawai Tujuh', '', '1972-01-01', '', '', '', '', '', '', '1970-01-01', '0', '1970-01-13', 'PNS', 'DIPA daerah', 5, 0, 1),
(8, '', 'Tanpa Foto', '', '1970-01-01', '', '', '', '', '', '', '1970-01-01', '', '1970-01-01', 'PNS', 'DIPA daerah', 5, 0, 1),
(9, '', 'Fulann', '', '1971-01-01', '', '', '', '', '', '', '1970-01-01', 'naruto_sasuke0004.jpg', '1970-01-01', 'PNS', 'DIPA daerah', 5, 0, 1),
(10, '123454321', 'Muhammad Abrar', 'Klaten', '1990-08-29', 'Bogor', 'L', 'Islam', 'B', '081379915387', 'Menikah', '2011-07-14', 'naruto_sasuke0004.jpg', '2011-07-14', 'PNS', 'DIPA daerah', 5, 0, 1),
(11, '', 'Tanpa poto', '', '0000-00-00', '', 'P', '', '', '', '', '2011-07-02', 'Y400_right_bright_.jpg', '0000-00-00', 'PNS', 'DIPA daerah', 5, 0, 1),
(12, '', 'Catur', '', '0000-00-00', '', '', '', '', '', '', '0000-00-00', '0', '0000-00-00', 'PNS', 'DIPA daerah', 10, 1, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pelatihan`
--

INSERT INTO `pelatihan` (`id_pelatihan`, `tahun`, `pelatihan`, `id_pegawai`) VALUES
(1, 2000, 'Saya', 4),
(2, 2001, 'pendidikan 1', 5),
(3, 2003, 'pendidikan 2', 5),
(4, 2011, 'Pelatihan PHP', 10),
(5, 2012, 'Pelatihan Sekuriti', 10),
(6, 2009, 'Pelatihan Java', 10);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tanggal_libur`
--

INSERT INTO `tanggal_libur` (`id_tanggal_libur`, `tanggal`, `keterangan`, `bp_pemda`) VALUES
(8, '2011-07-29', 'Liburr', 0),
(9, '2011-07-30', 'Testing', 0),
(10, '2011-07-08', 'Lalalalala', 1),
(11, '2011-08-17', 'Kemerdekaan', 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `tunjangan`
--

INSERT INTO `tunjangan` (`id_tunjangan`, `tahun`, `bulan`, `tunjangan`, `pph21`, `pegawai_id_pegawai`) VALUES
(36, 2011, 8, '750000.0000', '0.0000', 12),
(35, 2011, 8, '0.0000', '0.0000', 11),
(34, 2011, 8, '0.0000', '0.0000', 10),
(33, 2011, 8, '0.0000', '0.0000', 9),
(32, 2011, 8, '0.0000', '0.0000', 8),
(31, 2011, 8, '0.0000', '0.0000', 7),
(30, 2011, 8, '0.0000', '666000.0000', 6),
(29, 2011, 8, '0.0000', '0.0000', 5),
(28, 2011, 8, '0.0000', '0.0000', 4),
(27, 2011, 8, '0.0000', '0.0000', 3),
(26, 2011, 8, '0.0000', '0.0000', 2),
(25, 2011, 8, '1500000.0000', '0.0000', 1),
(48, 2011, 7, '0.0000', '0.0000', 12),
(47, 2011, 7, '0.0000', '0.0000', 11),
(46, 2011, 7, '0.0000', '0.0000', 10),
(45, 2011, 7, '0.0000', '0.0000', 9),
(44, 2011, 7, '0.0000', '0.0000', 8),
(43, 2011, 7, '0.0000', '0.0000', 7),
(42, 2011, 7, '0.0000', '0.0000', 6),
(41, 2011, 7, '0.0000', '0.0000', 5),
(40, 2011, 7, '0.0000', '0.0000', 4),
(39, 2011, 7, '0.0000', '300000.0000', 3),
(38, 2011, 7, '0.0000', '400000.0000', 2),
(37, 2011, 7, '0.0000', '0.0000', 1),
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
(60, 2010, 7, '0.0000', '0.0000', 12);

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
