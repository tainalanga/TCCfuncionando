-- Adminer 4.6.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `imovel`;
CREATE TABLE `imovel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `limite_pessoas` int(11) NOT NULL,
  `fotos` varchar(255) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `universidades_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`),
  KEY `universidades_id` (`universidades_id`),
  CONSTRAINT `imovel_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`),
  CONSTRAINT `imovel_ibfk_2` FOREIGN KEY (`universidades_id`) REFERENCES `universidades` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `imovel_usuario_assoc`;
CREATE TABLE `imovel_usuario_assoc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `imovel_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`),
  KEY `imovel_id` (`imovel_id`),
  CONSTRAINT `imovel_usuario_assoc_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`),
  CONSTRAINT `imovel_usuario_assoc_ibfk_2` FOREIGN KEY (`imovel_id`) REFERENCES `imovel` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `universidades`;
CREATE TABLE `universidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `genero` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `data_nascimento` varchar(255) NOT NULL,
  `preferencias` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2018-05-23 19:39:21
