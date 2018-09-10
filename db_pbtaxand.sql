-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 10, 2018 at 04:04 AM
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
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `username`, `nama`, `password`) VALUES
(1, 'pandhu', 'Pandhu Wibowo', 'diajarin');

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
  `comments_ft2` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey_client`
--

INSERT INTO `survey_client` (`id_perusahaan`, `client_company`, `client_contact`, `nature_of_work`, `taxand_countries_involved`, `ttp1`, `ttp2`, `ttp3`, `comments_ttp`, `pm1`, `pm2`, `comments_pm`, `fb1`, `fb2`, `comments_fb`, `comments_fbops`, `oi1`, `comments_oi`, `oi2`, `comments_oi2`, `comments_ft`, `comments_ft2`, `created_at`, `updated_at`, `deleted_at`) VALUES
(17, 'pt', 'ksdfgosj', 'pt', 'ldsfnsfd', 'Strongly disagree', 'Strongly disagree', 'Strongly disagree', 'sdfksadf', 'Strongly disagree', 'Strongly disagree', 'sdfsdfs', 'Strongly disagree', 'Strongly disagree', 'sdfsdf', 'dsfsdf', 'Weak', 'sdfsdffs', 'No', 'sdfgsdf', 'sdfasdf', 'sdafadfs', '2018-09-08 15:33:40', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey_client`
--
ALTER TABLE `survey_client`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `survey_client`
--
ALTER TABLE `survey_client`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
