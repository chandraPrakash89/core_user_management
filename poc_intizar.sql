-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2017 at 11:01 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poc_intizar`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `author_name`, `created_at`, `updated_at`) VALUES
(8, 'Arun Kumar', NULL, NULL),
(12, 'r.kipling', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author_id` int(11) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `title`, `author_id`, `publisher`, `created_at`, `updated_at`) VALUES
(8, 'maya', 8, 'raj', '2017-07-03', '2017-07-03'),
(12, 'jungle book', 12, 'humes', '2017-07-03', '2017-07-03'),
(13, 'mahesh', 8, 'raj', '2017-07-06', '2017-07-06');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `email`, `first_name`, `last_name`, `password`, `created_at`) VALUES
(3, 'cprakash@gmail.com', 'chandra', 'prakash', '$2y$12$eei9gjmSGJfaRYoa6dB/reyQMC7nFaEjSk1kOHgLfMotK2Q6zjuNS', '2017-05-15 00:26:36'),
(4, 'cpraksh@gmail.com', 'chandra', 'prakash', '$2y$12$8KTh4SXnBUg8fVMu3gN7Y.hWkuV0BqF3KXXNsdAFOqBYXY6Mt3Q8e', '2017-05-15 00:36:06'),
(5, 'jaspreet@hh.com', 'jaspreet', 'bumrah', '$2y$12$O/xmZTWligbNp4IYSRZgruJYKmVD.yNkiTTJQqoZLpu0oSFFYDEZi', '2017-05-15 00:42:50'),
(7, 'cpj@h.com', 'cp', 'jamloki', 'jamloki', '2017-05-15 01:37:47'),
(9, 'jamloki@gmail.com', 'chandra', 'prakash', '$2y$12$yLLeMjkAjkpOcM.m.akiU.DqbeLThQQeF/wslguJWn4XWD3bvpKlC', '2017-05-15 02:22:57'),
(11, 'user@ul.com', 'user', 'user', 'jamloki', '2017-05-15 03:06:35'),
(12, 'chandra@gmail.com', 'chandra', 'prakash', '$2y$10$/QcZluPD71zX8.SjfblPy.Nuc8bOsovsxwgARnZbRSHsk8Bk7pNtC', '2017-05-16 00:43:16'),
(13, 'rasid@ul.com', 'rasid', 'khan', '$2y$10$di3b9dxEbBc/ykbZoF1UNOnRjySHzJ1hecmHVDXs6pXwwRhcmwTQ.', '2017-05-18 09:27:15'),
(14, 'admin@gmail.com', 'chandra', 'prakash', '$2y$10$mDGEGwRyZ5fEVrrKViQvWeL4/3nba8Ruo/djfln2MDjTS0M6Q2N0a', '2017-07-02 15:58:21'),
(15, 'alex@xav.com', 'alex', 'huge', '$2y$10$NuWJYG/zFJdSV6akbKW2Y.cz.IAL425fnS4fWNAfCotib6r0wriPC', '2017-07-02 22:58:37'),
(16, 'cpjamloki89@gmail.com', 'chandra', 'prakash', '$2y$10$SQHT8T9aLA.FMVjI3vgv8OFqjI78EKTVao0pnM8rTnCQ8.Q4HWXtW', '2017-07-17 00:41:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
