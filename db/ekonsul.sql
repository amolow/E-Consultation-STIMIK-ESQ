-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 05:02 PM
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
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`username`, `password`, `namadepan`, `namabelakang`, `email`, `alamat`, `notelp`, `role`, `gender`, `foto`) VALUES
('', '$2y$10$wtC.bkyw/z9inPhmg7UlAObL8K63mCBa/zcuYqjWnN8SGWYrxUFiO', '', '', '', '', '', 'Konsultan', '-', '????\0JFIF\0\0`\0`\0\0??\0C\0\n\n\n		\n\Z%\Z# , #&\')*)-0-(0%()(??\0C\n\n'),
('0000', '$2y$10$Pkmt2AiBVIbwJfouiPHMye8DBffdbrrogUTzN2aFhJ5cFerUxO1yC', '0000', '0000', 'aa000', '0000', '0000', 'Konsultan', 'L', NULL),
('1123', '1e12e', 'ddd', 'ddd', 'ddd', 'ddd', '123', 'Mahasiswa', 'f', NULL),
('12345', '$2y$10$A9NIYX8zGNZxvQWW39bOE.pIAewCsrp0j8gU.bGbBMMUy4feQ2pca', 'Budi', 'Santoso', 'gamedevesqbs@gmail.com', 'Jakarta', '085362017909', 'Konsultan', 'L', NULL),
('12fdsafdas', '$2y$10$cJzWr6f8pc27.R8QoX7s7u8Z.9be5z7nplfKAOC2o6Ly6qoTxqsWK', 'Muchsing', 'Konsultang', 'ed211', 'dqdwqqwdqwd', '123123', 'Konsultan', 'L', NULL),
('1910130004', '$2y$10$1W/hbasxk2oC.6LndzZ5C.VUM8fEJSKixM8WHmuc6QYN8Jk7pRLle', 'Amanda', 'Muchsin Chalik', 'a.muchsin.chalik@students.esqbs.ac.id', 'KOta', '085362017909', 'Mahasiswa', 'L', NULL),
('1910130014', '$2y$10$jppIslJPHArreWGegO//6ev2eEWCU5YLSrRVlIOmdYBU2esg64xEm', 'Mutiara', 'Pulungan', 'mutiaraplg00@gmail.com', 'Medan', '08216034427', 'Mahasiswa', 'P', NULL),
('21321', '$2y$10$yoE1lHQ4dvwA7VjPifmCGuOduHz8qF6jsnr9hgqr5g.vd2ZD6iRBu', '2131e', '12ed', '---', 'dsadadasscacac', '12312dsd21', 'Mahasiswa', 'L', NULL),
('222', '$2y$10$z0ZSu2fYNcmHSmEpAJ9Jie2Vk.NalG.FUOvInuFZ0VmnYJkNcH5ly', 'hu', 'tao', '', '123213we1e1', '213214123', 'Mahasiswa', 'L', NULL),
('333', '$2y$10$pZDgfzwyDl8FI1daluLvLeyvv18D7POw5U7q0e.KKNnvDJJiw0eN.', '3434', '12321321', '13213', 'luarrangkasdasaa', '3232421', 'Konsultan', 'P', NULL),
('555', '$2y$10$JZ/RTKfjHa/TzLI00RYsaehyDZErvp1Ml.MD4Q5D6aGTaMtHmWuoy', 'viraaa', 'xevaaa', 'asdasdwq', '23213sd21d1d12d', '314242', 'Mahasiswa', 'P', NULL),
('69696969', '$2y$10$5JYD9Nsw2UIWvWXKUjxkf..l87rXDJA4bpAzq2kXuKYhDnwPi0cSu', 'vira', 'xeva', 'viraaaa@gmail.com', 'The forest', '7777777', 'Mahasiswa', '-', NULL),
('admin', '$2y$10$9hEtM7s7DGoH6jpYMPQb8uqdxxxl3ZOObOxv69T/nq5.sPnjrH1Ve', 'Admin', 'Ekonsultasi', 'amandamuchsinchalik@gmail.com', '-', '085362017909', 'Admin', '-', NULL),
('asd', '$2y$10$HH0935thXArkbwsZphWeTeSspawn86M8JvYHDo.VLJOfwNBGyucgO', '', '', '', '', '', 'Konsultan', '-', NULL),
('eeeee', '$2y$10$2fRsZbjHugA0OPqmcfsQKeKi.U012gK4lFqXeIs.aobdQPTi6jnjO', '', '', '', '', '', 'Konsultan', '-', NULL),
('konsul', '$2y$10$z8BgI.af9gRBhdP2xjXWTuIBQ0g4wkjKIm.08bYYvweNDxZhvbQpu', 'konsul', 'tan', 'konsulta', '24sdadasdadwqd', '213213', 'Konsultan', 'L', NULL),
('konsultan', '$2y$10$dLwochYUP0JLAkSPE6sFUOpDzzdaAp5CWX2KXpEdr5p7B9RzTwunq', 'Mister', 'Konsultan', 'konsultan@gmail.com', 'ndafnalkdmsd', '0912093', 'Konsultan', 'L', NULL),
('naruto', '$2y$10$EM7at/4XKHeF0Q40gpYcXOkKJd7dafy3Q1y6JGrxL4VpuxtrN..w2', '', '', '', '', '', 'Konsultan', '-', './upload/162394162414682216260cb61f80e8bb.png'),
('qqqd', '$2y$10$Ah211AKghQRAgto782urHOeG6/ax23iXKMW24KGTc6jH5qzj9yHHe', 'qqqq', 'qqqq', '', '', '', 'Konsultan', 'P', NULL),
('teads', '$2y$10$v82jFnkxhRFYZnDgTVudAOdjrtYDumK9CvtS7Z71hMGvmgGrhjCqq', 'Mutiara', 'Persada', 'dwqdas', 'asdsadsasada', '12321312', 'Konsultan', 'P', NULL),
('Tesdting', '$2y$10$5xpdsV.ocJU1Z7ZaGEePfua4tShUIcZjZjboH/8YqMuC7NFpP8i5e', 'Testn', 'dwqd', 'd1d12', '4123213', '123', 'Konsultan', 'P', NULL),
('tesss', '$2y$10$3FVXI28vlvQVVukyeocrSepNT9PienapaYD1KlvxS7q2AIS22HGO6', '', '', 'tess', '', '', 'Konsultan', '-', ''),
('testing', '$2y$10$qxazZUaFJIZuchVFTwf7A.1Bh5a7TWW//N/Uhr2Tg02FPBSto6WT6', '', '', '', '', '', 'Mahasiswa', '-', ''),
('testttt', '$2y$10$GFZBp.9lb8YkYgd9VS/AmuTy8/4jFxbUq5x.njTbyP7Fs9u5NGEcO', '', '', '', '', '', 'Konsultan', '-', './upload/1623941516161143625060cb618cc60f0.png'),
('veeraaa', 'aa', 'aaa', 'aaa', 'aaaa', 'aaaa', '232', 'aaad', 'a', NULL),
('viraaaaaa', 'aaaa', 'aa', 'aaaaa', 'aaa', 'aaa', '111', 'aaaa', 'a', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `IDBooking` int(11) NOT NULL,
  `IDMahasiswa` int(11) DEFAULT NULL,
  `IDKonsultan` int(11) DEFAULT NULL,
  `jadwal` date DEFAULT NULL,
  `waktu` time DEFAULT NULL,
  `tempat` varchar(30) DEFAULT NULL,
  `IDKategori` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `alasan` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`IDBooking`, `IDMahasiswa`, `IDKonsultan`, `jadwal`, `waktu`, `tempat`, `IDKategori`, `status`, `alasan`) VALUES
(3, 38, 20, '2021-06-02', '20:27:18', 'Bekasi', 4, 'Diterima', 'dfsvfsdvfsdvsv'),
(23, 37, 15, '2021-04-07', '22:30:52', 'ESQ', 3, 'Diterima', 'gnngg'),
(55, 37, 15, '2021-06-18', '02:17:00', ' 214213', 2, 'Diterima', ' e2e1e'),
(77, 37, 15, '2021-07-01', '00:12:00', ' 2313', 2, 'Diterima', ' gggg'),
(79, 37, 12, '2021-06-19', '02:22:00', ' Luar Angkasa', 1, 'Ditolak', ' pain'),
(80, 39, 15, '2021-06-25', '03:37:00', ' 2313', 2, 'Ditolak', ' 2132131'),
(81, 39, 15, '2021-06-18', '03:06:00', ' 2313', 2, 'Ditolak', 'alterunm'),
(82, 23, 12, '2021-06-18', '03:14:00', ' The ocean', 1, 'Ditolak', ' IM drowningssszbralndsasds'),
(83, 37, 24, '2021-06-15', '22:30:52', 'Bekasi', 1, 'Diterima', 'dwdwdqwdawds'),
(84, 39, 24, '2021-06-08', '01:07:49', 'asdd', 2, 'Diterima', 'vdscdcaa'),
(85, 23, 12, '2021-07-03', '05:24:00', 'ASDdd', 1, 'Menunggu Konfirmasi', ' dsdad'),
(87, 23, 15, '2021-06-08', '02:04:00', ' 123', 2, 'Menunggu Konfirmasi', ' hellp'),
(88, 39, 15, '2021-07-10', '23:23:00', ' 1d12', 2, 'Menunggu Konfirmasi', ' brrrr');

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
(2, 'Kemahasiswaan'),
(3, 'Dosen'),
(4, 'Keuangan');

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
(17, 2, '12fdsafdas'),
(18, 4, 'Tesdting'),
(19, 4, 'eeeee'),
(20, 2, 'qqqd'),
(23, 3, '333'),
(24, 2, 'konsultan'),
(26, 3, '0000');

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
(23, 3, 4, '2021-06-09', '555'),
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
,`foto` varchar(100)
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
,`foto` varchar(100)
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
  MODIFY `IDBooking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `IDDepartment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `IDKategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `konsultan`
--
ALTER TABLE `konsultan`
  MODIFY `IDKonsultan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `IDMahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

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
