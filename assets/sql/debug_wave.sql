-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 05-Maio-2023 às 08:06
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `debug_wave`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_participante`
--

DROP TABLE IF EXISTS `tb_participante`;
CREATE TABLE IF NOT EXISTS `tb_participante` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sala` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `torneio` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `time` varchar(225) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `modaljesp` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `foco` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_participante`
--

INSERT INTO `tb_participante` (`id`, `nome`, `sala`, `torneio`, `time`, `modaljesp`, `foco`) VALUES
(1, 'Rafaela Oliveira Barbosa', '3JODI', 'interclasse', 'LOUD', 'nulo', 'volei'),
(2, 'Anna Gomes Cunha', '3MAD', 'interclasse', 'LOUD', 'nulo', 'volei'),
(3, 'Julian Castro Rodrigues', '3DES', 'interclasse', 'OS BAGAÇADORES DE LARANJA', 'nulo', 'futsal'),
(4, 'Gabriel Correia Almeida', '3DES', 'interclasse', 'OS BAGAÇADORES DE LARANJA', 'nulo', 'futsal'),
(5, 'Lavinia Sousa Barros', '1JODI', 'jeesp', 'Etec de Peruíbe', 'futsal', 'nulo'),
(6, 'Isabella Dias Ferreira', '1JODI', 'jeesp', 'Etec de Peruíbe', 'futsal', 'nulo'),
(7, 'Arthur Correia Rocha', '2MAD', 'jeesp', 'Etec de Peruíbe', 'atletismo', 'nulo'),
(8, 'Dra. Carolina da Rosa', '2MAD', 'jeesp', 'Etec de Peruíbe', 'atletismo', 'nulo'),
(9, 'Calebe Gonçalves', '2DES', 'jeesp', 'Etec de Peruíbe', 'volei', 'nulo'),
(10, 'Ana Laura Castro', '2DES', 'jeesp', 'Etec de Peruíbe', 'volei', 'nulo'),
(11, 'Dr. Davi Luiz Costela', '1MAD', 'jeesp', 'Etec de Peruíbe', 'xadrez', 'nulo'),
(12, 'Maitê Martins', '1MAD', 'jeesp', 'Etec de Peruíbe', 'xadrez', 'nulo'),
(13, 'Juliana da Conceição', '1DES', 'jeesp', 'Etec de Peruíbe', 'dama', 'nulo'),
(14, 'Rafaela Azevedo', '1DES', 'jeesp', 'Etec de Peruíbe', 'dama', 'nulo'),
(15, 'Lucas Fogaça', '2JODI', 'jeesp', 'Etec de Peruíbe', 'pingpong', 'nulo'),
(16, 'Fernando Carvalho', '2JODI', 'jeesp', 'Etec de Peruíbe', 'pingpong', 'nulo'),
(17, 'Luca Almeida Poes', '3DES', 'e-sports', 'Os Chinelos do Lab', 'nulo', 'lol'),
(18, 'Heitor Veida Salvidar', '3DES', 'e-sports', 'Os Chinelos do Lab', 'nulo', 'lol'),
(19, 'Eduardalo Norimunki Yasuo', '3DES', 'e-sports', 'Os Chinelos do Lab', 'nulo', 'lol'),
(20, 'Vetor Nounis ', '3DES', 'e-sports', 'Os Chinelos do Lab', 'nulo', 'lol'),
(21, 'Mendes Vallowshaudonwalls', '3JODI', 'e-sports', 'PAIN', 'nulo', 'lol'),
(22, 'Ricky Jhonson Edward Marcintinsonstilsky', '3JODI', 'e-sports', 'PAIN', 'nulo', 'lol');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_partida`
--

DROP TABLE IF EXISTS `tb_partida`;
CREATE TABLE IF NOT EXISTS `tb_partida` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tipo` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `modalidade` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `foco` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `time1` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `time2` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `hora` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `local` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_partida`
--

INSERT INTO `tb_partida` (`id`, `tipo`, `modalidade`, `foco`, `time1`, `time2`, `data`, `hora`, `local`) VALUES
(1, 'e-sports', 'nulo', 'lol', 'Os Chinelos do Lab', 'PAIN', '2023-05-06', '03:00', 'Banheiro da Etec de Peruíbe'),
(2, 'jeesp', 'xadrez', 'nulo', 'SpiroGira Team', 'A Rappa', '2023-05-24', '15:00', 'Brasil'),
(3, 'e-sports', 'nulo', 'fifa', 'TeamTerra', 'SpiroGira Team', '2023-05-04', '07:00', 'Casa do Paulinho');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_rank`
--

DROP TABLE IF EXISTS `tb_rank`;
CREATE TABLE IF NOT EXISTS `tb_rank` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `premiacao` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `modalidade` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `foto` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_rank`
--

INSERT INTO `tb_rank` (`id`, `nome`, `premiacao`, `modalidade`, `foto`) VALUES
(1, 'Rafaela Oliveira Barbosa', 'A melhor observadora', 'xadrez', NULL),
(2, 'Jonas Brother', 'Membro mais amável', 'lol', NULL),
(3, 'Terry Morgingsonly Joe', 'Abdômen mais trincado', 'dama', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_time`
--

DROP TABLE IF EXISTS `tb_time`;
CREATE TABLE IF NOT EXISTS `tb_time` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_time`
--

INSERT INTO `tb_time` (`id`, `nome`) VALUES
(1, 'Os Chinelos do Lab'),
(2, 'LOUD'),
(3, 'PAIN'),
(8, 'Etec de Peruíbe'),
(5, 'OS BAGAÇADORES DE LARANJA'),
(6, 'SpiroGira Team'),
(7, 'TeamTerra');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `senha` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`) VALUES
(1, 'admin@gmail.com', 'senhaforte123123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
