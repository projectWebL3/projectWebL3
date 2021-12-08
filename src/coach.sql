-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 23 nov. 2021 à 13:38
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
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
  `img` varchar(50) NOT NULL,
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `mdp` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
