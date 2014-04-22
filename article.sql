exemple_site.php
================
-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 23 Avril 2014 à 00:02
-- Version du serveur: 5.5.29
-- Version de PHP: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données: `article`
--

-- --------------------------------------------------------

--
-- Structure de la table `Article`
--

CREATE TABLE `Article` (
  `idArticle` int(255) NOT NULL AUTO_INCREMENT,
  `nom` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `idCategorie` int(11) NOT NULL,
  PRIMARY KEY (`idArticle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `Article`
--

INSERT INTO `Article` (`idArticle`, `nom`, `image`, `idCategorie`) VALUES
(5, 'bouddhas', 'bouddhas.JPG', 1),
(6, 'casquette', 'casquette.JPG', 3),
(7, 'casse tete', 'casse tete.JPG', 2),
(8, 'dvd', 'dvd.jpg', 3),
(9, 'mug', 'mug.jpg', 1),
(10, 'objets du tibet', 'objets du tibet.jpg', 1),
(11, 'verres', 'verres.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `Categorie`
--

CREATE TABLE `Categorie` (
  `idCategorie` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idCategorie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `Categorie`
--

INSERT INTO `Categorie` (`idCategorie`, `libelle`) VALUES
(1, 'objet'),
(2, 'jeux'),
(3, 'vie courante');
