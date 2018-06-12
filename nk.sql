-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2017 at 09:24 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datank`
--

-- --------------------------------------------------------

--
-- Table structure for table `nk`
--

CREATE TABLE `nk` (
  `s_no` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nk`
--

INSERT INTO `nk` (`s_no`, `name`, `email`, `contact`, `comment`) VALUES
(1, 'sxdsd', 'sdsd', 'sd', 'sd'),
(2, 'askdg', 'fdkj', 'khgfsd', ''),
(3, 'nabeel', 'ahmednabeel147@gmail.com', '3422550698', ''),
(4, 'kishore', 'kkumar@gmail.com', '342874988', ''),
(5, 'kishore', 'kkumar@gmail.com', '342874988', ''),
(6, 'kishore', 'kkumar@gmail.com', '342874988', ''),
(7, 'kishore', 'kkumar@gmail.com', '342874988', ''),
(8, 'kishore', 'kkumar@gmail.com', '342874988', ''),
(9, 'kishore', 'kkumar@gmail.com', '342874988', ''),
(10, 'Muhammad Nabeel Ahmed', 'hhiqbal96@gmail.com', '3422550698', 'kukugdgf'),
(11, 'Muhammad Nabeel Ahmed', 'hhiqbal96@gmail.com', '3422550698', 'kukugdgf'),
(12, 'adeelnafees', 'dc', '3432564559', 'gsfd'),
(13, 'adeelnafees', 'dc', '3432564559', 'gsfd'),
(14, 'fsef', 'safa', 'safas', 'asfas'),
(15, 'fsef', 'safa', 'safas', 'asfas'),
(25, '', '', '', ''),
(26, 'da', 'ahmednabeel147@gmail.com', 'asd', 'df');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nk`
--
ALTER TABLE `nk`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nk`
--
ALTER TABLE `nk`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
