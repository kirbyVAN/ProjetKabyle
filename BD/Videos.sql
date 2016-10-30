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
-- Structure de la table `Videos`
--

CREATE TABLE IF NOT EXISTS `Videos` (
  `idVideo` int(10) NOT NULL,
  `titre` varchar(200) DEFAULT NULL,
  `url` varchar(100) NOT NULL,
  `dateVideo` date NOT NULL,
  `descriptionVideo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Videos`
--

INSERT INTO `Videos` (`idVideo`, `titre`, `url`, `dateVideo`, `descriptionVideo`) VALUES
(1, 'Cheikh EL HASNAOUI (La Maison Blanche) ', 'https://www.youtube.com/embed/h_6NXlL37WQ', '2016-06-06', NULL),
(2, 'Cheikh El-Hasnaoui - Tiqvayliyin - ( LES FEMMES KABYLES )', 'https://www.youtube.com/embed/M_27sB3lqG4', '2016-06-01', NULL),
(3, 'A Mouh A Mouh de Slimane AZEM par Salah Gaoua et les Hirondelles', 'https://www.youtube.com/embed/sa0mgcguMEQ', '2016-06-02', NULL),
(4, 'Cherif Kheddam - L''Dzayer Inchallah Ats''Hlodh (live)', 'https://www.youtube.com/embed/uKHM1J96HSw', '2016-06-03', NULL),
(5, 'CHERIF KHEDDAM SLIGH I YEMA. ', 'https://www.youtube.com/embed/B_OPn_AW7pg', '2016-06-05', NULL),
(6, 'Algerie: CHEIKH EL HASNAOUI - Aruah Aruah', 'https://www.youtube.com/embed/rPSCLdrk3Oo', '2016-06-13', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Videos`
--
ALTER TABLE `Videos`
  ADD PRIMARY KEY (`idVideo`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Videos`
--
ALTER TABLE `Videos`
  MODIFY `idVideo` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
