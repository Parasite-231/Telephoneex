-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2022 at 05:50 PM
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
  `user_id` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `contact_name` varchar(225) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_phonebook`
--

INSERT INTO `user_phonebook` (`user_id`, `mobile`, `date`, `contact_name`, `address`) VALUES
(1, 1306989578, '2022-04-27 04:26:25', 'sanu', '3ff4t'),
(1, 1772713258, '2022-04-27 04:32:22', 'dadu', 'ghjkg'),
(8, 1385675732, '2022-04-27 04:54:56', 'abrar', 'vc3ec'),
(1, 1961389763, '2022-04-27 09:42:15', 'efwr', 'rfref'),
(9, 2147483647, '2022-04-27 09:55:56', 'fvedfv', 'vdd'),
(8, 1949382374, '2022-04-27 20:21:02', 'bdhjgbfcsah', 'sdfcvsgvd'),
(8, 1979678568, '2022-04-27 20:35:13', 'timur', 'hvjhv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_phonebook`
--
ALTER TABLE `user_phonebook`
  ADD KEY `user_id_fk` (`user_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_phonebook`
--
ALTER TABLE `user_phonebook`
  ADD CONSTRAINT `user_phonebook_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `myusers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
