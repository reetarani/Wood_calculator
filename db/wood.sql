-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2017 at 08:56 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wood`
--

-- --------------------------------------------------------

--
-- Table structure for table `circle`
--

CREATE TABLE `circle` (
  `id` int(11) NOT NULL,
  `length` int(11) NOT NULL,
  `gln` int(11) NOT NULL,
  `gin` int(11) NOT NULL,
  `gr` float NOT NULL,
  `cft` float NOT NULL,
  `cmt` float NOT NULL,
  `client` varchar(255) NOT NULL,
  `insdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `circle`
--

INSERT INTO `circle` (`id`, `length`, `gln`, `gin`, `gr`, `cft`, `cmt`, `client`, `insdate`) VALUES
(5, 1, 21, 2, 4032.25, 28.0017, 0.792465, 'Sid', '2017-09-03 21:56:05'),
(6, 1, 1, 2, 12.25, 0.0850694, 0.00240751, 'asas', '2017-09-03 23:47:49'),
(7, 1, 6, 2, 342.25, 2.37674, 0.0672629, 'Sasasdas', '2017-09-04 00:05:38'),
(8, 1, 2, 3, 45.5625, 0.316406, 0.00895447, 'Sid', '2017-09-04 00:09:01'),
(9, 1, 2, 3, 45.5625, 0.316406, 0.00895447, 'Abc', '2017-09-04 10:12:03');

-- --------------------------------------------------------

--
-- Table structure for table `cutpiece`
--

CREATE TABLE `cutpiece` (
  `id` int(11) NOT NULL,
  `length` float NOT NULL,
  `width` float NOT NULL,
  `thick` float NOT NULL,
  `piece` float NOT NULL,
  `cft` float NOT NULL,
  `cmt` float NOT NULL,
  `client` varchar(255) NOT NULL,
  `insdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `cutpiece`
--

INSERT INTO `cutpiece` (`id`, `length`, `width`, `thick`, `piece`, `cft`, `cmt`, `client`, `insdate`) VALUES
(16, 2, 5, 7, 9, 4.375, 0.123815, 'qw', '2017-09-01 19:25:21'),
(17, 1, 2, 3, 4, 0.166667, 0.00471676, 'Test', '2017-09-03 22:01:43'),
(18, 1, 2, 3, 3, 0.125, 0.00353757, '1', '2017-09-03 23:40:05'),
(19, 5, 50, 10, 12, 208.333, 5.89595, 'Hussain', '2017-09-04 00:04:52'),
(20, 1, 2, 3, 4, 0.166667, 0.00471676, 'Reeta', '2017-09-04 00:11:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `circle`
--
ALTER TABLE `circle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cutpiece`
--
ALTER TABLE `cutpiece`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `circle`
--
ALTER TABLE `circle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `cutpiece`
--
ALTER TABLE `cutpiece`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
