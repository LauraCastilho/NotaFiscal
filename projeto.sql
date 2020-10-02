-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Out-2020 às 06:13
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_nf`
--

CREATE TABLE `itens_nf` (
  `id` int(11) NOT NULL,
  `cod_produto` int(11) DEFAULT NULL,
  `num_nf` int(11) DEFAULT NULL,
  `qtde` int(11) DEFAULT NULL,
  `subtotal` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `itens_nf`
--

INSERT INTO `itens_nf` (`id`, `cod_produto`, `num_nf`, `qtde`, `subtotal`) VALUES
(24, 10, 23, 6, '24.00'),
(25, 10, 23, 1, '4.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota_fiscal`
--

CREATE TABLE `nota_fiscal` (
  `nf` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `valor_total` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `nota_fiscal`
--

INSERT INTO `nota_fiscal` (`nf`, `data`, `valor_total`) VALUES
(23, '2020-09-24', '28.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`) VALUES
(10, 'Chocolate', '4.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `Id` int(11) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Senha` varchar(50) DEFAULT NULL,
  `Usuario` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`Id`, `Email`, `Senha`, `Usuario`) VALUES
(1, 'fernandes@gmail.com', 'fernandes', 'fernandes'),
(2, 'jucilene@gmail.com', 'ju', 'jucilene');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `itens_nf`
--
ALTER TABLE `itens_nf`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cod_produto` (`cod_produto`),
  ADD KEY `num_nf` (`num_nf`);

--
-- Índices para tabela `nota_fiscal`
--
ALTER TABLE `nota_fiscal`
  ADD PRIMARY KEY (`nf`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `itens_nf`
--
ALTER TABLE `itens_nf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `nota_fiscal`
--
ALTER TABLE `nota_fiscal`
  MODIFY `nf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `itens_nf`
--
ALTER TABLE `itens_nf`
  ADD CONSTRAINT `itens_nf_ibfk_1` FOREIGN KEY (`cod_produto`) REFERENCES `produtos` (`id`),
  ADD CONSTRAINT `itens_nf_ibfk_2` FOREIGN KEY (`num_nf`) REFERENCES `nota_fiscal` (`nf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
