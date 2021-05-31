-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 30 mai 2021 à 20:13
-- Version du serveur :  10.6.0-MariaDB
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `calliopedb`
--

-- --------------------------------------------------------

--
-- Structure de la table `historic`
--

DROP TABLE IF EXISTS `historic`;
CREATE TABLE IF NOT EXISTS `historic` (
  `historic_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `museum_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`historic_id`),
  KEY `user_id` (`user_id`),
  KEY `museum_id` (`museum_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `museum`
--

DROP TABLE IF EXISTS `museum`;
CREATE TABLE IF NOT EXISTS `museum` (
  `museum_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `museum_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`museum_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `museum`
--

INSERT INTO `museum` (`museum_id`, `museum_name`) VALUES
(1, 'Le centre Pompidou'),
(2, 'Citee des Sciences'),
(3, 'Les invalides'),
(4, 'Le Louvre'),
(5, 'Musee d Orsay'),
(6, 'Musee du quai Branly'),
(7, 'Le musee Rodin');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_email` varchar(50) DEFAULT NULL,
  `user_firstname` varchar(20) DEFAULT NULL,
  `user_lastname` varchar(20) DEFAULT NULL,
  `user_password` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `historic`
--
ALTER TABLE `historic`
  ADD CONSTRAINT `historic_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `historic_ibfk_2` FOREIGN KEY (`museum_id`) REFERENCES `museum` (`museum_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
