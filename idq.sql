-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2023 at 08:08 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `idq`
--

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `datenais` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `telephone` varchar(30) DEFAULT NULL,
  `pays` varchar(30) DEFAULT NULL,
  `sexe` varchar(30) DEFAULT NULL,
  `login` varchar(30) DEFAULT NULL,
  `mp` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`nom`, `prenom`, `datenais`, `email`, `telephone`, `pays`, `sexe`, `login`, `mp`) VALUES
('BABA', 'Adou', '12-06-1990', '', '699452398', 'Cameroun', 'Masculin', 'BabaDou', '1Z321'),
('DADA', 'Miguel', '22-01-1992', '', '2473984090', 'Tchad', 'Feminin', 'dada', 'qdft'),
('TACHUM', 'Doriane', '', '', '5677778', 'Cameroun', 'Feminin', '', ''),
('MBASSI', 'Leonel', '22-01-1992', '', '135729030', 'Canada', 'Masculin', 'mleaonel', 'EUTDVE'),
('WADJE ', 'Leonce', '22-01-1999', '', '656713409', 'Cameroun', 'Feminin', 'leonceW', '1234');
