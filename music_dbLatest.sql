-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2018 at 10:04 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `admin_username` varchar(255) NOT NULL,
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
  `studio_id` int(11) NOT NULL,
  `room_picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schedule`
--

CREATE TABLE `tbl_schedule` (
  `schedule_id` int(11) NOT NULL,
  `studio_id` int(11) NOT NULL,
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
  `studio_address` varchar(255) NOT NULL,
  `studio_contact` varchar(255) NOT NULL,
  `hour_open` varchar(255) NOT NULL,
  `hour_close` varchar(255) NOT NULL,
  `owner_fname` varchar(255) NOT NULL,
  `owner_lname` varchar(255) NOT NULL,
  `owner_email` varchar(255) NOT NULL,
  `owner_password` varchar(255) NOT NULL,
  `subscription_start` date NOT NULL,
  `subscription_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_studio`
--

INSERT INTO `tbl_studio` (`studio_id`, `subscription_id`, `studio_name`, `studio_desc`, `studio_address`, `studio_contact`, `hour_open`, `hour_close`, `owner_fname`, `owner_lname`, `owner_email`, `owner_password`, `subscription_start`, `subscription_end`) VALUES
(1, 1, 'jh,hhjkjhk', 'hjkjhkjh', 'jhkjhkj', 'hkjhkjhkh', '02:30', '13:04', 'qweqweqewqe', 'qweqweq', 'eqwewqewq@afsqasfafas', '', '2018-03-15', '2018-04-15'),
(2, 1, 'jh,hhjkjhk', 'hjkjhkjh', 'jhkjhkj', 'hkjhkjhkh', '02:30', '13:04', 'qweqweqewqe', 'qweqweq', 'eqwewqewq@afsqasfafas', '', '2018-03-15', '2018-04-15'),
(3, 2, 'jh,hhjkjhk', 'hjkjhkjh', 'jhkjhkj', 'hkjhkjhkh', '02:30', '13:04', 'qweqweqewqe', 'qweqweq', 'test@gmail.com', 'test', '2018-03-15', '2018-07-15'),
(4, 3, 'jh,hhjkjhk', 'hjkjhkjh', 'jhkjhkj', 'hkjhkjhkh', '02:30', '13:04', 'qweqweqewqe', 'qweqweq', 'eqwewqewq@afsqasfafas', '', '2018-03-15', '2018-09-15'),
(5, 4, 'jh,hhjkjhk', 'hjkjhkjh', 'jhkjhkj', 'hkjhkjhkh', '02:30', '13:04', 'qweqweqewqe', 'qweqweq', 'eqwewqewq@afsqasfafas', '', '2018-03-15', '2019-03-15');

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
  ADD PRIMARY KEY (`res_id`);

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
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `tbl_studio`
--
ALTER TABLE `tbl_studio`
  ADD PRIMARY KEY (`studio_id`);

--
-- Indexes for table `tbl_subscription`
--
ALTER TABLE `tbl_subscription`
  ADD PRIMARY KEY (`subscription_id`);

--
-- Indexes for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD PRIMARY KEY (`transaction_id`);

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
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `tbl_studio`
--
ALTER TABLE `tbl_studio`
  MODIFY `studio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- Constraints for table `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD CONSTRAINT `tbl_room_ibfk_1` FOREIGN KEY (`studio_id`) REFERENCES `tbl_studio` (`studio_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
