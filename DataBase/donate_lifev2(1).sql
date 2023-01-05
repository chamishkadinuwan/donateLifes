-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2023 at 09:36 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donate_lifev2`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_admin`
--

CREATE TABLE `auth_admin` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `auth_beneficiary`
--

CREATE TABLE `auth_beneficiary` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `nic` varchar(12) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `mobile` varchar(10) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `blood_group` varchar(10) DEFAULT NULL,
  `comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth_beneficiary`
--

INSERT INTO `auth_beneficiary` (`id`, `email`, `password`, `name`, `nic`, `dob`, `gender`, `address`, `mobile`, `district`, `blood_group`, `comment`) VALUES
(1, 'sdfsdf@fgfg', 'gmj', 'dfg', NULL, NULL, NULL, NULL, '87654', NULL, NULL, NULL),
(2, 'qwer@wefef.weggwer', '1', 'qweqwe', '1234567890', '2023-01-06', 'Female', 'rthjh,hmg', '1234567890', 'Galle', 'Kidney', 'dfghjjhbwfegrthtyuirew'),
(3, 'wef@wefewf.rhgtrh', '1', 'qwdqw', NULL, NULL, NULL, NULL, '12345678', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_donor`
--

CREATE TABLE `auth_donor` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `nic` varchar(12) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `mobile` varchar(10) NOT NULL,
  `type_of_organ` varchar(50) DEFAULT NULL,
  `blood_group` varchar(10) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `nominee_name` varchar(200) DEFAULT NULL,
  `nominee_mobile` varchar(10) DEFAULT NULL,
  `comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth_donor`
--

INSERT INTO `auth_donor` (`id`, `email`, `password`, `name`, `nic`, `dob`, `gender`, `address`, `mobile`, `type_of_organ`, `blood_group`, `district`, `nominee_name`, `nominee_mobile`, `comment`) VALUES
(14, 'ruwan@gmail.com', '1', 'Ruwan', '1234567890', '2023-01-20', 'Male', '2ttyukjhgfefghj', '1234567890', 'Full Body', 'B', 'Jafna', 'werthef', '1234567890', 'efwethrgfwfegrtrjythgef');

-- --------------------------------------------------------

--
-- Table structure for table `auth_hospital`
--

CREATE TABLE `auth_hospital` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `organ_requests`
--

CREATE TABLE `organ_requests` (
  `id` int(11) NOT NULL,
  `ben_id` int(11) NOT NULL,
  `type_of_organ` varchar(50) NOT NULL,
  `requested_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_admin`
--
ALTER TABLE `auth_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_beneficiary`
--
ALTER TABLE `auth_beneficiary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_donor`
--
ALTER TABLE `auth_donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_hospital`
--
ALTER TABLE `auth_hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organ_requests`
--
ALTER TABLE `organ_requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_admin`
--
ALTER TABLE `auth_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_beneficiary`
--
ALTER TABLE `auth_beneficiary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `auth_donor`
--
ALTER TABLE `auth_donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `auth_hospital`
--
ALTER TABLE `auth_hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organ_requests`
--
ALTER TABLE `organ_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
