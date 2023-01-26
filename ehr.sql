-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2023 at 08:55 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `ehr`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `CPassword` varchar(50) NOT NULL,
  `Phone_nr` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`FirstName`, `LastName`, `UserName`, `Email`, `Password`, `CPassword`, `Phone_nr`) VALUES
('d', 'd', 'dd', 'a@gmail.com', '123', '123', 12),
('d', 'c', 'dc', 'a@gmail.com', '147', '147', 12),
('f', 'f', 'ff', 'f@gmail.com', '456', '456', 45);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `Name` varchar(50) NOT NULL,
  `Emailp` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Insurance` varchar(50) NOT NULL,
  `Phonep` int(50) NOT NULL,
  `Gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`Name`, `Emailp`, `Address`, `Insurance`, `Phonep`, `Gender`) VALUES
('Madalina', 'mada@gmail.com', 'Balti', '1', 1, '1'),
('Madali', 'mada@gmail.com', 'Balti', '2', 1, '1'),
('Madali', 'mada@gmail.com', 'Balti', '2', 1, '1'),
('cd', 'cd@gmail.com', 'ds', '', 45, 'on'),
('cd', 'cd@gmail.com', 'dad', '', 50, 'on'),
('cd', 'cd@gmail.com', 'dad', '', 50, 'on');
COMMIT;