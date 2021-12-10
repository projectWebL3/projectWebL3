-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 10 déc. 2021 à 12:19
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `coach`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `nRue` int(3) NOT NULL,
  `voie` varchar(50) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `codeP` int(6) NOT NULL,
  `mdp` varchar(10) NOT NULL,
  `mail` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `nRue`, `voie`, `ville`, `codeP`, `mdp`, `mail`) VALUES
(1, 'Dupont', 'Zoe', 12, 'avenue soleil', 'Courbevoie', 92400, '123', 'zo@yahoo.fr'),
(3, 'dupuis', 'florent', 54, 'rue des etudiants', 'Courbevoie', 92400, 'root', 'floflo@yaho.fr'),
(7, 'Soleil', 'Clemence', 25, 'avenue de la republique', 'Fontenay-Sous-Bois', 94120, 'levant', 'clemnce.rep@gmail.com'),
(11, 'Valant', 'Pierre', 12, 'rue de la mer', 'Fontenay-Sous-Bois', 94120, 'pasdidee', 'pierrev@orange.fr');

-- --------------------------------------------------------

--
-- Structure de la table `coach`
--

DROP TABLE IF EXISTS `coach`;
CREATE TABLE IF NOT EXISTS `coach` (
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nRue` int(3) NOT NULL,
  `voie` varchar(50) NOT NULL,
  `codeP` int(6) NOT NULL,
  `Ville` varchar(50) NOT NULL,
  `tel` int(8) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `bio` text NOT NULL,
  `prestation` text NOT NULL,
  `lieu` varchar(50) NOT NULL,
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `mdp` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `coach`
--

INSERT INTO `coach` (`nom`, `prenom`, `nRue`, `voie`, `codeP`, `Ville`, `tel`, `mail`, `bio`, `prestation`, `lieu`, `id`, `mdp`) VALUES
('Miage', 'Sara', 12, 'avenue de la republique', 94120, 'Fontenay-Sous-Bois', 6070809, 'sare@gmail.com', 'diplomée de master staps en 2018\r\narrivée 20e marathon de Paris 2020 ', 'Running, Endurance, Course à pied\r\n', 'Paris et petite couronne', 2, 'sara1234'),
('Des Barres', 'Zoé', 23, 'place d\'Italie', 75013, 'Paris', 651191426, 'zo@paris.fr', 'diplôme de coach sportif spécialisé', 'Musculation, Fitness', 'Paris', 21, 'zoe'),
('dupont', 'lily', 78, 'rue d\'espagne', 94120, 'Fontenay-Sous-Bois', 7080975, 'lilydup@gmail.com', 'Diplomé Master Staps\r\n23 ans ', 'fitness', 'Paris et petite couronne', 16, '123unbde'),
('Jolie', 'Emilie', 12, 'rue de Neuilly', 94120, 'Fontenay-Sous-Bois', 23456788, 'em@gmail.com', 'diplomée du BJEPS en 2015,\r\n10 ans d\'experience en tant que coach sportif', 'fitness', 'Paris et petite couronne', 19, 'root'),
('Comun', 'Clement', 55, 'rue des Peuplier', 92400, 'Courbevoie', 92400, 'maildeClem@gmail.com', 'staps', 'motivation', 'Paris', 14, '123soleil'),
('Desponts', 'Laura', 12, 'rue des champs', 92400, 'Courbevoie', 8090907, 'lalau@gmail.com', 'diplomée du Bjeps\r\n', 'musculation', 'Paris et petite couronne', 11, '123soleil');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
