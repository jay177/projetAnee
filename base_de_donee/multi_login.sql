-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 04 juin 2021 à 17:43
-- Version du serveur :  5.7.32
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données : `multi_login`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(1, 'jarrel', 'jarrel2001@gmail.com', 'admin', 'cd44901888ec280742144593c0f67ab0'),
(4, 'bob', 'bob@gmail.com', 'user', 'cf18ae715f07dc71c034decd1c62cd5a'),
(5, 'charlotte', 'charlotte@gmail.com', 'user', '900150983cd24fb0d6963f7d28e17f72'),
(9, 'charlotte', 'charlotte@gmail.com', 'user', '900150983cd24fb0d6963f7d28e17f72'),
(10, 'charlotte', 'charlotte@gmail.com', 'user', '900150983cd24fb0d6963f7d28e17f72'),
(11, 'charlotte', 'charlotte@gmail.com', 'user', '900150983cd24fb0d6963f7d28e17f72');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;