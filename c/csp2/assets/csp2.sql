-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 27, 2018 at 02:58 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csp2`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `owner_username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `address` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_level` int(11) NOT NULL,
  `user_status` int(11) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `mobile_number`, `birthdate`, `gender`, `address`, `username`, `password`, `user_level`, `user_status`, `reg_date`) VALUES
(1, 'Jan Rommel', 'Lorenzo', 'lorenzojanrommel@gmail.com', '09122235050', '1997-01-24', 'm', 'camiling, tarlac', 'admin', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 1, 1, '2018-01-25 09:11:37'),
(2, 'JR', 'Lorenzon', 'misterfewwords@gmail.com', '0912223213213', '1993-12-05', 'm', 'qweweqwewqeqwewqeq', 'customer', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 3, 1, '2018-01-25 11:33:20'),
(3, 'JR Seller', 'Seller', 'jrseller@gmail.com', '09123331345', '2018-01-02', 'm', 'jr address', 'seller', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 2, 1, '2018-01-25 12:59:03'),
(4, 'Lina', 'Lorenzo', 'linalorenzo@gmail.com', '09123456781', '2018-01-02', 'f', 'lina_address', 'lina', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 3, 1, '2018-01-25 15:47:54'),
(6, 'Maiden', 'Slark', 'maidenslark@gmail.com', '0912345668', '25 January, 2018', 'f', 'maidenslarkaddress', 'maidenslark', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 2, 1, '2018-01-25 15:49:50'),
(7, 'Akasha', 'Pain', 'akashapain@gmail.com', '012321312321', '26 January, 2018', 'f', 'akashapainaddress', 'akasha', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 2, 1, '2018-01-25 16:05:48'),
(8, 'Monet', 'Monet', 'monetmonet@gmaill.com', '0912321321234', '26 January, 2018', 'm', 'monetadress', 'monet', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 3, 1, '2018-01-25 16:12:53'),
(9, 'fy', 'fy', 'fy@gmail.com', '0912321321', '26 January, 2018', 'm', 'fyadress', 'fy', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 2, 1, '2018-01-25 16:15:05');

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `id` int(11) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`id`, `level`) VALUES
(1, 'admin'),
(2, 'seller'),
(3, 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--

CREATE TABLE `user_status` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_status`
--

INSERT INTO `user_status` (`id`, `status`) VALUES
(1, 'active'),
(2, 'deactivate');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_status` (`user_status`),
  ADD KEY `users_ibfk_1` (`user_level`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_status`
--
ALTER TABLE `user_status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_status`
--
ALTER TABLE `user_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_level`) REFERENCES `user_level` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`user_status`) REFERENCES `user_status` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
