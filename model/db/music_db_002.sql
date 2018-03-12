-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2018 at 11:20 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_fname` varchar(255) NOT NULL,
  `admin_lname` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `cust_id` int(11) NOT NULL,
  `cust_fname` varchar(255) NOT NULL,
  `cust_lname` varchar(255) NOT NULL,
  `cust_email` varchar(255) NOT NULL,
  `cust_password` varchar(255) NOT NULL,
  `cust_status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`cust_id`, `cust_fname`, `cust_lname`, `cust_email`, `cust_password`, `cust_status`) VALUES
(1, 'EJ Anton', 'Potot', 'zuming1404@yahoo.com', 'asdf', 1),
(2, 'Carri', 'Yu', 'yu@gmail.com', '12345', 1),
(4, 'asd', 'asd', 'asd@gmasd', 'asd', 1),
(5, 'asd', 'asd', 'asd@asd', 'asd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reservation`
--

CREATE TABLE `tbl_reservation` (
  `res_id` int(11) NOT NULL,
  `res_date` varchar(255) NOT NULL,
  `res_time` varchar(255) NOT NULL,
  `res_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `res_status` int(1) NOT NULL DEFAULT '1',
  `no_of_guest` int(11) NOT NULL,
  `studio_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

CREATE TABLE `tbl_room` (
  `room_id` int(11) NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `room_location` varchar(255) NOT NULL,
  `room_maxperson` int(11) NOT NULL,
  `room_price` decimal(10,2) NOT NULL,
  `room_desc` varchar(255) NOT NULL,
  `room_image` varchar(255) NOT NULL,
  `studio_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schedule`
--

CREATE TABLE `tbl_schedule` (
  `schedule_id` int(11) NOT NULL,
  `studio_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `schedule_sdate` varchar(255) NOT NULL,
  `schedule_stime` varchar(255) NOT NULL,
  `schedule_edate` varchar(255) NOT NULL,
  `schedule_etime` varchar(255) NOT NULL,
  `schedule_status` int(1) NOT NULL DEFAULT '1',
  `schedule_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_studio`
--

CREATE TABLE `tbl_studio` (
  `studio_id` int(11) NOT NULL,
  `subscription_id` int(11) NOT NULL,
  `studio_name` varchar(255) NOT NULL,
  `studio_desc` varchar(255) NOT NULL,
  `studio_contact` varchar(255) NOT NULL,
  `hour_open` varchar(255) NOT NULL,
  `hour_close` varchar(255) NOT NULL,
  `owner_fname` varchar(255) NOT NULL,
  `owner_lname` varchar(255) NOT NULL,
  `owner_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscription`
--

CREATE TABLE `tbl_subscription` (
  `subscription_id` int(11) NOT NULL,
  `subscription_name` varchar(255) NOT NULL,
  `subscription_price` decimal(10,2) NOT NULL,
  `subscription_status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subscription`
--

INSERT INTO `tbl_subscription` (`subscription_id`, `subscription_name`, `subscription_price`, `subscription_status`) VALUES
(1, 'Monthly', '600.00', 1),
(2, 'Quarterly', '2300.00', 1),
(3, 'Semestral', '3500.00', 1),
(4, 'Annual', '7000.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

CREATE TABLE `tbl_transaction` (
  `transaction_id` int(11) NOT NULL,
  `studio_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `transaction_status` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `tbl_reservation`
--
ALTER TABLE `tbl_reservation`
  ADD PRIMARY KEY (`res_id`),
  ADD KEY `studio_id` (`studio_id`),
  ADD KEY `customer_id` (`customer_id`,`room_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `studio_id` (`studio_id`);

--
-- Indexes for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  ADD PRIMARY KEY (`schedule_id`),
  ADD KEY `studio_id` (`studio_id`,`room_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `tbl_studio`
--
ALTER TABLE `tbl_studio`
  ADD PRIMARY KEY (`studio_id`),
  ADD KEY `subscription_id` (`subscription_id`);

--
-- Indexes for table `tbl_subscription`
--
ALTER TABLE `tbl_subscription`
  ADD PRIMARY KEY (`subscription_id`);

--
-- Indexes for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `studio_id` (`studio_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_reservation`
--
ALTER TABLE `tbl_reservation`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_subscription`
--
ALTER TABLE `tbl_subscription`
  MODIFY `subscription_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_reservation`
--
ALTER TABLE `tbl_reservation`
  ADD CONSTRAINT `tbl_reservation_ibfk_1` FOREIGN KEY (`studio_id`) REFERENCES `tbl_studio` (`studio_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_reservation_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `tbl_customer` (`cust_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_reservation_ibfk_3` FOREIGN KEY (`room_id`) REFERENCES `tbl_room` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD CONSTRAINT `tbl_room_ibfk_1` FOREIGN KEY (`studio_id`) REFERENCES `tbl_studio` (`studio_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  ADD CONSTRAINT `tbl_schedule_ibfk_1` FOREIGN KEY (`studio_id`) REFERENCES `tbl_studio` (`studio_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_schedule_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `tbl_room` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_studio`
--
ALTER TABLE `tbl_studio`
  ADD CONSTRAINT `tbl_studio_ibfk_1` FOREIGN KEY (`subscription_id`) REFERENCES `tbl_subscription` (`subscription_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD CONSTRAINT `tbl_transaction_ibfk_1` FOREIGN KEY (`studio_id`) REFERENCES `tbl_studio` (`studio_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
