-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2026 at 05:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sqlfunctions`
--

-- --------------------------------------------------------

--
-- Table structure for table `usertbl`
--

CREATE TABLE `usertbl` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertbl`
--

INSERT INTO `usertbl` (`id`, `name`, `password`, `email`, `gender`, `created_at`) VALUES
(1, 'daboy', '123456789', 'daboygalvez19@gmail.com', 'male', '2025-01-15 10:30:00'),
(2, 'eye', '123456789', 'edward@gmail.com', 'male', '2025-08-20 14:45:00'),
(3, 'ellljay', '123456789', 'elljayballo@gmail.com', 'male', '2026-01-05 09:15:00'),
(4, 'aldrin', '123456789', 'aldrinbatingal@gmail.com', 'male', '2026-02-04 16:39:14'),
(5, 'nica', '123456789', 'nicalee@gmail.com', 'female', '2026-01-05 09:15:00'),
(6, 'hannah', '123456789', 'hannahagoncijo@gmail.com', 'female', '2026-01-05 09:15:00'),
(7, 'adrian', '123456789', 'adrian@gmail.com', 'male', '2026-01-05 09:15:00'),
(8, 'NEW USER', 'pass123', 'new@test.com', 'Male', '2025-01-15 10:30:00'),
(9, 'NEW USER', 'pass123', 'new@test.com', 'Male', '2025-01-15 10:30:00'),
(10, 'John Doe', '12345', 'john@example.com', 'Male', NULL),
(11, 'John Doe', '12345', 'john@example.com', 'Male', NULL),
(12, 'John Doe', '12345', 'john@example.com', 'Male', NULL),
(13, 'John Doe', '12345', 'john@example.com', 'Male', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_points`
--

CREATE TABLE `user_points` (
  `user_id` int(11) DEFAULT NULL,
  `points` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_points`
--

INSERT INTO `user_points` (`user_id`, `points`) VALUES
(1, 150),
(2, 45),
(3, 200),
(4, 350);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usertbl`
--
ALTER TABLE `usertbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_points`
--
ALTER TABLE `user_points`
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usertbl`
--
ALTER TABLE `usertbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_points`
--
ALTER TABLE `user_points`
  ADD CONSTRAINT `user_points_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `usertbl` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
