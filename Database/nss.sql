-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2022 at 06:28 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
(1, 'ADMIN', 'admin@admin.com', '1234', '2022-03-27 11:41:06', '2022-09-24 15:08:48'),
(2, 'OWUSU DAVID', 'davidowusu604@gmail.com', '12345', '2022-08-25 18:21:01', NULL),
(3, 'Kofi', 'kofi@gmail.com', '123', '2022-09-24 22:12:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `complain_id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `complain_msg` varchar(100) NOT NULL,
  `complain_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `admin_response` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complains`
--

INSERT INTO `complains` (`complain_id`, `full_name`, `email`, `complain_msg`, `complain_date`, `admin_response`, `status`) VALUES
(1, 'Doctor', 'doctor@gmail.com', ' come', '2022-10-06 09:45:41', 'okay i hear you', 0),
(2, 'Doctor', 'doctor@gmail.com', 'i wanna come', '2022-10-06 09:47:23', '', 0),
(3, 'Doctor', 'doctor@gmail.com', ' hey i wont come', '2022-10-06 09:51:27', '', 0),
(4, 'Paul', 'cena@gmail.com', ' i cant make it', '2022-10-11 03:35:02', '', 0),
(5, '', '', '', '2022-10-13 02:30:51', '', 0),
(6, 'Mensah Daniel', 'src@aamusted.com', ' Hello Mr Admin', '2022-10-13 03:59:51', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(79) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(21) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(70) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `comfirmcode` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`id`, `name`, `email`, `phone_number`, `username`, `password`, `comfirmcode`) VALUES
(1, 'samson', 'samsonxyfa@gmail.com', '0244057164', 'samsonxyfa', '12345', '12345'),
(2, 'danis', 'danissamson@gmail.com', '0549819881', 'danis', '2468', '1111'),
(3, 'gorden', 'naahgorden@gmail.com', '0548353917', 'gordennaah', '1357', '2222');

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
(1, 1, '13:31:47', '21:31:47', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `full_name` varchar(20) NOT NULL,
  `date_of_birth` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `staff_ID` varchar(11) NOT NULL,
  `password` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `secret_code` varchar(10) NOT NULL,
  `date_of_registration` timestamp NOT NULL DEFAULT current_timestamp(),
  `subject_code` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `full_name`, `date_of_birth`, `email`, `contact`, `qualification`, `subject`, `staff_ID`, `password`, `image`, `gender`, `secret_code`, `date_of_registration`, `subject_code`) VALUES
(1, 'kwabena Asante', '1997-12-03', 'kobby@gmail.com', '241089556', 'Degree', 'Mathematics', '123', '123', 'kp.png', 'Male', '123', '2022-10-08 18:48:51', 'AM001'),
(3, 'AWUKU MARTHA', '1999-12-03', 'kobby@gmail.com', '241089556', 'Degree', 'Science', '668899', '123', '1st lady.png', 'FEMALE', '123', '2022-10-09 21:43:45', 'AS001'),
(4, 'Mensah Daniel', '2000-12-10', 'src@aamusted.com', '0241089556', 'Degree', 'Social', '345', '123', 'avatar.png', 'Male', '123', '2022-10-10 17:52:43', 'SS001');

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
  `last_login` datetime NOT NULL,
  `date_of_birth` varchar(20) NOT NULL,
  `staff_ID` varchar(20) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `start_time` time NOT NULL DEFAULT current_timestamp(),
  `end_time` time NOT NULL DEFAULT current_timestamp(),
  `duty` varchar(100) NOT NULL,
  `complain` varchar(100) NOT NULL,
  `reply` varchar(100) NOT NULL,
  `reset_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `email`, `password`, `image`, `joined_date`, `last_login`, `date_of_birth`, `staff_ID`, `contact`, `gender`, `start_time`, `end_time`, `duty`, `complain`, `reply`, `reset_code`) VALUES
(27, 'kwabena Asante', 'cena@gmail.com', '123', '256-2562504_hen-chicken-clip-art-at-vector-clip-art.png', '2022-10-12 19:35:10', '0000-00-00 00:00:00', '2000-12-03', '123', '123', 'Male', '19:35:10', '19:35:10', '', '', '', ''),
(28, 'Doctor', 'kobby@gmail.com', '1234', 'images (1).jpg', '2022-10-12 19:55:50', '0000-00-00 00:00:00', '2000-12-03', '1234', '1234', 'Male', '19:55:50', '19:55:50', '', '', '', ''),
(29, 'Abdul Hafix', 'afar@gmail.com', '1234', 'images (1).jpg', '2022-10-12 19:57:26', '0000-00-00 00:00:00', '2022-12-06', '123', '2345', 'Female', '19:57:26', '19:57:26', '', '', '', ''),
(30, 'Mensah Daniel', 'afar@gmail.com', '444', '40265659981_ee9a2e4467_z.jpg', '2022-10-12 20:32:23', '0000-00-00 00:00:00', '0200-12-10', '444', '444', 'Male', '20:32:23', '20:32:23', '', '', '', ''),
(31, 'Mensah Daniel', 'src@aamusted.com', '555', 'a-basket-of-eggs.jpg', '2022-10-12 20:53:44', '0000-00-00 00:00:00', '2000-12-10', '555', '555', 'Male', '20:53:44', '20:53:44', '', '', '', '');

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
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
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
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `complain_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nurse`
--
ALTER TABLE `nurse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
