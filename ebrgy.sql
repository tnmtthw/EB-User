-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2023 at 05:11 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebrgy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `create_datetime`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2023-01-07 09:07:32');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `image` varchar(60) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `title`, `body`, `image`, `create_datetime`) VALUES
(46, 'Barangay Clean Up Drive', 'Lorem Ipsum Dolor Sit Amet, ', '63bbd01fdab6e.png', '2023-01-09 08:41:32'),
(47, 'Barangay Clean Up Drive', 'Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Etiam Semper Diam At Erat Pulvinar, At ', '63bbd024b1ddc.jpg', '2023-01-09 08:59:06'),
(48, 'Barangay Clean Up Drive', 'Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Etiam Semper Diam At Erat Pulvinar, At Pulvinar Felis Blandit. Vestibulum Volutpat Tellus Diam, Consequat Gravida Libero Rhoncus Ut.', '63bbc9540c2c3.jpg', '2023-01-09 08:59:16');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `address` text NOT NULL,
  `contact` varchar(12) NOT NULL,
  `user_appointment` text NOT NULL,
  `form` text NOT NULL,
  `time` time NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `fullname`, `address`, `contact`, `user_appointment`, `form`, `time`, `date`) VALUES
(11, 'Alejandro Cerafica', '7th avenue', '091977385', 'Barangay ID', 'img/appointment/09-01-2023-1673264712-37000.jpg', '00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `appointments_approval`
--

CREATE TABLE `appointments_approval` (
  `id` int(11) NOT NULL DEFAULT 0,
  `fullname` text NOT NULL,
  `address` text NOT NULL,
  `contact` varchar(12) NOT NULL,
  `user_appointment` text NOT NULL,
  `form` text NOT NULL,
  `time` time NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments_approval`
--

INSERT INTO `appointments_approval` (`id`, `fullname`, `address`, `contact`, `user_appointment`, `form`, `time`, `date`) VALUES
(9, 'Fortune Tamares', '10th Avenue', '09197017738', 'I need barangay clearance', 'img/appointment/09-01-2023-1673262396-68407.jpg', '09:13:00', '2023-01-12'),
(10, 'Joyce Sontillanosa', '10th avenue', '09197017738', 'Barangay ID Request', 'img/appointment/09-01-2023-1673262975-87599.jpg', '09:34:00', '2023-01-17');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `address` text NOT NULL,
  `contact` varchar(12) NOT NULL,
  `user_complaints` text NOT NULL,
  `path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `complaints_settled`
--

CREATE TABLE `complaints_settled` (
  `id` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `address` text NOT NULL,
  `contact` varchar(12) NOT NULL,
  `user_complaints` text NOT NULL,
  `path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaints_settled`
--

INSERT INTO `complaints_settled` (`id`, `fullname`, `address`, `contact`, `user_complaints`, `path`) VALUES
(4, 'Fortune Tamares', '10th avenue ', '09197017738', 'basura sa kalsada', 'complaints/07-01-2023-1673080240-88632.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `create_datetime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `email`, `create_datetime`) VALUES
(1, 'Fortune Tamares', 'jg19', '$2y$10$Ar6kGzv81F/zcuee3z1uV.1NogAgsAIxmWT67gR16W.nIJSTbpvr.', 'email@gmail.com', '2023-01-09');

-- --------------------------------------------------------

--
-- Table structure for table `users_approval`
--

CREATE TABLE `users_approval` (
  `id` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `create_datetime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_approval`
--

INSERT INTO `users_approval` (`id`, `fullname`, `username`, `password`, `email`, `create_datetime`) VALUES
(6, 'Fortune Tamares', 'user', '1a1dc91c907325c69271ddf0c944bc72', 'fortunetamares@gmail.com', '2023-01-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments_approval`
--
ALTER TABLE `appointments_approval`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints_settled`
--
ALTER TABLE `complaints_settled`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `users_approval`
--
ALTER TABLE `users_approval`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `complaints_settled`
--
ALTER TABLE `complaints_settled`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users_approval`
--
ALTER TABLE `users_approval`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
