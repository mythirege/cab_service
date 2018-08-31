-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2018 at 07:46 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cab_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_name`, `username`, `password`) VALUES
('University', 'ucsc', 'ucsc');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `customer_name` varchar(25) NOT NULL,
  `pickup_loc` varchar(25) NOT NULL,
  `drop_loc` varchar(25) NOT NULL,
  `pickup_date` date NOT NULL,
  `pickup_time` time NOT NULL,
  `car_type` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `customer_name`, `pickup_loc`, `drop_loc`, `pickup_date`, `pickup_time`, `car_type`, `message`) VALUES
(1, 'Dinithi', 'Wattala', 'Colombo 05', '2018-07-19', '11:00:00', 1, 'Pick me up soon'),
(2, 'Anna', 'Negombo', 'Colombo 07', '2018-07-19', '11:00:00', 2, 'Hello'),
(3, 'Mary', 'Matara', 'Galle', '2018-07-20', '05:00:00', 1, 'See you soon'),
(4, 'din', 'Colombo 02', 'Colombo 10', '2018-07-19', '14:02:00', 1, 'weeee'),
(5, 'Dinithi', 'Colombo 02', 'Colombo 10', '2018-07-19', '16:00:00', 2, 'Pick me soon!'),
(11, 'Yaz', 'Colombo 02', 'Colombo 10', '2018-08-29', '03:03:00', 4, 'Hiiiiiiii'),
(21, 'Dinithi', 'Colombo 02', 'Colombo 10', '2018-08-16', '00:00:00', 4, 'YOHO'),
(22, 'Dinithi', 'Colombo 02', 'Colombo 10', '2018-08-16', '13:59:00', 2, 'Whats up'),
(23, 'din', 'wee', 'Colombo 10', '2018-08-10', '13:59:00', 4, 'hiii'),
(24, 'din', 'galle', 'Colombo 10', '2018-08-17', '13:00:00', 3, ''),
(25, 'Lizzy', 'Galle', 'Matara', '2018-08-18', '17:00:00', 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `message`) VALUES
(2, 'Ann', 'geethanjali.kurukulasuriya@gmail.com', 'hi'),
(3, 'A.G.R. Kurukulasuriya', 'lizzy@abc.com', 'hi'),
(5, 'a', 'shavindradesilva@gmail.com', 'b'),
(6, 'b', 'ann.dinithi@gmail.com', 'c'),
(7, 'c', 'dasantha@visioncaresl.com', 'd'),
(8, 'c', 'dasantha@visioncaresl.com', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(60) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `email` varchar(60) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `contact_number`, `nic`, `email`, `username`, `password`) VALUES
(2, 'kamal', '0711234567', '951234567V', 'kamal@gmail.com', 'kamal', '1234'),
(3, 'abc', '123', '456', 'abc', 'abc', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driver_id` int(11) NOT NULL,
  `driver_name` varchar(60) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `license_number` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `car_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driver_id`, `driver_name`, `contact_number`, `nic`, `license_number`, `password`, `username`, `car_type`) VALUES
(1111111111, 'amal', '0711234567', '881234567V', '1234', 'driver', 'amal', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_name` text NOT NULL,
  `password` text NOT NULL,
  `user_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_name`, `password`, `user_type`) VALUES
('ucsc', 'ucsc', 'admin'),
('kamal', '1234', 'customer'),
('amal', 'driver', 'driver');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driver_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1111111112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
