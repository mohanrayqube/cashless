-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2019 at 11:19 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nagarnigam`
--

-- --------------------------------------------------------

--
-- Table structure for table `ngr_qr_status`
--

DROP TABLE IF EXISTS `ngr_qr_status`;
CREATE TABLE `ngr_qr_status` (
  `id` int(11) NOT NULL,
  `datetime` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` enum('0','1') COLLATE utf8_bin NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- Error reading data for table nagarnigam.ngr_qr_status: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `nagarnigam`.`ngr_qr_status`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `mobile_number` bigint(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `address` text COLLATE utf8_bin,
  `status` tinyint(4) DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `role_id` int(11) NOT NULL COMMENT '1- admin, 2-user',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile_number`, `password`, `address`, `status`, `token`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', 3214569874, '$2y$10$V1Aa027kOK4Cpd8Oh5hcxOIBAIHRj2JkuQZaQe11cvhgBKM/I895W', NULL, NULL, '12350061057371893857', 1, '2019-02-27 03:12:55', '2019-02-27 03:12:55'),
(2, 'User 1', 'user1@gmail.com', 1234567890, '$2y$10$V1Aa027kOK4Cpd8Oh5hcxOIBAIHRj2JkuQZaQe11cvhgBKM/I895W', 'Jaipur', 1, '12350061057371893858', 2, '2019-02-27 03:12:55', '2019-02-27 03:12:55'),
(3, 'User 2', 'user2@gmail.com', 2134567890, '$2y$10$V1Aa027kOK4Cpd8Oh5hcxOIBAIHRj2JkuQZaQe11cvhgBKM/I895W', 'Jaipur', 1, '12350061057371893859', 2, '2019-02-27 03:12:55', '2019-02-27 03:12:55'),
(4, 'User 3', 'user3@gmail.com', 3234567890, '$2y$10$V1Aa027kOK4Cpd8Oh5hcxOIBAIHRj2JkuQZaQe11cvhgBKM/I895W', 'Jaipur', 1, '12350269057371893857', 2, '2019-02-27 03:12:55', '2019-02-27 03:12:55'),
(5, 'User 4', 'user4@gmail.com', 4134567890, '$2y$10$V1Aa027kOK4Cpd8Oh5hcxOIBAIHRj2JkuQZaQe11cvhgBKM/I895W', 'Jaipur', 1, '12355061057371893890', 2, '2019-02-27 03:12:55', '2019-02-27 03:12:55'),
(6, 'User 5', 'user5@gmail.com', 5234567890, '$2y$10$V1Aa027kOK4Cpd8Oh5hcxOIBAIHRj2JkuQZaQe11cvhgBKM/I895W', 'Jaipur', 1, '12355061057371893858', 2, '2019-02-27 03:12:55', '2019-02-27 03:12:55'),
(7, 'User 6', 'user6@gmail.com', 6134567890, '$2y$10$V1Aa027kOK4Cpd8Oh5hcxOIBAIHRj2JkuQZaQe11cvhgBKM/I895W', 'Jaipur', 1, '12356061057371893859', 2, '2019-02-27 03:12:55', '2019-02-27 03:12:55'),
(8, 'User 7', 'user7@gmail.com', 7234567890, '$2y$10$V1Aa027kOK4Cpd8Oh5hcxOIBAIHRj2JkuQZaQe11cvhgBKM/I895W', 'Jaipur', 1, '12357269057371893857', 2, '2019-02-27 03:12:55', '2019-02-27 03:12:55'),
(9, 'User 8', 'user8@gmail.com', 8134567890, '$2y$10$V1Aa027kOK4Cpd8Oh5hcxOIBAIHRj2JkuQZaQe11cvhgBKM/I895W', 'Jaipur', 1, '12385061057371893890', 2, '2019-02-27 03:12:55', '2019-02-27 03:12:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ngr_qr_status`
--
ALTER TABLE `ngr_qr_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobile_number` (`mobile_number`),
  ADD UNIQUE KEY `token` (`token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ngr_qr_status`
--
ALTER TABLE `ngr_qr_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
