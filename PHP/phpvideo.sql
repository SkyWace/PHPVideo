-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 08, 2023 at 12:31 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpvideo`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `brithDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`id`, `firstname`, `surname`, `brithDate`) VALUES
(1, 'Matt', 'Damon', '1970-10-08'),
(2, 'Scarlett', 'Johansson', '1984-11-22'),
(3, 'Leonardo', 'DiCaprio', '1974-11-11');

-- --------------------------------------------------------

--
-- Table structure for table `belong`
--

CREATE TABLE `belong` (
  `id` int(11) NOT NULL,
  `id_MOVIES_INFOS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `belong`
--

INSERT INTO `belong` (`id`, `id_MOVIES_INFOS`) VALUES
(2, 1),
(2, 2),
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `text` varchar(500) NOT NULL,
  `id_MOVIES` int(11) NOT NULL,
  `id_USERS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `date`, `text`, `id_MOVIES`, `id_USERS`) VALUES
(1, '2023-04-20 09:51:45', 'super j\'ai adoré', 1, 1),
(2, '2023-04-20 12:02:55', 'pas ouf', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id`, `name`) VALUES
(1, 'adventure'),
(2, 'action'),
(3, 'comedy');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `filename`) VALUES
(12, 'et.jpg'),
(13, 'mario.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `image`, `link`) VALUES
(1, 'Les infiltrés', '', 'https://fr.wikipedia.org/wiki/Les_Infiltr%C3%A9s'),
(2, 'La mémoire dans la peau', '', 'https://fr.wikipedia.org/wiki/La_M%C3%A9moire_dans_la_peau_(film)'),
(3, 'ET', '', 'https://fr.wikipedia.org/wiki/E.T.,_l%27extra-terrestre'),
(9, 'a', 'z', 'e'),
(10, 'test', 'test', 'test'),
(11, 'mario', 'mario.jpeg', 'mario'),
(13, 'Z', '', 'Z1');

-- --------------------------------------------------------

--
-- Table structure for table `movies_infos`
--

CREATE TABLE `movies_infos` (
  `idMi` int(11) NOT NULL,
  `idMovie` int(11) NOT NULL,
  `synopsis` varchar(500) NOT NULL,
  `duration` int(11) NOT NULL,
  `releaseYear` int(11) NOT NULL,
  `pegi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movies_infos`
--

INSERT INTO `movies_infos` (`idMi`, `idMovie`, `synopsis`, `duration`, `releaseYear`, `pegi`) VALUES
(1, 1, 'Film qui parle d\'infiltration entre la police et un gang', 0, 0, 18),
(2, 2, 'Film d\'espionnage', 0, 0, 14),
(3, 3, 'Le film raconte l\'histoire d\'Elliott, un petit garçon solitaire qui se lie d\'amitié avec un extraterrestre abandonné sur Terre. Avec son frère et sa sœur, Elliott va le recueillir puis l\'aider à reprendre contact avec ses congénères, tout en essayant de le garder caché de leur mère et du gouvernement américain.', 0, 0, 6),
(4, 9, 'r', 0, 0, 1),
(5, 10, 'test', 0, 0, 1),
(6, 11, 'mario', 0, 0, 2),
(8, 13, 'Z', 3, 2, 16);

-- --------------------------------------------------------

--
-- Table structure for table `play`
--

CREATE TABLE `play` (
  `id` int(11) NOT NULL,
  `id_MOVIES` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `play`
--

INSERT INTO `play` (`id`, `id_MOVIES`) VALUES
(1, 1),
(3, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `realise`
--

CREATE TABLE `realise` (
  `id` int(11) NOT NULL,
  `id_REALS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `realise`
--

INSERT INTO `realise` (`id`, `id_REALS`) VALUES
(2, 1),
(3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `reals`
--

CREATE TABLE `reals` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `brithDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reals`
--

INSERT INTO `reals` (`id`, `firstname`, `surname`, `brithDate`) VALUES
(1, 'Doug', 'Liman', '1965-07-24'),
(2, 'Steven', 'Spielberg', '1946-12-18');

-- --------------------------------------------------------

--
-- Table structure for table `uers_infos`
--

CREATE TABLE `uers_infos` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `birthDate` date NOT NULL,
  `adress` varchar(100) NOT NULL,
  `telNumber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uers_infos`
--

INSERT INTO `uers_infos` (`id`, `idUser`, `birthDate`, `adress`, `telNumber`) VALUES
(1, 1, '1998-10-23', '59110', '0602517138');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `dateCreation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `surname`, `email`, `pwd`, `admin`, `dateCreation`) VALUES
(1, 'Maxime54', 'Maxime', 'Flo', 'max@max.fr', 'max', 1, '2023-04-20'),
(2, 'Lukaviron', 'Luka', 'Da Silva', 'luka@luka.fr', 'luka', 1, '2023-04-20'),
(3, 'Simon21', 'Simon', 'Delcoque', 'simon@simon.fr', 'simon', 0, '2023-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `id_MOVIES` int(11) NOT NULL,
  `id_USERS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`id`, `date`, `id_MOVIES`, `id_USERS`) VALUES
(1, '2023-04-20 09:52:17', 1, 1),
(2, '2023-04-20 09:52:50', 3, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `belong`
--
ALTER TABLE `belong`
  ADD PRIMARY KEY (`id`,`id_MOVIES_INFOS`),
  ADD KEY `BELONG_MOVIES_INFOS0_FK` (`id_MOVIES_INFOS`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `COMMENTS_MOVIES_FK` (`id_MOVIES`),
  ADD KEY `COMMENTS_USERS0_FK` (`id_USERS`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies_infos`
--
ALTER TABLE `movies_infos`
  ADD PRIMARY KEY (`idMi`),
  ADD KEY `movieid` (`idMovie`);

--
-- Indexes for table `play`
--
ALTER TABLE `play`
  ADD PRIMARY KEY (`id`,`id_MOVIES`),
  ADD KEY `PLAY_MOVIES0_FK` (`id_MOVIES`);

--
-- Indexes for table `realise`
--
ALTER TABLE `realise`
  ADD PRIMARY KEY (`id`,`id_REALS`),
  ADD KEY `REALISE_REALS0_FK` (`id_REALS`);

--
-- Indexes for table `reals`
--
ALTER TABLE `reals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uers_infos`
--
ALTER TABLE `uers_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`idUser`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `VIEWS_MOVIES_FK` (`id_MOVIES`),
  ADD KEY `VIEWS_USERS0_FK` (`id_USERS`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actors`
--
ALTER TABLE `actors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `movies_infos`
--
ALTER TABLE `movies_infos`
  MODIFY `idMi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reals`
--
ALTER TABLE `reals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uers_infos`
--
ALTER TABLE `uers_infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `belong`
--
ALTER TABLE `belong`
  ADD CONSTRAINT `BELONG_GENDER_FK` FOREIGN KEY (`id`) REFERENCES `gender` (`id`),
  ADD CONSTRAINT `BELONG_MOVIES_INFOS0_FK` FOREIGN KEY (`id_MOVIES_INFOS`) REFERENCES `movies_infos` (`idMi`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `COMMENTS_MOVIES_FK` FOREIGN KEY (`id_MOVIES`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `COMMENTS_USERS0_FK` FOREIGN KEY (`id_USERS`) REFERENCES `users` (`id`);

--
-- Constraints for table `movies_infos`
--
ALTER TABLE `movies_infos`
  ADD CONSTRAINT `movieid` FOREIGN KEY (`idMovie`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `play`
--
ALTER TABLE `play`
  ADD CONSTRAINT `PLAY_ACTORS_FK` FOREIGN KEY (`id`) REFERENCES `actors` (`id`),
  ADD CONSTRAINT `PLAY_MOVIES0_FK` FOREIGN KEY (`id_MOVIES`) REFERENCES `movies` (`id`);

--
-- Constraints for table `realise`
--
ALTER TABLE `realise`
  ADD CONSTRAINT `REALISE_MOVIES_FK` FOREIGN KEY (`id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `REALISE_REALS0_FK` FOREIGN KEY (`id_REALS`) REFERENCES `reals` (`id`);

--
-- Constraints for table `uers_infos`
--
ALTER TABLE `uers_infos`
  ADD CONSTRAINT `userid` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `views`
--
ALTER TABLE `views`
  ADD CONSTRAINT `VIEWS_MOVIES_FK` FOREIGN KEY (`id_MOVIES`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `VIEWS_USERS0_FK` FOREIGN KEY (`id_USERS`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
