-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2018 at 08:44 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `porsche_in`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `type` binary(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `type`) VALUES
(1, 'shaheer', 'admin', 'admin123', 0x31);

-- --------------------------------------------------------

--
-- Table structure for table `dispatch`
--

CREATE TABLE `dispatch` (
  `id` int(255) NOT NULL,
  `i_id` int(255) NOT NULL,
  `d_name` varchar(255) NOT NULL,
  `d_qty` int(255) NOT NULL,
  `fk_ga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dispatch`
--

INSERT INTO `dispatch` (`id`, `i_id`, `d_name`, `d_qty`, `fk_ga`) VALUES
(60, 25, 'cap', 2, 37),
(61, 26, 'Key chain', 2, 37),
(62, 28, 'Mug', 2, 37),
(63, 29, 'Shirt', 1, 37),
(64, 30, 'Hot Mug', 1, 37),
(65, 25, 'Cap', 5, 38),
(66, 26, 'Key chain', 6, 38),
(67, 28, 'Mug', 4, 38),
(68, 29, 'Shirt', 6, 38),
(69, 25, 'Cap', 50, 39),
(70, 27, 'Bottle', 50, 39),
(71, 29, 'Shirt', 50, 39),
(72, 25, 'Cap', 150, 40),
(73, 28, 'Mug', 150, 40),
(74, 30, 'Hot Mug', 150, 40),
(75, 29, 'Shirt', 300, 40),
(76, 25, 'Cap', 1, 41),
(77, 26, 'Key chain', 2, 41),
(78, 29, 'Shirt', 3, 41),
(79, 30, 'Hot Mug', 50, 42),
(80, 28, 'Mug', 5, 43),
(82, 25, 'Cap', 1, 44),
(83, 26, 'Key chain', 2, 44),
(84, 29, 'Shirt', 3, 44);

-- --------------------------------------------------------

--
-- Table structure for table `giveaway`
--

CREATE TABLE `giveaway` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `recip` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `giveaway`
--

INSERT INTO `giveaway` (`id`, `name`, `recip`, `purpose`) VALUES
(37, 'Goodie bag', 'Shaheer', 'Temp'),
(38, 'Goodie bag', 'temp', 'temp'),
(39, 'Goodie bag', 'Demo', 'Demo'),
(40, 'Dispatch', 'Karachi Office', 'Shortage'),
(41, 'Test', 'Test', 'Test'),
(42, 'a', 'a', 'a'),
(43, 'a', 'a', 'a'),
(44, 'a', 'b', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `producer`
--

CREATE TABLE `producer` (
  `id` int(255) NOT NULL,
  `serial` int(255) NOT NULL,
  `wap` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` int(250) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `rol` int(250) NOT NULL,
  `roh` int(250) NOT NULL,
  `date` date NOT NULL,
  `image` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producer`
--

INSERT INTO `producer` (`id`, `serial`, `wap`, `name`, `quantity`, `description`, `rol`, `roh`, `date`, `image`) VALUES
(25, 0, 'abc 12', 'Cap', 398, 'black cap', 150, 400, '2018-06-10', 0),
(26, 0, 'abc12', 'Key chain', 488, 'Black key chain', 150, 400, '2018-06-10', 0),
(27, 0, 'hg 123', 'Bottle', 450, 'Black Bottle', 150, 400, '2018-06-10', 0),
(28, 0, 'as 123', 'Mug', 339, 'White Mug', 150, 400, '2018-06-10', 0),
(29, 0, 'sh 123', 'Shirt', 137, 'Polo Shirt', 150, 400, '2018-06-10', 0),
(30, 0, 'ac 12', 'Hot Mug', 299, 'Black Hot Mug', 150, 400, '2018-06-10', 0),
(32, 0, 'test', 'test', 500, 'Test', 150, 400, '2018-08-10', 0),
(33, 0, 'Test', 'Test', 500, 'Test', 150, 400, '2018-08-10', 0),
(34, 0, 'a', 'a', 0, 'a', 0, 0, '2018-08-10', 0),
(35, 0, 'Test', 'Test', 500, 'Test\r\n', 400, 150, '2018-08-10', 0),
(36, 0, 'Test', 'Test', 500, 'Test\r\n', 400, 150, '2018-08-10', 0),
(37, 0, 'q', 'q', 123, '123\r\n', 12, 123, '2018-08-10', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dispatch`
--
ALTER TABLE `dispatch`
  ADD PRIMARY KEY (`id`),
  ADD KEY `i_id` (`i_id`),
  ADD KEY `fk_ga` (`fk_ga`);

--
-- Indexes for table `giveaway`
--
ALTER TABLE `giveaway`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producer`
--
ALTER TABLE `producer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dispatch`
--
ALTER TABLE `dispatch`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `giveaway`
--
ALTER TABLE `giveaway`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `producer`
--
ALTER TABLE `producer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dispatch`
--
ALTER TABLE `dispatch`
  ADD CONSTRAINT `dispatch_ibfk_1` FOREIGN KEY (`i_id`) REFERENCES `producer` (`id`),
  ADD CONSTRAINT `dispatch_ibfk_2` FOREIGN KEY (`fk_ga`) REFERENCES `giveaway` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
