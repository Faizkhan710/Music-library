-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2022 at 04:56 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE `audio` (
  `id` int(11) NOT NULL,
  `audio_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audio`
--

INSERT INTO `audio` (`id`, `audio_url`) VALUES
(1, 'audio-635552e1a97204.73489282.mp3'),
(2, 'audio-635552f4524c34.92471880.mp3'),
(3, 'audio-635552ff3ee2e1.75532803.mp3'),
(4, 'audio-6355530a1429d1.45759098.mp3'),
(5, 'audio-63555315aa7989.61738500.mp3'),
(6, 'audio-63555325bb01d4.60824929.mp3'),
(7, 'audio-635553331bb3b4.97687654.mp3'),
(8, 'audio-63555342268fa3.24115059.mp3'),
(9, 'audio-63555351d0de39.19932342.mp3'),
(10, 'audio-6355535ce8d335.44351196.mp3'),
(11, 'audio-63555366ad14e1.23916980.mp3'),
(12, 'audio-635553788b8ce7.40484944.mp3'),
(13, 'audio-63555383230ab4.79543520.mp3'),
(14, 'audio-6355538b3f1623.22631694.mp3'),
(15, 'audio-635553979dee14.46532527.mp3'),
(16, 'audio-635553a63af871.08719169.mp3'),
(17, 'audio-635553aff366c2.89493917.mp3'),
(18, 'audio-635553ba5eeb32.82829717.mp3'),
(19, 'audio-635553d242e032.34530994.mp3'),
(20, 'audio-635553edca6170.62212001.mp3'),
(21, 'audio-63555457030a62.48985246.mp3'),
(22, 'audio-63555464a4bf30.86019905.mp3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audio`
--
ALTER TABLE `audio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
