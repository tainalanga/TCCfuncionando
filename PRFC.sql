-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 14/05/2018 às 16:41
-- Versão do servidor: 5.7.21-0ubuntu0.16.04.1
-- Versão do PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `PRFC`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cidade`
--

CREATE TABLE `cidade` (
  `nome` varchar(80) DEFAULT NULL,
  `cod_cidade` int(3) NOT NULL,
  `cod_estado` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `cidade`
--

INSERT INTO `cidade` (`nome`, `cod_cidade`, `cod_estado`) VALUES
('araquari', 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `estado`
--

CREATE TABLE `estado` (
  `sigla` varchar(2) DEFAULT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `cod_estado` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `locacao`
--

CREATE TABLE `locacao` (
  `cod_imovel` int(40) DEFAULT NULL,
  `cod_usuario` int(80) DEFAULT NULL,
  `dtfim` int(8) DEFAULT NULL,
  `dtinicio` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipuser`
--

CREATE TABLE `tipuser` (
  `cod_tipuser` int(11) NOT NULL,
  `desc_tipuser` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `universidade`
--

CREATE TABLE `universidade` (
  `cod_universidade` int(20) NOT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `cod_cidade` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Usuario`
--

CREATE TABLE `Usuario` (
  `cod_usuario` int(11) NOT NULL,
  `cod_cidade` int(3) DEFAULT NULL,
  `cidade_origem` int(3) DEFAULT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `sobrenome` varchar(40) DEFAULT NULL,
  `dt_nasc` int(8) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `senha` varchar(40) DEFAULT NULL,
  `preferencias` varchar(80) DEFAULT NULL,
  `telefone` int(13) DEFAULT NULL,
  `genero` varchar(150) DEFAULT NULL,
  `cod_tipuser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `Usuario`
--

INSERT INTO `Usuario` (`cod_usuario`, `cod_cidade`, `cidade_origem`, `nome`, `sobrenome`, `dt_nasc`, `email`, `senha`, `preferencias`, `telefone`, `genero`, `cod_tipuser`) VALUES
(1, 1, 1, 'elisa', 'laufer', NULL, 'elisa@gmail.com', '123', NULL, NULL, NULL, NULL),
(2, 1, 1, 'rafael', NULL, NULL, 'rafael@teset.com', '123', NULL, NULL, NULL, NULL),
(3, NULL, NULL, 'Rafael', 'Speroni', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, 'rafael', 'teste', 0, 'rafael@teset.com', '123', '', 0, '', NULL),
(5, NULL, NULL, '', '', 0, '', '', '', 0, '', NULL),
(6, NULL, NULL, '', '', 0, '', '', '', 0, '', NULL),
(7, NULL, NULL, '', '', 0, '', '', '', 0, '', NULL),
(8, NULL, NULL, 'Teste', 'Teste', 0, 'teste@teste', '1234', '', 0, '', NULL),
(9, NULL, NULL, 'j', 'j', 1990, 'jhh@f', 'j', 'j', 57474747, 'M', NULL),
(10, NULL, NULL, 'j', 'j', 1990, 'jhh@f', 'j', 'j', 57474747, 'M', NULL),
(12, NULL, NULL, 'j', 'jK', 1990, 'jhh@f', 'j', 'j', 57474747, 'M', NULL),
(13, NULL, NULL, 'j', 'jK', 1990, 'jhh@f', 'j', 'j', 57474747, 'M', NULL),
(14, NULL, NULL, 'j', 'jK', 1990, 'jhh@f', 'j', 'j', 57474747, 'M', NULL),
(15, NULL, NULL, 'tai', 'nara', 0, 'tai@gmail.com', '456123', '', 0, '', NULL),
(16, NULL, NULL, 'uhauhs@hsua.com', 'udshu', 0, 'uhas@hsua.com', 'dush', '', 0, '', NULL),
(17, NULL, NULL, 'QUALQUERCOISA', '2', 0, 'naotenho@email', '123', '', 0, '', NULL),
(18, NULL, NULL, '123', '123', 0, '123@123', '123', '', 0, '', NULL),
(19, NULL, NULL, 'TAINA', 'BSAHBH', 0, 'ASUAHS@SUAH.COM', 'SUHAHSU', '', 0, '', NULL),
(20, NULL, NULL, 'aloi', 'aloi', 0, 'aloi@hh', 'asd', '', 0, '', NULL),
(21, NULL, NULL, 'f', 'f', 0, 'f@g', 'ert', '', 0, '', NULL);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`cod_cidade`);

--
-- Índices de tabela `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`cod_estado`);

--
-- Índices de tabela `tipuser`
--
ALTER TABLE `tipuser`
  ADD PRIMARY KEY (`cod_tipuser`);

--
-- Índices de tabela `universidade`
--
ALTER TABLE `universidade`
  ADD PRIMARY KEY (`cod_universidade`),
  ADD KEY `cod_cidade` (`cod_cidade`);

--
-- Índices de tabela `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`cod_usuario`),
  ADD KEY `cod_cidade` (`cod_cidade`),
  ADD KEY `cidade_origem` (`cidade_origem`),
  ADD KEY `cod_tipuser` (`cod_tipuser`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `universidade`
--
ALTER TABLE `universidade`
  ADD CONSTRAINT `universidade_ibfk_1` FOREIGN KEY (`cod_cidade`) REFERENCES `cidade` (`cod_cidade`);

--
-- Restrições para tabelas `Usuario`
--
ALTER TABLE `Usuario`
  ADD CONSTRAINT `Usuario_ibfk_1` FOREIGN KEY (`cod_cidade`) REFERENCES `cidade` (`cod_cidade`),
  ADD CONSTRAINT `Usuario_ibfk_2` FOREIGN KEY (`cidade_origem`) REFERENCES `cidade` (`cod_cidade`),
  ADD CONSTRAINT `Usuario_ibfk_3` FOREIGN KEY (`cod_tipuser`) REFERENCES `tipuser` (`cod_tipuser`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
