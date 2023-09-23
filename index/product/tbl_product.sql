-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2023 at 04:55 PM
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
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(15) NOT NULL,
  `f_id` int(15) NOT NULL,
  `c_id` int(15) NOT NULL,
  `d_id` int(15) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_type` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(30) NOT NULL,
  `p_image` varchar(30) NOT NULL,
  `p_description` varchar(100) NOT NULL,
  `p_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `f_id`, `c_id`, `d_id`, `product_name`, `product_type`, `price`, `quantity`, `p_image`, `p_description`, `p_status`) VALUES
(1, 1, 2, 1, 'abc', 'seasonal seeds', 654, 5, '', 'ewrff', 'DEACTIVE'),
(2, 2, 2, 2, 'xcv', 'seasonal seeds', 987, 0, '', 'asd', 'DEACTIVE'),
(3, 0, 2, 0, 'asdf', 'seasonal seeds', 12, 23, '', 'sdf', 'ACTIVE'),
(8, 0, 2, 0, 'ac', 'seasonal seeds', 213, 2, '', 'sda', 'ACTIVE'),
(11, 11, 1, 11, 'rajnigandha bulb', 'flower seed', 200, 3, 'bf(1).jpeg', 'dasascdsdddcdacsccccccccccccccccccccccccccccccccccccccccccccccccc', 'active'),
(12, 11, 1, 11, 'lavinder', 'flower seed', 200, 3, 'bf(2).jpeg', 'llllllllllllllll', ''),
(13, 13, 1, 13, 'lotus', 'flower seed', 120, 2, 'bf(3).jpeg', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', ''),
(15, 1, 3, 1, 'ggg', 'tools and equipments', 20, 4, '', 'vvvvvv', ''),
(16, 1, 3, 1, 'ggg', 'tools and equipments', 20, 4, '', 'vvvvvv', ''),
(17, 0, 3, 0, '', 'tools and equipments', 0, 0, '', '', ''),
(18, 0, 3, 0, '', 'tools and equipments', 0, 0, '', '', ''),
(19, 0, 4, 0, '', 'bio-fertilizers', 0, 0, '', '', ''),
(20, 0, 4, 0, '', 'bio fertilizers', 0, 0, '', '', ''),
(21, 0, 4, 0, '', 'bio-fertilizers', 0, 0, '', '', ''),
(22, 0, 4, 0, '', 'bio fertilizers', 0, 0, '', '', ''),
(23, 0, 5, 0, '', 'chemical fertilizers', 0, 0, '', '', ''),
(24, 0, 5, 0, '', 'chemical fertilizers', 0, 0, '', '', ''),
(25, 0, 5, 0, '', 'chemical fertilizers', 0, 0, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
