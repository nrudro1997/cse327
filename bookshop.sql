-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2019 at 05:00 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bid` varchar(255) NOT NULL,
  `bookname` varchar(255) NOT NULL,
  `catagory` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `image` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bid`, `bookname`, `catagory`, `author`, `image`) VALUES
('0001', 'Fundamental of Physics', 'science', 'Halliday & Resnick', ''),
('0002', 'Data Structure', 'engineering', 'Seymour Lispchutz', ''),
('0003', 'Introduction of Algorithim', 'enginnering', 'Ronald L. Rivest', ''),
('0004', 'ISC Phisics ', 'science', 'D.K.Banerjee', ''),
('0005', 'Supernatural Business', 'bba', 'Wez Hone', ''),
('0006', 'Medical Microbiology and Immunology', 'medical', 'Waren Jawetz', ''),
('0007', 'Robin Hood', 'story', 'Walt Disney', ''),
('0008', 'Fairey Tales', 'story', 'Unknown', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `comment` varchar(500) DEFAULT NULL,
  `sid` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `name`, `comment`, `sid`) VALUES
(2, 'Rudra Newaz', 'This is the boss comments once again\r\n\r\n', NULL),
(3, 'Shuvo', 'I am new here!\r\n\r\n', NULL),
(5, 'Bayazid Talukder', 'Hello! I am new here. Please \r\n', NULL),
(6, 'Evan', 'This website is very rude. I have found many adult content here.This website is very rude. I have found many adult content here.This website is very rude. I have found many adult content here.This website is very rude. I have found many adult content here.This website is very rude. I have found many adult content here.This website is very rude. I have found many adult content here.This website is very rude. I have found many adult content here.This website is very rude. I have found many adult c', NULL),
(7, 'Sarah', 'Today is very cool and I\'m very hot', NULL),
(11, 'Sarah Hossain', 'Nothing to say', NULL),
(12, 'huaweo', 'is bad', NULL),
(13, 'Shuvoda', 'I am a lady killer', NULL),
(14, 'Evan', 'I am a fuck boy', NULL),
(15, 'Aniket', 'I am cesra', NULL),
(16, '', '', NULL),
(17, '', '', NULL),
(18, 'Nam Nai', 'Ami ki kore boli tare', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `savelist`
--

CREATE TABLE `savelist` (
  `sid` int(11) NOT NULL,
  `bid` int(20) DEFAULT NULL,
  `uid` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `savelist`
--

INSERT INTO `savelist` (`sid`, `bid`, `uid`) VALUES
(38, 5, 224),
(39, 6, 224),
(40, 6, 224);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `upass` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mno` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `upass`, `address`, `mno`) VALUES
('001', 'zahid', 'yead', 'bashundhara', '01677'),
('gg', 'gfgf', 'gfg', 'gfgf', 'gfg'),
('11', 'Shuvoda', 'sexysexy', 'Uttara', '089786783'),
('', '', '', '', ''),
('224', 'ss', '1234', 'ffdg', '1234'),
('1722161', 'rn1997', '12345', 'mirpur', '01627737789'),
('17221616', 'rudra', '12345', 'Bashundara', '017388787878');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `savelist`
--
ALTER TABLE `savelist`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `savelist`
--
ALTER TABLE `savelist`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
