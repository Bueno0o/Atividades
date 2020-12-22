-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 22/12/2020 às 03h36min
-- Versão do Servidor: 5.5.20
-- Versão do PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `livraria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE IF NOT EXISTS `alunos` (
  `prontuario` int(10) NOT NULL,
  `nome` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `telefone` int(10) NOT NULL,
  PRIMARY KEY (`prontuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`prontuario`, `nome`, `email`, `telefone`) VALUES
(3002357, 'Gabriel Bueno', 'gbueno@gmail.com', 988479656),
(5619519, 'Marcia de Almeida Souza', 'marcia_almeida@gmail.com', 9419819),
(95111912, 'marcelinho', 'marcinhopvp@hotmail.com', 9819819);

-- --------------------------------------------------------

--
-- Estrutura da tabela `livreiro`
--

CREATE TABLE IF NOT EXISTS `livreiro` (
  `prontuario` int(10) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` int(10) NOT NULL,
  `corredor` int(10) NOT NULL,
  PRIMARY KEY (`prontuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `livreiro`
--

INSERT INTO `livreiro` (`prontuario`, `nome`, `email`, `telefone`, `corredor`) VALUES
(3059650, 'amanda', 'amandinhadorpg@gmail.com', 9119871, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE IF NOT EXISTS `livro` (
  `codigo` int(10) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) CHARACTER SET utf8 NOT NULL,
  `autor` varchar(100) CHARACTER SET utf8 NOT NULL,
  `editora` varchar(100) CHARACTER SET utf8 NOT NULL,
  `corredor` int(10) NOT NULL,
  `emprestimo` int(10) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=915812 ;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`codigo`, `titulo`, `autor`, `editora`, `corredor`, `emprestimo`) VALUES
(1656, 'O gato preto', 'Allan Pou', 'saraiva', 6, 0),
(915811, 'O menino do pijama', 'mauricio de souza', 'saraiva', 5, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `permissao` int(1) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `senha`, `permissao`) VALUES
(3002357, 'gbueno@gmail.com', '123456', 3),
(5619519, 'marcia_almeida@gmail.com', '123', 3),
(95111912, 'marcinhopvp@hotmail.com', '123', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
