-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 03, 2018 at 01:29 AM
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
-- Database: `personas`
--
CREATE DATABASE IF NOT EXISTS `personas` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `personas`;

-- --------------------------------------------------------

--
-- Table structure for table `persona`
--

DROP TABLE IF EXISTS `persona`;
CREATE TABLE IF NOT EXISTS `persona` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(10) UNSIGNED NOT NULL,
  `ciudadnatal` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `ocupacion` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `persona`
--

INSERT INTO `persona` (`id`, `nombre`, `apellido`, `edad`, `ciudadnatal`, `ocupacion`) VALUES
(1, 'Samuel', 'Brown', 27, 'Nueva York', 'Empresario'),
(2, 'Alfredo', 'Davis', 26, 'Denver', 'Empresario'),
(3, 'William', 'Lowell', 15, 'Los Ángeles', 'Estudiante'),
(4, 'Frank', 'Byrne', 16, 'Los Ángeles', 'Estudiante'),
(5, 'Akemi', 'Aoyama', 23, 'Kyoto', 'Pintor'),
(6, 'Dai', 'Yoshimura', 20, 'Kyoto', 'Cocinero'),
(7, 'Isabelle', 'Smith', 18, 'Londres', 'Estudiante'),
(8, 'Andrea', 'White', 17, 'Londres', 'Estudiante');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
