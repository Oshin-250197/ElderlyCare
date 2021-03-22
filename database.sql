-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2021 at 11:08 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `sr_no` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `age` int(20) NOT NULL,
  `height` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `disease` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`sr_no`, `name`, `age`, `height`, `weight`, `mobile`, `disease`, `date`, `status`) VALUES
(34, 'Urmila Gaikwad', 35, '', '65', '9483033540', 'Fever', '2021-03-21', 1),
(35, 'Guru Bhai', 35, '', '64', '8588888888', 'Corona', '2021-03-21', 1),
(36, 'Sunil Gaikwad', 45, '', '65', '9999999999', 'Cancer', '2021-03-21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctorlogin`
--

CREATE TABLE `doctorlogin` (
  `id` int(11) NOT NULL,
  `drname` varchar(150) NOT NULL,
  `drpass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorlogin`
--

INSERT INTO `doctorlogin` (`id`, `drname`, `drpass`) VALUES
(1, 'doctor@gmail.com', 'oshin123');

-- --------------------------------------------------------

--
-- Table structure for table `patientprescription`
--

CREATE TABLE `patientprescription` (
  `id` int(255) NOT NULL,
  `patientid` int(255) NOT NULL,
  `disease` varchar(255) NOT NULL,
  `medicinename` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `timeofmed` int(255) NOT NULL,
  `createddate` varchar(255) NOT NULL,
  `createid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientprescription`
--

INSERT INTO `patientprescription` (`id`, `patientid`, `disease`, `medicinename`, `quantity`, `timeofmed`, `createddate`, `createid`) VALUES
(23, 35, 'Corona', 'Covaxin', 3, 1, '2021/03/21 17:03:46', '1190950355'),
(24, 35, 'Corona', 'Fixin', 4, 2, '2021/03/21 17:03:46', '1190950355'),
(25, 34, 'Fever', 'Paracetamol', 4, 2, '2021/03/21 17:24:14', '146480641'),
(26, 36, '', 'Canceraxin', 90, 3, '2021/03/21 17:35:35', '993058308'),
(27, 34, '', 'Nixin', 8, 2, '2021/03/22 08:45:34', '77632165'),
(28, 34, '', 'Govaxin', 6, 1, '2021/03/22 08:45:34', '77632165'),
(29, 34, '', 'Headaxin', 4, 3, '2021/03/22 08:45:34', '77632165'),
(30, 34, '', 'Fevax', 7, 2, '2021/03/22 08:45:34', '77632165'),
(31, 34, '', 'Lomaxin', 8, 1, '2021/03/22 08:45:34', '77632165');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `doctorlogin`
--
ALTER TABLE `doctorlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patientprescription`
--
ALTER TABLE `patientprescription`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `sr_no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `doctorlogin`
--
ALTER TABLE `doctorlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patientprescription`
--
ALTER TABLE `patientprescription`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
