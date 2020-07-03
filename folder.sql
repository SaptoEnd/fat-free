-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 29, 2019 at 08:24 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `folder`
--

-- --------------------------------------------------------

--
-- Table structure for table `fd`
--

DROP TABLE IF EXISTS `fd`;
CREATE TABLE IF NOT EXISTS `fd` (
  `id` int(33) NOT NULL AUTO_INCREMENT,
  `id_user` int(33) NOT NULL,
  `fd_name` varchar(98) NOT NULL,
  `fd_data` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fd`
--

INSERT INTO `fd` (`id`, `id_user`, `fd_name`, `fd_data`) VALUES
(1, 1, 'fdtest', 'datatest');

-- --------------------------------------------------------

--
-- Table structure for table `folder`
--

DROP TABLE IF EXISTS `folder`;
CREATE TABLE IF NOT EXISTS `folder` (
  `id` int(33) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `id_user` int(33) NOT NULL,
  `id_folder` int(33) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  KEY `id_folder` (`id_folder`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `folder`
--

INSERT INTO `folder` (`id`, `name`, `id_user`, `id_folder`) VALUES
(11, 'BoardingPass - rusmal.pdf', 1, 113),
(27, 'Tugas11.docx', 0, 0),
(28, 'Tugas11.docx', 0, 0),
(50, 'sinta.txt', 2, 114),
(51, 'dd.txt', 2, 117),
(52, 'BoardingPass - rusmal.pdf', 1, 112),
(53, 'BoardingPass - rusmal.pdf', 1, 112),
(54, 'NBM.pdf', 1, 112),
(55, 'Abstract conference.docx', 1, 123),
(61, 'BoardingPass - Pak Sam.pdf', 1, 123),
(62, 'BoardingPass.pdf', 1, 123),
(63, 'BoardingPass.pdf', 1, 123),
(64, 'Test 1.docx', 1, 123),
(65, 'Test 1.docx', 1, 123);

-- --------------------------------------------------------

--
-- Table structure for table `inser`
--

DROP TABLE IF EXISTS `inser`;
CREATE TABLE IF NOT EXISTS `inser` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `nama` varchar(33) NOT NULL,
  `id_user` int(33) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=155 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inser`
--

INSERT INTO `inser` (`id`, `nama`, `id_user`) VALUES
(112, 'folder 1', 1),
(113, 'folder 2', 1),
(114, 'folder 3', 2),
(117, 'folder 4', 2),
(123, 'saptoo', 1),
(154, 'foldertest', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `username` varchar(55) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'test', '$2y$10$97nwuiyc0zZD.Qoh0uI6zOQl86ImaWEIgDadfMG90hpAEHeojqEha'),
(2, 'ttt', '$2y$10$97nwuiyc0zZD.Qoh0uI6zOQl86ImaWEIgDadfMG90hpAEHeojqEha');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `firstname`, `lastname`, `created_at`) VALUES
(1, 't@w.c', '$2y$10$97nwuiyc0zZD.Qoh0uI6zOQl86ImaWEIgDadfMG90hpAEHeojqEha', 't', 't', '2019-07-21 20:16:58');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
