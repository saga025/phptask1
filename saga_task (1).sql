-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 31, 2017 at 09:19 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saga_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `path`, `name`, `email`, `contact`) VALUES
(1, 'img/29-03-2017-1490755459.png', 'Shri Shruthi Shridhar', 'shruthi0898@gmail.com', '2147483647'),
(18, 'img/29-03-2017-1490757420.png', 'shankari', 'shankari0898@gmail.com', '9876543210'),
(21, 'img/29-03-2017-1490757445.png', 'shankari', 'shankari0898@gmail.com', '9876543210'),
(25, 'img/29-03-2017-1490757678.png', 'Shri Shruthi Shridhar', 'shruthi0898@gmail.com', '9840702364'),
(26, 'img/29-03-2017-1490757682.png', 'sagariga', 'sagarikasundar1@gmail.com', '8682026688'),
(27, 'img/29-03-2017-1490757719.png', 'Shri Shruthi Shridhar', 'shruthi0898@gmail.com', '9840702364'),
(28, 'img/29-03-2017-1490757724.png', 'sagariga', 'sagarikasundar1@gmail.com', '8682026688'),
(29, 'img/29-03-2017-1490757806.png', 'vibhavari', 'vibhacsv@gmail.com', '8939345115'),
(30, 'img/29-03-2017-1490757851.png', 'swathi ', 'swathic97@gmail.com', '9629936481'),
(31, 'img/29-03-2017-1490757907.png', 'aruna', 'arunaarumugam@gmail.com', '8374983453'),
(32, 'img/29-03-2017-1490757979.png', 'vishwapapa', 'vishwa.nath@outlook.com', '9500011210'),
(33, 'img/29-03-2017-1490758037.png', 'vishwapapa', 'vishwa.nath@outlook.com', '9500011210'),
(34, 'img/29-03-2017-1490759871.png', 'sagariga', 'sagarikasundar1@gmail.com', '1234567'),
(35, 'img/29-03-2017-1490759905.png', 'sagariga', 'sagarikasundar1@gmail.com', '1234567'),
(36, 'img/29-03-2017-1490759924.png', 'sagariga', 'sagarikasundar1@gmail.com', '1234567'),
(37, 'img/29-03-2017-1490760310.png', 'sagariga', 'sagarikasundar1@gmail.com', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
