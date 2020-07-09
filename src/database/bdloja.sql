-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 10-Jul-2020 às 01:28
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdloja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcliente`
--

CREATE TABLE `tbcliente` (
  `idcliente` int(11) NOT NULL,
  `nomecliente` varchar(30) NOT NULL,
  `emailcliente` varchar(30) NOT NULL,
  `senhacliente` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbcliente`
--

INSERT INTO `tbcliente` (`idcliente`, `nomecliente`, `emailcliente`, `senhacliente`) VALUES
(1, 'Vitor Carmo', 'vitorv0071@gmail.com', '123456789'),
(2, 'Beatriz Vitória', 'beatrizvika@gmail.com', '987654321'),
(3, 'Julio Conceição', 'juliokun@yahoo.com', 'curtohentaidecasadas'),
(4, 'Brendo Carmo', 'brendo_carmo@gmail.com', '40028922'),
(5, 'Milton Souza', 'tioname2@yahoo.com', '985445449');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbitemvenda`
--

CREATE TABLE `tbitemvenda` (
  `iditemvenda` int(11) NOT NULL,
  `idvenda` int(11) NOT NULL,
  `idproduto` int(11) NOT NULL,
  `qtdeitemvenda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbproduto`
--

CREATE TABLE `tbproduto` (
  `idproduto` int(11) NOT NULL,
  `descproduto` varchar(70) NOT NULL,
  `valorproduto` double NOT NULL,
  `qtdeproduto` int(11) NOT NULL,
  `fotoproduto` varchar(200) DEFAULT NULL,
  `generoproduto` varchar(30) NOT NULL,
  `consoleproduto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbproduto`
--

INSERT INTO `tbproduto` (`idproduto`, `descproduto`, `valorproduto`, `qtdeproduto`, `fotoproduto`, `generoproduto`, `consoleproduto`) VALUES
(2, 'Death Stranding', 368.57, 268, 'img/product/2.jpg', 'Ação', 'Playstation'),
(3, 'God of War', 77.95, 86, 'img/product/3.jpg', 'Aventura', 'Playstation'),
(4, 'Skyrim', 169.99, 57, 'img/product/4.jpg', 'RPG', 'Pc Gamer'),
(5, 'Fortnite', 19.99, 74, 'img/product/5.jpg', 'Multiplayer', 'Pc Gamer'),
(6, 'Minecraft', 149.99, 60, 'img/product/6.jpg', 'Multiplayer', 'Pc Gamer'),
(7, ' Dota 2', 9.99, 143, 'img/product/7.jpg', 'Multiplayer', 'Pc Gamer'),
(8, 'Diablo III', 49.99, 56, 'img/product/8.jpg', 'Multiplayer', 'Pc Gamer'),
(9, 'Toram online', 7.5, 30, 'img/product/9.jpeg', 'RPG', 'Mobile'),
(10, 'Free Fire', 5, 28, 'img/product/10.jpeg', 'Multiplayer', 'Mobile'),
(11, 'Fifa 2019', 269.99, 600, 'img/product/11.jpeg', 'Esportes', 'Xbox'),
(12, 'A Way Out', 89, 9, 'img/product/12.jpg', 'Aventura', 'Pc Gamer'),
(13, 'Hollow Knight', 27.99, 100, 'img/product/13.jpeg', 'Aventura', 'Nintendo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbvenda`
--

CREATE TABLE `tbvenda` (
  `idvenda` int(11) NOT NULL,
  `datavenda` date NOT NULL,
  `valortotalvenda` double NOT NULL,
  `idcliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Índices para tabela `tbitemvenda`
--
ALTER TABLE `tbitemvenda`
  ADD PRIMARY KEY (`iditemvenda`);

--
-- Índices para tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD PRIMARY KEY (`idproduto`);

--
-- Índices para tabela `tbvenda`
--
ALTER TABLE `tbvenda`
  ADD PRIMARY KEY (`idvenda`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tbitemvenda`
--
ALTER TABLE `tbitemvenda`
  MODIFY `iditemvenda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `tbvenda`
--
ALTER TABLE `tbvenda`
  MODIFY `idvenda` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
