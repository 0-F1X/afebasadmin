-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2024 at 01:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `afebasadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `infosuser`
--

CREATE TABLE `infosuser` (
  `id` int(10) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `mail` varchar(70) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `nmdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `infosuser`
--

INSERT INTO `infosuser` (`id`, `nom`, `mail`, `mdp`, `nmdp`) VALUES
(1, 'ANDRIAMPENOMANANA Fiderana', 'fideranaandria5@gmail.com', '$2y$10$CFbUgctZDCL1m37PNwNqHuHwLoFZK0sk7MwS16tjzmKG/ZsKGRZrO', 'AZERTY');

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `id` int(11) NOT NULL,
  `match_date` date NOT NULL,
  `match_name` varchar(255) NOT NULL,
  `match_time` time NOT NULL,
  `match_location` varchar(255) NOT NULL,
  `region` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`id`, `match_date`, `match_name`, `match_time`, `match_location`, `region`) VALUES
(1, '2024-10-07', '1', '12:15:00', 'Salle de Billard A', 'la-reunion'),
(2, '2024-10-27', '2', '15:19:00', 'Salle de Billard A', 'madagascar'),
(3, '2024-11-25', '4', '11:24:00', 'Salle de Billard B', 'la-reunion');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `infosuser`
--
ALTER TABLE `infosuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `infosuser`
--
ALTER TABLE `infosuser`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
