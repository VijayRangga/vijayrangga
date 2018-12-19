-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2017 at 03:24 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kanmenag`
--
CREATE DATABASE IF NOT EXISTS `kanmenag` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kanmenag`;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `nip` varchar(18) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gol` varchar(5) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nama`, `gol`, `jabatan`) VALUES
('195909181983031003', 'H. Habib Badruddin,S.Sos', 'IVa', 'Kepala Bagian Tata Usaha Kanwil Kementerian Agama Provinsi Aceh'),
('196012311990011001', 'Drs. H. M. Daud Pakeh', 'IV/b', 'Kepala Kanwil Kementerian Agama Provinsi Aceh');

-- --------------------------------------------------------

--
-- Table structure for table `spd`
--

CREATE TABLE IF NOT EXISTS `spd` (
  `nip` varchar(18) NOT NULL,
  `no_surat` varchar(5) NOT NULL,
  `tgl_surat` date DEFAULT NULL,
  `utk_tgs` varchar(30) NOT NULL,
  `m_tgs` date NOT NULL,
  `smp` date NOT NULL,
  `bertempat` varchar(50) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spd`
--

INSERT INTO `spd` (`nip`, `no_surat`, `tgl_surat`, `utk_tgs`, `m_tgs`, `smp`, `bertempat`) VALUES
('12345', 'a', '0000-00-00', 'b', '0000-00-00', '0000-00-00', 'e'),
('123456789', 'aaaaa', '0000-00-00', 'kkkkkkkkkkk', '0000-00-00', '0000-00-00', 'nnnnnnn'),
('123456979999999999', '12345', '0000-00-00', 'oke', '0000-00-00', '0000-00-00', 'pidie'),
('195909181983031003', '12345', '2011-11-01', '222222', '2011-11-11', '0000-00-00', 'nilai'),
('2147483647', '12345', '2011-11-01', '222222', '0000-00-00', '0000-00-00', 'nilai'),
('a', 'b', '0000-00-00', 'c', '0000-00-00', '0000-00-00', 'f');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
