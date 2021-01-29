-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 26 jan. 2021 à 19:45
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `siteweblady`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

CREATE TABLE `adresse` (
  `id_adresse` int(11) NOT NULL,
  `rue` varchar(50) NOT NULL,
  `numero` int(11) NOT NULL,
  `appartement` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `avis_client`
--

CREATE TABLE `avis_client` (
  `id_avis` int(11) NOT NULL,
  `message` varchar(50) NOT NULL,
  `nbr_etoile` int(11) NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id_client` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_compte` int(11) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id_client`, `nom`, `prenom`, `adresse`, `email`, `id_compte`, `message`) VALUES
(7, 'fogang', 'vero', '2 rue Gasprd Coriolis', 'verobrice@yahoo.com', 0, '  ffffffffffffffff'),
(8, 'Takoundjou', 'Vero Brice', '31 rue Voltaire 59370 Mons en Baroeul', 'habiblaye45@gmail.com', 0, '  felix'),
(9, 'Takoundjou', 'Vero Brice', '31 rue Voltaire 59370 Mons en Baroeul', 'habiblaye45@gmail.com', 0, '  felix');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id_commande` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `date` date NOT NULL,
  `quantite` int(11) NOT NULL,
  `totcommande` int(11) NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `id_compte` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`id_compte`, `nom`, `email`, `mot_de_passe`, `id_client`) VALUES
(1, 'vero', 'bricevero@yahoo.com', '$2y$10$/h9bUqRK2fMfs4LBblS2GemYT0jS/4xgPpziTvq9zGKmgjwZ8HUZS', 0),
(2, 'vero fogang', 'verobrice@yahoo.com', '$2y$10$2OIoiMgttrrjYNamvIXD../XFSC5um2iAhxqwPs/RzWZFo/R6IToy', 0),
(3, 'felix', 'nfelix2020', '$2y$10$4QTC.Vy4XuZfQa/t8JenOOfQ5KkwCTsPrXd6OJKNBOswKyx7BWyRG', 0);

-- --------------------------------------------------------

--
-- Structure de la table `exister`
--

CREATE TABLE `exister` (
  `id_produit` int(11) NOT NULL,
  `id_ligne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `fournir`
--

CREATE TABLE `fournir` (
  `id_produit` int(11) NOT NULL,
  `id_fournisseur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE `fournisseur` (
  `id_fournisseur` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `contrat` varchar(50) NOT NULL,
  `garantie` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `pays` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `image_produit`
--

CREATE TABLE `image_produit` (
  `id_image` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL,
  `url` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `id_produit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `ligne_de_commande`
--

CREATE TABLE `ligne_de_commande` (
  `id_ligne` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `total_ligne` int(11) NOT NULL,
  `montant` decimal(15,3) NOT NULL,
  `id_commande` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id_panier` int(11) NOT NULL,
  `nom` varchar(55) NOT NULL,
  `image` varchar(55) NOT NULL,
  `prix` decimal(15,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id_panier`, `nom`, `image`, `prix`) VALUES
(1, 'parfums', 'pf1.jpg', '50.000'),
(2, 'parfums', 'pf2.jpg', '25.000'),
(3, 'parfums', 'pf3.jpg', '40.000');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id_produit` int(11) NOT NULL,
  `nom_produit` varchar(50) NOT NULL,
  `prix` decimal(15,3) NOT NULL,
  `description` varchar(500) NOT NULL,
  `couleur` varchar(50) NOT NULL,
  `taille` char(1) NOT NULL,
  `id_panier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD PRIMARY KEY (`id_adresse`);

--
-- Index pour la table `avis_client`
--
ALTER TABLE `avis_client`
  ADD PRIMARY KEY (`id_avis`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id_commande`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`id_compte`);

--
-- Index pour la table `exister`
--
ALTER TABLE `exister`
  ADD PRIMARY KEY (`id_produit`,`id_ligne`);

--
-- Index pour la table `fournir`
--
ALTER TABLE `fournir`
  ADD PRIMARY KEY (`id_produit`,`id_fournisseur`);

--
-- Index pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD PRIMARY KEY (`id_fournisseur`);

--
-- Index pour la table `image_produit`
--
ALTER TABLE `image_produit`
  ADD PRIMARY KEY (`id_image`),
  ADD KEY `Image_Produit_Produits0_FK` (`id_produit`);

--
-- Index pour la table `ligne_de_commande`
--
ALTER TABLE `ligne_de_commande`
  ADD PRIMARY KEY (`id_ligne`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id_panier`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id_produit`),
  ADD KEY `Produits_panier0_FK` (`id_panier`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adresse`
--
ALTER TABLE `adresse`
  MODIFY `id_adresse` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `avis_client`
--
ALTER TABLE `avis_client`
  MODIFY `id_avis` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `id_compte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  MODIFY `id_fournisseur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `image_produit`
--
ALTER TABLE `image_produit`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ligne_de_commande`
--
ALTER TABLE `ligne_de_commande`
  MODIFY `id_ligne` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id_panier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `fournir`
--
ALTER TABLE `fournir`
  ADD CONSTRAINT `Fournir_Produits0_FK` FOREIGN KEY (`id_produit`) REFERENCES `produits` (`id_produit`);

--
-- Contraintes pour la table `image_produit`
--
ALTER TABLE `image_produit`
  ADD CONSTRAINT `Image_Produit_Produits0_FK` FOREIGN KEY (`id_produit`) REFERENCES `produits` (`id_produit`);

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `Produits_panier0_FK` FOREIGN KEY (`id_panier`) REFERENCES `panier` (`id_panier`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
