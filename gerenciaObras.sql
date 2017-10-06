-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 06, 2017 at 07:42 PM
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
  `empresaUsuario` varchar(45) NOT NULL,
  `nivelAcessoUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nomeUsuario`, `emailUsuario`, `senhaUsuario`, `enderecoUsuario`, `cpfUsuario`, `empresaUsuario`, `nivelAcessoUsuario`) VALUES
  (6, 'Francisco Matias', 'franciscomatias@alu.ufc.br', '81dc9bdb52d04dc20036dbd8313ed055', 'Rua A', '049.135.563-71', 'NUTS BR', 1),
  (7, 'Vandemberg Matias', 'vandembergneto@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Rua B', '049.135.563-71', 'TexRex', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
