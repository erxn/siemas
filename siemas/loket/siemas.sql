-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 03, 2010 at 10:19 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `kk`
--

INSERT INTO `kk` (`id_kk`, `tanggal_pendaftaran`, `nama_kk`, `jk_kk`, `alamat_kk`, `kecamatan_kk`, `kelurahan_kk`, `kota_kab_kk`, `status_wil_luar`) VALUES
(1, '1970-01-01', 'Adnan Alghani', 'Laki-laki', 'jl. BALIO', 'Cibogor', 'bogor tengah', 'bogor', 'Luar Kota Bogor'),
(2, '2011-07-29', 'Adnan ', 'Laki-laki', 'jl. BALIO', 'Cibogor', 'bogor tengah', 'bogor', 'Luar Kota Bogor'),
(3, '1970-01-01', '', '', '', '', '', '', ''),
(4, '1970-01-01', '', '', '', '', '', '', ''),
(5, '1970-01-01', '', '', '', '', '', '', ''),
(6, '2011-08-04', 'annisa', 'Perempuan', 'jalan apa', 'bogor tengah', 'Cibogor', 'Bogor', ''),
(7, '1970-01-01', '', '', '', '', '', '', ''),
(8, '1970-01-01', '', '', '', '', '', '', ''),
(9, '1970-01-01', '', '', '', '', '', '', ''),
(10, '1970-01-01', '', '', '', '', '', '', ''),
(11, '1970-01-01', '', '', '', '', '', '', ''),
(12, '1970-01-01', '', '', '', '', '', '', ''),
(13, '1970-01-01', '', '', '', '', '', '', ''),
(14, '1970-01-01', '', '', '', '', '', '', ''),
(15, '1970-01-01', '', '', '', '', '', '', ''),
(16, '1970-01-01', '', '', '', '', '', '', ''),
(17, '1970-01-01', '', '', '', '', '', '', ''),
(18, '1970-01-01', '', '', '', '', '', '', ''),
(19, '1970-01-01', '', '', '', '', '', '', ''),
(20, '2011-08-04', '', 'Laki-laki', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `id_pasien` int(20) NOT NULL AUTO_INCREMENT,
  `tanggal_pendaftaran` date NOT NULL,
  `nama_pasien` varchar(45) NOT NULL,
  `jk_pasien` enum('Laki-laki','Perempuan') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status_dalam_keluarga` enum('Kepala Keluarga','Ibu','Anak','Kakek','Nenek','Tinggal Sementara') DEFAULT NULL,
  `status_pelayanan` enum('Askes','Jamkesmas','Umum','Lain-lain') NOT NULL,
  `no_kartu_layanan` bigint(20) DEFAULT NULL,
  `id_KK` int(11) NOT NULL,
  `kode_pasien` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pasien`),
  KEY `fk_pasien_KK` (`id_KK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `tanggal_pendaftaran`, `nama_pasien`, `jk_pasien`, `tanggal_lahir`, `status_dalam_keluarga`, `status_pelayanan`, `no_kartu_layanan`, `id_KK`, `kode_pasien`) VALUES
(1, '2011-07-07', 'qwerty', 'Perempuan', '0000-00-00', 'Kepala Keluarga', 'Askes', 123456, 2, 'Q-0002'),
(2, '2011-07-07', 'Annisa Anastasia', 'Perempuan', '1990-02-01', 'Kepala Keluarga', 'Askes', 123456, 2, 'Q-0002'),
(3, '2011-07-07', 'Nia nia nia', 'Perempuan', '1990-06-01', 'Kepala Keluarga', 'Askes', 123456, 2, 'N-0002-1'),
(4, '2011-07-07', 'Nia nia nia', 'Perempuan', '1990-06-01', 'Kepala Keluarga', 'Askes', 123456, 2, 'N-0002-'),
(5, '2011-07-07', 'Nia nia nia', 'Perempuan', '1990-06-01', 'Kepala Keluarga', 'Askes', 123456, 2, 'N-0002'),
(6, '2011-07-07', 'Nia nia nia', 'Perempuan', '1990-06-01', 'Kepala Keluarga', 'Askes', 123456, 2, 'N-0002-2'),
(7, '2011-07-05', 'nnnnn', '', '0000-00-00', '', 'Umum', 0, 2, 'N-0002-7'),
(8, '1970-01-01', '', '', '0000-00-00', '', 'Umum', 0, 3, '-0003-1'),
(9, '1970-01-01', '', '', '0000-00-00', '', 'Umum', 0, 4, '-0004-1'),
(10, '1970-01-01', '', '', '0000-00-00', '', 'Umum', 0, 5, '-0005-1'),
(11, '2011-08-03', 'putri', 'Perempuan', '1990-01-12', 'Ibu', 'Askes', 1234567, 6, 'P-0006-1'),
(12, '1970-01-01', '', '', '0000-00-00', '', 'Umum', 0, 16, '-0016-1'),
(13, '1970-01-01', '', '', '0000-00-00', '', 'Umum', 0, 16, '-0016-2'),
(14, '1970-01-01', '', '', '0000-00-00', '', 'Umum', 0, 17, '-0017-1'),
(15, '2011-08-01', '', 'Perempuan', '1990-01-12', '', 'Askes', 0, 20, '-0020-1');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `fk_pasien_KK0` FOREIGN KEY (`id_KK`) REFERENCES `kk` (`id_KK`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
