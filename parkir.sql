-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 18, 2019 at 03:39 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parkir`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `NIP` varchar(50) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`NIP`, `Nama`, `Password`) VALUES
('11', 'Steve', 'aaa'),
('121', 'Tifanny', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `aktivitas`
--

CREATE TABLE `aktivitas` (
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `ID_card` int(11) NOT NULL,
  `keterangan` varchar(11) NOT NULL,
  `NIP` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aktivitas`
--

INSERT INTO `aktivitas` (`tanggal`, `jam`, `ID_card`, `keterangan`, `NIP`) VALUES
('2019-12-15', '18:50:41', 1, 'masuk', '132'),
('2019-12-15', '18:50:47', 1, 'keluar', '132'),
('2019-12-15', '18:51:06', 1, 'masuk', '132'),
('2019-12-15', '18:51:10', 1, 'keluar', '132'),
('2019-12-15', '18:51:48', 2, 'masuk', '132'),
('2019-12-15', '18:51:52', 2, 'keluar', '132'),
('2019-12-15', '18:52:08', 2, 'masuk', '132'),
('2019-12-15', '18:52:16', 2, 'keluar', '132'),
('2019-12-16', '10:05:01', 1, 'masuk', '132'),
('2019-12-16', '10:05:42', 1, 'keluar', '132'),
('2019-12-16', '10:05:52', 1, 'masuk', '132'),
('2019-12-16', '10:05:56', 1, 'keluar', '132'),
('2019-12-16', '10:20:56', 1, 'masuk', '132'),
('2019-12-16', '10:21:00', 1, 'keluar', '132'),
('2019-12-18', '08:25:42', 1, 'masuk', '132'),
('2019-12-18', '08:25:54', 1, 'keluar', '212'),
('2019-12-18', '08:26:48', 1, 'masuk', '132'),
('2019-12-18', '08:26:55', 1, 'keluar', '212'),
('2019-12-18', '08:27:35', 8, 'masuk', '132'),
('2019-12-18', '08:27:44', 8, 'keluar', '212'),
('2019-12-18', '08:28:33', 7, 'masuk', '132'),
('2019-12-18', '08:28:55', 7, 'keluar', '212'),
('2019-12-18', '08:29:41', 7, 'masuk', '132'),
('2019-12-18', '08:29:50', 7, 'keluar', '212'),
('2019-12-18', '19:02:34', 1, 'masuk', '140'),
('2019-12-18', '19:37:51', 9, 'masuk', '140'),
('2019-12-18', '19:43:42', 1, 'keluar', '223'),
('2019-12-18', '19:44:15', 9, 'keluar', '223'),
('2019-12-18', '19:44:36', 9, 'masuk', '140'),
('2019-12-18', '19:45:20', 9, 'keluar', '223');

-- --------------------------------------------------------

--
-- Table structure for table `annual`
--

CREATE TABLE `annual` (
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `annual`
--

INSERT INTO `annual` (`total`) VALUES
(240000);

-- --------------------------------------------------------

--
-- Table structure for table `kuota_member`
--

CREATE TABLE `kuota_member` (
  `ID_card` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `Pemakaian` int(11) NOT NULL,
  `Kuota` int(11) NOT NULL,
  `Sisa_kuota` int(11) NOT NULL,
  `RiwayatTopUp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuota_member`
--

INSERT INTO `kuota_member` (`ID_card`, `tanggal`, `Pemakaian`, `Kuota`, `Sisa_kuota`, `RiwayatTopUp`) VALUES
(1, '2019-12-15', 3, 30, 27, 1),
(2, '2019-12-15', 1, 30, 29, 1),
(3, '2019-12-15', 0, 30, 30, 1),
(4, '2019-12-15', 0, 30, 30, 1),
(5, '2019-12-15', 0, 30, 30, 1),
(6, '2019-12-15', 0, 30, 30, 1),
(7, '2019-12-18', 0, 30, 30, 1),
(8, '2019-12-18', 0, 30, 30, 1),
(9, '2019-12-18', 1, 30, 29, 1);

-- --------------------------------------------------------

--
-- Table structure for table `logmotor`
--

CREATE TABLE `logmotor` (
  `ID_card` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlahIn` int(11) NOT NULL,
  `jumlahOut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logmotor`
--

INSERT INTO `logmotor` (`ID_card`, `tanggal`, `jumlahIn`, `jumlahOut`) VALUES
(1, '2019-12-15', 4, 4),
(2, '2019-12-15', 2, 2),
(1, '2019-12-16', 3, 3),
(1, '2019-12-18', 3, 3),
(8, '2019-12-18', 1, 1),
(7, '2019-12-18', 2, 2),
(9, '2019-12-18', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `ID_card` int(25) NOT NULL,
  `NIM` varchar(30) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Jenis_kendaraan` varchar(10) NOT NULL,
  `NoPlat` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`ID_card`, `NIM`, `Nama`, `Jenis_kendaraan`, `NoPlat`) VALUES
(1, '11170970000007', 'Steve', 'motor', 'B1234A'),
(2, '11170970000004', 'Jobs', 'motor', 'B321C'),
(3, '11170970000005', 'Jeff', 'motor', 'B1213A'),
(4, '11170970000006', 'Curious', 'motor', 'B3215A'),
(5, '11170970000001', 'george', 'motor', 'B3242C'),
(6, '11180110000067', 'Jack', 'motor', 'B3234C'),
(7, '11170110000011', 'Elisa', 'motor', 'B3432S'),
(8, '11170110000077', 'Saviera', 'motor', 'B7773W'),
(9, '11170110000067', 'Steve', 'motor', 'B7777X');

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `NIP` varchar(25) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`NIP`, `Nama`, `password`) VALUES
('132', 'Difo', 'aaa'),
('140', 'Jamal', 'www'),
('222', 'Topic', 'aaa'),
('223', 'Dobleh', 'aaa'),
('225', 'Nopal', 'wawa');

-- --------------------------------------------------------

--
-- Table structure for table `Topup`
--

CREATE TABLE `Topup` (
  `tanggal` date NOT NULL,
  `ID_card` int(11) NOT NULL,
  `Biaya` int(11) NOT NULL,
  `Kuota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Topup`
--

INSERT INTO `Topup` (`tanggal`, `ID_card`, `Biaya`, `Kuota`) VALUES
('2019-12-15', 1, 20000, 30),
('2019-12-15', 2, 20000, 30),
('2019-12-15', 3, 20000, 30),
('2019-12-15', 4, 20000, 30),
('2019-12-15', 5, 20000, 30),
('2019-12-15', 7, 20000, 30),
('2019-12-15', 6, 20000, 30),
('2019-12-18', 8, 20000, 30),
('2019-12-18', 7, 20000, 30),
('2019-12-18', 8, 20000, 30),
('2019-12-18', 8, 20000, 30),
('2019-12-18', 9, 20000, 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `kuota_member`
--
ALTER TABLE `kuota_member`
  ADD PRIMARY KEY (`ID_card`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID_card`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`NIP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kuota_member`
--
ALTER TABLE `kuota_member`
  MODIFY `ID_card` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `ID_card` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
