-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 15, 2022 at 11:15 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chaguo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user-id` int(11) NOT NULL,
  `email` varchar(69) NOT NULL,
  `password` varchar(90) NOT NULL,
  `username` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user-id`, `email`, `password`, `username`) VALUES
(1, 'admin@gmail.com', 'admin', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student-id` int(11) NOT NULL,
  `student-name` varchar(67) NOT NULL,
  `student-email` varchar(67) NOT NULL,
  `student-no` varchar(60) NOT NULL,
  `student-regno` varchar(30) NOT NULL,
  `student-course` varchar(30) NOT NULL,
  `student-join` varchar(30) NOT NULL,
  `student-graduate` varchar(30) NOT NULL,
  `graduate-status` int(11) NOT NULL DEFAULT 0,
  `voting-status` int(11) NOT NULL DEFAULT 0,
  `blacklist-account` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student-id`, `student-name`, `student-email`, `student-no`, `student-regno`, `student-course`, `student-join`, `student-graduate`, `graduate-status`, `voting-status`, `blacklist-account`) VALUES
(1, 'JOHN DOE5', 'johndoe@gmail.com5', '087779238856', 'scc200-0473/20183', 'Computer Science', '2022-11-12', '2022-11-12', 1, 2, 1),
(2, 'JOHN DOE', 'johndoe@gmail.com', '0877792388', 'scc200-0473/2018', 'Computer Science', '2022-11-12', '2025-10-15', 1, 2, 1),
(3, 'JOHN DOE', 'johndoe@gmail.com', '0877792388', 'scc200-0473/2018', 'Computer Science', '2022-11-12', '2022-11-12', 1, 2, 1),
(4, 'JOHN DOE', 'johndoe@gmail.com', '0877792388', 'scc200-0473/2018', 'Computer Science', '2022-11-12', '2025-10-15', 0, 1, 0),
(6, 'JOHN DOE', 'johndoe@gmail.com', '0877792388', 'scc200-0473/2018', 'Computer Science', '2022-11-12', '2025-10-15', 1, 1, 1),
(10, 'JOHN DOEa', 'johnvvdoe@gmail.com', '0877792388', 'scc200-0473/2018', 'Computer Science', '2022-11-30', '2022-11-29', 0, 0, 0),
(11, 'JOHN DOE', 'johnbbbdoe@gmail.coma', '0877792388', 'scc200-0473/2018', 'Computer Science', '2022-11-30', '2022-11-29', 0, 0, 0),
(12, 'JOHN DOE', 'johndddddoe@gmail.com', '0877792388', 'scc200-0473/2018', 'Computer ScienceQ', '2022-11-13', '2022-11-13', 0, 0, 0),
(13, 'michael mike', 'michaelmike@gmail.com', '0877792388', 'scc200-0473/2019', 'Computer Science', '1999-09-06', '2005-04-09', 0, 0, 0),
(14, 'Ronald Cheruiyot', 'ronaldcheruiyot@gmail.com', '0759738917', 'hdb212-0355/2019', 'BBIT', '2019-09-03', '2023-12-03', 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user-id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
