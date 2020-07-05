-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 01, 2020 at 05:01 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `robot_control_panel`
--

-- --------------------------------------------------------

--
-- Table structure for table `robot_steps`
--

CREATE TABLE `robot_steps` (
  `id` int(11) NOT NULL,
  `toright` varchar(255) NOT NULL,
  `toleft` varchar(255) NOT NULL,
  `forward` varchar(255) NOT NULL,
  `backward` varchar(255) NOT NULL,
  `stop` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `robot_steps`
--

INSERT INTO `robot_steps` (`id`, `toright`, `toleft`, `forward`, `backward`, `stop`) VALUES
(1, 'R', '', '', '', ''),
(2, 'R', '', '', '', ''),
(3, 'R', '', '', '', ''),
(4, '', '', 'F', '', ''),
(5, '', 'L', '', '', ''),
(6, '', '', '', 'B', ''),
(7, '', '', '', '', 'S'),
(8, 'R', '', '', '', ''),
(9, '', '', '', '', 'S');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `robot_steps`
--
ALTER TABLE `robot_steps`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `robot_steps`
--
ALTER TABLE `robot_steps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
