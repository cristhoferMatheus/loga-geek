-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Out-2019 às 19:11
-- Versão do servidor: 10.3.15-MariaDB
-- versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mvc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `action` varchar(1000) NOT NULL,
  `livros` varchar(1000) NOT NULL,
  `acessorios` varchar(1000) NOT NULL,
  `roupas` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `action`, `livros`, `acessorios`, `roupas`) VALUES
(1, 'sasuke', 'harry potter', 'chapeu de hokage', 'sanji');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(500) NOT NULL,
  `Snome` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `cpf` int(11) NOT NULL,
  `cidade` varchar(500) NOT NULL,
  `estado` varchar(500) NOT NULL,
  `login` varchar(500) NOT NULL,
  `senha` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `Snome`, `email`, `cpf`, `cidade`, `estado`, `login`, `senha`) VALUES
(2, 'cris', 'eu sei', 'crist@gmail.com', 54321, 'passo fundo', 'rs', 'cris@gmail.com', 'cris vai rodar'),
(0, 'monkey', 'D. luffy', 'cris@gmail.com', 4040, 'livramento', 'rs', 'cris@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `encomendas`
--

CREATE TABLE `encomendas` (
  `id` int(11) NOT NULL,
  `nPed` int(11) NOT NULL,
  `nomeS` varchar(1000) NOT NULL,
  `estado` varchar(1000) NOT NULL,
  `cidade` varchar(1000) NOT NULL,
  `endereco` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `encomendas`
--

INSERT INTO `encomendas` (`id`, `nPed`, `nomeS`, `estado`, `cidade`, `endereco`) VALUES
(0, 10, 'cris', 'rs', 'livramento', 'prado'),
(0, 10, 'cris', 'rs', 'livramento', 'simon');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `id` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `categoria` varchar(1000) NOT NULL,
  `nome` varchar(1000) NOT NULL,
  `unidades` int(11) NOT NULL,
  `descrição` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(1000) NOT NULL,
  `categoria` varchar(1000) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `unidades` int(11) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `preco` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `categoria`, `descricao`, `unidades`, `img`, `preco`) VALUES
(1, 'monkey d. luffy', 'roupa', 'roupa', 2, 'naruto.jpg', 0),
(7, 'zoro', 'bone', 'roupa', 4, 'naruto.jpg', 0),
(8, 'icario', 'roupa', 'roupa', 2, 'naruto.jpg', 10.1),
(9, 'vitor', 'chato', 'mala', 1, 'naruto.jpg', 10.1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `telefone` int(11) NOT NULL,
  `endereco` varchar(1000) NOT NULL,
  `senha` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `telefone`, `endereco`, `senha`) VALUES
(2, 'medina', 'lucelia.vieiraa@hotmail.com', 33333, 'prado', '123'),
(3, 'monkey d. luffy', 'cris@gmail.com', 55555, 'prado', 'gomugomu');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
