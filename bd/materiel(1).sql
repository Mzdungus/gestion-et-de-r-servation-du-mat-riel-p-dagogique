-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 05 juin 2024 à 13:22
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `materiel`
--

-- --------------------------------------------------------

--
-- Structure de la table `materiel`
--

CREATE TABLE `materiel` (
  `id_materiel` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `categorie` varchar(255) DEFAULT NULL,
  `photo` varchar(300) NOT NULL,
  `quantite` int(10) NOT NULL DEFAULT 0,
  `indisponible` int(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `materiel`
--

INSERT INTO `materiel` (`id_materiel`, `nom`, `description`, `categorie`, `photo`, `quantite`, `indisponible`) VALUES
(31, 'Ordinateur portable', 'Ordinateur portable performant', 'Informatique', 'images/17172718371707998562logo.jpg', 112, 1),
(32, 'Switch', 'Switch réseau 24 ports', 'Informatique', 'images/17172718371707998562logo.jpg', 24, 11),
(33, 'Serveur', 'Serveur d\'entreprise', 'Informatique', '', 44, 21),
(34, 'Câble RJ45', 'Câble réseau RJ45', 'Informatique', '', 12, 56),
(35, 'Projecteur', 'Projecteur multimédia', 'Audiovisuel', '', 20, 12),
(36, 'Amplificateur audio', 'Amplificateur audio Hi-Fi', 'Audiovisuel', '', 12, 7),
(37, 'Clavier', 'Clavier USB', 'Bureautique', '', 44, 2),
(38, 'Souris', 'Souris sans fil', 'Bureautique', 'images/17172718371707998562logo.jpg', 23, 2),
(39, 'Prise multiple', 'Prise multiple avec protection contre les surtensions', 'Bureautique', '', 45, 2),
(40, 'Ballons de football', 'Ballons de football de différents tailles', 'Sport', '', 32, 12),
(42, 'wgc', 'zkszokokdoz', 'informatique', '', 12, 0),
(43, 'capteur', 'capteur de température', 'informatique', 'images/17172718371707998562logo.jpg', 11, 0),
(44, 'dddd', 'ddddddddd', 'informatique', '', 11, 0),
(45, 'fvtyft', 'yfyg', 'informatique', 'images/17172718371707998562logo.jpg', 11, 0);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_materiel` int(11) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `statut` varchar(50) DEFAULT 'en attente',
  `quantite` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `id_utilisateur`, `id_materiel`, `date_debut`, `date_fin`, `statut`, `quantite`) VALUES
(25, 1, 31, '2024-10-26', '2024-10-28', 'confirmée', 0),
(26, 2, 32, '2024-10-27', '2024-10-29', 'confirmée', 0),
(27, 3, 33, '2024-10-28', '2024-10-30', 'refusee', 0),
(28, 1, 34, '2024-10-29', '2024-10-31', 'confirmée', 0),
(29, 2, 35, '2024-10-30', '2024-11-01', 'confirmee', 0),
(30, 4, 36, '2024-11-01', '2024-11-03', 'confirmée', 0),
(31, 3, 37, '2024-11-02', '2024-11-04', 'en attente', 0),
(32, 1, 38, '2024-11-03', '2024-11-05', 'confirmée', 0),
(36, 2, 31, '2024-05-29', '2024-05-30', 'confirmée', 1),
(37, 2, 31, '2024-05-29', '2024-06-05', 'confirmée', 3),
(38, 2, 31, '2024-05-29', '2024-06-07', 'confirmée', 5),
(39, 1, 34, '2024-05-29', '2024-06-06', 'refusée', 1),
(40, 2, 40, '2024-05-29', '2024-06-07', 'confirmée', 2),
(41, 2, 32, '2024-06-02', '2024-06-08', 'en attente', 1),
(42, 2, 31, '2024-06-02', '2024-06-02', 'en attente', 1),
(43, 2, 31, '2024-06-02', '2024-06-09', 'en attente', 1),
(44, 2, 31, '2024-06-17', '2024-06-30', 'confirmée', 6),
(45, 1, 31, '0000-00-00', '0000-00-00', 'en attente', 1),
(46, 1, 31, '0000-00-00', '0000-00-00', 'en attente', 1);

--
-- Déclencheurs `reservation`
--
DELIMITER $$
CREATE TRIGGER `update_materiel_disponibilite` AFTER INSERT ON `reservation` FOR EACH ROW BEGIN
    UPDATE materiel
    SET quantite = quantite - NEW.quantite
    WHERE id_materiel = NEW.id_materiel;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `nom_user` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `role_u` varchar(50) DEFAULT 'utilisateur',
  `img` varchar(200) NOT NULL DEFAULT 'images/pic-1.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom_user`, `prenom`, `email`, `mot_de_passe`, `role_u`, `img`) VALUES
(1, 'Mahamat ', 'Zakaria Doungous', 'mz@dungus.com', '$argon2i$v=19$m=65536,t=4,p=1$cVZpQlVmSEFkMTNWMWtHbA$prw1RuWPe2Qyt0Y0hANFV1/jIbmLazHPOWpU6WRvyHA', 'Administrateur', 'images/171717514105ded43a47bced897c9a530495547994.png'),
(2, 'Dupont', 'Jean', 'ingenerie@web.com', '$argon2i$v=19$m=65536,t=4,p=1$NUlRdGJENHptSElWYzBlbA$Pn4440+IZxxqHEnAw45AbVPsugXymoFiYS74p78bcNw', 'Enseignant', 'images/171758636505ded43a47bced897c9a530495547994.png'),
(3, 'Martin', 'Sophie', 'sophie.martin@example.com', 'secret123', 'Enseignant', 'images/pic-1.jpg'),
(4, 'Durand', 'Pierre', 'pierre.durand@example.com', 'mypass', 'Enseignant', 'images/pic-1.jpg'),
(5, 'Garcia', 'Marie', 'marie.garcia@example.com', 'securepass', 'Administrateur', 'images/pic-1.jpg'),
(7, 'aaaaa', 'aaaaa', 'admin@gmail.com', '1111', 'Enseignant', 'images/pic-1.jpg'),
(9, 'aaaaa', 'aaaaa', 'admxin@gmail.com', '1111', 'Enseignant', 'images/pic-1.jpg'),
(10, 'mahamat', 'ABdelrahim', 'mzdungus@gmail.com', 'materiel@2024', 'Administrateur', 'images/pic-1.jpg'),
(11, '111ZZ', '111ZZ', 'harry@den.com', 'materiel@2024', 'Enseignant', 'images/pic-1.jpg'),
(12, '111ZZ', '111ZZ', 'ms@web.com', 'sk,skks,cs', 'Enseignant', 'images/pic-1.jpg'),
(13, '111ZZ', '111ZZ', 'harrxsy@den.com', 'materiel@2024', 'Enseignant', 'images/pic-1.jpg'),
(14, '111ZZ', '111ZZ', 'ccscscsc@den.com', 'materiel@2024', 'Enseignant', 'images/pic-1.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `materiel`
--
ALTER TABLE `materiel`
  ADD PRIMARY KEY (`id_materiel`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `id_utilisateur` (`id_utilisateur`),
  ADD KEY `id_materiel` (`id_materiel`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `materiel`
--
ALTER TABLE `materiel`
  MODIFY `id_materiel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`id_materiel`) REFERENCES `materiel` (`id_materiel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
