-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2024 at 02:33 PM
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
-- Table structure for table `classement`
--

CREATE TABLE `classement` (
  `id` int(11) NOT NULL,
  `region` varchar(50) NOT NULL,
  `tournoi` varchar(100) NOT NULL,
  `nom_prenom` varchar(100) NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classement`
--

INSERT INTO `classement` (`id`, `region`, `tournoi`, `nom_prenom`, `points`) VALUES
(1, 'madagascar', 'National', 'ANDRIAMPENOMANANA Fiderana', 10),
(2, 'la-reunion', 'National', 'Mialy Andio', 5),
(3, 'madagascar', 'National', 'Marco Razafindrakoto', 10),
(4, 'la-reunion', 'National', 'Mr Bisset', 7);

-- --------------------------------------------------------

--
-- Table structure for table `classement_madagascar`
--

CREATE TABLE `classement_madagascar` (
  `id` int(11) NOT NULL,
  `tournament` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `points_mada` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `classement_reunion`
--

CREATE TABLE `classement_reunion` (
  `id` int(11) NOT NULL,
  `tournament` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `points_reunion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `prix` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `description`, `image`, `prix`) VALUES
(5, 'Table', 'Table de Billard', '670ff1e6b5115_8.png', 250000.00),
(6, 'Pointe', 'Pointe de Baton', '670ff3456dc69_12.png', 20000.00),
(7, 'Triangle', 'Triangle pour le baton', '670ff42aa6dbd_13.png', 50000.00),
(8, 'Materielles', 'AZAAEKSD Nffsksd', '671fcd9ca7c85_670ff42aa6dbd_13.png', 40000.00),
(9, 'Vango', 'Azaeaz azrar', '671fce11ef3c1_670ff3456dc69_12.png', 30000.00);

-- --------------------------------------------------------

--
-- Table structure for table `resultats`
--

CREATE TABLE `resultats` (
  `id` int(11) NOT NULL,
  `date_result` date NOT NULL,
  `equipe` varchar(255) NOT NULL,
  `points` varchar(10) NOT NULL,
  `score` varchar(10) NOT NULL,
  `region` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resultats`
--

INSERT INTO `resultats` (`id`, `date_result`, `equipe`, `points`, `score`, `region`) VALUES
(1, '2024-10-15', 'National', '10', '12-12', 'madagascar'),
(2, '2024-10-16', 'National', '20', '12-12', 'la-reunion');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classement`
--
ALTER TABLE `classement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classement_madagascar`
--
ALTER TABLE `classement_madagascar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classement_reunion`
--
ALTER TABLE `classement_reunion`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resultats`
--
ALTER TABLE `resultats`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classement`
--
ALTER TABLE `classement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `classement_madagascar`
--
ALTER TABLE `classement_madagascar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classement_reunion`
--
ALTER TABLE `classement_reunion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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

--
-- AUTO_INCREMENT for table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `resultats`
--
ALTER TABLE `resultats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
