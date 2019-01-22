-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  mar. 22 jan. 2019 à 08:28
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `phpcourse`
--

-- --------------------------------------------------------

--
-- Structure de la table `movies_thomas`
--

DROP TABLE IF EXISTS `movies_thomas`;
CREATE TABLE IF NOT EXISTS `movies_thomas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `actors` varchar(255) NOT NULL,
  `director` varchar(50) NOT NULL,
  `producer` varchar(50) NOT NULL,
  `year_of_prod` year(4) NOT NULL,
  `language` varchar(2) NOT NULL,
  `category` enum('horreur','comedie','documentaire') NOT NULL,
  `storyline` text,
  `video` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `movies_thomas`
--

INSERT INTO `movies_thomas` (`id`, `title`, `actors`, `director`, `producer`, `year_of_prod`, `language`, `category`, `storyline`, `video`) VALUES
(1, 'Hello World', 'John Doe, Carlos Santos', 'Dédé John', 'Carlos John', 1950, 'de', 'documentaire', NULL, NULL),
(2, 'Hello World', 'John Doe, Carlos Santos', 'Dédé John', 'Carlos John', 1950, 'de', 'documentaire', NULL, NULL),
(3, 'Hello World', 'John Doe, Carlos Santos', 'Dédé John', 'Carlos John', 1950, 'de', 'documentaire', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium, ducimus quisquam. Quod et minima aperiam! Facilis expedita commodi beatae accusamus. At iusto consectetur voluptate, eum debitis veniam sed illum vel!', NULL),
(4, 'Hello World', 'John Doe, Carlos Santos', 'Dédé John', 'Carlos John', 1950, 'de', 'documentaire', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium, ducimus quisquam. Quod et minima aperiam! Facilis expedita commodi beatae accusamus. At iusto consectetur voluptate, eum debitis veniam sed illum vel!', NULL),
(5, 'wwwwww', 'wwwwww', 'wwwwww', 'wwwwww', 1901, 'fr', 'horreur', NULL, NULL),
(6, 'Hello World 2', 'John Doe, Carlos Santos', 'Han Solo', 'Carlos John', 1924, 'es', 'comedie', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae assumenda nemo nisi porro magni eaque delectus quam pariatur animi iste voluptate culpa nihil maxime ipsum dolor eius ab, vero expedita.', 'http://example.com/exam-blanc-php/exercice3/add.php'),
(7, 'sdrzdsrzesfs', 'fsdfsdfsdf', 'sdfsdfsdf', 'sdfsdfsdfds', 1905, 'de', 'horreur', 'ftsde', 'http://localhost/exam-blanc-php/exercice3/add.php'),
(8, 'sdfdsfdsf', 'sfsdfsf', 'sdfsdfsd', 'fsdfsdfsdfdsf', 1901, 'fr', 'horreur', 'sdfsdfsfd', NULL),
(9, 'sdfdsfdsf', 'sfsdfsf', 'sdfsdfsd', 'fsdfsdfsdfdsf', 1901, 'fr', 'horreur', 'sdfsdfsfd', NULL),
(10, 'sdfdsfdsf', 'sfsdfsf', 'sdfsdfsd', 'fsdfsdfsdfdsf', 1901, 'fr', 'horreur', 'sdfsdfsfd', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
