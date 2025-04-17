-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 17, 2025 at 10:39 AM
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
(1, 3, '275152855.jpeg', 'Neurologist', '03/09/2026', '18'),
(2, 4, '478789033.jpeg', 'oncologist', '03/19/2025', '20:09'),
(3, 7, '696381077.jpeg', 'ORTHO', '02/24/2026', '11:56'),
(4, 8, '968169231.jpeg', 'Anesthesiology', '03/09/2026', '03:06'),
(5, 1, '704259447.jpeg', 'gynaecology', '04/30/2025', '23:39'),
(6, 12, '1705808275.jpeg', 'Ophthalmologist', '04/30/2025', '01:05');

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
(2, 'admin@gmail.com', 'admin', 'admin'),
(3, 'anu@gmai.com', 'anu', 'Doctor/staff'),
(4, 'anupama@gmail.com', 'anupama', 'Doctor/staff'),
(5, 'ayaan@gmail.com', 'ayaan', 'Patient'),
(6, 'lamih@gmail.com', 'lamih', 'Patient'),
(7, 'jana@gmail.com', 'janna', 'Doctor/staff'),
(8, 'aman@gmail.com', 'aman', 'Doctor/staff'),
(9, 'jaseela@gmail.com', 'jaseela', 'Patient'),
(10, 'mubarak@gmail.com', 'mubarak', 'Patient'),
(11, 'rayan@gmail.com', 'rayan', 'Patient'),
(12, 'lamiya@gmail.com', 'lamiya', 'Doctor/staff');

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
(3, 21, 26, 'fever', 'medamol', 'revisit after 2 weeks', 8),
(5, 30, 33, 'fever', 'paracetamol', 'no need to revisit', 7),
(6, 18, 28, 'stomach pain', 'meftal', 'recommended scanning and revisit after 5 days', 7),
(8, 33, 27, 'leg pain', 'meftal', 'no need to revisit', 3),
(9, 27, 26, 'cough', 'eladi lehyam', 'no need to revisit', 3),
(10, 28, 33, 'block', 'euroso', 'consult a cardiologist', 3);

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
(18, 9, '04/30/2025', '12:06', '3', 'ORTHO', 'approved'),
(19, 6, '03/09/2025', '12:58', '1', 'Neurologist', 'pending'),
(20, 6, '04/14/2025', '13:58', '2', 'oncologist', 'pending'),
(21, 6, '04/29/2025', '03:01', '4', 'Anesthesiology', 'approved'),
(22, 5, '04/20/2025', '14:59', '3', 'ORTHO', 'approved'),
(23, 5, '04/13/2025', '04:03', '4', 'Anesthesiology', 'approved'),
(24, 5, '04/25/2025', '09:08', '2', 'oncologist', 'approved'),
(25, 9, '03/31/2025', '19:44', '1', 'Neurologist', 'pending'),
(26, 5, '04/27/2025', '15:16', '1', 'Neurologist', 'pending'),
(27, 6, '04/21/2025', '11:11', '1', 'Neurologist', 'approved'),
(28, 10, '04/28/2025', '19:52', '1', 'Neurologist', 'approved'),
(29, 10, '04/21/2025', '13:58', '4', 'Anesthesiology', 'pending'),
(30, 10, '03/19/2025', '00:59', '3', 'ORTHO', 'approved'),
(31, 10, '04/30/2025', '10:58', '2', 'oncologist', 'pending'),
(32, 11, '04/30/2025', '06:53', '5', 'gynaecology', 'approved'),
(33, 11, '04/20/2025', '12:55', '1', 'Neurologist', 'approved');

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
(2, 3, 'anusree', '9087678909', '2000-01-10'),
(4, 5, 'ayaan', '8765432345', '1991-08-20'),
(5, 6, 'lamih', '7865432345', '1998-08-09'),
(6, 7, 'janna', '4532456787', '1990-09-06'),
(7, 8, 'aman', '4532456787', '1997-03-02'),
(8, 9, 'jaseela', '4532456787', '1996-07-02'),
(9, 10, 'mubarak', '9089876767', '1991-11-20'),
(10, 11, 'rayan', '8798765456', '1997-06-17'),
(11, 12, 'lamiya', '7865432134', '1995-06-06');

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
(7, 'azra', 'azra@gmail.com', '678454545.jpeg', 'Very affordable service and good staffs');

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
  MODIFY `d_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `medical_report`
--
ALTER TABLE `medical_report`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `p_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `rid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `re_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
