-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2017 at 10:06 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin`, `password`) VALUES
(1, 'admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `bookissue`
--

CREATE TABLE `bookissue` (
  `issue_no` varchar(20) NOT NULL,
  `book_no` varchar(255) NOT NULL,
  `student_roll` varchar(11) NOT NULL,
  `student_name` text NOT NULL,
  `date_of_issue` date NOT NULL,
  `last_date_of_submission` date NOT NULL,
  `submitted` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookissue`
--

INSERT INTO `bookissue` (`issue_no`, `book_no`, `student_roll`, `student_name`, `date_of_issue`, `last_date_of_submission`, `submitted`) VALUES
('1510S100000109', 'S1000001', '15101104009', 'jbwxsl', '2017-11-03', '2017-11-30', 'YES'),
('1610S100000115', 'S1000001', '16101104015', 'acdc', '2017-11-27', '2017-12-27', 'YES'),
('14101207', '12', '14101104007', 'jjf', '2017-11-15', '2017-12-14', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `booklist`
--

CREATE TABLE `booklist` (
  `book_no` varchar(255) NOT NULL,
  `book_name` text NOT NULL,
  `isbn` varchar(255) NOT NULL,
  `category` text NOT NULL,
  `author` text NOT NULL,
  `publisher` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booklist`
--

INSERT INTO `booklist` (`book_no`, `book_name`, `isbn`, `category`, `author`, `publisher`) VALUES
('S1000001', 'C Programming', '123-1-2--1', 'Programming', 'Dennis M.Ritchie', 'Pearson'),
('12', 'SK', '6466', 'BJG', 'KLJL', 'HHK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bookissue`
--
ALTER TABLE `bookissue`
  ADD PRIMARY KEY (`issue_no`);

--
-- Indexes for table `booklist`
--
ALTER TABLE `booklist`
  ADD UNIQUE KEY `book_no` (`book_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
