-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2023 at 06:57 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
('1', 'admin', 'admin12345');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `Service` varchar(20) DEFAULT NULL,
  `Doctors` varchar(20) DEFAULT NULL,
  `Name` varchar(40) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Address` varchar(50) NOT NULL,
  `Date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `mobile` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`Service`, `Doctors`, `Name`, `Email`, `Address`, `Date`, `time`, `mobile`, `status`) VALUES
('Pulse oximete', ' Dr. Toshar', 'shashi', 's@gmail.com', 'luniyapura', '2023-01-12', '14:03:00', '1111111123', 'Selected'),
('Nebulizer', ' Dr. Toshar', 'MAYANK', 'MAYANK@GMAIL.COM', 'abu', '2023-01-23', '12:02:00', '1212121212', 'Selected'),
('Skin Causes', ' Dr. Toshar', 'harshit', 'h@gmail.com', 'market', '2023-01-19', '09:38:00', '2020120202', 'Rejected'),
('defibrillato', ' Dr. Toshar', 'raj ', 'r@gmail.com', '', '2023-01-12', '13:58:00', '2222222222', 'Rejected'),
('Skin Causes', ' Dr.parmar', 'havik aagarwal', 'gehlot@gmail.com', '', '2023-01-13', '13:55:00', '4444444444', '0'),
('Sonography', ' Dr. Toshar', 'bhawana', 'b@gmail.com', 'market', '2023-01-17', '10:37:00', '4444444445', 'Selected'),
('Sonography', ' Dr. Toshar', 'bharat', 'gfdf@gamil.com', 'abu', '2023-01-24', '14:30:00', '5252525252', 'Selected'),
('Skin Causes', ' Dr.parmar', 'havik aagarwal', 'havik@gmail.com', '', '2023-01-12', '13:11:00', '5555555888', '0'),
('Pulse oximete', ' Dr. Toshar', 'dsabfak', 'aa@gmail.com', '', '2023-01-12', '13:52:00', '5566666666', '0'),
('Nebulizer', ' Dr. Toshar', 'laxman gehlot', 'b@gmail.com', '', '2022-05-04', '14:57:00', '5938529538', '0'),
('ECG', ' Dr. Toshar', 'MM', 'M@GMAIL.COM', 'abu', '2023-01-23', '11:55:00', '7777777775', ''),
('Pulse oximete', ' Dr. Toshar', 'shashi', 's@gmail.com', 'amthala', '2023-01-23', '15:31:00', '8888888885', 'Selected'),
('Sonography', ' Dr. Toshar', 'll', 'l@gmail.com', 'mre', '2023-01-17', '12:01:00', '8888888888', ''),
('Sonography', ' Dr. Toshar', 'aashu', 'ashu@gmail.com', 'luniyapura', '2023-01-16', '11:30:00', '9549477286', 'Selected'),
('Pulse oximete', ' Dr. Toshar', 'nayan bairwa', 'nayan@gmail.com', '', '2023-01-14', '13:06:00', '9549477287', '0'),
('Heart Attack', ' Dr. Toshar', 'ravindra Kumar', 'ravindra@gmail.com', '', '2022-12-09', '01:00:00', '9876543215', '0'),
('Skin Causes', ' Dr.parmar', 'ritika yadav', 'ritika@gmail.com', '', '2022-12-17', '11:04:00', '9884563218', '0'),
('Sonography', ' Dr. Toshar', 'shivansh bhatnagar', 'shivansh@gmail.com', 'agra bhata', '2023-01-17', '09:55:00', '9977643111', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`mobile`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
