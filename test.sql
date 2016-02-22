-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Sam 20 Février 2016 à 15:33
-- Version du serveur :  5.6.20-log
-- Version de PHP :  5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
`id` int(11) NOT NULL,
  `Titre` text NOT NULL,
  `date` date NOT NULL,
  `contenu` text NOT NULL,
  `Auteur` text NOT NULL,
  `image` text NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `Titre`, `date`, `contenu`, `Auteur`, `image`) VALUES
(20, 'Les manchot', '2015-02-02', 'Ils sont blanc et noir', 'Charlie', 'Penguins.jpg'),
(18, 'Je suis charlie', '2015-01-09', 'Pierre Paul Jack', 'Charlie', 'Lighthouse.jpg'),
(19, 'Je suis charlie2', '2015-01-09', 'Pierre Paul Jack Rick', 'Charlie2', 'Jellyfish.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `objet`
--

CREATE TABLE IF NOT EXISTS `objet` (
`Id` int(11) NOT NULL,
  `Quantité` int(11) NOT NULL,
  `Nom` text NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `objet`
--

INSERT INTO `objet` (`Id`, `Quantité`, `Nom`) VALUES
(1, 3, 'Vélo'),
(2, 2, 'Avion'),
(3, 2, 'Voiture'),
(4, 2, 'Ballon'),
(5, 8, 'balle'),
(6, 2, 'test'),
(11, 20, 'roue'),
(9, 2, 'test3'),
(10, 45, 'mine'),
(12, 20, 'roue');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
`id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `sid` varchar(255) NOT NULL,
  `Nom` text NOT NULL,
  `Prenom` text NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `email`, `mdp`, `sid`, `Nom`, `Prenom`) VALUES
(1, 'der@gmail.com', 'der', 'f827475ed5aa6710c055a8dfaa16a518', '', ''),
(2, 'der2@gmail.fr', 'd4c470c63ba7e37b7530f30c7eed0bf6', 'f827475ed5aa6710c055a8dfaa16a518', '', ''),
(5, '', '', 'f827475ed5aa6710c055a8dfaa16a518', '', ''),
(6, '', '', 'f827475ed5aa6710c055a8dfaa16a518', '', ''),
(8, 'der3@gmail.dat', '6bd48b1e57856137037bfee4dec8d57f', 'e0b124cb004271fe3d91d4c8abcac438', '', ''),
(9, 'a@a.com', '47bce5c74f589f4867dbd57e9ca9f808', '3726819d000f0463b92f9308ecbf4074', '', ''),
(10, 'b@b.com', '098f6bcd4621d373cade4e832627b4f6', '', '', ''),
(13, 'c.r@sfr.fr', 'fc818be3f3fcf54466048a35ba8fa73d', '', 'Rick', 'Carl'),
(14, 't.r@sfr.fr', 'fc818be3f3fcf54466048a35ba8fa73d', '', 'test', 'test2'),
(15, 'r@r.r', '4b43b0aee35624cd95b910189b3dc231', '', 'vervoort', 'Romain');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `objet`
--
ALTER TABLE `objet`
 ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
 ADD PRIMARY KEY (`id`), ADD KEY `sid` (`sid`), ADD KEY `email` (`email`), ADD KEY `mdp` (`mdp`), ADD KEY `sid_2` (`sid`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `objet`
--
ALTER TABLE `objet`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
