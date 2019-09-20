-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  ven. 20 sep. 2019 à 15:31
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `profil`
--

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE `classe` (
  `idclasse` int(11) NOT NULL,
  `nom_classe` varchar(45) DEFAULT NULL,
  `professeur_idprofesseur` int(11) NOT NULL,
  `total_eleves` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`idclasse`, `nom_classe`, `professeur_idprofesseur`, `total_eleves`) VALUES
(1, '3BCI', 1, NULL),
(2, '3BCI', 1, NULL),
(3, '3BCI', 1, NULL),
(4, '3BCI', 1, NULL),
(5, '3BCI', 1, NULL),
(6, '3BCI', 1, NULL),
(7, '3BCI', 1, NULL),
(8, '3BCI', 1, NULL),
(9, '3BCI', 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `code_personalite`
--

CREATE TABLE `code_personalite` (
  `idcode_personalite` int(11) NOT NULL,
  `code_personalite` varchar(45) DEFAULT NULL,
  `code_personalite_idcode_personalite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `code_personalite`
--

INSERT INTO `code_personalite` (`idcode_personalite`, `code_personalite`, `code_personalite_idcode_personalite`) VALUES
(1, ' INFP-A', NULL),
(2, ' INTJ-A', 16),
(3, ' INTP-A', 16),
(4, ' ENTP-A', 16),
(5, ' INFJ-A', 15),
(6, ' INFP-A', 15),
(7, ' ENFP-A', 15),
(8, ' ISTJ-A', 17),
(9, ' ISFJ-A', 17),
(10, 'ENTJ-A', 14),
(11, 'ENFJ-A', 14),
(12, 'ESTJ-A', 14),
(13, 'ESTP-A', 14),
(14, 'Leader', NULL),
(15, 'Diplomates', NULL),
(16, 'Analystes', NULL),
(17, 'Sentinelles', NULL),
(18, 'Explorateurs', NULL),
(19, 'ESFJ-A', 17),
(20, 'ISTP-A', 18),
(21, 'ISFP-A', 18),
(22, 'ESFP-A', 18);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `idetudiant` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `classe_idclasse` int(11) NOT NULL,
  `code_personalite_idcode_personalite` int(11) NOT NULL,
  `code_personalite_code_personalite_idcode_personalite` int(11) NOT NULL,
  `moyenne_back` int(11) DEFAULT NULL,
  `moyenne_front` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`idetudiant`, `nom`, `prenom`, `classe_idclasse`, `code_personalite_idcode_personalite`, `code_personalite_code_personalite_idcode_personalite`, `moyenne_back`, `moyenne_front`) VALUES
(14, 'Ratel', 'Hugo', 1, 7, 15, 3, 5),
(15, 'Lhermitte', 'Joffrey', 1, 8, 17, 5, 3),
(16, 'Lemarié', 'Lou', 1, 10, 14, 4, 3),
(17, 'Ballue', 'Jerome', 1, 11, 14, 1, 5),
(18, 'Follin', 'Emilie', 1, 5, 15, 4, 3),
(19, 'Bosson', 'Gauthier', 1, 2, 16, 4, 5),
(20, 'Gibert', 'Damien', 1, 5, 15, 3, 3),
(21, 'Aubry', 'Axel', 1, 5, 15, 3, 2),
(22, 'Malhouitre', 'Thomas', 1, 21, 18, 4, 3),
(23, 'Lienard', 'Edwin', 1, 5, 15, 2, 4),
(24, 'Hego', 'Nathan', 1, 7, 15, 4, 3),
(25, 'Bissick', 'Jean-Marc', 1, 3, 16, 2, 4),
(26, 'Revert', 'Romain', 1, 6, 15, 3, 2),
(27, 'Allalah', 'Clement', 1, 6, 15, 3, 3),
(28, 'Da Costa', 'Theo', 1, 13, 14, 5, 3);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant_has_projet`
--

CREATE TABLE `etudiant_has_projet` (
  `etudiant_idetudiant` int(11) NOT NULL,
  `projet_idprojet` int(11) NOT NULL,
  `note` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `groupes`
--

CREATE TABLE `groupes` (
  `idgroupes` int(11) NOT NULL,
  `projet_idprojet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `groupes_has_etudiant`
--

CREATE TABLE `groupes_has_etudiant` (
  `groupes_idgroupes` int(11) NOT NULL,
  `groupes_projet_idprojet` int(11) NOT NULL,
  `etudiant_idetudiant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

CREATE TABLE `professeur` (
  `idprofesseur` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`idprofesseur`, `nom`, `prenom`) VALUES
(1, 'Marcus', 'Fields'),
(2, 'Marcus', 'Fields'),
(3, 'Marcus', 'Fields'),
(4, 'Marcus', 'Fields'),
(5, 'Marcus', 'Fields'),
(6, 'Marcus', 'Fields'),
(7, 'Marcus', 'Fields'),
(8, 'Marcus', 'Fields'),
(9, 'Marcus', 'Fields');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `idprojet` int(11) NOT NULL,
  `nom_projet` varchar(45) DEFAULT NULL,
  `classe_professeur_idprofesseur` int(11) NOT NULL,
  `coeff_back` int(11) DEFAULT NULL,
  `coeff_front` int(11) DEFAULT NULL,
  `nb_groupes` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `technologies`
--

CREATE TABLE `technologies` (
  `idtechnologies` int(11) NOT NULL,
  `nom_technologie` varchar(45) DEFAULT NULL,
  `front_back` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `technologies_has_etudiant`
--

CREATE TABLE `technologies_has_etudiant` (
  `technologies_idtechnologies` int(11) NOT NULL,
  `etudiant_idetudiant` int(11) NOT NULL,
  `note` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `technologies_has_projet`
--

CREATE TABLE `technologies_has_projet` (
  `technologies_idtechnologies` int(11) NOT NULL,
  `projet_idprojet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`idclasse`,`professeur_idprofesseur`),
  ADD KEY `fk_classe_professeur1_idx` (`professeur_idprofesseur`);

--
-- Index pour la table `code_personalite`
--
ALTER TABLE `code_personalite`
  ADD PRIMARY KEY (`idcode_personalite`),
  ADD KEY `fk_code_personalite_code_personalite1_idx` (`code_personalite_idcode_personalite`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`idetudiant`,`classe_idclasse`,`code_personalite_idcode_personalite`,`code_personalite_code_personalite_idcode_personalite`),
  ADD KEY `fk_etudiant_classe1_idx` (`classe_idclasse`),
  ADD KEY `fk_etudiant_code_personalite1_idx` (`code_personalite_idcode_personalite`,`code_personalite_code_personalite_idcode_personalite`);

--
-- Index pour la table `etudiant_has_projet`
--
ALTER TABLE `etudiant_has_projet`
  ADD PRIMARY KEY (`etudiant_idetudiant`,`projet_idprojet`),
  ADD KEY `fk_etudiant_has_projet_projet1_idx` (`projet_idprojet`),
  ADD KEY `fk_etudiant_has_projet_etudiant1_idx` (`etudiant_idetudiant`);

--
-- Index pour la table `groupes`
--
ALTER TABLE `groupes`
  ADD PRIMARY KEY (`idgroupes`,`projet_idprojet`),
  ADD KEY `fk_groupes_projet1_idx` (`projet_idprojet`);

--
-- Index pour la table `groupes_has_etudiant`
--
ALTER TABLE `groupes_has_etudiant`
  ADD PRIMARY KEY (`groupes_idgroupes`,`groupes_projet_idprojet`,`etudiant_idetudiant`),
  ADD KEY `fk_groupes_has_etudiant_etudiant1_idx` (`etudiant_idetudiant`),
  ADD KEY `fk_groupes_has_etudiant_groupes1_idx` (`groupes_idgroupes`,`groupes_projet_idprojet`);

--
-- Index pour la table `professeur`
--
ALTER TABLE `professeur`
  ADD PRIMARY KEY (`idprofesseur`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`idprojet`,`classe_professeur_idprofesseur`),
  ADD KEY `fk_projet_classe1_idx` (`classe_professeur_idprofesseur`);

--
-- Index pour la table `technologies`
--
ALTER TABLE `technologies`
  ADD PRIMARY KEY (`idtechnologies`);

--
-- Index pour la table `technologies_has_etudiant`
--
ALTER TABLE `technologies_has_etudiant`
  ADD PRIMARY KEY (`technologies_idtechnologies`,`etudiant_idetudiant`),
  ADD KEY `fk_technologies_has_etudiant_etudiant1_idx` (`etudiant_idetudiant`),
  ADD KEY `fk_technologies_has_etudiant_technologies1_idx` (`technologies_idtechnologies`);

--
-- Index pour la table `technologies_has_projet`
--
ALTER TABLE `technologies_has_projet`
  ADD PRIMARY KEY (`technologies_idtechnologies`,`projet_idprojet`),
  ADD KEY `fk_technologies_has_projet_projet1_idx` (`projet_idprojet`),
  ADD KEY `fk_technologies_has_projet_technologies1_idx` (`technologies_idtechnologies`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `classe`
--
ALTER TABLE `classe`
  MODIFY `idclasse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `code_personalite`
--
ALTER TABLE `code_personalite`
  MODIFY `idcode_personalite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `idetudiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `groupes`
--
ALTER TABLE `groupes`
  MODIFY `idgroupes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `professeur`
--
ALTER TABLE `professeur`
  MODIFY `idprofesseur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `idprojet` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `technologies`
--
ALTER TABLE `technologies`
  MODIFY `idtechnologies` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `classe`
--
ALTER TABLE `classe`
  ADD CONSTRAINT `fk_classe_professeur1` FOREIGN KEY (`professeur_idprofesseur`) REFERENCES `professeur` (`idprofesseur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `code_personalite`
--
ALTER TABLE `code_personalite`
  ADD CONSTRAINT `fk_code_personalite_code_personalite1` FOREIGN KEY (`code_personalite_idcode_personalite`) REFERENCES `code_personalite` (`idcode_personalite`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `fk_etudiant_classe1` FOREIGN KEY (`classe_idclasse`) REFERENCES `classe` (`idclasse`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_etudiant_code_personalite1` FOREIGN KEY (`code_personalite_idcode_personalite`) REFERENCES `code_personalite` (`idcode_personalite`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `etudiant_has_projet`
--
ALTER TABLE `etudiant_has_projet`
  ADD CONSTRAINT `fk_etudiant_has_projet_etudiant1` FOREIGN KEY (`etudiant_idetudiant`) REFERENCES `etudiant` (`idetudiant`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_etudiant_has_projet_projet1` FOREIGN KEY (`projet_idprojet`) REFERENCES `projet` (`idprojet`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `groupes`
--
ALTER TABLE `groupes`
  ADD CONSTRAINT `fk_groupes_projet1` FOREIGN KEY (`projet_idprojet`) REFERENCES `projet` (`idprojet`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `groupes_has_etudiant`
--
ALTER TABLE `groupes_has_etudiant`
  ADD CONSTRAINT `fk_groupes_has_etudiant_etudiant1` FOREIGN KEY (`etudiant_idetudiant`) REFERENCES `etudiant` (`idetudiant`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_groupes_has_etudiant_groupes1` FOREIGN KEY (`groupes_idgroupes`,`groupes_projet_idprojet`) REFERENCES `groupes` (`idgroupes`, `projet_idprojet`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `projet`
--
ALTER TABLE `projet`
  ADD CONSTRAINT `fk_projet_classe1` FOREIGN KEY (`classe_professeur_idprofesseur`) REFERENCES `classe` (`professeur_idprofesseur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `technologies_has_etudiant`
--
ALTER TABLE `technologies_has_etudiant`
  ADD CONSTRAINT `fk_technologies_has_etudiant_etudiant1` FOREIGN KEY (`etudiant_idetudiant`) REFERENCES `etudiant` (`idetudiant`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_technologies_has_etudiant_technologies1` FOREIGN KEY (`technologies_idtechnologies`) REFERENCES `technologies` (`idtechnologies`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `technologies_has_projet`
--
ALTER TABLE `technologies_has_projet`
  ADD CONSTRAINT `fk_technologies_has_projet_projet1` FOREIGN KEY (`projet_idprojet`) REFERENCES `projet` (`idprojet`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_technologies_has_projet_technologies1` FOREIGN KEY (`technologies_idtechnologies`) REFERENCES `technologies` (`idtechnologies`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
