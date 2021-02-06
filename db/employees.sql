-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2021 at 08:30 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employees`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `contact_number` int(15) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `monthly_salary` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `first_name`, `last_name`, `email_address`, `contact_number`, `job_title`, `monthly_salary`) VALUES
(1, 'Joanna Mariz', 'Alcachupas', 'joanna@gmail.com', 2147483647, 'Asst. Instructor', 15000),
(3, 'Ramil', 'Kaharian', 'ramon@gmail.com', 2147483647, 'Asst. Instructor', 14000),
(4, 'Ranniel', 'Kaharian', 'ranniel@gmail.com', 909255822, 'Delivery', 1200),
(6, 'Aneng', 'Di ko alam', 'aneng@gmail.com', 0, 'Watcher', 100),
(7, 'Ok', 'ok', 'ok@gmail.com', 0, 'ok', 200),
(8, '1', '1', '1', 1, '1', 1),
(9, '2', '2', '2', 2, '2', 2),
(10, '3', '3', '3', 3, '3', 3),
(11, '4', '4', '4', 4, '4', 4),
(12, '5', '5', '5', 5, '5', 5),
(13, '6', '6', '6', 6, '6', 6),
(14, '7', '7', '7', 7, '7', 7),
(15, '8', '8', '8', 8, '8', 8),
(16, '9', '9', '9', 9, '9', 9),
(17, '1', '1', '1', 1, '1', 1),
(18, 'Ramon', 'Kaharian', 'ramon@gmail.com', 99999999, 'Construction', 800);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
