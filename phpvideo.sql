-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : jeu. 08 juin 2023 à 15:06
-- Version du serveur : 5.7.34
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `phpvideo`
--

-- --------------------------------------------------------

--
-- Structure de la table `actors`
--

CREATE TABLE `actors` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `brithDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `actors`
--

INSERT INTO `actors` (`id`, `firstname`, `surname`, `brithDate`) VALUES
(1, 'Matt', 'Damon', '1970-10-08'),
(2, 'Scarlett', 'Johansson', '1984-11-22'),
(3, 'Leonardo', 'DiCaprio', '1974-11-11');

-- --------------------------------------------------------

--
-- Structure de la table `belong`
--

CREATE TABLE `belong` (
  `id` int(11) NOT NULL,
  `id_MOVIES_INFOS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `belong`
--

INSERT INTO `belong` (`id`, `id_MOVIES_INFOS`) VALUES
(2, 1),
(2, 2),
(1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `text` varchar(500) NOT NULL,
  `id_MOVIES` int(11) NOT NULL,
  `id_USERS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `date`, `text`, `id_MOVIES`, `id_USERS`) VALUES
(1, '2023-04-20 09:51:45', 'super j\'ai adoré', 1, 1),
(2, '2023-04-20 12:02:55', 'pas ouf', 3, 2);

-- --------------------------------------------------------

--
-- Structure de la table `gender`
--

CREATE TABLE `gender` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `gender`
--

INSERT INTO `gender` (`id`, `name`) VALUES
(1, 'adventure'),
(2, 'action'),
(3, 'comedy');

-- --------------------------------------------------------

--
-- Structure de la table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `image` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `movies`
--

INSERT INTO `movies` (`id`, `title`, `link`, `year`, `duration`, `image`) VALUES
(1, 'Les infiltrés', 'https://fr.wikipedia.org/wiki/Les_Infiltr%C3%A9s', 2006, 151, 0x696d672f6c65735f696e66696c747265732e6a706567),
(2, 'La mémoire dans la peau', 'https://fr.wikipedia.org/wiki/La_M%C3%A9moire_dans_la_peau_(film)', 2002, 119, 0x696d672f6d656d6f6972652e6a706567),
(3, 'ET', 'https://fr.wikipedia.org/wiki/E.T.,_l%27extra-terrestre', 1982, 120, 0x696d672f61666665742e6a7067);

-- --------------------------------------------------------

--
-- Structure de la table `movies_infos`
--

CREATE TABLE `movies_infos` (
  `id` int(11) NOT NULL,
  `idMovie` int(11) NOT NULL,
  `synopsis` varchar(500) NOT NULL,
  `pegi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `movies_infos`
--

INSERT INTO `movies_infos` (`id`, `idMovie`, `synopsis`, `pegi`) VALUES
(1, 1, 'Film qui parle d\'infiltration entre la police et un gang', 18),
(2, 2, 'Film d\'espionnage', 14),
(3, 3, 'Le film raconte l\'histoire d\'Elliott, un petit garçon solitaire qui se lie d\'amitié avec un extraterrestre abandonné sur Terre. Avec son frère et sa sœur, Elliott va le recueillir puis l\'aider à reprendre contact avec ses congénères, tout en essayant de le garder caché de leur mère et du gouvernement américain.', 6);

-- --------------------------------------------------------

--
-- Structure de la table `play`
--

CREATE TABLE `play` (
  `id` int(11) NOT NULL,
  `id_MOVIES` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `play`
--

INSERT INTO `play` (`id`, `id_MOVIES`) VALUES
(1, 1),
(3, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `realise`
--

CREATE TABLE `realise` (
  `id` int(11) NOT NULL,
  `id_REALS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `realise`
--

INSERT INTO `realise` (`id`, `id_REALS`) VALUES
(2, 1),
(3, 2);

-- --------------------------------------------------------

--
-- Structure de la table `reals`
--

CREATE TABLE `reals` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `brithDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reals`
--

INSERT INTO `reals` (`id`, `firstname`, `surname`, `brithDate`) VALUES
(1, 'Doug', 'Liman', '1965-07-24'),
(2, 'Steven', 'Spielberg', '1946-12-18');

-- --------------------------------------------------------

--
-- Structure de la table `uers_infos`
--

CREATE TABLE `uers_infos` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `birthDate` date NOT NULL,
  `adress` varchar(100) NOT NULL,
  `telNumber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `uers_infos`
--

INSERT INTO `uers_infos` (`id`, `idUser`, `birthDate`, `adress`, `telNumber`) VALUES
(1, 1, '1998-10-23', '59110', '0602517138');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `admin` tinyint(1) NOT NULL,
  `dateCreation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `prenom`, `nom`, `password`, `admin`, `dateCreation`) VALUES
(1, 'maxime@gmail.com', 'Maxi', 'Flo', 'max', 1, '2023-04-20'),
(2, 'Lukaviron', 'Luka', 'Da Silva', 'luka', 1, '2023-04-20'),
(10, 'simon@admin.fr', 'Simon', 'Admin', '$2y$10$1tCOjFDUIA558Sw04L0uyOx2J89/kf/vFy5IEUuNWiUH2kEcRb.kC', 1, '2023-06-08');

-- --------------------------------------------------------

--
-- Structure de la table `views`
--

CREATE TABLE `views` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `id_MOVIES` int(11) NOT NULL,
  `id_USERS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `views`
--

INSERT INTO `views` (`id`, `date`, `id_MOVIES`, `id_USERS`) VALUES
(1, '2023-04-20 09:52:17', 1, 1),
(2, '2023-04-20 09:52:50', 3, 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `belong`
--
ALTER TABLE `belong`
  ADD PRIMARY KEY (`id`,`id_MOVIES_INFOS`),
  ADD KEY `BELONG_MOVIES_INFOS0_FK` (`id_MOVIES_INFOS`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `COMMENTS_MOVIES_FK` (`id_MOVIES`),
  ADD KEY `COMMENTS_USERS0_FK` (`id_USERS`);

--
-- Index pour la table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `movies_infos`
--
ALTER TABLE `movies_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movieid` (`idMovie`);

--
-- Index pour la table `play`
--
ALTER TABLE `play`
  ADD PRIMARY KEY (`id`,`id_MOVIES`),
  ADD KEY `PLAY_MOVIES0_FK` (`id_MOVIES`);

--
-- Index pour la table `realise`
--
ALTER TABLE `realise`
  ADD PRIMARY KEY (`id`,`id_REALS`),
  ADD KEY `REALISE_REALS0_FK` (`id_REALS`);

--
-- Index pour la table `reals`
--
ALTER TABLE `reals`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `uers_infos`
--
ALTER TABLE `uers_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`idUser`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `VIEWS_MOVIES_FK` (`id_MOVIES`),
  ADD KEY `VIEWS_USERS0_FK` (`id_USERS`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actors`
--
ALTER TABLE `actors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `movies_infos`
--
ALTER TABLE `movies_infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `reals`
--
ALTER TABLE `reals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `uers_infos`
--
ALTER TABLE `uers_infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `views`
--
ALTER TABLE `views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `belong`
--
ALTER TABLE `belong`
  ADD CONSTRAINT `BELONG_GENDER_FK` FOREIGN KEY (`id`) REFERENCES `gender` (`id`),
  ADD CONSTRAINT `BELONG_MOVIES_INFOS0_FK` FOREIGN KEY (`id_MOVIES_INFOS`) REFERENCES `movies_infos` (`id`);

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `COMMENTS_MOVIES_FK` FOREIGN KEY (`id_MOVIES`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `COMMENTS_USERS0_FK` FOREIGN KEY (`id_USERS`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `movies_infos`
--
ALTER TABLE `movies_infos`
  ADD CONSTRAINT `movieid` FOREIGN KEY (`idMovie`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `play`
--
ALTER TABLE `play`
  ADD CONSTRAINT `PLAY_ACTORS_FK` FOREIGN KEY (`id`) REFERENCES `actors` (`id`),
  ADD CONSTRAINT `PLAY_MOVIES0_FK` FOREIGN KEY (`id_MOVIES`) REFERENCES `movies` (`id`);

--
-- Contraintes pour la table `realise`
--
ALTER TABLE `realise`
  ADD CONSTRAINT `REALISE_MOVIES_FK` FOREIGN KEY (`id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `REALISE_REALS0_FK` FOREIGN KEY (`id_REALS`) REFERENCES `reals` (`id`);

--
-- Contraintes pour la table `uers_infos`
--
ALTER TABLE `uers_infos`
  ADD CONSTRAINT `userid` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `views`
--
ALTER TABLE `views`
  ADD CONSTRAINT `VIEWS_MOVIES_FK` FOREIGN KEY (`id_MOVIES`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `VIEWS_USERS0_FK` FOREIGN KEY (`id_USERS`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
