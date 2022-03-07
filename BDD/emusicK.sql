-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 07 mars 2022 à 16:30
-- Version du serveur : 8.0.25
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `emusicK`
--

-- --------------------------------------------------------

--
-- Structure de la table `accessoire`
--

CREATE TABLE `accessoire` (
  `id` int NOT NULL,
  `instrument_id` int DEFAULT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `accessoire`
--

INSERT INTO `accessoire` (`id`, `instrument_id`, `libelle`) VALUES
(1, 29, 'Cymbale'),
(2, 1, 'Support\n'),
(3, 2, 'Siège'),
(8, 29, 'Baguettes');

-- --------------------------------------------------------

--
-- Structure de la table `classe_instrument`
--

CREATE TABLE `classe_instrument` (
  `id` int NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `classe_instrument`
--

INSERT INTO `classe_instrument` (`id`, `libelle`) VALUES
(1, 'Claviers'),
(2, 'Instruments amplifiés'),
(3, 'Bois'),
(4, 'Cuivres'),
(5, 'Cordes'),
(6, 'Percussions');

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id` int NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age_mini` int NOT NULL,
  `age_maxi` int NOT NULL,
  `nb_place_maxi` int NOT NULL,
  `jour_id` int DEFAULT NULL,
  `professeur_id` int DEFAULT NULL,
  `type_instrument_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id`, `libelle`, `age_mini`, `age_maxi`, `nb_place_maxi`, `jour_id`, `professeur_id`, `type_instrument_id`) VALUES
(1, 'Cours de piano', 12, 19, 10, 2, 1, 2),
(2, 'Cours de guitare', 10, 15, 20, 4, 2, 4),
(3, 'Cours de flute', 13, 15, 1, 1, 4, 8),
(4, 'Cours de violon', 15, 20, 16, 2, 3, 12);

-- --------------------------------------------------------

--
-- Structure de la table `couter`
--

CREATE TABLE `couter` (
  `id` int NOT NULL,
  `montant` int NOT NULL,
  `cours_id` int DEFAULT NULL,
  `tranche_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `couter`
--

INSERT INTO `couter` (`id`, `montant`, `cours_id`, `tranche_id`) VALUES
(1, 60, 3, 1),
(2, 63, 4, 3),
(3, 141, 1, 5);

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20211213103246', '2021-12-13 10:37:58', 6673);

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

CREATE TABLE `eleve` (
  `id` int NOT NULL,
  `responsable_id` int DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_naiss` date NOT NULL,
  `rue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_postal` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `eleve`
--

INSERT INTO `eleve` (`id`, `responsable_id`, `nom`, `prenom`, `date_naiss`, `rue`, `ville`, `code_postal`) VALUES
(5, 5, 'Cooper', 'Laos', '2002-08-18', '14 rue de la Jonquera', 'Caen', 14000),
(6, 1, 'Geoler', 'Ricardo', '1998-11-16', '16 boulevard de la Renaissance', 'Paris', 93500),
(7, 3, 'Shematic', 'Mehdy', '2000-11-16', '14 rue de la Pommeraie', 'Strasbourg', 67000),
(8, 2, 'Retedec', 'Serge', '1995-11-09', '16 boulevard de l\'espérance ', 'Caen', 14123),
(24, 4, 'Renault', 'David', '2005-12-08', 'Rue des roses vertes', 'Caen', 14000);

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id` int NOT NULL,
  `cours_id` int DEFAULT NULL,
  `eleve_id` int DEFAULT NULL,
  `nb_paiement` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id`, `cours_id`, `eleve_id`, `nb_paiement`) VALUES
(1, 3, 5, 26),
(2, 3, 6, 26),
(3, 2, 6, 29),
(6, 1, 5, 757),
(7, 1, 6, 50),
(8, 4, 5, 10);

-- --------------------------------------------------------

--
-- Structure de la table `instrument`
--

CREATE TABLE `instrument` (
  `id` int NOT NULL,
  `intitule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix_achat` int NOT NULL,
  `marque` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `couleur_dominante` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_serie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utilisation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_instrument_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `instrument`
--

INSERT INTO `instrument` (`id`, `intitule`, `prix_achat`, `marque`, `couleur_dominante`, `numero_serie`, `utilisation`, `type_instrument_id`) VALUES
(1, 'ECCLESIA T-150', 17500, 'Johannus', 'marron', '56DF45DF7', 'prêt', 1),
(2, 'Wersi PERGAMON OAX1000', 40000, 'Schwarz Metallic', 'noir', '59FDF82', 'prêt', 1),
(3, 'Hemingway DP-501 MKII RW', 479, 'Yamaha', 'noir', 'DD89F2', 'prêt', 2),
(4, ' CLP-735 B', 2000, 'Yamaha', 'noir', 'D4541V5', 'prêt', 2),
(5, 'KC-200', 429, 'Roland', 'noir', 'EF4675N', 'prêt', 3),
(6, 'MG10G', 69, 'Marshall', 'noir', 'F5D9DS6', 'prêt', 3),
(7, 'SC-500', 158, 'Harley benton', 'dorée', 'G78C6F', 'prêt', 4),
(8, 'SC-500', 649, 'Fender Player', 'blanc', 'TEV1512', 'prêt', 4),
(9, 'GSRM20B-WNF-WALNUT', 181, 'Ibanez', 'marron', 'GQSQ455', 'prêt', 5),
(10, 'TRBX 174 BL', 249, 'Yamaha', 'noir', 'DFDS448C', 'prêt', 5),
(11, 'YAS-280 Alto Sax', 990, 'Yamaha', 'dorée', 'FGD584VD', 'prêt', 6),
(12, 'SAS-75 Alto Sax', 248, 'Startone', 'dorée', 'FGDV44V', 'prêt', 6),
(13, 'YCL-255 S', 498, 'Yamaha', 'noir', 'GDF445F', 'prêt', 7),
(14, 'Bb-Clarinet 17/6', 489, 'Buffet Crampon Prodige', 'noir', 'FGDSG457V', 'prêt', 7),
(15, 'FL-200', 149, 'Thomann', 'argenté', 'FDSGDS52VS', 'prêt', 8),
(16, 'YFL-222 ', 579, 'Yamaha', 'argenté', 'SDFG45SCD', 'prêt', 8),
(17, 'YSL-354', 809, 'Yamaha', 'dorée', 'DFG55GYKS', 'prêt', 9),
(18, 'SSL-45', 138, 'Startone', 'dorée', 'SDGS55SV', 'prêt', 9),
(19, 'TR 200', 149, 'Thomann', 'dorée', 'DSGS7CSDC4F', 'prêt', 10),
(20, 'YTR-2330', 449, 'Yamaha', 'dorée', 'DSFSDC54RG', 'prêt', 10),
(21, 'Bb-Tuba', 1998, 'Thomann', 'dorée', 'FDSGDV4E', 'prêt', 11),
(22, 'Bb-Tuba Hagen', 14690, 'Miraphone', 'dorée', 'GFSDVDS54E', 'prêt', 11),
(23, 'Violinset 4/4', 89, 'Thomann', 'marron', 'DSG4QS54EC', 'prêt', 12),
(24, 'V5 SC44 Violin', 389, 'Yamaha', 'marron', 'FGFDV4BD', 'prêt', 12),
(25, 'Cello Set 4/4', 349, 'Thomann', 'marron', 'FDGDFV4BVEZ8', 'prêt', 13),
(26, 'VC 5S44 Cello 4/4', 1121, 'Yamaha', 'marron', 'SDFSDC54S5', 'prêt', 13),
(27, 'Celtic Harp Ashwood 36 Str', 1024, 'Thomann', 'beige', 'FVFBX45D4', 'prêt', 14),
(28, 'SALGAA-MPS Gaia Mahogany', 2890, 'Salvi', 'pourpre', 'GHJFD51', 'prêt', 14),
(29, 'Rydeen Standard Black Glitter', 698, 'Yamaha', 'noir', 'GFSG447D', 'prêt', 15),
(30, 'EXL705NBR Azure Daybr', 899, 'Pearl Export', 'aqua', 'GHG4D5', 'prêt', 15);

-- --------------------------------------------------------

--
-- Structure de la table `intervention`
--

CREATE TABLE `intervention` (
  `id` int NOT NULL,
  `professionnel_id` int DEFAULT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `instrument_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `intervention`
--

INSERT INTO `intervention` (`id`, `professionnel_id`, `libelle`, `date_debut`, `date_fin`, `instrument_id`) VALUES
(1, 3, 'Changement de la guitare', '2020-01-17', '2020-01-20', 30),
(2, 1, 'Changement dune cymbale ', '2020-05-12', '2020-05-13', 28),
(3, 2, 'Remplacement de la carte mère du piano numérique', '2020-06-26', '2020-07-01', 5),
(4, 4, 'nettoyage et vérification de la flûte  ', '2019-09-23', '2019-09-25', 26),
(5, 5, 'réparation de la basse', '2020-02-12', '2020-02-15', 30);

-- --------------------------------------------------------

--
-- Structure de la table `inter_pret`
--

CREATE TABLE `inter_pret` (
  `id` int NOT NULL,
  `pret_id` int DEFAULT NULL,
  `quotite` int NOT NULL,
  `intervention_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `inter_pret`
--

INSERT INTO `inter_pret` (`id`, `pret_id`, `quotite`, `intervention_id`) VALUES
(1, 6, 41, 1),
(2, 7, 89, 5),
(3, 8, 75, 4),
(4, 10, 91, 2),
(5, 9, 23, 3);

-- --------------------------------------------------------

--
-- Structure de la table `jour`
--

CREATE TABLE `jour` (
  `id` int NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `jour`
--

INSERT INTO `jour` (`id`, `libelle`) VALUES
(1, 'Lundi'),
(2, 'Mardi'),
(3, 'Mercredi'),
(4, 'Jeudi'),
(5, 'Vendredi'),
(6, 'Samedi'),
(7, 'Dimanche');

-- --------------------------------------------------------

--
-- Structure de la table `pret`
--

CREATE TABLE `pret` (
  `id` int NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `instrument_id` int DEFAULT NULL,
  `eleve_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pret`
--

INSERT INTO `pret` (`id`, `date_debut`, `date_fin`, `instrument_id`, `eleve_id`) VALUES
(6, '2020-06-19', '2021-01-02', 14, 5),
(7, '2019-08-09', '2019-12-15', 22, 5),
(8, '2021-02-05', '2021-02-28', 9, 8),
(9, '2020-07-11', '2020-11-30', 30, 6),
(10, '2020-06-06', '2020-06-30', 8, 7),
(12, '2020-11-01', '2020-11-25', 19, 7),
(24, '2021-11-01', '2021-12-23', 28, 6),
(25, '2021-12-17', '2021-12-26', 20, 5),
(30, '2021-12-22', '2021-12-06', 1, 5),
(31, '2021-12-27', '2021-12-28', 1, 5);

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

CREATE TABLE `professeur` (
  `id` int NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`id`, `nom`, `prenom`, `email`) VALUES
(1, 'Romagne', 'Ludovic', 'ludovic.romagne@gmail.com'),
(2, 'Dumesnil', 'Mattéo', 'matteo.dumesnil@gmail.com'),
(3, 'Peterson', 'Valentin', 'valentin.peterson@gmail.com'),
(4, 'Gorbaciak', 'Maxime', 'maxime.gorbaciak@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `professionnel`
--

CREATE TABLE `professionnel` (
  `id` int NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_postal` int NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `professionnel`
--

INSERT INTO `professionnel` (`id`, `nom`, `prenom`, `rue`, `code_postal`, `ville`) VALUES
(1, 'Detrine', 'Richard', '9 rue de courseulles', 14670, 'Troarn'),
(2, 'Lerouvillois', 'Brian', '17 rue des marronniers', 14400, 'Bayeux'),
(3, 'Ferre', 'Tom', '12 rue de villette', 14200, 'Hérouville saint-clair'),
(4, 'Soulabaille', 'Eric', '2 rue pont dAvignon', 14250, 'Cuverville'),
(5, 'Costy', 'Michel', '3 rue Martin Fourcade', 14390, 'Cabourg');

-- --------------------------------------------------------

--
-- Structure de la table `responsable`
--

CREATE TABLE `responsable` (
  `id` int NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_postal` int NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quotient_familial` int NOT NULL,
  `tel1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `responsable`
--

INSERT INTO `responsable` (`id`, `nom`, `prenom`, `rue`, `ville`, `code_postal`, `email`, `quotient_familial`, `tel1`, `tel2`, `tel3`) VALUES
(1, 'Geoler', 'Bertrand', '18 rue des roses sur mer', 'Caen', 14000, 'geole.bertrand@gmail.com', 890, '658145124', '725235956', '789155674'),
(2, 'Retedec', 'Valentin', '7 rue des champs de marne', 'Paris', 75000, 'retedec.valentin@gmail.com', 200, '256893245', '679754679', '771804576'),
(3, 'Schematic', 'Amine', '9 rue des ecoles', 'Fontenay le Pesnel', 14250, 'Shematic.Amine@gmail.com', 1260, '637875589', '771526895', '236569869'),
(4, 'Renault', 'Robin', '78 rue Boulevard des capucines', 'Bayeux', 14450, 'Renault.Robin@gmail.com', -520, '658975412', '745896523', '245895633'),
(5, 'Cooper', 'Martin', '12 rue de la paix', 'Rennes', 35000, 'Couper.Martin@gmail.com', 14, '256895656', '771458969', '265981847');

-- --------------------------------------------------------

--
-- Structure de la table `tranche`
--

CREATE TABLE `tranche` (
  `id` int NOT NULL,
  `quotient_min` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tranche`
--

INSERT INTO `tranche` (`id`, `quotient_min`) VALUES
(1, 0),
(2, 251),
(3, 426),
(4, 681),
(5, 936),
(6, 1801);

-- --------------------------------------------------------

--
-- Structure de la table `type_instrument`
--

CREATE TABLE `type_instrument` (
  `id` int NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classe_instrument_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type_instrument`
--

INSERT INTO `type_instrument` (`id`, `libelle`, `classe_instrument_id`) VALUES
(1, 'Orgue', 1),
(2, 'Piano', 1),
(3, 'Clavier amplifié', 2),
(4, 'Guitare électrique', 2),
(5, 'Basse électrique', 2),
(6, 'Saxophone', 3),
(7, 'Clarinette', 3),
(8, 'Flute traversière', 3),
(9, 'Trombone', 4),
(10, 'Trompette', 4),
(11, 'Tuba', 4),
(12, 'Violon', 5),
(13, 'Violoncelle', 5),
(14, 'Harpe Celtique', 5),
(15, 'Batterie', 6);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eleve_id` int DEFAULT NULL,
  `professeur_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `username`, `eleve_id`, `professeur_id`) VALUES
(1, 'david.renault@gmail.com', '[\"ROLE_USER\"]', '$2y$13$wWwH9.ISl0MBUrtuX6eXyu2MbGgADACS7wio8neYU2lURI7gAjzme', 'dRenault', 24, NULL),
(2, 'ludovic.romagne@gmail.com', '[\"ROLE_PROF\"]', '$2y$13$4FZiJ.8huRBYrkagxYito.ckZk9ujwvp9sho6muCrM6Uq2x32Fjkm', 'lRomagne', NULL, 1),
(4, 'esther.lai@gmail.com', '[\"ROLE_ADMIN\"]', '$2y$13$UUj5LaBYga6n8r6JMNT1K.1dgFQFJbF6zO8pxLpxJE2.KyzR76S6i', 'eLai', NULL, NULL),
(6, 'desire.paquito@gmail.com', '[\"ROLE_ADMIN\"]', '$2y$13$kcpUds8HbTn2qOZ5emzwI.afwVhKeikiOI11v9Qo4cugGbfFPDgjC', 'dPaquito', NULL, NULL),
(7, 'carlos.gambinos@gmail.com', '[\"ROLE_ADMIN\"]', '$2y$13$SUCGJRqqer6kCldqMrEcH.RUrj7Ir0qal2gzUYrI.AAxLjE/rnUty', 'Carlos Gambinos', NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `accessoire`
--
ALTER TABLE `accessoire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8FD026ACF11D9C` (`instrument_id`);

--
-- Index pour la table `classe_instrument`
--
ALTER TABLE `classe_instrument`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_FDCA8C9C220C6AD0` (`jour_id`),
  ADD KEY `IDX_FDCA8C9CBAB22EE9` (`professeur_id`),
  ADD KEY `IDX_FDCA8C9C7C1CAAA9` (`type_instrument_id`);

--
-- Index pour la table `couter`
--
ALTER TABLE `couter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8D58231B7ECF78B0` (`cours_id`),
  ADD KEY `IDX_8D58231BB76F6B31` (`tranche_id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `eleve`
--
ALTER TABLE `eleve`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_ECA105F753C59D72` (`responsable_id`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_5E90F6D67ECF78B0` (`cours_id`),
  ADD KEY `IDX_5E90F6D6A6CC7B2` (`eleve_id`);

--
-- Index pour la table `instrument`
--
ALTER TABLE `instrument`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_3CBF69DD7C1CAAA9` (`type_instrument_id`);

--
-- Index pour la table `intervention`
--
ALTER TABLE `intervention`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D11814AB8A49CC82` (`professionnel_id`),
  ADD KEY `IDX_D11814ABCF11D9C` (`instrument_id`);

--
-- Index pour la table `inter_pret`
--
ALTER TABLE `inter_pret`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_244C23671B61704B` (`pret_id`),
  ADD KEY `IDX_244C23678EAE3863` (`intervention_id`);

--
-- Index pour la table `jour`
--
ALTER TABLE `jour`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pret`
--
ALTER TABLE `pret`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_52ECE979CF11D9C` (`instrument_id`),
  ADD KEY `IDX_52ECE979A6CC7B2` (`eleve_id`);

--
-- Index pour la table `professeur`
--
ALTER TABLE `professeur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `professionnel`
--
ALTER TABLE `professionnel`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `responsable`
--
ALTER TABLE `responsable`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tranche`
--
ALTER TABLE `tranche`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_instrument`
--
ALTER TABLE `type_instrument`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_21BCBFF8CE879FB1` (`classe_instrument_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`),
  ADD UNIQUE KEY `UNIQ_8D93D649A6CC7B2` (`eleve_id`),
  ADD UNIQUE KEY `UNIQ_8D93D649BAB22EE9` (`professeur_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `accessoire`
--
ALTER TABLE `accessoire`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `classe_instrument`
--
ALTER TABLE `classe_instrument`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `couter`
--
ALTER TABLE `couter`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `eleve`
--
ALTER TABLE `eleve`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `instrument`
--
ALTER TABLE `instrument`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `intervention`
--
ALTER TABLE `intervention`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `inter_pret`
--
ALTER TABLE `inter_pret`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `jour`
--
ALTER TABLE `jour`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `pret`
--
ALTER TABLE `pret`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `professeur`
--
ALTER TABLE `professeur`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `professionnel`
--
ALTER TABLE `professionnel`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `responsable`
--
ALTER TABLE `responsable`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `tranche`
--
ALTER TABLE `tranche`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `type_instrument`
--
ALTER TABLE `type_instrument`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `accessoire`
--
ALTER TABLE `accessoire`
  ADD CONSTRAINT `FK_8FD026ACF11D9C` FOREIGN KEY (`instrument_id`) REFERENCES `instrument` (`id`);

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `FK_FDCA8C9C220C6AD0` FOREIGN KEY (`jour_id`) REFERENCES `jour` (`id`),
  ADD CONSTRAINT `FK_FDCA8C9C7C1CAAA9` FOREIGN KEY (`type_instrument_id`) REFERENCES `type_instrument` (`id`),
  ADD CONSTRAINT `FK_FDCA8C9CBAB22EE9` FOREIGN KEY (`professeur_id`) REFERENCES `professeur` (`id`);

--
-- Contraintes pour la table `couter`
--
ALTER TABLE `couter`
  ADD CONSTRAINT `FK_8D58231B7ECF78B0` FOREIGN KEY (`cours_id`) REFERENCES `cours` (`id`),
  ADD CONSTRAINT `FK_8D58231BB76F6B31` FOREIGN KEY (`tranche_id`) REFERENCES `tranche` (`id`);

--
-- Contraintes pour la table `eleve`
--
ALTER TABLE `eleve`
  ADD CONSTRAINT `FK_ECA105F753C59D72` FOREIGN KEY (`responsable_id`) REFERENCES `responsable` (`id`);

--
-- Contraintes pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `FK_5E90F6D67ECF78B0` FOREIGN KEY (`cours_id`) REFERENCES `cours` (`id`),
  ADD CONSTRAINT `FK_5E90F6D6A6CC7B2` FOREIGN KEY (`eleve_id`) REFERENCES `eleve` (`id`);

--
-- Contraintes pour la table `instrument`
--
ALTER TABLE `instrument`
  ADD CONSTRAINT `FK_3CBF69DD7C1CAAA9` FOREIGN KEY (`type_instrument_id`) REFERENCES `type_instrument` (`id`);

--
-- Contraintes pour la table `intervention`
--
ALTER TABLE `intervention`
  ADD CONSTRAINT `FK_D11814AB8A49CC82` FOREIGN KEY (`professionnel_id`) REFERENCES `professionnel` (`id`),
  ADD CONSTRAINT `FK_D11814ABCF11D9C` FOREIGN KEY (`instrument_id`) REFERENCES `instrument` (`id`);

--
-- Contraintes pour la table `inter_pret`
--
ALTER TABLE `inter_pret`
  ADD CONSTRAINT `FK_244C23671B61704B` FOREIGN KEY (`pret_id`) REFERENCES `pret` (`id`),
  ADD CONSTRAINT `FK_244C23678EAE3863` FOREIGN KEY (`intervention_id`) REFERENCES `intervention` (`id`);

--
-- Contraintes pour la table `pret`
--
ALTER TABLE `pret`
  ADD CONSTRAINT `FK_52ECE979A6CC7B2` FOREIGN KEY (`eleve_id`) REFERENCES `eleve` (`id`),
  ADD CONSTRAINT `FK_52ECE979CF11D9C` FOREIGN KEY (`instrument_id`) REFERENCES `instrument` (`id`);

--
-- Contraintes pour la table `type_instrument`
--
ALTER TABLE `type_instrument`
  ADD CONSTRAINT `FK_21BCBFF8CE879FB1` FOREIGN KEY (`classe_instrument_id`) REFERENCES `classe_instrument` (`id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D649A6CC7B2` FOREIGN KEY (`eleve_id`) REFERENCES `eleve` (`id`),
  ADD CONSTRAINT `FK_8D93D649BAB22EE9` FOREIGN KEY (`professeur_id`) REFERENCES `professeur` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
