-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2022 at 09:56 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentcase`
--

CREATE TABLE `studentcase` (
  `no` int(20) NOT NULL,
  `fullname` text NOT NULL,
  `username` varchar(30) NOT NULL,
  `department` text NOT NULL,
  `title` varchar(40) NOT NULL,
  `cases` text NOT NULL,
  `response` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studentlist`
--

CREATE TABLE `studentlist` (
  `no` int(20) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `gender` char(10) NOT NULL,
  `department` text NOT NULL,
  `batch` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentlist`
--

INSERT INTO `studentlist` (`no`, `fullname`, `username`, `gender`, `department`, `batch`) VALUES
(139, 'almaz  desalegn', 'nsr/235/12', 'F', 'information technology', 2012),
(140, 'asrat  zewge', 'nsr/356/12', 'M', 'information technology', 2012),
(141, 'dagem gissila', 'nsr/689/12', 'M', 'information technology', 2012),
(142, 'marta   kefale', 'nsr/1560/12', 'F', 'information technology', 2012),
(143, 'awet  tajeb', 'nsr/369/12', 'M', 'information technology', 2012),
(144, 'alemu  mehari', 'nsr/223/12', 'M', 'information technology', 2012),
(145, 'bereket  cherinet', 'nsr/461/12', 'F', 'information technology', 2012),
(146, 'biruktawit tesfa', 'nsr/624/12', 'F', 'information technology', 2012),
(147, 'yisak abreham', 'nsr2548/12', 'M', 'computer science', 2012),
(148, 'samrawit tigistu', 'nsr2036/12', 'F', 'computer science', 2012),
(149, 'eden habtamu', 'nsr/822/12', 'F', 'computer science', 2012),
(150, 'tomas sefiw', 'nsr/2361/12', 'M', 'computer science', 2012),
(151, 'mulugeta yared', 'nsr/1803/12', 'M', 'computer science', 2012),
(152, 'yibeltal gashaw', 'nsr/2526/12', 'M', 'software engineering', 2012),
(153, 'liul abera', 'nsr/1513/12', 'M', 'software engineering', 2012),
(154, 'hawi kaba', 'nsr/1269/12', 'F', 'software engineering', 2012),
(155, 'elias chame', 'nsr/860/12', 'M', 'software engineering', 2012),
(156, 'hawa hinnaw', 'nsr/1263/12', 'F', 'software engineering', 2012),
(157, 'sisay  fikade', 'nsr/2171/12', 'M', 'software engineering', 2012);

-- --------------------------------------------------------

--
-- Table structure for table `studentlogin`
--

CREATE TABLE `studentlogin` (
  `id` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` text NOT NULL DEFAULT 'student',
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentlogin`
--

INSERT INTO `studentlogin` (`id`, `username`, `password`, `role`, `status`) VALUES
(80, 'dagem', '12345', 'admin', 0),
(83, 'nsr/235/12', '12345', 'student', 1),
(84, 'nsr/356/12', 'otpv8A', 'student', 0),
(85, 'nsr/689/12', '5lhB9q', 'student', 0),
(86, 'nsr/1560/12', 'KIeiuN', 'student', 0),
(87, 'nsr/369/12', 'SpFdjX', 'student', 0),
(88, 'nsr/223/12', 'A5PKNv', 'student', 0),
(89, 'nsr/461/12', 'KkIR7l', 'student', 0),
(90, 'nsr/624/12', 'E1imSt', 'student', 0),
(91, 'nsr2548/12', 'RPOh2D', 'student', 0),
(92, 'nsr2036/12', '9KjNCW', 'student', 0),
(93, 'nsr/822/12', 'tdyKDp', 'student', 0),
(94, 'nsr/2361/12', 'CAn5xe', 'student', 0),
(95, 'nsr/1803/12', 'xySC1F', 'student', 0),
(96, 'nsr/2526/12', 'ZTczYy', 'student', 0),
(97, 'nsr/1513/12', 'ERPs6f', 'student', 0),
(98, 'nsr/1269/12', 'MhquUW', 'student', 0),
(99, 'nsr/860/12', '29Jufb', 'student', 0),
(100, 'nsr/1263/12', '7SfK5t', 'student', 0),
(101, 'nsr/2171/12', 'Rkn9wE', 'student', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentcase`
--
ALTER TABLE `studentcase`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `studentlist`
--
ALTER TABLE `studentlist`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `studentlogin`
--
ALTER TABLE `studentlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentcase`
--
ALTER TABLE `studentcase`
  MODIFY `no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `studentlist`
--
ALTER TABLE `studentlist`
  MODIFY `no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `studentlogin`
--
ALTER TABLE `studentlogin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
