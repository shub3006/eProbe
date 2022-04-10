-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 04:05 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `equora`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `Email` varchar(25) NOT NULL,
  `squery` varchar(35) NOT NULL,
  `econcern` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `qno` int(11) NOT NULL,
  `username` varchar(68) NOT NULL,
  `query` varchar(255) NOT NULL,
  `posted_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`qno`, `username`, `query`, `posted_at`) VALUES
(1, 'shubham3119', 'who founded Bootstrap', '2021-10-16 19:34:42'),
(2, 'shubham3119', 'Which of the following was used in programming the first computers?', '2021-10-16 19:38:26'),
(3, 'prathamesh171', 'is space is expanding ?', '2021-10-19 20:56:39'),
(4, 'pradeep12', 'who is the union minister of india ?', '2021-11-28 12:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(5) NOT NULL,
  `username` varchar(68) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(108) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'shubham3119', 'shubham3119@gmail.com', '$2y$10$Gpg0M8LmQqvqzN/Gt4EISuxgrbYhQlc6mPC8VvKoBDBEC9dPGip9e', '2021-09-28 23:40:38'),
(3, 'pradeep12', 'polpradeep12@gmail.com', '$2y$10$5NR2T2s6ro/mMQj6aUtInugd4Vs1laLufU8SsyqwMnF/x8zc9Rf4y', '2021-10-17 23:32:19'),
(4, 'prathamesh171', 'prathameshkhandekar171@gmail.com', '$2y$10$uO5HNKQ2agffC3C//lhwQe0Hmh/kG/vy76Jn3f4Z8Y7ZOFPZbajA.', '2021-10-19 20:54:38'),
(5, 'shweta3120', 'shwetarajsingh07@gmail.com', '$2y$10$.9bXusN.PLeuzl60WEZzGeMhrhvtcwOyMzCAIZiNOxJ93Wyrzx6Gu', '2021-11-28 12:41:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`qno`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `qno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
