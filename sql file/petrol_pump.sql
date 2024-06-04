-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2024 at 08:20 PM
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
-- Database: `petrol_pump`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_reg`
--

CREATE TABLE `admin_reg` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_reg`
--

INSERT INTO `admin_reg` (`id`, `fname`, `lname`, `email`, `contact`, `address`, `password`) VALUES
(1, 'samreen', 'aqeel', 'samreen@gmail.com', '03213701988', 'karachi', 'admin'),
(2, 'hira', 'aqeel', 'samreen@gmail.com', '03213701988', 'karachi', '$2y$10$Rcxrf62Mn7lUExZmGDnKluuN//EOWgzQ98YO5wfhxT1'),
(3, 'hira', 'aqeel', 'samreen@gmail.com', '03213701988', 'karachi', '$2y$10$Jo9Ul3W2158Zhx.2J5yuMedX06hqZpaS5EY/066BQCY'),
(4, 'djfhuehfe', 'jdfeh', 'hfeh@gmail.com', '37437437', 'dfgfndjfheuwh', '$2y$10$8cJu2COzYXEn.MRsslTxR.bpIxTxu1u5ufHjM5hIStB'),
(5, 'samreen khan', 'aqeel', 'samreen@123gmail.com', '987767637637', 'karachi lyari', '$2y$10$s7MWF3yQiu3B9j8z8I8pSeJCFSQ2TNdmQvu7hyP7eb9'),
(6, 'Sana Muskan', 'jdfeh', 'samreen@gmail.com', '0223344556', 'ksjgnvjfug', '$2y$10$xUQ6Kw4MWo4ZZRttlzrFxOvqnFFChcZSEsp0L9v2Pfr');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `supplierName` varchar(100) NOT NULL,
  `supplierEmail` varchar(100) NOT NULL,
  `supplierPhone` varchar(100) NOT NULL,
  `supplierAddress` varchar(100) NOT NULL,
  `supplierStatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `supplierName`, `supplierEmail`, `supplierPhone`, `supplierAddress`, `supplierStatus`) VALUES
(1, 'jhdudh', 'sdsf@gmailcom', 'ryuy2373', 'kjffijdf', 'Active'),
(2, 'gfyenke', 'jhuylkhfdgr@gmial.com', '98284723764', 'kfjirgrnrpelw', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_reg`
--
ALTER TABLE `admin_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_reg`
--
ALTER TABLE `admin_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
