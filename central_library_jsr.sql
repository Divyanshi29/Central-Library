-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2021 at 05:22 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Name`, `Email`, `Message`) VALUES
('', '', ''),
('Abhilasha Pathak', 'abhilashapathak999@gmail.com', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `pic` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gid`, `name`, `pic`) VALUES
(3, 'image', '26493SIGN.jpg'),
(4, 'image', '27666img.jpeg'),
(5, 'image', '12259WhatsApp Image 2021-05-18 at 11.11.51 AM.jpeg'),
(7, 'kaspil', '18154DSC_0022.JPG'),
(8, 'kaspil', '220261.png'),
(9, 'image', '11739update.png'),
(10, 'image', '29529MyTuning.png');

-- --------------------------------------------------------

--
-- Table structure for table `libraryteam`
--

CREATE TABLE `libraryteam` (
  `memberid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `teamtype` varchar(50) NOT NULL,
  `teampost` varchar(50) NOT NULL,
  `pic` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `libraryteam`
--

INSERT INTO `libraryteam` (`memberid`, `name`, `teamtype`, `teampost`, `pic`) VALUES
(5, 'Prof. R.N. Mohanty', 'Library Committee', 'Convener', '19059profile_mm.jpg'),
(4, 'Prof. A.M. Tigga', 'Library Committee', 'P/I Library,Chairman', '32567profile_mm.jpg'),
(6, 'Sri. N.K. Sethy', 'Library Committee', 'Convener', '7332profile_mm.jpg'),
(7, 'Prof. D.K. Yadav', 'Library Committee', 'Member', '27952profile_mm.jpg'),
(8, 'Dr. Akhliesh Kumar', 'Library Committee', 'Member', '23053profile_mm.jpg'),
(9, 'Dr. Dilip Kumar', 'Library Committee', 'Member', '19881profile_mm.jpg'),
(10, 'Sri. S.K. Prasad', 'Library Committee', 'Member', '32194profile_mm.jpg'),
(11, 'Dr. Neeta Bharti', 'Library Staffs', 'Assistant Librarian', '16174profile_f.jpg'),
(12, 'Mr. N.K. Sethy', 'Library Staffs', 'Assistant Librarian', '22483profile_mm.jpg'),
(13, 'Mr. Umesh Kumar', 'Library Staffs', 'Assistant Librarian', '6863profile_mm.jpg'),
(14, 'Mr. Ganesh Shrestha', 'Library Staffs', 'Typist Clerk', '24336profile_mm.jpg'),
(15, 'Mr. Ravi Mahato', 'Library Staffs', 'Typist Clerk', '11356profile_mm.jpg'),
(16, 'Mr. Saurabh Saini', 'Library Staffs', 'Typist Clerk', '2569profile_mm.jpg'),
(17, 'Mr. Rakesh Kumar', 'Library Staffs', 'Typist Clerk', '7013profile_mm.jpg'),
(18, 'Mrs. Sunaina Devi', 'Library Staffs', 'Typist Clerk', '13326profile_f.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `librarytime`
--

CREATE TABLE `librarytime` (
  `timeid` int(10) NOT NULL,
  `daytime` varchar(100) NOT NULL,
  `holidaytime` varchar(100) NOT NULL,
  `date` varchar(20) NOT NULL,
  `deleted` varchar(30) NOT NULL,
  `user` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `librarytime`
--

INSERT INTO `librarytime` (`timeid`, `daytime`, `holidaytime`, `date`, `deleted`, `user`) VALUES
(1, '08:00 AM - 10:00 PM', 'Closed due to COVID-19 Lockdown', '04-Jul-2021', '', '2019pgcaca02@nitjsr.ac.in');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `nid` int(11) NOT NULL,
  `news` varchar(200) NOT NULL,
  `nto` varchar(10) NOT NULL,
  `date` varchar(15) NOT NULL,
  `news_file` varchar(250) NOT NULL,
  `deleted` varchar(10) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`nid`, `news`, `nto`, `date`, `news_file`, `deleted`, `user_type`) VALUES
(17, 'New batch for PHP(Website Development) is now started from 2 June 2018 at 10:30AM(Daily). So for joining contact us soon.', 'YES', '01-Jun-2018', '31', 'Delete', ''),
(18, 'New batch(for engineering students) for Language C is started from 2nd June 18(Daily). So interested students can contact us for classes.', 'YES', '01-Jun-2018', '31', 'Delete', ''),
(19, 'New Batch(for Engineering students who are coming in summer vacation) for Java is started from 2nd June-18(Daily).Interested students can contact me.', 'YES', '01-Jun-2018', '31', 'Delete', ''),
(22, 'This Site was hacked for a will by some some. Plz ignore last mail. For any further info. contact to institute directly. Sorry for inconvenience.\r\n\r\nRegards\r\nBPC\r\n ', 'YES', '02-Sep-2018', '35', 'Delete', ''),
(23, 'hello this is mail', 'YES', '03-Sep-2018', '35', 'Delete', ''),
(24, '1dfghjkjbvbnm,mnbv', 'NO', '28-Jun-2021', '', '', 'kapil.kr09@gmail.com'),
(25, 'this is test news by kapil', 'YES', '28-Jun-2021', '0', '', 'kapil.kr09@gmail.com'),
(26, 'This is latest update', 'YES', '03-Jul-2021', '', '', 'admin'),
(27, 'This is latest update', 'YES', '03-Jul-2021', '', '', 'admin'),
(28, 'this is new for testing', 'YES', '03-Jul-2021', '', '', 'admin'),
(29, 'dfghjklnb  jhgfdxhj', 'YES', '03-Jul-2021', '', '', 'admin'),
(30, '5678 dfghjkl', 'YES', '03-Jul-2021', '0', '', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `otp_expiry`
--

CREATE TABLE `otp_expiry` (
  `otp` int(11) NOT NULL,
  `is_expired` int(11) NOT NULL,
  `create_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otp_expiry`
--

INSERT INTO `otp_expiry` (`otp`, `is_expired`, `create_at`) VALUES
(335425, 0, '2021-06-28'),
(368542, 0, '2021-06-28'),
(314289, 0, '2021-06-28'),
(704092, 0, '2021-06-29'),
(683132, 0, '2021-07-01'),
(270707, 0, '2021-07-01'),
(185394, 0, '2021-07-01'),
(832316, 0, '2021-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `UserId` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `MobileNo` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Confirmpassword` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Branch` varchar(255) NOT NULL,
  `Regno` varchar(20) DEFAULT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`UserId`, `Name`, `Email`, `MobileNo`, `Gender`, `Password`, `Confirmpassword`, `Type`, `Branch`, `Regno`, `image`) VALUES
(25, 'Abhilasha pathak', '2019pgcaca02@nitjsr.ac.in', '8577833696', 'F', '$2y$10$fbWE7KDVL85XiUFzmDspUO0T8BHjohNQZ5gpnlutbBIuCHqpihtJe', '$2y$10$fbWE7KDVL85XiUFzmDspUO0T8BHjohNQZ5gpnlutbBIuCHqpihtJe', 'student', 'Electronics and Communication Engineering', '2019pgcaca02', ''),
(26, 'Megha Agarwal', '2019pgcaca54@nitjsr.ac.in', '9073494780', 'F', '$2y$10$g0blkWQIySwSvQRzvxLRqODz.JlWIyyVikWY5gMdY/s38EwIxihwG', '$2y$10$g0blkWQIySwSvQRzvxLRqODz.JlWIyyVikWY5gMdY/s38EwIxihwG', 'student', 'Computer Applications', '2019pgcaca54', '');

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
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `libraryteam`
--
ALTER TABLE `libraryteam`
  ADD PRIMARY KEY (`memberid`);

--
-- Indexes for table `librarytime`
--
ALTER TABLE `librarytime`
  ADD PRIMARY KEY (`timeid`);

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
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `libraryteam`
--
ALTER TABLE `libraryteam`
  MODIFY `memberid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `librarytime`
--
ALTER TABLE `librarytime`
  MODIFY `timeid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `UserId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
