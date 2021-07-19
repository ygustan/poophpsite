-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le : lun. 19 juil. 2021 à 16:06
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `poophpsite`
--

-- --------------------------------------------------------

--
-- Structure de la table `animaux`
--

DROP TABLE IF EXISTS `animaux`;
CREATE TABLE IF NOT EXISTS `animaux` (
  `Id_animal` int NOT NULL AUTO_INCREMENT,
  `Nom_animal` varchar(50) NOT NULL,
  `Age` int NOT NULL,
  `Date_naissance` date NOT NULL,
  `Poids_animal` decimal(15,2) NOT NULL,
  `Type_animal` varchar(50) NOT NULL,
  `Description_animal` varchar(255) DEFAULT NULL,
  `Origine_animal` varchar(50) DEFAULT NULL,
  `Adopter` tinyint(1) NOT NULL,
  `Date_adoption` datetime DEFAULT NULL,
  `Id_familleanimaux` int DEFAULT NULL,
  `Id_utilisateur` int DEFAULT NULL,
  PRIMARY KEY (`Id_animal`),
  KEY `Id_familleanimaux` (`Id_familleanimaux`),
  KEY `Id_utilisateur` (`Id_utilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `animaux`
--

INSERT INTO `animaux` (`Id_animal`, `Nom_animal`, `Age`, `Date_naissance`, `Poids_animal`, `Type_animal`, `Description_animal`, `Origine_animal`, `Adopter`, `Date_adoption`, `Id_familleanimaux`, `Id_utilisateur`) VALUES
(1, 'Berger allemand', 2, '2021-07-11', '5.00', 'Chien', NULL, NULL, 0, NULL, NULL, NULL),
(2, 'Labrador', 3, '2021-07-06', '6.00', 'Chien', NULL, NULL, 0, NULL, NULL, NULL),
(3, 'Husky de Sibérie', 10, '2021-07-01', '20.00', 'Chien', NULL, NULL, 0, NULL, NULL, NULL),
(4, 'Shiba Inu', 1, '2021-07-01', '2.00', 'Chien', NULL, NULL, 0, NULL, NULL, NULL),
(5, 'British shorthair', 5, '2021-07-02', '10.00', 'Chat', NULL, NULL, 0, NULL, NULL, NULL),
(6, 'Maine coon', 5, '2021-07-06', '10.00', 'Chat', NULL, NULL, 0, NULL, NULL, NULL),
(7, 'Munchkin', 4, '2021-07-04', '6.00', 'Chat', NULL, NULL, 0, NULL, NULL, NULL),
(8, 'Mau égyptien', 5, '2021-07-07', '6.00', 'Chat', NULL, NULL, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `Id_article` int NOT NULL AUTO_INCREMENT,
  `Titre` varchar(50) NOT NULL,
  `Contenu` varchar(2555) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Date_article` datetime NOT NULL,
  `Id_utilisateur` int DEFAULT NULL,
  PRIMARY KEY (`Id_article`),
  KEY `Id_utilisateur` (`Id_utilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`Id_article`, `Titre`, `Contenu`, `Date_article`, `Id_utilisateur`) VALUES
(1, 'Lancement', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '2021-07-14 20:41:41', 1),
(2, 'Les produits', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '2021-07-15 20:41:41', 1);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `Id_commentaire` int NOT NULL AUTO_INCREMENT,
  `Com_contenu` varchar(255) NOT NULL,
  `Date_com` datetime NOT NULL,
  `Id_utilisateur` int DEFAULT NULL,
  PRIMARY KEY (`Id_commentaire`),
  KEY `Id_utilisateur` (`Id_utilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `dons`
--

DROP TABLE IF EXISTS `dons`;
CREATE TABLE IF NOT EXISTS `dons` (
  `Id_dons` int NOT NULL AUTO_INCREMENT,
  `Montant` decimal(15,2) NOT NULL,
  `Id_utilisateur` int DEFAULT NULL,
  PRIMARY KEY (`Id_dons`),
  KEY `Id_utilisateur` (`Id_utilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `dons`
--

INSERT INTO `dons` (`Id_dons`, `Montant`, `Id_utilisateur`) VALUES
(1, '100.00', 2),
(2, '100.00', 2),
(3, '200.00', 2),
(4, '50.00', 2);

-- --------------------------------------------------------

--
-- Structure de la table `famille_animaux`
--

DROP TABLE IF EXISTS `famille_animaux`;
CREATE TABLE IF NOT EXISTS `famille_animaux` (
  `Id_familleanimaux` int NOT NULL AUTO_INCREMENT,
  `Nom_familleanimaux` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_familleanimaux`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `famille_produit`
--

DROP TABLE IF EXISTS `famille_produit`;
CREATE TABLE IF NOT EXISTS `famille_produit` (
  `Id_familleproduit` int NOT NULL AUTO_INCREMENT,
  `Nom_familleproduit` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_familleproduit`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `famille_produit`
--

INSERT INTO `famille_produit` (`Id_familleproduit`, `Nom_familleproduit`) VALUES
(1, 'Jouet'),
(3, 'Nourriture'),
(4, 'Fourrure'),
(5, 'Accessoire');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `Id_produit` int NOT NULL AUTO_INCREMENT,
  `Nom_produit` varchar(50) NOT NULL,
  `Quantite_produit` int NOT NULL,
  `Poids_produit` decimal(15,2) NOT NULL,
  `Type_produit` varchar(50) NOT NULL,
  `Prix_produit` decimal(15,2) NOT NULL,
  `Description_produit` varchar(255) DEFAULT NULL,
  `Marque_produit` varchar(50) DEFAULT NULL,
  `Origine_produit` varchar(50) DEFAULT NULL,
  `Date_publier` datetime NOT NULL,
  `Id_familleproduit` int DEFAULT NULL,
  `Id_utilisateur` int DEFAULT NULL,
  PRIMARY KEY (`Id_produit`),
  KEY `Id_familleproduit` (`Id_familleproduit`),
  KEY `Id_utilisateur` (`Id_utilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`Id_produit`, `Nom_produit`, `Quantite_produit`, `Poids_produit`, `Type_produit`, `Prix_produit`, `Description_produit`, `Marque_produit`, `Origine_produit`, `Date_publier`, `Id_familleproduit`, `Id_utilisateur`) VALUES
(1, 'Nourriture pour chat', 100, '10.00', 'Nourriture', '10.00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'NourritureFR', 'France', '2021-07-06 19:10:58', 1, NULL),
(2, 'Nourriture pour chien', 200, '10.00', 'Nourriture', '10.00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'NourritureFR', 'France', '2021-07-06 19:10:58', 3, NULL),
(4, 'Nourriture pour poisson', 100, '10.00', 'Nourriture', '10.00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'NourritureFR', 'France', '2021-07-18 22:40:55', 3, 1),
(5, 'Nourriture pour insecte', 100, '10.00', 'Nourriture', '10.00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'NourritureFR', 'France', '2021-07-18 22:40:55', 3, 1),
(6, 'Jouet pour chat', 50, '10.00', 'Nourriture', '30.00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'NourritureFR', 'France', '2021-07-18 22:40:55', 1, 1),
(7, 'Jouet pour chien', 100, '10.00', 'Nourriture', '30.00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'NourritureFR', 'France', '2021-07-18 22:40:55', 1, 1),
(8, 'Accessoire pour chat', 100, '10.00', 'Nourriture', '55.00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'NourritureFR', 'France', '2021-07-18 22:40:55', 5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `Id_utilisateur` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Motdepasse` varchar(60) NOT NULL,
  `Date_creation` datetime NOT NULL,
  `Est_admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id_utilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`Id_utilisateur`, `Nom`, `Email`, `Motdepasse`, `Date_creation`, `Est_admin`) VALUES
(1, 'Jean', 'jean@jean.com', 'Jean', '2021-07-05 19:10:22', 0),
(2, 'admin', 'admin@dev.com', 'admin', '2021-07-08 17:46:13', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
