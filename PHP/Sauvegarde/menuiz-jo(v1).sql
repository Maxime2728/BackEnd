-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 16 juin 2022 à 08:39
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
CREATE DATABASE IF NOT EXISTS `menuiz-jo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `menuiz-jo`;

-- --------------------------------------------------------

--
-- Structure de la table `t_d_address_adr`
--

DROP TABLE IF EXISTS `t_d_address_adr`;
CREATE TABLE `t_d_address_adr` (
  `ADR_ID` int(11) NOT NULL,
  `ADR_FIRSTNAME` varchar(1024) NOT NULL,
  `ADR_LASTNAME` varchar(1024) NOT NULL,
  `ADR_LINE1` varchar(1024) NOT NULL,
  `ADR_LINE2` varchar(1024) DEFAULT NULL,
  `ADR_LINE3` varchar(1024) DEFAULT NULL,
  `ADR_ZIPCODE` varchar(1024) NOT NULL,
  `ADR_CITY` varchar(1024) NOT NULL,
  `ADR_COUNTRY` varchar(1024) NOT NULL,
  `ADR_MAIL` varchar(1024) NOT NULL,
  `ADR_PHONE` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_d_address_adr`
--

INSERT INTO `t_d_address_adr` (`ADR_ID`, `ADR_FIRSTNAME`, `ADR_LASTNAME`, `ADR_LINE1`, `ADR_LINE2`, `ADR_LINE3`, `ADR_ZIPCODE`, `ADR_CITY`, `ADR_COUNTRY`, `ADR_MAIL`, `ADR_PHONE`) VALUES
(1, '', '', '3 route des coquelicots', NULL, NULL, '27400', 'Louviers', 'Haute-Normandie', 'adressemail@fictive.com', ''),
(2, 'Non renseigné', 'Non renseigné', 'Non renseigné', NULL, NULL, '00000', 'Non renseigné', 'Non renseigné', 'Non renseigné', ''),
(3, '', '', '43 rue des souches', NULL, NULL, '76540', 'ROUEN', 'Seine-maritime', 'vieilleadresse@msn.com', ''),
(4, '', '', '2bis rue de l\'eglise', NULL, NULL, '27110', 'Ecquetot', 'Haite-normandie', 'paysan27@hotmail.com', ''),
(5, '', '', '3 chemin de l\'escalier', NULL, NULL, '27100', 'Epegard', 'Haute-normandie', 'mailfictif@hotmail.com', ''),
(6, '', '', '1 rue du centre bourg', NULL, NULL, '27400', 'Louviers', 'Haute-normandie', 'mailinventer@hotmail.com', ''),
(7, '', '', '4 chemin de la maison', NULL, NULL, '13540', 'Marseille', ' Provence-Alpes-Côte d\'Azur', 'marseille13@hotmail.com', '');

-- --------------------------------------------------------

--
-- Structure de la table `t_d_expeditiontype_ety`
--

DROP TABLE IF EXISTS `t_d_expeditiontype_ety`;
CREATE TABLE `t_d_expeditiontype_ety` (
  `ETY_ID` int(11) NOT NULL,
  `ETY_WORDING` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_d_expeditiontype_ety`
--

INSERT INTO `t_d_expeditiontype_ety` (`ETY_ID`, `ETY_WORDING`) VALUES
(1, 'COLISSIMO'),
(2, 'CHRONOPOST'),
(3, 'TRANSPORTEUR INTERNE');

-- --------------------------------------------------------

--
-- Structure de la table `t_d_expedition_exp`
--

DROP TABLE IF EXISTS `t_d_expedition_exp`;
CREATE TABLE `t_d_expedition_exp` (
  `EXP_ID` int(11) NOT NULL,
  `EXP_WEIGTH` decimal(8,2) DEFAULT NULL,
  `EXP_TRACKINGNUMBER` varchar(1024) DEFAULT NULL,
  `EXP_SENTDATE` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_d_expedition_exp`
--

INSERT INTO `t_d_expedition_exp` (`EXP_ID`, `EXP_WEIGTH`, `EXP_TRACKINGNUMBER`, `EXP_SENTDATE`) VALUES
(1, '0.00', 'NaN', '2022-06-07 14:09:15'),
(2, '0.00', 'NaN', '2022-06-07 14:09:15'),
(3, '0.00', 'NaN', '2022-06-07 14:09:15'),
(4, '0.00', 'NaN', '2022-06-07 14:09:15'),
(5, '0.00', 'NaN', '2022-06-07 14:09:15'),
(6, '0.00', 'NaN', '2022-06-07 14:09:15');

-- --------------------------------------------------------

--
-- Structure de la table `t_d_orderdetails_odt`
--

DROP TABLE IF EXISTS `t_d_orderdetails_odt`;
CREATE TABLE `t_d_orderdetails_odt` (
  `OHR_ID` int(11) NOT NULL,
  `PRD_ID` int(11) NOT NULL,
  `EXP_ID` int(11) NOT NULL,
  `ODT_QUANTITY` int(11) NOT NULL,
  `ODT_ISCANCELED` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_d_orderdetails_odt`
--

INSERT INTO `t_d_orderdetails_odt` (`OHR_ID`, `PRD_ID`, `EXP_ID`, `ODT_QUANTITY`, `ODT_ISCANCELED`) VALUES
(1, 2, 1, 5, 0),
(1, 5, 1, 2, 0),
(2, 7, 2, 1, 0),
(2, 8, 2, 3, 0),
(3, 6, 3, 5, 0),
(3, 11, 3, 1, 0),
(4, 2, 4, 10, 0),
(4, 16, 4, 3, 0),
(5, 1, 5, 1, 0),
(5, 3, 5, 1, 0),
(5, 4, 5, 2, 0),
(5, 10, 5, 1, 0),
(6, 9, 6, 3, 0),
(6, 17, 6, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `t_d_orderheader_ohr`
--

DROP TABLE IF EXISTS `t_d_orderheader_ohr`;
CREATE TABLE `t_d_orderheader_ohr` (
  `OHR_ID` int(11) NOT NULL,
  `ADR_ID_LIV` int(11) NOT NULL,
  `ADR_ID_FAC` int(11) NOT NULL,
  `PMT_ID` int(11) NOT NULL,
  `OSS_ID` int(11) NOT NULL,
  `ETY_ID` int(11) NOT NULL,
  `USR_ID` int(11) NOT NULL,
  `OHR_NUMBER` varchar(1024) NOT NULL,
  `OHR_DATE` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_d_orderheader_ohr`
--

INSERT INTO `t_d_orderheader_ohr` (`OHR_ID`, `ADR_ID_LIV`, `ADR_ID_FAC`, `PMT_ID`, `OSS_ID`, `ETY_ID`, `USR_ID`, `OHR_NUMBER`, `OHR_DATE`) VALUES
(1, 1, 1, 3, 2, 1, 1, '1', '2022-06-07 13:18:55'),
(2, 2, 1, 1, 3, 3, 2, '2', '2022-06-07 13:22:24'),
(3, 2, 2, 1, 2, 2, 3, '3', '2022-06-07 13:22:46'),
(4, 1, 1, 2, 1, 3, 1, '4', '2022-06-07 13:55:23'),
(5, 1, 1, 2, 2, 3, 2, '5', '2022-06-07 13:55:23'),
(6, 1, 1, 2, 4, 3, 3, '6', '2022-06-07 13:55:23');

-- --------------------------------------------------------

--
-- Structure de la table `t_d_orderstatus_oss`
--

DROP TABLE IF EXISTS `t_d_orderstatus_oss`;
CREATE TABLE `t_d_orderstatus_oss` (
  `OSS_ID` int(11) NOT NULL,
  `OSS_WORDING` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_d_orderstatus_oss`
--

INSERT INTO `t_d_orderstatus_oss` (`OSS_ID`, `OSS_WORDING`) VALUES
(1, 'En cours'),
(2, 'Annulé'),
(3, 'Livré totalement'),
(4, 'Livré partiellement');

-- --------------------------------------------------------

--
-- Structure de la table `t_d_paymenttype_pmt`
--

DROP TABLE IF EXISTS `t_d_paymenttype_pmt`;
CREATE TABLE `t_d_paymenttype_pmt` (
  `PMT_ID` int(11) NOT NULL,
  `PMT_WORDING` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_d_paymenttype_pmt`
--

INSERT INTO `t_d_paymenttype_pmt` (`PMT_ID`, `PMT_WORDING`) VALUES
(1, 'CB'),
(2, 'ESPECE'),
(3, 'CHEQUE'),
(4, 'VIREMENT');

-- --------------------------------------------------------

--
-- Structure de la table `t_d_productkit_kit`
--

DROP TABLE IF EXISTS `t_d_productkit_kit`;
CREATE TABLE `t_d_productkit_kit` (
  `PRD_ID_KIT` int(11) NOT NULL,
  `PRD_ID_COMPONENT` int(11) NOT NULL,
  `KIT_QUANTITY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_d_productkit_kit`
--

INSERT INTO `t_d_productkit_kit` (`PRD_ID_KIT`, `PRD_ID_COMPONENT`, `KIT_QUANTITY`) VALUES
(8, 1, 5),
(8, 2, 4),
(9, 1, 3),
(9, 3, 3),
(10, 4, 3),
(10, 5, 5),
(11, 6, 2),
(11, 7, 1),
(12, 4, 3),
(12, 7, 2),
(13, 2, 10),
(13, 6, 3),
(16, 1, 5),
(16, 5, 2),
(17, 1, 2),
(17, 3, 5),
(18, 2, 2),
(18, 6, 2);

-- --------------------------------------------------------

--
-- Structure de la table `t_d_producttype_pty`
--

DROP TABLE IF EXISTS `t_d_producttype_pty`;
CREATE TABLE `t_d_producttype_pty` (
  `PTY_ID` int(11) NOT NULL,
  `PTY_DESCRIPTION` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_d_producttype_pty`
--

INSERT INTO `t_d_producttype_pty` (`PTY_ID`, `PTY_DESCRIPTION`) VALUES
(1, 'UNITAIRE'),
(2, 'KIT');

-- --------------------------------------------------------

--
-- Structure de la table `t_d_product_prd`
--

DROP TABLE IF EXISTS `t_d_product_prd`;
CREATE TABLE `t_d_product_prd` (
  `PRD_ID` int(11) NOT NULL,
  `SPL_ID` int(11) NOT NULL,
  `PTY_ID` int(11) NOT NULL,
  `PRD_DESCRIPTION` varchar(1024) NOT NULL,
  `PRD_GUARANTEE` smallint(6) NOT NULL,
  `PRD_PICTURE` longtext DEFAULT NULL,
  `PRD_PRICE` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_d_product_prd`
--

INSERT INTO `t_d_product_prd` (`PRD_ID`, `SPL_ID`, `PTY_ID`, `PRD_DESCRIPTION`, `PRD_GUARANTEE`, `PRD_PICTURE`, `PRD_PRICE`) VALUES
(1, 1, 1, 'Portail coulissant alu plein droit ORLEANS', 24, 'https://www.mistermenuiserie.com/media/catalog/product/m/m/mms-orleans-coulissant_1.png?optimize=low&fit=bounds&height=648&width=648&canvas=648:648&format=jpeg', '19.99'),
(2, 2, 1, 'Portail coulissant alu plein droit MELVILLE', 24, 'https://www.mistermenuiserie.com/media/catalog/product/m/m/mms-orleans-coulissant_1.png?optimize=low&fit=bounds&height=648&width=648&canvas=648:648&format=jpeg', '14.99'),
(3, 3, 1, 'Portail coulissant alu droit persienné BRISAL', 24, 'https://www.mistermenuiserie.com/media/catalog/product/m/m/mms-orleans-coulissant_1.png?optimize=low&fit=bounds&height=648&width=648&canvas=648:648&format=jpeg', '16.99'),
(4, 1, 1, 'Porte d\'entrée aluminium HUDSON', 24, 'https://www.mistermenuiserie.com/media/catalog/product/m/m/mms-orleans-coulissant_1.png?optimize=low&fit=bounds&height=648&width=648&canvas=648:648&format=jpeg', '29.99'),
(5, 2, 1, 'Porte d\'entrée aluminium FACTORY', 24, 'https://www.mistermenuiserie.com/media/catalog/product/m/m/mms-orleans-coulissant_1.png?optimize=low&fit=bounds&height=648&width=648&canvas=648:648&format=jpeg', '34.99'),
(6, 4, 1, 'Porte d\'entrée aluminium LISBONNE', 24, 'https://www.mistermenuiserie.com/media/catalog/product/m/m/mms-orleans-coulissant_1.png?optimize=low&fit=bounds&height=648&width=648&canvas=648:648&format=jpeg', '99.99'),
(7, 5, 1, 'PRODUIT_7', 24, 'https://www.mistermenuiserie.com/media/catalog/product/m/m/mms-orleans-coulissant_1.png?optimize=low&fit=bounds&height=648&width=648&canvas=648:648&format=jpeg', '9.99'),
(8, 1, 2, '[KIT] Motorisation portail coulissant KIT NICE ROAD 400 4m', 24, 'https://www.mistermenuiserie.com/media/catalog/product/m/m/mms-orleans-coulissant_1.png?optimize=low&fit=bounds&height=648&width=648&canvas=648:648&format=jpeg', '149.99'),
(9, 1, 2, '[KIT] Motorisation portail coulissant CAME BX-78', 24, 'https://www.mistermenuiserie.com/media/catalog/product/m/m/mms-orleans-coulissant_1.png?optimize=low&fit=bounds&height=648&width=648&canvas=648:648&format=jpeg', '89.99'),
(10, 2, 2, '[KIT] Motorisation 230V portail 2 battants KIT CAME', 24, 'https://www.mistermenuiserie.com/media/catalog/product/m/m/mms-orleans-coulissant_1.png?optimize=low&fit=bounds&height=648&width=648&canvas=648:648&format=jpeg', '289.99'),
(11, 2, 2, 'KIT_4', 24, 'https://www.mistermenuiserie.com/media/catalog/product/m/m/mms-orleans-coulissant_1.png?optimize=low&fit=bounds&height=648&width=648&canvas=648:648&format=jpeg', '199.99'),
(12, 1, 2, 'KIT_5', 24, 'https://www.mistermenuiserie.com/media/catalog/product/m/m/mms-orleans-coulissant_1.png?optimize=low&fit=bounds&height=648&width=648&canvas=648:648&format=jpeg', '99.99'),
(13, 3, 2, 'KIT_6', 24, 'https://www.mistermenuiserie.com/media/catalog/product/m/m/mms-orleans-coulissant_1.png?optimize=low&fit=bounds&height=648&width=648&canvas=648:648&format=jpeg', '399.99'),
(16, 6, 2, 'KIT_7', 24, 'https://www.mistermenuiserie.com/media/catalog/product/m/m/mms-orleans-coulissant_1.png?optimize=low&fit=bounds&height=648&width=648&canvas=648:648&format=jpeg', '259.99'),
(17, 6, 2, 'KIT_8', 24, 'https://www.mistermenuiserie.com/media/catalog/product/m/m/mms-orleans-coulissant_1.png?optimize=low&fit=bounds&height=648&width=648&canvas=648:648&format=jpeg', '109.99'),
(18, 6, 2, 'KIT_9', 24, 'https://www.mistermenuiserie.com/media/catalog/product/m/m/mms-orleans-coulissant_1.png?optimize=low&fit=bounds&height=648&width=648&canvas=648:648&format=jpeg', '219.99');

-- --------------------------------------------------------

--
-- Structure de la table `t_d_supplier_spl`
--

DROP TABLE IF EXISTS `t_d_supplier_spl`;
CREATE TABLE `t_d_supplier_spl` (
  `SPL_ID` int(11) NOT NULL,
  `SPL_NAME` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_d_supplier_spl`
--

INSERT INTO `t_d_supplier_spl` (`SPL_ID`, `SPL_NAME`) VALUES
(1, 'FOURNISSEUR1'),
(2, 'FOURNISSEUR2'),
(3, 'FOURNISSEUR3'),
(4, 'FOURNISSEUR4'),
(5, 'FOURNISSEUR5'),
(6, 'Non renseigné');

-- --------------------------------------------------------

--
-- Structure de la table `t_d_user_usr`
--

DROP TABLE IF EXISTS `t_d_user_usr`;
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
(12, NULL, 'guillaume.delacroix@afpa.fr', '41060d3ddfdf63e68fc2bf196f652ee9', 'Delacroix', 'Guillaume', 'Guigui');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `t_d_address_adr`
--
ALTER TABLE `t_d_address_adr`
  ADD PRIMARY KEY (`ADR_ID`);

--
-- Index pour la table `t_d_expeditiontype_ety`
--
ALTER TABLE `t_d_expeditiontype_ety`
  ADD PRIMARY KEY (`ETY_ID`);

--
-- Index pour la table `t_d_expedition_exp`
--
ALTER TABLE `t_d_expedition_exp`
  ADD PRIMARY KEY (`EXP_ID`);

--
-- Index pour la table `t_d_orderdetails_odt`
--
ALTER TABLE `t_d_orderdetails_odt`
  ADD PRIMARY KEY (`OHR_ID`,`PRD_ID`,`EXP_ID`),
  ADD KEY `FK_CONCERNE2` (`PRD_ID`),
  ADD KEY `FK_CONCERNE3` (`EXP_ID`);

--
-- Index pour la table `t_d_orderheader_ohr`
--
ALTER TABLE `t_d_orderheader_ohr`
  ADD PRIMARY KEY (`OHR_ID`),
  ADD KEY `FK_A_POUR_PAIEMENT` (`PMT_ID`),
  ADD KEY `FK_A_POUR_STATUT` (`OSS_ID`),
  ADD KEY `FK_A_POUR_TYPE_EXPEDITION` (`ETY_ID`),
  ADD KEY `FK_COMMANDE` (`USR_ID`),
  ADD KEY `FK_EST_FACTURE` (`ADR_ID_FAC`),
  ADD KEY `FK_EST_LIVRE` (`ADR_ID_LIV`);

--
-- Index pour la table `t_d_orderstatus_oss`
--
ALTER TABLE `t_d_orderstatus_oss`
  ADD PRIMARY KEY (`OSS_ID`);

--
-- Index pour la table `t_d_paymenttype_pmt`
--
ALTER TABLE `t_d_paymenttype_pmt`
  ADD PRIMARY KEY (`PMT_ID`);

--
-- Index pour la table `t_d_productkit_kit`
--
ALTER TABLE `t_d_productkit_kit`
  ADD PRIMARY KEY (`PRD_ID_KIT`,`PRD_ID_COMPONENT`),
  ADD KEY `FK_T_D_PROD_SE_COMPOS_T_D_PROD2` (`PRD_ID_COMPONENT`);

--
-- Index pour la table `t_d_producttype_pty`
--
ALTER TABLE `t_d_producttype_pty`
  ADD PRIMARY KEY (`PTY_ID`);

--
-- Index pour la table `t_d_product_prd`
--
ALTER TABLE `t_d_product_prd`
  ADD PRIMARY KEY (`PRD_ID`),
  ADD KEY `FK_EST_DE_TYPE` (`PTY_ID`),
  ADD KEY `FK_PROVIENT_DE` (`SPL_ID`);

--
-- Index pour la table `t_d_supplier_spl`
--
ALTER TABLE `t_d_supplier_spl`
  ADD PRIMARY KEY (`SPL_ID`);

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
-- AUTO_INCREMENT pour la table `t_d_address_adr`
--
ALTER TABLE `t_d_address_adr`
  MODIFY `ADR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `t_d_expeditiontype_ety`
--
ALTER TABLE `t_d_expeditiontype_ety`
  MODIFY `ETY_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `t_d_expedition_exp`
--
ALTER TABLE `t_d_expedition_exp`
  MODIFY `EXP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `t_d_orderdetails_odt`
--
ALTER TABLE `t_d_orderdetails_odt`
  MODIFY `OHR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `t_d_orderheader_ohr`
--
ALTER TABLE `t_d_orderheader_ohr`
  MODIFY `OHR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `t_d_orderstatus_oss`
--
ALTER TABLE `t_d_orderstatus_oss`
  MODIFY `OSS_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `t_d_paymenttype_pmt`
--
ALTER TABLE `t_d_paymenttype_pmt`
  MODIFY `PMT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `t_d_productkit_kit`
--
ALTER TABLE `t_d_productkit_kit`
  MODIFY `PRD_ID_KIT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `t_d_producttype_pty`
--
ALTER TABLE `t_d_producttype_pty`
  MODIFY `PTY_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `t_d_product_prd`
--
ALTER TABLE `t_d_product_prd`
  MODIFY `PRD_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `t_d_supplier_spl`
--
ALTER TABLE `t_d_supplier_spl`
  MODIFY `SPL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `t_d_user_usr`
--
ALTER TABLE `t_d_user_usr`
  MODIFY `USR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `t_d_orderdetails_odt`
--
ALTER TABLE `t_d_orderdetails_odt`
  ADD CONSTRAINT `FK_CONCERNE1` FOREIGN KEY (`OHR_ID`) REFERENCES `t_d_orderheader_ohr` (`OHR_ID`),
  ADD CONSTRAINT `FK_CONCERNE2` FOREIGN KEY (`PRD_ID`) REFERENCES `t_d_product_prd` (`PRD_ID`),
  ADD CONSTRAINT `FK_CONCERNE3` FOREIGN KEY (`EXP_ID`) REFERENCES `t_d_expedition_exp` (`EXP_ID`);

--
-- Contraintes pour la table `t_d_orderheader_ohr`
--
ALTER TABLE `t_d_orderheader_ohr`
  ADD CONSTRAINT `FK_A_POUR_PAIEMENT` FOREIGN KEY (`PMT_ID`) REFERENCES `t_d_paymenttype_pmt` (`PMT_ID`),
  ADD CONSTRAINT `FK_A_POUR_STATUT` FOREIGN KEY (`OSS_ID`) REFERENCES `t_d_orderstatus_oss` (`OSS_ID`),
  ADD CONSTRAINT `FK_A_POUR_TYPE_EXPEDITION` FOREIGN KEY (`ETY_ID`) REFERENCES `t_d_expeditiontype_ety` (`ETY_ID`),
  ADD CONSTRAINT `FK_COMMANDE` FOREIGN KEY (`USR_ID`) REFERENCES `t_d_user_usr` (`USR_ID`),
  ADD CONSTRAINT `FK_EST_FACTURE` FOREIGN KEY (`ADR_ID_FAC`) REFERENCES `t_d_address_adr` (`ADR_ID`),
  ADD CONSTRAINT `FK_EST_LIVRE` FOREIGN KEY (`ADR_ID_LIV`) REFERENCES `t_d_address_adr` (`ADR_ID`);

--
-- Contraintes pour la table `t_d_productkit_kit`
--
ALTER TABLE `t_d_productkit_kit`
  ADD CONSTRAINT `FK_SE_COMPOSE` FOREIGN KEY (`PRD_ID_KIT`) REFERENCES `t_d_product_prd` (`PRD_ID`),
  ADD CONSTRAINT `FK_T_D_PROD_SE_COMPOS_T_D_PROD2` FOREIGN KEY (`PRD_ID_COMPONENT`) REFERENCES `t_d_product_prd` (`PRD_ID`);

--
-- Contraintes pour la table `t_d_product_prd`
--
ALTER TABLE `t_d_product_prd`
  ADD CONSTRAINT `FK_EST_DE_TYPE` FOREIGN KEY (`PTY_ID`) REFERENCES `t_d_producttype_pty` (`PTY_ID`),
  ADD CONSTRAINT `FK_PROVIENT_DE` FOREIGN KEY (`SPL_ID`) REFERENCES `t_d_supplier_spl` (`SPL_ID`);

--
-- Contraintes pour la table `t_d_user_usr`
--
ALTER TABLE `t_d_user_usr`
  ADD CONSTRAINT `FK_T_D_USER_A_COMME_I_T_D_ADDR3` FOREIGN KEY (`ADR_ID`) REFERENCES `t_d_address_adr` (`ADR_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
