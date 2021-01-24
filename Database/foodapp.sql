-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2021 at 10:03 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mob` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `access_token` varchar(100) NOT NULL,
  `refresh_token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mob`, `password`, `access_token`, `refresh_token`) VALUES
(0, 'Admin', 'admin@gmail.com', '9895659848', '0192023a7bbd73250516f069df18b500', '', ''),
(1, 'user1', 'user1@mail.com', '9876543210', '6ad14ba9986e3615423dfca256d04e3f', 'da10cc99-5e09-11eb-8261-e0d55e465b2c', 'da10ccae-5e09-11eb-8261-e0d55e465b2c'),
(2, 'user2', 'user2@mail.com', '7896541230', '6ad14ba9986e3615423dfca256d04e3f', '', ''),
(3, 'user3', 'user3@mail.com', '4563219787', '6ad14ba9986e3615423dfca256d04e3f', '', ''),
(4, 'user4', 'user4@mail.com', '9854658765', '6ad14ba9986e3615423dfca256d04e3f', '', ''),
(5, 'user5', 'user5@mail.com', '8987456578', '6ad14ba9986e3615423dfca256d04e3f', '', ''),
(6, 'user6', 'user6@mail.com', '9865896532', '6ad14ba9986e3615423dfca256d04e3f', '', ''),
(7, 'user7', 'user7@mail.com', '9865875498', '6ad14ba9986e3615423dfca256d04e3f', '', ''),
(8, 'user8', 'user8@mail.com', '9832541265', '6ad14ba9986e3615423dfca256d04e3f', '', ''),
(9, 'user9', 'user9@mail.com', '9565896523', '6ad14ba9986e3615423dfca256d04e3f', '', ''),
(10, 'user10', 'user10@mail.com', '9465987815', '6ad14ba9986e3615423dfca256d04e3f', '', ''),
(23, 'Dibin Xavier', 'dibin@gmail.com', '7854123256', 'f9956b4c3bee4afc8f4bdcea956f3d95', '', ''),
(25, 'Dibin Xavier', 'dibinxavier@gmail.com', '7854123256', 'f9956b4c3bee4afc8f4bdcea956f3d95', 'ca74dab9-5e09-11eb-8261-e0d55e465b2c', 'ca74dad5-5e09-11eb-8261-e0d55e465b2c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
