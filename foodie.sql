-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2018 at 01:24 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodie`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `email` varchar(50) NOT NULL,
  `food` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `q` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`email`, `food`, `price`, `q`) VALUES
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 0),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 0),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 0),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 0),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 0),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 0),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 0),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 0),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 0),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 0),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 0),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 0),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 1),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 1),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 1),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 1),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `email` varchar(30) NOT NULL,
  `food` varchar(70) NOT NULL,
  `price` int(20) NOT NULL,
  `q` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`email`, `food`, `price`, `q`) VALUES
('harshita.agrawal@somaiya.edu', 'FRESH PIZZA', 149, 0),
('harshita.agrawal@somaiya.edu', 'FRESH PIZZA', 149, 0),
('harshita.agrawal@somaiya.edu', 'Banana peanut butter french toast roll up', 99, 0),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 0),
('harshita.agrawal@somaiya.edu', 'Banana peanut butter french toast roll up', 99, 0),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 0),
('harshita.agrawal@somaiya.edu', 'Banana peanut butter french toast roll up', 99, 0),
('harshita.agrawal@somaiya.edu', 'Burger', 79, 0),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 0),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 0),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 0),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 0),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 1),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 1),
('harshita.agrawal@somaiya.edu', 'Cheese and Mushroom Spring Roll', 199, 1),
('harshita.agrawal@somaiya.edu', 'Cheese and Mushroom Spring Roll', 199, 1),
('harshita.agrawal@somaiya.edu', 'Cheese and Mushroom Spring Roll', 199, 1),
('harshita.agrawal@somaiya.edu', 'Burger', 79, 1),
('harshita.agrawal@somaiya.edu', 'Burger', 79, 1),
('harshita.agrawal@somaiya.edu', 'Burger', 79, 1),
('harshita.agrawal@somaiya.edu', 'Burger', 79, 1),
('harshita.agrawal@somaiya.edu', 'Burger', 79, 1),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 1),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 1),
('harshita.agrawal@somaiya.edu', 'FRESH PIZZA', 149, 1),
('harshita.agrawal@somaiya.edu', 'Banana peanut butter french toast roll up', 99, 1),
('harshita.agrawal@somaiya.edu', 'Cheese and Mushroom Spring Roll', 199, 1),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 1),
('harshita.agrawal@somaiya.edu', 'Banana peanut butter french toast roll up', 99, 1),
('harshita.agrawal@somaiya.edu', 'Banana peanut butter french toast roll up', 99, 1),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 1),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 1),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 1),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 1),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 1),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 1),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 1),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 1),
('harshita.agrawal@somaiya.edu', 'Caprese Pizza', 249, 1);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `address`, `state`, `city`, `email`, `password`) VALUES
('Harshita Agrawal Pra', '404, Balsam, Rosalie-LX, Godrej Hill Road, Barave Village,Near ACP Office, Khadakpada.', 'Maharashtra', 'Kalyan (w)', 'harshita.agrawal@som', 'Harshita'),
('Harshita Agrawal Pra', '404, Balsam, Rosalie-LX, Godrej Hill Road, Barave Village,Near ACP Office, Khadakpada.', 'Maharashtra', 'Kalyan (w)', 'harshita.agrawal@somaiya.edu', 'Harshita');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
