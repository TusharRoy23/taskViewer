-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2017 at 03:24 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `taskinformation`
--

CREATE TABLE `taskinformation` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `dateCreated` date NOT NULL,
  `dateUpdated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taskinformation`
--

INSERT INTO `taskinformation` (`id`, `name`, `description`, `dateCreated`, `dateUpdated`) VALUES
(1, 'How To Be More Productive And Energized At Work	', 'Increased productivity is great for us personally, the teams we are a part of, and the company we work for.\r\n\r\nBeing more productive means we experience a greater sense of personal fulfilment. And our relationships with coworkers, managers, family and friends are better as a result.\r\n\r\nNot to mention the huge benefits our customers experience.\r\n\r\nWith that in mind, wouldn’t it be great if we could unlock the potential productivity in ourselves on a more regular basis?\r\n\r\nLet’s not leave it to chance. By taking ownership we can better influence the regularity with which we perform at our best at work.\r\n\r\nLet’s take a practical look at the ten steps we can all take to improve our own, or our team’s productivity.', '2017-06-24', '2017-06-25'),
(2, 'Best Version Of Yourself', 'Instead, it is far better to view our ambition for productivity as an endeavor to be the most productive version of ourselves on that particular day.\r\n\r\nSome days that version of ourselves may not be as productive as on other days. There are a countless number of outside factors that are not within our control – yet affect our ability to perform.\r\n\r\nHowever, by aspiring to be today’s best version of ourselves, we can hugely increase how productive we are at work.And while it is old advice, it has never been more relevant.\r\n\r\nIn today’s fast paced work environment, tasks can appear at a faster rate than we can possibly hope to complete.\r\n\r\nThat’s OK. Productivity is based on the value we create rather than the number of tasks we complete.', '2017-06-25', '2017-06-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `taskinformation`
--
ALTER TABLE `taskinformation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `taskinformation`
--
ALTER TABLE `taskinformation`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
