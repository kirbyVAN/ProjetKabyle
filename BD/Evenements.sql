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
-- Structure de la table `Evenements`
--

CREATE TABLE IF NOT EXISTS `Evenements` (
  `idEvent` int(10) NOT NULL,
  `nomEvent` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dateDebut` date NOT NULL,
  `dateFin` date DEFAULT NULL,
  `descriptionEvent` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `Evenements`
--

INSERT INTO `Evenements` (`idEvent`, `nomEvent`, `dateDebut`, `dateFin`, `descriptionEvent`) VALUES
(7, 'Test du 26 oct', '2016-10-26', '2016-10-27', 'Ceci est un test d''ajout datant du 26 octobre 2016.\r\nPassé cette date, il ne sera plus visible sur le site.'),
(8, 'Rentré novembre', '2016-10-31', '2016-10-31', 'Le lundi 31 octobre est le premier jour de la rentré des vacances de la Toussaint. Par contre le lendemain est férié.');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Evenements`
--
ALTER TABLE `Evenements`
  ADD PRIMARY KEY (`idEvent`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Evenements`
--
ALTER TABLE `Evenements`
  MODIFY `idEvent` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
