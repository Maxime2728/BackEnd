-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 26 sep. 2022 à 10:55
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `autoecolesimiane`
--
CREATE DATABASE IF NOT EXISTS `autoecolesimiane` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `autoecolesimiane`;

-- --------------------------------------------------------

--
-- Structure de la table `t_d_message_msg`
--

DROP TABLE IF EXISTS `t_d_message_msg`;
CREATE TABLE `t_d_message_msg` (
  `MSG_ID` int(11) NOT NULL,
  `MSG_MESSAGE` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `t_d_permis_reussi_type_prt`
--

DROP TABLE IF EXISTS `t_d_permis_reussi_type_prt`;
CREATE TABLE `t_d_permis_reussi_type_prt` (
  `PRT_ID` int(11) NOT NULL,
  `PRT_LIBELLE` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_d_permis_reussi_type_prt`
--

INSERT INTO `t_d_permis_reussi_type_prt` (`PRT_ID`, `PRT_LIBELLE`) VALUES
(1, 'Pas encore passé / Pas mis à jours'),
(2, 'Permis RÉUSSI ! Félicitations'),
(3, 'Raté, contactez-nous');

-- --------------------------------------------------------

--
-- Structure de la table `t_d_usertype_uty`
--

DROP TABLE IF EXISTS `t_d_usertype_uty`;
CREATE TABLE `t_d_usertype_uty` (
  `UTY_ID` int(11) NOT NULL,
  `UTY_LIBELLE` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_d_usertype_uty`
--

INSERT INTO `t_d_usertype_uty` (`UTY_ID`, `UTY_LIBELLE`) VALUES
(0, 'Élève'),
(1, 'Administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `t_d_user_usr`
--

DROP TABLE IF EXISTS `t_d_user_usr`;
CREATE TABLE `t_d_user_usr` (
  `USR_ID` int(11) NOT NULL,
  `USR_LASTNAME` varchar(100) DEFAULT NULL,
  `USR_FIRSTNAME` varchar(100) DEFAULT NULL,
  `USR_AGE` int(2) DEFAULT NULL,
  `USR_MAIL` varchar(255) DEFAULT NULL,
  `USR_PASSWORD` varchar(255) NOT NULL,
  `USR_PHONE` int(10) DEFAULT NULL,
  `USR_CITY` varchar(100) DEFAULT NULL,
  `USR_ZIPCODE` varchar(5) DEFAULT NULL,
  `USR_ADRESSE` varchar(255) DEFAULT NULL,
  `PRT_ID` int(1) DEFAULT 1,
  `UTY_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_d_user_usr`
--

INSERT INTO `t_d_user_usr` (`USR_ID`, `USR_LASTNAME`, `USR_FIRSTNAME`, `USR_AGE`, `USR_MAIL`, `USR_PASSWORD`, `USR_PHONE`, `USR_CITY`, `USR_ZIPCODE`, `USR_ADRESSE`, `PRT_ID`, `UTY_ID`) VALUES
(21, 'Bizeau', 'Maxime', NULL, 'bizeaumaxime78@gmail.com', '9cf95dacd226dcf43da376cdb6cbba7035218921', 682549823, NULL, NULL, NULL, 2, 1),
(22, 'Forges', 'Alexis', NULL, 'alexisforges@gmail.com', '9cf95dacd226dcf43da376cdb6cbba7035218921', 608959869, NULL, NULL, NULL, 1, 0),
(23, 'GALPIN', 'Ameline', NULL, 'test1@gmail.com', '9cf95dacd226dcf43da376cdb6cbba7035218921', 0, NULL, NULL, NULL, 1, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `t_d_message_msg`
--
ALTER TABLE `t_d_message_msg`
  ADD PRIMARY KEY (`MSG_ID`);

--
-- Index pour la table `t_d_permis_reussi_type_prt`
--
ALTER TABLE `t_d_permis_reussi_type_prt`
  ADD PRIMARY KEY (`PRT_ID`);

--
-- Index pour la table `t_d_usertype_uty`
--
ALTER TABLE `t_d_usertype_uty`
  ADD PRIMARY KEY (`UTY_ID`);

--
-- Index pour la table `t_d_user_usr`
--
ALTER TABLE `t_d_user_usr`
  ADD PRIMARY KEY (`USR_ID`),
  ADD KEY `f_k_uty` (`UTY_ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `t_d_message_msg`
--
ALTER TABLE `t_d_message_msg`
  MODIFY `MSG_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_d_permis_reussi_type_prt`
--
ALTER TABLE `t_d_permis_reussi_type_prt`
  MODIFY `PRT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `t_d_usertype_uty`
--
ALTER TABLE `t_d_usertype_uty`
  MODIFY `UTY_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `t_d_user_usr`
--
ALTER TABLE `t_d_user_usr`
  MODIFY `USR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
