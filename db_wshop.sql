-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 10 oct. 2023 à 15:21
-- Version du serveur : 5.7.36
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_wshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `magasins`
--

DROP TABLE IF EXISTS `magasins`;
CREATE TABLE IF NOT EXISTS `magasins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `magasins`
--

INSERT INTO `magasins` (`id`, `nom`, `adresse`) VALUES
(1, 'Lidl', 'Paris'),
(2, 'Carrefour', 'Paris'),
(3, 'Auchan', 'La defense'),
(4, 'Lidl', 'Lyon'),
(5, 'Intermarche', 'Bordeaux'),
(6, 'Casino', 'Lille'),
(7, 'Carrefour', 'Caen'),
(8, 'Franprix', 'Strasbourg'),
(9, 'Aldi', 'Nantes'),
(10, 'Lidl', 'Nice'),
(14, 'Carrefour', 'Milan');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
