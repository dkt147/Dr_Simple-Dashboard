-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2022 at 04:01 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dr_simple`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `number` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `number`, `password`, `date`) VALUES
(1, '123456789', '123', '02-02-2022');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `type` varchar(200) DEFAULT NULL,
  `u_id` int(11) DEFAULT NULL,
  `d_id` int(11) DEFAULT NULL,
  `reason` varchar(200) DEFAULT NULL,
  `is_completed` int(11) DEFAULT 0,
  `is_confirm` int(11) DEFAULT 0,
  `is_failed` int(11) DEFAULT NULL,
  `is_star` int(11) DEFAULT 0,
  `book_date` varchar(200) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL,
  `updated_at` varchar(200) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `type`, `u_id`, `d_id`, `reason`, `is_completed`, `is_confirm`, `is_failed`, `is_star`, `book_date`, `date`, `updated_at`) VALUES
(3, 'covid', 123456789, 1, 'Regular checkup', 0, 0, 0, 0, '2022-02-22', '20-20-2022', NULL),
(6, 'regular', 123456789, 1, 'Regular checkup', 0, 0, 0, 0, '2022-02-22', '2022-02-22', '0'),
(7, 'consult', 123456789, 1, 'tset', 0, 0, 0, 0, '2022-02-22', '2022-02-22', '0');

-- --------------------------------------------------------

--
-- Table structure for table `broadcast_history`
--

CREATE TABLE `broadcast_history` (
  `id` int(11) NOT NULL,
  `broadcast_id` varchar(200) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `broadcast_history`
--

INSERT INTO `broadcast_history` (`id`, `broadcast_id`, `user_id`, `created_at`) VALUES
(18, '55', 400, '2022-07-07 09:56:27'),
(19, '61', 460, '2022-07-07 09:57:22'),
(23, '61', 2, '2022-07-07 11:11:17'),
(24, '61', 46, '2022-07-07 11:27:25');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `detail` varchar(200) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `detail`, `date`) VALUES
(1, 'test', 'asdasdas', '02-02-2022');

-- --------------------------------------------------------

--
-- Table structure for table `consult`
--

CREATE TABLE `consult` (
  `id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `reason` varchar(200) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consult`
--

INSERT INTO `consult` (`id`, `u_id`, `reason`, `date`) VALUES
(1, 123456789, 'Regular checkup', '20-20-2022');

-- --------------------------------------------------------

--
-- Table structure for table `covid`
--

CREATE TABLE `covid` (
  `id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `book_date` varchar(200) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covid`
--

INSERT INTO `covid` (`id`, `u_id`, `book_date`, `date`) VALUES
(1, 123456789, '25-07-2022', '25-06-2022');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `qualification` varchar(200) DEFAULT NULL,
  `spec1` varchar(200) DEFAULT NULL,
  `spec2` varchar(200) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `qualification`, `spec1`, `spec2`, `date`) VALUES
(1, 'mashood', 'pHD', 'Eye specialist', 'Child specialist', '20-20-2022');

-- --------------------------------------------------------

--
-- Table structure for table `notification_history`
--

CREATE TABLE `notification_history` (
  `id` int(11) NOT NULL,
  `type` varchar(200) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` varchar(200) DEFAULT '10',
  `created_at` varchar(200) DEFAULT NULL,
  `updated_at` varchar(200) DEFAULT NULL,
  `is_seen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification_history`
--

INSERT INTO `notification_history` (`id`, `type`, `message`, `user_id`, `status`, `created_at`, `updated_at`, `is_seen`) VALUES
(69, 'regular', 'asdasda', 123456789, '10', NULL, NULL, 0),
(70, 'regular', 'again', 123456789, '10', '2022-07-07', NULL, 0),
(71, 'regular', '2nd testing is on the way', 0, '10', '2022-07-07', NULL, 0),
(72, 'regular', '2nd testing is on the way', 0, '10', '2022-07-07', NULL, 0),
(73, 'general', 'asdasda', NULL, '10', '2022-07-16', NULL, 1),
(74, 'general', 'sadasdasdasdasda', NULL, '10', '2022-07-12', NULL, 1),
(78, 'regular', 'hello buddies testing chat', 1235, '10', '2022-07-09', NULL, 0),
(79, 'regular', 'hello buddies testing chat', 123546, '10', '2022-07-09', NULL, 0),
(80, 'general', 'broadcast generate', NULL, '10', '2022-07-09', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `r_id` int(11) DEFAULT NULL,
  `power` varchar(200) DEFAULT NULL,
  `is_confirm` int(11) DEFAULT 0,
  `is_completed` int(11) DEFAULT 0,
  `is_failed` int(11) DEFAULT NULL,
  `is_star` int(11) NOT NULL DEFAULT 0,
  `date` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `u_id`, `r_id`, `power`, `is_confirm`, `is_completed`, `is_failed`, `is_star`, `date`) VALUES
(4, 123456789, 1, '15', 0, 0, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `number` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `dob` varchar(200) DEFAULT NULL,
  `is_active` int(11) DEFAULT 0,
  `is_block` int(11) DEFAULT 0,
  `date` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `number`, `password`, `dob`, `is_active`, `is_block`, `date`) VALUES
(1, 'daniyal', '123456789', '123', '02-20-1999', 1, 0, '20-20-2020'),
(2, 'tabish', '1235', '123', '20-12-1998', 1, 0, '20-20-2020'),
(3, 'saad', '123546', '123', '20-12-2022', 1, 0, '20-20-2020');

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `power` varchar(200) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`id`, `name`, `power`, `date`) VALUES
(1, 'brufien', '10 mg', '02-02-2022'),
(2, 'Panadol', '15 mg', '20-20-2022');

-- --------------------------------------------------------

--
-- Table structure for table `referal`
--

CREATE TABLE `referal` (
  `id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  `is_confirm` int(11) DEFAULT 0,
  `is_completed` int(11) DEFAULT 0,
  `is_failed` int(11) DEFAULT NULL,
  `is_star` int(11) NOT NULL DEFAULT 0,
  `date` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `referal`
--

INSERT INTO `referal` (`id`, `u_id`, `c_id`, `is_confirm`, `is_completed`, `is_failed`, `is_star`, `date`) VALUES
(2, 123456789, 1, 1, 0, 1, 0, '22-20-2022');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `type` varchar(200) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL,
  `start_time` varchar(255) DEFAULT NULL,
  `end_time` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `type`, `date`, `start_time`, `end_time`) VALUES
(11, 'covid', '2022-07-11', '14:59', '18:55'),
(12, 'covid', '2022-07-18', '15:02', '18:00'),
(13, 'covid', '2022-07-11', '19:00', '17:00'),
(14, 'covid', '2022-07-11', '15:06', '17:03'),
(15, 'covid', '2022-07-15', '15:06', '15:05');

-- --------------------------------------------------------

--
-- Table structure for table `vacation`
--

CREATE TABLE `vacation` (
  `id` int(11) NOT NULL,
  `start_date` varchar(255) DEFAULT NULL,
  `end_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacation`
--

INSERT INTO `vacation` (`id`, `start_date`, `end_date`) VALUES
(76, '2022-07-01', '2022-07-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `broadcast_history`
--
ALTER TABLE `broadcast_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consult`
--
ALTER TABLE `consult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `covid`
--
ALTER TABLE `covid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_history`
--
ALTER TABLE `notification_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referal`
--
ALTER TABLE `referal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vacation`
--
ALTER TABLE `vacation`
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
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `broadcast_history`
--
ALTER TABLE `broadcast_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `consult`
--
ALTER TABLE `consult`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `covid`
--
ALTER TABLE `covid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notification_history`
--
ALTER TABLE `notification_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `referal`
--
ALTER TABLE `referal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `vacation`
--
ALTER TABLE `vacation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
