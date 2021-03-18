-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 07:14 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `cno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `cdt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`cno`, `name`, `email`, `phone`, `msg`, `cdt`) VALUES
(1, 'Anu', 'anu@gmail.com', '9846546484', 'gdgf', '08-11-20 07:46:15'),
(2, 'aro', 'aro@gmail.com', '9846546484', 'ffdgfbgf', '10-11-20 07:56:35'),
(4, 'aro', 'aro@gmail.com', '9846546484', 'ggg', '12-01-21 09:32:47'),
(5, 'ashu', 'ashu@gmail.com', '9846546484', 'vxcvcbv', '12-01-21 09:33:34'),
(6, 'Anurag', 'teachers@gmail.com', '0984 654 6484', 'gfg', '12-01-21 09:34:59'),
(7, 'ashu', 'ashu@gmail.com', '9846546484', ' vbvbn', '12-01-21 09:35:40'),
(8, 'Shiv Singh', 'shiv@gmail.com', '9846546484', 'gfcgcfgf', '12-01-21 09:36:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faculty`
--

CREATE TABLE `tbl_faculty` (
  `fid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `ipic` longblob NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_faculty`
--

INSERT INTO `tbl_faculty` (`fid`, `name`, `qualification`, `subject`, `experience`, `contact`, `ipic`, `date`) VALUES
(2, 'AnurG', 'btech', 'math', '10 year', '6767856', 0x32375f6f726967696e616c5f3139323078313230302e6a7067, '09-11-20 10:50:16'),
(7, 'Shiv Singh', 'btech', 'math', '10 year', '6767856', 0x32303230303331335f3139313930312e6a7067, '19-11-20 03:56:03'),
(8, 'Shivi', 'btech', 'math', '1 year', '6767856', 0x32303230303630315f3138353234322e6a7067, '19-11-20 03:56:37'),
(9, 'ashu', 'btech', 'math', '10 year', '6767856', 0x32303230303730355f3132333334332e6a7067, '23-11-20 03:06:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `fno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rating` varchar(50) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `fdt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`fno`, `name`, `email`, `rating`, `feedback`, `fdt`) VALUES
(1, 'Anu', 'anu@gmail.com', '4', 'Very Great Work', '08-11-20 09:08:22'),
(2, 'Anurag', 'anurag@gmail.com', '4', 'great work bro...', '09-11-20 07:57:57'),
(3, 'Anurag', 'anurag@gmail.com', '4', 'cdsvfdvb', '09-11-20 08:13:30'),
(5, 'Shiv Singh', 'shiv@gmail.com', '4', 'fvf', '13-01-21 09:42:57'),
(6, 'ashu', 'ashu@gmail.com', '1', 'pooor', '13-01-21 09:43:20'),
(7, 'Anu', 'anu@gmail.com', '2', 'not bad', '13-01-21 09:43:39'),
(8, 'pihu', 'anu@gmail.com', '4', 'good work buddy', '13-01-21 09:44:14'),
(9, 'siri', 'sanurag@gmail.com', '4', 'itt', '13-01-21 09:45:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `pno` int(11) NOT NULL,
  `Image` longblob NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `lno` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'user',
  `ldt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`lno`, `email`, `password`, `type`, `ldt`) VALUES
(8, 'admin@gmail.com', '1', 'admin', '08-11-20 06:31:21'),
(9, 'teacher@gmail.com', '1', 'student', '08-11-20 06:50:04'),
(10, 'shiv@gmail.com', '1', 'student', '10-11-20 08:06:36'),
(11, 'anurag@gmail.com', '3', 'teacher', '10-11-20 08:07:24'),
(13, 'ashu@gmail.com', 'q', 'student', '10-11-20 05:06:43');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students`
--

CREATE TABLE `tbl_students` (
  `rid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `board` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `rdt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_students`
--

INSERT INTO `tbl_students` (`rid`, `name`, `dob`, `email`, `password`, `mobile`, `class`, `board`, `subject`, `address`, `rdt`) VALUES
(6, 'Anurag', '2020-11-27', 'teacher@gmail.com', '1', '9846546484', 'btech', 'I.C.S.C.', 'Physics', 'KUSHINAGAR', '08-11-20 06:50:04'),
(8, 'ashu', '2020-11-18', 'ashu@gmail.com', 'q', '9846546484', '12', 'I.C.S.C.', 'Computer', 'BANARAHA PASCHIM PATTI SEORAHI KUSHINAGAR', '10-11-20 05:06:43');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teachers`
--

CREATE TABLE `tbl_teachers` (
  `tno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `rdt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_teachers`
--

INSERT INTO `tbl_teachers` (`tno`, `name`, `dob`, `email`, `password`, `mobile`, `qualification`, `experience`, `city`, `state`, `pincode`, `address`, `rdt`) VALUES
(1, 'Shiv Singh', '2020-12-03', 'shiv@gmail.com', '1', '9846546484', 'btech', '0', 'Kushinagar (Padrauna)', 'Uttar Pradesh', '274406', 'BANARAHA PASCHIM PATTI SEORAHI KUSHINAGAR', '10-11-20 08:06:36'),
(2, 'Anurag', '2020-11-25', 'anurag@gmail.com', '1', '9846546484', 'btech', '1 year', 'Kushinagar (Padrauna)', 'Uttar Pradesh', '274406', 'BANARAHA PASCHIM PATTI SEORAHI KUSHINAGAR', '10-11-20 08:07:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`cno`);

--
-- Indexes for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`fno`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`pno`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`lno`);

--
-- Indexes for table `tbl_students`
--
ALTER TABLE `tbl_students`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `tbl_teachers`
--
ALTER TABLE `tbl_teachers`
  ADD PRIMARY KEY (`tno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `cno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `fno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `pno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `lno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_students`
--
ALTER TABLE `tbl_students`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_teachers`
--
ALTER TABLE `tbl_teachers`
  MODIFY `tno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
