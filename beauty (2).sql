-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2022 at 07:48 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beauty`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoon` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `view_status` varchar(255) NOT NULL DEFAULT 'not view'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `name`, `email`, `phoon`, `course`, `view_status`) VALUES
(28, 'sarah', 'sarah@gmaill.com', '485583759', '', 'view'),
(29, 'rosheen', 'rosheen@gmail.com', '3392828', '', 'view'),
(30, 'maheen', 'maheen@gamil.com', '853888', '', 'view'),
(31, 'maham', 'maham@gmail.com', '855839895', 'skincare', 'view');

-- --------------------------------------------------------

--
-- Table structure for table `contact_timing`
--

CREATE TABLE `contact_timing` (
  `id` int(11) NOT NULL,
  `day` varchar(255) NOT NULL,
  `timing` varchar(255) NOT NULL,
  `view_status` varchar(255) NOT NULL DEFAULT 'not view'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_timing`
--

INSERT INTO `contact_timing` (`id`, `day`, `timing`, `view_status`) VALUES
(11, 'monday', '9:00 am - 9:00 pm', 'view'),
(13, 'tuesday', '9:00 am - 9:00 pm', 'view'),
(14, 'wednesday', '9:00 am - 9:00 pm', 'view'),
(15, 'thursday', '9:00 am - 9:00 pm', 'view'),
(16, 'friday', 'off', 'view'),
(18, 'sunday', '9:00 am - 9:00 pm', 'not view');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`address`, `phone`, `email`) VALUES
('nowshera', '3392828', 'fajar@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `image` varchar(5000) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `name`, `price`) VALUES
(5, 'images/16517696441649674604s.jpg', 'Pedicure', '$30'),
(6, 'images/16517696841649674437o.jpg', 'Skin care', '$20'),
(7, 'images/16517697181649674505t.jpg', 'Shilles', '$10'),
(16, 'images/16517690031649674437o.jpg', 'medicure', '$50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_timing`
--
ALTER TABLE `contact_timing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `contact_timing`
--
ALTER TABLE `contact_timing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
