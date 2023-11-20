-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 20, 2023 at 11:10 AM
-- Server version: 8.0.35-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsionawp_hakim`
--

-- --------------------------------------------------------

--
-- Table structure for table `med_school_data`
--

CREATE TABLE `med_school_data` (
  `id` int NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nick_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `high_school` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dorm_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `condition_on_admission` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `memorable_time_in_med_school` text COLLATE utf8mb4_unicode_ci,
  `worst_time_in_med_school` text COLLATE utf8mb4_unicode_ci,
  `black_lion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `if_not_doctor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inclination` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_words` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT NULL,
  `condition_of_discharge` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `in_ten_years` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `users` (
  `id` int NOT NULL,
  `first_name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `password`, `role`) VALUES
(1319, 'admin', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 0)
-- --------------------------------------------------------

--
-- Table structure for table `user_sizes`
--

CREATE TABLE `user_sizes` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_sizes`
--

INSERT INTO `user_sizes` (`id`, `name`, `size`, `created_at`) VALUES
(1, 'dd', 'Medium', '2023-09-27 06:27:13'),
(2, 'ss', 'Medium', '2023-09-27 06:55:49'),
(3, 'dsf', 'Large', '2023-09-27 06:58:03'),
(4, 'sd', 'Large', '2023-09-27 07:03:10'),
(5, 'fdfe', 'Small', '2023-09-27 07:06:53'),
(6, 'sfsds', 'Small', '2023-09-27 07:08:41'),
(7, 'dssd', 'Small', '2023-09-27 07:12:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `med_school_data`
--
ALTER TABLE `med_school_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sizes`
--
ALTER TABLE `user_sizes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `med_school_data`
--
ALTER TABLE `med_school_data`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9845;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1679;

--
-- AUTO_INCREMENT for table `user_sizes`
--
ALTER TABLE `user_sizes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `med_school_data`
--
ALTER TABLE `med_school_data`
  ADD CONSTRAINT `med_school_data_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
