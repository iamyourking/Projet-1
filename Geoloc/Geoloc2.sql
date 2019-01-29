-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mar. 29 jan. 2019 à 09:01
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Geoloc2`
--

-- --------------------------------------------------------

--
-- Structure de la table `ajout_offre`
--

CREATE TABLE `ajout_offre` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `filiere` varchar(12) NOT NULL,
  `date_debut` date NOT NULL,
  `duree` varchar(20) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `ville` varchar(25) NOT NULL,
  `code_postal` int(6) DEFAULT NULL,
  `telephone` int(11) NOT NULL,
  `description` text NOT NULL,
  `date_ajout` date NOT NULL,
  `id_partenaire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ajout_offre`
--

INSERT INTO `ajout_offre` (`id`, `titre`, `filiere`, `date_debut`, `duree`, `adresse`, `ville`, `code_postal`, `telephone`, `description`, `date_ajout`, `id_partenaire`) VALUES
(1, 'Aerified', 'Executive Se', '0000-00-00', '11:43 AM', '66249 Mendota Pass', 'Metulla', NULL, 487, 'Restrict of Abd Aorta with Intralum Dev, Temp, Perc Approach', '0000-00-00', 1),
(2, 'Namfix', 'Paralegal', '0000-00-00', '4:23 PM', '9 Mockingbird Hill', 'San Carlos', NULL, 604, 'LDR Brachytherapy of Chest Wall using Californium 252', '0000-00-00', 2),
(3, 'Stringtough', 'Media Manage', '0000-00-00', '1:25 AM', '53922 Starling Crossing', 'Tutem', NULL, 714, 'Drainage of Right Testis, Percutaneous Approach', '0000-00-00', 3),
(4, 'Tempsoft', 'Recruiter', '0000-00-00', '11:28 PM', '20514 Bunting Crossing', 'Weihe', NULL, 510, 'Revision of Intraluminal Device in Bladder, Extern Approach', '0000-00-00', 4),
(5, 'Stronghold', 'Associate Pr', '0000-00-00', '9:04 PM', '39026 Bellgrove Place', 'Győr', 9024, 854, 'Revision of Nonaut Sub in Skull, Open Approach', '0000-00-00', 5),
(6, 'Zoolab', 'Systems Admi', '0000-00-00', '8:22 PM', '62910 Lakewood Gardens Hill', 'Liuliping', NULL, 536, 'Insertion of Infusion Device into L Fem Art, Open Approach', '0000-00-00', 6),
(7, 'Tres-Zap', 'Automation S', '0000-00-00', '3:08 AM', '79749 Grasskamp Parkway', 'Linköping', 581, 938, 'Insertion of Spacer into R Finger Phalanx Jt, Perc Approach', '0000-00-00', 7),
(8, 'Ronstring', 'Environmenta', '0000-00-00', '11:23 PM', '3333 Montana Drive', 'Raymond', 0, 563, 'Removal of Drain Dev from Vas Deferens, Perc Endo Approach', '0000-00-00', 8),
(9, 'Ventosanzap', 'Structural A', '0000-00-00', '11:14 AM', '46 Pond Trail', 'Sananrejo', NULL, 741, 'Supplement Right Cephalic Vein with Synth Sub, Open Approach', '0000-00-00', 9),
(10, 'Cardify', 'Associate Pr', '0000-00-00', '10:57 PM', '22 Forest Run Road', 'Arlington', 22205, 571, 'Extraction of Dura Mater, Percutaneous Approach', '0000-00-00', 10),
(11, 'Stringtough', 'Automation S', '0000-00-00', '12:24 AM', '117 Buena Vista Way', 'Sanhe', NULL, 502, 'Dilation of Right Ulnar Artery, Bifurcation, Open Approach', '0000-00-00', 11),
(12, 'Temp', 'Editor', '0000-00-00', '9:58 PM', '3453 Vahlen Terrace', 'Bayt al ‘Awābī', NULL, 306, 'Introduce Oth Therap Subst in Cran Cav/Brain, Perc', '0000-00-00', 12),
(13, 'Transcof', 'Senior Sales', '0000-00-00', '8:33 PM', '11 Bowman Point', 'San Jose', 95128, 714, 'Compression of Chest Wall using Intermittent Pressure Device', '0000-00-00', 13),
(14, 'Asoka', 'Director of ', '0000-00-00', '2:49 AM', '77 Maryland Lane', 'Argayash', 456880, 690, 'HDR Brachytherapy of Tongue using Palladium 103', '0000-00-00', 14),
(15, 'Opela', 'Senior Quali', '0000-00-00', '4:57 AM', '5 Miller Drive', 'Slobozia', 0, 588, 'Repair Left Lower Arm and Wrist Tendon, Perc Endo Approach', '0000-00-00', 15),
(16, 'Cardguard', 'Account Repr', '0000-00-00', '5:45 AM', '977 Packers Lane', 'San Nicolas', 4207, 721, 'Excision of Carina, Via Natural or Artificial Opening', '0000-00-00', 16),
(17, 'Stronghold', 'Statistician', '0000-00-00', '9:58 PM', '770 Clove Pass', 'Haguenau', 67504, 883, 'Bypass Left Ureter to Ileum with Nonaut Sub, Open Approach', '0000-00-00', 17),
(18, 'Rank', 'Electrical E', '0000-00-00', '11:35 AM', '18 Del Mar Place', 'Berehomet', NULL, 831, 'Drainage of L Abd Tendon with Drain Dev, Perc Endo Approach', '0000-00-00', 18),
(19, 'Andalax', 'Executive Se', '0000-00-00', '8:55 AM', '952 Sugar Plaza', 'Forninho', 2965, 944, 'Reposition R Metatarsotars Jt w Int Fix, Perc Endo', '0000-00-00', 19),
(20, 'Pannier', 'Nuclear Powe', '0000-00-00', '4:33 PM', '48455 Buell Drive', 'Köping', 731, 729, 'Repair Cardiovascular System in POC with Oth Dev, Endo', '0000-00-00', 20),
(21, 'Konklab', 'Statistician', '0000-00-00', '7:24 PM', '3 Service Center', 'Konza', NULL, 940, 'Supplement Left Patella with Synth Sub, Perc Endo Approach', '0000-00-00', 21),
(22, 'Tresom', 'Marketing As', '0000-00-00', '8:52 AM', '21378 Fordem Court', 'Sydney', 1181, 229, 'Resection of Upper Tooth, Single, Open Approach', '0000-00-00', 22),
(23, 'Regrant', 'Software Eng', '0000-00-00', '9:34 AM', '9684 Fallview Street', 'Kebon', NULL, 645, 'Drainage of Bilateral Breast, Via Opening', '0000-00-00', 23),
(24, 'Zamit', 'Senior Finan', '0000-00-00', '11:28 AM', '6 Jackson Road', 'Bålsta', 746, 126, 'Supplement Left Maxilla with Autol Sub, Perc Endo Approach', '0000-00-00', 24),
(25, 'Toughjoyfax', 'Professor', '0000-00-00', '8:53 AM', '659 Leroy Center', 'Guomaying', NULL, 994, 'Excision of Upper Tooth, External Approach, Multiple', '0000-00-00', 25),
(26, 'Zamit', 'Nuclear Powe', '0000-00-00', '12:37 PM', '074 8th Place', 'Paico', NULL, 980, 'Extirpation of Matter from L Low Lobe Bronc, Open Approach', '0000-00-00', 26),
(27, 'Fintone', 'GIS Technica', '0000-00-00', '4:03 AM', '06 Upham Point', 'Cové', NULL, 360, 'Plain Radiography of Cervical Spine', '0000-00-00', 27),
(28, 'Keylex', 'Payment Adju', '0000-00-00', '2:35 PM', '1815 Fairfield Junction', 'Xam Nua', NULL, 602, 'Occlusion of Right Foot Vein, Perc Endo Approach', '0000-00-00', 28),
(29, 'Cardify', 'Executive Se', '0000-00-00', '9:42 PM', '82916 Southridge Avenue', 'Bílina Kyselka', 419, 248, 'Dilate L Axilla Art, Bifurc, w 2 Intralum Dev, Perc', '0000-00-00', 29),
(30, 'Zontrax', 'GIS Technica', '0000-00-00', '6:18 AM', '970 Sommers Parkway', 'Yanfolila', NULL, 549, 'Measurement of Arterial Pressure, Oth Thor, Perc Approach', '0000-00-00', 30),
(31, 'Pannier', 'Teacher', '0000-00-00', '12:57 PM', '20059 Gale Road', 'Teykovo', 155048, 919, 'Plain Radiography of R Ext Carotid using L Osm Contrast', '0000-00-00', 31),
(32, 'Flowdesk', 'Senior Devel', '0000-00-00', '9:38 PM', '5933 Kingsford Trail', 'Krasnogorsk', 694810, 138, 'Reposition Right Elbow Joint with Ext Fix, Extern Approach', '0000-00-00', 32),
(33, 'Konklux', 'Physical The', '0000-00-00', '3:42 AM', '0 Atwood Alley', 'Las Vegas', 89115, 702, 'Fusion of 2-7 T Jt, Post Appr P Col, Perc Endo Approach', '0000-00-00', 33),
(34, 'Konklux', 'Product Engi', '0000-00-00', '7:23 AM', '69480 Beilfuss Plaza', 'Dazhan', NULL, 264, 'Excision of Right Nipple, Endo, Diagn', '0000-00-00', 34),
(35, 'Mat Lam Tam', 'Actuary', '0000-00-00', '11:55 PM', '50776 Gina Circle', 'Santa Teresa First', 2005, 790, 'Insert Tissue Expander in Perineum Subcu/Fascia, Open', '0000-00-00', 35),
(36, 'Voyatouch', 'Recruiting M', '0000-00-00', '4:20 AM', '299 Fordem Alley', 'San Rafael', 5039, 187, 'Drainage of R Up Leg Subcu/Fascia, Perc Approach', '0000-00-00', 36),
(37, 'Andalax', 'Web Develope', '0000-00-00', '6:41 AM', '37 Roxbury Park', 'Pardubice', 530, 220, 'Revision of Infusion Device in L Wrist Jt, Open Approach', '0000-00-00', 37),
(38, 'Trippledex', 'Research Ass', '0000-00-00', '10:33 AM', '18 Orin Street', 'Tubigan', 9022, 282, 'Introduce Monoclonal Antibody in Resp Tract, Perc', '0000-00-00', 38),
(39, 'Asoka', 'Electrical E', '0000-00-00', '10:08 PM', '7 Donald Plaza', 'Norfolk County', 0, 565, 'Division of Acoustic Nerve, Percutaneous Endoscopic Approach', '0000-00-00', 39),
(40, 'Fixflex', 'Recruiting M', '0000-00-00', '12:22 AM', '2484 Namekagon Park', 'San Diego', 92165, 619, 'Excision of T-lum Disc, Perc Approach, Diagn', '0000-00-00', 40),
(41, 'Vagram', 'Civil Engine', '0000-00-00', '10:15 PM', '9748 Di Loreto Lane', 'Yuto', 4518, 921, 'Release Left Kidney Pelvis, Open Approach', '0000-00-00', 41),
(42, 'Vagram', 'Community Ou', '0000-00-00', '12:29 AM', '67 Monument Terrace', 'Ýpsonas', NULL, 989, 'Bypass Splenic Vein to L Renal Vein w Autol Sub, Perc Endo', '0000-00-00', 42),
(43, 'Toughjoyfax', 'Civil Engine', '0000-00-00', '5:00 AM', '30025 Maple Drive', 'Zaysan', NULL, 954, 'Repair Left Greater Saphenous Vein, Percutaneous Approach', '0000-00-00', 43),
(44, 'Asoka', 'Analog Circu', '0000-00-00', '11:15 PM', '2770 Mitchell Plaza', 'Verkhniy Dashkesan', NULL, 304, 'Transfer L Low Arm Subcu/Fascia w Skin, Subcu, Fascia, Perc', '0000-00-00', 44),
(45, 'Hatity', 'Payment Adju', '0000-00-00', '6:03 PM', '268 Blackbird Hill', 'Barice', NULL, 865, 'Supplement Hard Palate with Autol Sub, Extern Approach', '0000-00-00', 45),
(46, 'Latlux', 'Programmer I', '0000-00-00', '12:02 AM', '50040 Canary Drive', 'Venda do Valador', 2665, 995, 'Removal of Nonaut Sub from R Toe Phalanx, Perc Approach', '0000-00-00', 46),
(47, 'Overhold', 'Design Engin', '0000-00-00', '1:07 AM', '9 Vidon Point', 'Safi', NULL, 583, 'Reposition R Humeral Shaft with Int Fix, Perc Endo Approach', '0000-00-00', 47),
(48, 'Cardguard', 'Programmer I', '0000-00-00', '12:35 AM', '29 Forest Center', 'Sertolovo', 197758, 913, 'Restriction of Splenic Art with Intralum Dev, Open Approach', '0000-00-00', 48),
(49, 'It', 'Research Ass', '0000-00-00', '12:05 PM', '012 Talisman Place', 'Štoky', 582, 420, 'Inspection of Left Tympanic Membrane, Endo', '0000-00-00', 49),
(50, 'Job', 'GIS Technica', '0000-00-00', '7:26 AM', '0988 Thierer Lane', 'Lakeland', 33805, 863, 'Revision of Synth Sub in R Up Femur, Perc Approach', '0000-00-00', 50),
(51, 'Opela', 'Nurse Practi', '0000-00-00', '4:40 AM', '08525 Mcbride Pass', 'Tumbi', NULL, 626, 'Excision of Bilateral Spermatic Cords, Open Approach, Diagn', '0000-00-00', 51);

-- --------------------------------------------------------

--
-- Structure de la table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `doc` varchar(255) NOT NULL,
  `date_ajout` date NOT NULL,
  `id_entreprise` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `documents`
--

INSERT INTO `documents` (`id`, `file`, `type`, `id_user`, `doc`, `date_ajout`, `id_entreprise`) VALUES
(1, '16-fabiola-crie-cv.pdf', 'application/pdf', NULL, 'CV', '2019-01-24', NULL),
(2, '86-fabiola-crie-cv.pdf', 'application/pdf', NULL, 'CV', '2019-01-24', NULL),
(3, '24-fabiola-crie-cv.pdf', 'application/pdf', 3, 'CV', '2019-01-24', NULL),
(4, '61-fabiola-crie-cv.pdf', 'application/pdf', 3, 'CV', '2019-01-24', NULL),
(5, '36-pprofile-fab.jpeg', 'image/jpeg', 3, 'PP', '2019-01-27', NULL),
(6, '64-pprofile-10426168_631670213627802_4741200941556140456_n.jpg', 'image/jpeg', 2, 'PP', '2019-01-28', NULL),
(7, '32-pimg-10888464_344180169101053_8041197258779178713_n.jpg', 'image/jpeg', 4, 'PP', '2019-01-28', NULL),
(8, '49-pimg-2019-01-11_16-58-08.jpeg', 'image/jpeg', NULL, 'PP', '2019-01-28', NULL),
(9, '33-pimg-12501784_180050849022126_659027527_n.jpg', 'image/jpeg', 5, 'PP', '2019-01-28', NULL),
(10, '43-pimg-2019-01-28_16-39-47.png', 'image/png', 6, 'PP', '2019-01-28', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `siret` varchar(55) NOT NULL,
  `id_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passw` varchar(255) NOT NULL,
  `nom` varchar(55) NOT NULL,
  `prenom` varchar(55) NOT NULL,
  `filliere` varchar(20) DEFAULT NULL,
  `annee` varchar(10) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `date_ajout` date DEFAULT NULL,
  `fonction` varchar(100) DEFAULT NULL,
  `id_entreprise` varchar(255) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `passw`, `nom`, `prenom`, `filliere`, `annee`, `grade`, `date_ajout`, `fonction`, `id_entreprise`, `gender`) VALUES
(1, 'jeremy.tchiss@gmail.com', '123456', 'TCHISSAMBOU', 'Jérémy', NULL, '2eme', 'admin', '2019-01-22', 'Responsable pédagogique', NULL, NULL),
(2, 'raphael.bassignani91@gmail.com', '123456', 'Bassignani', 'Raphael', 'BTS SIO', '2eme', 'etudiant', '2019-01-22', NULL, NULL, NULL),
(3, 'crie.fabiola@gmail.com', '123456', 'Crie', 'Fabiola', 'BTS NRC', '1ere', 'etudiant', '2019-01-22', NULL, NULL, 'femme'),
(4, 'baptisteleite@gmail.com', '123456', 'Leite', 'Baptiste', 'BTS SIO', '2eme', 'etudiant', '2019-01-28', NULL, NULL, 'homme'),
(5, 'logan.ako@gmail.com', '123456', 'Ako', 'Logan', 'BTS SIO', '2eme', 'etudiant', '2019-01-28', NULL, NULL, 'homme'),
(6, 'yassine.hajjaji@gmail.com', '123456', 'Hajjaji', 'Yassine', 'BTS SIO', '2eme', 'etudiant', '2019-01-28', NULL, NULL, 'homme');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ajout_offre`
--
ALTER TABLE `ajout_offre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `offre->entreprise` (`id_partenaire`);

--
-- Index pour la table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `docuser` (`id_user`),
  ADD KEY `docentreprise` (`id_entreprise`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ajout_offre`
--
ALTER TABLE `ajout_offre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `ajout_offre`
--
ALTER TABLE `ajout_offre`
  ADD CONSTRAINT `offre->entreprise` FOREIGN KEY (`id_partenaire`) REFERENCES `entreprise` (`id`);

--
-- Contraintes pour la table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `docentreprise` FOREIGN KEY (`id_entreprise`) REFERENCES `entreprise` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
