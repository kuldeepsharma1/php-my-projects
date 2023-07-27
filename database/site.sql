-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2023 at 10:27 PM
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
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `short_desc`, `date`, `img`, `slug`) VALUES
(1, 'This Is my First Blog', 'Here You See mY ! st Blog Post', '2023-07-28', 'assets/img/blog/blog-1.jpg', 'test-test'),
(2, 'sdfdgfdgfdrgrfed', 'dfgfdgfdgfdg', '2023-07-28', 'assets/img/blog/blog-2.jpg', 'sdffgdf'),
(3, 'cxvbvcfb', 'cdfghfghbgf', '2023-07-28', 'assets/img/blog/blog-1.jpg', 'fgfd-sdf'),
(4, 'cxvbvcbnbvnbvfnbf', 'fdgbfghtfrggbtggtrhgt', '2023-07-28', 'assets/img/blog/blog-1.jpg', 'asdgfsjdsdjhf');

-- --------------------------------------------------------

--
-- Table structure for table `blogcontent`
--

CREATE TABLE `blogcontent` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `author` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogcontent`
--

INSERT INTO `blogcontent` (`id`, `title`, `slug`, `date`, `author`, `content`, `img`) VALUES
(1, 'dfgggfggftdgfdgbfgbgfbgfbfg', 'test-test', '2023-07-28', 'chandan', '<h1 class=\"bg-primary\">hello world </h1>\r\nsfdfnbsdfjnb\r\nsfsdfnsdbvsd sdf\r\nsfdff nbsdf', 'assets/img/blog/blog-1.jpg'),
(2, 'fdfdgfd', 'fgfd-sdf', '2023-07-28', 'aaspas', 'dfvfdfdvgfdvfdv  cdfvfd', 'assets/img/blog/blog-1.jpg'),
(3, 'dfgfdgbdfgvb', 'sdffgdf', '2023-07-28', 'dfgfdg', 'dfggfhggfg', 'assets/img/blog/blog-2.jpg'),
(4, 'dfgfdgfdg', 'asdgfsjdsdjhf', '2023-07-28', 'fsdgtrght', 'dtghtgrhbfdgbgfrh', 'assets/img/blog/blog-1.jpg');

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
(1, '', '', '', '', 'k4kuldeep108@gmail.com', '$2y$10$1mSax43I9kAUc7BZ4jZC4uAcNEqeUOghVolAgcvqMpF7xtIW.rXIi', '2023-07-27 23:41:06.00000', '', '', '0000-00-00');

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
-- Indexes for table `blogcontent`
--
ALTER TABLE `blogcontent`
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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogcontent`
--
ALTER TABLE `blogcontent`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
