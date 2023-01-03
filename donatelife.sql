-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 01:46 PM
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
-- Database: `donatelife`
--

-- --------------------------------------------------------

--
-- Table structure for table `beneficiary`
--

CREATE TABLE `beneficiary` (
  `id` int(11) NOT NULL,
  `fullname` varchar(21) NOT NULL,
  `tpnumber` int(21) NOT NULL,
  `NIC` int(21) NOT NULL,
  `dob` varchar(21) NOT NULL,
  `gender` varchar(21) NOT NULL,
  `BloodGroup` varchar(21) NOT NULL,
  `district` varchar(21) NOT NULL,
  `address` varchar(21) NOT NULL,
  `typeoforgan` varchar(21) NOT NULL,
  `email` varchar(21) NOT NULL,
  `comments` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beneficiary`
--

INSERT INTO `beneficiary` (`id`, `fullname`, `tpnumber`, `NIC`, `dob`, `gender`, `BloodGroup`, `district`, `address`, `typeoforgan`, `email`, `comments`) VALUES
(1, 'sdf', 234, 234, '2022-08-09', 'Female', '', 'Hambantota', 'sdf', 'Liver', 'sdf', 'pdf'),
(2, 'sdf', 234, 234, '2022-08-05', 'Male', '', 'Hambantota', 'sdf', 'Liver', 'wer', 'pdf'),
(3, 'sfasd', 23, 345, '2022-08-09', 'Female', '', 'Matara', 'werqw', 'Lung', 'werw', 'w3re'),
(4, 'asd', 123, 123, '2022-08-16', 'Male', '', 'Hambantota', 'sad', 'Heart', 'saf', 'asd'),
(5, 'awer', 2134, 34, '2022-12-07', 'Male', 'Lung', 'District', 'wer', 'Liver', 'dsaf@gmail.com', 'ef'),
(6, 'dinu', 123456, 123456, '2022-11-02', 'Male', 'Heart', 'Jafna', 'asd', 'Kidney', 'asd@gmil.com', 'sdfsdf'),
(7, 'ajsdhf', 2314, 234, '2022-12-08', 'Female', 'Heart', 'Hambantota', 'sadf', 'Lung', 'sdf@gbb.efg', 'fghdfgh'),
(8, 'mg', 64535, 765, '2023-01-19', 'Male', 'Heart', 'Gampaha', 'hj', 'Heart', 'mvm', 'high'),
(9, 'asdf', 123, 123, '2023-01-06', '', 'Heart', 'Matara', 'asdf', 'Liver', 'asd@gmml.nfk', 'sad');

-- --------------------------------------------------------

--
-- Table structure for table `doner`
--

CREATE TABLE `doner` (
  `id` int(11) NOT NULL,
  `fname` varchar(21) NOT NULL,
  `telenumber` int(21) NOT NULL,
  `NIC` int(21) NOT NULL,
  `Dob` varchar(21) NOT NULL,
  `gender` varchar(21) NOT NULL,
  `district` varchar(21) NOT NULL,
  `address` varchar(21) NOT NULL,
  `typeoforgan` varchar(21) NOT NULL,
  `nomineename` varchar(21) NOT NULL,
  `nomineephonenumber` int(21) NOT NULL,
  `email` varchar(21) NOT NULL,
  `comments` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doner`
--

INSERT INTO `doner` (`id`, `fname`, `telenumber`, `NIC`, `Dob`, `gender`, `district`, `address`, `typeoforgan`, `nomineename`, `nomineephonenumber`, `email`, `comments`) VALUES
(1, 'sdsd', 23, 12, '2022-08-10', 'Female', 'Hambantota', 'sdf', 'Heart', 'sdf', 23, 'wer', 'sad'),
(2, 'sad', 123, 123, '2022-08-19', 'Male', 'Matara', 'WDD', 'Heart', 'QWE', 213, 'SDAC', 'SDF'),
(3, 'dinu', 123, 2000, '2022-08-04', 'Male', 'Hambantota', 'awi', 'Liver', 'mm', 123, 'asdw', 'asd'),
(4, 'asd', 23, 2312, '2022-08-05', 'Male', 'Hambantota', 'weq', 'Liver', 'ad', 234, 'ads', 'sd'),
(5, 'ahsdb', 92183, 2321, '2022-08-05', 'Male', 'Hambantota', 'asd', 'Heart', 'ads', 123, 'asd', 'suds'),
(6, 'sdf', 345, 213, '2022-08-13', 'Male', 'Hambantota', 'dfghfb', 'Liver', 'sdfdsfvbnghmmr', 453, 'fdbdfb', 'fads'),
(7, 'sdf', 4566788, 234, '2022-08-05', 'Female', 'Hambantota', 'gfhjn', 'Heart', 'vds', 345, 'dgs', 'doc'),
(8, 'zdf', 234, 234, '2022-08-13', 'Female', 'Hambantota', 'sdf', 'Lung', 'sdf', 32, 'sfdgg', 'pdf'),
(9, 'thisra', 777777, 823765, '2022-12-01', 'Male', 'Hambantota', 'leiyrgf', 'Heart', 'dinu', 82375, 'aaa@gmail.com', 'liuergh'),
(10, 'qqqq', 111, 111, '2022-12-01', 'Male', 'Kaluthara', 'wedfe', 'Liver', 'www', 333, 'qqq@qqq.com', 'aaa'),
(11, 'qqqq', 111, 111, '2022-12-01', 'Male', 'Kaluthara', 'wedfe', 'Liver', 'www', 333, 'qqq@qqq.com', 'aaa'),
(12, 'acjd', 234, 234, '2022-12-09', 'Male', 'Monaragala', 'ttttttttt', 'Heart', 'ffffff', 234, 'ddddd@gmail.com', 'h&j'),
(13, 'chami', 234, 234, '2022-12-13', 'Male', 'District', 'awi', 'Liver', 'wer', 444, 'asd@gmail.com', 'dog'),
(14, 'chami', 234, 234, '2022-12-13', 'Male', 'District', 'awi', 'Liver', 'wer', 444, 'asd@gmail.com', 'dog'),
(15, 'asd', 123, 123, '2022-12-02', 'Male', 'Matara', 'qwe', 'Heart', 'dsfv', 324, 'asd@HGREL.COM', 'pdf'),
(16, 'sdg', 234, 345, '2023-01-11', 'Male', 'Matara', 'sdafs', 'Heart', 'sdg', 1234, 'asdf@dsf', 'sad');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_sign`
--

CREATE TABLE `hospital_sign` (
  `hospital_id` int(21) DEFAULT NULL,
  `hospital_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `tp_no` int(11) NOT NULL,
  `password` varchar(21) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital_sign`
--

INSERT INTO `hospital_sign` (`hospital_id`, `hospital_name`, `email`, `address`, `tp_no`, `password`) VALUES
(2342343, 'ergergrg', 'doctor@gmail.com', '24234234', 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `logandreg`
--

CREATE TABLE `logandreg` (
  `id` int(21) NOT NULL,
  `name` varchar(21) NOT NULL,
  `email` varchar(21) NOT NULL,
  `telenumber` int(21) NOT NULL,
  `password` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logandreg`
--

INSERT INTO `logandreg` (`id`, `name`, `email`, `telenumber`, `password`) VALUES
(1, 'asd', 'sdf', 34, 'aaa'),
(2, 'wqe', 'sdf@gmail.com', 234, 'aaa'),
(3, 'asd', 'asd@gmail.com', 123, 'qqq'),
(4, 'sdf', 'fahjsbf@gmail,com', 123, 'qqq'),
(5, 'xzc', 'xcv@gmail.com', 23, 'rrr'),
(6, 'vvvv', 'vvv@vvv.vvv', 5555, '12345'),
(7, 'annn', 'annn@ann.ann', 9879879, '8888'),
(8, 'sdfg', 'dfsg@efw', 345, '123'),
(9, 'Accc', 'acc@acc.acc', 4567, '4567'),
(10, 'dinuwan', 'dinu@gmail.com', 7777, '777'),
(11, 'fgh', 'dg@g.moiyh', 567, '567'),
(12, 'ammm', 'amm@amm', 123, '123'),
(13, 'abb', 'abb@hag', 123, '345'),
(14, 'qwe', 'asd@gmail.com', 123, '123'),
(15, 'wefwef', '23213@rfewf.d', 123123, '1'),
(16, 'ruwan', '123@gmail.pwe', 123123, '1'),
(17, 'ruwan', '123@gmail.pwe', 123123, '1'),
(18, 'doctor@gmail.com', 'doctor@gmail.com', 23234, '1');

-- --------------------------------------------------------

--
-- Table structure for table `logdoner`
--

CREATE TABLE `logdoner` (
  `id` int(21) NOT NULL,
  `name` varchar(21) NOT NULL,
  `email` varchar(21) NOT NULL,
  `telenumber` int(21) NOT NULL,
  `password` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logdoner`
--

INSERT INTO `logdoner` (`id`, `name`, `email`, `telenumber`, `password`) VALUES
(1, 'ldfhg', 'abcd@abcd.com', 88888, '123'),
(2, 'qwe', 'asd@dd.ghg', 234, '123'),
(3, 'hg', 'dfg@gng.vv', 435, '123'),
(4, 'dinuwan', 'dinu@gmail.com', 776655, '12345'),
(5, 'tgrttrh', '123@gmail.p', 345345354, '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tnum` int(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beneficiary`
--
ALTER TABLE `beneficiary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doner`
--
ALTER TABLE `doner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logandreg`
--
ALTER TABLE `logandreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logdoner`
--
ALTER TABLE `logdoner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beneficiary`
--
ALTER TABLE `beneficiary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doner`
--
ALTER TABLE `doner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `logandreg`
--
ALTER TABLE `logandreg`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `logdoner`
--
ALTER TABLE `logdoner`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
