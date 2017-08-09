-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 12, 2017 at 09:22 AM
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
-- Table structure for table `tt_rounds`
--

CREATE TABLE IF NOT EXISTS `tt_rounds` (
  `id` int(11) DEFAULT NULL,
  `person_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `teedate` date NOT NULL,
  `teetime` time NOT NULL,
  `strokes01` int(11) NOT NULL,
  `strokes02` int(11) NOT NULL,
  `strokes03` int(11) NOT NULL,
  `strokes04` int(11) NOT NULL,
  `strokes05` int(11) NOT NULL,
  `strokes06` int(11) NOT NULL,
  `strokes07` int(11) NOT NULL,
  `strokes08` int(11) NOT NULL,
  `strokes09` int(11) NOT NULL,
  `strokes10` int(11) NOT NULL,
  `strokes11` int(11) NOT NULL,
  `strokes12` int(11) NOT NULL,
  `strokes13` int(11) NOT NULL,
  `strokes14` int(11) NOT NULL,
  `strokes15` int(11) NOT NULL,
  `strokes16` int(11) NOT NULL,
  `strokes17` int(11) NOT NULL,
  `strokes18` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tt_rounds`
--
ALTER TABLE `tt_rounds`
 ADD KEY `PR` (`person_id`), ADD KEY `CR` (`course_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tt_rounds`
--
ALTER TABLE `tt_rounds`
ADD CONSTRAINT `tt_rounds_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `tt_persons` (`id`),
ADD CONSTRAINT `tt_rounds_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `tt_courses` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
