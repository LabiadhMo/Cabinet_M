-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 09, 2018 at 04:53 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cabinet_medicale`
--

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

DROP TABLE IF EXISTS `consultation`;
CREATE TABLE IF NOT EXISTS `consultation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_consult` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `maladie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(2555) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fos_user`
--

DROP TABLE IF EXISTS `fos_user`;
CREATE TABLE IF NOT EXISTS `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `cin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_de_naissance` date NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `m` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `cin`, `date_de_naissance`, `prenom`, `nom`, `m`) VALUES
(13, 'admin', 'admin', 'admin@issatso.com', 'admin@issatso.com', 1, NULL, '$2y$13$AoRyGXBgeVQNHpXk1gC0O.9Se5tGEA2IxpQvbjSaD1XJ39z9wRS4G', '2018-09-24 12:51:49', 'nQapZVc6VQl7RAfXkZVmne0EhAzlXos0yh0Oolhfg9A', NULL, 'a:1:{i:0;s:10:\"ROLE_ADMIN\";}', '', '2013-01-01', 'admin', 'admin', NULL),
(21, 'Docteur', 'docteur', 'Docteur@issatso.com', 'docteur@issatso.com', 1, NULL, '$2y$13$EOofmBma5kXuaJrvJBrTGeQNHMqjyGaHLBrNkkOctGaFXyewELNaK', '2018-10-22 14:51:19', NULL, NULL, 'a:2:{i:0;s:11:\"ROLE_DOCTOR\";i:1;s:14:\"ROLE_ASSISTANT\";}', '', '2013-01-01', 'SPECIALIST', 'DOC', NULL),
(22, 'Assistante', 'assistante', 'Assistante@issatso.com', 'assistante@issatso.com', 1, NULL, '$2y$13$PH6aql3R5pSBTnpLk.MjtOo4AGxLAJcfueH6TbdwWJMehy3tJKkuO', '2018-09-29 10:29:57', NULL, NULL, 'a:1:{i:0;s:14:\"ROLE_ASSISTANT\";}', '', '2013-01-01', 'SPECIALIST', 'ASSIS', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mutuelle`
--

DROP TABLE IF EXISTS `mutuelle`;
CREATE TABLE IF NOT EXISTS `mutuelle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valide` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `identificateur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caisse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `r_d_v`
--

DROP TABLE IF EXISTS `r_d_v`;
CREATE TABLE IF NOT EXISTS `r_d_v` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `num_tel` int(11) NOT NULL,
  `date_rdv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seance` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
