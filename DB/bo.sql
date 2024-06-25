-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/06/2024 às 22:08
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bo`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `admin`
--

CREATE TABLE `admin` (
  `ida` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `senha` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `admin`
--

INSERT INTO `admin` (`ida`, `nome`, `senha`) VALUES
(1, 'm110', 1234);

-- --------------------------------------------------------

--
-- Estrutura para tabela `livro`
--

CREATE TABLE `livro` (
  `id_livro` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `arquivo` varchar(100) NOT NULL,
  `autor` varchar(30) NOT NULL,
  `pag` int(11) DEFAULT NULL,
  `link` text NOT NULL,
  `descricao` text NOT NULL,
  `destaque` varchar(20) NOT NULL,
  `categoria` text NOT NULL,
  `caminho` varchar(50) NOT NULL,
  `ida` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `livro`
--

INSERT INTO `livro` (`id_livro`, `nome`, `arquivo`, `autor`, `pag`, `link`, `descricao`, `destaque`, `categoria`, `caminho`, `ida`) VALUES
(1, 'porquê nós dormimos', '6670b3c6272fc', 'matthew walker', 368, 'https://www.mediafire.com/file/rn6n263ciyy2cvd/Por_que_nos_Dormimos.pdf/file', 'O livro que você tem em mãos, Por que nós dormimos, do neurocientista\r\nbritânico Matthew Walker, é uma saborosa introdução a essa nova ciência do\r\nsono e dos sonhos. Além de ser um dos mais relevantes pesquisadores\r\ncontemporâneos nesse campo, Walker tem grande talento para a\r\ncomunicação acessível e desprovida de jargões.\r\n                                        ', 'destaque', 'Auto Ajuda', 'capas/6670b3c6272fc.jpeg', 1),
(2, '+ esperto que o diabo', '667b183a79681', 'napoleon hill', 162, 'https://www.mediafire.com/file/p7twxhglnb457f7/Mais_Esperto_que_o_Diabo_-_Napoleon_Hill.pdf/file', '        O mais corajoso e inspirador de todos os livros de autoconhecimento,\r\nescrito pelo filósofo do sucesso número 1 da América, que, após trinta anos\r\nde pesquisas, achou o Diabo e arrancou dele uma confissão fantástica,\r\nrevelando onde ele mora, por que ele existe, como ele ganha o controle da\r\nmente das pessoas e o principal: como qualquer um pode vencê-lo. Este livro\r\né um curso generoso em psicologia, deixando claros os princípios de como\r\nfunciona a mente humana. Quando você terminar esta história do Diabo,\r\nvocê saberá muito mais sobre Deus.                    ', 'destaque', 'Auto Ajuda', 'capas/667b183a79681.png', 1),
(3, 'gente que convence', '667b1991b466c', 'eduardo ferraz', 227, 'https://www.mediafire.com/file/p50uzk75omw39je/Gente_que_Convence_-_Eduardo_Ferraz_-_MeuPDF.pdf/file', 'Esta obra é resultado da vivência prática do autor, aliada a anos\r\nde pesquisa em neurociência comportamental e psicologia\r\naplicada. Com uma escrita didática e estimulante, Eduardo\r\nacerta no alvo com o tema, pois muitas pessoas sentem\r\ndificuldade em alcançar aquilo que acreditam merecer. Mas\r\ncomo convencer alguém sobre algo se você não está\r\nsuficientemente convencido de suas próprias aptidões?\r\n                                        ', 'destaque', 'Desenvolvimento Pessoal', 'capas/667b1991b466c.png', 1),
(4, 'programador apaixonado', '667b1f878b363', 'chad fowler', 234, 'https://www.mediafire.com/file/lheoxd69mshaeuv/O_Programador_Apaixonado_-_Construindo_uma_carreira_notavel_em_desenvolvimento_de_software.pdf/file', 'Construindo carreira notável em desenvolvimento de software                               ', 'destaque', 'Programação', 'capas/667b1f878b363.png', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ida`),
  ADD UNIQUE KEY `senha` (`senha`);

--
-- Índices de tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`id_livro`),
  ADD KEY `ida` (`ida`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `ida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `id_livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `livro`
--
ALTER TABLE `livro`
  ADD CONSTRAINT `livro_ibfk_1` FOREIGN KEY (`ida`) REFERENCES `admin` (`ida`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
