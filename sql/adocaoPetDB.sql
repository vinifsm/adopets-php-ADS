-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Jun-2022 às 03:16
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `adocao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `animal`
--

CREATE TABLE `animal` (
  `id` int(11) NOT NULL,
  `tipoanimal` varchar(30) NOT NULL,
  `descricaoanimal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `animal`
--

INSERT INTO `animal` (`id`, `tipoanimal`, `descricaoanimal`) VALUES
(1, 'Cachorro', 'É um canino'),
(2, 'Gato', 'É um felino'),
(4, 'Hamster', 'É um roedor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pet`
--

CREATE TABLE `pet` (
  `id` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `idade` int(11) NOT NULL,
  `animal` int(11) NOT NULL,
  `protetor` int(11) NOT NULL,
  `raca` int(11) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `porte` varchar(1) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `imagem` varchar(33) NOT NULL,
  `estado` varchar(1) NOT NULL DEFAULT 'L',
  `adotador` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pet`
--

INSERT INTO `pet` (`id`, `nome`, `idade`, `animal`, `protetor`, `raca`, `sexo`, `porte`, `descricao`, `imagem`, `estado`, `adotador`) VALUES
(1, 'Tico', 9, 1, 17, 10, 'M', 'M', 'Super dócil, não liga para outros animais e gosta de crianças. Tico tem problema de pele assim como todo Bull terrier, e pelo seu estado não pode tomar sol.', 'images/1.jpeg', 'L', 0),
(2, 'Cacau', 2, 1, 1, 4, 'F', 'M', 'Oi pessoal, sou a Cacau!\r\nSou muito inteligente, faço tudo certinho no jornal, alegre, sociável. Vou ser entregue castrada. Gosto de brincar de bolinha.', 'images/2.jpeg', 'L', 0),
(3, 'Jade', 2, 1, 12, 4, 'F', 'G', 'Oi, sou a Jade, fui resgatada de maus tratos e era muito assustada, mas como vocês pode ver pelas fotos já me recuperei 100%.\r\nAgora só falta eu ganhar um lar para encher de muito amor. Eu sou muito alegre e adoro brincar', 'images/3.png', 'L', 0),
(4, 'Fred', 1, 2, 17, 4, 'M', 'M', 'Um lindo gatinho jovenzinho, muito bonzinho e amoroso. Castrado, vacinado, microchipado e vermifugado.', 'images/4.jpg', 'L', 0),
(5, 'Tita', 1, 1, 1, 4, 'F', 'P', 'Tita tem 4 meses , foi resgatada e agora procura um lar ! Está vermifugada, castrada e é muito boazinha , gosta de outros animais e crianças. ', 'images/5.jpeg', 'L', 2),
(6, 'Nina', 1, 1, 17, 6, 'F', 'P', 'Olá muito prazer, sou a Chica. Tenho oito meses de pura fofura e gostosura. Você vai se apaixonar. Sou castrada e vacina', 'images/8.jpg', 'L', 1),
(7, 'Caio', 2, 2, 1, 3, 'M', 'M', 'Sou o Caio estou castrado, vermifugado e tenho 1 ano e procuro um lar seguro e com bastante amor ! Sou bonzinho e gosto de colo e brincar !', 'images/9.jpg', 'L', 0),
(8, 'Rubens', 3, 1, 1, 4, 'M', 'G', 'Rubens foi vítima de maus tratos, mestiço pitbull, super dócil, muito elétrico, forte e ideal para lugares com espaço', 'images/10.jpeg', 'L', 0),
(20, 'Gabriel', 2, 1, 20, 4, 'M', 'M', 'Gabriel é um, cachorro', './images/2022.06.23-02.32.48jpeg', 'L', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `raca`
--

CREATE TABLE `raca` (
  `id` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `raca` varchar(30) NOT NULL,
  `descricaoraca` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `raca`
--

INSERT INTO `raca` (`id`, `tipo`, `raca`, `descricaoraca`) VALUES
(1, 1, 'Border Collie', 'Cachorro do reino unido'),
(2, 1, 'Golden Retriever', 'É uma raça de cão'),
(3, 2, 'Siames', 'Gatito'),
(4, 1, 'Sem Raça Definida', 'Vira-Lata'),
(5, 2, 'Sem Raça Definida', 'Vira-Lata'),
(6, 1, 'Pinscher', 'É um Pinscher'),
(10, 1, 'Bull terrier', 'Canino');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `login` varchar(30) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nivel` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `login`, `telefone`, `password`, `nivel`) VALUES
(0, 'Vazio', 'Vazio', 'Vazio', 'Vazio', 0),
(1, 'Vinícius Fernando', 'user@gmail.com', '18997501270', '202cb962ac59075b964b07152d234b70', 1),
(2, 'Admin', 'admin@gmail.com', '18997754246', '21232f297a57a5a743894a0e4a801fc3', 2),
(12, 'Loki', 'loki', 'loki', 'e64cfa3fd59e32df57003c7401f48c99', 1),
(13, 'a', 'a', '45', 'e369853df766fa44e1ed0ff613f563bd', 1),
(14, 's', 's@s', 'a', '0cc175b9c0f1b6a831c399e269772661', 1),
(15, 'Zeeb', 'user@live.com', '11997408090', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(16, 'a', 'a@a.com', '11111111111', '90f077d7759d0d4d21e6867727d4b2bd', 1),
(17, 'Larissa', 'larissamelo_brito@hotmail.com', '7414714112', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(20, 'Lari', 'lari.brito@gmail.com', '18996363700', '2475c20d9e9a1aaee80dcbc4e6316157', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pet_animal` (`animal`),
  ADD KEY `protetor_pet` (`protetor`),
  ADD KEY `raca_pet` (`raca`),
  ADD KEY `adotador_pet` (`adotador`);

--
-- Índices para tabela `raca`
--
ALTER TABLE `raca`
  ADD PRIMARY KEY (`id`),
  ADD KEY `raca_animal` (`tipo`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `animal`
--
ALTER TABLE `animal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `pet`
--
ALTER TABLE `pet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `raca`
--
ALTER TABLE `raca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `pet`
--
ALTER TABLE `pet`
  ADD CONSTRAINT `adotador_pet` FOREIGN KEY (`adotador`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `animal_pet` FOREIGN KEY (`animal`) REFERENCES `animal` (`id`),
  ADD CONSTRAINT `protetor_pet` FOREIGN KEY (`protetor`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `raca_pet` FOREIGN KEY (`raca`) REFERENCES `raca` (`id`);

--
-- Limitadores para a tabela `raca`
--
ALTER TABLE `raca`
  ADD CONSTRAINT `raca_animal` FOREIGN KEY (`tipo`) REFERENCES `animal` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
