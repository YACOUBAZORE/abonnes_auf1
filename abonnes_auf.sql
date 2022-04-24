-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 23 avr. 2022 à 18:56
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `auf_bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnes_auf`
--

CREATE TABLE `abonnes_auf` (
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `numero` int(30) NOT NULL,
  `debut_d_abonnement` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `abonnes_auf`
--

INSERT INTO `abonnes_auf` (`nom`, `prenom`, `date_de_naissance`, `email`, `numero`, `debut_d_abonnement`) VALUES
('zo', '', '0000-00-00', '', 0, '0000-00-00'),
('sankara', 'alimatou', '2003-12-12', 'alimatousankara@gmail.com', 453787, '2022-02-12'),
('asaf', 'sd', '2022-04-19', 'cynthyiaalea@gmail.com', 23344544, '2022-04-26'),
('keita', 'gaoussou', '2007-12-08', 'cynthyiavale@gmail.com', 54367, '2020-01-15'),
('valea', 'cynthia', '2000-12-31', 'cynthyiavalea@gmail.com', 56772377, '2022-03-04'),
('ouedraogo', 'germain', '0000-00-00', 'gemainouedraogo@gmail.com', 3256768, '2022-12-04'),
('zore', 'gaoussou', '2000-08-01', 'gusd2mail.com', 456790, '2022-12-13'),
('zore', 'mariam', '1998-12-11', 'mariamzore1@gmail.com', 5658790, '2022-12-05'),
('iii', 'ggg', '2022-04-23', 'refhjnm', 333454, '2022-04-23'),
('zore', 'soumaila', '1998-12-12', 'soumailazore9@gmail.com', 70323179, '2022-04-23'),
('zore', 'yacouba', '2000-12-04', 'yacoubazor@gmail.com', 56654379, '2006-12-19'),
('zore', 'yacouba', '2012-12-19', 'yacoubazore9@gmail.com', 72080667, '2022-04-12'),
('zore', 'yacouba', '2000-12-04', 'yacoubazore@gmail.com', 56654379, '2006-12-19'),
('zo', 'yacou', '1998-12-12', 'yaczo@gmail.com', 436789, '2022-12-04'),
('zagre', 'yacouba', '2022-12-01', 'zagre', 555, '2022-12-02');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abonnes_auf`
--
ALTER TABLE `abonnes_auf`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
