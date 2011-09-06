-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 06, 2010 at 10:51 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`id_antrian`, `status`, `id_kunjungan`, `id_poli`) VALUES
(1, 'ANTRI', 1, 3),
(2, 'ANTRI', 2, 3),
(3, 'ANTRI', 3, 3),
(4, 'ANTRI', 4, 3),
(5, 'ANTRI', 5, 3),
(6, 'ANTRI', 6, 3),
(7, 'ANTRI', 7, 3),
(8, 'SELESAI', 8, 1),
(9, 'SELESAI', 9, 1),
(10, 'SELESAI', 10, 1),
(11, 'SELESAI', 11, 1),
(12, 'ANTRI', 12, 2),
(15, 'SELESAI', 15, 1),
(23, 'ANTRI', 23, 3),
(24, 'ANTRI', 24, 1),
(25, 'ANTRI', 25, 1),
(26, 'ANTRI', 26, 2),
(27, 'SELESAI', 27, 1),
(28, 'SELESAI', 28, 2),
(29, 'SELESAI', 29, 1),
(30, 'SELESAI', 30, 2),
(31, 'SELESAI', 31, 1),
(32, 'ANTRI', 32, 3),
(33, 'SELESAI', 33, 2),
(34, 'ANTRI', 34, 7),
(35, 'ANTRI', 35, 1),
(36, 'ANTRI', 36, 2);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `kk`
--

INSERT INTO `kk` (`id_kk`, `tanggal_pendaftaran`, `nama_kk`, `jk_kk`, `alamat_kk`, `kelurahan_kk`, `kecamatan_kk`, `kota_kab_kk`, `status_wil_luar`) VALUES
(1, '2011-08-25', 'Wirna Hakam', 'Perempuan', 'Komp. LIPI Blok A3/23', 'Cibogor', 'Bogor Tengah', 'Bogor', ''),
(2, '2011-08-25', 'Wahyu Ramdan', 'Laki-laki', 'Jl. Murni Raya No. 5', 'Cibogor', 'Bogor Tengah', 'Bogor', ''),
(3, '2011-08-25', 'Narto Majid', 'Laki-laki', 'Gg. Babakan Raya', 'Cibogor', 'Bogor Tengah', 'Bogor', ''),
(4, '2011-08-27', 'Dadang Hermawan', 'Laki-laki', 'Komp. LIPI BLok 34', 'Cibogor', 'Bogor Tengah', 'Bogor', ''),
(5, '2010-09-04', 'Surya Barokah', '', 'Jl. Jujur Raya', 'Cibogor', 'Bogor Tengah', 'Bogor', ''),
(6, '2010-09-06', 'Supriyadi', '', 'Jl. Bangau Lima', 'Cibogor', 'Bogor Tengah', 'Bogor', '');

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
  `status_bawa_kartu` enum('Bawa','Tidak') NOT NULL DEFAULT 'Tidak',
  PRIMARY KEY (`id_kunjungan`),
  KEY `fk_kunjungan_pasien2` (`id_pasien`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`id_kunjungan`, `no_kunjungan`, `id_pasien`, `tanggal_kunjungan`, `status_pembayaran`, `total_harga`, `status_bawa_kartu`) VALUES
(1, 1, 3, '2011-08-25', 'Belum Lunas', NULL, 'Bawa'),
(2, 2, 7, '2011-08-25', 'Belum Lunas', NULL, 'Bawa'),
(3, 3, 4, '2011-08-25', 'Belum Lunas', NULL, 'Bawa'),
(4, 4, 5, '2011-08-25', 'Belum Lunas', NULL, 'Bawa'),
(5, 5, 6, '2011-08-25', 'Belum Lunas', NULL, 'Bawa'),
(6, 6, 1, '2011-08-25', 'Belum Lunas', NULL, 'Bawa'),
(7, 7, 2, '2011-08-25', 'Belum Lunas', NULL, 'Bawa'),
(8, 1, 3, '2011-08-27', 'Lunas', 4500, 'Bawa'),
(9, 2, 4, '2011-08-27', 'Belum Lunas', NULL, 'Bawa'),
(10, 3, 1, '2011-08-27', 'Belum Lunas', NULL, 'Bawa'),
(11, 4, 5, '2011-08-27', 'Belum Lunas', NULL, 'Bawa'),
(12, 5, 8, '2011-08-27', 'Belum Lunas', NULL, 'Bawa'),
(15, 6, 2, '2011-08-27', 'Belum Lunas', NULL, 'Tidak'),
(23, 7, 7, '2011-08-27', 'Belum Lunas', NULL, ''),
(24, 8, 2, '2011-08-27', 'Belum Lunas', NULL, 'Tidak'),
(25, 1, 9, '2010-09-04', 'Belum Lunas', NULL, 'Tidak'),
(26, 1, 7, '2010-09-05', 'Belum Lunas', NULL, ''),
(27, 2, 3, '2010-09-05', 'Belum Lunas', NULL, ''),
(28, 1, 3, '2010-09-06', 'Lunas', 15000, ''),
(29, 2, 1, '2010-09-06', 'Lunas', 40000, ''),
(30, 3, 10, '2010-09-06', 'Belum Lunas', NULL, 'Tidak'),
(31, 4, 11, '2010-09-06', 'Lunas', 4500, 'Tidak'),
(32, 5, 3, '2010-09-06', 'Belum Lunas', NULL, ''),
(33, 6, 7, '2010-09-06', 'Belum Lunas', NULL, ''),
(34, 7, 3, '2010-09-06', 'Belum Lunas', NULL, ''),
(35, 8, 12, '2010-09-06', 'Belum Lunas', NULL, 'Tidak'),
(36, 9, 12, '2010-09-06', 'Belum Lunas', NULL, 'Bawa');

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

INSERT INTO `kunjungan_has_layanan` (`id_kunjungan`, `id_layanan`, `harga_layanan`, `poli`) VALUES
(8, 26, 4500, 'LAB'),
(28, 67, 15000, 'GIGI'),
(29, 14, 40000, 'GIGI'),
(31, 26, 4500, 'LAB');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=169 ;

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
(22, 'Melahirkan', 500, '', ''),
(26, 'Hitung Jenis Lekosit', 4500, '', 'Lab'),
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
(57, 'Pemasangan IUD', 100000, 'KB', ''),
(58, 'Pencabutan IUD tanpa penyulit', 15000, NULL, ''),
(59, 'Pemasangan Inplant', 150000, NULL, ''),
(60, 'Pencabutan Inplant', 40000, NULL, ''),
(61, 'Suntik KB 3 bulan', 12000, 'KB', ''),
(62, 'Suntik KB 1 bulan', 15000, 'KB', ''),
(63, 'KB Pil 1 bulan', 10000, 'KB', ''),
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
(168, 'Incisi (penyayatan bedah kecil) / Ekstipasi', 25000, 'Operasi Kecil', '');

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
  PRIMARY KEY (`id_pasien`),
  KEY `fk_pasien_KK` (`id_KK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `tanggal_pendaftaran`, `nama_pasien`, `jk_pasien`, `tanggal_lahir`, `status_dalam_keluarga`, `id_kunjungan`, `status_pelayanan`, `no_kartu_layanan`, `id_KK`, `kode_pasien`) VALUES
(1, '2011-08-25', 'Wirna Hakam', 'Perempuan', '1965-01-06', 'Kepala Keluarga', NULL, 'Umum', 2345678, 1, 'W-0001-1'),
(2, '2011-08-25', 'Wahyu Ramdan', 'Laki-laki', '1970-04-12', 'Kepala Keluarga', NULL, 'Umum', 2345678, 2, 'W-0002-1'),
(3, '2011-08-25', 'Annisa Anastasia', 'Perempuan', '1990-12-04', 'Anak', NULL, 'Umum', 2345678, 1, 'A-0001-2'),
(4, '2011-08-25', 'Delima Muslimah', 'Perempuan', '1985-04-04', 'Ibu', NULL, 'Umum', 2345678, 2, 'D-0002-2'),
(5, '2011-08-25', 'Narto Majid', 'Laki-laki', '1950-07-02', 'Kepala Keluarga', NULL, 'Umum', 2345678, 3, 'N-0003-1'),
(6, '2011-08-25', 'Mukhlis', 'Laki-laki', '1997-05-01', 'Anak', NULL, 'Umum', 2345678, 3, 'M-0003-2'),
(7, '2011-08-25', 'Aditya Aradika', 'Laki-laki', '1992-10-24', 'Anak', NULL, 'Umum', 2345678, 1, 'A-0001-3'),
(8, '2011-08-27', 'Dadang Hermawan', 'Laki-laki', '1966-03-13', 'Kepala Keluarga', NULL, 'Umum', 0, 4, 'D-0004-1'),
(9, '2010-09-04', 'neri', 'Laki-laki', '1990-06-12', 'Anak', NULL, 'Umum', 0, 5, 'N-0005-1'),
(10, '2010-09-06', 'Astri Wulandari', 'Perempuan', '1990-03-12', 'Anak', NULL, 'Jamkesmas', 5678, 6, 'A-0006-1'),
(11, '2010-09-06', 'Wulan Rima', 'Perempuan', '1956-06-11', 'Ibu', NULL, 'Umum', 0, 6, 'W-0006-2'),
(12, '2010-09-06', 'Eko Santoso', 'Laki-laki', '1934-06-12', 'Kakek', NULL, 'Askes', 345678, 6, 'E-0006-3');

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
