-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 13 oct. 2022 à 17:43
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Gestion_ecole`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id_administrateur` int(11) NOT NULL,
  `matricule_administrateur` varchar(255) DEFAULT NULL,
  `adresse_mail_administrateur` varchar(255) DEFAULT NULL,
  `mot_de_passe_administrateur` varchar(255) DEFAULT NULL,
  `id_compte` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id_administrateur`, `matricule_administrateur`, `adresse_mail_administrateur`, `mot_de_passe_administrateur`, `id_compte`) VALUES
(1, NULL, 'mouhamed.ngom50@gmail.com', '1111', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

CREATE TABLE `classes` (
  `id_classes` int(11) NOT NULL,
  `libelle_classes` varchar(255) DEFAULT NULL,
  `nombre_eleve_classes` int(11) DEFAULT NULL,
  `id_eleves` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `composer`
--

CREATE TABLE `composer` (
  `id_classes` int(11) NOT NULL,
  `libelle_matieres` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `comptabilite`
--

CREATE TABLE `comptabilite` (
  `id_comptabilite` int(11) NOT NULL,
  `montant_inscription_eleve_comptabilite` int(11) DEFAULT NULL,
  `paiement_eleves_comptabilite` int(11) DEFAULT NULL,
  `salaire_employe_comptabilite` int(11) DEFAULT NULL,
  `id_depenses` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `id_compte` int(11) NOT NULL,
  `adresse_mail_compte` varchar(255) DEFAULT NULL,
  `mot_de_passe_compte` varchar(255) DEFAULT NULL,
  `employes_id_employes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `controler`
--

CREATE TABLE `controler` (
  `id_classes` int(11) NOT NULL,
  `id_Employes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `depenses`
--

CREATE TABLE `depenses` (
  `id_depenses` int(11) NOT NULL,
  `libelle_depenses` varchar(255) DEFAULT NULL,
  `montant_depenses` int(11) DEFAULT NULL,
  `date_depenses` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `eleves`
--

CREATE TABLE `eleves` (
  `id_eleves` int(11) NOT NULL,
  `matricule_eleves` varchar(255) DEFAULT NULL,
  `prenom_eleves` varchar(255) DEFAULT NULL,
  `nom_eleves` varchar(255) DEFAULT NULL,
  `date_naissance_eleves` date DEFAULT NULL,
  `lieu_naissance_eleves` varchar(255) DEFAULT NULL,
  `cycle_eleves` varchar(255) DEFAULT NULL,
  `classe_eleves` varchar(255) DEFAULT NULL,
  `montant_inscription_eleves` varchar(255) DEFAULT NULL,
  `date_inscription_eleves` date DEFAULT NULL,
  `id_comptabilite` int(11) DEFAULT NULL,
  `sexe` varchar(10) DEFAULT NULL,
  `archive` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `eleves`
--

INSERT INTO `eleves` (`id_eleves`, `matricule_eleves`, `prenom_eleves`, `nom_eleves`, `date_naissance_eleves`, `lieu_naissance_eleves`, `cycle_eleves`, `classe_eleves`, `montant_inscription_eleves`, `date_inscription_eleves`, `id_comptabilite`, `sexe`, `archive`) VALUES
(1, '2022-1-EDR', 'Adama', 'Diop', '2022-10-13', 'Dakar', 'primaire', 'CM1', '15000', '2009-01-13', NULL, 'M', NULL),
(2, '2022-2-EDR', 'Amadou', 'Mbaye', '2010-07-13', 'Yoff', 'primaire', 'CE2', '15000', '2022-10-13', NULL, 'M', 0),
(3, '2022-3-EDR', 'Astou', 'Fall', '2000-10-13', 'Dakar', 'collège', '3 ième', '200000', '2022-10-13', NULL, 'F', 0),
(4, '2022-3-EDR', 'Coumba ', 'Fall', '2000-10-13', 'Dakar', 'collège', '3 ième', '200000', '2022-10-13', NULL, 'F', 0),
(5, '2022-5-EDR', 'Modou ', 'Thiam', '2007-04-13', 'Pikine', 'collège', '6 ième', '20000', '2022-10-13', NULL, 'M', 0),
(6, '2022-6-EDR', 'Absa', 'Ndiaye', '2009-12-13', 'Mbour', 'collège', '5 ième', '20000', '2022-10-11', NULL, 'F', 0),
(7, '2022-7-EDR', 'Gorgui', 'Ba', '2009-06-03', 'Louga', 'collège', '6 ième', '20000', '2022-10-02', NULL, 'M', 0),
(8, '2022-8-EDR', 'Libasse', 'Mbengue', '2009-08-05', 'Cambérène', 'primaire', 'CM2', '20000', '2022-10-11', NULL, 'M', 0),
(9, '2022-8-EDR', 'Libasse', 'Mbengue', '2009-08-05', 'Cambérène', 'primaire', 'CM2', '20000', '2022-10-11', NULL, 'M', 0),
(10, '2022-8-EDR', 'Libasse', 'Mbengue', '2009-08-05', 'Cambérène', 'primaire', 'CM2', '20000', '2022-10-11', NULL, 'M', 0),
(11, '2022-8-EDR', 'Libasse', 'Mbengue', '2009-08-05', 'Cambérène', 'primaire', 'CM2', '20000', '2022-10-11', NULL, 'M', 0),
(12, '2022-12-EDR', 'Abdou Sara', 'Diop', '2006-08-13', 'Diourbel', 'collège', '3 ième', '20000', '2022-10-12', NULL, 'M', 0);

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

CREATE TABLE `employes` (
  `id_Employes` int(11) NOT NULL,
  `matricule_Employes` varchar(255) DEFAULT NULL,
  `prenom_Employes` varchar(255) DEFAULT NULL,
  `nom_Employes` varchar(255) DEFAULT NULL,
  `date_naissance_Employes` date DEFAULT NULL,
  `lieu_naissance_Employes` varchar(255) DEFAULT NULL,
  `adresse_mail_Employes` varchar(255) DEFAULT NULL,
  `profil_Employes` varchar(255) DEFAULT NULL,
  `matiere_enseigne_Employes` varchar(255) DEFAULT NULL,
  `compte_id_compte` int(11) DEFAULT NULL,
  `mot_de_passe` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employes`
--

INSERT INTO `employes` (`id_Employes`, `matricule_Employes`, `prenom_Employes`, `nom_Employes`, `date_naissance_Employes`, `lieu_naissance_Employes`, `adresse_mail_Employes`, `profil_Employes`, `matiere_enseigne_Employes`, `compte_id_compte`, `mot_de_passe`) VALUES
(2, 'ad15', 'Adama', 'DIEYE', '2021-05-03', 'Fatick', 'Cambérène', 'enseignant', 'français', NULL, 'adama'),
(3, '2022- 1 -EDR', 'Adama', 'DIEYE', '2022-10-21', 'Fatick', 'adamadieye780@gmail.com', 'enseignant', 'Anglais', NULL, 'qdfjfgu'),
(4, '2022-4-EDR', 'Moussa', 'Sarr', '2006-02-10', 'Dakar', 'moussa@gmail.com', 'enseignant', 'mathématique', NULL, 'adama'),
(5, '2022-5-EDR', 'modou', 'Diop', '1998-01-10', 'cambere', 'modou@gmail.com', 'enseignant', 'Arabe', NULL, '4896be9d0f9da6266f1d6b84401ee701');

-- --------------------------------------------------------

--
-- Structure de la table `gerer`
--

CREATE TABLE `gerer` (
  `id_Employes` int(11) NOT NULL,
  `note` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `matieres`
--

CREATE TABLE `matieres` (
  `libelle_matieres` varchar(255) NOT NULL,
  `coef_matieres` int(11) DEFAULT NULL,
  `notes_matieres` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

CREATE TABLE `notes` (
  `note` float NOT NULL,
  `moyenne` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id_administrateur`),
  ADD KEY `FK_administrateur_id_compte` (`id_compte`);

--
-- Index pour la table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id_classes`),
  ADD KEY `FK_classes_id_eleves` (`id_eleves`);

--
-- Index pour la table `composer`
--
ALTER TABLE `composer`
  ADD PRIMARY KEY (`id_classes`,`libelle_matieres`),
  ADD KEY `FK_composer_libelle_matieres` (`libelle_matieres`);

--
-- Index pour la table `comptabilite`
--
ALTER TABLE `comptabilite`
  ADD PRIMARY KEY (`id_comptabilite`),
  ADD KEY `FK_comptabilite_id_depenses` (`id_depenses`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`id_compte`),
  ADD KEY `FK_compte_employes_id_employes` (`employes_id_employes`);

--
-- Index pour la table `controler`
--
ALTER TABLE `controler`
  ADD PRIMARY KEY (`id_classes`,`id_Employes`),
  ADD KEY `FK_controler_id_Employes` (`id_Employes`);

--
-- Index pour la table `depenses`
--
ALTER TABLE `depenses`
  ADD PRIMARY KEY (`id_depenses`);

--
-- Index pour la table `eleves`
--
ALTER TABLE `eleves`
  ADD PRIMARY KEY (`id_eleves`),
  ADD KEY `FK_eleves_id_comptabilite` (`id_comptabilite`);

--
-- Index pour la table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`id_Employes`),
  ADD KEY `FK_employes_compte_id_compte` (`compte_id_compte`);

--
-- Index pour la table `gerer`
--
ALTER TABLE `gerer`
  ADD PRIMARY KEY (`id_Employes`,`note`),
  ADD KEY `FK_gerer_notes` (`note`);

--
-- Index pour la table `matieres`
--
ALTER TABLE `matieres`
  ADD PRIMARY KEY (`libelle_matieres`);

--
-- Index pour la table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`note`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id_administrateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `classes`
--
ALTER TABLE `classes`
  MODIFY `id_classes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `comptabilite`
--
ALTER TABLE `comptabilite`
  MODIFY `id_comptabilite` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `id_compte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `depenses`
--
ALTER TABLE `depenses`
  MODIFY `id_depenses` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `eleves`
--
ALTER TABLE `eleves`
  MODIFY `id_eleves` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `employes`
--
ALTER TABLE `employes`
  MODIFY `id_Employes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD CONSTRAINT `FK_administrateur_id_compte` FOREIGN KEY (`id_compte`) REFERENCES `compte` (`id_compte`);

--
-- Contraintes pour la table `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `FK_classes_id_eleves` FOREIGN KEY (`id_eleves`) REFERENCES `eleves` (`id_eleves`);

--
-- Contraintes pour la table `composer`
--
ALTER TABLE `composer`
  ADD CONSTRAINT `FK_composer_id_classes` FOREIGN KEY (`id_classes`) REFERENCES `classes` (`id_classes`),
  ADD CONSTRAINT `FK_composer_libelle_matieres` FOREIGN KEY (`libelle_matieres`) REFERENCES `matieres` (`libelle_matieres`);

--
-- Contraintes pour la table `comptabilite`
--
ALTER TABLE `comptabilite`
  ADD CONSTRAINT `FK_comptabilite_id_depenses` FOREIGN KEY (`id_depenses`) REFERENCES `depenses` (`id_depenses`);

--
-- Contraintes pour la table `compte`
--
ALTER TABLE `compte`
  ADD CONSTRAINT `FK_compte_employes_id_employes` FOREIGN KEY (`employes_id_employes`) REFERENCES `employes` (`id_Employes`);

--
-- Contraintes pour la table `controler`
--
ALTER TABLE `controler`
  ADD CONSTRAINT `FK_controler_id_Employes` FOREIGN KEY (`id_Employes`) REFERENCES `employes` (`id_Employes`),
  ADD CONSTRAINT `FK_controler_id_classes` FOREIGN KEY (`id_classes`) REFERENCES `classes` (`id_classes`);

--
-- Contraintes pour la table `eleves`
--
ALTER TABLE `eleves`
  ADD CONSTRAINT `FK_eleves_id_comptabilite` FOREIGN KEY (`id_comptabilite`) REFERENCES `comptabilite` (`id_comptabilite`);

--
-- Contraintes pour la table `employes`
--
ALTER TABLE `employes`
  ADD CONSTRAINT `FK_employes_compte_id_compte` FOREIGN KEY (`compte_id_compte`) REFERENCES `compte` (`id_compte`);

--
-- Contraintes pour la table `gerer`
--
ALTER TABLE `gerer`
  ADD CONSTRAINT `FK_gerer_id_Employes` FOREIGN KEY (`id_Employes`) REFERENCES `employes` (`id_Employes`),
  ADD CONSTRAINT `FK_gerer_notes` FOREIGN KEY (`note`) REFERENCES `notes` (`note`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
