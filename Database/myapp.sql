-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2019 at 01:41 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `shorturl`
--

CREATE TABLE `shorturl` (
  `id` int(11) NOT NULL,
  `long_url` text NOT NULL,
  `token` varchar(30) NOT NULL,
  `short_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shorturl`
--

INSERT INTO `shorturl` (`id`, `long_url`, `token`, `short_url`) VALUES
(1, 'https://www.google.com/search?q=google&rlz=1C1CHBD_enIN837IN837&oq=google&aqs=chrome..69i57j69i60l3j69i65j69i60.3065j0j7&sourceid=chrome&ie=UTF-8', '3PKe4', 'http://localhost/myapp/tn/y/3PKe4'),
(2, 'https://www.google.com/search?q=google&rlz=1C1CHBD_enIN837IN837&oq=goo&aqs=chrome.0.69i59j69i60l3j69i65j69i60.1967j0j4&sourceid=chrome&ie=UTF-8', 'um05Z', 'http://localhost/myapp/tn/y/um05Z');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Dibin', 'dibinxavier@gmail.com', 'f9956b4c3bee4afc8f4bdcea956f3d95');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shorturl`
--
ALTER TABLE `shorturl`
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
-- AUTO_INCREMENT for table `shorturl`
--
ALTER TABLE `shorturl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
