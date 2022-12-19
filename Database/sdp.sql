-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2022 at 06:51 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `a_id` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `c_id` int(5) NOT NULL,
  `a_id` int(5) NOT NULL,
  `c_name` varchar(10) NOT NULL,
  `c_description` varchar(15) NOT NULL,
  `gst_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`c_id`, `a_id`, `c_name`, `c_description`, `gst_no`) VALUES
(1, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dealer`
--

CREATE TABLE `tbl_dealer` (
  `d_id` int(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `first_name` varchar(10) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `d_email` varchar(15) NOT NULL,
  `d_password` varchar(20) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `address` varchar(50) NOT NULL,
  `phone_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_expert_details`
--

CREATE TABLE `tbl_expert_details` (
  `e_id` int(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `first_name` varchar(10) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `e_verify` tinyint(1) NOT NULL,
  `e_email` varchar(15) NOT NULL,
  `e_password` varchar(20) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `e_qualification` varchar(20) NOT NULL,
  `e_experience` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_farmer`
--

CREATE TABLE `tbl_farmer` (
  `f_id` int(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `f_email` varchar(15) NOT NULL,
  `f_password` varchar(20) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `address` varchar(10) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `farmer_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `order_id` int(5) NOT NULL,
  `f_id` int(5) NOT NULL,
  `e_id` int(5) NOT NULL,
  `product_id` int(5) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` varchar(5) NOT NULL,
  `total_amt` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(5) NOT NULL,
  `f_id` int(5) NOT NULL,
  `e_id` int(5) NOT NULL,
  `order_id` int(5) NOT NULL,
  `total_amount` int(10) NOT NULL,
  `payment_mode` varchar(15) NOT NULL,
  `payment_status` varchar(5) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(5) NOT NULL,
  `f_id` int(5) NOT NULL,
  `c_id` int(5) NOT NULL,
  `d_id` int(5) NOT NULL,
  `product_name` varchar(15) NOT NULL,
  `price` float NOT NULL,
  `p_image` blob NOT NULL,
  `p_description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_queries`
--

CREATE TABLE `tbl_queries` (
  `query_id` int(5) NOT NULL,
  `f_id` int(5) NOT NULL,
  `q_desc` varchar(50) NOT NULL,
  `q_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_response`
--

CREATE TABLE `tbl_response` (
  `response_id` int(5) NOT NULL,
  `query_id` int(5) NOT NULL,
  `e_id` int(5) NOT NULL,
  `response_details` varchar(50) NOT NULL,
  `response_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reviews`
--

CREATE TABLE `tbl_reviews` (
  `review_id` int(5) NOT NULL,
  `e_id` int(5) NOT NULL,
  `f_id` int(5) NOT NULL,
  `review_details` varchar(50) NOT NULL,
  `review_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ratings` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`a_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `a_id` (`a_id`);

--
-- Indexes for table `tbl_dealer`
--
ALTER TABLE `tbl_dealer`
  ADD PRIMARY KEY (`d_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `phone_no` (`phone_no`);

--
-- Indexes for table `tbl_expert_details`
--
ALTER TABLE `tbl_expert_details`
  ADD PRIMARY KEY (`e_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `phone_no` (`phone_no`);

--
-- Indexes for table `tbl_farmer`
--
ALTER TABLE `tbl_farmer`
  ADD PRIMARY KEY (`f_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `phone_no` (`phone_no`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`order_id`),
  ADD UNIQUE KEY `f_id` (`f_id`),
  ADD UNIQUE KEY `e_id` (`e_id`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD UNIQUE KEY `f_id` (`f_id`),
  ADD UNIQUE KEY `e_id` (`e_id`),
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `f_id` (`f_id`),
  ADD UNIQUE KEY `c_id` (`c_id`),
  ADD UNIQUE KEY `d_id` (`d_id`);

--
-- Indexes for table `tbl_queries`
--
ALTER TABLE `tbl_queries`
  ADD PRIMARY KEY (`query_id`),
  ADD UNIQUE KEY `f_id` (`f_id`);

--
-- Indexes for table `tbl_response`
--
ALTER TABLE `tbl_response`
  ADD PRIMARY KEY (`response_id`),
  ADD UNIQUE KEY `query_id` (`query_id`),
  ADD UNIQUE KEY `e_id` (`e_id`);

--
-- Indexes for table `tbl_reviews`
--
ALTER TABLE `tbl_reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD UNIQUE KEY `e_id` (`e_id`),
  ADD UNIQUE KEY `f_id` (`f_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `c_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
