-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2020 at 07:18 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(500) NOT NULL,
  `productname` varchar(30) NOT NULL,
  `pdate` varchar(30) NOT NULL,
  `ddate` varchar(30) NOT NULL,
  `pairs` varchar(30) NOT NULL,
  `amount` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `phone`, `email`, `address`, `productname`, `pdate`, `ddate`, `pairs`, `amount`) VALUES
(0, 'Vijay Sharma', '07738 837820', 'ys9896890@gmail.com', 'Jogeshwari east', 'ssss', '08/05/2020', '8/7/2020', '1', '300'),
(0, 'Vijay Sharma', '07738 837820', 'vs97532@gmail.com', 'Jogeshwari east', '567', '08/29/2020', '8/31/2020', '3', '300?'),
(0, 'Vijay Sharma', '07738 837820', 'iphoneapple10112@gmail.com', 'Jogeshwari east', 'ssss', '08/28/2020', '8/30/2020', '3', '300?;'),
(0, 'Vijay Sharma', '07738 837820', 'iphoneapple10112@gmail.com', 'Jogeshwari east', 'ssss', '', '', '1', '300 INR'),
(0, 'Vijay Sharma', '07738 837820', 'vs97532@gmail.com', 'Jogeshwari east', '123', '08/19/2020', '8/21/2020', '1', '300 INR'),
(0, 'Vijay Sharma', '07738 837820', 'vs97532@gmail.com', 'Jogeshwari east', '324545', '08/24/2020', '8/26/2020', '3', '300 INR'),
(0, '123456', '07738 837820', 'iphoneapple10112@gmail.com', 'Jogeshwari east', 'sss', '08/13/2020', '8/15/2020', '2', '300 INR');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
