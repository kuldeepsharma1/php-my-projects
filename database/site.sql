-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2023 at 11:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_desc` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `img` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` mediumtext NOT NULL,
  `author` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `short_desc`, `date`, `img`, `slug`, `content`, `author`) VALUES
(8, 'dfg', 'fghgf', '2023-08-03', '_38c3e1ee-4510-4182-a3bc-d6004c7060e7.jpeg', 'fghfg', 'fghfhj', 'kuldeepit'),
(9, 'cvbvcbn', 'cvcbncvbn', '2023-08-03', '_6e1c5af2-2674-426a-b482-8e845cddb866.jpeg', 'ccgvbcgvfb', 'cvbc', 'kuldeepit');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `date` datetime(5) NOT NULL DEFAULT current_timestamp(5),
  `gender` text NOT NULL,
  `avatar_img` varchar(255) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `fname`, `lname`, `phone_no`, `email`, `passwd`, `date`, `gender`, `avatar_img`, `dob`) VALUES
(1, 'kuldeep', '', '', '', 'k4kuldeep108@gmail.com', '$2y$10$1mSax43I9kAUc7BZ4jZC4uAcNEqeUOghVolAgcvqMpF7xtIW.rXIi', '2023-07-27 23:41:06.00000', '', '', '0000-00-00'),
(4, 'kuldeepit', '', '', '', 'kuldeep@hytek.org.in', '$2y$10$OygP.imKkow9LhX/qw1jLe.ZmKjUcTHHUw6bd0nF/z2dgDK.6McYm', '2023-08-03 01:08:40.00000', '', '', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
