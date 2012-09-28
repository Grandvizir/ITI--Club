-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 28 Septembre 2012 à 17:24
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `bde`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `name`) VALUES
(1, 'PHP'),
(2, 'C#'),
(3, 'Architecture'),
(4, 'Projet');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `contenu` text NOT NULL,
  `created` varchar(255) NOT NULL,
  `power` int(11) NOT NULL,
  `postId` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `userId`, `contenu`, `created`, `power`, `postId`) VALUES
(9, 6, 'Essaye :) !', '1347137760', 16, 4),
(10, 14, 'toto\r\n', '1347359396', 0, 4),
(11, 14, 'coucou', '1347359403', 0, 4),
(12, 6, 'ddd', '1348390299', 2, 5);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `ip` varchar(25) NOT NULL,
  `sendTime` varchar(15) NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id`, `name`, `lastName`, `mail`, `contenu`, `ip`, `sendTime`, `view`) VALUES
(3, 'cc', 'cc', 'houdyerpierre@gmail.com', 'sss', '127.0.0.1', '1347293917', 0);

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) CHARACTER SET utf8 COLLATE utf8_roman_ci NOT NULL,
  `create` varchar(55) CHARACTER SET utf8 COLLATE utf8_roman_ci NOT NULL,
  `contenu` text CHARACTER SET utf8 COLLATE utf8_roman_ci NOT NULL,
  `userId` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `event`
--

INSERT INTO `event` (`id`, `name`, `create`, `contenu`, `userId`) VALUES
(4, 'presentation', '2222222', 'plop ! Nous arrivons bientôt !', 4),
(5, 'presentation', '2222222', 'plop ! Nous arrivonxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxs bientot !', 4);

-- --------------------------------------------------------

--
-- Structure de la table `file`
--

CREATE TABLE IF NOT EXISTS `file` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `path` varchar(100) NOT NULL,
  `timeUpload` int(11) NOT NULL,
  `userId` int(55) NOT NULL,
  `pathMin` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `file`
--

INSERT INTO `file` (`id`, `name`, `path`, `timeUpload`, `userId`, `pathMin`) VALUES
(13, 'mamar.jpg', 'bundle/upload/ressource/1348769287mamar.jpg', 1348769287, 6, 'bundle/upload/ressource/min/1348769287mamar.jpg'),
(14, 'photo8.PNG', 'bundle/upload/ressource/1348769300photo8.PNG', 1348769300, 6, 'bundle/upload/ressource/min/1348769300photo8.PNG');

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `userId` int(11) NOT NULL,
  `created` varchar(255) NOT NULL,
  `lastModify` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `post`
--

INSERT INTO `post` (`id`, `name`, `contenu`, `categorie`, `userId`, `created`, `lastModify`) VALUES
(4, 'premiere question', 'avez-vous pensÃ© au flood ?', 'PHP', 6, '1347137746', 1347137746),
(5, 'plop', 'plop', 'C#', 6, '1348390277', 1348390277);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `promo` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `lastConnexion` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'membre',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `name`, `lastName`, `mail`, `pwd`, `promo`, `ip`, `lastConnexion`, `role`) VALUES
(4, 'jean', 'dujardin', 'jardin.jean@gmail.com', 'd87c93a9333b5b3149136e0a050bfb9a', 's4', '127.0.0.1', '1346942594', 'membre'),
(6, 'pierre', 'houdyer', 'houdyerpierre@gmail.com', 'd87c93a9333b5b3149136e0a050bfb9a', 's5', '127.0.0.1', '1348770868', 'admin'),
(11, 'TimothÃ©e', 'PILLARD', 'pillar@intechinfo.fr', 'ba47a8ac46b6e383895fffc9fb6cfb31', 's5', '81.249.31.81', '1347132552', 'membre'),
(14, 'Thomas', 'Michau', 'thomasmichau@gmail.com', '5ebe2294ecd0e0f08eab7690d2a6ee69', 's5', '46.193.133.96', '1347359314', 'membre'),
(15, 'test', 'test', 'test', '098f6bcd4621d373cade4e832627b4f6', 's1', '195.25.195.79', '1348134088', 'membre');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
