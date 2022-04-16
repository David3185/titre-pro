-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 16 avr. 2022 à 19:55
-- Version du serveur :  10.3.25-MariaDB-0ubuntu0.20.04.1
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `AllMovies`
--

-- --------------------------------------------------------

--
-- Structure de la table `Actor`
--

CREATE TABLE `Actor` (
  `id` int(255) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `age` int(11) NOT NULL,
  `nationality` varchar(45) NOT NULL,
  `biography` text NOT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Actor`
--

INSERT INTO `Actor` (`id`, `lastname`, `firstname`, `age`, `nationality`, `biography`, `photo`) VALUES
(1, 'Hanks', 'Tom', 65, 'Américain', 'Tom Hanks, de son vrai nom Thomas J. Hanks, grandit au sein d\'une famille recomposée. C\'est adolescent qu\'il découvre le théâtre : il comprend rapidement qu\'il vient de trouver sa vocation et qu\'il en fera son métier. En 1978, Tom Hanks met alors un terme à ses études et part pour New York afin de devenir acteur. C\'est avec Noces Sanglantes (1980) qu\'il fait ses premiers pas au cinéma. Se succèdent ensuite de multiples apparitions dans des séries télévisées jusqu\'en 1984, où il se fait remarquer sur grand écran aux côtés de Daryl Hannah dans Splash, une comédie Disney. Malgré ce premier succès, les films suivants ne seront pas des réussites. Il faut attendre 1988 et Big pour que sa carrière explose : spécialiste des comédies, il acquiert les faveurs du public, et du métier. En effet, l\'acteur obtient alors sa première nomination à l\'Oscar.\r\n\r\nC\'est en jouant un avocat homosexuel atteint du sida dans Philadelphia qu\'il reçoit son premier Oscar du Meilleur Acteur en 1993, et acquiert de ce fait la reconnaissance du public et de ses pairs. Il recevra une nouvelle statuette pour sa prestation dans Forrest Gump l\'année suivante ; privilège rarissime que seul le grand acteur américain Spencer Tracy possédait avant lui. Sous la direction de Ron Howard, Tom Hanks réussit la transition avec les Oscars puisque le film Apollo 13, récit de la conquête spatiale, fait un tabac. Il devient alors l\'\"acteur préféré des Américains\", un titre que les sondages lui attribueront à plusieurs reprises. Il est reconnu pour la diversité de son jeu, aussi à l\'aise dans les comédies que dans le drame. L\'acteur sort même des sentiers battus en prêtant sa voix au cowboy Woody dans Toy Story, le premier film tout en 3D réalisé par un jeune studio encore méconnu nommé Pixar...\r\n\r\nEn 1996, il passe de l\'autre côté de la caméra et réalise son premier film sur un groupe rock, That Thing you do, un essai bien maîtrisé. La rencontre entre Spielberg et Hanks lui donne la possibilité d\'affirmer une fois de plus son talent dans Il faut sauver le soldat Ryan. Deux ans plus tard, il retrouve à nouveau le cinéaste pour Arrête-moi si tu peux et partage l\'affiche avec une autre star, Leonardo DiCaprio. En 2000, il incarne dans Seul au monde de Zemeckis d\'après une idée de lui, un naufragé isolé pendant plusieurs années sur une île déserte à la suite d\'un crash aérien, ce qui lui vaudra le Golden Globe du meilleur acteur. Toujours présent à la télévision, Tom Hanks coproduit la série Frères d\'armes autour de la Seconde Guerre Mondiale, un succès aussi bien public que critique. Producteur avisé, il est de l\'aventure Mariage à la grecque, un des films indépendants les plus rentables de l\'histoire du cinéma. Une réussite néanmoins gâchée par les différends financiers qui suivront le succès du film, l\'acteur en réclamant une partie des bénéfices.\r\n\r\nIl change de registre en jouant un tueur à gages dans Les Sentiers de la perdition de Sam Mendes. L\'année 2003 s\'avère très prolifique pour Tom Hanks. Outre une troisième collaboration avec son ami Spielberg pour le tournage de The Terminal, il est à l\'affiche de la comédie des frères Coen, Ladykillers. Il retrouve également Zemeckis pour Le Pôle Express, film entièrement réalisé en motion capture permettant à l\'acteur d\'interpréter cinq personnages différents. Passionné d\'Histoire, il est également producteur de nombreux documentaires éducatifs, et prête souvent sa voix, comme dans De la Terre à la lune sur la conquête spatiale ou pour A History of Us sur l\'histoire des États-Unis. Il est également la voix officielle de plusieurs musées nationaux.\r\n\r\nEn 2006, il incarne le professeur Langdon dans le très attendu Da Vinci Code, adaptation du controversé roman de Dan Brown, qui fait l\'ouverture du Festival de Cannes 2006. L\'acteur touche pour cela un cachet colossal. En 2007, il entre timidement dans le cinéma engagé en jouant dans le biopic d\'un célèbre homme politique américain, La Guerre selon Charlie Wilson par Mike Nichols, où il côtoie Julia Roberts et Philip Seymour Hoffman. Lauréat de deux Oscars, il est nommé vice-président de la prestigieuse Académie des Arts et des Sciences du Cinéma (A.M.P.A.S.), après en avoir été le trésorier pendant de nombreuses années.\r\n\r\nEn 2009, Tom Hanks retrouve l\'univers fantastique de Ron Howard dans le thriller Anges et Démons, nouvelle adaptation du best-seller éponyme de Dan Brown. L\'année suivante, l\'acteur donne la part belle aux films d\'animation: producteur du film de Spike Jonze, Max et les maximonstres, il retrouve ensuite Woody, le célèbre cow boy de Toy Story, à qui il prête de nouveau sa voix dans le troisième et dernier volet de la saga, ainsi que dans le court-métrage dérivé de la saga Toy Story: Hawaiian Vacation (2011). 2010 est aussi l\'année de la diffusion de la série The Pacific, à laquelle participent Tom Hanks et Steven Spielberg en tant que producteurs exécutifs. Il repasse pour la deuxième fois derrière la caméra pour le film Il n\'est jamais trop tard, dans lequel il tient aussi le premier rôle, aux côtés de l\'actrice Julia Roberts. Il choisit cette fois-ci de mettre en scène un quinquagénaire bien décidé à changer de vie.\r\n\r\n\r\nEn 2011, on le retrouve dans le drame Extrêmement fort et incroyablement près et dans deux nouveaux courts-métrages issus de la trilogie Toy Story, Mini Buzz et Partysaurus Rex, dans lesquels il double une fois de plus Woody. L’année suivante, il réussit l’incroyable performance d’interpréter cinq rôles dans le film de science-fiction Cloud Atlas, avant de basculer vers des registres plus réalistes, en produisant Parkland sur l’assassinat du président Kennedy et en incarnant le Capitaine Phillips (2013), victime de la piraterie somalienne. Après avoir retrouvé une nouvelle fois Spielberg pour Le Pont des Espions (qui récolte cinq nominations aux Oscars et couronne Mark Rylance, mais oublie Tom Hanks), l\'acteur retrouve le costume de Robert Langdon pour Inferno, toujours adapté de Dan Brown. Il fait toutefois preuve de nouveauté en tournant pour la première fois pour Clint Eastwood et avec des cheveux blancs dans le très attendu Sully, l\'histoire vraie du pilote de ligne qui a sauvé ses passagers en amerrissant sur l\'Hudson, face à Manhattan.', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `Category`
--

CREATE TABLE `Category` (
  `id` int(255) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Category`
--

INSERT INTO `Category` (`id`, `name`) VALUES
(1, 'Action'),
(3, 'Aventure'),
(4, 'Comédie'),
(5, 'Comédie dramatique'),
(6, 'Guerre'),
(8, 'Drame'),
(9, 'Fantastique'),
(10, 'Policier'),
(11, 'Horreur'),
(12, 'Western'),
(13, 'Science-fiction'),
(14, 'Film d\'animation'),
(15, 'Documentaire'),
(16, 'Biopic'),
(17, 'Thriller');

-- --------------------------------------------------------

--
-- Structure de la table `Movie`
--

CREATE TABLE `Movie` (
  `id` int(255) NOT NULL,
  `name` varchar(128) NOT NULL,
  `director` varchar(45) NOT NULL,
  `release_date` date NOT NULL,
  `duration` int(255) NOT NULL,
  `synopsis` text NOT NULL,
  `rate` int(5) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `actor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Movie`
--

INSERT INTO `Movie` (`id`, `name`, `director`, `release_date`, `duration`, `synopsis`, `rate`, `photo`, `category_id`, `actor_id`) VALUES
(1, 'Les Bad Guys', 'Pierre Perifel', '2022-04-06', 100, 'LES BAD GUYS, la nouvelle comédie d’aventures de Dreamworks Animations, inspirée par la série éponyme de livres pour enfants à succès, met en scène une bande d’animaux, redoutables criminels de haut vol, qui sont sur le point de commettre leur méfait le plus éclatant : devenir des citoyens respectables.\r\n\r\nCes cinq compères sont tristement célèbres pour leurs aptitudes respectives au crime :\r\n\r\n- M. Loup, le fringant pickpocket\r\n- M. Serpent, le perceur de coffre forts blasé\r\n- M. Requin, l’expert en camouflage au sang très très froid\r\n- M. Piranha, le gros bras excessivement soupe au lait de la bande\r\n- Mlle Tarentule, la pirate informatique dont les talents de hacker sont aussi aiguisés que sa langue.\r\n\r\nMais après des années d’incalculables méfaits, ceux qui sont devenus sans conteste les malfrats les plus recherchés du monde, finissent par se faire arrêter. Mr Loup conclut alors un marché (qu’il n’a évidemment pas l’intention d’honorer) afin de s’éviter ainsi qu’à ses compères, bien des années en prison : les Bad Guys vont devenir honorables.\r\n\r\nSous la tutelle de leur nouveau mentor, un cochon d’Inde aussi adorable qu’arrogant, le Professeur Marmelade, les Bad Guys sont bien partis pour rouler leur monde et faire croire à tous qu’ils ont changé. Mais ce faisant, Mr Loup commence à comprendre que faire vraiment le bien pourrait être la clef de ce qui lui a toujours manqué : la reconnaissance. Alors qu’un nouveau méchant s’en prend à la ville, va-t-il pouvoir persuader ses acolytes de le suivre sur le chemin de la rédemption et de devenir enfin des gentils ?', 3, NULL, 14, NULL),
(2, 'Cloud atlas', 'Lana Wachowski', '2013-03-13', 165, 'À travers une histoire qui se déroule sur cinq siècles dans plusieurs espaces temps, des êtres se croisent et se retrouvent d’une vie à l’autre, naissant et renaissant successivement… Tandis que leurs décisions ont des conséquences sur leur parcours, dans le passé, le présent et l’avenir lointain, un tueur devient un héros et un seul acte de générosité suffit à entraîner des répercussions pendant plusieurs siècles et à provoquer une révolution. Tout, absolument tout, est lié.', 4, NULL, 13, 1),
(3, 'Le terminal', 'Steven spielberg', '2004-09-15', 128, 'Viktor Navorski est l\'un de ces milliers de touristes, venus des quatre coins du monde, qui débarquent chaque jour à l\'Aéroport JFK de New York. Mais, à quelques heures de son arrivée, voilà qu\'un coup d\'État bouleverse sa petite république d\'Europe Centrale, mettant celle-ci au ban des nations et faisant de Viktor... un apatride. Les portes de l\'Amérique se ferment devant lui, alors même que se bouclent les frontières de son pays : Viktor est bel et bien coincé...', 4, NULL, 5, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Actor`
--
ALTER TABLE `Actor`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Movie`
--
ALTER TABLE `Movie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appartient à` (`category_id`),
  ADD KEY `jouer par` (`actor_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Actor`
--
ALTER TABLE `Actor`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `Category`
--
ALTER TABLE `Category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `Movie`
--
ALTER TABLE `Movie`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Movie`
--
ALTER TABLE `Movie`
  ADD CONSTRAINT `appartient à` FOREIGN KEY (`category_id`) REFERENCES `Category` (`id`),
  ADD CONSTRAINT `jouer par` FOREIGN KEY (`actor_id`) REFERENCES `Actor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
