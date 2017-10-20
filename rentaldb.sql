-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2017 at 12:05 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rentaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`id` int(11) NOT NULL,
  `location` varchar(500) NOT NULL,
  `category` varchar(500) NOT NULL,
  `housetype` varchar(500) NOT NULL,
  `cost` varchar(500) NOT NULL,
  `pic` varchar(500) NOT NULL,
  `rooms` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `timeaction` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `location`, `category`, `housetype`, `cost`, `pic`, `rooms`, `description`, `username`, `timeaction`) VALUES
(29, 'Amalemba', 'Buy', 'Residential', '2.4M', 'uploads/5.jpg', '20', 'Underground parking, hot water, 4 bathrooms, swimming pool, perimeter wall', 'lyn', '2017-10-08 09:01:38'),
(30, 'Kefinco', 'Rent', 'Offices', '400, 000 Monthly', 'uploads/4.png', '10', 'Underground parking, large compound,  ', 'lyn', '2017-10-08 09:01:07'),
(31, 'Lurambi', 'Rented', 'Residential', '300, 000 Monthly', 'uploads/6.jpg', '20', 'Underground parking, hot water, 4 bathrooms, swimming pool, perimeter wall', 'lyn', '2017-10-08 08:59:44'),
(32, 'Amalemba', 'Buy', 'Offices', '3.6M', 'uploads/3.jpg', '25', 'large compound, parking, conference halls', 'lyn', '2017-10-08 09:02:28'),
(33, 'Lurambi', 'Rent', 'Residential', '400, 000 Monthly', 'uploads/6.jpg', '10', 'Underground parking, hot water, 4 bathrooms, swimming pool, perimeter wall', 'lyn', '2017-10-08 09:03:55'),
(34, 'Kefinco', 'Buy', 'Residential', '2.4M', 'uploads/1.jpg', '20', 'Underground parking, hot water, 4 bathrooms, swimming pool, perimeter wall', 'lyn', '2017-10-08 08:56:39'),
(35, 'Lurambi', 'Rent', 'Offices', '800,000 Monthly', 'uploads/5.jpg', '25', 'Parking, large compound, conference halls, CCTV cameras, Security lights', 'lyn', '2017-10-08 08:59:09'),
(36, 'Amalemba', 'Rented', 'Residential', '400, 000 Monthly', 'uploads/4.jpg', '10', 'Underground parking, hot water, 4 bathrooms, swimming pool, perimeter wall', 'joyce', '2017-10-08 09:06:39'),
(37, 'Amalemba', 'Sold', 'Residential', '1.4M', 'uploads/5.jpg', '25', 'Underground parking, hot water, 4 bathrooms, swimming pool, perimeter wall', 'joyce', '2017-10-08 09:06:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `firstname` varchar(500) NOT NULL,
  `lastname` varchar(500) NOT NULL,
  `idnumber` int(11) NOT NULL,
  `phonenumber` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `idnumber`, `phonenumber`, `email`, `username`, `password`) VALUES
(2, 'joyce', 'jay', 34566666, '+254716160863', 'joycejay@gmail.com', 'joyce', '2014'),
(4, 'Ray', 'mark', 34566666, '+254716160863', 'rm@gmail.com', 'Rm', '1111'),
(5, 'Esther', 'junio', 34566666, '+254716160863', 'Estherline@gmail.com', 'EJ', '254line');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
