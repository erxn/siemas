-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 12, 2010 at 10:19 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `absensi`
--


-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE IF NOT EXISTS `antrian` (
  `id_antrian` int(11) NOT NULL AUTO_INCREMENT,
  `status` enum('ANTRI','SEDANG DIPROSES','SELESAI') DEFAULT NULL,
  `id_kunjungan` int(11) NOT NULL,
  `id_poli` int(20) NOT NULL,
  PRIMARY KEY (`id_antrian`),
  KEY `fk_antrian_kunjungan1` (`id_kunjungan`),
  KEY `fk_antrian_kode_poli1` (`id_poli`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`id_antrian`, `status`, `id_kunjungan`, `id_poli`) VALUES
(3, 'SELESAI', 1, 1),
(4, 'SELESAI', 2, 1),
(6, 'SELESAI', 3, 1),
(7, 'ANTRI', 4, 3),
(8, 'ANTRI', 56, 2),
(9, 'SEDANG DIPROSES', 57, 2),
(10, 'ANTRI', 58, 2),
(11, 'ANTRI', 68, 2),
(12, 'ANTRI', 69, 5),
(13, 'ANTRI', 70, 5),
(14, 'ANTRI', 76, 1),
(15, 'ANTRI', 77, 5),
(16, 'ANTRI', 78, 5),
(17, 'ANTRI', 79, 3),
(18, 'ANTRI', 80, 2),
(19, 'ANTRI', 84, 4),
(20, 'SELESAI', 85, 2),
(21, 'SELESAI', 86, 4),
(22, 'SELESAI', 87, 2);

-- --------------------------------------------------------

--
-- Table structure for table `campak`
--

CREATE TABLE IF NOT EXISTS `campak` (
  `id_campak` int(11) NOT NULL AUTO_INCREMENT,
  `hasil_pemeriksaan` enum('Amphetamin','Carabinoid','Cpiat') DEFAULT NULL,
  PRIMARY KEY (`id_campak`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `campak`
--


-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE IF NOT EXISTS `cuti` (
  `id_cuti` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `alasan` varchar(45) DEFAULT NULL,
  `id_pegawai` int(11) NOT NULL,
  PRIMARY KEY (`id_cuti`),
  KEY `fk_cuti_pegawai1` (`id_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `cuti`
--


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
  PRIMARY KEY (`id_diare`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `diare`
--


-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `id_dokter` int(11) NOT NULL AUTO_INCREMENT,
  `poli` varchar(45) DEFAULT NULL,
  `spesialisasi` varchar(255) DEFAULT NULL,
  `id_pegawai` int(11) NOT NULL,
  PRIMARY KEY (`id_dokter`),
  KEY `fk_dokter_pegawai1` (`id_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `dokter`
--


-- --------------------------------------------------------

--
-- Table structure for table `dp3`
--

CREATE TABLE IF NOT EXISTS `dp3` (
  `id_dp3` int(11) NOT NULL AUTO_INCREMENT,
  `tahun` int(11) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  `id_pegawai` int(11) NOT NULL,
  PRIMARY KEY (`id_dp3`),
  KEY `fk_dp3_pegawai1` (`id_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `dp3`
--


-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

CREATE TABLE IF NOT EXISTS `gaji` (
  `id_gaji` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `gaji` mediumtext,
  `SK` varchar(100) DEFAULT NULL,
  `id_pegawai` int(11) NOT NULL,
  PRIMARY KEY (`id_gaji`),
  KEY `fk_gaji_pegawai1` (`id_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `gaji`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `history_harian_obat`
--


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
-- Table structure for table `hiv`
--

CREATE TABLE IF NOT EXISTS `hiv` (
  `id_hiv` int(11) NOT NULL AUTO_INCREMENT,
  `nilai_rujukan` varchar(45) DEFAULT NULL,
  `hasil_akhir` varchar(45) DEFAULT NULL,
  `satuan` varchar(45) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `id_pemeriksaan_lab` int(11) NOT NULL,
  PRIMARY KEY (`id_hiv`),
  KEY `fk_hiv_pemeriksaan_lab1` (`id_pemeriksaan_lab`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `hiv`
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
  PRIMARY KEY (`id_ispa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `ispa`
--


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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `jabatan`
--


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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `kegiatan`
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
  `kecamatan_kk` varchar(45) DEFAULT NULL,
  `kelurahan_kk` varchar(45) DEFAULT NULL,
  `kota_kab_kk` varchar(45) DEFAULT NULL,
  `status_wil_luar` enum('Luar Wilayah','Luar Kota Bogor') DEFAULT NULL,
  PRIMARY KEY (`id_kk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `kk`
--

INSERT INTO `kk` (`id_kk`, `tanggal_pendaftaran`, `nama_kk`, `jk_kk`, `alamat_kk`, `kecamatan_kk`, `kelurahan_kk`, `kota_kab_kk`, `status_wil_luar`) VALUES
(1, '2011-08-04', 'Bagus Dipo Negoro', 'Laki-laki', 'Jl. Kapten Muslihat No.24', 'Cibogor', 'Bogor Tengah', 'Bogor', ''),
(2, '2011-08-04', 'Bagus Dipo Negoro', 'Laki-laki', 'Jl. Kapten Muslihat No.24', 'Cibogor', 'Bogor Tengah', 'Bogor', ''),
(3, '2011-08-02', '', '', '', '', '', '', ''),
(4, '2011-08-04', 'Nugaraha Kusuma', 'Laki-laki', 'Jl. Babakan Raya 4', 'Pabaton', 'Bogor Tengah', 'Bogor', ''),
(6, '2011-08-07', 'Mustofah', 'Laki-laki', 'Jl. Bara 3', 'Pabaton', 'Bogor Tengah', 'Bogor', ''),
(7, '2011-08-07', 'Mustofah', 'Laki-laki', 'Jl. Bara 3', 'Pabaton', 'Bogor Tengah', 'Bogor', ''),
(8, '2011-08-07', 'Julian', 'Laki-laki', 'Jl. Balio V', 'Bojong Gede', 'Rawa Panjang', 'Bogor', 'Luar Wilayah'),
(9, '2011-08-07', 'Hidayat', 'Laki-laki', 'Jl. Perwira VIII', 'Kebon Pedes', 'Bogor Barat', 'Bogor', 'Luar Wilayah'),
(11, '2011-08-07', 'Firman Ardiansyah', 'Laki-laki', 'Jl. bogor Raya', 'Pabaton', 'Bogor Tengah', 'Bogor', ''),
(12, '2011-08-08', 'Sentosa Kurniawan', 'Laki-laki', 'Jalan Bangau Raya 54', 'Sukmajaya', 'Suka Rejo', 'Depok', 'Luar Kota Bogor'),
(13, '2011-08-08', 'lalalala', 'Laki-laki', 'lalalala', 'lalalala', 'alalala', 'alala', 'Luar Wilayah'),
(14, '2011-08-08', 'Raden Bagus Dimas', 'Laki-laki', 'Jl. Kapten Muslihat 6', 'Cibogor', 'Bogor Tengah', 'Bogor', ''),
(15, '2011-08-08', 'kelik Supriadi', 'Laki-laki', 'jl. Pendidikan 6', 'Tanah Sareal', 'Kebon Pedes', 'Bogor', 'Luar Wilayah'),
(16, '2011-08-12', '', '', '', '', '', '', ''),
(17, '2011-08-12', '', '', '', '', '', '', ''),
(18, '2010-08-11', '', '', '', '', '', '', ''),
(19, '2010-08-11', '', '', '', '', '', '', ''),
(20, '2011-08-11', 'Saya', 'Perempuan', '', '', '', '', ''),
(21, '2011-08-11', '', '', '', '', '', '', ''),
(22, '2011-08-11', 'Karimul', 'Laki-laki', 'jala bogor', '', '', '', 'Luar Kota Bogor'),
(23, '2011-08-11', 'Putra Muslim', 'Laki-laki', 'Jl. Mustar', 'Pabaton', 'Bogor Tengah', 'Bogor', ''),
(24, '2011-08-17', '', '', '', '', '', '', '');

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
  PRIMARY KEY (`id_kunjungan`),
  KEY `fk_kunjungan_pasien2` (`id_pasien`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`id_kunjungan`, `no_kunjungan`, `id_pasien`, `tanggal_kunjungan`, `status_pembayaran`, `total_harga`) VALUES
(1, 1, 4, '2011-08-11', 'Lunas', 35000),
(2, 2, 5, '2011-08-11', 'Lunas', 3000),
(3, 3, 6, '2011-08-11', 'Belum Lunas', 0),
(4, 4, 7, '2011-08-11', 'Lunas', 10000),
(5, 5, 8, '2011-08-07', 'Belum Lunas', 150000),
(6, 6, 15, '2011-08-07', 'Lunas', 30000),
(7, 7, 16, '2011-08-07', 'Lunas', 0),
(8, 8, 17, '2011-08-11', 'Belum Lunas', 0),
(9, 9, 18, '2011-08-07', 'Lunas', 0),
(10, 10, 19, '2011-08-07', 'Lunas', 0),
(11, 11, 20, '2011-08-07', 'Lunas', 0),
(12, 12, 21, '2011-08-07', 'Lunas', 0),
(13, 13, 22, '2011-08-07', 'Lunas', 0),
(14, 1, 24, '2011-08-08', 'Lunas', 0),
(15, 2, 25, '2011-08-08', 'Lunas', 0),
(16, 3, 26, '2011-08-08', 'Lunas', 0),
(17, 4, 27, '2011-08-08', 'Lunas', 0),
(18, 5, 28, '2011-08-08', 'Lunas', 0),
(19, 6, 29, '2011-08-08', 'Lunas', 0),
(20, 7, 30, '2011-08-08', 'Lunas', 0),
(21, 8, 31, '2011-08-08', 'Lunas', 0),
(22, 9, 32, '2011-08-08', 'Lunas', 0),
(23, 10, 33, '2011-08-08', 'Lunas', 0),
(24, 11, 34, '2011-08-08', 'Lunas', 0),
(25, 12, 35, '2011-08-08', 'Lunas', 0),
(26, 13, 36, '2011-08-08', 'Lunas', 0),
(27, 14, 37, '2011-08-08', 'Lunas', 0),
(28, 15, 38, '2011-08-08', 'Lunas', 0),
(29, 16, 39, '2011-08-08', 'Lunas', 0),
(30, 17, 40, '2011-08-08', 'Lunas', 0),
(31, 1, 41, '2011-08-12', NULL, NULL),
(32, 2, 42, '2011-08-12', NULL, NULL),
(33, 5, 43, '2011-08-11', 'Belum Lunas', NULL),
(34, 0, 2, NULL, 'Belum Lunas', NULL),
(35, 0, 2, '2011-08-11', 'Belum Lunas', NULL),
(36, 0, 2, NULL, 'Belum Lunas', NULL),
(37, 1, 44, '2010-08-11', 'Belum Lunas', NULL),
(39, 8, 45, '2011-08-11', 'Belum Lunas', NULL),
(40, 9, 46, '2011-08-11', 'Belum Lunas', NULL),
(41, 10, 47, '2011-08-11', 'Belum Lunas', NULL),
(42, 11, 48, '2011-08-11', 'Belum Lunas', NULL),
(43, 12, 49, '2011-08-11', 'Belum Lunas', NULL),
(44, 13, 50, '2011-08-11', 'Belum Lunas', NULL),
(45, 14, 51, '2011-08-11', 'Belum Lunas', NULL),
(46, 15, 52, '2011-08-11', 'Belum Lunas', NULL),
(47, 16, 53, '2011-08-11', 'Belum Lunas', NULL),
(48, 17, 54, '2011-08-11', 'Belum Lunas', NULL),
(49, 18, 55, '2011-08-11', 'Belum Lunas', NULL),
(50, 19, 56, '2011-08-11', 'Belum Lunas', NULL),
(51, 20, 57, '2011-08-11', 'Belum Lunas', NULL),
(52, 21, 58, '2011-08-11', 'Belum Lunas', NULL),
(53, 22, 59, '2011-08-11', 'Belum Lunas', NULL),
(54, 23, 60, '2011-08-11', 'Belum Lunas', NULL),
(55, 24, 61, '2011-08-11', 'Belum Lunas', NULL),
(56, 25, 62, '2011-08-11', 'Belum Lunas', NULL),
(57, 26, 63, '2011-08-11', 'Belum Lunas', NULL),
(58, 27, 64, '2011-08-11', 'Belum Lunas', NULL),
(59, 28, 65, '2011-08-11', NULL, NULL),
(60, 29, 66, '2011-08-11', NULL, NULL),
(61, 30, 67, '2011-08-11', NULL, NULL),
(62, 31, 68, '2011-08-11', NULL, NULL),
(63, 1, 17, '2011-08-17', NULL, NULL),
(64, 2, 17, '2011-08-17', NULL, NULL),
(65, 3, 10, '2011-08-17', NULL, NULL),
(66, 4, 15, '2011-08-17', NULL, NULL),
(67, 5, 38, '2011-08-17', NULL, NULL),
(68, 32, 15, '2011-08-11', NULL, NULL),
(69, 33, 29, '2011-08-11', NULL, NULL),
(70, 34, 1, '2011-08-11', NULL, NULL),
(71, 6, 29, '2011-08-17', NULL, NULL),
(72, 7, 29, '2011-08-17', NULL, NULL),
(73, 8, 29, '2011-08-17', NULL, NULL),
(74, 9, 29, '2011-08-17', NULL, NULL),
(75, 10, 29, '2011-08-17', NULL, NULL),
(76, 11, 29, '2011-08-17', NULL, NULL),
(77, 12, 1, '2011-08-17', NULL, NULL),
(78, 13, 26, '2011-08-17', NULL, NULL),
(79, 14, 20, '2011-08-17', NULL, NULL),
(80, 15, 28, '2011-08-17', NULL, NULL),
(81, 16, 65, '2011-08-17', NULL, NULL),
(82, 17, 65, '2011-08-17', NULL, NULL),
(83, 18, 65, '2011-08-17', NULL, NULL),
(84, 19, 65, '2011-08-17', NULL, NULL),
(85, 35, 26, '2011-08-11', 'Belum Lunas', NULL),
(86, 36, 40, '2011-08-11', 'Lunas', 3000),
(87, 37, 16, '2011-08-11', 'Lunas', 145000);

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan_has_layanan`
--

CREATE TABLE IF NOT EXISTS `kunjungan_has_layanan` (
  `id_kunjungan` int(11) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `harga_layanan` float DEFAULT NULL,
  `poli` enum('GIGI','KIA','LAB','RADIOLOGI','UMUM') DEFAULT NULL,
  PRIMARY KEY (`id_kunjungan`,`id_layanan`),
  KEY `fk_kunjungan_has_layanan_layanan1` (`id_layanan`),
  KEY `fk_kunjungan_has_layanan_kunjungan1` (`id_kunjungan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kunjungan_has_layanan`
--

INSERT INTO `kunjungan_has_layanan` (`id_kunjungan`, `id_layanan`, `harga_layanan`, `poli`) VALUES
(1, 64, 35000, 'GIGI'),
(2, 71, 3000, 'GIGI'),
(86, 71, 3000, 'GIGI'),
(87, 64, 35000, 'KIA'),
(87, 65, 60000, 'KIA'),
(87, 70, 25000, 'UMUM'),
(87, 71, 30000, 'KIA'),
(87, 72, 25000, 'RADIOLOGI');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE IF NOT EXISTS `layanan` (
  `id_layanan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_layanan` varchar(100) DEFAULT NULL,
  `harga` float DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_layanan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `nama_layanan`, `harga`, `keterangan`) VALUES
(1, '-', 0, ''),
(2, 'Tambal gigi sementara', 10, ''),
(3, 'Tambal gigi tetap amalgam', 20, ''),
(4, 'Tambal gigi tetap silikat', 15, ''),
(5, 'Tambal gigi dengan glass ionomer', 20, ''),
(6, 'Tambal light Curing', 50, ''),
(7, 'Cabut gigi susu', 15, ''),
(8, 'Cabut gigi tetap', 15, ''),
(9, 'Alveolektomi 1 gigi', 15, ''),
(10, 'Ekstraksi gigi dg komplikasi', 20, ''),
(11, 'Odontektomi ringan', 200, ''),
(12, 'Scalling per-regio', 12.5, ''),
(13, 'Gigi tiruan lepas sebagian', 100, ''),
(14, 'Tambahan 1 gigi', 30, ''),
(15, 'Saddle prothesy', 200, ''),
(16, 'Jacket Crown Acrylic', 200, ''),
(17, 'Jacket Crown Porcelain', 400, ''),
(18, 'Jacket Crown Metal', 350, ''),
(19, 'Gigi tiruan penuh 1 rahang', 600, ''),
(20, 'Ordhonti ringan', 600, ''),
(21, 'KB', 20, ''),
(22, 'Melahirkan', 500, ''),
(23, 'Hemoglobin', 3500, ''),
(24, 'Lekosit', 4000, ''),
(25, 'LED', 4000, ''),
(26, 'Hitung Jenis Lekosit', 4500, ''),
(27, 'Eritrosit', 4500, ''),
(28, 'Trombosit', 5000, ''),
(29, 'Hematokrit', 4000, ''),
(30, 'Masa Pendarahan', 4000, ''),
(31, 'Masa Pembekuan', 4000, ''),
(32, 'Golongan darah + Rhesus', 10000, ''),
(33, 'Alkali Phospahatase', 15000, NULL),
(34, 'Gula Darah', 12000, NULL),
(35, 'Ureum', 13000, NULL),
(36, 'Kreatinin', 15000, NULL),
(37, 'Asam Urat', 16000, NULL),
(38, 'Kolesterol', 16000, NULL),
(39, 'HDL Kolesterol', 15500, NULL),
(40, 'LDL Kolesterol', 10500, NULL),
(41, 'Trigliserida', 16000, NULL),
(42, 'Bilirubin Total', 13000, NULL),
(43, 'Bilirubin Total', 13000, NULL),
(44, 'Bilirubin Direk', 13000, NULL),
(45, 'SGOT', 14000, NULL),
(46, 'SGPT', 14000, NULL),
(47, 'Gamma GT', 16500, NULL),
(48, 'Albumin', 15000, NULL),
(49, 'Globulin', 10000, NULL),
(50, 'Protein Total', 20000, NULL),
(51, 'TTT (Timol Turbidity Tes)', 15000, NULL),
(52, 'Persalinan', 350000, NULL),
(53, 'Persalinan dengan tindakan ringan', 400000, NULL),
(54, 'Kuretasi', 1e+006, NULL),
(55, 'Vasektomi', 400000, NULL),
(56, 'Tubektomi', 500000, NULL),
(57, 'Pemasangan IUD', 100000, NULL),
(58, 'Pencabutan IUD tanpa penyulit', 15000, NULL),
(59, 'Pemasangan Inplant', 150000, NULL),
(60, 'Pencabutan Inplant', 40000, NULL),
(61, 'Suntik KB 3 bulan', 12000, NULL),
(62, 'Suntik KB 1 bulan', 15000, NULL),
(63, 'KB Pil 1 bulan', 10000, NULL),
(64, 'EKG', 35000, 'EKG'),
(65, 'USG', 60000, 'USG'),
(66, 'TT Catin Pria', 10000, NULL),
(67, 'TT Catin Wanita', 15000, NULL),
(68, 'Pem. Kesehatan Calon Haji (Wanita Usia Subur)', 40000, NULL),
(69, 'Pem. Kesehatan Calon Haji (Wanita Bukan Usia Subur)', 25000, NULL),
(70, 'Pem. Kesehatan Calon Haji (Laki-laki)', 25000, NULL),
(71, 'Mantuox', 3000, NULL),
(72, 'Pemeriksaan X-ray gigi', 25000, 'RADIOLOGI'),
(73, 'Pemeriksaan Thorax Foto', 40000, 'RADIOLOGI');

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
-- Table structure for table `narkoba`
--

CREATE TABLE IF NOT EXISTS `narkoba` (
  `id_narkoba` int(11) NOT NULL,
  `test_amphetamin` enum('Positif','Negatif') DEFAULT NULL,
  `test_narkoba` enum('Positif','Negatif') DEFAULT NULL,
  `test_opiat` enum('Positif','Negatif') DEFAULT NULL,
  `hasil_akhir` enum('Ada Zat Psikotropika','Tidak ada zat psikotropika') DEFAULT NULL,
  `id_pemeriksaan_lab` int(11) NOT NULL,
  PRIMARY KEY (`id_narkoba`),
  KEY `fk_narkoba_pemeriksaan_lab1` (`id_pemeriksaan_lab`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `narkoba`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `obat`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `pangkat_golongan`
--


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
  `no_kartu_layanan` bigint(20) DEFAULT NULL,
  `id_KK` int(11) DEFAULT NULL,
  `kode_pasien` varchar(50) DEFAULT NULL,
  `total_harga` float DEFAULT NULL,
  PRIMARY KEY (`id_pasien`),
  KEY `fk_pasien_KK` (`id_KK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `tanggal_pendaftaran`, `nama_pasien`, `jk_pasien`, `tanggal_lahir`, `status_dalam_keluarga`, `id_kunjungan`, `status_pelayanan`, `no_kartu_layanan`, `id_KK`, `kode_pasien`, `total_harga`) VALUES
(1, '2011-08-04', 'Annisa Anastasia', 'Perempuan', '1990-12-04', 'Ibu', NULL, 'Askes', 11233466, 4, 'A-0004-1', NULL),
(2, '2011-08-07', 'Raden Bagus', 'Laki-laki', '2000-01-04', 'Ibu', NULL, 'Askes', 12345678, 6, 'R-0006-1', NULL),
(3, '2011-08-07', 'Raden Bagus', 'Laki-laki', '2000-01-04', 'Ibu', NULL, 'Askes', 12345678, 6, 'R-0006-2', NULL),
(4, '2011-08-07', 'Farhad Alaydrus', 'Laki-laki', '1981-01-04', 'Kepala Keluarga', NULL, 'Askes', 12345678, 6, 'R-0006-3', NULL),
(5, '2011-08-07', 'Fahri Amirullah', 'Laki-laki', '1960-01-04', 'Kakek', NULL, 'Askes', 12345678, 6, 'R-0006-4', NULL),
(6, '2011-08-07', 'Neri Petri Anti', 'Perempuan', '2010-01-04', 'Anak', NULL, 'Askes', 12345678, 6, 'R-0006-5', NULL),
(7, '2011-08-07', 'Anita Daulay', 'Perempuan', '2000-01-04', 'Tinggal Sementara', NULL, 'Askes', 12345678, 6, 'R-0006-6', NULL),
(8, '2011-08-07', 'Anira', 'Perempuan', '2005-04-05', 'Ibu', NULL, 'Askes', 12345, 7, 'A-0007-1', NULL),
(9, '2011-08-07', 'Tiara', 'Perempuan', '2007-04-05', 'Ibu', NULL, 'Jamkesmas', 12345888, 7, 'T-0007-2', NULL),
(10, '2011-08-07', 'Febri', 'Laki-laki', '1995-09-12', 'Ibu', NULL, 'Lain-lain', 0, 7, 'F-0007-3', NULL),
(11, '2011-08-07', 'Yeni', 'Perempuan', '1979-10-13', 'Kepala Keluarga', NULL, 'Umum', 0, 7, 'Y-0007-4', NULL),
(12, '2011-08-07', 'Yeni', 'Perempuan', '1979-10-13', 'Kepala Keluarga', NULL, 'Umum', 0, 7, 'Y-0007-5', NULL),
(13, '2011-08-07', 'Aditya Aradika', 'Laki-laki', '1992-10-24', 'Ibu', NULL, 'Askes', 112345, 8, 'A-0008-1', NULL),
(14, '2011-08-07', 'Aditya Aradika', 'Laki-laki', '1992-10-24', 'Ibu', NULL, 'Askes', 112345, 8, 'A-0008-2', NULL),
(15, '2011-08-07', 'Aditya Aradika', 'Laki-laki', '1992-10-24', 'Ibu', NULL, 'Askes', 112345, 8, 'A-0008-3', NULL),
(16, '2011-08-07', 'Aditya Aradika', 'Laki-laki', '1992-10-24', 'Ibu', NULL, 'Askes', 112345, 8, 'A-0008-4', NULL),
(17, '2011-08-07', 'Muslimah', 'Perempuan', '1944-01-04', 'Kakek', NULL, 'Lain-lain', 0, 9, 'M-0009-1', NULL),
(18, '2011-08-07', 'Muslimah', 'Perempuan', '1944-01-04', 'Kakek', NULL, 'Lain-lain', 0, 9, 'M-0009-2', NULL),
(19, '2011-08-07', 'Muslim', 'Perempuan', '1944-01-04', 'Nenek', NULL, 'Lain-lain', 0, 9, 'M-0009-3', NULL),
(20, '2011-08-07', 'Marlina', 'Perempuan', '1991-05-20', 'Ibu', NULL, 'Umum', 0, 9, 'M-0009-4', NULL),
(21, '2011-08-07', 'Muhammad Abrar Istiadi', 'Laki-laki', '1990-08-29', '', NULL, 'Askes', 1234567, 9, 'M-0009-5', NULL),
(22, '2011-08-07', 'Vininta Ayu', 'Perempuan', '2003-04-04', 'Anak', NULL, 'Jamkesmas', 2345678, 11, 'V-0011-1', NULL),
(23, '2011-08-08', 'Sentosa Kurniawan', 'Laki-laki', '1955-06-05', 'Nenek', NULL, 'Askes', 123456543, 12, 'S-0012-1', NULL),
(24, '2011-08-08', 'Sentosa Kurniawan', 'Laki-laki', '1955-06-05', 'Nenek', NULL, 'Askes', 123456543, 12, 'S-0012-2', NULL),
(25, '2011-08-08', 'Sentosa Kurniawan', 'Laki-laki', '1955-06-05', 'Nenek', NULL, 'Askes', 123456543, 12, 'S-0012-3', NULL),
(26, '2011-08-08', 'Sentosa Kurniawan', 'Laki-laki', '1955-06-05', 'Nenek', NULL, 'Askes', 123456543, 12, 'S-0012-4', NULL),
(27, '2011-08-08', 'Sentosa Kurniawan', 'Laki-laki', '1955-06-05', 'Nenek', NULL, 'Askes', 123456543, 12, 'S-0012-5', NULL),
(28, '2011-08-08', 'Sentosa Kurniawan', 'Laki-laki', '1955-06-05', 'Nenek', NULL, 'Askes', 123456543, 12, 'S-0012-6', NULL),
(29, '2011-08-08', 'Dwi Apriliana', 'Perempuan', '1990-09-30', 'Anak', NULL, 'Umum', 0, 12, 'D-0012-7', NULL),
(30, '2011-08-08', 'Fitri Hakim', 'Perempuan', '1976-12-12', 'Ibu', NULL, 'Lain-lain', 0, 12, 'F-0012-8', NULL),
(31, '2011-08-08', 'Fitri Hakim', 'Perempuan', '1976-12-12', 'Ibu', NULL, 'Lain-lain', 0, 12, 'F-0012-9', NULL),
(32, '2011-08-08', 'Fitri Hakim', 'Perempuan', '1976-12-12', 'Ibu', NULL, 'Lain-lain', 0, 12, 'F-0012-10', NULL),
(33, '2011-08-08', 'testing', 'Perempuan', '0000-00-00', 'Kepala Keluarga', NULL, 'Umum', 0, 12, 'T-0012-11', NULL),
(34, '2011-08-08', 'Annisa', 'Perempuan', '1990-12-04', '', NULL, 'Jamkesmas', 12345678, 12, 'A-0012-12', NULL),
(35, '2011-08-08', 'lalalalalaa', 'Laki-laki', '0000-00-00', 'Kepala Keluarga', NULL, 'Umum', 0, 13, 'L-0013-1', NULL),
(36, '2011-08-08', 'lalalal', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Umum', 0, 9, 'L-0009-6', NULL),
(37, '2011-08-08', 'Meri Marlina', 'Perempuan', '1998-04-15', 'Anak', NULL, 'Askes', 2345678, 14, 'M-0014-1', NULL),
(38, '2011-08-08', 'bebek', 'Laki-laki', '1990-01-12', 'Keponakan', NULL, 'Lain-lain', 0, 7, 'B-0007-6', NULL),
(39, '2011-08-08', 'Fatih ', 'Laki-laki', '2004-04-12', 'Anak', NULL, 'Askes', 1234567890, 15, 'F-0015-1', NULL),
(40, '2011-08-08', 'Kenia Utari', 'Perempuan', '1986-08-13', 'Ibu', NULL, 'Askes', 34567890, 15, 'K-0015-2', NULL),
(41, '2011-08-12', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Umum', 0, 16, '-0016-1', NULL),
(42, '2011-08-12', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Umum', 0, 17, '-0017-1', NULL),
(43, '2011-08-11', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Umum', 0, 11, '-0011-2', NULL),
(44, '2010-08-11', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Umum', 0, 19, '-0019-1', NULL),
(45, '2011-08-11', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Umum', 0, 20, '-0020-1', NULL),
(46, '2011-08-11', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Umum', 0, 20, '-0020-2', NULL),
(47, '2011-08-11', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Umum', 0, 20, '-0020-3', NULL),
(48, '2011-08-11', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Umum', 0, 20, '-0020-4', NULL),
(49, '2011-08-11', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Umum', 0, 20, '-0020-5', NULL),
(50, '2011-08-11', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Umum', 0, 20, '-0020-6', NULL),
(51, '2011-08-11', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Umum', 0, 20, '-0020-7', NULL),
(52, '2011-08-11', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Umum', 0, 21, '-0021-1', NULL),
(53, '2011-08-11', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Umum', 0, 21, '-0021-2', NULL),
(54, '2011-08-11', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Umum', 0, 21, '-0021-3', NULL),
(55, '2011-08-11', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Umum', 0, 21, '-0021-4', NULL),
(56, '2011-08-11', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Umum', 0, 21, '-0021-5', NULL),
(57, '2011-08-11', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Umum', 0, 21, '-0021-6', NULL),
(58, '2011-08-11', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Umum', 0, 21, '-0021-7', NULL),
(59, '2011-08-11', 'Wirna Hakam', 'Perempuan', '0000-00-00', 'Kepala Keluarga', NULL, 'Umum', 0, 21, 'W-0021-8', NULL),
(60, '2011-08-11', 'Wirna Hakam', 'Perempuan', '0000-00-00', 'Kepala Keluarga', NULL, 'Umum', 0, 21, 'W-0021-9', NULL),
(61, '2011-08-11', 'Wirna Hakam', 'Perempuan', '0000-00-00', 'Kepala Keluarga', NULL, 'Umum', 0, 21, 'W-0021-10', NULL),
(62, '2011-08-11', 'Wirna Hakam', 'Perempuan', '1993-08-11', 'Kepala Keluarga', NULL, 'Umum', 0, 21, 'W-0021-11', NULL),
(63, '2011-08-11', 'Merimer', '', '1986-08-07', 'Kepala Keluarga', NULL, 'Umum', 0, 9, '-0009-7', NULL),
(64, '2011-08-11', 'Nia Kurnia', 'Perempuan', '0000-00-00', 'Kepala Keluarga', NULL, 'Umum', 0, 22, 'N-0022-1', NULL),
(65, '2011-08-11', 'Fitri Karlinda', 'Perempuan', '1990-05-15', 'Anak', NULL, 'Umum', 0, 23, 'F-0023-1', NULL),
(66, '2011-08-11', 'Fitri Karlinda', 'Perempuan', '1990-05-15', 'Anak', NULL, 'Umum', 0, 23, 'F-0023-2', NULL),
(67, '2011-08-11', 'Fitri Karlinda', 'Perempuan', '1990-05-15', 'Anak', NULL, 'Umum', 0, 23, 'F-0023-3', NULL),
(68, '2011-08-11', 'Fitri Karlinda', 'Perempuan', '1990-05-15', 'Anak', NULL, 'Umum', 0, 23, 'F-0023-4', NULL);

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
  PRIMARY KEY (`id_pegawai`),
  UNIQUE KEY `nip_UNIQUE` (`nip`),
  KEY `fk_pegawai_pegawai` (`id_atasan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `pegawai`
--


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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `pelatihan`
--


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
  KEY `fk_pemeriksaan_dahak_tbc1` (`id_tbc`),
  KEY `fk_pemeriksaan_dahak_pemeriksaan_lab1` (`id_pemeriksaan_lab`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `pemeriksaan_dahak`
--


-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan_lab`
--

CREATE TABLE IF NOT EXISTS `pemeriksaan_lab` (
  `id_pemeriksaan_lab` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_pemeriksaan` date DEFAULT NULL,
  `keterangan` varchar(45) DEFAULT NULL,
  `id_layanan` int(11) NOT NULL,
  PRIMARY KEY (`id_pemeriksaan_lab`),
  KEY `fk_pemeriksaan_lab_layanan1` (`id_layanan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `pemeriksaan_lab`
--


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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `pendidikan`
--


-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE IF NOT EXISTS `penyakit` (
  `id_penyakit` int(11) NOT NULL AUTO_INCREMENT,
  `kode_penyakit` char(50) DEFAULT NULL,
  `nama_penyakit` char(50) DEFAULT NULL,
  `poli_id_poli` int(20) NOT NULL,
  PRIMARY KEY (`id_penyakit`),
  KEY `fk_penyakit_poli1` (`poli_id_poli`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `penyakit`
--


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
  `nama_poli` enum('Gigi','Umum','Kia','Lab','Radiologi','Lain-lain') DEFAULT NULL,
  PRIMARY KEY (`id_poli`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id_poli`, `nama_poli`) VALUES
(1, 'Gigi'),
(2, 'Umum'),
(3, 'Kia'),
(4, 'Lab'),
(5, 'Radiologi'),
(6, 'Lain-lain');

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
  PRIMARY KEY (`id_remed_gigi`),
  KEY `fk_remed_poli_gigi_kunjungan1` (`id_kunjungan`),
  KEY `fk_remed_poli_gigi_pasien1` (`id_pasien`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `remed_poli_gigi`
--


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
  `campak_id_campak` int(11) DEFAULT NULL,
  `id_diare` int(11) DEFAULT NULL,
  `id_ispa` int(11) DEFAULT NULL,
  `id_tbc` int(11) DEFAULT NULL,
  `id_kunjungan` int(11) NOT NULL,
  `keterangan` text,
  `id_pasien` int(20) NOT NULL,
  PRIMARY KEY (`id_remed_umum`),
  KEY `fk_remed_poli_umum_campak1` (`campak_id_campak`),
  KEY `fk_remed_poli_umum_diare1` (`id_diare`),
  KEY `fk_remed_poli_umum_ispa1` (`id_ispa`),
  KEY `fk_remed_poli_umum_tbc1` (`id_tbc`),
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
  KEY `fk_remed_poli_umum_has_pemeriksaan_lab_pemeriksaan_lab1` (`id_pemeriksaan_lab`),
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `resep`
--


-- --------------------------------------------------------

--
-- Table structure for table `rontgen`
--

CREATE TABLE IF NOT EXISTS `rontgen` (
  `id_rontgen` int(11) NOT NULL AUTO_INCREMENT,
  `hasil` text,
  `keterangan` text,
  `id_kunjungan` int(11) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  PRIMARY KEY (`id_rontgen`),
  KEY `fk_rontgen_kunjungan1` (`id_kunjungan`),
  KEY `fk_rontgen_layanan1` (`id_layanan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `rontgen`
--


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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tanggungan`
--


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
  PRIMARY KEY (`id_tbc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbc`
--


-- --------------------------------------------------------

--
-- Table structure for table `urin`
--

CREATE TABLE IF NOT EXISTS `urin` (
  `id_urin` int(11) NOT NULL AUTO_INCREMENT,
  `mak_warna` varchar(45) DEFAULT NULL,
  `mak_kekeruhan` varchar(45) DEFAULT NULL,
  `mak_keasaman` float DEFAULT NULL,
  `mak_berat_jenis` float DEFAULT NULL,
  `mik_eritrosit` float DEFAULT NULL,
  `mik_lekosit` float DEFAULT NULL,
  `mik_epitel` enum('Positif','Negatif') DEFAULT NULL,
  `mik_kristal` enum('Positif','Negatif') DEFAULT NULL,
  `mik_selinder` enum('Positif','Negatif') DEFAULT NULL,
  `mik_bakteri` enum('Positif','Negatif') DEFAULT NULL,
  `mik_jamur` enum('Positif','Negatif') DEFAULT NULL,
  `kim_glukosa` enum('Positif','Negatif') DEFAULT NULL,
  `kim_protein` enum('Positif','Negatif') DEFAULT NULL,
  `kim_bilirubin` enum('Positif','Negatif') DEFAULT NULL,
  `kim_urobilin` enum('Positif','Negatif') DEFAULT NULL,
  `kim_keton` enum('Positif','Negatif') DEFAULT NULL,
  `kim_nitrit` enum('Positif','Negatif') DEFAULT NULL,
  `kim_darah_samar` enum('Positif','Negatif') DEFAULT NULL,
  `id_pemeriksaan_lab` int(11) NOT NULL,
  PRIMARY KEY (`id_urin`),
  KEY `fk_urin_pemeriksaan_lab1` (`id_pemeriksaan_lab`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `urin`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `fk_absensi_pegawai1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `antrian`
--
ALTER TABLE `antrian`
  ADD CONSTRAINT `fk_antrian_kunjungan10` FOREIGN KEY (`id_kunjungan`) REFERENCES `kunjungan` (`id_kunjungan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_antrian_kode_poli1` FOREIGN KEY (`id_poli`) REFERENCES `poli` (`id_poli`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cuti`
--
ALTER TABLE `cuti`
  ADD CONSTRAINT `fk_cuti_pegawai1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `fk_dokter_pegawai1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `dp3`
--
ALTER TABLE `dp3`
  ADD CONSTRAINT `fk_dp3_pegawai1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `gaji`
--
ALTER TABLE `gaji`
  ADD CONSTRAINT `fk_gaji_pegawai1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
-- Constraints for table `hiv`
--
ALTER TABLE `hiv`
  ADD CONSTRAINT `fk_hiv_pemeriksaan_lab1` FOREIGN KEY (`id_pemeriksaan_lab`) REFERENCES `pemeriksaan_lab` (`id_pemeriksaan_lab`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
-- Constraints for table `narkoba`
--
ALTER TABLE `narkoba`
  ADD CONSTRAINT `fk_narkoba_pemeriksaan_lab1` FOREIGN KEY (`id_pemeriksaan_lab`) REFERENCES `pemeriksaan_lab` (`id_pemeriksaan_lab`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pangkat_golongan`
--
ALTER TABLE `pangkat_golongan`
  ADD CONSTRAINT `fk_pangkat_golongan_pegawai1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `fk_pasien_KK0` FOREIGN KEY (`id_KK`) REFERENCES `kk` (`id_kk`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
-- Constraints for table `pemeriksaan_dahak`
--
ALTER TABLE `pemeriksaan_dahak`
  ADD CONSTRAINT `fk_pemeriksaan_dahak_tbc1` FOREIGN KEY (`id_tbc`) REFERENCES `tbc` (`id_tbc`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pemeriksaan_dahak_pemeriksaan_lab1` FOREIGN KEY (`id_pemeriksaan_lab`) REFERENCES `pemeriksaan_lab` (`id_pemeriksaan_lab`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pemeriksaan_lab`
--
ALTER TABLE `pemeriksaan_lab`
  ADD CONSTRAINT `fk_pemeriksaan_lab_layanan10` FOREIGN KEY (`id_layanan`) REFERENCES `layanan` (`id_layanan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD CONSTRAINT `fk_pendidikan_pegawai1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD CONSTRAINT `fk_penyakit_poli1` FOREIGN KEY (`poli_id_poli`) REFERENCES `poli` (`id_poli`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `penyakit_remed_gigi`
--
ALTER TABLE `penyakit_remed_gigi`
  ADD CONSTRAINT `fk_penyakit_has_remed_poli_gigi_remed_poli_gigi2` FOREIGN KEY (`id_remed_gigi`) REFERENCES `remed_poli_gigi` (`id_remed_gigi`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_penyakit_has_remed_poli_gigi_penyakit1` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id_penyakit`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `penyakit_remed_kia`
--
ALTER TABLE `penyakit_remed_kia`
  ADD CONSTRAINT `fk_penyakit_has_remed_poli_kia_remed_poli_kia1` FOREIGN KEY (`id_remed_kia`) REFERENCES `remed_poli_kia` (`id_remed_kia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_penyakit_has_remed_poli_kia_penyakit1` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id_penyakit`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `penyakit_remed_umum`
--
ALTER TABLE `penyakit_remed_umum`
  ADD CONSTRAINT `fk_penyakit_has_remed_poli_umum_remed_poli_umum1` FOREIGN KEY (`id_remed_umum`) REFERENCES `remed_poli_umum` (`id_remed_umum`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_penyakit_has_remed_poli_umum_penyakit1` FOREIGN KEY (`id_penyakit1`) REFERENCES `penyakit` (`id_penyakit`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `remedi_umum_layanan`
--
ALTER TABLE `remedi_umum_layanan`
  ADD CONSTRAINT `fk_remed_poli_umum_has_layanan_remed_poli_umum1` FOREIGN KEY (`id_remed_umum`) REFERENCES `remed_poli_umum` (`id_remed_umum`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_remed_poli_umum_has_layanan_layanan1` FOREIGN KEY (`id_layanan`) REFERENCES `layanan` (`id_layanan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `remed_gigi_layanan`
--
ALTER TABLE `remed_gigi_layanan`
  ADD CONSTRAINT `fk_remed_poli_gigi_has_layanan_remed_poli_gigi1` FOREIGN KEY (`id_remed_gigi`) REFERENCES `remed_poli_gigi` (`id_remed_gigi`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_remed_poli_gigi_has_layanan_layanan1` FOREIGN KEY (`id_layanan`) REFERENCES `layanan` (`id_layanan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_remed_poli_umum_campak1` FOREIGN KEY (`campak_id_campak`) REFERENCES `campak` (`id_campak`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_remed_poli_umum_diare1` FOREIGN KEY (`id_diare`) REFERENCES `diare` (`id_diare`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_remed_poli_umum_ispa1` FOREIGN KEY (`id_ispa`) REFERENCES `ispa` (`id_ispa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_remed_poli_umum_tbc1` FOREIGN KEY (`id_tbc`) REFERENCES `tbc` (`id_tbc`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_remed_poli_umum_kunjungan1` FOREIGN KEY (`id_kunjungan`) REFERENCES `kunjungan` (`id_kunjungan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_remed_poli_umum_pasien1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `remed_umum_lab`
--
ALTER TABLE `remed_umum_lab`
  ADD CONSTRAINT `fk_remed_poli_umum_has_pemeriksaan_lab_remed_poli_umum1` FOREIGN KEY (`id_remed_umum`) REFERENCES `remed_poli_umum` (`id_remed_umum`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_remed_poli_umum_has_pemeriksaan_lab_pemeriksaan_lab1` FOREIGN KEY (`id_pemeriksaan_lab`) REFERENCES `pemeriksaan_lab` (`id_pemeriksaan_lab`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `resep`
--
ALTER TABLE `resep`
  ADD CONSTRAINT `fk_resep_pasien1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rontgen`
--
ALTER TABLE `rontgen`
  ADD CONSTRAINT `fk_rontgen_kunjungan10` FOREIGN KEY (`id_kunjungan`) REFERENCES `kunjungan` (`id_kunjungan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rontgen_layanan10` FOREIGN KEY (`id_layanan`) REFERENCES `layanan` (`id_layanan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tanggungan`
--
ALTER TABLE `tanggungan`
  ADD CONSTRAINT `fk_tanggungan_pegawai1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `urin`
--
ALTER TABLE `urin`
  ADD CONSTRAINT `fk_urin_pemeriksaan_lab1` FOREIGN KEY (`id_pemeriksaan_lab`) REFERENCES `pemeriksaan_lab` (`id_pemeriksaan_lab`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
