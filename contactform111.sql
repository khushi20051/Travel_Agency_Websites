-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 10:36 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contactform`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `user` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(20) NOT NULL,
  `city` varchar(200) NOT NULL,
  `citys` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `dates` date NOT NULL,
  `people` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `user`, `last`, `email`, `mobile`, `city`, `citys`, `date`, `dates`, `people`, `text`) VALUES
(1, 'raghuvir', 'kumar', 'raghav123@gmail.com', 2147483647, '', '', '2022-05-27', '2022-05-24', '', 'hghghj'),
(2, 'raghuvir', 'kumar', 'raghav123@gmail.com', 2147483647, '', '', '2022-05-27', '2022-05-24', '', 'hghghj'),
(3, 'raghuvir', 'kumar', 'raghav123@gmail.com', 2147483647, '', '', '2022-05-27', '2022-05-24', '', 'hghghj'),
(4, 'raghuvir', 'kumar', 'raghav123@gmail.com', 2147483647, '', '', '2022-05-27', '2022-05-24', '', 'hghghj'),
(5, 'raghuvir', 'kumar', 'raghav123@gmail.com', 2147483647, '', '', '2022-05-27', '2022-05-24', '', 'hghghj'),
(6, 'khushboo', 'kumari', 'khushboo@gmail.com', 668805676, '', '', '2022-05-25', '2022-05-25', '', 'can i join you'),
(7, 'raghav', 'kumar', 'raghav123@gmail.com', 2147483647, '', '', '2022-05-25', '2022-05-26', '', 'gggytrdfgh'),
(8, 'mahir', 'kumar', 'mahir@gmail.com', 456789, '', '', '2022-05-25', '2022-05-11', '', 'dggjhk'),
(9, 'mahir', 'kumar', 'mahir@gmail.com', 456789, '', '', '2022-05-25', '2022-05-11', '', 'dggjhk'),
(10, 'mahir', 'kumar', 'mahir@gmail.com', 456789, '', '', '2022-05-25', '2022-05-11', '', 'dggjhk');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `email`, `password`, `cpassword`) VALUES
(1, 'khushi123@gmail.com', '1234', '1234'),
(2, 'khushi1234@gmail.com', '1234', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
