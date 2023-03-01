-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 03:03 PM
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
-- Database: `sdp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `a_id` int(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `c_id` int(15) NOT NULL,
  `a_id` int(15) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `c_description` varchar(150) NOT NULL,
  `gst_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `d_id` int(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `d_email` varchar(30) NOT NULL,
  `d_password` varchar(30) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `address` varchar(150) NOT NULL,
  `phone_no` decimal(11,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_expert_details`
--

CREATE TABLE `tbl_expert_details` (
  `e_id` int(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `e_verify` tinyint(1) NOT NULL,
  `e_email` varchar(30) NOT NULL,
  `e_password` varchar(30) NOT NULL,
  `phone_no` decimal(11,0) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `e_qualification` varchar(255) NOT NULL,
  `e_experience` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_farmer`
--

CREATE TABLE `tbl_farmer` (
  `f_id` int(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `f_email` varchar(30) NOT NULL,
  `f_password` varchar(20) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `address` varchar(50) NOT NULL,
  `phone_no` decimal(11,0) NOT NULL,
  `farmer_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_farmer`
--

INSERT INTO `tbl_farmer` (`f_id`, `username`, `first_name`, `last_name`, `f_email`, `f_password`, `created_on`, `address`, `phone_no`, `farmer_no`) VALUES
(9, 'demo12', 'kavita', 'choudhary', 'demo12@gmail.co', '45874459', '2023-02-24 09:07:06', '3, vasundh', '9584578458', '5874'),
(12, 'dem458', 'tisha', 'dhola', 'tishdhol234@gma', 'jhdu4885', '2023-02-24 09:08:34', '3, vasundh', '8985697465', '5455');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `order_id` int(15) NOT NULL,
  `f_id` int(15) NOT NULL,
  `e_id` int(15) NOT NULL,
  `product_id` int(20) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` varchar(20) NOT NULL,
  `total_amt` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_orders`
--

INSERT INTO `tbl_orders` (`order_id`, `f_id`, `e_id`, `product_id`, `order_date`, `order_status`, `total_amt`) VALUES
(24, 12, 10, 54879, '2023-02-24 05:55:39', 'deliv', 5000),
(125, 9, 2, 56895, '2023-02-24 05:56:23', 'pendi', 890);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(15) NOT NULL,
  `f_id` int(15) NOT NULL,
  `e_id` int(15) NOT NULL,
  `order_id` int(15) NOT NULL,
  `total_amount` int(10) NOT NULL,
  `payment_mode` varchar(20) NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(15) NOT NULL,
  `f_id` int(15) NOT NULL,
  `c_id` int(15) NOT NULL,
  `d_id` int(15) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `p_image` blob NOT NULL,
  `p_description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_queries`
--

CREATE TABLE `tbl_queries` (
  `query_id` int(15) NOT NULL,
  `f_id` int(15) NOT NULL,
  `q_desc` varchar(100) NOT NULL,
  `q_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_response`
--

CREATE TABLE `tbl_response` (
  `response_id` int(15) NOT NULL,
  `query_id` int(15) NOT NULL,
  `e_id` int(15) NOT NULL,
  `response_details` varchar(100) NOT NULL,
  `response_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reviews`
--

CREATE TABLE `tbl_reviews` (
  `review_id` int(15) NOT NULL,
  `e_id` int(15) NOT NULL,
  `f_id` int(5) NOT NULL,
  `review_details` varchar(100) NOT NULL,
  `review_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ratings` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  MODIFY `a_id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `c_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_dealer`
--
ALTER TABLE `tbl_dealer`
  MODIFY `d_id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_expert_details`
--
ALTER TABLE `tbl_expert_details`
  MODIFY `e_id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_farmer`
--
ALTER TABLE `tbl_farmer`
  MODIFY `f_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `order_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_queries`
--
ALTER TABLE `tbl_queries`
  MODIFY `query_id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_response`
--
ALTER TABLE `tbl_response`
  MODIFY `response_id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_reviews`
--
ALTER TABLE `tbl_reviews`
  MODIFY `review_id` int(15) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
