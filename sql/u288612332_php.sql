
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 30, 2016 at 01:56 AM
-- Server version: 10.0.20-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u759560044_ctf`
--

-- --------------------------------------------------------

--
-- Table structure for table `perguntas`
--

CREATE TABLE IF NOT EXISTS `perguntas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pergunta` varchar(60) NOT NULL,
  `resposta` varchar(60) NOT NULL,
  `modulo` varchar(30) NOT NULL,
  `valor` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `perguntas`
--

INSERT INTO `perguntas` (`id`, `pergunta`, `resposta`, `modulo`, `valor`) VALUES
(1, 'Consegue encontrar a flag? o robots pode te ajudar', 'HCTF{robots_include}', 'WEB1', 10),
(2, 'Explore o servidor e encontre a flag!...127.0.0.1', 'HCTF{brute_random_pin}', 'WEB2', 40),
(3, 'Entre no painel administrador e consiga a flag!', 'HCTF{javascript_encoding}', 'WEB3', 20),
(4, 'cb044d6509f10a08af02620bf5234e6e', 'HCTF{h34v3n}', 'CUSTOM1', 20),
(5, 'Bonus -- As flags tem esse padrão HCTF{primeira_de_muitas} r', 'HCTF{primeira_de_muitas}', 'CUSTOM2', 10),
(9, 'SENURnszdV9zMzFfYjRzM182NH0=', 'HCTF{3u_s31_b4s3_64}', 'CUSTOM3', 30),
(6, '2E2E2E2E202D2E2D2E202D202E2E2D2E202E2E2E2E202E202D2E2E2D202D', 'HCTF{HEXMORSE}', 'CRIPTO1', 30),
(7, 'DYPB{ywaown_ydelan}', 'HCTF{caesar_cipher}', 'CRIPTO2', 10),
(8, 'key - heaven flag - cmgzrryi_cdtulv ', 'HCTF{vigenere_cipher}', 'CRIPTO3', 50),
(10, 'Concerte o arquivo e consiga a flag!.127.0.0.1/heaven.png', 'HCTF{r3v_20_binary}', 'REV1', 20),
(11, 'Esse arquivo contem uma hash que o levara para a flag,encont', 'HCTF{r3v_b4ckd00r_h3x}', 'REV2', 40),
(12, 'As extensões confudem as vezes!', 'HCTF{png_is_pdf}', 'REV3', 30);

-- --------------------------------------------------------

--
-- Table structure for table `respostas`
--

CREATE TABLE IF NOT EXISTS `respostas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_pergunta` int(11) NOT NULL,
  `resposta` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `respostas`
--

INSERT INTO `respostas` (`id`, `id_user`, `id_pergunta`, `resposta`) VALUES
(10, 49, 1, '<?php?>'),
(19, 49, 4, 'decisão'),
(11, 49, 2, '1'),
(21, 49, 3, 'syntax'),
(23, 49, 5, 'heaven{c3rt1f1c4d0}');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pontos` int(11) NOT NULL,
  `id_pergunta` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=59 ;

--
-- Dumping data for table `users`
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;