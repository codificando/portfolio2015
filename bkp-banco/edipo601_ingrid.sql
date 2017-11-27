-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 27/11/2017 às 20:52
-- Versão do servidor: 5.5.51-38.2
-- Versão do PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `edipo601_ingrid`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(10) unsigned NOT NULL,
  `categoria` varchar(55) NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`) VALUES
(1, 'Humor'),
(2, 'Outros'),
(3, 'teste 3'),
(4, 'Teste Agr');

-- --------------------------------------------------------

--
-- Estrutura para tabela `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int(10) unsigned NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `comentario` text,
  `created` datetime DEFAULT NULL,
  `post_id` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `nome`, `email`, `comentario`, `created`, `post_id`) VALUES
(1, 'Ingrid', 'teste@exemplo.com', 'Muito interessante, parabÃƒÂ©ns!', '2015-05-26 18:57:08', 46),
(2, 'ZÃƒÂ© ninguÃƒÂ©m', 'blabla@teste.com.br', 'engraÃƒÂ§ado!', '2015-05-26 18:58:21', 45),
(6, 'Ingrid', 'teste@exemplo.com', 'Me ajudou bastante, valeu', '2015-05-26 19:30:43', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `contatos`
--

CREATE TABLE IF NOT EXISTS `contatos` (
  `id` int(10) unsigned NOT NULL,
  `nome` varchar(250) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `assunto_email` varchar(255) NOT NULL DEFAULT '',
  `menssagem` varchar(255) NOT NULL DEFAULT '',
  `captcha` varchar(45) NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `contatos`
--

INSERT INTO `contatos` (`id`, `nome`, `email`, `assunto_email`, `menssagem`, `captcha`) VALUES
(1, 'Ingrrid', 'ingrid@medeiros.com', 'Teste', '', ''),
(6, 'Ingrid Medeiros', 'test@test.com', 'bblablabla', 'hahahahahahaa', ''),
(7, 'Ãƒâ€°pido', 'exemplo@exe.com', 'Moiou', 'choraaaa', ''),
(8, 'gwrgwr', 'fef@fefe.com', 'te', 'terwgfwregwr', ''),
(9, 'Teste', 'i.smedeiros@hotmail.com', 'Teste', 'Oi', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `imagem` varchar(250) DEFAULT NULL,
  `categoria_id` int(10) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created`, `modified`, `imagem`, `categoria_id`) VALUES
(1, 'CSS3 Revolucionando a web', '<p>fsdfdsf</p>', '2016-06-25 21:54:44', '2016-06-25 21:54:44', '', 1),
(2, 'Vamos falar sobre CakePHP', '<p>fgdfgdgdf</p>', '2016-06-25 21:55:15', '2016-06-25 21:55:15', '', 1),
(3, 'Aproveitando ao mÃ¡ximo o framework JQuery', '<p>dfdsfsdf</p>', '2016-06-25 21:56:35', '2016-06-25 21:56:35', '', 1),
(4, 'UX, vocÃª realmente sabe o que Ã©?', '<p>fdgfgdf</p>', '2016-06-25 22:01:21', '2016-06-25 22:01:21', '', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `posts_tags`
--

CREATE TABLE IF NOT EXISTS `posts_tags` (
  `post_id` int(10) unsigned NOT NULL DEFAULT '0',
  `tag_id` int(10) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `posts_tags`
--

INSERT INTO `posts_tags` (`post_id`, `tag_id`) VALUES
(1, 6),
(3, 4),
(4, 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `projetos`
--

CREATE TABLE IF NOT EXISTS `projetos` (
  `id` int(10) unsigned NOT NULL,
  `imagem` varchar(255) NOT NULL DEFAULT '',
  `descricao` varchar(255) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `projetos`
--

INSERT INTO `projetos` (`id`, `imagem`, `descricao`, `tipo`) VALUES
(5, '5-port2.jpg', 'PortfÃ³lio pessoal, para divulgaÃ§Ã£o de trabalhos e serviÃ§os.', NULL),
(13, '1-02.png', '<b>Empresa:</b> CPID - Coordenadoria de Programas de InclusÃ£o Digital<br/><b>Sistema de Pesquisa: </b>Sistema web que tem por objetivo realizar pesquisas feitas na SEDUC Praia Grande,  gerando relatÃ³rios para a anÃ¡lise final do usuÃ¡rio.', NULL),
(14, 'dataxdoc.png', '<a href="https://www.dataxdoc.com.br">www.dataxdoc.com.br</a><br/>\r\n<b>Empresa: </b> Datacopy <br/>\r\nDataXdoc, uma das telas do sistema, no qual trabalhei tanto no designer quanto no front-end.', NULL),
(17, 'Sindisan_01.png', '<a href="www.sindisan.com.br" target="_blanck">www.sindisan.com.br</a><br/>\r\n<b>Empresa: </b> Kbr tec - SoluÃ§Ãµes Online<br/>\r\n<b>FunÃ§Ã£o: </b> Back-end</br>\r\n<b>Tecnologias: </b> PHP, MySQL, JQuery', NULL),
(18, '1 - HSS - Nova Home.png', '<a href="http://www.hardsystemsantos.com.br" target="_blank">www.hardsystemsantos.com.br</a><br/>\r\n<b>Empresa </b> Kbr tec - SoluÃ§Ãµes Online<br/>\r\n<b>FunÃ§Ã£o: </b> Front-end</br>\r\n<b>Tecnologias: </b> HTML5, CSS3, Sass, JQuery, Norato Framework.', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) unsigned NOT NULL,
  `nome` varchar(45) NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `tags`
--

INSERT INTO `tags` (`id`, `nome`) VALUES
(1, 'cakePhp'),
(2, 'Bootstrap'),
(4, 'Foundation'),
(5, 'OI'),
(6, 'Front-end');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) unsigned NOT NULL,
  `nome` varchar(45) NOT NULL DEFAULT '',
  `senha` varchar(9) NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `senha`) VALUES
(1, 'ingridmedeiros', 'mbikdu123');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `projetos`
--
ALTER TABLE `projetos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de tabela `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de tabela `projetos`
--
ALTER TABLE `projetos`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de tabela `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
