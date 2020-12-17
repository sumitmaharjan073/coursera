-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2020 at 03:05 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coursera`
--

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `First_Name` varchar(200) NOT NULL,
  `Middle_Name` varchar(200) NOT NULL,
  `Last_Name` varchar(200) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email_Address` varchar(200) NOT NULL,
  `Phone_Number` int(20) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Age` int(100) NOT NULL,
  `Date_Entry` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `First_Name`, `Middle_Name`, `Last_Name`, `Username`, `Email_Address`, `Phone_Number`, `Address`, `Password`, `Age`, `Date_Entry`) VALUES
(1, 'Arjun', '', 'Shrestha', 'arjun-0000', 'bboyarjun07@gmail.com', 2147483647, 'Sundhara, Lalitpur', 'arjun123', 25, '2020-11-26 18:17:35'),
(2, 'Suman', '', 'Ghale', 'sumanghale81', 'sumanghale81@gmail.com', 2147483647, 'Jharasi, Lalitpur', 'suman123', 27, '2020-11-26 18:17:35'),
(3, 'Jeet', 'Maya', 'Shrestha', 'jeet123', 'jeet.maya.stha.0000@gmail.com', 2147483647, 'Rakathum-4, Ramechhap', 'JEET123', 51, '2020-12-17 19:46:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
