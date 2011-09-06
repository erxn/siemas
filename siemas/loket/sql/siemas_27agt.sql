-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 25, 2011 at 10:35 AM
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
  `status` enum('ANTRI','SEDANG DIPROSES','SELESAI','TUNDA') DEFAULT NULL,
  `id_kunjungan` int(11) NOT NULL,
  `id_poli` int(20) NOT NULL,
  PRIMARY KEY (`id_antrian`),
  KEY `fk_antrian_kunjungan1` (`id_kunjungan`),
  KEY `fk_antrian_kode_poli1` (`id_poli`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`id_antrian`, `status`, `id_kunjungan`, `id_poli`) VALUES
(3, 'SELESAI', 1, 2),
(4, 'SELESAI', 2, 2),
(6, 'SELESAI', 3, 2),
(7, 'SELESAI', 4, 2),
(8, 'SELESAI', 56, 2),
(9, 'SELESAI', 57, 2),
(10, 'SELESAI', 58, 2),
(11, 'SELESAI', 68, 2),
(12, 'SELESAI', 69, 2),
(14, 'SELESAI', 76, 2),
(16, 'SELESAI', 78, 2),
(17, 'SELESAI', 79, 2),
(18, 'SELESAI', 80, 2),
(19, 'SELESAI', 84, 2),
(20, 'SELESAI', 85, 2),
(21, 'SELESAI', 86, 2),
(22, 'SELESAI', 87, 2),
(23, 'SELESAI', 88, 2),
(24, 'SELESAI', 89, 2),
(25, 'SELESAI', 90, 2),
(26, 'SELESAI', 91, 2),
(27, 'SELESAI', 92, 2),
(28, 'SELESAI', 93, 2),
(29, 'SELESAI', 94, 2),
(30, 'SELESAI', 95, 2),
(31, 'SELESAI', 96, 2),
(32, 'SELESAI', 97, 2),
(36, 'SELESAI', 107, 2),
(37, 'SELESAI', 108, 2),
(38, 'SELESAI', 109, 2),
(39, 'SELESAI', 110, 2),
(40, 'SELESAI', 111, 4),
(41, 'SELESAI', 112, 2),
(42, 'SELESAI', 113, 4),
(43, 'SELESAI', 114, 4),
(44, 'SELESAI', 115, 4),
(45, 'SELESAI', 116, 4),
(46, 'SELESAI', 117, 2),
(47, 'SELESAI', 118, 1),
(48, 'SELESAI', 119, 5),
(49, 'ANTRI', 120, 1),
(50, 'ANTRI', 121, 5),
(51, 'ANTRI', 122, 1),
(52, 'ANTRI', 123, 2),
(53, 'ANTRI', 124, 3),
(54, 'ANTRI', 125, 3),
(55, 'ANTRI', 127, 3),
(56, 'ANTRI', 128, 3),
(57, 'ANTRI', 129, 7),
(58, 'ANTRI', 130, 3),
(59, 'ANTRI', 131, 8);

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
  `kelurahan_kk` varchar(45) DEFAULT NULL,
  `kecamatan_kk` varchar(45) DEFAULT NULL,
  `kota_kab_kk` varchar(45) DEFAULT NULL,
  `status_wil_luar` enum('Luar Wilayah','Luar Kota Bogor') DEFAULT NULL,
  PRIMARY KEY (`id_kk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `kk`
--

INSERT INTO `kk` (`id_kk`, `tanggal_pendaftaran`, `nama_kk`, `jk_kk`, `alamat_kk`, `kelurahan_kk`, `kecamatan_kk`, `kota_kab_kk`, `status_wil_luar`) VALUES
(1, '2011-08-04', 'Bagus Dipo Negoro', 'Laki-laki', 'Jl. Kapten Muslihat No.24', 'Pabaton', 'Bogor Tengah', 'Bogor', ''),
(2, '2011-08-04', 'Bagus Dipo Negoro', 'Laki-laki', 'Jl. Kapten Muslihat No.24', 'Pabaton', 'Bogor Tengah', 'Bogor', ''),
(3, '2011-08-02', '', '', '', 'Pabaton', '', '', ''),
(4, '2011-08-04', 'Nugaraha Kusuma', 'Laki-laki', 'Jl. Babakan Raya 4', 'Pabaton', 'Bogor Tengah', 'Bogor', ''),
(6, '2011-08-07', 'Mustofah', 'Laki-laki', 'Jl. Bara 3', 'Pabaton', 'Bogor Tengah', 'Bogor', ''),
(7, '2011-08-07', 'Mustofah', 'Laki-laki', 'Jl. Bara 3', 'Pabaton', 'Bogor Tengah', 'Bogor', ''),
(8, '2011-08-07', 'Julian', 'Laki-laki', 'Jl. Balio V', 'Pabaton', 'Rawa Panjang', 'Bogor', 'Luar Wilayah'),
(9, '2011-08-07', 'Hidayat', 'Laki-laki', 'Jl. Perwira VIII', 'Pabaton', 'Bogor Barat', 'Bogor', 'Luar Wilayah'),
(11, '2011-08-07', 'Firman Ardiansyah', 'Laki-laki', 'Jl. bogor Raya', 'Pabaton', 'Bogor Tengah', 'Bogor', ''),
(12, '2011-08-08', 'Sentosa Kurniawan', 'Laki-laki', 'Jalan Bangau Raya 54', 'Pabaton', 'Suka Rejo', 'Depok', 'Luar Kota Bogor'),
(13, '2011-08-08', 'lalalala', 'Laki-laki', 'lalalala', 'Pabaton', 'alalala', 'alala', 'Luar Wilayah'),
(14, '2011-08-08', 'Raden Bagus Dimas', 'Laki-laki', 'Jl. Kapten Muslihat 6', 'Pabaton', 'Bogor Tengah', 'Bogor', ''),
(15, '2011-08-08', 'kelik Supriadi', 'Laki-laki', 'jl. Pendidikan 6', 'Pabaton', 'Kebon Pedes', 'Bogor', 'Luar Wilayah'),
(16, '2011-08-12', '', '', '', 'Pabaton', '', '', ''),
(17, '2011-08-12', '', '', '', 'Pabaton', '', '', ''),
(18, '2010-08-11', '', '', '', 'Pabaton', '', '', ''),
(19, '2010-08-11', '', '', '', 'Pabaton', '', '', ''),
(20, '2011-08-11', 'Saya', 'Perempuan', '', 'Pabaton', '', '', ''),
(21, '2011-08-11', '', '', '', 'Pabaton', '', '', ''),
(22, '2011-08-11', 'Karimul', 'Laki-laki', 'jala bogor', 'Pabaton', '', '', 'Luar Kota Bogor'),
(23, '2011-08-11', 'Putra Muslim', 'Laki-laki', 'Jl. Mustar', 'Pabaton', 'Bogor Tengah', 'Bogor', ''),
(24, '2011-08-17', '', '', '', 'Pabaton', '', '', ''),
(25, '2011-08-11', 'Ali Sangadji', 'Laki-laki', 'Jl. Bababaran Raya', 'Pabaton', 'Cibogor', 'Bogor', ''),
(26, '2010-08-24', 'Guntur Saputra', 'Laki-laki', 'Jl. Lima Puluh Kota', 'Cibatok', 'Bogor Barat', 'Bogor', 'Luar Wilayah');

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
  `status_bawa_kartu` enum('Bawa','Tidak') NOT NULL,
  PRIMARY KEY (`id_kunjungan`),
  KEY `fk_kunjungan_pasien2` (`id_pasien`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=132 ;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`id_kunjungan`, `no_kunjungan`, `id_pasien`, `tanggal_kunjungan`, `status_pembayaran`, `total_harga`, `status_bawa_kartu`) VALUES
(1, 1, 4, '2011-08-11', 'Lunas', 35050, 'Bawa'),
(2, 2, 5, '2011-08-11', 'Belum Lunas', 3000, 'Bawa'),
(3, 3, 6, '2011-08-11', 'Belum Lunas', 0, 'Bawa'),
(4, 4, 7, '2011-08-11', 'Belum Lunas', 10000, 'Bawa'),
(5, 5, 8, '2011-08-11', 'Belum Lunas', 150000, 'Bawa'),
(6, 6, 15, '2011-08-11', 'Belum Lunas', 30000, 'Bawa'),
(7, 7, 16, '2011-08-11', 'Belum Lunas', 0, 'Bawa'),
(8, 8, 17, '2011-08-11', 'Belum Lunas', 0, 'Bawa'),
(9, 9, 18, '2011-08-11', 'Belum Lunas', 0, 'Bawa'),
(10, 10, 19, '2011-08-11', 'Belum Lunas', 0, 'Bawa'),
(11, 11, 20, '2011-08-11', 'Belum Lunas', 0, 'Bawa'),
(12, 12, 21, '2011-08-11', 'Belum Lunas', 0, 'Bawa'),
(13, 13, 22, '2011-08-11', 'Belum Lunas', 0, 'Bawa'),
(14, 1, 24, '2011-08-11', 'Belum Lunas', 0, 'Bawa'),
(15, 2, 25, '2011-08-11', 'Belum Lunas', 0, 'Bawa'),
(16, 3, 26, '2011-08-11', 'Belum Lunas', 0, 'Bawa'),
(17, 4, 27, '2011-08-11', 'Belum Lunas', 0, 'Bawa'),
(18, 5, 28, '2011-08-11', 'Belum Lunas', 0, 'Bawa'),
(19, 6, 29, '2011-08-11', 'Belum Lunas', 0, 'Bawa'),
(20, 7, 30, '2011-08-11', 'Belum Lunas', 0, 'Bawa'),
(21, 8, 31, '2011-08-11', 'Belum Lunas', 0, 'Bawa'),
(22, 9, 32, '2011-08-11', 'Belum Lunas', 0, 'Bawa'),
(23, 10, 33, '2011-08-11', 'Belum Lunas', 0, 'Bawa'),
(24, 11, 34, '2011-08-11', 'Belum Lunas', 0, 'Bawa'),
(25, 12, 35, '2011-08-11', 'Belum Lunas', 0, 'Bawa'),
(26, 13, 36, '2011-08-11', 'Belum Lunas', 0, 'Bawa'),
(27, 14, 37, '2011-08-11', 'Belum Lunas', 0, 'Bawa'),
(28, 15, 38, '2011-08-11', 'Belum Lunas', 0, 'Bawa'),
(29, 16, 39, '2011-08-11', 'Belum Lunas', 0, 'Bawa'),
(30, 17, 40, '2011-08-11', 'Belum Lunas', 0, 'Bawa'),
(31, 1, 41, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(32, 2, 42, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(33, 5, 43, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(37, 1, 44, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(39, 8, 45, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(40, 9, 46, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(41, 10, 47, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(42, 11, 48, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(43, 12, 49, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(44, 13, 50, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(45, 14, 51, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(46, 15, 52, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(47, 16, 53, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(48, 17, 54, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(49, 18, 55, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(50, 19, 56, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(51, 20, 57, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(52, 21, 58, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(53, 22, 59, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(54, 23, 60, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(55, 24, 61, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(56, 25, 62, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(57, 26, 63, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(58, 27, 64, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(59, 28, 65, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(60, 29, 66, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(61, 30, 67, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(62, 31, 68, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(63, 1, 17, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(65, 3, 10, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(66, 4, 15, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(67, 5, 38, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(68, 32, 15, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(69, 33, 29, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(71, 6, 29, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(72, 7, 29, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(73, 8, 29, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(74, 9, 29, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(75, 10, 29, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(76, 11, 29, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(77, 12, 1, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(78, 13, 26, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(79, 14, 20, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(80, 15, 28, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(81, 16, 65, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(82, 17, 65, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(83, 18, 65, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(84, 19, 65, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(85, 35, 26, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(86, 36, 40, '2011-08-11', 'Belum Lunas', 3000, 'Bawa'),
(87, 37, 16, '2011-08-11', 'Belum Lunas', 145000, 'Bawa'),
(88, 1, 20, '2011-08-11', 'Lunas', 51000, 'Bawa'),
(89, 1, 29, '2011-08-11', 'Lunas', 126500, 'Bawa'),
(90, 1, 69, '2011-08-11', 'Lunas', 15000, 'Bawa'),
(91, 2, 70, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(92, 3, 71, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(93, 4, 72, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(94, 5, 39, '2011-08-11', 'Belum Lunas', 65000, 'Bawa'),
(95, 1, 9, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(96, 2, 73, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(97, 38, 9, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(102, 43, 1, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(107, 38, 9, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(108, 39, 17, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(109, 40, 74, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(110, 41, 11, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(111, 97, 15, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(112, 98, 38, '2011-08-11', 'Belum Lunas', NULL, 'Bawa'),
(113, 1, 1, '2011-08-24', 'Lunas', 14000, 'Bawa'),
(114, 2, 29, '2011-08-24', 'Lunas', 58000, 'Bawa'),
(115, 3, 4, '2011-08-24', 'Lunas', 16500, 'Bawa'),
(116, 4, 7, '2011-08-24', 'Lunas', 54500, 'Bawa'),
(117, 5, 24, '2011-08-24', 'Lunas', 4500, 'Bawa'),
(118, 6, 18, '2011-08-24', 'Belum Lunas', NULL, 'Bawa'),
(119, 7, 21, '2011-08-24', 'Belum Lunas', NULL, 'Bawa'),
(120, 8, 6, '2011-08-24', 'Belum Lunas', NULL, 'Bawa'),
(121, 9, 34, '2011-08-24', 'Belum Lunas', NULL, 'Bawa'),
(122, 10, 8, '2011-08-24', 'Belum Lunas', NULL, 'Bawa'),
(123, 11, 75, '2011-08-24', 'Belum Lunas', NULL, 'Bawa'),
(124, 12, 76, '2011-08-24', 'Belum Lunas', NULL, 'Bawa'),
(125, 13, 14, '2011-08-24', 'Belum Lunas', NULL, 'Bawa'),
(126, 14, 77, '2011-08-24', 'Belum Lunas', NULL, 'Bawa'),
(127, 15, 78, '2011-08-24', 'Belum Lunas', NULL, 'Bawa'),
(128, 16, 26, '2011-08-24', 'Belum Lunas', NULL, 'Bawa'),
(129, 1, 79, '2010-08-24', 'Belum Lunas', NULL, 'Bawa'),
(130, 2, 22, '2010-08-24', 'Belum Lunas', NULL, 'Bawa'),
(131, 3, 38, '2010-08-24', 'Belum Lunas', NULL, 'Bawa');

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
(1, 5, 20, 'GIGI'),
(1, 14, 30, 'GIGI'),
(1, 64, 35000, 'GIGI'),
(2, 71, 3000, 'GIGI'),
(3, 7, 0, 'GIGI'),
(3, 64, 0, 'GIGI'),
(86, 71, 3000, 'GIGI'),
(87, 64, 35000, 'KIA'),
(87, 65, 60000, 'KIA'),
(87, 70, 25000, 'UMUM'),
(87, 71, 30000, 'KIA'),
(87, 72, 25000, 'RADIOLOGI'),
(88, 26, 4500, 'LAB'),
(89, 64, 35000, 'KIA'),
(89, 65, 60000, 'KIA'),
(90, 33, 15000, 'GIGI'),
(94, 72, 25000, 'RADIOLOGI'),
(94, 73, 40000, 'RADIOLOGI'),
(113, 26, 4500, 'LAB'),
(113, 78, 4500, 'LAB'),
(113, 79, 5000, 'LAB'),
(114, 92, 16000, 'GIGI'),
(114, 126, 12000, 'GIGI'),
(114, 150, 30000, 'GIGI'),
(115, 23, 3500, 'LAB'),
(115, 103, 13000, 'LAB'),
(116, 23, 3500, 'LAB'),
(116, 26, 4500, 'GIGI'),
(116, 33, 15000, 'GIGI'),
(116, 75, 4000, 'GIGI'),
(116, 76, 4000, 'GIGI'),
(116, 78, 4500, 'LAB'),
(116, 79, 5000, 'GIGI'),
(116, 81, 4000, 'LAB'),
(116, 85, 10000, 'GIGI'),
(117, 26, 4500, 'GIGI');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=161 ;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `nama_layanan`, `harga`, `keterangan`, `poli`) VALUES
(1, 'Overkulektomi', 15000, '', 'Gigi'),
(2, 'Tambal gigi sementara', 10000, '', 'Gigi'),
(3, 'Tambal gigi tetap amalgam', 20000, '', 'Gigi'),
(4, 'Tambal gigi tetap silikat', 15000, '', 'Gigi'),
(5, 'Tambal gigi dengan glass ionomer', 20000, '', 'Gigi'),
(6, 'Tambal light Curing', 50000, '', 'Gigi'),
(7, 'Cabut gigi susu', 15000, '', 'Gigi'),
(8, 'Cabut gigi tetap', 15000, '', 'Gigi'),
(9, 'Alveolektomi 1 gigi', 15000, '', 'Gigi'),
(10, 'Ekstraksi gigi dg komplikasi', 20000, '', 'Gigi'),
(11, 'Odontektomi ringan', 200000, '', 'Gigi'),
(12, 'Scalling per-regio', 12500, '', 'Gigi'),
(13, 'Gigi tiruan lepas sebagian', 100000, '', 'Gigi'),
(14, 'Tambahan 1 gigi', 30000, '', 'Gigi'),
(15, 'Saddle prothesy', 200000, '', 'Gigi'),
(16, 'Jacket Crown Acrylic', 200000, '', 'Gigi'),
(17, 'Jacket Crown Porcelain', 400000, '', 'Gigi'),
(18, 'Jacket Crown Metal', 350000, '', 'Gigi'),
(19, 'Gigi tiruan penuh 1 rahang', 600000, '', 'Gigi'),
(20, 'Ordhonti ringan', 600000, '', 'Gigi'),
(21, 'KB', 20, '', ''),
(22, 'Melahirkan', 500, '', ''),
(23, 'Hemoglobin', 3500, '', ''),
(26, 'Hitung Jenis Lekosit', 4500, '', ''),
(31, 'Masa Pembekuan', 4000, '', ''),
(33, 'Alkali Phospahatase', 15000, NULL, ''),
(45, 'SGOT', 14000, 'Kimia Darah', 'Lab'),
(46, 'SGPT', 14000, 'Kimia Darah', 'Lab'),
(49, 'Globulin', 10000, NULL, ''),
(50, 'Protein Total', 20000, NULL, ''),
(51, 'TTT (Timol Turbidity Tes)', 15000, NULL, ''),
(52, 'Persalinan Normal', 350000, NULL, 'KIA'),
(53, 'Persalinan dengan tindakan ringan', 400000, NULL, ''),
(54, 'Kuretasi', 1e+006, NULL, ''),
(55, 'Vasektomi', 400000, NULL, ''),
(56, 'Tubektomi', 500000, NULL, ''),
(57, 'Pemasangan IUD', 100000, NULL, ''),
(58, 'Pencabutan IUD tanpa penyulit', 15000, NULL, ''),
(59, 'Pemasangan Inplant', 150000, NULL, ''),
(60, 'Pencabutan Inplant', 40000, NULL, ''),
(61, 'Suntik KB 3 bulan', 12000, NULL, ''),
(62, 'Suntik KB 1 bulan', 15000, NULL, ''),
(63, 'KB Pil 1 bulan', 10000, NULL, ''),
(64, 'EKG', 35000, 'EKG', ''),
(65, 'USG', 60000, 'USG', ''),
(66, 'TT Catin Pria', 10000, NULL, ''),
(67, 'TT Catin Wanita', 15000, NULL, ''),
(68, 'Pem. Kesehatan Calon Haji (Wanita Usia Subur)', 40000, NULL, ''),
(69, 'Pem. Kesehatan Calon Haji (Wanita Bukan Usia Subur)', 25000, NULL, ''),
(70, 'Pem. Kesehatan Calon Haji (Laki-laki)', 25000, NULL, ''),
(71, 'Mantuox', 3000, NULL, ''),
(72, 'Pemeriksaan X-ray gigi (Radiologi)', 25000, '', 'Radiologi'),
(73, 'Pemeriksaan Thorax Foto (Radiologi)', 40000, '', 'Radiologi'),
(74, 'Haemoglobin', 0, 'Haematologi', 'Lab'),
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
(160, 'Spesialis Dalam', 20000, NULL, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=80 ;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `tanggal_pendaftaran`, `nama_pasien`, `jk_pasien`, `tanggal_lahir`, `status_dalam_keluarga`, `id_kunjungan`, `status_pelayanan`, `no_kartu_layanan`, `id_KK`, `kode_pasien`, `total_harga`) VALUES
(1, '2011-08-04', 'Annisa Anastasia', 'Perempuan', '1990-12-04', 'Ibu', NULL, 'Jamkesmas', 11233466, 4, 'A-0004-1', NULL),
(2, '2011-08-07', 'Raden Bagus', 'Laki-laki', '2000-01-04', 'Ibu', NULL, 'Jamkesmas', 12345678, 6, 'R-0006-1', NULL),
(3, '2011-08-07', 'Raden Bagus', 'Laki-laki', '2000-01-04', 'Ibu', NULL, 'Jamkesmas', 12345678, 6, 'R-0006-2', NULL),
(4, '2011-08-07', 'Farhad Alaydrus', 'Laki-laki', '1981-01-04', 'Kepala Keluarga', NULL, 'Jamkesmas', 12345678, 6, 'R-0006-3', NULL),
(5, '2011-08-07', 'Fahri Amirullah', 'Laki-laki', '1960-01-04', 'Kakek', NULL, 'Jamkesmas', 12345678, 6, 'R-0006-4', NULL),
(6, '2011-08-07', 'Neri Petri Anti', 'Perempuan', '2010-01-04', 'Anak', NULL, 'Jamkesmas', 12345678, 6, 'R-0006-5', NULL),
(7, '2011-08-07', 'Anita Daulay', 'Perempuan', '2000-01-04', 'Tinggal Sementara', NULL, 'Jamkesmas', 12345678, 6, 'R-0006-6', NULL),
(8, '2011-08-07', 'Anira', 'Perempuan', '2005-04-05', 'Ibu', NULL, 'Jamkesmas', 12345, 7, 'A-0007-1', NULL),
(9, '2011-08-07', 'Tiara', 'Perempuan', '2007-04-05', 'Ibu', NULL, 'Jamkesmas', 12345888, 7, 'T-0007-2', NULL),
(10, '2011-08-07', 'Febri', 'Laki-laki', '1995-09-12', 'Ibu', NULL, 'Jamkesmas', 0, 7, 'F-0007-3', NULL),
(11, '2011-08-07', 'Yeni', 'Perempuan', '1979-10-13', 'Kepala Keluarga', NULL, 'Jamkesmas', 0, 7, 'Y-0007-4', NULL),
(12, '2011-08-07', 'Yeni', 'Perempuan', '1979-10-13', 'Kepala Keluarga', NULL, 'Jamkesmas', 0, 7, 'Y-0007-5', NULL),
(13, '2011-08-07', 'Aditya Aradika', 'Laki-laki', '1992-10-24', 'Ibu', NULL, 'Jamkesmas', 112345, 8, 'A-0008-1', NULL),
(14, '2011-08-07', 'Aditya Aradika', 'Laki-laki', '1992-10-24', 'Ibu', NULL, 'Jamkesmas', 112345, 8, 'A-0008-2', NULL),
(15, '2011-08-07', 'Aditya Aradika', 'Laki-laki', '1992-10-24', 'Ibu', NULL, 'Jamkesmas', 112345, 8, 'A-0008-3', NULL),
(16, '2011-08-07', 'Aditya Aradika', 'Laki-laki', '1992-10-24', 'Ibu', NULL, 'Jamkesmas', 112345, 8, 'A-0008-4', NULL),
(17, '2011-08-07', 'Muslimah', 'Perempuan', '1944-01-04', 'Kakek', NULL, 'Jamkesmas', 0, 9, 'M-0009-1', NULL),
(18, '2011-08-07', 'Muslimah', 'Perempuan', '1944-01-04', 'Kakek', NULL, 'Jamkesmas', 0, 9, 'M-0009-2', NULL),
(19, '2011-08-07', 'Muslim', 'Perempuan', '1944-01-04', 'Nenek', NULL, 'Jamkesmas', 0, 9, 'M-0009-3', NULL),
(20, '2011-08-07', 'Marlina', 'Perempuan', '1991-05-20', 'Ibu', NULL, 'Jamkesmas', 0, 9, 'M-0009-4', NULL),
(21, '2011-08-07', 'Muhammad Abrar Istiadi', 'Laki-laki', '1990-08-29', '', NULL, 'Jamkesmas', 1234567, 9, 'M-0009-5', NULL),
(22, '2011-08-07', 'Vininta Ayu', 'Perempuan', '2003-04-04', 'Anak', NULL, 'Jamkesmas', 2345678, 11, 'V-0011-1', NULL),
(23, '2011-08-08', 'Sentosa Kurniawan', 'Laki-laki', '1955-06-05', 'Nenek', NULL, 'Jamkesmas', 123456543, 12, 'S-0012-1', NULL),
(24, '2011-08-08', 'Sentosa Kurniawan', 'Laki-laki', '1955-06-05', 'Nenek', NULL, 'Jamkesmas', 123456543, 12, 'S-0012-2', NULL),
(25, '2011-08-08', 'Sentosa Kurniawan', 'Laki-laki', '1955-06-05', 'Nenek', NULL, 'Jamkesmas', 123456543, 12, 'S-0012-3', NULL),
(26, '2011-08-08', 'Sentosa Kurniawan', 'Laki-laki', '1955-06-05', 'Nenek', NULL, 'Jamkesmas', 123456543, 12, 'S-0012-4', NULL),
(27, '2011-08-08', 'Sentosa Kurniawan', 'Laki-laki', '1955-06-05', 'Nenek', NULL, 'Jamkesmas', 123456543, 12, 'S-0012-5', NULL),
(28, '2011-08-08', 'Sentosa Kurniawan', 'Laki-laki', '1955-06-05', 'Nenek', NULL, 'Jamkesmas', 123456543, 12, 'S-0012-6', NULL),
(29, '2011-08-08', 'Dwi Apriliana', 'Perempuan', '1990-09-30', 'Anak', NULL, 'Jamkesmas', 0, 12, 'D-0012-7', NULL),
(30, '2011-08-08', 'Fitri Hakim', 'Perempuan', '1976-12-12', 'Ibu', NULL, 'Jamkesmas', 0, 12, 'F-0012-8', NULL),
(31, '2011-08-08', 'Fitri Hakim', 'Perempuan', '1976-12-12', 'Ibu', NULL, 'Jamkesmas', 0, 12, 'F-0012-9', NULL),
(32, '2011-08-08', 'Fitri Hakim', 'Perempuan', '1976-12-12', 'Ibu', NULL, 'Jamkesmas', 0, 12, 'F-0012-10', NULL),
(33, '2011-08-08', 'testing', 'Perempuan', '0000-00-00', 'Kepala Keluarga', NULL, 'Jamkesmas', 0, 12, 'T-0012-11', NULL),
(34, '2011-08-08', 'Annisa', 'Perempuan', '1990-12-04', '', NULL, 'Jamkesmas', 12345678, 12, 'A-0012-12', NULL),
(35, '2011-08-08', 'lalalalalaa', 'Laki-laki', '0000-00-00', 'Kepala Keluarga', NULL, 'Jamkesmas', 0, 13, 'L-0013-1', NULL),
(36, '2011-08-08', 'lalalal', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Jamkesmas', 0, 9, 'L-0009-6', NULL),
(37, '2011-08-08', 'Meri Marlina', 'Perempuan', '1998-04-15', 'Anak', NULL, 'Jamkesmas', 2345678, 14, 'M-0014-1', NULL),
(38, '2011-08-08', 'bebek', 'Laki-laki', '1990-01-12', 'Keponakan', NULL, 'Jamkesmas', 0, 7, 'B-0007-6', NULL),
(39, '2011-08-08', 'Fatih ', 'Laki-laki', '2004-04-12', 'Anak', NULL, 'Jamkesmas', 1234567890, 15, 'F-0015-1', NULL),
(40, '2011-08-08', 'Kenia Utari', 'Perempuan', '1986-08-13', 'Ibu', NULL, 'Jamkesmas', 34567890, 15, 'K-0015-2', NULL),
(41, '2011-08-12', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Jamkesmas', 0, 16, '-0016-1', NULL),
(42, '2011-08-12', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Jamkesmas', 0, 17, '-0017-1', NULL),
(43, '2011-08-11', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Jamkesmas', 0, 11, '-0011-2', NULL),
(44, '2010-08-11', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Jamkesmas', 0, 19, '-0019-1', NULL),
(45, '2011-08-11', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Jamkesmas', 0, 20, '-0020-1', NULL),
(46, '2011-08-11', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Jamkesmas', 0, 20, '-0020-2', NULL),
(47, '2011-08-11', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Jamkesmas', 0, 20, '-0020-3', NULL),
(48, '2011-08-11', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Jamkesmas', 0, 20, '-0020-4', NULL),
(49, '2011-08-11', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Jamkesmas', 0, 20, '-0020-5', NULL),
(50, '2011-08-11', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Jamkesmas', 0, 20, '-0020-6', NULL),
(51, '2011-08-11', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Jamkesmas', 0, 20, '-0020-7', NULL),
(52, '2011-08-11', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Jamkesmas', 0, 21, '-0021-1', NULL),
(53, '2011-08-11', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Jamkesmas', 0, 21, '-0021-2', NULL),
(54, '2011-08-11', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Jamkesmas', 0, 21, '-0021-3', NULL),
(55, '2011-08-11', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Jamkesmas', 0, 21, '-0021-4', NULL),
(56, '2011-08-11', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Jamkesmas', 0, 21, '-0021-5', NULL),
(57, '2011-08-11', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Jamkesmas', 0, 21, '-0021-6', NULL),
(58, '2011-08-11', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Jamkesmas', 0, 21, '-0021-7', NULL),
(59, '2011-08-11', 'Wirna Hakam', 'Perempuan', '0000-00-00', 'Kepala Keluarga', NULL, 'Jamkesmas', 0, 21, 'W-0021-8', NULL),
(60, '2011-08-11', 'Wirna Hakam', 'Perempuan', '0000-00-00', 'Kepala Keluarga', NULL, 'Jamkesmas', 0, 21, 'W-0021-9', NULL),
(61, '2011-08-11', 'Wirna Hakam', 'Perempuan', '0000-00-00', 'Kepala Keluarga', NULL, 'Jamkesmas', 0, 21, 'W-0021-10', NULL),
(62, '2011-08-11', 'Wirna Hakam', 'Perempuan', '1993-08-11', 'Kepala Keluarga', NULL, 'Jamkesmas', 0, 21, 'W-0021-11', NULL),
(63, '2011-08-11', 'Merimer', '', '1986-08-07', 'Kepala Keluarga', NULL, 'Jamkesmas', 0, 9, '-0009-7', NULL),
(64, '2011-08-11', 'Nia Kurnia', 'Perempuan', '0000-00-00', 'Kepala Keluarga', NULL, 'Jamkesmas', 0, 22, 'N-0022-1', NULL),
(65, '2011-08-11', 'Fitri Karlinda', 'Perempuan', '1990-05-15', 'Anak', NULL, 'Jamkesmas', 0, 23, 'F-0023-1', NULL),
(66, '2011-08-11', 'Fitri Karlinda', 'Perempuan', '1990-05-15', 'Anak', NULL, 'Jamkesmas', 0, 23, 'F-0023-2', NULL),
(67, '2011-08-11', 'Fitri Karlinda', 'Perempuan', '1990-05-15', 'Anak', NULL, 'Jamkesmas', 0, 23, 'F-0023-3', NULL),
(68, '2011-08-11', 'Fitri Karlinda', 'Perempuan', '1990-05-15', 'Anak', NULL, 'Jamkesmas', 0, 23, 'F-0023-4', NULL),
(69, '2011-08-19', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Jamkesmas', 0, 9, '-0009-8', NULL),
(70, '2011-08-19', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Jamkesmas', 0, 9, '-0009-9', NULL),
(71, '2011-08-19', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Jamkesmas', 0, 9, '-0009-10', NULL),
(72, '2011-08-19', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Jamkesmas', 0, 9, '-0009-11', NULL),
(73, '2010-08-19', 'Meri Marlina', 'Perempuan', '1990-01-12', 'Anak', NULL, 'Jamkesmas', 0, 15, 'M-0015-3', NULL),
(74, '2011-08-11', 'Sri Rahayu', 'Perempuan', '1989-05-13', 'Keponakan', NULL, 'Jamkesmas', 0, 25, 'S-0025-1', NULL),
(75, '2011-08-24', '', '', '0000-00-00', 'Kepala Keluarga', NULL, 'Jamkesmas', 0, 1, '-0001-1', NULL),
(76, '2011-08-24', 'Sendy Dwiki', 'Perempuan', '1990-01-12', 'Anak', NULL, 'Jamkesmas', 0, 1, 'S-0001-2', NULL),
(77, '2011-08-24', 'ratih kumala', 'Perempuan', '1990-02-03', 'Ibu', NULL, 'Jamkesmas', 7654320987, 11, 'R-0011-3', NULL),
(78, '2011-08-24', 'ratih kumala', 'Perempuan', '1990-02-03', 'Ibu', NULL, 'Jamkesmas', 7654320987, 11, 'R-0011-4', NULL),
(79, '2010-08-24', 'Ian Herahman', 'Laki-laki', '1990-02-24', 'Keponakan', NULL, 'Jamkesmas', 0, 26, 'I-0026-1', NULL);

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
  `nama_poli` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id_poli`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id_poli`, `nama_poli`) VALUES
(1, 'Gigi'),
(2, 'Umum'),
(3, 'Kia'),
(4, 'Lab'),
(5, 'Radiologi'),
(6, 'Rujukan'),
(7, 'Spesialis Anak'),
(8, 'Spesialis Penyakit Dalam');

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
  ADD CONSTRAINT `fk_antrian_kode_poli1` FOREIGN KEY (`id_poli`) REFERENCES `poli` (`id_poli`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_antrian_kunjungan10` FOREIGN KEY (`id_kunjungan`) REFERENCES `kunjungan` (`id_kunjungan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_pemeriksaan_dahak_pemeriksaan_lab1` FOREIGN KEY (`id_pemeriksaan_lab`) REFERENCES `pemeriksaan_lab` (`id_pemeriksaan_lab`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pemeriksaan_dahak_tbc1` FOREIGN KEY (`id_tbc`) REFERENCES `tbc` (`id_tbc`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_remed_poli_umum_campak1` FOREIGN KEY (`campak_id_campak`) REFERENCES `campak` (`id_campak`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_remed_poli_umum_diare1` FOREIGN KEY (`id_diare`) REFERENCES `diare` (`id_diare`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_remed_poli_umum_ispa1` FOREIGN KEY (`id_ispa`) REFERENCES `ispa` (`id_ispa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_remed_poli_umum_kunjungan1` FOREIGN KEY (`id_kunjungan`) REFERENCES `kunjungan` (`id_kunjungan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_remed_poli_umum_pasien1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_remed_poli_umum_tbc1` FOREIGN KEY (`id_tbc`) REFERENCES `tbc` (`id_tbc`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `remed_umum_lab`
--
ALTER TABLE `remed_umum_lab`
  ADD CONSTRAINT `fk_remed_poli_umum_has_pemeriksaan_lab_pemeriksaan_lab1` FOREIGN KEY (`id_pemeriksaan_lab`) REFERENCES `pemeriksaan_lab` (`id_pemeriksaan_lab`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_remed_poli_umum_has_pemeriksaan_lab_remed_poli_umum1` FOREIGN KEY (`id_remed_umum`) REFERENCES `remed_poli_umum` (`id_remed_umum`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
