-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 08 nov. 2021 à 15:21
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `artizone`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories_artisanats`
--

CREATE TABLE `categories_artisanats` (
  `id` int(11) NOT NULL,
  `categories` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(11) NOT NULL,
  `experience_name` varchar(255) DEFAULT NULL,
  `dates` varchar(255) DEFAULT NULL,
  `descriptions` text DEFAULT NULL,
  `id_identity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `links` varchar(255) DEFAULT NULL,
  `comments` text DEFAULT NULL,
  `id_identity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE `formations` (
  `id` int(11) NOT NULL,
  `places` varchar(255) DEFAULT NULL,
  `dates` varchar(255) DEFAULT NULL,
  `objects` varchar(255) DEFAULT NULL,
  `descriptions` text DEFAULT NULL,
  `id_identity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `identities`
--

CREATE TABLE `identities` (
  `id` int(11) NOT NULL,
  `names` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `birthday` datetime DEFAULT NULL,
  `phone1` int(11) NOT NULL,
  `phone2` int(11) NOT NULL,
  `address` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `work` varchar(255) DEFAULT NULL,
  `work_description` text DEFAULT NULL,
  `passwords` varchar(255) DEFAULT NULL,
  `profile_link` varchar(255) DEFAULT NULL,
  `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `messengers`
--

CREATE TABLE `messengers` (
  `id` int(11) NOT NULL,
  `messages` text DEFAULT NULL,
  `dates` datetime DEFAULT NULL,
  `id_identity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories_artisanats`
--
ALTER TABLE `categories_artisanats`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_experiences_id` (`id_identity`);

--
-- Index pour la table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_files_id` (`id_identity`);

--
-- Index pour la table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_formations_id` (`id_identity`);

--
-- Index pour la table `identities`
--
ALTER TABLE `identities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_identities_id` (`id_categorie`);

--
-- Index pour la table `messengers`
--
ALTER TABLE `messengers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_messengers_id` (`id_identity`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories_artisanats`
--
ALTER TABLE `categories_artisanats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `identities`
--
ALTER TABLE `identities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `messengers`
--
ALTER TABLE `messengers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `experiences`
--
ALTER TABLE `experiences`
  ADD CONSTRAINT `fk_experiences_id` FOREIGN KEY (`id_identity`) REFERENCES `identities` (`id`);

--
-- Contraintes pour la table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `fk_files_id` FOREIGN KEY (`id_identity`) REFERENCES `identities` (`id`);

--
-- Contraintes pour la table `formations`
--
ALTER TABLE `formations`
  ADD CONSTRAINT `fk_formations_id` FOREIGN KEY (`id_identity`) REFERENCES `identities` (`id`);

--
-- Contraintes pour la table `identities`
--
ALTER TABLE `identities`
  ADD CONSTRAINT `fk_identities_id` FOREIGN KEY (`id_categorie`) REFERENCES `categories_artisanats` (`id`);

--
-- Contraintes pour la table `messengers`
--
ALTER TABLE `messengers`
  ADD CONSTRAINT `fk_messengers_id` FOREIGN KEY (`id_identity`) REFERENCES `identities` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
