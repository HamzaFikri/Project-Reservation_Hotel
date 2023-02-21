-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 10 mai 2021 à 16:10
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `brief5`
--

-- --------------------------------------------------------

--
-- Structure de la table `bien`
--

CREATE TABLE `bien` (
  `Id_Bien` int(11) NOT NULL,
  `Nom` varchar(20) DEFAULT NULL,
  `Type` varchar(20) DEFAULT NULL,
  `Vue` varchar(20) DEFAULT NULL,
  `PRIX` int(11) DEFAULT NULL,
  `Lit` varchar(20) DEFAULT NULL,
  `Categorie_Age` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `bien`
--

INSERT INTO `bien` (`Id_Bien`, `Nom`, `Type`, `Vue`, `PRIX`, `Lit`, `Categorie_Age`) VALUES
(1, 'Chambre', 'Simple', 'Intérieur', 300, NULL, NULL),
(2, 'Chambre', 'Simple', 'Extérieur', 360, NULL, NULL),
(3, 'Chambre', 'Double', 'Intérieur', 600, '2lit-simple', NULL),
(4, 'Chambre', 'Double', 'Intérieur', 500, 'litdouble', NULL),
(5, 'Chambre', 'Double', 'Extérieur', 660, 'litdouble', NULL),
(6, 'Supplement lit ', NULL, NULL, 75, NULL, 'Baby'),
(7, 'Pas Supplement lit ', NULL, NULL, 0, NULL, 'Baby'),
(8, '50% Chambre ', 'Simple', NULL, 150, NULL, 'Minimes'),
(9, '70%Chambre', 'Simple', 'Intérieur', 210, NULL, 'Junior'),
(10, 'Chambre', 'Simple', 'Intérieur', 300, NULL, 'Junior'),
(11, 'Appartement', NULL, NULL, 1000, NULL, NULL),
(12, 'Bungalow', NULL, NULL, 1200, NULL, NULL),
(13, 'Complete', 'pension', NULL, 500, NULL, NULL),
(14, 'Petit dejeuner/Dej', 'pension', NULL, 350, NULL, NULL),
(15, 'Petit dejeuner/Dine', 'pension', NULL, 300, NULL, NULL),
(16, 'Sans', 'pension', NULL, 0, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bien`
--
ALTER TABLE `bien`
  ADD PRIMARY KEY (`Id_Bien`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bien`
--
ALTER TABLE `bien`
  MODIFY `Id_Bien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
