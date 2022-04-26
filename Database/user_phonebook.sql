-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2022 at 12:06 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phonebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_phonebook`
--

CREATE TABLE `user_phonebook` (
  `mobile` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `address` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_phonebook`
--

INSERT INTO `user_phonebook` (`mobile`, `date`, `contact_name`, `address`) VALUES
(1306989578, '2022-04-27 02:11:46', 'ninad', 'dhaka'),
(1306989579, '2022-04-27 03:17:47', 'arijit', 'dfg'),
(1772713258, '2022-04-27 02:12:24', 'ninad_2', 'dhaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_phonebook`
--
ALTER TABLE `user_phonebook`
  ADD PRIMARY KEY (`mobile`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_phonebook`
--
ALTER TABLE `user_phonebook`
  MODIFY `mobile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1772713259;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
