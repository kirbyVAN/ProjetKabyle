-- phpMyAdmin SQL Dump
-- version 4.4.15.8
-- https://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 30 Octobre 2016 à 08:02
-- Version du serveur :  5.5.50-MariaDB
-- Version de PHP :  5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `p1405185`
--

-- --------------------------------------------------------

--
-- Structure de la table `Utilisateur`
--

CREATE TABLE IF NOT EXISTS `Utilisateur` (
  `Nom` varchar(35) NOT NULL,
  `Prenom` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Age` int(3) NOT NULL,
  `Email` varchar(35) NOT NULL,
  `Login` varchar(20) NOT NULL,
  `Pass` varchar(40) NOT NULL,
  `admin` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Utilisateur`
--

INSERT INTO `Utilisateur` (`Nom`, `Prenom`, `Age`, `Email`, `Login`, `Pass`, `admin`) VALUES
('Anonyme', NULL, 0, 'Anonyme', 'Anonyme', 'Anonyme', 0),
('iut', NULL, 0, 'iut', 'iut', 'iut', 1),
('Admin', NULL, 0, 'admin@iut.fr', 'King', 'admin', 1),
('Bush', 'Georges W', 70, 'gwb@whitehouse.gov', 'USpresident', 'GodBlessUSA$911', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  ADD PRIMARY KEY (`Login`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
