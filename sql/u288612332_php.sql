-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 01-Maio-2016 às 15:27
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas`
--

CREATE TABLE IF NOT EXISTS `perguntas` (
`id` int(11) NOT NULL,
  `pergunta` varchar(500) CHARACTER SET utf8 NOT NULL,
  `resposta` varchar(60) CHARACTER SET utf8 NOT NULL,
  `modulo` varchar(30) CHARACTER SET utf8 NOT NULL,
  `valor` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `perguntas`
--

INSERT INTO `perguntas` (`id`, `pergunta`, `resposta`, `modulo`, `valor`) VALUES
(1, 'Consegue encontrar a flag? o robots pode te ajudar', 'HCTF{robots_include}', 'WEB1', 10),
(2, 'Explore o servidor e encontre a flag!...127.0.0.1', 'HCTF{brute_random_pin}', 'WEB2', 40),
(3, 'Entre no painel administrador e consiga a flag!', 'HCTF{javascript_encoding}', 'WEB3', 20),
(4, 'cb044d6509f10a08af02620bf5234e6e', 'HCTF{h34v3n}', 'CUSTOM1', 20),
(5, 'As flags tem esse padrao HCTF{primeira_de_muitas} responda para ver se compreendeu!', 'HCTF{primeira_de_muitas}', 'CUSTOM2', 10),
(9, 'SENURnszdV9zMzFfYjRzM182NH0=', 'HCTF{3u_s31_b4s3_64}', 'CUSTOM3', 30),
(6, '2E2E2E2E202D2E2D2E202D202E2E2D2E202E2E2E2E202E202D2E2E2D202D', 'HCTF{HEXMORSE}', 'CRIPTO1', 30),
(7, 'DYPB{ywaown_ydelan}', 'HCTF{caesar_cipher}', 'CRIPTO2', 10),
(8, 'key - heaven flag - cmgzrryi_cdtulv ', 'HCTF{vigenere_cipher}', 'CRIPTO3', 50),
(10, 'Concerte o arquivo e consiga a flag!.127.0.0.1/heaven.png', 'HCTF{r3v_20_binary}', 'REV1', 20),
(11, 'Esse arquivo contem uma hash que o levara para a flag,encont', 'HCTF{r3v_b4ckd00r_h3x}', 'REV2', 40),
(12, 'As extesoes podem confundir as vezes!', 'HCTF{png_is_pdf}', 'REV3', 30);

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas`
--

CREATE TABLE IF NOT EXISTS `respostas` (
`id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pergunta` int(11) NOT NULL,
  `respondeu` varchar(60) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id_user` int(11) NOT NULL,
  `nome` varchar(20) CHARACTER SET utf8 NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 NOT NULL,
  `usuario` varchar(20) CHARACTER SET utf8 NOT NULL,
  `senha` varchar(20) CHARACTER SET utf8 NOT NULL,
  `pontos` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `respostas`
--
ALTER TABLE `respostas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
