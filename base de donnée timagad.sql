-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 12 sep. 2019 à 21:02
-- Version du serveur :  5.7.24
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `timagad`
--

-- --------------------------------------------------------

--
-- Structure de la table `horaire`
--

DROP TABLE IF EXISTS `horaire`;
CREATE TABLE IF NOT EXISTS `horaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idrestaurant` int(11) NOT NULL,
  `lundi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mardi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mercredi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jeudi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendredi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `samedi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dimanche` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `horaire`
--

INSERT INTO `horaire` (`id`, `idrestaurant`, `lundi`, `mardi`, `mercredi`, `jeudi`, `vendredi`, `samedi`, `dimanche`) VALUES
(3, 2, '18:30 - 20:00', '12:00 - 14:00 , 18:30 - 20:00', '12:00 - 14:00 , 18:30 - 20:00', '12:00 - 14:00 , 18:30 - 20:00', '12:00 - 14:00 , 18:30 - 20:00', '12:00 - 14:00 , 18:30 - 20:00', 'fermer'),
(5, 1, '18:30 - 20:00', '12:00 - 14:00 , 18:30 - 20:00', '12:00 - 14:00 , 18:30 - 20:00', '12:00 - 14:00 , 18:30 - 20:00', '12:00 - 14:00 , 18:30 - 20:00', '12:00 - 14:00 , 18:30 - 20:00', 'fermer');

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

DROP TABLE IF EXISTS `migration_versions`;
CREATE TABLE IF NOT EXISTS `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20190911140654', '2019-09-11 14:08:56'),
('20190911141308', '2019-09-11 14:13:16');

-- --------------------------------------------------------

--
-- Structure de la table `restaurant`
--

DROP TABLE IF EXISTS `restaurant`;
CREATE TABLE IF NOT EXISTS `restaurant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `restaurant`
--

INSERT INTO `restaurant` (`id`, `name`) VALUES
(1, 'timgad'),
(2, 'le parisien'),
(3, 'le Marseille');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
