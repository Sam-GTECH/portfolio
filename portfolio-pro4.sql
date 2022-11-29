-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 29 Novembre 2022 à 17:14
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
  `para_img` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT 'img/placeholder.png',
  `h1` varchar(30) COLLATE utf8_bin NOT NULL,
  `h2` varchar(60) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `description_img` varchar(40) COLLATE utf8_bin NOT NULL,
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
  `showcase_img1` varchar(40) COLLATE utf8_bin NOT NULL,
  `showcase_img2` varchar(40) COLLATE utf8_bin NOT NULL,
  `showcase_img3` varchar(40) COLLATE utf8_bin NOT NULL,
  `showcase_img4` varchar(40) COLLATE utf8_bin NOT NULL,
  `showcase_img5` varchar(40) COLLATE utf8_bin NOT NULL,
  `download1` varchar(40) COLLATE utf8_bin NOT NULL,
  `download_text1` varchar(10) COLLATE utf8_bin NOT NULL,
  `download2` varchar(40) COLLATE utf8_bin NOT NULL,
  `download_text2` varchar(10) COLLATE utf8_bin NOT NULL,
  `download3` varchar(40) COLLATE utf8_bin NOT NULL,
  `download_text3` varchar(10) COLLATE utf8_bin NOT NULL,
  `easter_egg_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
(2, 'Test', 'test@gmail.com', '1dcbdddddeedbce60659401b8fe6c254706b9a24', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
