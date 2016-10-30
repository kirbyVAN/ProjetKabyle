-- phpMyAdmin SQL Dump
-- version 4.4.15.8
-- https://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 30 Octobre 2016 à 08:02
-- Version du serveur :  5.5.50-MariaDB
-- Version de PHP :  5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `p1405185`
--

-- --------------------------------------------------------

--
-- Structure de la table `Articles`
--

CREATE TABLE IF NOT EXISTS `Articles` (
  `idArticle` int(10) NOT NULL,
  `titre` varchar(255) NOT NULL DEFAULT '',
  `auteur` varchar(255) NOT NULL DEFAULT '',
  `contenu` text NOT NULL,
  `dateArticle` date NOT NULL,
  `heureArticle` time NOT NULL,
  `photo` varchar(255) DEFAULT NULL COMMENT 'URL de la Photo'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Articles`
--

INSERT INTO `Articles` (`idArticle`, `titre`, `auteur`, `contenu`, `dateArticle`, `heureArticle`, `photo`) VALUES
(1, 'Mouloud Mammeri', 'mouloud.mammeri.free.fr', '<p>Mouloud MAMMERI (Dda Lmulud At Maâmmer), une des figures les plus emblématiques de la culture et de la langue amazighes, est né le 28 décembre 1917 à Taourirt Mimoun, dans la région des Ath Yanni.</p>\r\n<p>Il part à l’âge de 11 ans en 1928 pour Rabat chez son oncle où il entre en sixième au lycée Gauraud. Quatre ans après, il revient en Algérie et étudie au lycée Bugeaud. Par la suite, il part étudier à Paris au lycée Louis-le-Grand, ayant en vue l’Ecole Normale Supérieure.</p>\r\n<p>Il est mobilisé en 1939, puis libéré en 1940, il s’inscrit à la faculté des Lettres d’Alger. Mobilisé de nouveau en 1942, il participe aux campagnes d’Italie, de France et d’Allemagne.</p>\r\n<p>Il passe ensuite le concours de professeur des Lettres à Paris. De retour en Algérie, il est professeur à Médéa en 1947-48 puis à Ben Aknoun près d’Alger.</p>\r\n<p>En 1953 il est lauréat du « Prix des quatre jurés ». Il doit, sous la pression des événements, quitter Alger en 1956. En septembre 1957, il est le rédacteur, sous le nom d’emprunt « KADOUR », du texte adressé par la délégation extérieur du F.L.N. à l’Organisation des Nations Unies.</p>\r\n<p>En 1957, pendant la guerre, il part pour le Maroc pour revenir en 1962 après l’indépendance en tant que professeur à l’Université d’Alger en tant qu’enseignant de langue et de culture berbères et directeur du C.R.A.P.E jusqu’en 1980.</p>\r\n<p>De 1957 à 1959, il reste au Maroc, où il enseigne au lycée Moulay Idriss à Fès, avant de regagner l’Algérie au lendemain de l’Indépendance et commence à dispenser des cours de Tamazight à l’Université d’Alger jusqu’en 1973.</p>\r\n<p>De 1969 à 1980 il dirige le Centre national de Recherches Anthropologiques, Préhistoriques et Ethnologiques (C.R.A.P.E.) , tout en donnant des cours à l’Université d’Alger.</p>\r\n<p>Retraité, il fait la navette après 1980 entre Paris et Alger et se consacre à son association loi 1901 le CERAM, le Centre d’Etudes et Recherches Amazigh.</p>\r\n<p>\r\nIl eut également un passage éphémère à la tête de la première Union Nationale des Écrivains Algériens qu’il abandonnera pour discordance de vue et de rôle de l’écrivain dans sa société. </p>\r\n<p>\r\nIl fut maître de la chaire de Berbère à l’Université d’Alger, de 1962 à 1969, où certaines matières, telles l’ethnologie et l’anthropologie, jugées sciences coloniales par la tutelle durent disparaître des enseignements universitaires. Il continua, malgré ça, à animer bénévolement un cours de langue Berbère jusqu’à 1973. </p>\r\n<p>\r\nEn 1980, l’interdiction de sa conférence, ultérieurement autorisé, prévue à l’Université de Tizi Ouzou ayant pour thème le titre de son dernier recueil de poésie « Poèmes kabyles anciens », déclenchera les premières manifestations publiques revendiquant la langue et la culture Amazighes, ça sera le début de « Tafsut n Imazighen » (Printemps Berbère).</p>\r\n<p>En 1982, il fonde à Paris le Centre d’Études et de Recherches Amazighes (C.E.R.A.M.), dans la même année, il fonda la célèbre revue « AWAL », comme il animera également un séminaire sur la langue et la littérature amazighes sous forme de conférences complémentaires au sein de l’École des Hautes Études en Sciences Sociales (E.H.E.S.S.). Ce long itinéraire scientifique lui a permis de rassembler une somme d’éléments fondamentaux pour le développement de la langue et de la littérature amazighes.</p>\r\n<p>En 1988 il reçoit le titre de « Docteur Honoris Causa » à l’Université de la Sorbonne, à Paris. Avant sa mort, il accorde un long entretient à feu Tahar DJAOUT sur l’écriture comme espace identitaire.</p>\r\n<p>\r\nIl est décédé le 25 février 1989 -officiellement dans un accident de la circulation qui aurait eu lieu à 10 Km de la Wilaya de Aïn Defla- à son retour d’un colloque de Oujda (Maroc).</p>\r\n<p>\r\nIl meurt accidentellement le 27 février 1989 près d’Aïn Defla (Chlef à 200km d’Alger) en revenant d’un colloque sur la littérature organisé à l’Université d’Oujda au Maroc sur le thème : « Existe-t-il une spécificité en littérature ? ». L’autopsie officielle fait état d’un arbre qui serait tombé sur sa voiture.</p>\r\n<p>\r\nDepuis 1990, deux établissements publics portent fièrement son nom, il s’agit de l’Université de Tizi Ouzou et de la Maison de la Culture de la même ville. Le prix « Mouloud MAMMERI » a été créé au début des années 90, il est annuellement décerné pour récompenser la meilleure TAcirc;?uvre littéraire en langue Amazighe.</p>', '2006-05-24', '14:35:00', NULL),
(2, 'Mouloud feraoun', 'TADJENANET', '<p>Né le 8 mars 1913 dans le village de Tizi-Hibel (ancienne commune mixte de Fort-National), son nom est Aït-Chabane, Feraoun étant le nom attribué par l''état-civil français. Il fréquente l''école de Tizi-Hibel à partir de l''âge de 7 ans.</p>\r\n<p>\r\nEn 1928, il est boursier à l''Ecole Primaire Supérieure de Tizi-Ouzou. Il entre à l''Ecole Normale de Bouzaréa en 1932 où il fait la connaissance d''Emmanuel Roblès. En 1935, il est nommé instituteur à Tizi-Hibel où il épouse sa cousine Dehbia dont il aura 7 enfants. En 1946, il est muté à Taourirt-Moussa. En 1952, il est nommé directeur du Cours Complémentaire de Fort-National. En 1957, nommé directeur de l''Ecole Nador de Clos-Salembier, il quitte la Kabylie pour les hauteurs d''Alger.</p>\r\n<p>En 1951, il est en correspondance avec Albert Camus, le 15 juillet, il termine La terre et le sang récompensé en 1953 par le prix populiste.</p>\r\n<p>En 1960, il est Inspecteur des Centres Sociaux à Château-Royal près de Ben-Aknoun. Avec cinq de ses collègues, c''est là qu''il est assassiné par l''OAS le 15 mars 1962 à quatre jours du cessez-le-feu. Mouloud Feraoun a commencé son premier roman autobiographique Le fils du pauvre en 1939 ; il n''est publié qu''en 1950 à compte d''auteur. Ce n''est qu''en 1954 que Le Seuil le publie expurgé des 70 pages relatives à l''Ecole Normale de Bouzaréa. </p>\r\n<p>Les éditions du Seuil publient, en 1957, Les chemins qui montent, la traduction des Poèmes de Si Mohand étant éditée par les Editions de Minuit en 1960. Son Journal, rédigé de 1955 à 1962 est remis au Seuil en février 1962 et ne sera publié qu''après sa mort.</p>', '2006-05-24', '14:40:00', NULL),
(3, 'Albert Camus, Misère de la Kabylie, in L''Alger républicain, 1939', 'histoire.presse.fr', '<p>Par un petit matin, j''ai vu à Tizi-Ouzou des enfants en loques disputer à des chiens kabyles le contenu d''une poubelle. À mes questions, un Kabyle a répondu : « C''est tous les matins comme ça. » Un autre habitant m''a expliqué que l''hiver, dans le village, les habitants, mal nourris et mal couverts, ont inventé une méthode pour trouver le sommeil. Ils se mettent en cercle autour d''un feu de bois et se déplacent de temps en temps pour éviter l''ankylose. Et la nuit durant, dans le gourbi misérable, une ronde rampante de corps couchés se déroule sans arrêt. Ceci n''est sans doute pas suffisant puisque le Code forestier empêche ces malheureux de prendre le bois où il se trouve et qu''il n''est pas rare qu''ils se voient saisir leur seule richesse, l''âne croûteux et décharné qui servit à transporter les fagots. Les choses, dans la région de Tizi-Ouzou, sont d''ailleurs allées si loin qu''il a fallu que l''initiative privée s''en mêlât. Tous les mercredis, le sous-préfet, à ses frais, donne un repas à 50 petits Kabyles et les nourrit de bouillon et de pain. Après quoi, ils peuvent attendre la distribution de grains qui a lieu au bout d''un mois. Les sœurs blanches et le pasteur Rolland contribuent aussi à ces œuvres de charité.</p>\r\n\r\n<p>On me dira : « Ce sont des cas particuliers... C''est la crise, etc. Et, en tout cas, les chiffres ne veulent rien dire. » J''avoue que je ne puis comprendre cette façon de voir. Les statistiques ne veulent rien dire et j''en suis bien d''accord, mais si je dis que l''habitant du village d''Azouza que je suis allé voir faisait partie d''une famille de dix enfants dont deux seulement ont survécu, il ne s''agit point de chiffres ou de démonstration, mais d''une vérité criante et révélatrice. Je n''ai pas besoin non plus de donner le nombre d''élèves qui, dans les écoles autour de Fort-National, s''évanouissent de faim. Il me suffit de savoir que cela s''est produit et que cela se produira si l''on ne se porte pas au secours de ces malheureux. Il me suffit de savoir qu''à l''école de Talam-Aïach les instituteurs, en octobre passé, ont vu arriver des élèves absolument nus et couverts de poux, qu''ils les ont habillés et passés à la tondeuse. Il me suffit de savoir qu''à Azouza, parmi les enfants qui ne quittent pas l''école à 11 heures parce que leur village est trop éloigné, un sur soixante environ mange de la galette et les autres déjeunent d''un oignon ou de quelques figues.</p>\r\n\r\n<p>À Fort-National, à la distribution de grains, j''ai interrogé un enfant qui portait sur son dos le petit sac d''orge qu''on venait de lui donner.</p>\r\n\r\n<ul>\r\n<li>Pour combien de jours, on t''a donné ça ?</li>\r\n<li>Quinze jours.</li>\r\n<li>Vous êtes combien dans la famille ?</li>\r\n<li>Cinq.</li>\r\n<li>C''est tout ce que vous allez manger ?</li>\r\n<li>Oui.</li>\r\n<li>Vous n''avez pas de figues ?</li>\r\n<li>Non. Vous mettez de l''huile dans la galette ?</li>\r\n<li>Non. On met de l''eau.</li>\r\n</ul>\r\n\r\n<p>Et il est parti avec un regard méfiant.</p>\r\n\r\n<hr/>\r\n\r\n<p>Est-ce que cela ne suffit pas ? Si je jette un regard sur mes notes, j''y vois deux fois autant de faits révoltants et je désespère d''arriver à les faire connaître tous. Il le faut pourtant et tout doit être dit.</p>\r\n\r\n<p>Pour aujourd''hui, j''arrête ici cette promenade à travers la souffrance et la faim d''un peuple. On aura senti du moins que la misère ici n''est pas une formule ni un thème de méditation. Elle est. Elle crie et elle désespère. Encore une fois, qu''avons-nous fait pour elle et avons-nous le droit de nous détourner d''elle ?</p>', '2010-11-22', '09:00:00', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Articles`
--
ALTER TABLE `Articles`
  ADD PRIMARY KEY (`idArticle`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Articles`
--
ALTER TABLE `Articles`
  MODIFY `idArticle` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
