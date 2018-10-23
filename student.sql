-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2018 at 04:07 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'son@son.co', 'sonu'),
(10, 'sonu@gmail.com', 'sonu'),
(11, 'ka@ka.com', 'karan'),
(12, 'abc@abc.com', 'abcd'),
(13, 'abc@abc.com', 'abdef'),
(14, 'jbxjs@hxgha.co', 'xjbk'),
(15, '', ''),
(16, 'ksmdksm@c.cc', 'sjbhsb'),
(17, '', ''),
(18, '', ''),
(19, 'shdsjks@hagxj.com', 'amren'),
(20, 'shdsjks@hagxj.com', 'amren'),
(21, '', ''),
(22, '', ''),
(23, '', ''),
(24, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `name`, `fname`, `email`, `gender`, `password`) VALUES
(1, 'Amren', 'xyz', 'amren@amren.co', 'm', 'amren'),
(2, 'sonu', 'ja', 'sonu@gmail.com', 'on', 'sonu'),
(3, 'karan', 'abcde', 'ka@ka.com', 'on', 'karan'),
(4, 'Amre', 'hhsgdjks', 'abc@abc.com', 'on', 'abcd'),
(5, 'Amre', 'hhsgdjks', 'abc@abc.com', 'on', 'abdef'),
(6, 'hgila', 'jugkaxj', 'jbxjs@hxgha.co', 'on', 'xjbk'),
(7, '', '', '', '', ''),
(8, 'skmx', 'ksms', 'ksmdksm@c.cc', 'on', 'sjbhsb'),
(9, '', '', '', '', ''),
(10, '', '', '', '', ''),
(11, 'snbcjsn', 'sbcjsn', 'shdsjks@hagxj.com', 'on', 'amren'),
(12, 'snbcjsn', 'sbcjsn', 'shdsjks@hagxj.com', 'on', 'amren'),
(13, '', '', '', '', ''),
(14, '', '', '', '', ''),
(15, '', '', '', '', ''),
(16, '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
