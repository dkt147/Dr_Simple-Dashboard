-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 24, 2022 at 10:43 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cybernso_simple`
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
  `u_id` varchar(200) DEFAULT NULL,
  `d_id` int(11) DEFAULT NULL,
  `r_id` int(11) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  `power` varchar(200) DEFAULT NULL,
  `reason` varchar(200) DEFAULT NULL,
  `is_completed` int(11) DEFAULT 0,
  `is_confirm` int(11) DEFAULT 0,
  `is_failed` int(11) NOT NULL DEFAULT 0,
  `is_star` int(11) NOT NULL DEFAULT 0,
  `book_date` varchar(200) DEFAULT NULL,
  `book_slot` varchar(200) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `type`, `u_id`, `d_id`, `r_id`, `c_id`, `power`, `reason`, `is_completed`, `is_confirm`, `is_failed`, `is_star`, `book_date`, `book_slot`, `date`) VALUES
(1, 'covid', '+923172881399', 1, NULL, NULL, NULL, 'Regular checkup', 0, 1, 0, 0, '2022-07-27', '19:05', '20-20-2022'),
(5, 'covid', '+923172881399', NULL, NULL, NULL, NULL, 'Regular checkup', 0, 1, 0, 0, '2022-07-27', '19:10', '06-07-2022 23:31:42'),
(16, 'covid', '+12049528853', NULL, NULL, NULL, NULL, 'Regular checkup', 0, 1, 0, 0, '2022-07-01', '17:10', '08-07-2022 05:19'),
(18, NULL, '+12049528853', 1, NULL, NULL, NULL, 'hello. im sick\n', 0, 1, 0, 0, '2022-07-06', NULL, '12-07-2022 02:55:44'),
(19, 'recipe', '+923172881399', NULL, 23, NULL, NULL, NULL, 0, 1, 0, 0, '2022-07-20', NULL, '14-07-2022 20:53'),
(20, NULL, '123456789', 1, NULL, NULL, NULL, 'daniyal testing', 0, 1, 0, 0, NULL, NULL, '14-07-2022 21:17:26'),
(21, 'covid', '', NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '', '', '2022-07-14'),
(22, 'covid', '123456789', NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '2022-07-19', '09:05', '2022-07-14'),
(23, 'covid', '+12049528853', NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '2022-07-19', '09:10', '2022-07-14'),
(24, 'referal', '+923172881399', NULL, 0, 12, NULL, NULL, 0, 1, 0, 0, '2022-07-20', '04:49', '14-07-2022 21:59'),
(25, 'recipe', '+923172881399', NULL, 23, NULL, NULL, NULL, 0, 1, 0, 0, '2022-07-19', '15:20', '2022-07-14'),
(26, 'covid', '123456789', NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '2022-07-19', '09:15', '2022-07-14'),
(27, 'covid', '172881399', NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '2022-07-19', '09:20', '2022-07-14'),
(28, 'covid', '123456789', NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '2022-07-21', '03:05', '2022-07-14'),
(29, 'covid', '123456789', NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '2022-07-21', '03:25', '2022-07-14'),
(30, 'covid', '+12049528853', NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '2022-07-21', '03:30', '2022-07-14'),
(31, 'covid', '+12049528853', NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '2022-07-21', '03:35', '2022-07-14'),
(32, 'regular', '+12049528853', NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '2022-07-21', '03:40', '2022-07-14'),
(33, 'covid', '03172881399', NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '2022-07-21', '03:15', '2022-07-14'),
(34, 'covid', '03172881399', NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '2022-07-15', '08:45', '2022-07-14'),
(35, 'covid', '123456789', NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '2022-07-15', '08:50', '2022-07-14'),
(36, 'covid', '+12049528853', NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '2022-07-15', '08:55', '2022-07-14'),
(37, 'covid', '03172881399', NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '2022-07-15', '08:35', '2022-07-14'),
(38, 'covid', '03172881399', NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '2022-07-15', '08:40', '2022-07-14'),
(39, 'covid', '03172881399', NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '2022-07-17', '21:45', '2022-07-14'),
(40, 'covid', '172881399', NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '2022-07-17', '22:00', '2022-07-14'),
(41, 'covid', '123456789', NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '2022-07-15', '07:05', '2022-07-14'),
(42, 'covid', '03172881399', NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '2022-07-15', '07:10', '2022-07-14'),
(43, 'covid', '123456789', NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '2022-07-15', '08:10', '2022-07-14'),
(44, 'covid', '123456789', NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '2022-07-15', '07:30', '2022-07-14'),
(45, 'covid', '123456789', NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '2022-07-19', '09:50', '2022-07-14'),
(46, 'covid', '03172881399', NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '2022-07-16', '17:13', '2022-07-14'),
(47, 'covid', '03172881399', NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '2022-07-16', '17:18', '2022-07-14'),
(48, 'covid', '03172881399', NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '2022-07-16', '17:23', '2022-07-14'),
(49, 'covid', '03172881399', NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '2022-07-16', '17:28', '2022-07-14'),
(50, 'covid', '03172881399', NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '2022-07-16', '17:33', '2022-07-14'),
(51, 'covid', '123456789', NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '2022-07-16', '17:38', '2022-07-14'),
(52, 'covid', '+12049528853', NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '2022-07-27', '19:15', '2022-07-14'),
(53, 'covid', '172881399', NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '2022-07-21', '03:20', '2022-07-14'),
(54, 'covid', '+923172881399', NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '2022-07-21', '03:10', '2022-07-14'),
(55, 'covid', '123456789', NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '2022-07-15', '07:15', '2022-07-14'),
(56, 'regular', '+9231728813992', 1, NULL, NULL, NULL, 'New appoinmnet', 0, 1, 0, 0, '2022-07-15', '07:15', '2022-07-16 09:37:37'),
(57, NULL, '+923172881399', 1, NULL, NULL, NULL, 'Dr booking', 0, 1, 0, 0, NULL, NULL, '16-07-2022 09:37:58'),
(58, NULL, '+923172881399', 1, NULL, NULL, NULL, 'New appointment ', 0, 0, 0, 0, NULL, NULL, '16-07-2022 16:06:55'),
(59, NULL, '+923172881399', 1, NULL, NULL, NULL, 'creating treatment ', 0, 0, 0, 0, NULL, NULL, '16-07-2022 16:38:16'),
(61, NULL, '+12049528853', 1, NULL, NULL, NULL, 'hello', 0, 0, 0, 0, NULL, NULL, '17-07-2022 18:01:17'),
(62, NULL, '+12049528853', 1, NULL, NULL, NULL, 'hi', 0, 0, 0, 0, NULL, NULL, '17-07-2022 18:23:10'),
(64, NULL, '+12049528853', 1, NULL, NULL, NULL, 'nande', 0, 0, 0, 0, NULL, NULL, '21-07-2022 18:41:21'),
(68, 'regular', '+923172881399', 1, NULL, NULL, NULL, 'dr\n', 0, 0, 0, 0, NULL, NULL, '24-07-2022 01:52:27'),
(69, 'consult', '+923172881399', NULL, NULL, NULL, NULL, 'dr\n', 0, 0, 0, 0, NULL, NULL, '2022-07-24 02:15:27'),
(70, 'regular', '+923172881399', 2, NULL, NULL, NULL, 'book', 0, 0, 0, 0, NULL, NULL, '24-07-2022 02:21:35'),
(71, 'regular', '+12049528853', 1, NULL, NULL, NULL, 'jdd\n', 0, 0, 0, 0, NULL, NULL, '24-07-2022 03:21:49'),
(72, 'recipe', '+12049528853', NULL, 22, NULL, '10mg', NULL, 0, 0, 0, 0, NULL, NULL, '24-07-2022 22:13:07'),
(73, 'referal', '+12049528853', NULL, NULL, 17, NULL, NULL, 0, 0, 0, 0, NULL, NULL, '24-07-2022 22:19:51'),
(74, 'recipe', '+12049528853', NULL, 22, NULL, '10mg', NULL, 0, 0, 0, 0, NULL, NULL, '24-07-2022 22:21:55'),
(75, 'referal', '+923172881399', NULL, NULL, 12, NULL, NULL, 0, 0, 0, 0, NULL, NULL, '24-07-2022 22:30:09');

-- --------------------------------------------------------

--
-- Table structure for table `broadcast_history`
--

CREATE TABLE `broadcast_history` (
  `id` int(11) NOT NULL,
  `broadcast_id` varchar(200) DEFAULT NULL,
  `user_id` varchar(200) DEFAULT NULL,
  `created_at` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `broadcast_history`
--

INSERT INTO `broadcast_history` (`id`, `broadcast_id`, `user_id`, `created_at`) VALUES
(28, '69', '+923172881399', '2022-07-15 00:46:01'),
(29, '69', '+923193318313', '2022-07-16 10:40:46'),
(30, '69', '+12049528853', '2022-07-16 16:28:43');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `detail` varchar(200) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `name`, `detail`, `date`) VALUES
(12, '+923172881399', 'jhggff', NULL, '2022-07-15 01:49:37'),
(14, '+923172881399', 'jhgf', NULL, '2022-07-15 01:49:49'),
(16, '+923193318313', 'Rampirl', NULL, '2022-07-16 10:40:15'),
(17, '+12049528853', 'rampil', NULL, '2022-07-16 16:59:08');

-- --------------------------------------------------------

--
-- Table structure for table `consult`
--

CREATE TABLE `consult` (
  `id` int(11) NOT NULL,
  `u_id` varchar(200) DEFAULT NULL,
  `reason` varchar(200) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consult`
--

INSERT INTO `consult` (`id`, `u_id`, `reason`, `date`) VALUES
(1, '+9231728813992', 'Regular checkup', '20-20-2022');

-- --------------------------------------------------------

--
-- Table structure for table `covid`
--

CREATE TABLE `covid` (
  `id` int(11) NOT NULL,
  `u_id` varchar(200) DEFAULT NULL,
  `book_date` varchar(200) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covid`
--

INSERT INTO `covid` (`id`, `u_id`, `book_date`, `date`) VALUES
(1, '+9231728813992', '25-07-2022', '25-06-2022');

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
(1, 'Dr. Stephan Thomalla', 'Allgemeinmediziner', 'Gesetzlich Versicherte', 'Privatversicherte', '20-20-2022'),
(2, 'Dr. Holger Nowak', 'Internist', 'Gesetzlich Versicherte', 'Privatversicherte', '20-20-2022'),
(3, 'Katja Mohr', 'Internistin', 'Gesetzlich Versicherte', 'Privatversicherte', '20-20-2022');

-- --------------------------------------------------------

--
-- Table structure for table `notification_history`
--

CREATE TABLE `notification_history` (
  `id` int(11) NOT NULL,
  `type` varchar(200) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL,
  `user_id` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT '10',
  `created_at` varchar(200) DEFAULT NULL,
  `updated_at` varchar(200) DEFAULT NULL,
  `is_seen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification_history`
--

INSERT INTO `notification_history` (`id`, `type`, `message`, `user_id`, `status`, `created_at`, `updated_at`, `is_seen`) VALUES
(47, 'regular', 'It is for single user!', '+923172881399', '10', '2022-07-05', '2022-07-05', 1),
(69, 'general', 'testing broadcast', NULL, '10', '2022-02-02', '2022-07-05', 1),
(70, 'general', 'm,,,,,mihljkjkjhljkm,,,,,mihljkjkjhljkm,,,,,mihljkjkjhljkm,,,,,mihljkjkjhljkm,,,,,mihljkjkjhljkm,,,,,mihljkjkjhljkm,,,,,mihljkjkjhljkm,,,,,mihljkjkjhljkm,,,,,mihljkjkjhljkm,,,,,mihljkjkjhljkm,,,,,mihl', NULL, '10', '2022-07-09', NULL, 0),
(71, 'general', 'sdfasdfasfasdfjs;dfkjas;fljas;fjsfljasdflkasjf;lsjflaskjf;ljffjaslfkjas;lfasjflasjfasjfls;jkfas;lkfjas;klfjasfkljasdlfasjflasdkdjfasklfjaslfkjasfklajsflaksjfasklfjaslkfjasfkljasdfklasjfklsadjfasklfjsd', NULL, '10', '2022-07-10', NULL, 0),
(72, 'regular', 'hi', '+12049528853', '10', '2022-07-12', NULL, 1),
(73, 'general', '', NULL, '10', '2022-07-14', NULL, 0),
(74, 'general', 'hello', NULL, '10', '2022-07-17', NULL, 0),
(75, 'general', 'hello', NULL, '10', '2022-07-17', NULL, 0),
(76, 'regular', 'hi', '+12049528853', '10', '2022-07-17', NULL, 1),
(77, 'general', 'right now', NULL, '10', '2022-07-21', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `u_id` varchar(200) DEFAULT NULL,
  `r_id` int(11) DEFAULT NULL,
  `power` varchar(200) DEFAULT NULL,
  `is_confirm` int(11) DEFAULT 0,
  `is_completed` int(11) DEFAULT 0,
  `is_failed` int(11) NOT NULL DEFAULT 0,
  `is_star` int(11) NOT NULL DEFAULT 0,
  `date` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `u_id`, `r_id`, `power`, `is_confirm`, `is_completed`, `is_failed`, `is_star`, `date`) VALUES
(1, '+9231728813992', 1, '15 mg', 1, 0, 0, 0, '02-02-2022'),
(2, '+9231728813992', 15, NULL, 1, 0, 0, 0, '06-07-2022 '),
(14, '+12049528853', 17, NULL, 1, 0, 1, 0, '12-07-2022 02:47:43'),
(18, '+12049528853', 17, NULL, 1, 0, 1, 0, '12-07-2022 02:48:51'),
(22, '+923172881399', 15, '600mg', 1, 1, 0, 0, '15-07-2022 12:18:47'),
(29, '+12049528853', 22, '10mg', 0, 1, 0, 0, '21-07-2022 18:41:40'),
(30, '+12049528853', 22, '10mg', 0, 1, 0, 0, '21-07-2022 18:56:02'),
(31, '+12049528853', 22, '10mg', 0, 1, 0, 0, '21-07-2022 18:56:31'),
(32, '+12049528853', 24, '1992', 0, 0, 1, 0, '21-07-2022 18:56:48');

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
(2, 'Mashood', '03172881399', 'mashood', '22/7/2022', 0, 1, NULL),
(5, 'Mashood', '03172881399', 'mashood', '22/7/2022', 0, 1, NULL),
(11, 'test', '1234567891', '123', '02-02-1999', 0, 0, NULL),
(12, 'Mashood', '172881399', 'mashood', '22/7/2022', 0, 0, NULL),
(13, 'Mashood Hussain', '+923172881399', 'mashood1234', '2000-01-22', 1, 0, NULL),
(14, 'Dongjun Cha', '+12049528853', 'ehdwns00', '2002-06-03', 1, 0, NULL),
(16, 'deni dev', '+923193318313', 'mashood12345', '1999-01-22', 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `power` varchar(200) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`id`, `user_id`, `name`, `power`, `date`) VALUES
(15, '+923172881399', 'Vintolino', '600mg', '06-07-2022'),
(16, '+923172881399', 'neuroline', '67 mg', '06-07-2022'),
(20, '+923172881399', 'braino logy', '56mg', '14-07-2022 21:35:48'),
(21, '+923172881399', 'new', '65 mg', '16-07-2022 09:38:50'),
(22, '+12049528853', 'pillow', '10mg', '16-07-2022 16:30:29'),
(23, '+12049528853', 'djd', '38', '16-07-2022 16:43:27'),
(24, '+12049528853', 'ririir', '1992', '17-07-2022 18:01:47'),
(25, '+12049528853', 'blabla', '1', '21-07-2022 19:23:57');

-- --------------------------------------------------------

--
-- Table structure for table `referal`
--

CREATE TABLE `referal` (
  `id` int(11) NOT NULL,
  `u_id` varchar(200) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  `is_confirm` int(11) DEFAULT 0,
  `is_completed` int(11) DEFAULT 0,
  `is_failed` int(11) NOT NULL DEFAULT 0,
  `is_star` int(11) NOT NULL DEFAULT 0,
  `date` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `referal`
--

INSERT INTO `referal` (`id`, `u_id`, `c_id`, `is_confirm`, `is_completed`, `is_failed`, `is_star`, `date`) VALUES
(1, '+923172881399', 1, 1, 0, 0, 0, '20-20-2022'),
(2, '+923172881399', 1, 1, 0, 0, 0, '20-20-2022'),
(3, '+923172881399', 6, 1, 0, 1, 0, '06-07-2022 15:40:53'),
(4, '+923172881399', 6, 1, 0, 1, 0, '06-07-2022 15:41:06'),
(5, '+12049528853', 7, 1, 0, 1, 1, '08-07-2022 04:04:25'),
(6, '+12049528853', 7, 1, 0, 0, 0, '08-07-2022 04:17:22'),
(7, '+12049528853', 8, 1, 0, 1, 0, '08-07-2022 05:07:10'),
(8, '+12049528853', 7, 1, 0, 1, 1, '08-07-2022 05:58:50'),
(9, '+923172881399', 12, 1, 1, 0, 0, '16-07-2022 10:14:08'),
(12, '+12049528853', 17, 0, 0, 1, 0, '24-07-2022 06:29:05');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `type` varchar(200) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL,
  `start_time` varchar(200) DEFAULT NULL,
  `end_time` varchar(200) DEFAULT NULL,
  `slot` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `type`, `date`, `start_time`, `end_time`, `slot`) VALUES
(18, 'covid', '2022-07-27', NULL, NULL, '19:05'),
(19, 'covid', '2022-07-27', NULL, NULL, '19:10'),
(20, 'covid', '2022-07-27', NULL, NULL, '19:15'),
(21, 'covid', '2022-07-27', NULL, NULL, '19:20'),
(22, 'covid', '2022-07-27', NULL, NULL, '19:25'),
(23, 'covid', '2022-07-27', NULL, NULL, '19:30'),
(24, 'covid', '2022-07-27', NULL, NULL, '19:35'),
(25, 'covid', '2022-07-27', NULL, NULL, '19:40'),
(26, 'covid', '2022-07-27', NULL, NULL, '19:45'),
(27, 'covid', '2022-07-27', NULL, NULL, '19:50'),
(28, 'covid', '2022-07-27', NULL, NULL, '19:55'),
(29, 'covid', '2022-07-27', NULL, NULL, '20:00'),
(30, 'covid', '2022-07-01', NULL, NULL, '17:05'),
(31, 'covid', '2022-07-01', NULL, NULL, '17:10'),
(32, 'covid', '2022-07-01', NULL, NULL, '17:15'),
(33, 'covid', '2022-07-01', NULL, NULL, '17:20'),
(34, 'covid', '2022-07-01', NULL, NULL, '17:25'),
(35, 'covid', '2022-07-01', NULL, NULL, '17:30'),
(36, 'covid', '2022-07-01', NULL, NULL, '17:35'),
(37, 'covid', '2022-07-01', NULL, NULL, '17:40'),
(38, 'covid', '2022-07-01', NULL, NULL, '17:45'),
(39, 'covid', '2022-07-05', NULL, NULL, '20:05'),
(40, 'covid', '2022-07-05', NULL, NULL, '20:10'),
(41, 'covid', '2022-07-05', NULL, NULL, '20:15'),
(42, 'covid', '2022-07-05', NULL, NULL, '20:20'),
(43, 'covid', '2022-07-05', NULL, NULL, '20:25'),
(44, 'covid', '2022-07-05', NULL, NULL, '20:30'),
(45, 'covid', '2022-07-05', NULL, NULL, '20:35'),
(46, 'covid', '2022-07-05', NULL, NULL, '20:40'),
(47, 'covid', '2022-07-05', NULL, NULL, '20:45'),
(48, 'covid', '2022-07-05', NULL, NULL, '20:50'),
(49, 'covid', '2022-07-05', NULL, NULL, '20:55'),
(50, 'covid', '2022-07-05', NULL, NULL, '21:00'),
(51, 'covid', '2022-07-05', NULL, NULL, '21:05'),
(52, 'covid', '2022-07-05', NULL, NULL, '21:10'),
(53, 'covid', '2022-07-05', NULL, NULL, '21:15'),
(54, 'covid', '2022-07-05', NULL, NULL, '21:20'),
(55, 'covid', '2022-07-05', NULL, NULL, '21:25'),
(56, 'covid', '2022-07-05', NULL, NULL, '21:30'),
(57, 'covid', '2022-07-21', NULL, NULL, '03:05'),
(58, 'covid', '2022-07-21', NULL, NULL, '03:10'),
(59, 'covid', '2022-07-21', NULL, NULL, '03:15'),
(60, 'covid', '2022-07-21', NULL, NULL, '03:20'),
(61, 'covid', '2022-07-21', NULL, NULL, '03:25'),
(62, 'covid', '2022-07-21', NULL, NULL, '03:30'),
(63, 'covid', '2022-07-21', NULL, NULL, '03:35'),
(64, 'covid', '2022-07-21', NULL, NULL, '03:40'),
(65, 'covid', '2022-07-28', NULL, NULL, '02:05'),
(66, 'covid', '2022-07-28', NULL, NULL, '02:10'),
(67, 'covid', '2022-07-28', NULL, NULL, '02:15'),
(68, 'covid', '2022-07-28', NULL, NULL, '02:20'),
(69, 'covid', '2022-07-28', NULL, NULL, '02:25'),
(70, 'covid', '2022-07-28', NULL, NULL, '02:30'),
(71, 'covid', '2022-07-28', NULL, NULL, '02:35'),
(72, 'covid', '2022-07-28', NULL, NULL, '02:40'),
(73, 'covid', '2022-07-28', NULL, NULL, '02:45'),
(74, 'covid', '2022-07-28', NULL, NULL, '02:50'),
(75, 'covid', '2022-07-28', NULL, NULL, '02:55'),
(76, 'covid', '2022-07-28', NULL, NULL, '03:00'),
(77, 'covid', '2022-07-28', NULL, NULL, '03:45'),
(78, 'covid', '2022-07-28', NULL, NULL, '03:50'),
(79, 'covid', '2022-07-28', NULL, NULL, '03:55'),
(80, 'covid', '2022-07-28', NULL, NULL, '04:00'),
(81, 'covid', '2022-07-31', NULL, NULL, '08:48'),
(82, 'covid', '2022-07-31', NULL, NULL, '08:53'),
(83, 'covid', '2022-07-31', NULL, NULL, '08:58'),
(84, 'covid', '2022-07-31', NULL, NULL, '09:03'),
(85, 'covid', '2022-07-31', NULL, NULL, '09:08'),
(86, 'covid', '2022-07-31', NULL, NULL, '09:13'),
(87, 'covid', '2022-07-31', NULL, NULL, '09:18'),
(88, 'covid', '2022-07-31', NULL, NULL, '09:23'),
(89, 'covid', '2022-07-31', NULL, NULL, '09:28'),
(90, 'covid', '2022-07-31', NULL, NULL, '09:33'),
(91, 'covid', '2022-07-31', NULL, NULL, '09:38'),
(92, 'covid', '2022-07-31', NULL, NULL, '09:43'),
(93, 'covid', '2022-07-31', NULL, NULL, '09:48'),
(94, 'covid', '2022-07-31', NULL, NULL, '09:53'),
(95, 'covid', '2022-07-31', NULL, NULL, '09:58'),
(96, 'covid', '2022-07-31', NULL, NULL, '10:03'),
(97, 'covid', '2022-07-31', NULL, NULL, '10:08'),
(98, 'covid', '2022-07-31', NULL, NULL, '10:13'),
(99, 'covid', '2022-07-31', NULL, NULL, '10:18'),
(100, 'covid', '2022-07-31', NULL, NULL, '10:23'),
(101, 'covid', '2022-07-31', NULL, NULL, '10:28'),
(102, 'covid', '2022-07-31', NULL, NULL, '10:33'),
(103, 'covid', '2022-07-31', NULL, NULL, '10:38'),
(104, 'covid', '2022-07-31', NULL, NULL, '10:43'),
(105, 'covid', '2022-07-31', NULL, NULL, '10:48'),
(106, 'covid', '2022-07-31', NULL, NULL, '10:53'),
(107, 'covid', '2022-07-31', NULL, NULL, '10:58'),
(108, 'covid', '2022-07-31', NULL, NULL, '11:03'),
(109, 'covid', '2022-07-31', NULL, NULL, '11:08'),
(110, 'covid', '2022-07-31', NULL, NULL, '11:13'),
(111, 'covid', '2022-07-31', NULL, NULL, '11:18'),
(112, 'covid', '2022-07-31', NULL, NULL, '11:23'),
(113, 'covid', '2022-07-31', NULL, NULL, '11:28'),
(114, 'covid', '2022-07-31', NULL, NULL, '11:33'),
(115, 'covid', '2022-07-31', NULL, NULL, '11:38'),
(116, 'covid', '2022-07-31', NULL, NULL, '11:43'),
(117, 'covid', '2022-07-31', NULL, NULL, '11:48'),
(118, 'covid', '2022-07-31', NULL, NULL, '11:53'),
(119, 'covid', '2022-07-31', NULL, NULL, '11:58'),
(120, 'covid', '2022-07-31', NULL, NULL, '12:03'),
(121, 'covid', '2022-07-31', NULL, NULL, '12:08'),
(122, 'covid', '2022-07-31', NULL, NULL, '12:13'),
(123, 'covid', '2022-07-31', NULL, NULL, '12:18'),
(124, 'covid', '2022-07-31', NULL, NULL, '12:23'),
(125, 'covid', '2022-07-31', NULL, NULL, '12:28'),
(126, 'covid', '2022-07-31', NULL, NULL, '12:33'),
(127, 'covid', '2022-07-31', NULL, NULL, '12:38'),
(128, 'covid', '2022-07-31', NULL, NULL, '12:43'),
(129, 'covid', '2022-07-31', NULL, NULL, '12:48'),
(130, 'covid', '2022-07-31', NULL, NULL, '12:53'),
(131, 'covid', '2022-07-31', NULL, NULL, '12:58'),
(132, 'covid', '2022-07-31', NULL, NULL, '13:03'),
(133, 'covid', '2022-07-31', NULL, NULL, '13:08'),
(134, 'covid', '2022-07-31', NULL, NULL, '13:13'),
(135, 'covid', '2022-07-31', NULL, NULL, '13:18'),
(136, 'covid', '2022-07-31', NULL, NULL, '13:23'),
(137, 'covid', '2022-07-31', NULL, NULL, '13:28'),
(138, 'covid', '2022-07-31', NULL, NULL, '13:33'),
(139, 'covid', '2022-07-31', NULL, NULL, '13:38'),
(140, 'covid', '2022-07-31', NULL, NULL, '13:43'),
(141, 'covid', '2022-07-31', NULL, NULL, '13:48'),
(142, 'covid', '2022-07-31', NULL, NULL, '13:53'),
(143, 'covid', '2022-07-31', NULL, NULL, '13:58'),
(144, 'covid', '2022-07-31', NULL, NULL, '14:03'),
(145, 'covid', '2022-07-31', NULL, NULL, '14:08'),
(146, 'covid', '2022-07-31', NULL, NULL, '14:13'),
(147, 'covid', '2022-07-31', NULL, NULL, '14:18'),
(148, 'covid', '2022-07-31', NULL, NULL, '14:23'),
(149, 'covid', '2022-07-31', NULL, NULL, '14:28'),
(150, 'covid', '2022-07-31', NULL, NULL, '14:33'),
(151, 'covid', '2022-07-31', NULL, NULL, '14:38'),
(152, 'covid', '2022-07-31', NULL, NULL, '14:43'),
(153, 'covid', '2022-07-31', NULL, NULL, '14:48'),
(154, 'covid', '2022-07-31', NULL, NULL, '14:53'),
(155, 'covid', '2022-07-31', NULL, NULL, '14:58'),
(156, 'covid', '2022-07-31', NULL, NULL, '15:03'),
(157, 'covid', '2022-07-31', NULL, NULL, '15:08'),
(158, 'covid', '2022-07-31', NULL, NULL, '15:13'),
(159, 'covid', '2022-07-31', NULL, NULL, '15:18'),
(160, 'covid', '2022-07-31', NULL, NULL, '15:23'),
(161, 'covid', '2022-07-31', NULL, NULL, '15:28'),
(162, 'covid', '2022-07-31', NULL, NULL, '15:33'),
(163, 'covid', '2022-07-31', NULL, NULL, '15:38'),
(164, 'covid', '2022-07-31', NULL, NULL, '15:43'),
(165, 'covid', '2022-06-14', NULL, NULL, '11:44'),
(166, 'covid', '2022-06-14', NULL, NULL, '11:49'),
(167, 'covid', '2022-06-14', NULL, NULL, '11:54'),
(168, 'covid', '2022-06-14', NULL, NULL, '11:59'),
(169, 'covid', '2022-06-14', NULL, NULL, '12:04'),
(170, 'covid', '2022-06-14', NULL, NULL, '12:09'),
(171, 'covid', '2022-06-14', NULL, NULL, '12:14'),
(172, 'covid', '2022-06-14', NULL, NULL, '12:19'),
(173, 'covid', '2022-06-14', NULL, NULL, '12:24'),
(174, 'covid', '2022-06-14', NULL, NULL, '12:29'),
(175, 'covid', '2022-06-14', NULL, NULL, '12:34'),
(176, 'covid', '2022-06-14', NULL, NULL, '12:39'),
(177, 'covid', '2022-06-14', NULL, NULL, '12:44'),
(178, 'covid', '2022-06-14', NULL, NULL, '12:49'),
(179, 'covid', '2022-06-14', NULL, NULL, '12:54'),
(180, 'covid', '2022-06-14', NULL, NULL, '12:59'),
(181, 'covid', '2022-06-14', NULL, NULL, '13:04'),
(182, 'covid', '2022-06-14', NULL, NULL, '13:09'),
(183, 'covid', '2022-06-14', NULL, NULL, '13:14'),
(184, 'covid', '2022-06-14', NULL, NULL, '13:19'),
(185, 'covid', '2022-06-14', NULL, NULL, '13:24'),
(186, 'covid', '2022-06-14', NULL, NULL, '13:29'),
(187, 'covid', '2022-06-14', NULL, NULL, '13:34'),
(188, 'covid', '2022-06-14', NULL, NULL, '13:39'),
(189, 'covid', '2022-06-14', NULL, NULL, '13:44'),
(190, 'covid', '2022-06-14', NULL, NULL, '13:49'),
(191, 'covid', '2022-06-14', NULL, NULL, '13:54'),
(192, 'covid', '2022-06-14', NULL, NULL, '13:59'),
(193, 'covid', '2022-06-14', NULL, NULL, '14:04'),
(194, 'covid', '2022-06-14', NULL, NULL, '14:09'),
(195, 'covid', '2022-06-14', NULL, NULL, '14:14'),
(196, 'covid', '2022-06-14', NULL, NULL, '14:19'),
(197, 'covid', '2022-06-14', NULL, NULL, '14:24'),
(198, 'covid', '2022-06-14', NULL, NULL, '14:29'),
(199, 'covid', '2022-06-14', NULL, NULL, '14:34'),
(200, 'covid', '2022-06-14', NULL, NULL, '14:39'),
(201, 'covid', '2022-06-14', NULL, NULL, '14:44'),
(202, 'covid', '2022-06-14', NULL, NULL, '14:49'),
(203, 'covid', '2022-06-14', NULL, NULL, '14:54'),
(204, 'covid', '2022-06-14', NULL, NULL, '14:59'),
(205, 'covid', '2022-06-14', NULL, NULL, '15:04'),
(206, 'covid', '2022-06-14', NULL, NULL, '15:09'),
(207, 'covid', '2022-06-14', NULL, NULL, '15:14'),
(208, 'covid', '2022-06-14', NULL, NULL, '15:19'),
(209, 'covid', '2022-06-14', NULL, NULL, '15:24'),
(210, 'covid', '2022-06-14', NULL, NULL, '15:29'),
(211, 'covid', '2022-06-14', NULL, NULL, '15:34'),
(212, 'covid', '2022-06-14', NULL, NULL, '15:39'),
(213, 'covid', '2022-06-14', NULL, NULL, '15:44'),
(214, 'covid', '2022-06-14', NULL, NULL, '15:49'),
(215, 'covid', '2022-06-14', NULL, NULL, '15:54'),
(216, 'covid', '2022-06-14', NULL, NULL, '15:59'),
(217, 'covid', '2022-06-14', NULL, NULL, '16:04'),
(218, 'covid', '2022-06-14', NULL, NULL, '16:09'),
(219, 'covid', '2022-06-14', NULL, NULL, '16:14'),
(220, 'covid', '2022-06-14', NULL, NULL, '16:19'),
(221, 'covid', '2022-06-14', NULL, NULL, '16:24'),
(222, 'covid', '2022-06-14', NULL, NULL, '16:29'),
(223, 'covid', '2022-06-14', NULL, NULL, '16:34'),
(224, 'covid', '2022-06-14', NULL, NULL, '16:39'),
(225, 'covid', '2022-06-14', NULL, NULL, '16:44'),
(226, 'covid', '2022-06-14', NULL, NULL, '16:49'),
(227, 'covid', '2022-06-14', NULL, NULL, '16:54'),
(228, 'covid', '2022-06-14', NULL, NULL, '16:59'),
(229, 'covid', '2022-06-14', NULL, NULL, '17:04'),
(230, 'covid', '2022-06-14', NULL, NULL, '17:09'),
(231, 'covid', '2022-06-14', NULL, NULL, '17:14'),
(232, 'covid', '2022-06-14', NULL, NULL, '17:19'),
(233, 'covid', '2022-06-14', NULL, NULL, '17:24'),
(234, 'covid', '2022-06-14', NULL, NULL, '17:29'),
(235, 'covid', '2022-06-14', NULL, NULL, '17:34'),
(236, 'covid', '2022-06-14', NULL, NULL, '17:39'),
(237, 'covid', '2022-06-14', NULL, NULL, '17:44'),
(238, 'covid', '2022-06-14', NULL, NULL, '17:49'),
(239, 'covid', '2022-06-14', NULL, NULL, '17:54'),
(240, 'covid', '2022-06-14', NULL, NULL, '17:59'),
(241, 'covid', '2022-06-14', NULL, NULL, '18:04'),
(242, 'covid', '2022-06-14', NULL, NULL, '18:09'),
(243, 'covid', '2022-06-14', NULL, NULL, '18:14'),
(244, 'covid', '2022-06-14', NULL, NULL, '18:19'),
(245, 'covid', '2022-06-14', NULL, NULL, '18:24'),
(246, 'covid', '2022-06-14', NULL, NULL, '18:29'),
(247, 'covid', '2022-06-14', NULL, NULL, '18:34'),
(248, 'covid', '2022-06-14', NULL, NULL, '18:39'),
(249, 'covid', '2022-06-14', NULL, NULL, '18:44'),
(250, 'covid', '2022-06-14', NULL, NULL, '18:49'),
(251, 'covid', '2022-06-14', NULL, NULL, '18:54'),
(252, 'covid', '2022-06-14', NULL, NULL, '18:59'),
(253, 'covid', '2022-06-14', NULL, NULL, '19:04'),
(254, 'covid', '2022-06-14', NULL, NULL, '19:09'),
(255, 'covid', '2022-06-14', NULL, NULL, '19:14'),
(256, 'covid', '2022-06-14', NULL, NULL, '19:19'),
(257, 'covid', '2022-06-14', NULL, NULL, '19:24'),
(258, 'covid', '2022-06-14', NULL, NULL, '19:29'),
(259, 'covid', '2022-06-14', NULL, NULL, '19:34'),
(260, 'covid', '2022-05-18', NULL, NULL, '04:44'),
(261, 'covid', '2022-05-18', NULL, NULL, '04:49'),
(262, 'covid', '2022-05-18', NULL, NULL, '04:54'),
(263, 'covid', '2022-05-18', NULL, NULL, '04:59'),
(264, 'covid', '2022-05-18', NULL, NULL, '05:04'),
(265, 'covid', '2022-05-18', NULL, NULL, '05:09'),
(266, 'covid', '2022-05-18', NULL, NULL, '05:14'),
(267, 'covid', '2022-05-18', NULL, NULL, '05:19'),
(268, 'covid', '2022-05-18', NULL, NULL, '05:24'),
(269, 'covid', '2022-05-18', NULL, NULL, '05:29'),
(270, 'covid', '2022-05-18', NULL, NULL, '05:34'),
(271, 'covid', '2022-05-18', NULL, NULL, '05:39'),
(272, 'covid', '2022-05-18', NULL, NULL, '05:44'),
(273, 'covid', '2022-05-18', NULL, NULL, '05:49'),
(274, 'covid', '2022-05-18', NULL, NULL, '05:54'),
(275, 'covid', '2022-05-18', NULL, NULL, '05:59'),
(276, 'covid', '2022-05-18', NULL, NULL, '06:04'),
(277, 'covid', '2022-05-18', NULL, NULL, '06:09'),
(278, 'covid', '2022-05-18', NULL, NULL, '06:14'),
(279, 'covid', '2022-05-18', NULL, NULL, '06:19'),
(280, 'covid', '2022-05-18', NULL, NULL, '06:24'),
(281, 'covid', '2022-05-18', NULL, NULL, '06:29'),
(282, 'covid', '2022-05-18', NULL, NULL, '06:34'),
(283, 'covid', '2022-05-18', NULL, NULL, '06:39'),
(284, 'covid', '2022-05-18', NULL, NULL, '06:44'),
(285, 'covid', '2022-05-18', NULL, NULL, '06:49'),
(286, 'covid', '2022-05-18', NULL, NULL, '06:54'),
(287, 'covid', '2022-05-18', NULL, NULL, '06:59'),
(288, 'covid', '2022-05-18', NULL, NULL, '07:04'),
(289, 'covid', '2022-05-18', NULL, NULL, '07:09'),
(290, 'covid', '2022-05-18', NULL, NULL, '07:14'),
(291, 'covid', '2022-05-18', NULL, NULL, '07:19'),
(292, 'covid', '2022-05-18', NULL, NULL, '07:24'),
(293, 'covid', '2022-05-18', NULL, NULL, '07:29'),
(294, 'covid', '2022-05-18', NULL, NULL, '07:34'),
(295, 'covid', '2022-05-18', NULL, NULL, '07:39'),
(296, 'covid', '2022-07-25', NULL, NULL, '12:47'),
(297, 'covid', '2022-07-25', NULL, NULL, '12:52'),
(298, 'covid', '2022-07-25', NULL, NULL, '12:57'),
(299, 'covid', '2022-07-25', NULL, NULL, '13:02'),
(300, 'covid', '2022-07-25', NULL, NULL, '13:07'),
(301, 'covid', '2022-07-25', NULL, NULL, '13:12'),
(302, 'covid', '2022-07-25', NULL, NULL, '13:17'),
(303, 'covid', '2022-07-25', NULL, NULL, '13:22'),
(304, 'covid', '2022-07-25', NULL, NULL, '13:27'),
(305, 'covid', '2022-07-25', NULL, NULL, '13:32'),
(306, 'covid', '2022-07-25', NULL, NULL, '13:37'),
(307, 'covid', '2022-07-25', NULL, NULL, '13:42'),
(308, 'covid', '2022-07-25', NULL, NULL, '13:47'),
(309, 'covid', '2022-07-25', NULL, NULL, '13:52'),
(310, 'covid', '2022-07-25', NULL, NULL, '13:57'),
(311, 'covid', '2022-07-25', NULL, NULL, '14:02'),
(312, 'covid', '2022-07-25', NULL, NULL, '14:07'),
(313, 'covid', '2022-07-25', NULL, NULL, '14:12'),
(314, 'covid', '2022-07-25', NULL, NULL, '14:17'),
(315, 'covid', '2022-07-25', NULL, NULL, '14:22'),
(316, 'covid', '2022-07-25', NULL, NULL, '14:27'),
(317, 'covid', '2022-07-25', NULL, NULL, '14:32'),
(318, 'covid', '2022-07-25', NULL, NULL, '14:37'),
(319, 'covid', '2022-07-25', NULL, NULL, '14:42'),
(320, 'covid', '2022-07-19', NULL, NULL, '09:05'),
(321, 'covid', '2022-07-19', NULL, NULL, '09:10'),
(322, 'covid', '2022-07-19', NULL, NULL, '09:15'),
(323, 'covid', '2022-07-19', NULL, NULL, '09:20'),
(324, 'covid', '2022-07-19', NULL, NULL, '09:25'),
(325, 'covid', '2022-07-19', NULL, NULL, '09:30'),
(326, 'covid', '2022-07-19', NULL, NULL, '09:35'),
(327, 'covid', '2022-07-19', NULL, NULL, '09:40'),
(328, 'covid', '2022-07-19', NULL, NULL, '09:45'),
(329, 'covid', '2022-07-19', NULL, NULL, '09:50'),
(330, 'covid', '2022-07-19', NULL, NULL, '09:55'),
(331, 'covid', '2022-07-19', NULL, NULL, '10:00'),
(332, 'covid', '2022-07-19', NULL, NULL, '10:05'),
(333, 'covid', '2022-07-19', NULL, NULL, '10:10'),
(334, 'covid', '2022-07-19', NULL, NULL, '10:15'),
(335, 'covid', '2022-07-19', NULL, NULL, '10:20'),
(336, 'covid', '2022-07-19', NULL, NULL, '10:25'),
(337, 'covid', '2022-07-19', NULL, NULL, '10:30'),
(338, 'covid', '2022-07-19', NULL, NULL, '10:35'),
(339, 'covid', '2022-07-19', NULL, NULL, '10:40'),
(340, 'covid', '2022-07-19', NULL, NULL, '10:45'),
(341, 'covid', '2022-07-19', NULL, NULL, '10:50'),
(342, 'covid', '2022-07-19', NULL, NULL, '10:55'),
(343, 'covid', '2022-07-19', NULL, NULL, '11:00'),
(344, 'covid', '2022-07-19', NULL, NULL, '11:05'),
(345, 'covid', '2022-07-19', NULL, NULL, '11:10'),
(346, 'covid', '2022-07-19', NULL, NULL, '11:15'),
(347, 'covid', '2022-07-19', NULL, NULL, '11:20'),
(348, 'covid', '2022-07-19', NULL, NULL, '11:25'),
(349, 'covid', '2022-07-19', NULL, NULL, '11:30'),
(350, 'covid', '2022-07-19', NULL, NULL, '11:35'),
(351, 'covid', '2022-07-19', NULL, NULL, '11:40'),
(352, 'covid', '2022-07-19', NULL, NULL, '11:45'),
(353, 'covid', '2022-07-19', NULL, NULL, '11:50'),
(354, 'covid', '2022-07-19', NULL, NULL, '11:55'),
(355, 'covid', '2022-07-19', NULL, NULL, '12:00'),
(356, 'covid', '2022-07-19', NULL, NULL, '12:05'),
(357, 'covid', '2022-07-19', NULL, NULL, '12:10'),
(358, 'covid', '2022-07-19', NULL, NULL, '12:15'),
(359, 'covid', '2022-07-19', NULL, NULL, '12:20'),
(360, 'covid', '2022-07-19', NULL, NULL, '12:25'),
(361, 'covid', '2022-07-19', NULL, NULL, '12:30'),
(362, 'covid', '2022-07-19', NULL, NULL, '12:35'),
(363, 'covid', '2022-07-19', NULL, NULL, '12:40'),
(364, 'covid', '2022-07-19', NULL, NULL, '12:45'),
(365, 'covid', '2022-07-19', NULL, NULL, '12:50'),
(366, 'covid', '2022-07-19', NULL, NULL, '12:55'),
(367, 'covid', '2022-07-19', NULL, NULL, '13:00'),
(368, 'covid', '2022-07-19', NULL, NULL, '13:05'),
(369, 'covid', '2022-07-19', NULL, NULL, '13:10'),
(370, 'covid', '2022-07-19', NULL, NULL, '13:15'),
(371, 'covid', '2022-07-19', NULL, NULL, '13:20'),
(372, 'covid', '2022-07-19', NULL, NULL, '13:25'),
(373, 'covid', '2022-07-19', NULL, NULL, '13:30'),
(374, 'covid', '2022-07-19', NULL, NULL, '13:35'),
(375, 'covid', '2022-07-19', NULL, NULL, '13:40'),
(376, 'covid', '2022-07-19', NULL, NULL, '13:45'),
(377, 'covid', '2022-07-19', NULL, NULL, '13:50'),
(378, 'covid', '2022-07-19', NULL, NULL, '13:55'),
(379, 'covid', '2022-07-19', NULL, NULL, '14:00'),
(380, 'covid', '2022-07-19', NULL, NULL, '14:05'),
(381, 'covid', '2022-07-19', NULL, NULL, '14:10'),
(382, 'covid', '2022-07-19', NULL, NULL, '14:15'),
(383, 'covid', '2022-07-19', NULL, NULL, '14:20'),
(384, 'covid', '2022-07-19', NULL, NULL, '14:25'),
(385, 'covid', '2022-07-19', NULL, NULL, '14:30'),
(386, 'covid', '2022-07-19', NULL, NULL, '14:35'),
(387, 'covid', '2022-07-19', NULL, NULL, '14:40'),
(388, 'covid', '2022-07-19', NULL, NULL, '14:45'),
(389, 'covid', '2022-07-19', NULL, NULL, '14:50'),
(390, 'covid', '2022-07-19', NULL, NULL, '14:55'),
(391, 'covid', '2022-07-19', NULL, NULL, '15:00'),
(392, 'covid', '2022-07-19', NULL, NULL, '15:05'),
(393, 'covid', '2022-07-19', NULL, NULL, '15:10'),
(394, 'covid', '2022-07-19', NULL, NULL, '15:15'),
(395, 'covid', '2022-07-19', NULL, NULL, '15:20'),
(396, 'covid', '2022-07-19', NULL, NULL, '15:25'),
(397, 'covid', '2022-07-19', NULL, NULL, '15:30'),
(398, 'covid', '2022-07-19', NULL, NULL, '15:35'),
(399, 'covid', '2022-07-19', NULL, NULL, '15:40'),
(400, 'covid', '2022-07-19', NULL, NULL, '15:45'),
(401, 'covid', '2022-07-19', NULL, NULL, '15:50'),
(402, 'covid', '2022-07-19', NULL, NULL, '15:55'),
(403, 'covid', '2022-07-19', NULL, NULL, '16:00'),
(404, 'covid', '2022-07-18', NULL, NULL, '16:05'),
(405, 'covid', '2022-07-18', NULL, NULL, '16:10'),
(406, 'covid', '2022-07-18', NULL, NULL, '16:15'),
(407, 'covid', '2022-07-18', NULL, NULL, '16:20'),
(408, 'covid', '2022-07-18', NULL, NULL, '16:25'),
(409, 'covid', '2022-07-18', NULL, NULL, '16:30'),
(410, 'covid', '2022-07-18', NULL, NULL, '16:35'),
(411, 'covid', '2022-07-18', NULL, NULL, '16:40'),
(412, 'covid', '2022-07-18', NULL, NULL, '16:45'),
(413, 'covid', '2022-07-18', NULL, NULL, '16:50'),
(414, 'covid', '2022-07-18', NULL, NULL, '16:55'),
(415, 'covid', '2022-07-18', NULL, NULL, '17:00'),
(416, 'covid', '2022-07-18', NULL, NULL, '17:50'),
(417, 'covid', '2022-07-18', NULL, NULL, '17:55'),
(418, 'covid', '2022-07-18', NULL, NULL, '18:00'),
(419, 'covid', '2022-07-17', NULL, NULL, '21:35'),
(420, 'covid', '2022-07-17', NULL, NULL, '21:40'),
(421, 'covid', '2022-07-17', NULL, NULL, '21:45'),
(422, 'covid', '2022-07-17', NULL, NULL, '21:50'),
(423, 'covid', '2022-07-17', NULL, NULL, '21:55'),
(424, 'covid', '2022-07-17', NULL, NULL, '22:00'),
(425, 'covid', '2022-07-17', NULL, NULL, '22:05'),
(426, 'covid', '2022-07-17', NULL, NULL, '22:10'),
(427, 'covid', '2022-07-17', NULL, NULL, '22:15'),
(428, 'covid', '2022-07-17', NULL, NULL, '22:20'),
(429, 'covid', '2022-07-17', NULL, NULL, '22:25'),
(430, 'covid', '2022-07-17', NULL, NULL, '22:30'),
(431, 'covid', '2022-07-17', NULL, NULL, '22:35'),
(432, 'covid', '2022-07-17', NULL, NULL, '22:40'),
(433, 'covid', '2022-07-17', NULL, NULL, '22:45'),
(434, 'covid', '2022-07-17', NULL, NULL, '22:50'),
(435, 'covid', '2022-07-17', NULL, NULL, '22:55'),
(436, 'covid', '2022-07-17', NULL, NULL, '23:00'),
(437, 'covid', '2022-07-15', NULL, NULL, '07:05'),
(438, 'covid', '2022-07-15', NULL, NULL, '07:10'),
(439, 'covid', '2022-07-15', NULL, NULL, '07:15'),
(440, 'covid', '2022-07-15', NULL, NULL, '07:20'),
(441, 'covid', '2022-07-15', NULL, NULL, '07:25'),
(442, 'covid', '2022-07-15', NULL, NULL, '07:30'),
(443, 'covid', '2022-07-15', NULL, NULL, '07:35'),
(444, 'covid', '2022-07-15', NULL, NULL, '07:40'),
(445, 'covid', '2022-07-15', NULL, NULL, '07:45'),
(446, 'covid', '2022-07-15', NULL, NULL, '07:50'),
(447, 'covid', '2022-07-15', NULL, NULL, '07:55'),
(448, 'covid', '2022-07-15', NULL, NULL, '08:00'),
(449, 'covid', '2022-07-15', NULL, NULL, '08:05'),
(450, 'covid', '2022-07-15', NULL, NULL, '08:10'),
(451, 'covid', '2022-07-15', NULL, NULL, '08:15'),
(452, 'covid', '2022-07-15', NULL, NULL, '08:20'),
(453, 'covid', '2022-07-15', NULL, NULL, '08:25'),
(454, 'covid', '2022-07-15', NULL, NULL, '08:30'),
(455, 'covid', '2022-07-15', NULL, NULL, '08:35'),
(456, 'covid', '2022-07-15', NULL, NULL, '08:40'),
(457, 'covid', '2022-07-15', NULL, NULL, '08:45'),
(458, 'covid', '2022-07-15', NULL, NULL, '08:50'),
(459, 'covid', '2022-07-15', NULL, NULL, '08:55'),
(460, 'covid', '2022-07-15', NULL, NULL, '09:00'),
(461, 'covid', '2022-07-16', NULL, NULL, '17:13'),
(462, 'covid', '2022-07-16', NULL, NULL, '17:18'),
(463, 'covid', '2022-07-16', NULL, NULL, '17:23'),
(464, 'covid', '2022-07-16', NULL, NULL, '17:28'),
(465, 'covid', '2022-07-16', NULL, NULL, '17:33'),
(466, 'covid', '2022-07-16', NULL, NULL, '17:38'),
(467, 'covid', '2022-07-16', NULL, NULL, '17:43'),
(468, 'covid', '2022-07-16', NULL, NULL, '17:48'),
(469, 'covid', '2022-07-16', NULL, NULL, '17:53'),
(470, 'covid', '2022-07-16', NULL, NULL, '17:58'),
(471, 'covid', '2022-07-16', NULL, NULL, '18:03'),
(472, 'covid', '2022-07-16', NULL, NULL, '18:08'),
(473, 'covid', '2022-07-16', NULL, NULL, '18:13'),
(474, 'covid', '2022-07-16', NULL, NULL, '18:18'),
(475, 'covid', '2022-07-16', NULL, NULL, '18:23'),
(476, 'covid', '2022-07-16', NULL, NULL, '18:28'),
(477, 'covid', '2022-07-16', NULL, NULL, '18:33'),
(478, 'covid', '2022-07-16', NULL, NULL, '18:38'),
(479, 'covid', '2022-07-16', NULL, NULL, '18:43'),
(480, 'covid', '2022-07-16', NULL, NULL, '18:48'),
(481, 'covid', '2022-07-16', NULL, NULL, '18:53'),
(482, 'covid', '2022-07-16', NULL, NULL, '18:58'),
(483, 'covid', '2022-07-16', NULL, NULL, '19:03'),
(484, 'covid', '2022-07-16', NULL, NULL, '19:08'),
(485, 'covid', '2022-07-16', NULL, NULL, '19:13'),
(486, 'covid', '2022-07-16', NULL, NULL, '19:18'),
(487, 'covid', '2022-07-16', NULL, NULL, '19:23'),
(488, 'covid', '2022-07-16', NULL, NULL, '19:28'),
(489, 'covid', '2022-07-16', NULL, NULL, '19:33'),
(490, 'covid', '2022-07-16', NULL, NULL, '19:38'),
(491, 'covid', '2022-07-16', NULL, NULL, '19:43'),
(492, 'covid', '2022-07-16', NULL, NULL, '19:48'),
(493, 'covid', '2022-07-16', NULL, NULL, '19:53'),
(494, 'covid', '2022-07-16', NULL, NULL, '19:58'),
(495, 'covid', '2022-07-16', NULL, NULL, '20:03'),
(496, 'covid', '2022-07-16', NULL, NULL, '20:08'),
(497, 'covid', '2022-07-16', NULL, NULL, '20:13');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `broadcast_history`
--
ALTER TABLE `broadcast_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notification_history`
--
ALTER TABLE `notification_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `referal`
--
ALTER TABLE `referal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=498;

--
-- AUTO_INCREMENT for table `vacation`
--
ALTER TABLE `vacation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
