-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 08:30 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekonsul`
--

-- --------------------------------------------------------

--
-- Table structure for table `actionplan`
--

CREATE TABLE `actionplan` (
  `IDActionplan` int(11) NOT NULL,
  `IDBooking` int(11) NOT NULL,
  `isi` varchar(3000) NOT NULL,
  `judul` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `namadepan` varchar(30) NOT NULL,
  `namabelakang` varchar(30) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `notelp` varchar(12) NOT NULL,
  `role` varchar(30) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `foto` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`username`, `password`, `namadepan`, `namabelakang`, `email`, `alamat`, `notelp`, `role`, `gender`, `foto`) VALUES
('', '$2y$10$wtC.bkyw/z9inPhmg7UlAObL8K63mCBa/zcuYqjWnN8SGWYrxUFiO', '', '', '', '', '', 'Konsultan', '-', NULL),
('12345', '$2y$10$A9NIYX8zGNZxvQWW39bOE.pIAewCsrp0j8gU.bGbBMMUy4feQ2pca', 'Budi', 'Santoso', 'gamedevesqbs@gmail.com', 'Jakarta', '085362017909', 'Konsultan', 'L', NULL),
('12fdsafdas', '$2y$10$cJzWr6f8pc27.R8QoX7s7u8Z.9be5z7nplfKAOC2o6Ly6qoTxqsWK', 'Muchsing', 'Konsultang', 'ed211', 'dqdwqqwdqwd', '123123', 'Konsultan', 'L', NULL),
('1910130004', '$2y$10$1W/hbasxk2oC.6LndzZ5C.VUM8fEJSKixM8WHmuc6QYN8Jk7pRLle', 'Amanda', 'Muchsin Chalik', 'a.muchsin.chalik@students.esqbs.ac.id', 'KOta', '085362017909', 'Mahasiswa', 'L', NULL),
('1910130014', '$2y$10$jppIslJPHArreWGegO//6ev2eEWCU5YLSrRVlIOmdYBU2esg64xEm', 'Mutiara', 'Pulungan', 'mutiaraplg00@gmail.com', 'Medan', '08216034427', 'Mahasiswa', 'P', NULL),
('222', '$2y$10$z0ZSu2fYNcmHSmEpAJ9Jie2Vk.NalG.FUOvInuFZ0VmnYJkNcH5ly', 'hu', 'tao', '', '123213we1e1', '213214123', 'Mahasiswa', 'L', NULL),
('admin', '$2y$10$9hEtM7s7DGoH6jpYMPQb8uqdxxxl3ZOObOxv69T/nq5.sPnjrH1Ve', 'Admin', 'Ekonsultasi', 'amandamuchsinchalik@gmail.com', '-', '085362017909', 'Admin', '-', NULL),
('konsul', '$2y$10$z8BgI.af9gRBhdP2xjXWTuIBQ0g4wkjKIm.08bYYvweNDxZhvbQpu', 'konsul', 'tan', 'konsulta', '24sdadasdadwqd', '213213', 'Konsultan', 'L', NULL),
('teads', '$2y$10$v82jFnkxhRFYZnDgTVudAOdjrtYDumK9CvtS7Z71hMGvmgGrhjCqq', 'Mutiara', 'Persada', 'dwqdas', 'asdsadsasada', '12321312', 'Konsultan', 'P', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `IDBooking` int(11) NOT NULL,
  `IDMahasiswa` int(11) NOT NULL,
  `IDKonsultan` int(11) NOT NULL,
  `jadwal` date NOT NULL,
  `waktu` time NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `IDKategori` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `alasan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `IDDepartment` int(11) NOT NULL,
  `Namadepartment` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`IDDepartment`, `Namadepartment`) VALUES
(1, 'Coaching'),
(2, 'Dosen'),
(3, 'Keuangan'),
(4, 'Kemahasiswaan');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `IDKategori` int(11) NOT NULL,
  `Namakategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`IDKategori`, `Namakategori`) VALUES
(1, 'Coaching'),
(2, 'Kemahasiswaan');

-- --------------------------------------------------------

--
-- Table structure for table `konsultan`
--

CREATE TABLE `konsultan` (
  `IDKonsultan` int(11) NOT NULL,
  `IDDepartment` int(11) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konsultan`
--

INSERT INTO `konsultan` (`IDKonsultan`, `IDDepartment`, `username`) VALUES
(12, 1, '12345'),
(15, 2, 'konsul'),
(16, 3, 'teads'),
(17, 2, '12fdsafdas');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `IDMahasiswa` int(11) NOT NULL,
  `IDprodi` int(11) NOT NULL,
  `semester` int(11) DEFAULT NULL,
  `tgllahir` date NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`IDMahasiswa`, `IDprodi`, `semester`, `tgllahir`, `username`) VALUES
(37, 3, 4, '2021-06-30', '1910130014'),
(38, 3, 4, '2021-06-14', '1910130004'),
(39, 3, 4, '2021-06-14', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `IDProdi` int(11) NOT NULL,
  `NamaProdi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`IDProdi`, `NamaProdi`) VALUES
(1, 'Business Management'),
(2, 'Sistem Informasi'),
(3, 'Ilmu Komputer');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_consultant`
-- (See below for the actual view)
--
CREATE TABLE `vw_consultant` (
`username` varchar(30)
,`namadepan` varchar(30)
,`namabelakang` varchar(30)
,`email` varchar(50)
,`alamat` varchar(50)
,`notelp` varchar(12)
,`role` varchar(30)
,`gender` varchar(1)
,`foto` longblob
,`IDKonsultan` int(11)
,`IDDepartment` int(11)
,`Namakategori` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_mahasiswa`
-- (See below for the actual view)
--
CREATE TABLE `vw_mahasiswa` (
`username` varchar(30)
,`namadepan` varchar(30)
,`namabelakang` varchar(30)
,`email` varchar(50)
,`alamat` varchar(50)
,`notelp` varchar(12)
,`role` varchar(30)
,`gender` varchar(1)
,`foto` longblob
,`IDMahasiswa` int(11)
,`IDprodi` int(11)
,`semester` int(11)
,`tgllahir` date
,`NamaProdi` varchar(20)
);

-- --------------------------------------------------------

--
-- Structure for view `vw_consultant`
--
DROP TABLE IF EXISTS `vw_consultant`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_consultant`  AS SELECT `a`.`username` AS `username`, `a`.`namadepan` AS `namadepan`, `a`.`namabelakang` AS `namabelakang`, `a`.`email` AS `email`, `a`.`alamat` AS `alamat`, `a`.`notelp` AS `notelp`, `a`.`role` AS `role`, `a`.`gender` AS `gender`, `a`.`foto` AS `foto`, `b`.`IDKonsultan` AS `IDKonsultan`, `b`.`IDDepartment` AS `IDDepartment`, `c`.`Namakategori` AS `Namakategori` FROM ((`akun` `a` left join `konsultan` `b` on(`b`.`username` = `a`.`username`)) left join `kategori` `c` on(`c`.`IDKategori` = `b`.`IDDepartment`)) WHERE `a`.`role` = 'Konsultan' ;

-- --------------------------------------------------------

--
-- Structure for view `vw_mahasiswa`
--
DROP TABLE IF EXISTS `vw_mahasiswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_mahasiswa`  AS SELECT `a`.`username` AS `username`, `a`.`namadepan` AS `namadepan`, `a`.`namabelakang` AS `namabelakang`, `a`.`email` AS `email`, `a`.`alamat` AS `alamat`, `a`.`notelp` AS `notelp`, `a`.`role` AS `role`, `a`.`gender` AS `gender`, `a`.`foto` AS `foto`, `b`.`IDMahasiswa` AS `IDMahasiswa`, `b`.`IDprodi` AS `IDprodi`, `b`.`semester` AS `semester`, `b`.`tgllahir` AS `tgllahir`, `c`.`NamaProdi` AS `NamaProdi` FROM ((`akun` `a` left join `mahasiswa` `b` on(`b`.`username` = `a`.`username`)) left join `prodi` `c` on(`c`.`IDProdi` = `b`.`IDprodi`)) WHERE `a`.`role` = 'Mahasiswa' ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actionplan`
--
ALTER TABLE `actionplan`
  ADD PRIMARY KEY (`IDActionplan`),
  ADD KEY `fk_IDBooking` (`IDBooking`);

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`IDBooking`),
  ADD KEY `fk_IDKonsul` (`IDKonsultan`),
  ADD KEY `fk_IDMhs` (`IDMahasiswa`),
  ADD KEY `fk_Kategori` (`IDKategori`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`IDDepartment`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`IDKategori`);

--
-- Indexes for table `konsultan`
--
ALTER TABLE `konsultan`
  ADD PRIMARY KEY (`IDKonsultan`),
  ADD KEY `fk_IDDepart` (`IDDepartment`),
  ADD KEY `fk_userKonsul` (`username`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`IDMahasiswa`),
  ADD KEY `fk_usermhs` (`username`),
  ADD KEY `fk_IDProdi` (`IDprodi`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`IDProdi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actionplan`
--
ALTER TABLE `actionplan`
  MODIFY `IDActionplan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `IDBooking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `IDDepartment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `IDKategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `konsultan`
--
ALTER TABLE `konsultan`
  MODIFY `IDKonsultan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `IDMahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `IDProdi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `actionplan`
--
ALTER TABLE `actionplan`
  ADD CONSTRAINT `fk_IDBooking` FOREIGN KEY (`IDBooking`) REFERENCES `booking` (`IDBooking`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `fk_IDKonsul` FOREIGN KEY (`IDKonsultan`) REFERENCES `konsultan` (`IDKonsultan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_IDMhs` FOREIGN KEY (`IDMahasiswa`) REFERENCES `mahasiswa` (`IDMahasiswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Kategori` FOREIGN KEY (`IDKategori`) REFERENCES `kategori` (`IDKategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `konsultan`
--
ALTER TABLE `konsultan`
  ADD CONSTRAINT `fk_IDDepart` FOREIGN KEY (`IDDepartment`) REFERENCES `department` (`IDDepartment`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_userKonsul` FOREIGN KEY (`username`) REFERENCES `akun` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `fk_IDProdi` FOREIGN KEY (`IDprodi`) REFERENCES `prodi` (`IDProdi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_usermhs` FOREIGN KEY (`username`) REFERENCES `akun` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
