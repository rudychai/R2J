-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2017 at 05:49 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emergency_kit`
--

-- --------------------------------------------------------

--
-- Table structure for table `call_ambulans`
--

CREATE TABLE `call_ambulans` (
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `situation` text NOT NULL,
  `moredetail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `call_ambulans`
--

INSERT INTO `call_ambulans` (`name`, `address`, `phonenumber`, `situation`, `moredetail`) VALUES
('a', 'a', 'a', 'a', 'aaaa');

-- --------------------------------------------------------

--
-- Table structure for table `call_firefighter`
--

CREATE TABLE `call_firefighter` (
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `situation` text NOT NULL,
  `moredetail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `call_firefighter`
--

INSERT INTO `call_firefighter` (`name`, `address`, `phonenumber`, `situation`, `moredetail`) VALUES
('c', 'c', 'c', 'c', 'ccc');

-- --------------------------------------------------------

--
-- Table structure for table `call_police`
--

CREATE TABLE `call_police` (
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `situation` text NOT NULL,
  `moredetail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `call_police`
--

INSERT INTO `call_police` (`name`, `address`, `phonenumber`, `situation`, `moredetail`) VALUES
('a', 'a', 'a', 'a', 'aaaa'),
('b', 'b', 'b', 'b', 'bbb'),
('a', 'a', 'a', 'a', 'aaabbbccc'),
('c', 'c', 'c', 'c', 'asdfg'),
('oba', 'q', 'q', 'q', 'qqqqqq');

-- --------------------------------------------------------

--
-- Table structure for table `user_regis`
--

CREATE TABLE `user_regis` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `con_password` varchar(50) NOT NULL,
  `level` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_regis`
--

INSERT INTO `user_regis` (`firstname`, `lastname`, `username`, `email`, `address`, `password`, `con_password`, `level`) VALUES
('Edward', 'Surya', 'Edward01', 'edw@gmail.com', '', 'qwerty', 'qwerty', 0),
('', '', 'Eric', 'ealexander@gmail.com', '', '12345', '12345', 1),
('Morris', 'Tokido', 'morris01', 'morris@gmail.com', 'Jln. Asia No.18b', 'qwerty', 'qwerty', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_regis`
--
ALTER TABLE `user_regis`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
