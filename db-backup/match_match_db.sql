-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2018 at 04:35 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `match_match_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `best_players`
--

CREATE TABLE `best_players` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `best_time` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `best_players`
--

INSERT INTO `best_players` (`id`, `name`, `best_time`, `date`) VALUES
(1, 'idan cohen', 100, '2018-09-27 05:20:17'),
(2, 'idan cohen', 90, '2018-09-27 05:35:19'),
(3, 'eliav aviad', 80, '2018-09-11 00:00:00'),
(4, 'yehonatan shiran', 55, '2018-09-18 00:00:00'),
(5, 'eliav aviad', 67, '2018-09-11 00:00:00'),
(6, 'yehonatan shiran', 70, '2018-09-18 00:00:00'),
(32, 'idan cohen', 41, '2018-09-30 03:07:55'),
(41, 'yair lapid new', 40, '2018-09-30 03:34:13'),
(42, 'idan', 42, '2018-09-30 04:17:51'),
(43, 'idan cohen', 32, '2018-09-30 04:20:34'),
(44, 'idan', 31, '2018-09-30 04:27:03'),
(45, 'idan cohen', 38, '2018-09-30 04:32:30'),
(46, 'idan', 28, '2018-09-30 05:31:44'),
(47, 'idan cohen', 32, '2018-09-30 06:15:58'),
(48, 'idan cohen', 37, '2018-10-01 06:10:39'),
(49, 'idan', 29, '2018-10-01 06:24:58'),
(50, 'idan', 27, '2018-10-01 06:54:16'),
(51, 'shmuel', 89, '2018-10-01 08:06:53'),
(52, 'shmuel', 89, '2018-10-01 08:07:07'),
(53, 'aviad eliav', 52, '2018-10-14 09:00:15'),
(54, 'IDAN COHEN', 34, '2018-10-01 08:37:27'),
(55, 'hodaya', 38, '2018-10-01 02:19:23'),
(56, 'ami', 28, '2018-10-07 07:16:54'),
(57, 'ami', 48, '2018-10-07 07:20:49'),
(58, 'idan', 31, '2018-10-07 07:22:23'),
(59, 'hila', 44, '2018-10-08 10:04:23'),
(60, 'hila', 56, '2018-10-08 10:06:49'),
(61, 'עידן', 33, '2018-10-13 17:21:01'),
(62, 'עידן', 27, '2018-10-14 08:41:29'),
(63, 'עידן godaddy', 27, '2018-10-24 02:25:40'),
(64, 'idan test', 36, '2018-10-24 02:29:40'),
(65, 'idan test 2', 24, '2018-10-24 02:31:12'),
(66, 'kchord', 35, '2018-10-29 00:35:02'),
(67, 'go daddy', 34, '2018-11-11 06:57:03'),
(68, 'idan htdocs', 31, '2018-11-12 12:45:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `best_players`
--
ALTER TABLE `best_players`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `best_players`
--
ALTER TABLE `best_players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
