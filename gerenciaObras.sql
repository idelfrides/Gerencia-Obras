-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 04, 2017 at 06:23 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gerenciaObras`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nomeUsuario` varchar(120) NOT NULL,
  `emailUsuario` varchar(60) NOT NULL,
  `senhaUsuario` varchar(32) NOT NULL,
  `enderecoUsuario` varchar(200) NOT NULL,
  `cpfUsuario` varchar(14) NOT NULL,
  `rgUsuario` int(11) NOT NULL,
  `empresaUsuario` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nomeUsuario`, `emailUsuario`, `senhaUsuario`, `enderecoUsuario`, `cpfUsuario`, `rgUsuario`, `empresaUsuario`) VALUES
(1, 'Idelfrides Jorge', '', 'idel@alu.ufc.br', '81dc9bdb52d04dc20036dbd8313ed055', 'rua conego joao 200 apt 101 Fortaleza - CE 60455305', '044.222.222-71', '2002002008829','OAS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpfUsuario_UNIQUE` (`cpfUsuario`),
  ADD UNIQUE KEY `emailUsuario_UNIQUE` (`emailUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
