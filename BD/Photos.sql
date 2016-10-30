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
-- Structure de la table `Photos`
--

CREATE TABLE IF NOT EXISTS `Photos` (
  `idPhoto` int(10) NOT NULL,
  `nomPhoto` varchar(50) NOT NULL,
  `datePhoto` date NOT NULL,
  `descriptionPhoto` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Photos`
--

INSERT INTO `Photos` (`idPhoto`, `nomPhoto`, `datePhoto`, `descriptionPhoto`) VALUES
(1, '1280x720-8JN.jpg', '2016-06-01', 'Test Description'),
(2, '3038292-4329815.jpg', '2016-06-01', NULL),
(3, 'cherif_kheddam.jpg', '2016-06-02', NULL),
(4, 'elhasnaoui1.jpg', '2016-06-02', NULL),
(5, 'MAMMERI_Mouloud.jpg', '2016-06-03', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Photos`
--
ALTER TABLE `Photos`
  ADD PRIMARY KEY (`idPhoto`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Photos`
--
ALTER TABLE `Photos`
  MODIFY `idPhoto` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
