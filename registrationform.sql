-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2019 at 03:35 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registrationform`
--

-- --------------------------------------------------------

--
-- Table structure for table `cont`
--

CREATE TABLE `cont` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `country` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cont`
--

INSERT INTO `cont` (`fname`, `lname`, `country`, `subject`) VALUES
('JAHIR', 'HASAN', 'BANGLADESH', 'I NEW HERE'),
('sagor', 'ahamed', 'BANGLADESH', 'lots of problem'),
('johir', 'rayhan', 'BANGLADESH', 'i cant post my job experience here ');

-- --------------------------------------------------------

--
-- Table structure for table `cont1`
--

CREATE TABLE `cont1` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cont1`
--

INSERT INTO `cont1` (`fname`, `lname`, `email`, `country`, `subject`) VALUES
('shownak ', 'khan', 'sayemshownak@gmail.com', 'BANGLADESH', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `ins` varchar(100) NOT NULL,
  `CGPA` float NOT NULL,
  `year` int(4) NOT NULL,
  `birth` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`fname`, `mname`, `lname`, `address`, `gender`, `phone`, `skill`, `ins`, `CGPA`, `year`, `birth`, `email`, `username`, `password`) VALUES
('ASIF', 'HIDER', 'ALOM', 'CTG', 'female', 2147483647, 'C++,PHP,JAVA', 'IIUC', 3.9, 2015, '20/12/1994', 'hmuntasirul@yahoo.com', 'ASIF', 'GUGmVsVdbZAeVse6xw)*'),
('SHOWNAK ', 'DAS ', 'GUPTA', 'GONGA BARI', 'male', 1727882869, 'C,C++,PHP,JavA', 'BRAC', 4, 2020, '20/5/1996', 'shownakdip20@gmail.com', 'shownak ', 'dip'),
('vfhfh', 'hfhfh', 'hfh', 'fhfh', 'female', 0, 'hfdh', 'hdfhh', 0, 0, 'fhfh', 'hfh', 'hfdh', 'hfh'),
('Maisha ', 'Hasan', 'Shumi', 'ctg', 'female', 1815636953, 'c', 'AIUB', 3.6, 2016, '10.03.16', 'shumi@gmail.com', 'maisha', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `newpost`
--

CREATE TABLE `newpost` (
  `checkbox` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `time` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `des` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newpost`
--

INSERT INTO `newpost` (`checkbox`, `fname`, `cname`, `time`, `location`, `des`) VALUES
('40000', 'SOFTWARE ENGINEER', 'KSRM', 'Full Time', 'CTG', 'GOOD'),
('40000', 'fhdfh', 'hfhf', 'Part Time', 'fhfdh', 'hfh'),
('40000', 'dfdf', 'facebokk', 'Full Time', 'syley', 'fsf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
