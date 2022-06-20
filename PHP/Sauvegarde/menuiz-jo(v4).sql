-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 20 juin 2022 à 13:02
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
-- Base de données : `menuiz-jo`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_d_user_usr`
--

CREATE TABLE `t_d_user_usr` (
  `USR_ID` int(11) NOT NULL,
  `ADR_ID` int(11) DEFAULT NULL,
  `USR_MAIL` varchar(1024) NOT NULL,
  `USR_PASSWORD` varchar(1024) NOT NULL,
  `USR_FIRSTNAME` varchar(1024) NOT NULL,
  `USR_LASTNAME` varchar(1024) NOT NULL,
  `username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_d_user_usr`
--

INSERT INTO `t_d_user_usr` (`USR_ID`, `ADR_ID`, `USR_MAIL`, `USR_PASSWORD`, `USR_FIRSTNAME`, `USR_LASTNAME`, `username`) VALUES
(1, 1, 'efzefz@zfefze.com', 'e38ad214943daad1d64c102faec29de4afe9da3d', 'Paul', 'Marchand', 'paulm'),
(2, 3, 'sefqBZN@sfq.com', '2aa60a8ff7fcd473d321e0146afd9e26df395147', 'Bruno', 'Laporte', 'brulaporte'),
(3, 4, 'drgfagra@aerga.com', '1119cfd37ee247357e034a08d844eea25f6fd20f', 'Benoit', 'Gras', 'begras'),
(4, NULL, '', 'e7a444c0ce29f61dbddf751f6e001c0b', 'Maxime', 'Bizeau', 'Mrsniper78'),
(6, NULL, 'bizeaumaxime78@gmail.com', 'e7a444c0ce29f61dbddf751f6e001c0b', 'Maxime', 'Bizeau', 'Thomas Campanelli'),
(7, NULL, 'f-monegasque@gmail.com', 'e7a444c0ce29f61dbddf751f6e001c0b', 'Monegasque', 'Franck', 'FranckMonegasque'),
(8, NULL, 'gwenael56@hotmail.fr', 'c1126e56e2cd057314e2a06dc71efc50', 'gwen', 'gwenoulebg', 'gwenator'),
(10, NULL, 'GG@GG.fr', '633de4b0c14ca52ea2432a3c8a5c4c31', 'Georges', 'De La Jungle', 'GG'),
(11, NULL, 'aa@aa', '4124bc0a9335c27f086f24ba207a4912', 'gg', 'gg', 'aa'),
(12, NULL, 'guillaume.delacroix@afpa.fr', '41060d3ddfdf63e68fc2bf196f652ee9', 'Delacroix', 'Guillaume', 'Guigui'),
(13, NULL, 'uhreyz@rrg.ef', 'e7a444c0ce29f61dbddf751f6e001c0b', 'Maxime', 'Bizeau', 'Thomas');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `t_d_user_usr`
--
ALTER TABLE `t_d_user_usr`
  ADD PRIMARY KEY (`USR_ID`),
  ADD KEY `FK_T_D_USER_A_COMME_I_T_D_ADDR3` (`ADR_ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `t_d_user_usr`
--
ALTER TABLE `t_d_user_usr`
  MODIFY `USR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `t_d_user_usr`
--
ALTER TABLE `t_d_user_usr`
  ADD CONSTRAINT `FK_T_D_USER_A_COMME_I_T_D_ADDR3` FOREIGN KEY (`ADR_ID`) REFERENCES `t_d_address_adr` (`ADR_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
