-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Mer 02 Décembre 2015 à 21:52
-- Version du serveur: 5.5.8
-- Version de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `baselafleur1`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `cat_code` varchar(3) NOT NULL DEFAULT '',
  `cat_libelle` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`cat_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`cat_code`, `cat_libelle`) VALUES
('bul', 'Bulbes'),
('mas', 'Plantes à massif'),
('ros', 'Rosiers');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `pdt_ref` char(3) NOT NULL DEFAULT '',
  `pdt_designation` varchar(50) NOT NULL DEFAULT '',
  `pdt_prix` decimal(5,2) NOT NULL DEFAULT '0.00',
  `pdt_image` varchar(50) NOT NULL DEFAULT '',
  `pdt_categorie` char(3) NOT NULL DEFAULT '',
  PRIMARY KEY (`pdt_ref`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`pdt_ref`, `pdt_designation`, `pdt_prix`, `pdt_image`, `pdt_categorie`) VALUES
('b01', '3 bulbes de bégonias', '5.00', 'bulbes_begonia.jpg', 'bul'),
('b02', '10 bulbes de dahlias', '12.00', 'bulbes_dahlia.jpg', 'bul'),
('b03', '50 glaïeuls', '9.00', 'bulbes_glaieul.jpg', 'bul'),
('m01', 'Lot de 3 marguerites', '5.00', 'massif_marguerite.jpg', 'mas'),
('m02', 'Pour un bouquet de 6 pensées', '6.00', 'massif_pensee.jpg', 'mas'),
('m03', 'Mélange varié de 10 plantes à massif', '15.00', 'massif_melange.jpg', 'mas'),
('r01', '1 pied spécial grandes fleurs', '20.00', 'rosiers_gdefleur.jpg', 'ros'),
('r02', 'Une variété sélectionnée pour son parfum', '9.00', 'rosiers_parfum.jpg', 'ros'),
('r03', 'Rosier arbuste', '8.00', 'rosiers_arbuste.jpg', 'ros');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `mdp` varchar(40) NOT NULL,
  `cat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `mdp`, `cat`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'aaa', 'bbb', 'client');
