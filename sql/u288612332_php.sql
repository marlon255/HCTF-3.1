-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 29-Abr-2016 às 08:28
-- Versão do servidor: 5.6.20-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u288612332_php`
--
CREATE DATABASE IF NOT EXISTS `u288612332_php` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `u288612332_php`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas`
--

CREATE TABLE IF NOT EXISTS `perguntas` (
`id` int(11) NOT NULL,
  `pergunta` varchar(60) NOT NULL,
  `resposta` varchar(60) NOT NULL,
  `modulo` varchar(30) NOT NULL,
  `valor` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `perguntas`
--

INSERT INTO `perguntas` (`id`, `pergunta`, `resposta`, `modulo`, `valor`) VALUES
(1, 'QUAL AS TAGS DO PHP?', '<?php?>', 'WEB1', 10),
(2, '$1 = 4; $2 = 5; $3 = 6 $4 = ?', '1', '', 40),
(3, 'You have an error in your SQL ____ ?', 'syntax', 'WEB2', 20),
(4, 'if e else são estrutura ed?', 'decisão', '', 5),
(5, 'Eu certifico que você consegue', 'heaven{c3rt1f1c4d0}', '', 30);

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas`
--

CREATE TABLE IF NOT EXISTS `respostas` (
`id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pergunta` int(11) NOT NULL,
  `resposta` varchar(60) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Extraindo dados da tabela `respostas`
--

INSERT INTO `respostas` (`id`, `id_user`, `id_pergunta`, `resposta`) VALUES
(10, 49, 1, '<?php?>'),
(19, 49, 4, 'decisão'),
(11, 49, 2, '1'),
(21, 49, 3, 'syntax'),
(23, 49, 5, 'heaven{c3rt1f1c4d0}');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id_user` int(11) NOT NULL,
  `nome` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pontos` int(11) NOT NULL,
  `id_pergunta` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=59 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id_user`, `nome`, `email`, `usuario`, `senha`, `pontos`, `id_pergunta`) VALUES
(48, 'j', 'jaum.123@hotmail.com', '1234es', '123', 50, 3),
(47, 'j', 'jaum.123@hotmail.com', '1234es', '1234qwe', 50, 3),
(46, 'gilmar', 'gilmarheavensilva@hotmail.com', 'heaven', 'kimimaro', 75, 6),
(49, 'hue', 'hue', 'hue', 'hue', 395, 1),
(50, 'Marlon', 'marlon.0255@gmail.com', 'marlon255', 'xb4723aa4', 0, 1),
(51, 'novo', 'novo', 'novo', 'novo', 105, 6),
(52, 'ComiVC', 'lalala@souhacker', 'hackergilmar', 'gilmarlindo', 0, 1),
(53, 'jooj', 'jooj', 'jooj', 'jooj', 0, 1),
(54, '0012', 'n', '123', '123', 0, 1),
(55, 'Gilmazin', 'gil@gmail.com', 'ctf_adm', 'admin', 0, 1),
(56, 'bb', 'bb', 'bb', 'bb', 690, 2),
(57, 'ola', 'ola', 'ola', 'ola', 10, 1),
(58, 'teste', 'teste@teste.com', 'teste', 'teste', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perguntas`
--
ALTER TABLE `perguntas`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `respostas`
--
ALTER TABLE `respostas`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perguntas`
--
ALTER TABLE `perguntas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `respostas`
--
ALTER TABLE `respostas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
