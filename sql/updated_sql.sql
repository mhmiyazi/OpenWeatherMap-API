-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2021 at 11:02 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tech_evan_weather`
--

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `temperature` int(11) NOT NULL,
  `humidity` int(10) NOT NULL,
  `date_search` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `name`, `description`, `temperature`, `humidity`, `date_search`) VALUES
(1, 'London', 'clear sky', 11, 90, '2021-10-17 20:44:47'),
(2, 'Binan', 'overcast clouds', 26, 86, '2021-10-17 20:45:04'),
(3, 'Dhaka', 'sunny', 27, 89, '2021-09-17 20:45:14'),
(4, 'Dhaka', 'drizzle', 27, 89, '2021-10-17 20:45:17'),
(5, 'New York', 'broken clouds', 16, 58, '2021-09-17 20:45:27'),
(6, 'New York', 'broken clouds', 16, 58, '2021-09-17 20:45:35'),
(7, 'New York', 'broken clouds', 16, 58, '2021-10-17 20:46:19'),
(8, 'Manila', 'broken clouds', 27, 78, '2021-10-17 20:46:25'),
(9, 'Manila', 'broken clouds', 27, 78, '2021-10-17 20:46:29'),
(10, 'Manila', 'broken clouds', 27, 78, '2021-10-17 20:46:34'),
(11, 'Jeddah', 'clear sky', 30, 74, '2021-10-17 20:56:56'),
(12, 'Tehran', 'few clouds', 18, 27, '2021-10-17 20:57:08'),
(13, 'Dhaka', 'moderate rain', 27, 89, '2021-10-17 20:57:18'),
(14, 'Dhaka', 'moderate rain', 27, 89, '2021-10-17 20:59:11'),
(15, 'London', 'clear sky', 11, 91, '2021-10-17 21:01:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
