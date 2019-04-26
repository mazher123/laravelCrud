-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2019 at 10:29 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ef`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`) VALUES
(1, 'extreme temparature', 'The heat-regulating mechanisms of the body eventually become overwhelmed and unable to deal effectively with the heat, causing the body temperature to climb uncontrollably. Hyperthermia at or above about 40 °C (104 °F) is a life-threatening medical emergency that requires immediate treatment.'),
(2, 'The srilanka Attaack', ' Sri Lanka has revised down the death toll from last Sunday\'s wave of bombings by more than 100, to \"about 253\", the health ministry says. ... Scores were killed and hundreds injured when suicide bombers struck hotels and churches in Colombo, Negombo and the eastern city of Batticaloa.'),
(5, 'Sony’s facial recognition robot dog', 'Sony’s $2,900 robot dog Aibo is a companion robot, one the company claims “learns its environment and develops relationships with people.” Aibo even enlists a camera in its nose to scan faces and determine who’s who so it can react to them differently.'),
(6, 'Greenland’s shrinking glacier now growing again', 'NASA said Jakobshavn had been Greenland’s fastest-flowing and fastest-thinning glacier for the past 20 years. During that time, it was the single largest source of mass loss from the Greenland Ice Sheet.'),
(7, 'European Union votes to stop moving clocks twice a year', 'Under the Commission’s proposal, initially planned for this year, EU countries would not be able to change their clocks forward and backward during the year in future, but would be free to decide which time zone they wanted to be in.'),
(8, 'Russian military planes seen landing in Venezuela', 'A flight-tracking website showed that two planes left from a Russian military airport bound for Caracas on Friday, and another flight-tracking site showed that one plane left Caracas on Sunday.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `type`) VALUES
(1, 'arman', '123', 'admin'),
(2, 'mazher', '123', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
