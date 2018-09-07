-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 07, 2018 at 05:29 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pbtaxand`
--

-- --------------------------------------------------------

--
-- Table structure for table `survey_client`
--

CREATE TABLE `survey_client` (
  `id_perusahaan` int(11) NOT NULL,
  `client_company` varchar(100) DEFAULT NULL,
  `client_contact` varchar(15) DEFAULT NULL,
  `nature_of_work` varchar(50) DEFAULT NULL,
  `taxand_countries_involved` varchar(100) DEFAULT NULL,
  `ttp1` enum('Strongly disagree','Disagree','Neither agree or disagree','Agree','Strongly agree') DEFAULT NULL,
  `ttp2` enum('Strongly disagree','Disagree','Neither agree or disagree','Agree','Strongly agree') DEFAULT NULL,
  `ttp3` enum('Strongly disagree','Disagree','Neither agree or disagree','Agree','Strongly agree') DEFAULT NULL,
  `comments_ttp` text,
  `pm1` enum('Strongly disagree','Disagree','Neither agree or disagree','Agree','Strongly agree') DEFAULT NULL,
  `pm2` enum('Strongly disagree','Disagree','Neither agree or disagree','Agree','Strongly agree') DEFAULT NULL,
  `comments_pm` text,
  `fb1` enum('Strongly disagree','Disagree','Neither agree or disagree','Agree','Strongly agree') DEFAULT NULL,
  `fb2` enum('Strongly disagree','Disagree','Neither agree or disagree','Agree','Strongly agree') DEFAULT NULL,
  `comments_fb` text,
  `comments_fbops` text,
  `oi1` enum('Weak','Average','Good','Very Good','Excellent') DEFAULT NULL,
  `comments_oi` text,
  `oi2` enum('No','Unlikely','Maybe','Probably','Definitely') DEFAULT NULL,
  `comments_oi2` text,
  `comments_ft` text,
  `comments_ft2` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `survey_client`
--
ALTER TABLE `survey_client`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `survey_client`
--
ALTER TABLE `survey_client`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
