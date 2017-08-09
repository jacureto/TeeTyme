-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 12, 2017 at 09:20 AM
-- Server version: 5.5.55-0+deb8u1
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gpcorser`
--

-- --------------------------------------------------------

--
-- Table structure for table `tt_courses`
--

CREATE TABLE IF NOT EXISTS `tt_courses` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `par01` int(11) NOT NULL,
  `par02` int(11) NOT NULL,
  `par03` int(11) NOT NULL,
  `par04` int(11) NOT NULL,
  `par05` int(11) NOT NULL,
  `par06` int(11) NOT NULL,
  `par07` int(11) NOT NULL,
  `par08` int(11) NOT NULL,
  `par09` int(11) NOT NULL,
  `par10` int(11) NOT NULL,
  `par11` int(11) NOT NULL,
  `par12` int(11) NOT NULL,
  `par13` int(11) NOT NULL,
  `par14` int(11) NOT NULL,
  `par15` int(11) NOT NULL,
  `par16` int(11) NOT NULL,
  `par17` int(11) NOT NULL,
  `par18` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tt_courses`
--
ALTER TABLE `tt_courses`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tt_courses`
--
ALTER TABLE `tt_courses`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
