-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Jan-2018 às 13:59
-- Versão do servidor: 10.1.26-MariaDB
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
-- Database: `clonewin_form`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `provice_of_mozambique`
--

CREATE TABLE `provice_of_mozambique` (
  `id` int(11) NOT NULL,
  `province` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `provice_of_mozambique`
--

INSERT INTO `provice_of_mozambique` (`id`, `province`) VALUES
(1, 'Maputo Cidade '),
(2, 'Maputo '),
(3, 'Gaza '),
(4, 'Inhambane '),
(5, 'Sofala '),
(6, 'Zambezia '),
(7, 'Nampula '),
(8, 'Niassa '),
(9, 'Cabo Delgado '),
(10, 'Tete '),
(11, 'Manica ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `provice_of_mozambique`
--
ALTER TABLE `provice_of_mozambique`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `provice_of_mozambique`
--
ALTER TABLE `provice_of_mozambique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
