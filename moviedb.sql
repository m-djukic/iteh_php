-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 23, 2021 at 02:01 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE `director` (
  `directorid` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nationality` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `director`
--

INSERT INTO `director` (`directorid`, `name`, `nationality`) VALUES
(1, 'Martin Scorsese', 'American'),
(2, 'Stiven Spielberg', 'American'),
(3, 'Quentin Tarantino', 'Italian'),
(4, 'Federico Fellini', 'Italian'),
(5, 'Akira Kurosawa', 'Japanese'),
(6, 'Sofia Capola', 'American'),
(7, 'Alfonso Cuaron', 'Mexican');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movieid` int(10) NOT NULL,
  `movie_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `year` int(5) NOT NULL,
  `genre` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movieid`, `movie_name`, `year`, `genre`) VALUES
(1, 'Lost in translation', 2003, 'drama'),
(2, 'Great expectations', 1998, 'drama'),
(3, 'Gravity', 2013, 'thriller'),
(4, 'Seven samurai', 1954, 'action'),
(5, 'Death proof', 2007, 'sci-fi'),
(6, 'Kill Bill', 2003, 'thriller'),
(7, 'War horse', 2011, 'war'),
(8, 'Catch me if you can', 2002, 'crime'),
(9, 'Indiana Jones', 1989, 'adventure'),
(10, 'Casino', 1995, 'crime'),
(11, 'Silence', 2016, 'drama');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`directorid`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movieid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `director`
--
ALTER TABLE `director`
  MODIFY `directorid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movieid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
