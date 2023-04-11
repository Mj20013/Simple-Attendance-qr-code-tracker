-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2023 at 02:16 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbregister`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `tblattendance`
--

CREATE TABLE `tblattendance` (
  `id` int(11) NOT NULL,
  `fullName` varchar(250) NOT NULL,
  `studentID` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `yearLevel` varchar(250) NOT NULL,
  `TimeIn` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblattendance`
--

INSERT INTO `tblattendance` (`id`, `fullName`, `studentID`, `course`, `yearLevel`, `TimeIn`) VALUES
(9, 'Kizziah Tajor', '522166', 'BSIT', '2nd Year', '2023-02-09 01:31:17'),
(10, 'asd', '4', 'BSIT', 'dadad', '2023-02-09 01:32:23'),
(11, 'Corey Taylor', '02-2223-42125', 'BSMetal', '2nd Year', '2023-02-09 06:16:24'),
(12, 'Christina Matsouka', '03-2223-51552', 'BSDOTA', '2nd Year', '2023-02-09 06:18:19'),
(13, 'Christina Matsouka', '03-2223-95125', 'BSIT', '2nd Year Level', '2023-02-09 06:18:32'),
(14, 'Christina Matsouka', '03-2223-51552', 'BSDOTA', '2nd Year', '2023-02-09 06:18:58'),
(15, 'Christina Matsouka', '03-2223-95125', 'BSIT', '2nd Year Level', '2023-02-09 06:19:07'),
(16, 'Putri Dahlia', '03-2223-421511', 'BSSingerist', '2nd Year', '2023-02-09 06:19:16');

-- --------------------------------------------------------

--
-- Table structure for table `tblregister`
--

CREATE TABLE `tblregister` (
  `id` int(11) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `studentID` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `yearLevel` varchar(50) NOT NULL,
  `qr_image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblregister`
--

INSERT INTO `tblregister` (`id`, `fullName`, `studentID`, `course`, `yearLevel`, `qr_image`) VALUES
(14, 'Christina Matsouka', '03-2223-51552', 'BSDOTA', '2nd Year', 0x71725f636f6465732f30332d323232332d35313535322e706e67),
(15, 'Putri Dahlia', '03-2223-421511', 'BSSingerist', '2nd Year', 0x71725f636f6465732f30332d323232332d3432313531312e706e67),
(16, 'The Weekend', '2151222', 'dasdasd', 'asdasda', 0x71725f636f6465732f323135313232322e706e67),
(17, 'Kizziah Tajor', '522166', 'BSIT', '2nd Year', 0x71725f636f6465732f3532323136362e706e67),
(18, 'Corey Taylor', '02-2223-42125', 'BSMetal', '2nd Year', 0x71725f636f6465732f30322d323232332d34323132352e706e67);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblattendance`
--
ALTER TABLE `tblattendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblregister`
--
ALTER TABLE `tblregister`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblattendance`
--
ALTER TABLE `tblattendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tblregister`
--
ALTER TABLE `tblregister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;