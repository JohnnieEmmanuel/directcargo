-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 02:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `directcargo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admincontrol`
--

CREATE TABLE `admincontrol` (
  `admin_id` int(11) NOT NULL,
  `admin_fullname` text NOT NULL,
  `admin_email` varchar(30) DEFAULT NULL,
  `admin_password` varchar(30) DEFAULT NULL,
  `admin_phno` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admincontrol`
--

INSERT INTO `admincontrol` (`admin_id`, `admin_fullname`, `admin_email`, `admin_password`, `admin_phno`) VALUES
(2, 'Johnnie Emmanuel', 'directcargo.help@gmail.com', 'test123', '+1(260)2094563');

-- --------------------------------------------------------

--
-- Table structure for table `tracks`
--

CREATE TABLE `tracks` (
  `track_no` int(11) NOT NULL,
  `admin_id` int(30) NOT NULL,
  `tracking_id` varchar(11) NOT NULL,
  `to_location` text NOT NULL,
  `from_location` text NOT NULL,
  `current_location` text NOT NULL,
  `goods_description` text NOT NULL,
  `freight_type` text NOT NULL,
  `status` text NOT NULL,
  `amount` int(11) NOT NULL,
  `to_country` text NOT NULL,
  `from_country` text NOT NULL,
  `weight` int(11) NOT NULL,
  `ship_date` date NOT NULL DEFAULT current_timestamp(),
  `delivery_date` date NOT NULL DEFAULT current_timestamp(),
  `receiver_name` text NOT NULL,
  `receiver_phone_number` varchar(20) NOT NULL,
  `sender_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tracks`
--

INSERT INTO `tracks` (`track_no`, `admin_id`, `tracking_id`, `to_location`, `from_location`, `current_location`, `goods_description`, `freight_type`, `status`, `amount`, `to_country`, `from_country`, `weight`, `ship_date`, `delivery_date`, `receiver_name`, `receiver_phone_number`, `sender_name`) VALUES
(1, 2, 'D36661923C9', '75 SHOLANKE STREET, AKOKA- YABA, LAGOS', '1 ABBEY STREET, AKPAJO ELEME ', 'NIGERIA', 'FLOWER,CHEQUE,SHOES', 'AIR', 'DISPATCHED', 550, 'NIGERIA', 'GHANA', 22, '2022-05-08', '2022-05-14', 'NNEOMA ODIRIH', '(234)8030587879', 'IDARA OBONG UDOMAH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admincontrol`
--
ALTER TABLE `admincontrol`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tracks`
--
ALTER TABLE `tracks`
  ADD PRIMARY KEY (`track_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admincontrol`
--
ALTER TABLE `admincontrol`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tracks`
--
ALTER TABLE `tracks`
  MODIFY `track_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
