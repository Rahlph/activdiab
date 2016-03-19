-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 19 Mars 2016 à 10:45
-- Version du serveur :  5.7.9
-- Version de PHP :  5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `activdiab`
--

-- --------------------------------------------------------

--
-- Structure de la table `rapport`
--

DROP TABLE IF EXISTS `rapport`;
CREATE TABLE IF NOT EXISTS `rapport` (
  `id` int(11) NOT NULL,
  `poids` int(11) NOT NULL,
  `taille` int(11) NOT NULL,
  `tourTaille` int(11) NOT NULL,
  `medicament` tinyint(1) NOT NULL,
  `typeInsuline` int(11) NOT NULL,
  `activitePhysique` tinyint(4) NOT NULL,
  `glycemie` int(11) NOT NULL,
  `uniteInsuline` int(11) NOT NULL,
  `typeActivite` int(11) NOT NULL,
  `intensite` int(11) NOT NULL,
  `tmpstamp` int(11) NOT NULL,
  `nombrePas` int(11) NOT NULL,
  `objectifPas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `rapport`
--

INSERT INTO `rapport` (`id`, `poids`, `taille`, `tourTaille`, `medicament`, `typeInsuline`, `activitePhysique`, `glycemie`, `uniteInsuline`, `typeActivite`, `intensite`, `tmpstamp`, `nombrePas`, `objectifPas`) VALUES
(0, 100, 180, 150, 1, 2, 5, 2, 1, -1, -1, -1, -1, -1),
(1, -1, -1, -1, -1, -1, -1, 3, 1, -1, -1, 400000, -1, -1),
(1, -1, -1, -1, -1, -1, -1, 1, 1, -1, -1, 420000, -1, -1),
(2, -1, -1, -1, -1, -1, -1, 3, 2, -1, -1, 400128, -1, -1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identifiant de l''utilisateur',
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `diabete` tinyint(4) NOT NULL COMMENT 'Type de diabete',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `diabete`) VALUES
(1, 'Tenich', 'Othman', 1),
(2, 'Lob', 'Raphael', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
