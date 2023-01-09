-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 01:18 AM
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
(3, 'wef@wefewf.rhgtrh', '1', 'qwdqw', NULL, NULL, NULL, NULL, '12345678', NULL, NULL, NULL),
(4, 'wqd@wefef.rhh', '1', 'wewrwer', NULL, NULL, NULL, NULL, '213456', NULL, NULL, NULL),
(5, 'frgth@wef.wewe', 'c4ca4238a0b923820dcc509a6f75849b', 'qwergth', '', '0000-00-00', '', '', '121212', '', '', ''),
(6, 'frgth@wef.wewe', 'c4ca4238a0b923820dcc509a6f75849b', 'wdfghjm', '', '0000-00-00', '', '', '123456', '', '', ''),
(7, 'ruwan@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'Ruwan', '1234567890', '2023-01-06', 'Male', 'sght gegerg ', '1234567890', 'Anuradhapuraya', 'B+', 'er ggr eg erg erge');

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
  `comment` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=alive\r\n2=added'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth_donor`
--

INSERT INTO `auth_donor` (`id`, `email`, `password`, `name`, `nic`, `dob`, `gender`, `address`, `mobile`, `type_of_organ`, `blood_group`, `district`, `nominee_name`, `nominee_mobile`, `comment`, `status`) VALUES
(16, 'ruwan@gmail.com', '1', 'Ruwan Rohitha', '1234567890', '2023-01-11', 'Male', 'fehthmhgwdfbgne', '1234567890', ',Lung,Kidney', 'B', 'Polonnaruwa', 'wergthjmhnbfvw', '1234567890', 'eenhmggnhmfffgnhfw', 2),
(17, 'ssfew@fwef.ewf', '202cb962ac59075b964b07152d234b70', 'admin@jobgate.com', NULL, NULL, NULL, NULL, '1234567890', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(18, 'sef@rgeg.rther', 'c20ad4d76fe97759aa27a0c99bff6710', 'wdefthj', NULL, NULL, NULL, NULL, '1234567890', NULL, NULL, NULL, NULL, NULL, NULL, 1);

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

--
-- Dumping data for table `auth_hospital`
--

INSERT INTO `auth_hospital` (`id`, `email`, `password`, `name`, `address`, `mobile`) VALUES
(1, 'doctor@gmail.com', '1', 'wefewf', 'wfwef', '1ewfewfewf'),
(2, 'doctor@gmail.com', '1', 'wwef', 'qwdqwd', 'ewfwefwef'),
(3, '123@gmail.com', '1', 'ewfwef', 'efwef', '123456789'),
(4, 'doctor@gmail.com', '1', 'wefewf', 'qwdqwdq', '11'),
(5, 'doctor@gmail.com', '1', 'ewefw', 'wefewf', '12'),
(6, 'doctor@gmail.com', '1', 'ergreg', '1', '1234567890'),
(7, 'admin@jobgate.com', 'c4ca4238a0b923820dcc509a6f75849b', 'wegrhfrg', 'wrgfgf', '21345676'),
(8, 'dinu@gmail.com', '202cb962ac59075b964b07152d234b70', 'asfd', 'asdfsdf', '3245'),
(9, 'lahirumalisha1999@gmail.com', '202cb962ac59075b964b07152d234b70', 'Dinu', 'sasf', '2314'),
(10, '121@wef.wef', 'c4ca4238a0b923820dcc509a6f75849b', 'wewfghj', 'ggeffbntrg', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `organ_bank`
--

CREATE TABLE `organ_bank` (
  `id` int(11) NOT NULL,
  `organ_type` varchar(200) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `nic` varchar(12) NOT NULL
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
-- Dumping data for table `organ_requests`
--

INSERT INTO `organ_requests` (`id`, `ben_id`, `type_of_organ`, `requested_date`) VALUES
(2, 7, 'Pancreas', '2023-01-09 00:00:00');

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
-- Indexes for table `organ_bank`
--
ALTER TABLE `organ_bank`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `auth_donor`
--
ALTER TABLE `auth_donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `auth_hospital`
--
ALTER TABLE `auth_hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `organ_bank`
--
ALTER TABLE `organ_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `organ_requests`
--
ALTER TABLE `organ_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
