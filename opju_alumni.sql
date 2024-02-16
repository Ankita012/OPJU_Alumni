-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2018 at 12:13 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opju_alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `Name` varchar(100) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email_id` varchar(100) NOT NULL,
  `School` varchar(50) NOT NULL,
  `Course` varchar(20) NOT NULL,
  `Branch` varchar(20) NOT NULL,
  `Session` varchar(20) NOT NULL,
  `Mobile_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`Name`, `Password`, `Email_id`, `School`, `Course`, `Branch`, `Session`, `Mobile_number`) VALUES
('ankita kaushik', '987654321', 'ankita.kaushik62@gmail.com', 'Engineering', 'B.tech', 'CSE', '2015-19', '7389953936'),
('ABC', '987654321', 'pooja@gmail.com', 'Engineering', 'B.tech', 'CSE', '2015-19', '00000');

-- --------------------------------------------------------

--
-- Table structure for table `alumni_meet`
--

CREATE TABLE `alumni_meet` (
  `Name` varchar(100) NOT NULL,
  `Email_id` varchar(100) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Answer` varchar(20) NOT NULL,
  `Suggestion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni_meet`
--

INSERT INTO `alumni_meet` (`Name`, `Email_id`, `Type`, `Answer`, `Suggestion`) VALUES
('anki', 'ankita.kaushik012@gmail.com', 'teacher', 'Yes', 'nm,ns,mns,man,n,n,nmacnjlshalh'),
('ankita kaushik', 'ankita.kaushik62@gmail.com', 'student', 'Yes', 'no suggestion');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Name` varchar(300) NOT NULL,
  `Email_id` varchar(100) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `School` varchar(50) NOT NULL,
  `Course` varchar(20) NOT NULL,
  `Branch` varchar(20) NOT NULL,
  `Mobile_number` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Name`, `Email_id`, `Password`, `School`, `Course`, `Branch`, `Mobile_number`) VALUES
('admin', 'admin@gmail.com', '123456789', 'Engineering', 'B.tech', 'CSE', '98323214552'),
('ABC', 'ankita.kaushik012@gmail.com', '123456789', 'Engineering', 'B.tech', 'CSE', '00000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD UNIQUE KEY `Email_id` (`Email_id`);

--
-- Indexes for table `alumni_meet`
--
ALTER TABLE `alumni_meet`
  ADD UNIQUE KEY `Email_id` (`Email_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD UNIQUE KEY `Username` (`Email_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
