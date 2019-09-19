-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2019 at 11:56 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `darbee`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `name` varchar(11) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `name`, `password`) VALUES
(1, '0', '0', '0'),
(2, 'darko@darko.de', 'Darko', 'darko'),
(3, 'grgrgrgrgrgrgr@vffvf', 'gtgtgtgtgtg', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'),
(4, 'vvdvdfvdvfdvd@vfffg', 'v f f f fvg', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'),
(5, 'bbbbbb@bbbb', 'bbgbgbgbgb', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'),
(6, 'bbbbbb@bbbb', 'bbgbgbgbgb', 'a689d786e81340e45511dec6c7ab2d978434e5db123362450fe10cfac70d19d0'),
(7, 'bbbbbb@bbbb', 'bbgbgbgbgb', 'a689d786e81340e45511dec6c7ab2d978434e5db123362450fe10cfac70d19d0'),
(8, 'bbbbbb@bbbb', 'bbgbgbgbgb', 'a689d786e81340e45511dec6c7ab2d978434e5db123362450fe10cfac70d19d0'),
(9, 'bbbbbb@bbbb', 'bbgbgbgbgb', 'a689d786e81340e45511dec6c7ab2d978434e5db123362450fe10cfac70d19d0'),
(10, 'darko@darko.yahoo', 'dadadarko', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(11, 'darko@darko.yahoo', 'dadadarko', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(12, 'dmdmdm@ded', 'dnndn', '983779cd6aa1f934a64201a8473f7ff6d2408929a63b00a60c2cac2a9287b174');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
