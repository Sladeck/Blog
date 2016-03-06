-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 06 Mars 2016 à 19:17
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `suprock`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `titre_article` varchar(65) NOT NULL,
  `date_article` date NOT NULL,
  `contenu_article` text NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_article`),
  KEY `auteur_article` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=64 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id_article`, `titre_article`, `date_article`, `contenu_article`, `id_user`) VALUES
(3, 'In This Moment', '0000-00-00', 'In This Moment est un groupe de metalcore, originaire de Los Angeles, en Californie. Le groupe, formé en 2005, se compose initialement de la chanteuse Maria Brink (en) et du guitariste Chris Howorth. Le batteur Jeff Fabb rejoint ensuite le groupe, ce dernier se nommant Dying Star. Mécontents de leur direction musicale, ils changent le nom du groupe en In This Moment et engagent deux nouveaux membres, le guitariste Blake Bunzel et le bassiste Josh Newell. Fin 2005, le bassiste Newell quitte le groupe et se voit remplacer par Pascual Romero, qui, en retour, est remplacé par Jesse Landry. Landry est remplacé par Kyle Konkiel en 2009, et ce dernier par Travis Johnson en 2010. Jeff Fabb et Blake Bunzel quittent le groupe en 2011,et sont remplacé par Tom Hane et Randy Weitzel, respectivement.', 1),
(4, 'Linkin Park', '0000-00-00', 'Linkin Park est un groupe de rock américain, originaire d''Agoura Hills, en Californie. Il est formé en 1996 et mené par Chester Bennington (chant), Mike Shinoda (chant, rap, guitare rythmique et clavier), Brad Delson (guitare solo), Dave Farrell (guitare basse), Rob Bourdon (batterie) et Joe Hahn (platines, effets et mixage).\r\n\r\nIl est propulsé au devant de la scène mondiale dès la sortie de son premier album Hybrid Theory, en 2000. Écoulé à plus de 24 millions d''exemplaires et certifié disque de diamant par la RIAA, celui-ci fait partie des albums les plus vendus du XXIe siècle et reste leur meilleure performance commerciale à ce jour1. En 2003, la sortie de l’album Meteora, suivi du DVD Live in Texas consolide leur place de groupe phare. Estimant avoir exploré toutes les directions qu''offraient le nu metal et le rapcore, le groupe décida de se tourner vers d''autres genres dans leur album suivant, Minutes to Midnight (2007), qui prend la tête des ventes dans 32 pays et se classa meilleure entrée de l''année aux États-Unis. Malgré la déstabilisation d’une partie de leur public, ils approfondirent encore leurs expérimentations avec l''album concept A Thousand Suns, sorti en 2010 et reconnu par certains critiques comme une œuvre majeure du rock expérimental. S''ils se rapprochèrent du rock électronique avec Living Things en 2012, leur dernier album The Hunting Party, sorti en juin 2014, s''éloigne radicalement des précédents opus avec des sonorités beaucoup plus brutes et agressives.', 2),
(34, 'SilverStein', '0000-00-00', 'Silverstein est un groupe de post-hardcore canadien form&eacute; en 2000 et originaire de Burlington en Ontario. Plus de 200 000 exemplaires de leur premier CD intitul&eacute; When Broken is Easily Fixed ont &eacute;t&eacute; &eacute;coul&eacute;s. En 2005, Silverstein revient avec un nouvel album, Discovering the Waterfront, suivi de 18 Candles the Early Years en 2006, Arrivals And Departures en 2007 et &quot;A Shipwreck In The Sand&quot; en 2009.', 1),
(61, 'Slipknot', '0000-00-00', 'Slipknot est un groupe am&eacute;ricain de heavy metal, principalement de nu metal, originaire de Des Moines, dans l''Iowa. Il est form&eacute; par le percussionniste Shawn Crahan et le bassiste Paul Gray. Le groupe se compose initialement de neuf membres : Sid Wilson, Paul Gray, Joey Jordison, Chris Fehn, James Root, Craig Jones, Shawn Crahan, Mick Thomson, et de Corey Taylor. Cependant, avec le d&eacute;c&egrave;s de Paul Gray le 24 mai 2010, et le d&eacute;part de Joey Jordison le 12 d&eacute;cembre 2013, le groupe d&eacute;nombre sept membres restants.\r\n\r\nSlipknot est connu pour leur image (num&eacute;ros, combinaisons, masques), leurs chansons agressives et leurs performances sc&eacute;niques chaotiques8,9. Le groupe se popularise en particulier gr&acirc;ce &agrave; la parution de leur premier album &eacute;ponyme en 1999. L''album suivant, paru en 2001 et intitul&eacute; Iowa popularise encore plus le groupe. &Agrave; la suite de leur premi&egrave;re pause, Slipknot revient en 2004 avec Vol. 3: (The Subliminal Verses), et une nouvelle fois en 2008 avec leur quatri&egrave;me album All Hope Is Gone, qui atteint la premi&egrave;re place du Billboard 200. Slipknot fait para&icirc;tre son cinqui&egrave;me, et premier en 6 ans, album studio intitul&eacute; .5: The Gray Chapter le 21 octobre 2014.', 1),
(62, 'Kiss', '0000-00-00', 'Kiss est un groupe de rock am&eacute;ricain originaire de New York, form&eacute; en janvier 19732 par le guitariste Paul Stanley (n&eacute; Stanley Harvey Eisen en 1952) et le bassiste Gene Simmons (Chaim Witz, n&eacute; en 1949). Tr&egrave;s populaire &agrave; travers le monde, notamment gr&acirc;ce &agrave; leurs maquillages, leurs costumes extravagants, leurs nombreux effets sp&eacute;ciaux sur sc&egrave;ne et la c&eacute;l&egrave;bre tr&egrave;s grande langue de Gene Simmons, Kiss a vendu plus de 40 millions d''albums aux &Eacute;tats-Unis, dont plus de 24 millions ont &eacute;t&eacute; certifi&eacute;s par la RIAA3 et plus de 150 millions &agrave; l''&eacute;chelle mondiale4 : ce qui font de Kiss un des artistes les plus vendeurs de l''histoire de la musique. Les enregistrements du groupe et de ses membres en solo leur permettent de r&eacute;colter 30 disques d''or, 9 disques de platine et 10 disques multi-platine pour les seuls &Eacute;tats-Unis5,6. Kiss est souvent reconnu pour ses produits d&eacute;riv&eacute;s qui se vendent en quantit&eacute; industrielle, si bien qu''en 2006 la &laquo; marque &raquo; Kiss est &eacute;valu&eacute;e &agrave; un milliard de dollars am&eacute;ricains7.', 1);

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE IF NOT EXISTS `commentaires` (
  `id_comm` int(11) NOT NULL AUTO_INCREMENT,
  `id_article` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `contenu_comm` text NOT NULL,
  `date_comm` date NOT NULL,
  PRIMARY KEY (`id_comm`),
  KEY `id_user` (`id_user`),
  KEY `id_article` (`id_article`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id_comm`, `id_article`, `id_user`, `contenu_comm`, `date_comm`) VALUES
(3, 3, 1, 'J''adore ce groupe ! Surtout la chanteuse Maria Brink, qu''est ce qu''elle est belle ! Et bon sang, quel scream *_* ! Juste magnifique ! "Whore" est ma préféré ;) !', '2016-02-11'),
(4, 4, 2, 'Linkin Park, un grand classique ! Par contre j''aime pas leurs derniers albums, ça ressemble de trop à de la pop/electro plus qu''autre chose... On veux du métal nous ! :D', '2016-03-01'),
(5, 3, 2, 'Maria Brink elle est trooooop belle ! En plus avec son tatouage sur son bras droit, juste magnifique ! Bon et c''est sur elle chante merveilleusement bien aussi ^^ !', '2016-03-06'),
(6, 34, 2, 'J''adore ce groupe, mais la voix du chanteur par en cacahuètes des fois xD !', '2016-03-09');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom_user` varchar(65) NOT NULL,
  `prenom_user` varchar(65) NOT NULL,
  `pseudo_user` varchar(65) NOT NULL,
  `mdp_user` varchar(65) NOT NULL,
  `mail_user` varchar(65) NOT NULL,
  `droit_user` int(11) NOT NULL DEFAULT '3',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id_user`, `nom_user`, `prenom_user`, `pseudo_user`, `mdp_user`, `mail_user`, `droit_user`) VALUES
(1, 'Ferreol', 'Clem', 'Cleol', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'clementine.ferreol@supinternet.fr', 1),
(2, 'Moulin', 'Guillaume', 'Killick', '93ef5dde44b5cb1d8f3795982ee918c64b7114f6', 'guillaume.moulin@supinternet.fr', 1),
(7, 'Jandeaux', 'Paul', 'TritonJoyeux', 'd311b1c8e5fe83187cf2d83c8e080dbcff9fc4ef', 'Paul.jandeaux@gmail.com', 3);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `commentaires_ibfk_2` FOREIGN KEY (`id_article`) REFERENCES `articles` (`id_article`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
