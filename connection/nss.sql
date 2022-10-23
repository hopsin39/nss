-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220510.314f251104
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 03:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nss`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `join_date` datetime NOT NULL DEFAULT current_timestamp(),
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `full_name`, `email`, `password`, `join_date`, `last_login`) VALUES
(1, 'ADMIN', 'admin@admin.com', '$2y$10$vWGRAVKSZz.11r7XQoF3uONjy1QoZWNlYf5y2.o46o15wPVyMC246', '2022-03-27 11:41:06', '2022-05-22 14:59:58');

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `complain_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_msg` text NOT NULL,
  `admin_response` text NOT NULL,
  `complain_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complains`
--

INSERT INTO `complains` (`complain_id`, `user_id`, `user_msg`, `admin_response`, `complain_date`, `status`) VALUES
(2, 1, 'masa what', 'ok', '2022-03-27 11:17:34', 0),
(5, 3, 'about my salary', 'work on it soon', '2022-04-05 10:43:21', 0),
(6, 1, 'About my schedule today, i wont be around.', 'ok, i will change your schedule', '2022-05-22 00:50:54', 0),
(7, 1, 'am sick.', 'ok, don&#039;t come to work today.', '2022-05-22 01:10:38', 0);

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `todo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `user_id`, `start_time`, `end_time`, `todo`) VALUES
(1, 1, '16:00:00', '06:00:00', 'Assist Doctor Nti at E-block.'),
(2, 3, '10:57:00', '11:58:00', 'See Madam Sarah'),
(3, 4, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `joined_date` datetime NOT NULL DEFAULT current_timestamp(),
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `email`, `password`, `image`, `joined_date`, `last_login`) VALUES
(1, 'khadija alhassan', 'khadija@email.com', '$2y$10$Zoqh09hdfaWQMhvUQIKp6eoaP2g.KzmPdtpDa3vvvUjFDOzjKXd1K', '', '2022-03-27 03:11:12', '2022-05-22 14:59:27'),
(3, 'kabiru inusah', 'kabiru@email.com', '$2y$10$0f1ghoV9GgCda7vt7QgGTescPwFDVeDe5nLS3ZQaAqRa9BOYOuXXW', '', '2022-03-27 22:51:44', '2022-04-05 12:42:48'),
(4, 'Inuwa Mohammed', 'inuwa@outlook.com', '$2y$10$Suy3KamYukyWLpnKxtSxwetpJ4e5cXZvv5yYxHZUmWhOeUoKCVGxW', '', '2022-05-22 00:55:33', '2022-05-22 02:58:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`complain_id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `complain_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



