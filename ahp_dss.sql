-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2020 at 10:41 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ahp_dss`
--

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `code_subkriteria` varchar(100) NOT NULL,
  `subkriteria` varchar(100) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `name`, `code_subkriteria`, `subkriteria`, `nilai`) VALUES
(1, 'school', '1', 'Gabriel Pereira', 1),
(2, 'school', '2', 'Mousinho da Silveira', 1),
(3, 'sex', '1', 'male', 5),
(4, 'sex', '2', 'female', 5),
(5, 'age', '1', '15-17 tahun', 1),
(6, 'age', '2', '18-20 tahun', 3),
(7, 'age', '3', '>20 tahun', 5),
(8, 'address', '1', 'urban', 1),
(9, 'address', '2', 'rural', 5),
(10, 'famsize', '1', 'Greater Than 3', 1),
(11, 'famsize', '2', 'Less or Equal to 3', 5),
(12, 'mjob', '1', 'teacher', 3),
(13, 'mjob', '2', 'health', 2),
(14, 'mjob', '3', 'service', 4),
(15, 'mjob', '4', 'at_home', 1),
(16, 'mjob', '5', 'other', 5),
(17, 'fjob', '1', 'teacher', 3),
(18, 'fjob', '2', 'health', 2),
(19, 'fjob', '3', 'services', 4),
(20, 'fjob', '4', 'at_home', 1),
(21, 'fjob', '5', 'other', 5),
(22, 'higher', '1', 'Yes', 5),
(23, 'higher', '2', 'No', 1),
(24, 'internet', '1', 'Yes', 5),
(25, 'internet', '2', 'No', 1),
(26, 'health', '1', '1', 3),
(27, 'health', '2', '2', 2),
(28, 'health', '3', '3', 4),
(29, 'health', '4', '4', 1),
(30, 'health', '5', '5', 5),
(31, 'absences', '1', '0-20 kali', 3),
(32, 'absences', '2', '20-40 kali', 2),
(33, 'absences', '3', '40-60 kali', 4),
(34, 'absences', '4', '60-80 kali', 5),
(35, 'absences', '5', '>80 kali', 1),
(36, 'grade', '1', '1-4', 3),
(37, 'grade', '2', '5-8', 2),
(38, 'grade', '3', '9-12', 4),
(39, 'grade', '4', '13-16', 5),
(40, 'grade', '5', '17-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `school` varchar(50) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `famsize` varchar(50) NOT NULL,
  `fjob` varchar(50) NOT NULL,
  `mjob` varchar(50) NOT NULL,
  `higher` varchar(20) NOT NULL,
  `internet` varchar(20) NOT NULL,
  `health` int(11) NOT NULL,
  `absences` int(11) NOT NULL,
  `g1` int(11) NOT NULL,
  `g2` int(11) NOT NULL,
  `g3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `school`, `sex`, `age`, `address`, `famsize`, `fjob`, `mjob`, `higher`, `internet`, `health`, `absences`, `g1`, `g2`, `g3`) VALUES
(7, 'Agustine Roseline', 'MS', 'F', 18, 'U', 'GT3', 'at_home', 'teacher', 'Yes', 'No', 5, 10, 15, 16, 14),
(8, 'Daniel Franslonda', 'GP', 'M', 19, 'U', 'GT3', 'teacher', 'teacher', 'Yes', 'No', 4, 12, 18, 16, 15),
(10, 'Sara Claresta', 'GP', 'F', 18, 'R', 'GT3', 'health', 'other', 'Yes', 'Yes', 5, 8, 12, 13, 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
