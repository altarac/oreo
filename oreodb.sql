-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 18, 2017 at 03:27 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `oreodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `type` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `options` varchar(255) NOT NULL,
  `solution` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`type`, `text`, `options`, `solution`, `id`) VALUES
('multiple choice', 'solve for x. $$2+x=4$$', '[1,2,3,4]', 2, 1),
('multiple choice', 'solve for x. $$3+x=5$$', '1,2,3,4', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `submittedAssignment`
--

CREATE TABLE `submittedAssignment` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `groupName` varchar(255) NOT NULL,
  `grade` int(11) NOT NULL,
  `attempts` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submittedAssignment`
--

INSERT INTO `submittedAssignment` (`id`, `fname`, `lname`, `groupName`, `grade`, `attempts`, `date`) VALUES
(1, '$fname', '$lname', 'demo', 0, 0, '0000-00-00 00:00:00'),
(2, 's', 's', 'demo', 100, 0, '0000-00-00 00:00:00'),
(3, 'sam', 'alt', 'demo', 100, 0, '0000-00-00 00:00:00'),
(4, 'sam', 'sam', 'demo', 50, 1, '0000-00-00 00:00:00'),
(5, 'sam2', 'sam2', 'demo', 100, 1, '2017-04-16 20:03:01'),
(6, '', '', '', 100, 1, '2017-04-17 00:24:37'),
(7, 'sam', 'altarac', 'demo', 100, 1, '2017-04-17 22:44:34'),
(8, 'sam', 'alt', 'demo', 100, 1, '2017-04-17 22:49:32'),
(9, 's', 'a', 'dem', 100, 1, '2017-04-17 22:51:02'),
(10, 's', 's', 's', 100, 1, '2017-04-18 00:17:25'),
(11, 'bob', 'bob', 'demo', 67, 1, '2017-04-18 00:47:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submittedAssignment`
--
ALTER TABLE `submittedAssignment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `submittedAssignment`
--
ALTER TABLE `submittedAssignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;