-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 01 Décembre 2022 à 10:04
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `portfolio-pro4`
--
CREATE DATABASE IF NOT EXISTS `portfolio-pro4` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `portfolio-pro4`;

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nav_title` varchar(20) COLLATE utf8_bin NOT NULL,
  `para_img` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT 'img/placeholder.png',
  `h1` varchar(30) COLLATE utf8_bin NOT NULL,
  `h2` varchar(60) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `description_img` varchar(50) COLLATE utf8_bin NOT NULL,
  `tab_type` varchar(40) COLLATE utf8_bin NOT NULL,
  `tab_genre` varchar(40) COLLATE utf8_bin NOT NULL,
  `tab_lang` varchar(40) COLLATE utf8_bin NOT NULL,
  `tab_engine` varchar(40) COLLATE utf8_bin NOT NULL,
  `tab_status` varchar(40) COLLATE utf8_bin NOT NULL,
  `tab_windows` tinyint(1) NOT NULL DEFAULT '0',
  `tab_mac` tinyint(1) NOT NULL DEFAULT '0',
  `tab_linux` tinyint(1) NOT NULL DEFAULT '0',
  `tab_html5` tinyint(1) NOT NULL DEFAULT '0',
  `tab_android` tinyint(1) NOT NULL DEFAULT '0',
  `showcase_img1` varchar(50) COLLATE utf8_bin NOT NULL,
  `showcase_img2` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `showcase_img3` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `showcase_img4` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `showcase_img5` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `download1` varchar(60) COLLATE utf8_bin NOT NULL,
  `download_text1` varchar(10) COLLATE utf8_bin NOT NULL,
  `download2` varchar(60) COLLATE utf8_bin NOT NULL,
  `download_text2` varchar(10) COLLATE utf8_bin NOT NULL,
  `download3` varchar(60) COLLATE utf8_bin NOT NULL,
  `download_text3` varchar(10) COLLATE utf8_bin NOT NULL,
  `easter_egg_id` int(11) DEFAULT '0',
  `pair_work` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `projects`
--

INSERT INTO `projects` (`id`, `user_id`, `nav_title`, `para_img`, `h1`, `h2`, `description`, `description_img`, `tab_type`, `tab_genre`, `tab_lang`, `tab_engine`, `tab_status`, `tab_windows`, `tab_mac`, `tab_linux`, `tab_html5`, `tab_android`, `showcase_img1`, `showcase_img2`, `showcase_img3`, `showcase_img4`, `showcase_img5`, `download1`, `download_text1`, `download2`, `download_text2`, `download3`, `download_text3`, `easter_egg_id`, `pair_work`) VALUES
(1, 1, 'Projet HTML+CSS', 'img/undertale/ut-4.jpg', 'Why Playing Undertale', 'Here\'s a non exhaustive list of reasons to play Undertale', 'This is the first project we had to do, a website with HTML and CSS.\nWe had to choose a game to create our sitte. We chose Undertale because we both love the product of Toby fox\'s mind.\nThe site present you a path across the world of Undertale. To each zone its reason to download the game. In this short journey, you\'ll meet a lot of funny characters, who you will gather once you\'ll have download Undertale !', 'img/undertale/ut-1.jpg', 'Website/School Project', 'Showcase Website', 'HTML/CSS', '//', 'finished, not hosted', 0, 0, 0, 1, 0, 'img/undertale/ut-1.jpg', 'img/undertale/ut-2.jpg', 'img/undertale/ut-3.jpg', 'img/undertale/ut-4.jpg', 'img/undertale/ut-5.jpg', '', '', '', '', '', '', 0, 1),
(2, 1, 'Frozen Heart', 'img/p2.png', 'Deltarune: Frozen Heart', 'The Weird Route seen from another location', 'When Kris fights Spamton NEO, he\'s alone. Ralsei\'s just talking to the Queen while his friend gets torn to pieces by a bootleg Mettaton NEO and Susie has gone to Noelle\'s room to talk to her. But what if Noelle, convinced the Player will call for her soon, would try to make Susie go at all cost?\r\n\r\nFrozen Heart will be a Deltarune fangame featuring Susie and Noelle in the Weird route of Chapter 2. Taking control of Susie\'s SOUL, you\'ll have to end Noelle\'s delirium caused by you if you don\'t want to loose an important member of the Deltarune cast.', 'img/frozen-heart/frozen-heart-1.png', 'Fangame', 'RPG/Bullet Hell', 'Lua', 'LÖVE2D (Kristal Engine)', 'In devlopment', 1, 1, 1, 0, 0, 'img/frozen-heart/frozen-heart-1.png', 'img/frozen-heart/frozen-heart-2.png', 'img/frozen-heart/frozen-heart-3.png', 'img/frozen-heart/frozen-heart-4.png', 'img/frozen-heart/frozen-heart-5.png', 'https://gamejolt.com/games/frozen-heart/659908', 'Gamejolt', '', '', '', '', 1, 0),
(3, 1, 'fuck you', 'img/fuck-you/frozen-heart-1.png', 'TEsting', 'this is a cool project ahah kill me please', 'Glasses are really versatile. First, you can have glasses-wearing girls take them off and suddenly become beautiful, or have girls wearing glasses flashing those cute grins, or have girls stealing the protagonist\'s glasses and putting them on like, "Haha, got your glasses!" That\'s just way too cute! Also, boys with glasses! I really like when their glasses have that suspicious looking gleam, and it\'s amazing how it can look really cool or just be a joke. I really like how it can fulfill all those abstract needs. Being able to switch up the styles and colors of glasses based on your mood is a lot of fun too! It\'s actually so much fun! You have those half rim glasses, or the thick frame glasses, everything! It\'s like you\'re enjoying all these kinds of glasses at a buffet. I really want Luna to try some on or Marine to try some on to replace her eyepatch. We really need glasses to become a thing in hololive and start selling them for HoloComi. Don\'t. You. Think. We. Really. Need. To. Officially. Give. Everyone. Glasses?', 'img/fuck-you/frozen-heart-3.png', '2010 humor', 'bullet hell witthout the bullet part', 'i don\'t know', 'SLEEPING BEAR', 'better not to know', 0, 0, 0, 1, 1, 'img/fuck-you/frozen-heart-4.png', 'img/fuck-you/frozen-heart-5.png', 'img/fuck-you/frozen-heart-6.png', 'img/fuck-you/frozen-heart-7.png', NULL, 'https://youareanidiot.cc/', 'YOU ARE', 'https://youareanidiot.cc/', 'AN', 'https://youareanidiot.cc/', 'IDIOT', 0, 1),
(4, 1, 'help', 'img/help/core.jpg', 'stoopid', 'I\'m-a tire', 'domestic violence pog', 'img/help/simbel-pdp-1.webp', 'pain', 'bullet hell witthout the bullet part', 'STATUE', 'mah brain', 'C H A I R', 0, 1, 0, 0, 0, 'img/help/bg_dw_castle_dojo.png', 'img/help/bg_dw_city_alley.png', 'img/help/bg_dw_city_sidewalk.png', 'img/help/bg_dw_mansion_stairs.png', NULL, '', '', '', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_bin NOT NULL,
  `email` varchar(40) COLLATE utf8_bin NOT NULL,
  `password` varchar(80) COLLATE utf8_bin NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `is_admin`) VALUES
(1, 'Simbel', 'simbel.user@gmail.com', 'ab08d9d71031e1e6c215040c419ea964e3e5928f', 1),
(2, 'Test', 'test@gmail.com', '1dcbdddddeedbce60659401b8fe6c254706b9a24', 0),
(3, 'ENA', 'weirdcore@chill.bro', 'be0f70fd8fae8c761b4ab1572ea9549f583c1dbd', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
