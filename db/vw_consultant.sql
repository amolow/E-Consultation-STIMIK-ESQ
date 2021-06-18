-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 01:27 AM
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
-- Structure for view `vw_consultant`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_consultant`  AS SELECT `a`.`username` AS `username`, `a`.`namadepan` AS `namadepan`, `a`.`namabelakang` AS `namabelakang`, `a`.`email` AS `email`, `a`.`alamat` AS `alamat`, `a`.`notelp` AS `notelp`, `a`.`role` AS `role`, `a`.`gender` AS `gender`, `a`.`foto` AS `foto`, `b`.`IDKonsultan` AS `IDKonsultan`, `b`.`IDDepartment` AS `IDDepartment`, `c`.`Namakategori` AS `Namakategori` FROM ((`akun` `a` left join `konsultan` `b` on(`b`.`username` = `a`.`username`)) left join `kategori` `c` on(`c`.`IDKategori` = `b`.`IDDepartment`)) WHERE `a`.`role` = 'Konsultan' ;

--
-- VIEW `vw_consultant`
-- Data: None
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
