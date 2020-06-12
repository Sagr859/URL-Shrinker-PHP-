-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2020 at 01:57 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shrink`
--

-- --------------------------------------------------------

--
-- Table structure for table `short_urls`
--

CREATE TABLE `short_urls` (
  `id` int(10) UNSIGNED NOT NULL,
  `l_url` varchar(255) NOT NULL,
  `date_created` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000' ON UPDATE CURRENT_TIMESTAMP(6),
  `email` varchar(20) DEFAULT NULL,
  `slug` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `short_urls`
--

INSERT INTO `short_urls` (`id`, `l_url`, `date_created`, `email`, `slug`) VALUES
(4, 'https://testing/testerTesting123456789', '2020-06-09 17:20:04.902743', 'test123@123', 'giberahidfdf.taih'),
(5, 'https://adfagads.asdf/rtryrrt/tearadr#er', '2020-06-09 17:20:04.918395', 't345@ter.com', 'bithaojva.123'),
(6, 'enkittrap.123.56bylt.com/restinpeace/juice', '2020-06-12 05:21:36.216960', 'hey@hey.com', 'd8kbym3eqi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `passwrd` varchar(20) DEFAULT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `passwrd`, `id`) VALUES
(NULL, NULL, NULL, 101),
('wertywet', 'test123@123', '123123123', 102);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(10) UNSIGNED NOT NULL,
  `url_id` int(10) UNSIGNED NOT NULL,
  `date_visited` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `url_id`, `date_visited`) VALUES
(1, 5, '0000-00-00 00:00:00.000000'),
(2, 4, '0000-00-00 00:00:00.000000'),
(3, 4, '0000-00-00 00:00:00.000000'),
(4, 4, '0000-00-00 00:00:00.000000'),
(5, 4, '0000-00-00 00:00:00.000000'),
(6, 5, '0000-00-00 00:00:00.000000'),
(7, 4, '0000-00-00 00:00:00.000000'),
(8, 5, '0000-00-00 00:00:00.000000'),
(9, 5, '0000-00-00 00:00:00.000000'),
(10, 4, '0000-00-00 00:00:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `short_urls`
--
ALTER TABLE `short_urls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `url_id` (`url_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `short_urls`
--
ALTER TABLE `short_urls`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `visitors`
--
ALTER TABLE `visitors`
  ADD CONSTRAINT `visitors_ibfk_1` FOREIGN KEY (`url_id`) REFERENCES `short_urls` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
