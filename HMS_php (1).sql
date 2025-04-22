-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 22, 2025 at 08:18 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `HMS_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `contact_message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `name`, `email`, `phone`, `contact_message`) VALUES
(2, 'fareeda', 'fareeda@gmail.com', '8765432345', 'provide better service'),
(3, 'anupama', 'anupama@gmail.com', '7865432345', 'make sure better service\r\n'),
(4, 'anupama', 'anupama@gmail.com', '4532456787', 'very good service'),
(5, 'vaheeda', 'vaheedabsheer786@gmail.com', '8765432345', 'hlo\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `d_id` int(100) NOT NULL,
  `id` int(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`d_id`, `id`, `photo`, `department`, `date`, `time`) VALUES
(1, 6, '1950755760.jpeg', 'Neurologist', '03/09/2025', '12:00'),
(2, 5, '1692590107.jpeg', 'ORTHO', '03/12/2025', '01:20'),
(3, 4, '2073009529.jpeg', 'Anesthesiology', '03/12/2025', '03:35'),
(4, 2, '631404259.jpeg', 'Dermatology', '04/30/2025', '17:38'),
(5, 9, '1831876322.jpeg', 'Neurologist', '01/22/2025', '17:43');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `user_role`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin'),
(2, 'fareeda@gmail.com', 'fareeda', 'Doctor/staff'),
(3, 'anu@gmai.com', 'anu', 'Patient'),
(4, 'jana@gmail.com', 'jana', 'Doctor/staff'),
(5, 'ayaan@gmail.com', 'ayaan', 'Doctor/staff'),
(6, 'lamih@gmail.com', 'lamih', 'Doctor/staff'),
(7, 'jamal@gmail.com', 'jamal', 'Patient'),
(8, 'jaseela@gmail.com', 'jaseela', 'Patient'),
(9, 'anupama@gmail.com', 'anupama', 'Doctor/staff');

-- --------------------------------------------------------

--
-- Table structure for table `medical_report`
--

CREATE TABLE `medical_report` (
  `m_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `disease` varchar(100) NOT NULL,
  `medicines` varchar(100) NOT NULL,
  `reference` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medical_report`
--

INSERT INTO `medical_report` (`m_id`, `p_id`, `age`, `disease`, `medicines`, `reference`, `id`) VALUES
(1, 9, 30, 'fever', 'paracetamol', 'revisit after 7 days', 9);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `p_id` int(100) NOT NULL,
  `id` int(100) NOT NULL,
  `p_date` varchar(100) NOT NULL,
  `p_time` varchar(100) NOT NULL,
  `doctor` varchar(100) NOT NULL,
  `p_department` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `id`, `p_date`, `p_time`, `doctor`, `p_department`, `status`) VALUES
(4, 7, '01/11/2025', '00:23', '2', 'ORTHO', 'pending'),
(6, 3, '04/30/2025', '04:40', '3', 'Anesthesiology', 'pending'),
(7, 3, '03/27/2025', '23:35', '4', 'Dermatology', 'pending'),
(8, 3, '04/29/2025', '23:35', '2', 'ORTHO', 'pending'),
(9, 8, '03/19/2025', '23:38', '5', 'Neurologist', 'approved'),
(10, 8, '04/28/2025', '01:40', '1', 'Neurologist', 'pending'),
(11, 8, '04/30/2025', '04:44', '4', 'Dermatology', 'pending'),
(12, 8, '04/29/2026', '17:44', '3', 'Anesthesiology', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `rid` int(100) NOT NULL,
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`rid`, `id`, `name`, `phone`, `dob`) VALUES
(1, 2, 'fareeda', '8798765456', '1990-01-03'),
(2, 3, 'anu', '9087678909', '2011-06-07'),
(3, 4, 'janna', '4532456787', '1997-10-21'),
(4, 5, 'ayaan', '9088777609', '1991-12-12'),
(5, 6, 'lamih', '8789098767', '1987-01-27'),
(6, 7, 'jamal', '8765432345', '2003-02-18'),
(7, 8, 'jaseela', '9087678909', '1994-12-16'),
(8, 9, 'anupama', '8765432345', '2025-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `re_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`re_id`, `name`, `email`, `photo`, `message`) VALUES
(1, 'jamal', 'jamal@gmail.com', '782316910.jpeg', 'very advanced hospital with the technology and also doctors….they take care of patients verygood…the entire staff reciveing and treating of the patients is very excellent…'),
(2, 'anupama', 'anupama@gmail.com', '1844676602.jpeg', 'One of the best hospital in South India for Kidney treatment. Urology and Nephrology departments are collectively excellent. Dr. mallikarjuna and Dr. P.C.Reddy are excellent doctors'),
(3, 'roshni', 'dd@gmail.com', '1064767835.jpeg', 'I am very happy that I came to this institution for my problem and extremely greatful to Dr. Mallikarjuna, Dr. Reddy, Dr. Ghouse and all the other doctors, Mrs. Rajya Laxmi, the nursing staff and others for taking great care of'),
(4, 'Salum Hamadi', 'salma@gmail.com', '239313580.jpeg', 'very advanced hospital with the technology and also doctors….they take care of patients verygood…the entire staff reciveing and treating of the patients is very excellent…try to open these kind of branches in near other'),
(5, 'Madhavi', 'maya@gmail.com', '2105514950.jpeg', 'very advanced hospital with the technology and also doctors….they take care of patients verygood…the entire staff reciveing and treating of the patients is very excellent…'),
(7, 'azra', 'azra@gmail.com', '678454545.jpeg', 'Very affordable service and good staffs'),
(8, 'zuba', 'zuba@gmail.com', '1510092291.png', 'good service and staffs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_report`
--
ALTER TABLE `medical_report`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`re_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `d_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `medical_report`
--
ALTER TABLE `medical_report`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `p_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `rid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `re_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
