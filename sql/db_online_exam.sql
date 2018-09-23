-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 12, 2018 at 07:22 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_online_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `user_role` int(11) NOT NULL DEFAULT '0',
  `email` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `user_role`, `email`) VALUES
(1, 'admin', '1ac0cf019689e8731b54d7372b8b94b4', 0, 'mahedy150101@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_answer`
--

CREATE TABLE `tbl_answer` (
  `id` int(11) NOT NULL,
  `questionNo` int(11) NOT NULL,
  `rightAnswer` int(11) NOT NULL DEFAULT '0',
  `answer` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_answer`
--

INSERT INTO `tbl_answer` (`id`, `questionNo`, `rightAnswer`, `answer`) VALUES
(1, 1, 0, 'Chattogram'),
(2, 1, 1, 'Dhaka'),
(3, 1, 0, 'Rajshahi'),
(4, 1, 0, 'Pabna'),
(5, 2, 0, 'Calcutta'),
(6, 2, 0, 'Hydarabad'),
(7, 2, 1, 'Noya Delhi'),
(8, 2, 0, 'Chennai'),
(9, 3, 0, 'Buyensayars'),
(10, 3, 0, 'Lima'),
(11, 3, 0, 'Karakas'),
(12, 3, 1, 'Brasilia'),
(35, 4, 1, 'Berlin'),
(34, 4, 0, 'Munchen'),
(33, 4, 0, 'Schalke'),
(32, 4, 0, 'Dortmund');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question`
--

CREATE TABLE `tbl_question` (
  `id` int(11) NOT NULL,
  `questionNo` int(11) NOT NULL,
  `questionTitle` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_question`
--

INSERT INTO `tbl_question` (`id`, `questionNo`, `questionTitle`) VALUES
(1, 1, 'what is the capital of Bangladesh?'),
(2, 2, 'what is the capital of India?'),
(3, 3, 'what is the capital of Brazil?'),
(9, 4, 'what is the capital of Germany?');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` int(11) NOT NULL,
  `stud_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `stud_id`) VALUES
(1, 150101),
(2, 150102),
(3, 150103),
(4, 150104),
(5, 150107),
(6, 150108),
(7, 150110);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT '0',
  `student_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `username`, `email`, `password`, `flag`, `student_id`) VALUES
(1, 'deepa', 'deepa04', 'deepa04@gmail.com', '1ac0cf019689e8731b54d7372b8b94b4', 0, 150104),
(2, 'shaila', 'shaila02', 'shaila02@gmail.com', '1ac0cf019689e8731b54d7372b8b94b4', 0, 150102),
(3, 'monira', 'monira03', 'monira03@gmail.com', '1ac0cf019689e8731b54d7372b8b94b4', 0, 150103),
(4, 'eshan', 'eshan07', 'eshan07@gmail.com', '1ac0cf019689e8731b54d7372b8b94b4', 0, 150107),
(7, 'mahedy', 'mahedy01', 'mahedy01@gmail.com', '1ac0cf019689e8731b54d7372b8b94b4', 0, 150101),
(5, 'mizan', 'mizan07', 'mizan07@gmail.com', '1ac0cf019689e8731b54d7372b8b94b4', 1, 150150),
(6, 'mainur', 'mainur10', 'mainur10@gmail.com', '1ac0cf019689e8731b54d7372b8b94b4', 1, 150122);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_answer`
--
ALTER TABLE `tbl_answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_question`
--
ALTER TABLE `tbl_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_answer`
--
ALTER TABLE `tbl_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `tbl_question`
--
ALTER TABLE `tbl_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
