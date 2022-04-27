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
-- Table structure for table `myusers`
--

CREATE TABLE `myusers` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `date` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myusers`
--

INSERT INTO `myusers` (`id`, `username`, `email`, `password`, `date`, `user_id`) VALUES
(1, 'Samin', 'samin@gmail.com', '$2y$10$y81CvXSLI8je53.bPQDYT.m2ROK8ALICI5KMic/DvzDVX2I2JQfvq', '2022-04-27 01:32:18', 0),
(3, 'bruce_wayne', 'batman@iut-dhaka.edu', '$2y$10$lo8SEUG8lLnXYUp/k2vBXe5vXm7cS8RaI1rhjwluImcnK2kjWSZqi', '2022-04-27 01:37:25', 0),
(4, 'sanu', 'sanu@gmail.com', '$2y$10$tPHZ97ViVlyeVGFdNwsxKO9pcLbFkI4.RJd40VphLJNW09EqXP5le', '2022-04-27 01:38:21', 0),
(6, 'morshes', 'samin@iut-dhaka.edu', '$2y$10$h.xuzq.n7d77UiZ5CGJCb.o7jo1KSNHGN7/5GK4fH1GZ5P3VKm1A2', '2022-04-27 07:25:43', 0),
(8, 'ifty', 'ifty@gmail.com', '$2y$10$sNMGEgGi8nze/aUbcAoGLel5Mkpdg7Pk38MfRkTcu1/v.nhY5NYTy', '2022-04-27 08:52:55', 0),
(9, 'ninad', 'muktadir@iut-dhaka.edu', '$2y$10$coCfBpjcMTl4xxYoW9lHmOYoqi1W9dl9SSqJLVYl0/pJshSYNX97G', '2022-04-27 09:38:47', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myusers`
--
ALTER TABLE `myusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `user_id_fk` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myusers`
--
ALTER TABLE `myusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
