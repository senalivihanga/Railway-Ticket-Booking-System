-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2026 at 06:22 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `railway_ticket_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `train_id` int(11) DEFAULT NULL,
  `travel_date` date DEFAULT NULL,
  `seat_count` int(11) DEFAULT NULL,
  `booking_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) DEFAULT 'Confirmed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `train_id`, `travel_date`, `seat_count`, `booking_date`, `status`) VALUES
(1, 1, 1, '2026-06-29', 5, '2026-06-25 18:26:27', 'Cancelled'),
(2, 1, 8, '2026-08-22', 22, '2026-06-25 18:32:08', 'Confirmed'),
(3, 1, 4, '2026-10-14', 45, '2026-06-25 18:33:41', 'Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `trains`
--

CREATE TABLE `trains` (
  `id` int(11) NOT NULL,
  `train_name` varchar(100) DEFAULT NULL,
  `train_number` varchar(20) DEFAULT NULL,
  `source_station` varchar(100) DEFAULT NULL,
  `destination_station` varchar(100) DEFAULT NULL,
  `departure_time` time DEFAULT NULL,
  `arrival_time` time DEFAULT NULL,
  `available_seats` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trains`
--

INSERT INTO `trains` (`id`, `train_name`, `train_number`, `source_station`, `destination_station`, `departure_time`, `arrival_time`, `available_seats`) VALUES
(1, 'Sagarika', '123', 'Kaluthara ', 'Colombo', '12:31:00', '21:31:00', 17),
(2, 'Udarata Menike', '1001', 'Colombo', 'Kandy', '06:00:00', '09:00:00', 100),
(3, 'Udarata Menike', '1001', 'Colombo Fort', 'Kandy', '06:00:00', '09:00:00', 100),
(4, 'Denuwara Menike', '1002', 'Colombo Fort', 'Badulla', '07:00:00', '15:30:00', 35),
(5, 'Podi Menike', '1003', 'Colombo Fort', 'Badulla', '08:30:00', '17:00:00', 90),
(6, 'Intercity Express', '1004', 'Colombo Fort', 'Galle', '09:00:00', '11:00:00', 120),
(7, 'Southern Express', '1005', 'Colombo Fort', 'Matara', '10:00:00', '13:00:00', 110),
(8, 'Yal Devi', '1006', 'Colombo Fort', 'Jaffna', '06:30:00', '14:30:00', 128),
(9, 'Rajadhani Express', '1007', 'Colombo Fort', 'Kandy', '07:30:00', '10:30:00', 60),
(10, 'Night Mail', '1008', 'Colombo Fort', 'Badulla', '20:00:00', '05:30:00', 70);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Senali Vihanga', 'senalivihanga019@gmail.com', 'Senali123');

-- --------------------------------------------------------

--
-- Table structure for table `usres`
--

CREATE TABLE `usres` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trains`
--
ALTER TABLE `trains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trains`
--
ALTER TABLE `trains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
