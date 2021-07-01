-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 04:30 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `central_library_jsr`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `nid` int(11) NOT NULL,
  `news` varchar(200) NOT NULL,
  `nto` varchar(10) NOT NULL,
  `date` varchar(15) NOT NULL,
  `ncount` varchar(5) NOT NULL,
  `deleted` varchar(10) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`nid`, `news`, `nto`, `date`, `ncount`, `deleted`, `user_type`) VALUES
(17, 'New batch for PHP(Website Development) is now started from 2 June 2018 at 10:30AM(Daily). So for joining contact us soon.', 'YES', '01-Jun-2018', '31', '', ''),
(18, 'New batch(for engineering students) for Language C is started from 2nd June 18(Daily). So interested students can contact us for classes.', 'YES', '01-Jun-2018', '31', '', ''),
(19, 'New Batch(for Engineering students who are coming in summer vacation) for Java is started from 2nd June-18(Daily).Interested students can contact me.', 'YES', '01-Jun-2018', '31', '', ''),
(22, 'This Site was hacked for a will by some some. Plz ignore last mail. For any further info. contact to institute directly. Sorry for inconvenience.\r\n\r\nRegards\r\nBPC\r\n ', 'YES', '02-Sep-2018', '35', '', ''),
(23, 'hello this is mail', 'YES', '03-Sep-2018', '35', 'Delete', ''),
(24, '1dfghjkjbvbnm,mnbv', 'NO', '28-Jun-2021', '', '', 'kapil.kr09@gmail.com'),
(25, 'this is test news by kapil', 'YES', '28-Jun-2021', '0', '', 'kapil.kr09@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `otp_expiry`
--

CREATE TABLE `otp_expiry` (
  `otp` int(11) NOT NULL,
  `is_expired` int(11) NOT NULL,
  `create_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otp_expiry`
--

INSERT INTO `otp_expiry` (`otp`, `is_expired`, `create_at`) VALUES
(335425, 0, '2021-06-28'),
(368542, 0, '2021-06-28'),
(314289, 0, '2021-06-28'),
(704092, 0, '2021-06-29');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `UserId` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Confirmpassword` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Branch` varchar(255) NOT NULL,
  `Regno` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`UserId`, `Name`, `Email`, `Password`, `Confirmpassword`, `Type`, `Branch`, `Regno`) VALUES
(25, 'Abhilasha pathak', '2019pgcaca02@nitjsr.ac.in', '$2y$10$fbWE7KDVL85XiUFzmDspUO0T8BHjohNQZ5gpnlutbBIuCHqpihtJe', '$2y$10$fbWE7KDVL85XiUFzmDspUO0T8BHjohNQZ5gpnlutbBIuCHqpihtJe', 'student', 'Computer Applications', '2019pgcaca02'),
(26, 'Megha Agarwal', '2019pgcaca54@nitjsr.ac.in', '$2y$10$g0blkWQIySwSvQRzvxLRqODz.JlWIyyVikWY5gMdY/s38EwIxihwG', '$2y$10$g0blkWQIySwSvQRzvxLRqODz.JlWIyyVikWY5gMdY/s38EwIxihwG', 'student', 'Computer Applications', '2019pgcaca54');

-- --------------------------------------------------------

--
-- Table structure for table `visiter`
--

CREATE TABLE `visiter` (
  `vid` varchar(10) NOT NULL,
  `vcount` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visiter`
--

INSERT INTO `visiter` (`vid`, `vcount`) VALUES
('1', 120);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `visiter`
--
ALTER TABLE `visiter`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `UserId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
